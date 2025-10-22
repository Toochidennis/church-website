<?php include __DIR__ . '/partials/head.php'; $active='Donations'; include __DIR__ . '/partials/nav.php'; ?>
<section class="max-w-3xl mx-auto px-6 py-12">
  <h1 class="font-display text-3xl">Donations</h1>
  <p class="mt-3 text-primary/80">Support our mission. Choose an amount and a method. Payments are handled securely by Paystack or Flutterwave.</p>
  <form id="donationForm" class="mt-8 space-y-4" autocomplete="on">
    <div>
      <label class="block text-sm font-medium">Name</label>
      <input name="name" required class="w-full px-3 py-2 rounded border border-primary/20 focus:ring-2 focus:ring-accent" placeholder="Your Name">
    </div>
    <div>
      <label class="block text-sm font-medium">Email</label>
      <input type="email" name="email" required class="w-full px-3 py-2 rounded border border-primary/20 focus:ring-2 focus:ring-accent" placeholder="you@example.com">
    </div>
    <div class="grid sm:grid-cols-2 gap-4">
      <div>
        <label class="block text-sm font-medium">Amount (NGN)</label>
        <input type="number" name="amount" min="500" step="100" required class="w-full px-3 py-2 rounded border border-primary/20 focus:ring-2 focus:ring-accent" placeholder="5000">
      </div>
      <div>
        <label class="block text-sm font-medium">Purpose</label>
        <select name="purpose" class="w-full px-3 py-2 rounded border border-primary/20 focus:ring-2 focus:ring-accent">
          <option value="tithe">Tithe</option>
          <option value="offering">Offering</option>
          <option value="charity">Charity</option>
          <option value="projects">Projects</option>
        </select>
      </div>
    </div>
    <div class="flex items-center gap-3">
      <button type="button" id="paystackBtn" class="px-4 py-2 rounded bg-primary text-white">Pay with Paystack</button>
      <button type="button" id="flutterwaveBtn" class="px-4 py-2 rounded bg-accent text-white">Pay with Flutterwave</button>
    </div>
    <p id="donationError" class="text-sm text-red-700 hidden"></p>
  </form>

  <!-- Paystack & Flutterwave checkout scripts -->
  <script src="https://js.paystack.co/v2/inline.js"></script>
  <script src="https://checkout.flutterwave.com/v3.js"></script>
  <script>
  const form = document.getElementById('donationForm');
  const err = document.getElementById('donationError');
  function collectData(){
    const data = Object.fromEntries(new FormData(form).entries());
    data.amount = parseInt(data.amount, 10);
    if(!data.name || !data.email || !data.amount || data.amount < 500){
      err.textContent = 'Please fill out all fields. Amount must be at least ₦500.';
      err.classList.remove('hidden');
      return null;
    }
    err.classList.add('hidden');
    return data;
  }
  document.getElementById('paystackBtn').addEventListener('click', () => {
    const d = collectData(); if(!d) return;
    const paystack = new PaystackPop();
    paystack.newTransaction({
      key: 'pk_test_xxxxxxxx', // replace with your public key
      email: d.email,
      amount: d.amount * 100,
      currency: 'NGN',
      metadata: { custom_fields: [{ display_name: 'Purpose', variable_name: 'purpose', value: d.purpose }, {display_name: 'Donor', variable_name: 'name', value: d.name}]},
      onSuccess: (trx) => fetch('/admin/api.php?action=recordDonation', {method:'POST', headers:{'Content-Type':'application/json'}, body: JSON.stringify({provider:'paystack', reference:trx.reference, ...d})}).then(()=>alert('Thank you! Payment successful. Ref: '+trx.reference)),
      onCancel: () => err.textContent = 'Payment canceled.'
    });
  });
  document.getElementById('flutterwaveBtn').addEventListener('click', () => {
    const d = collectData(); if(!d) return;
    FlutterwaveCheckout({
      public_key: 'FLWPUBK_TEST-xxxxxxxxxxxxxxxxxxxxx-X',
      tx_ref: 'wukari-'+Date.now(),
      amount: d.amount,
      currency: 'NGN',
      payment_options: 'card,banktransfer,ussd',
      customer: {email: d.email, name: d.name},
      meta: {purpose: d.purpose},
      callback: function(res){ fetch('/admin/api.php?action=recordDonation', {method:'POST', headers:{'Content-Type':'application/json'}, body: JSON.stringify({provider:'flutterwave', reference:res.transaction_id, ...d})}).then(()=>alert('Thank you! Payment successful. Ref: '+res.transaction_id)); },
      onclose: function(){ err.textContent = 'Payment window closed.'; err.classList.remove('hidden'); },
      customizations: { title: 'Catholic Diocese of Wukari', description: d.purpose, logo: '/assets/img/hero.jpg' }
    });
  });
  </script>
</section>
<?php include __DIR__ . '/partials/footer.php'; ?>
