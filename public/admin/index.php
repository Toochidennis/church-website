<?php include __DIR__ . '/../partials/head.php'; $active=''; include __DIR__ . '/../partials/nav.php'; ?>
<section class="max-w-7xl mx-auto px-6 py-12" x-data="adminPanel()">
  <h1 class="font-display text-3xl">Admin Dashboard</h1>
  <p class="text-sm text-primary/70">Lightweight, AJAX-first CRUD. Data is stored in JSON for demo; swap to DB later.</p>

  <div class="mt-6 flex gap-3 overflow-x-auto">
    <template x-for="tab in tabs" :key="tab">
      <button @click="current=tab" :class="current===tab?'bg-primary text-white':'bg-white border'" class="px-3 py-2 rounded border border-primary/10 shrink-0" x-text="tab"></button>
    </template>
  </div>

  <!-- News -->
  <div x-show="current==='News'" class="mt-8">
    <div class="flex justify-between items-center">
      <h2 class="font-display text-2xl">News</h2>
      <button @click="openModal('news')" class="px-3 py-2 rounded bg-accent text-white">Add News</button>
    </div>
    <div class="mt-4 grid gap-4 md:grid-cols-2">
      <template x-for="n in data.news" :key="n.id">
        <div class="card">
          <h3 class="font-semibold" x-text="n.title"></h3>
          <p class="text-xs text-primary/60" x-text="n.date"></p>
          <p class="text-sm" x-text="n.excerpt"></p>
          <div class="mt-3 flex gap-2">
            <button @click="edit('news', n)" class="px-3 py-1 rounded bg-primary text-white">Edit</button>
            <button @click="destroy('news', n.id)" class="px-3 py-1 rounded bg-red-700 text-white">Delete</button>
          </div>
        </div>
      </template>
    </div>
  </div>

  <!-- Other sections could mirror this pattern: Events, Parishes, Departments, Gallery -->
  <template x-for="section in ['Events','Parishes','Departments','Gallery']" :key="section">
    <div x-show="current===section" class="mt-8">
      <div class="flex justify-between items-center">
        <h2 class="font-display text-2xl" x-text="section"></h2>
        <button @click="openModal(section.toLowerCase())" class="px-3 py-2 rounded bg-accent text-white">Add</button>
      </div>
      <div class="mt-4 grid gap-4 md:grid-cols-2">
        <template x-for="item in data[section.toLowerCase()]" :key="item.id">
          <div class="card">
            <h3 class="font-semibold" x-text="item.name || item.title || item.caption"></h3>
            <p class="text-sm text-primary/70" x-text="item.address || item.description || item.excerpt || ''"></p>
            <div class="mt-3 flex gap-2">
              <button @click="edit(section.toLowerCase(), item)" class="px-3 py-1 rounded bg-primary text-white">Edit</button>
              <button @click="destroy(section.toLowerCase(), item.id)" class="px-3 py-1 rounded bg-red-700 text-white">Delete</button>
            </div>
          </div>
        </template>
      </div>
    </div>
  </template>

  <!-- Alpine modal -->
  <div x-show="modal.open" x-transition class="fixed inset-0 bg-black/50 grid place-items-center p-4">
    <form @submit.prevent="save()" class="bg-white rounded-2xl p-6 w-full max-w-xl space-y-3">
      <h3 class="font-display text-xl" x-text="modal.title"></h3>
      <template x-for="field in modal.fields" :key="field.name">
        <div>
          <label class="block text-sm font-medium" x-text="field.label"></label>
          <input x-if="field.type==='text' || field.type==='date' || field.type==='number'" :type="field.type" x-model="form[field.name]" class="w-full px-3 py-2 rounded border border-primary/20 focus:ring-2 focus:ring-accent">
          <textarea x-if="field.type==='textarea'" rows="4" x-model="form[field.name]" class="w-full px-3 py-2 rounded border border-primary/20 focus:ring-2 focus:ring-accent"></textarea>
        </div>
      </template>
      <div class="flex justify-end gap-2 pt-2">
        <button type="button" @click="modal.open=false" class="px-3 py-2 rounded border">Cancel</button>
        <button class="px-3 py-2 rounded bg-primary text-white">Save</button>
      </div>
    </form>
  </div>
</section>
<?php include __DIR__ . '/../partials/footer.php'; ?>
