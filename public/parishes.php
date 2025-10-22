<?php include __DIR__ . '/partials/head.php'; $active='Parishes'; include __DIR__ . '/partials/nav.php';
$parishes = json_decode(file_get_contents(__DIR__ . '/data/parishes.json'), true);
?>
<section class="max-w-7xl mx-auto px-6 py-12" x-data='parishDirectory(<?= json_encode($parishes) ?>)'>
  <h1 class="font-display text-3xl">Parishes</h1>
  <div class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
    <input x-model="q" placeholder="Search parishes..." class="px-3 py-2 rounded border border-primary/20 focus:ring-2 focus:ring-accent">
    <select x-model="deanery" class="px-3 py-2 rounded border border-primary/20 focus:ring-2 focus:ring-accent">
      <option value="">All Deaneries</option>
      <template x-for="d in deaneries" :key="d">
        <option :value="d" x-text="d"></option>
      </template>
    </select>
    <div class="lg:col-span-1 sm:col-span-2">
      <div id="map" class="w-full h-64 rounded-lg border border-primary/10"></div>
    </div>
  </div>

  <div class="mt-6 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
    <template x-for="p in filtered" :key="p.id">
      <div class="card reveal">
        <h3 class="font-semibold" x-text="p.name"></h3>
        <p class="text-sm text-primary/70" x-text="p.address"></p>
        <p class="text-sm" x-text="'Deanery: '+p.deanery"></p>
        <p class="text-sm" x-text="'Priest: '+p.priest"></p>
        <a class="mt-2 inline-block text-accent hover:underline" :href="'tel:'+p.phone" x-text="p.phone"></a>
      </div>
    </template>
  </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const map = L.map('map').setView([7.87, 9.77], 8);
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { maxZoom: 19 }).addTo(map);
  const parishes = <?= json_encode($parishes) ?>;
  parishes.forEach(p => {
    L.marker([p.lat, p.lng]).addTo(map).bindPopup(`<strong>${p.name}</strong><br>${p.address}`);
  });
});
</script>
<?php include __DIR__ . '/partials/footer.php'; ?>
