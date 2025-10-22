<?php include __DIR__ . '/partials/head.php'; $active='News & Events'; include __DIR__ . '/partials/nav.php';
$news = json_decode(file_get_contents(__DIR__ . '/data/news.json'), true);
$events = json_decode(file_get_contents(__DIR__ . '/data/events.json'), true);
usort($news, fn($a,$b)=>strcmp($b['date'],$a['date']));
?>
<section class="max-w-7xl mx-auto px-6 py-12" x-data="{open:false,item:null}">
  <h1 class="font-display text-3xl">News & Events</h1>
  <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
    <?php foreach($news as $n): ?>
    <article id="news-<?= $n['id'] ?>" class="card reveal">
      <img src="/assets/<?= $n['image'] ?>" alt="<?= htmlspecialchars($n['title']) ?>" class="rounded-lg aspect-video object-cover">
      <h3 class="mt-3 font-semibold"><?= htmlspecialchars($n['title']) ?></h3>
      <p class="text-xs text-primary/60"><?= htmlspecialchars($n['date']) ?></p>
      <p class="text-sm text-primary/80"><?= htmlspecialchars($n['excerpt']) ?></p>
      <button @click="open=true;item=<?= json_encode($n) ?>" class="mt-2 text-accent hover:underline">Open</button>
    </article>
    <?php endforeach; ?>
  </div>

  <h2 class="font-display text-2xl mt-12">Upcoming Events</h2>
  <ul class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
    <?php foreach($events as $e): ?>
    <li class="card reveal">
      <h4 class="font-semibold"><?= htmlspecialchars($e['title']) ?></h4>
      <p class="text-sm"><?= htmlspecialchars($e['date']) ?> • <?= htmlspecialchars($e['time']) ?> • <?= htmlspecialchars($e['location']) ?></p>
      <p class="text-sm text-primary/80"><?= htmlspecialchars($e['description']) ?></p>
    </li>
    <?php endforeach; ?>
  </ul>

  <div x-show="open" x-transition @keydown.escape.window="open=false" class="fixed inset-0 bg-black/50 grid place-items-center p-4">
    <div @click.outside="open=false" class="bg-white rounded-2xl p-6 max-w-2xl w-full">
      <h3 class="font-display text-2xl" x-text="item?.title"></h3>
      <p class="text-sm text-primary/60 mt-1" x-text="item?.date"></p>
      <img class="mt-4 rounded-lg" :src="'/assets/'+item?.image" :alt="item?.title">
      <p class="mt-4 leading-relaxed" x-text="item?.content"></p>
      <button @click="open=false" class="mt-6 px-4 py-2 rounded bg-primary text-white">Close</button>
    </div>
  </div>
</section>
<?php include __DIR__ . '/partials/footer.php'; ?>
