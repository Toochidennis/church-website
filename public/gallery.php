<?php include __DIR__ . '/partials/head.php'; $active='Gallery'; include __DIR__ . '/partials/nav.php';
$gallery = json_decode(file_get_contents(__DIR__ . '/data/gallery.json'), true);
?>
<section class="max-w-7xl mx-auto px-6 py-12" x-data="{open:false, img:null}">
  <h1 class="font-display text-3xl">Gallery</h1>
  <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
    <?php foreach($gallery as $g): ?>
    <figure class="reveal">
      <img loading="lazy" src="/assets/<?= $g['src'] ?>" alt="<?= htmlspecialchars($g['alt']) ?>" class="rounded-lg aspect-video object-cover cursor-pointer" @click="open=true;img=<?= json_encode($g) ?>">
      <figcaption class="mt-2 text-sm text-primary/70"><?= htmlspecialchars($g['caption']) ?></figcaption>
    </figure>
    <?php endforeach; ?>
  </div>

  <div x-show="open" x-transition @keydown.escape.window="open=false" class="fixed inset-0 bg-black/60 grid place-items-center p-4">
    <img @click.outside="open=false" :src="'/assets/'+img?.src" :alt="img?.alt" class="max-h-[85vh] rounded-xl shadow-lg">
  </div>
</section>
<?php include __DIR__ . '/partials/footer.php'; ?>
