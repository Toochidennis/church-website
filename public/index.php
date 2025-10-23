<?php
$partials = __DIR__ . '/../views/partials';
include "$partials/header.php";
include "$partials/nav.php";
?>
<main id="app" x-data x-init="loadPage('home')"></main>
<script src="public/assets/js/app.js"></script>
<?php include "$partials/footer.php"; ?>    