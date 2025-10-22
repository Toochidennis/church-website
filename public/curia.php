<?php include __DIR__ . '/partials/head.php'; $active='Curia'; include __DIR__ . '/partials/nav.php';
$departments = json_decode(file_get_contents(__DIR__ . '/data/departments.json'), true);
?>
<section class="max-w-7xl mx-auto px-6 py-12">
  <h1 class="font-display text-3xl">Curia Departments</h1>
  <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
    <?php foreach($departments as $d): ?>
    <div class="card group reveal" tabindex="0" role="button" aria-pressed="false">
      <div class="flex items-center gap-3">
        <span class="w-10 h-10 rounded-full bg-primary/10 grid place-items-center">
          <span class="sr-only"><?= htmlspecialchars($d['icon']) ?></span>
          <svg class="w-5 h-5 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor"><circle cx="12" cy="12" r="10"/></svg>
        </span>
        <div>
          <h3 class="font-semibold"><?= htmlspecialchars($d['name']) ?></h3>
          <p class="text-xs text-primary/60">Lead: <?= htmlspecialchars($d['lead']) ?></p>
        </div>
      </div>
      <p class="mt-4 text-sm text-primary/80"><?= htmlspecialchars($d['description']) ?></p>
      <div class="mt-4 text-sm">
        <a class="text-accent hover:underline" href="mailto:<?= htmlspecialchars($d['email']) ?>"><?= htmlspecialchars($d['email']) ?></a>
        <div><?= htmlspecialchars($d['phone']) ?></div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>
<?php include __DIR__ . '/partials/footer.php'; ?>
