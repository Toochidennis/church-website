<?php include __DIR__ . '/partials/head.php'; $active='Contact'; include __DIR__ . '/partials/nav.php'; ?>
<section class="max-w-4xl mx-auto px-6 py-12">
  <h1 class="font-display text-3xl">Contact Us</h1>
  <form x-data="{name:'',email:'',message:'',ok:false}" @submit.prevent="fetch('/admin/api.php?action=contact', {method:'POST', headers:{'Content-Type':'application/json'}, body: JSON.stringify({name,email,message})}).then(()=>ok=true)" class="mt-6 space-y-4">
    <div>
      <label class="block text-sm font-medium">Name</label>
      <input x-model="name" required class="w-full px-3 py-2 rounded border border-primary/20 focus:ring-2 focus:ring-accent">
    </div>
    <div>
      <label class="block text-sm font-medium">Email</label>
      <input type="email" x-model="email" required class="w-full px-3 py-2 rounded border border-primary/20 focus:ring-2 focus:ring-accent">
    </div>
    <div>
      <label class="block text-sm font-medium">Message</label>
      <textarea x-model="message" rows="5" required class="w-full px-3 py-2 rounded border border-primary/20 focus:ring-2 focus:ring-accent"></textarea>
    </div>
    <button class="px-4 py-2 rounded bg-primary text-white">Send</button>
    <p x-show="ok" class="text-green-700">Thank you. We will reach out soon.</p>
  </form>
  <div class="mt-10 h-64 rounded-lg border border-primary/10" id="map2"></div>
</section>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const m = L.map('map2').setView([7.868, 9.777], 12);
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(m);
  L.marker([7.868,9.777]).addTo(m).bindPopup('Cathedral House');
});
</script>
<?php include __DIR__ . '/partials/footer.php'; ?>
