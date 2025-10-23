<section class="pt-24 pb-8 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <nav class="text-sm text-gray-500 mb-6 scroll-reveal">
      <a href="https://readdy.ai/home/596364b0-1abe-4f0c-95b0-76ae3006c30d/f18f1c85-acdd-41bf-9057-a3bb25181cef"
        data-readdy="true" class="hover:text-primary transition-colors">Home</a>
      <span class="mx-2">></span>
      <span class="text-gray-700">Gallery</span>
    </nav>
    <div class="text-center mb-12 scroll-reveal">
      <h1 class="font-playfair text-4xl lg:text-5xl font-bold text-primary mb-4">Photo Gallery</h1>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        Capturing moments of faith, community, and celebration throughout our diocese. Browse through our
        collection of memorable events and parish activities.
      </p>
    </div>
  </div>
</section>
<section class="py-8 bg-white border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-6">
    <div class="flex flex-col lg:flex-row gap-6 items-center justify-between scroll-reveal">
      <div class="flex flex-wrap gap-3">
        <button
          class="filter-btn filter-active px-6 py-2 !rounded-button bg-gray-100 text-gray-700 hover:bg-primary hover:text-white transition-colors whitespace-nowrap"
          data-filter="all">
          All Photos
        </button>
        <button
          class="filter-btn px-6 py-2 !rounded-button bg-gray-100 text-gray-700 hover:bg-primary hover:text-white transition-colors whitespace-nowrap"
          data-filter="diocese-events">
          Diocese Events
        </button>
        <button
          class="filter-btn px-6 py-2 !rounded-button bg-gray-100 text-gray-700 hover:bg-primary hover:text-white transition-colors whitespace-nowrap"
          data-filter="parish-life">
          Parish Life
        </button>
        <button
          class="filter-btn px-6 py-2 !rounded-button bg-gray-100 text-gray-700 hover:bg-primary hover:text-white transition-colors whitespace-nowrap"
          data-filter="youth-ministry">
          Youth Ministry
        </button>
        <button
          class="filter-btn px-6 py-2 !rounded-button bg-gray-100 text-gray-700 hover:bg-primary hover:text-white transition-colors whitespace-nowrap"
          data-filter="community-outreach">
          Community Outreach
        </button>
        <button
          class="filter-btn px-6 py-2 !rounded-button bg-gray-100 text-gray-700 hover:bg-primary hover:text-white transition-colors whitespace-nowrap"
          data-filter="ceremonies">
          Ceremonies
        </button>
      </div>
      <div class="flex gap-3">
        <div class="relative">
          <input type="text" placeholder="Search photos..."
            class="pl-10 pr-4 py-2 border border-gray-200 !rounded-button focus:outline-none focus:border-primary text-sm">
          <i class="ri-search-line absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
        </div>
        <select
          class="px-4 py-2 border border-gray-200 !rounded-button focus:outline-none focus:border-primary text-sm pr-8">
          <option>All Dates</option>
          <option>2024</option>
          <option>2023</option>
          <option>2022</option>
        </select>
      </div>
    </div>
  </div>
