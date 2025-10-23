<header>
  <nav
    class="fixed top-0 w-full z-50 navbar-blur border-b border-gray-200/20"
    x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-6 py-4">
      <div class="flex items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
          <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center">
            <i class="ri-church-line text-white text-xl"></i>
          </div>
          <div>
            <h1 class="font-['Pacifico'] text-xl text-primary">Diocese</h1>
            <p class="text-xs text-gray-600">of Wukari</p>
          </div>
        </div>

        <!-- Links -->
        <div class="hidden md:flex items-center space-x-8">
          <a href="#home" data-page="home"
            class="font-medium transition-colors"
            :class="current === 'home' ? 'text-primary' : 'text-gray-700 hover:text-primary'">Home</a>

          <div class="relative dropdown-container">
            <button class="text-gray-700 hover:text-primary font-medium flex items-center space-x-1 dropdown-trigger">
              <span>Diocese</span>
              <i class="ri-arrow-down-s-line text-sm transition-transform duration-200"></i>
            </button>
            <div
              class="absolute top-full left-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200/20 opacity-0 invisible transform translate-y-2 transition-all duration-300 ease-out dropdown-menu z-50">
              <div class="py-2">
                <a href="#parishes" data-page="parishes"
                  class="block px-4 py-3 font-medium transition-colors"
                  :class="current === 'parishes' ? 'text-primary bg-gray-50' : 'text-gray-700 hover:text-primary hover:bg-gray-50'">Parishes</a>
                <a href="#bishops" data-page="bishops"
                  class="block px-4 py-3 font-medium transition-colors"
                  :class="current === 'bishops' ? 'text-primary bg-gray-50' : 'text-gray-700 hover:text-primary hover:bg-gray-50'">Bishops</a>
                <a href="#clergy" data-page="clergy"
                  class="block px-4 py-3 font-medium transition-colors"
                  :class="current === 'clergy' ? 'text-primary bg-gray-50' : 'text-gray-700 hover:text-primary hover:bg-gray-50'">Clergy</a>
              </div>
            </div>
          </div>

          <a href="#news" data-page="news"
            class="font-medium transition-colors"
            :class="current === 'news' ? 'text-primary' : 'text-gray-700 hover:text-primary'">News</a>

          <a href="#events" data-page="events"
            class="font-medium transition-colors"
            :class="current === 'events' ? 'text-primary' : 'text-gray-700 hover:text-primary'">Events</a>

          <a href="#gallery" data-page="gallery"
            class="font-medium transition-colors"
            :class="current === 'gallery' ? 'text-primary' : 'text-gray-700 hover:text-primary'">Gallery</a>

          <a href="#about" data-page="about"
            class="font-medium transition-colors"
            :class="current === 'about' ? 'text-primary' : 'text-gray-700 hover:text-primary'">About</a>

          <a href="#contact" data-page="contact"
            class="font-medium transition-colors"
            :class="current === 'contact' ? 'text-primary' : 'text-gray-700 hover:text-primary'">Contact</a>
        </div>

        <!-- Right -->
        <div class="flex items-center space-x-4">
          <button
            class="bg-secondary text-white px-6 py-2 !rounded-button font-medium hover:bg-opacity-90 transition-colors whitespace-nowrap">
            Donate Now
          </button>
          <button @click="open = !open" class="md:hidden w-8 h-8 flex items-center justify-center">
            <i class="ri-menu-line text-xl"></i>
          </button>
        </div>
      </div>
    </div>
  </nav>
</header>