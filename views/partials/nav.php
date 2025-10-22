<header>
  <nav class="fixed top-0 w-full z-50 navbar-blur border-b border-gray-200/20">
    <div class="max-w-7xl mx-auto px-6 py-4">
      <div class="flex items-center justify-between">
        <div class="flex items-center space-x-3">
          <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center">
            <i class="ri-church-line text-white text-xl"></i>
          </div>
          <div>
            <h1 class="font-['Pacifico'] text-xl text-primary">Diocese</h1>
            <p class="text-xs text-gray-600">of Wukari</p>
          </div>
        </div>
        <div class="hidden md:flex items-center space-x-8">
          <a href="#home" data-page="home" class="text-gray-700 hover:text-primary transition-colors font-medium">Home</a>
          <div class="relative dropdown-container">
            <button
              class="text-gray-700 hover:text-primary transition-colors font-medium flex items-center space-x-1 dropdown-trigger">
              <span>Diocese</span>
              <i class="ri-arrow-down-s-line text-sm transition-transform duration-200"></i>
            </button>
            <div
              class="absolute top-full left-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200/20 opacity-0 invisible transform translate-y-2 transition-all duration-300 ease-out dropdown-menu z-50">
              <div class="py-2">
                <a href="#parishes" data-page="parishes">
                  class="block px-4 py-3 text-gray-700 hover:text-primary hover:bg-gray-50 transition-colors font-medium">Parishes</a>
                <a href="#bishops"
                  data-readdy="true"
                  data-page="bishops"
                  class="block px-4 py-3 text-gray-700 hover:text-primary hover:bg-gray-50 transition-colors font-medium">Bishops</a>
                <a href="#clergy"
                  data-page="clergy"
                  class="block px-4 py-3 text-gray-700 hover:text-primary hover:bg-gray-50 transition-colors font-medium">Clergy</a>
              </div>
            </div>
          </div>
          <a href="#news" data-page="news" class="text-gray-700 hover:text-primary transition-colors font-medium">News</a>
          <a href="#events"
            data-page="events"
            data-readdy="true"
            class="text-gray-700 hover:text-primary transition-colors font-medium">Events</a>
          <a href="#gallery" data-page="gallery" class="text-gray-700 hover:text-primary transition-colors font-medium">Gallery</a>
          <a href="#about"
            data-page="about"
            data-readdy="true"
            class="text-gray-700 hover:text-primary transition-colors font-medium">About</a>
          <a href="#contact" data-page="contact" class="text-gray-700 hover:text-primary transition-colors font-medium">Contact</a>
        </div>
        <div class="flex items-center space-x-4">
          <button
            class="bg-secondary text-white px-6 py-2 !rounded-button font-medium hover:bg-opacity-90 transition-colors whitespace-nowrap">
            Donate Now
          </button>
          <button class="md:hidden w-8 h-8 flex items-center justify-center">
            <i class="ri-menu-line text-xl"></i>
          </button>
        </div>
      </div>
    </div>
  </nav>
</header>