</section>
<section class="py-12 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="photo-grid" id="photo-grid">
      <div class="photo-item diocese-events scroll-reveal">
        <div class="bg-white rounded-2xl overflow-hidden shadow-sm photo-hover cursor-pointer"
          onclick="openLightbox(0)">
          <div class="relative">
            <img src="https://readdy.ai/api/search-image?query=Catholic%20bishop%20Emmanuel%20Badejo%20blessing%20congregation%20during%20solemn%20diocesan%20celebration%20at%20Nigerian%20cathedral%2C%20ornate%20liturgical%20vestments%20and%20golden%20ceremonial%20items%2C%20faithful%20gathered%20in%20prayer%2C%20beautiful%20church%20interior%20with%20stained%20glass%20windows%20and%20religious%20artwork&width=400&height=500&seq=bishop-blessing&orientation=portrait"
              alt="Bishop's Blessing Ceremony" class="w-full h-80 object-cover object-top">
            <div
              class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
              <i
                class="ri-eye-line text-white text-2xl opacity-0 hover:opacity-100 transition-opacity"></i>
            </div>
          </div>
          <div class="p-4">
            <h3 class="font-semibold text-gray-800 mb-2">Bishop's Annual Blessing Ceremony</h3>
            <p class="text-sm text-gray-600 mb-2">December 10, 2024</p>
            <span
              class="inline-block bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-medium">Diocese
              Events</span>
          </div>
        </div>
      </div>
      <div class="photo-item parish-life scroll-reveal">
        <div class="bg-white rounded-2xl overflow-hidden shadow-sm photo-hover cursor-pointer"
          onclick="openLightbox(1)">
          <div class="relative">
            <img src="https://readdy.ai/api/search-image?query=Catholic%20Sunday%20mass%20celebration%20in%20Nigerian%20parish%20church%2C%20congregation%20singing%20hymns%20with%20choir%20and%20traditional%20African%20instruments%2C%20vibrant%20community%20worship%20with%20colorful%20traditional%20clothing%2C%20priest%20celebrating%20eucharist%20at%20altar%2C%20joyful%20parish%20life&width=400&height=300&seq=sunday-mass&orientation=landscape"
              alt="Sunday Mass Celebration" class="w-full h-60 object-cover object-top">
            <div
              class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
              <i
                class="ri-eye-line text-white text-2xl opacity-0 hover:opacity-100 transition-opacity"></i>
            </div>
          </div>
          <div class="p-4">
            <h3 class="font-semibold text-gray-800 mb-2">Sunday Mass at St. Augustine Cathedral</h3>
            <p class="text-sm text-gray-600 mb-2">December 8, 2024</p>
            <span
              class="inline-block bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-medium">Parish
              Life</span>
          </div>
        </div>
      </div>
      <div class="photo-item youth-ministry scroll-reveal">
        <div class="bg-white rounded-2xl overflow-hidden shadow-sm photo-hover cursor-pointer"
          onclick="openLightbox(2)">
          <div class="relative">
            <img src="https://readdy.ai/api/search-image?query=Catholic%20youth%20ministry%20retreat%20in%20Nigerian%20church%20hall%2C%20young%20people%20engaged%20in%20spiritual%20formation%20activities%20and%20group%20discussions%2C%20teenagers%20and%20young%20adults%20participating%20in%20faith%20development%20workshop%2C%20vibrant%20youth%20gathering%20with%20religious%20banners&width=400&height=450&seq=youth-retreat&orientation=portrait"
              alt="Youth Ministry Retreat" class="w-full h-72 object-cover object-top">
            <div
              class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
              <i
                class="ri-eye-line text-white text-2xl opacity-0 hover:opacity-100 transition-opacity"></i>
            </div>
          </div>
          <div class="p-4">
            <h3 class="font-semibold text-gray-800 mb-2">Youth Ministry Annual Retreat</h3>
            <p class="text-sm text-gray-600 mb-2">November 25, 2024</p>
            <span
              class="inline-block bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs font-medium">Youth
              Ministry</span>
          </div>
        </div>
      </div>
      <div class="photo-item community-outreach scroll-reveal">
        <div class="bg-white rounded-2xl overflow-hidden shadow-sm photo-hover cursor-pointer"
          onclick="openLightbox(3)">
          <div class="relative">
            <img src="https://readdy.ai/api/search-image?query=Catholic%20charity%20outreach%20program%20in%20Nigerian%20rural%20community%2C%20church%20volunteers%20distributing%20food%20packages%20and%20medical%20supplies%20to%20families%2C%20community%20health%20center%20with%20cross%20symbol%2C%20charitable%20work%20and%20social%20ministry%20activities&width=400&height=350&seq=charity-outreach&orientation=landscape"
              alt="Community Outreach Program" class="w-full h-64 object-cover object-top">
            <div
              class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
              <i
                class="ri-eye-line text-white text-2xl opacity-0 hover:opacity-100 transition-opacity"></i>
            </div>
          </div>
          <div class="p-4">
            <h3 class="font-semibold text-gray-800 mb-2">Community Health Outreach</h3>
            <p class="text-sm text-gray-600 mb-2">December 5, 2024</p>
            <span
              class="inline-block bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-xs font-medium">Community
              Outreach</span>
          </div>
        </div>
      </div>
      <div class="photo-item ceremonies scroll-reveal">
        <div class="bg-white rounded-2xl overflow-hidden shadow-sm photo-hover cursor-pointer"
          onclick="openLightbox(4)">
          <div class="relative">
            <img src="https://readdy.ai/api/search-image?query=Catholic%20ordination%20ceremony%20in%20Nigerian%20cathedral%2C%20new%20priests%20receiving%20holy%20orders%20from%20bishop%20in%20ornate%20liturgical%20vestments%2C%20solemn%20religious%20ceremony%20with%20congregation%20and%20altar%20servers%2C%20beautiful%20church%20interior%20with%20ceremonial%20decorations&width=400&height=550&seq=ordination-ceremony&orientation=portrait"
              alt="Ordination Ceremony" class="w-full h-84 object-cover object-top">
            <div
              class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
              <i
                class="ri-eye-line text-white text-2xl opacity-0 hover:opacity-100 transition-opacity"></i>
            </div>
          </div>
          <div class="p-4">
            <h3 class="font-semibold text-gray-800 mb-2">Priestly Ordination Ceremony</h3>
            <p class="text-sm text-gray-600 mb-2">November 15, 2024</p>
            <span
              class="inline-block bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-medium">Ceremonies</span>
          </div>
        </div>
      </div>
      <div class="photo-item diocese-events scroll-reveal">
        <div class="bg-white rounded-2xl overflow-hidden shadow-sm photo-hover cursor-pointer"
          onclick="openLightbox(5)">
          <div class="relative">
            <img src="https://readdy.ai/api/search-image?query=Catholic%20diocesan%20conference%20in%20Nigerian%20church%20hall%2C%20priests%20and%20lay%20leaders%20attending%20pastoral%20meeting%2C%20bishop%20addressing%20clergy%20and%20parish%20representatives%2C%20formal%20church%20gathering%20with%20religious%20symbols%20and%20banners%2C%20modern%20conference%20room%20setting&width=400&height=320&seq=diocesan-conference&orientation=landscape"
              alt="Diocesan Conference" class="w-full h-56 object-cover object-top">
            <div
              class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
              <i
                class="ri-eye-line text-white text-2xl opacity-0 hover:opacity-100 transition-opacity"></i>
            </div>
          </div>
          <div class="p-4">
            <h3 class="font-semibold text-gray-800 mb-2">Annual Diocesan Conference</h3>
            <p class="text-sm text-gray-600 mb-2">October 28, 2024</p>
            <span
              class="inline-block bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-medium">Diocese
              Events</span>
          </div>
        </div>
      </div>
      <div class="photo-item parish-life scroll-reveal">
        <div class="bg-white rounded-2xl overflow-hidden shadow-sm photo-hover cursor-pointer"
          onclick="openLightbox(6)">
          <div class="relative">
            <img src="https://readdy.ai/api/search-image?query=Catholic%20first%20communion%20celebration%20in%20Nigerian%20parish%2C%20children%20in%20white%20dresses%20and%20suits%20receiving%20sacrament%2C%20families%20celebrating%20with%20joy%20and%20traditional%20decorations%2C%20priest%20blessing%20young%20communicants%2C%20beautiful%20church%20ceremony%20with%20flowers&width=400&height=400&seq=first-communion&orientation=squarish"
              alt="First Communion" class="w-full h-68 object-cover object-top">
            <div
              class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
              <i
                class="ri-eye-line text-white text-2xl opacity-0 hover:opacity-100 transition-opacity"></i>
            </div>
          </div>
          <div class="p-4">
            <h3 class="font-semibold text-gray-800 mb-2">First Holy Communion</h3>
            <p class="text-sm text-gray-600 mb-2">November 20, 2024</p>
            <span
              class="inline-block bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-medium">Parish
              Life</span>
          </div>
        </div>
      </div>
      <div class="photo-item youth-ministry scroll-reveal">
        <div class="bg-white rounded-2xl overflow-hidden shadow-sm photo-hover cursor-pointer"
          onclick="openLightbox(7)">
          <div class="relative">
            <img src="https://readdy.ai/api/search-image?query=Catholic%20youth%20choir%20performance%20in%20Nigerian%20church%2C%20young%20singers%20in%20colorful%20robes%20performing%20during%20mass%2C%20teenagers%20leading%20worship%20with%20traditional%20African%20instruments%20and%20modern%20music%2C%20vibrant%20youth%20ministry%20musical%20celebration&width=400&height=380&seq=youth-choir&orientation=squarish"
              alt="Youth Choir Performance" class="w-full h-64 object-cover object-top">
            <div
              class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
              <i
                class="ri-eye-line text-white text-2xl opacity-0 hover:opacity-100 transition-opacity"></i>
            </div>
          </div>
          <div class="p-4">
            <h3 class="font-semibold text-gray-800 mb-2">Youth Choir Christmas Performance</h3>
            <p class="text-sm text-gray-600 mb-2">December 12, 2024</p>
            <span
              class="inline-block bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs font-medium">Youth
              Ministry</span>
          </div>
        </div>
      </div>
      <div class="photo-item community-outreach scroll-reveal">
        <div class="bg-white rounded-2xl overflow-hidden shadow-sm photo-hover cursor-pointer"
          onclick="openLightbox(8)">
          <div class="relative">
            <img src="https://readdy.ai/api/search-image?query=Catholic%20Christmas%20charity%20distribution%20in%20Nigerian%20community%2C%20volunteers%20giving%20gifts%20and%20food%20packages%20to%20poor%20families%2C%20church%20members%20helping%20children%20and%20elderly%20during%20holiday%20season%2C%20charitable%20outreach%20program%20with%20Christmas%20decorations&width=400&height=300&seq=christmas-charity&orientation=landscape"
              alt="Christmas Charity Drive" class="w-full h-60 object-cover object-top">
            <div
              class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
              <i
                class="ri-eye-line text-white text-2xl opacity-0 hover:opacity-100 transition-opacity"></i>
            </div>
          </div>
          <div class="p-4">
            <h3 class="font-semibold text-gray-800 mb-2">Christmas Charity Drive</h3>
            <p class="text-sm text-gray-600 mb-2">December 15, 2024</p>
            <span
              class="inline-block bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-xs font-medium">Community
              Outreach</span>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-12 scroll-reveal">
      <button
        class="bg-primary text-white px-8 py-3 !rounded-button font-medium hover:bg-opacity-90 transition-colors whitespace-nowrap"
        id="load-more">
        Load More Photos
      </button>
    </div>
  </div>
