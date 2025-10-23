async function loadPage(page) {
  const app = document.getElementById('app');

  try {
    const response = await fetch(`views/public/${page}.php`);
    if (!response.ok) throw new Error('Page not found');
    const html = await response.text();
    app.innerHTML = html;
    window.location.hash = page; // update hash for back/forward nav
  } catch (error) {
    app.innerHTML = '<h2 class="text-center text-red-600 mt-10">404 - Page not found</h2>';
  }

  window.scrollTo({top: 0, behavior: 'smooth'});
}

// handle nav clicks
document.addEventListener('click', function (e) {
  const link = e.target.closest('a[data-page]');
  if (!link) return;
  e.preventDefault();
  const page = link.getAttribute('data-page');
  loadPage(page);
});

// handle browser back/forward buttons
window.addEventListener('popstate', () => {
  const page = window.location.hash.substring(1) || 'home';
  loadPage(page);
});

// initial load
window.addEventListener('DOMContentLoaded', () => {
  const initialPage = window.location.hash.substring(1) || 'home';
  loadPage(initialPage);
});