</section>
<div class="lightbox" id="lightbox">
  <div class="flex items-center justify-center w-full h-full p-6">
    <button
      class="absolute top-6 right-6 w-12 h-12 bg-white/20 rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-colors"
      onclick="closeLightbox()">
      <i class="ri-close-line text-2xl"></i>
    </button>
    <button
      class="absolute left-6 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white/20 rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-colors"
      onclick="prevPhoto()">
      <i class="ri-arrow-left-line text-2xl"></i>
    </button>
    <button
      class="absolute right-6 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white/20 rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-colors"
      onclick="nextPhoto()">
      <i class="ri-arrow-right-line text-2xl"></i>
    </button>
    <div class="max-w-6xl w-full flex flex-col lg:flex-row gap-6 max-h-full">
      <div class="flex-1 flex items-center justify-center">
        <img id="lightbox-image" src="" alt="" class="max-w-full max-h-full object-contain">
      </div>
      <div class="lg:w-80 bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-white overflow-y-auto">
        <h3 id="lightbox-title" class="font-playfair text-2xl font-bold mb-4"></h3>
        <div class="space-y-4">
          <div>
            <p class="text-sm opacity-80 mb-1">Date</p>
            <p id="lightbox-date" class="font-medium"></p>
          </div>
          <div>
            <p class="text-sm opacity-80 mb-1">Category</p>
            <span id="lightbox-category"
              class="inline-block px-3 py-1 rounded-full text-sm font-medium"></span>
          </div>
          <div>
            <p class="text-sm opacity-80 mb-1">Description</p>
            <p id="lightbox-description" class="text-sm leading-relaxed"></p>
          </div>
          <div>
            <p class="text-sm opacity-80 mb-1">Location</p>
            <p id="lightbox-location" class="text-sm"></p>
          </div>
          <div>
            <p class="text-sm opacity-80 mb-1">Photographer</p>
            <p id="lightbox-photographer" class="text-sm"></p>
          </div>
        </div>
        <div class="flex gap-2 mt-6">
          <button
            class="flex-1 bg-white/20 hover:bg-white/30 px-4 py-2 !rounded-button transition-colors whitespace-nowrap">
            <i class="ri-share-line mr-2"></i>Share
          </button>
          <button
            class="flex-1 bg-white/20 hover:bg-white/30 px-4 py-2 !rounded-button transition-colors whitespace-nowrap">
            <i class="ri-download-line mr-2"></i>Download
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<script id="photo-filter">
  document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const photoItems = document.querySelectorAll('.photo-item');
    filterButtons.forEach(button => {
      button.addEventListener('click', function() {
        const filter = this.getAttribute('data-filter');
        filterButtons.forEach(btn => btn.classList.remove('filter-active'));
        this.classList.add('filter-active');
        photoItems.forEach(item => {
          if (filter === 'all' || item.classList.contains(filter)) {
            item.style.display = 'block';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });
  });
</script>
<script id="lightbox-functionality">
  let currentPhotoIndex = 0;
  const photos = [{
      src: "https://readdy.ai/api/search-image?query=Catholic%20bishop%20Emmanuel%20Badejo%20blessing%20congregation%20during%20solemn%20diocesan%20celebration%20at%20Nigerian%20cathedral%2C%20ornate%20liturgical%20vestments%20and%20golden%20ceremonial%20items%2C%20faithful%20gathered%20in%20prayer%2C%20beautiful%20church%20interior%20with%20stained%20glass%20windows%20and%20religious%20artwork&width=800&height=1000&seq=bishop-blessing-large&orientation=portrait",
      title: "Bishop's Annual Blessing Ceremony",
      date: "December 10, 2024",
      category: "Diocese Events",
      description: "His Lordship Bishop Emmanuel Badejo conducting the annual blessing ceremony at St. Augustine Cathedral, blessing the faithful and celebrating the diocesan community.",
      location: "St. Augustine Cathedral, Wukari",
      photographer: "Rev. Fr. Michael Adamu"
    },
    {
      src: "https://readdy.ai/api/search-image?query=Catholic%20Sunday%20mass%20celebration%20in%20Nigerian%20parish%20church%2C%20congregation%20singing%20hymns%20with%20choir%20and%20traditional%20African%20instruments%2C%20vibrant%20community%20worship%20with%20colorful%20traditional%20clothing%2C%20priest%20celebrating%20eucharist%20at%20altar%2C%20joyful%20parish%20life&width=800&height=600&seq=sunday-mass-large&orientation=landscape",
      title: "Sunday Mass at St. Augustine Cathedral",
      date: "December 8, 2024",
      category: "Parish Life",
      description: "Weekly Sunday mass celebration featuring the diocesan choir and active participation from parishioners in traditional and contemporary worship.",
      location: "St. Augustine Cathedral, Wukari",
      photographer: "Mrs. Grace Tarka"
    },
    {
      src: "https://readdy.ai/api/search-image?query=Catholic%20youth%20ministry%20retreat%20in%20Nigerian%20church%20hall%2C%20young%20people%20engaged%20in%20spiritual%20formation%20activities%20and%20group%20discussions%2C%20teenagers%20and%20young%20adults%20participating%20in%20faith%20development%20workshop%2C%20vibrant%20youth%20gathering%20with%20religious%20banners&width=800&height=900&seq=youth-retreat-large&orientation=portrait",
      title: "Youth Ministry Annual Retreat",
      date: "November 25, 2024",
      category: "Youth Ministry",
      description: "Annual youth retreat focusing on spiritual formation, leadership development, and community building among young Catholics aged 16-35.",
      location: "Diocesan Youth Center, Wukari",
      photographer: "Mr. Paul Nkomo"
    },
    {
      src: "https://readdy.ai/api/search-image?query=Catholic%20charity%20outreach%20program%20in%20Nigerian%20rural%20community%2C%20church%20volunteers%20distributing%20food%20packages%20and%20medical%20supplies%20to%20families%2C%20community%20health%20center%20with%20cross%20symbol%2C%20charitable%20work%20and%20social%20ministry%20activities&width=800&height=700&seq=charity-outreach-large&orientation=landscape",
      title: "Community Health Outreach",
      date: "December 5, 2024",
      category: "Community Outreach",
      description: "Monthly community health outreach program providing medical services, health education, and nutritional support to underserved communities.",
      location: "Takum Community Health Center",
      photographer: "Dr. Mary Okwu"
    },
    {
      src: "https://readdy.ai/api/search-image?query=Catholic%20ordination%20ceremony%20in%20Nigerian%20cathedral%2C%20new%20priests%20receiving%20holy%20orders%20from%20bishop%20in%20ornate%20liturgical%20vestments%2C%20solemn%20religious%20ceremony%20with%20congregation%20and%20altar%20servers%2C%20beautiful%20church%20interior%20with%20ceremonial%20decorations&width=800&height=1100&seq=ordination-ceremony-large&orientation=portrait",
      title: "Priestly Ordination Ceremony",
      date: "November 15, 2024",
      category: "Ceremonies",
      description: "Solemn ordination ceremony where three deacons received holy orders to become priests, marking a significant milestone in their spiritual journey.",
      location: "St. Augustine Cathedral, Wukari",
      photographer: "Rev. Fr. John Amos"
    }
  ];

  function openLightbox(index) {
    currentPhotoIndex = index;
    const photo = photos[index];
    document.getElementById('lightbox-image').src = photo.src;
    document.getElementById('lightbox-title').textContent = photo.title;
    document.getElementById('lightbox-date').textContent = photo.date;
    document.getElementById('lightbox-category').textContent = photo.category;
    document.getElementById('lightbox-description').textContent = photo.description;
    document.getElementById('lightbox-location').textContent = photo.location;
    document.getElementById('lightbox-photographer').textContent = photo.photographer;
    const categoryElement = document.getElementById('lightbox-category');
    categoryElement.className = 'inline-block px-3 py-1 rounded-full text-sm font-medium ';
    switch (photo.category) {
      case 'Diocese Events':
        categoryElement.className += 'bg-blue-100 text-blue-700';
        break;
      case 'Parish Life':
        categoryElement.className += 'bg-green-100 text-green-700';
        break;
      case 'Youth Ministry':
        categoryElement.className += 'bg-purple-100 text-purple-700';
        break;
      case 'Community Outreach':
        categoryElement.className += 'bg-orange-100 text-orange-700';
        break;
      case 'Ceremonies':
        categoryElement.className += 'bg-red-100 text-red-700';
        break;
    }
    document.getElementById('lightbox').classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function closeLightbox() {
    document.getElementById('lightbox').classList.remove('active');
    document.body.style.overflow = 'auto';
  }

  function nextPhoto() {
    currentPhotoIndex = (currentPhotoIndex + 1) % photos.length;
    openLightbox(currentPhotoIndex);
  }

  function prevPhoto() {
    currentPhotoIndex = (currentPhotoIndex - 1 + photos.length) % photos.length;
    openLightbox(currentPhotoIndex);
  }
  document.addEventListener('keydown', function(e) {
    if (document.getElementById('lightbox').classList.contains('active')) {
      if (e.key === 'Escape') closeLightbox();
      if (e.key === 'ArrowRight') nextPhoto();
      if (e.key === 'ArrowLeft') prevPhoto();
    }
  });
</script>
<script id="load-more">
  document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('load-more').addEventListener('click', function() {
      this.textContent = 'Loading...';
      this.disabled = true;
      setTimeout(() => {
        this.textContent = 'Load More Photos';
        this.disabled = false;
      }, 1500);
    });
  });
</script>