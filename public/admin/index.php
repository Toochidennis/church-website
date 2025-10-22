<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Church Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com/3.4.16"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#3b82f6',
            secondary: '#1e40af'
          },
          borderRadius: {
            'none': '0px',
            'sm': '4px',
            DEFAULT: '8px',
            'md': '12px',
            'lg': '16px',
            'xl': '20px',
            '2xl': '24px',
            '3xl': '32px',
            'full': '9999px',
            'button': '8px'
          }
        }
      }
    }
  </script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.3/cdn.js" defer></script>
  <style>
    :where([class^="ri-"])::before {
      content: "\f3c2";
    }

    .modal-enter {
      opacity: 0;
      transform: scale(0.95);
    }

    .modal-enter-active {
      transition: opacity 0.3s, transform 0.3s;
    }

    .modal-enter-to {
      opacity: 1;
      transform: scale(1);
    }

    .slide-enter {
      transform: translateX(-100%);
    }

    .slide-enter-active {
      transition: transform 0.3s ease-out;
    }

    .slide-enter-to {
      transform: translateX(0);
    }

    .fade-enter {
      opacity: 0;
    }

    .fade-enter-active {
      transition: opacity 0.3s;
    }

    .fade-enter-to {
      opacity: 1;
    }

    .toast {
      animation: slideInRight 0.3s ease-out;
    }

    @keyframes slideInRight {
      from {
        transform: translateX(100%);
      }

      to {
        transform: translateX(0);
      }
    }
  </style>
</head>

<body class="bg-gray-50 min-h-screen" x-data="adminDashboard()">

  <!-- Header Navigation -->
  <header class="bg-white shadow-sm border-b border-gray-200 fixed top-0 left-0 right-0 z-50">
    <div class="flex items-center justify-between px-6 py-4">
      <div class="flex items-center space-x-4">
        <button @click="sidebarOpen = !sidebarOpen" class="lg:hidden p-2 rounded-lg hover:bg-gray-100">
          <div class="w-6 h-6 flex items-center justify-center">
            <i class="ri-menu-line text-xl"></i>
          </div>
        </button>
        <h1 class="text-2xl font-['Pacifico'] text-primary">logo</h1>
        <span class="text-gray-600 font-medium">Admin Dashboard</span>
      </div>

      <div class="flex items-center space-x-4">

        <!-- User Profile Dropdown -->
        <div class="relative" x-data="{ open: false }">
          <button @click="open = !open" class="flex items-center space-x-3 p-2 rounded-lg hover:bg-gray-100">
            <img src="https://readdy.ai/api/search-image?query=professional%20admin%20user%20avatar%20portrait%20with%20friendly%20smile%20wearing%20business%20attire%20in%20clean%20modern%20office%20setting%20with%20soft%20lighting%20and%20neutral%20background&width=40&height=40&seq=admin-avatar&orientation=squarish"
              alt="Admin Avatar" class="w-8 h-8 rounded-full object-cover">
            <span class="text-sm font-medium text-gray-700">John Anderson</span>
            <div class="w-4 h-4 flex items-center justify-center">
              <i class="ri-arrow-down-s-line text-sm"></i>
            </div>
          </button>

          <div x-show="open" @click.away="open = false"
            x-transition:enter="fade-enter" x-transition:enter-active="fade-enter-active" x-transition:enter-to="fade-enter-to"
            class="absolute right-0 top-full mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 py-2">
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Profile Settings</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Preferences</a>
            <hr class="my-2">
            <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Sidebar -->
  <aside class="fixed left-0 top-16 bottom-0 w-64 bg-white border-r border-gray-200 z-40 transform transition-transform duration-300"
    :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'">
    <nav class="p-4 space-y-2">
      <button @click="activeSection = 'dashboard'"
        :class="activeSection === 'dashboard' ? 'bg-primary text-white' : 'text-gray-700 hover:bg-gray-100'"
        class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg transition-colors !rounded-button whitespace-nowrap">
        <div class="w-5 h-5 flex items-center justify-center">
          <i class="ri-dashboard-line"></i>
        </div>
        <span>Dashboard</span>
      </button>

      <button @click="activeSection = 'news'"
        :class="activeSection === 'news' ? 'bg-primary text-white' : 'text-gray-700 hover:bg-gray-100'"
        class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg transition-colors !rounded-button whitespace-nowrap">
        <div class="w-5 h-5 flex items-center justify-center">
          <i class="ri-newspaper-line"></i>
        </div>
        <span>News Management</span>
      </button>

      <button @click="activeSection = 'gallery'"
        :class="activeSection === 'gallery' ? 'bg-primary text-white' : 'text-gray-700 hover:bg-gray-100'"
        class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg transition-colors !rounded-button whitespace-nowrap">
        <div class="w-5 h-5 flex items-center justify-center">
          <i class="ri-gallery-line"></i>
        </div>
        <span>Gallery</span>
      </button>

      <button @click="activeSection = 'events'"
        :class="activeSection === 'events' ? 'bg-primary text-white' : 'text-gray-700 hover:bg-gray-100'"
        class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg transition-colors !rounded-button whitespace-nowrap">
        <div class="w-5 h-5 flex items-center justify-center">
          <i class="ri-calendar-event-line"></i>
        </div>
        <span>Events</span>
      </button>

      <button @click="activeSection = 'verses'"
        :class="activeSection === 'verses' ? 'bg-primary text-white' : 'text-gray-700 hover:bg-gray-100'"
        class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg transition-colors !rounded-button whitespace-nowrap">
        <div class="w-5 h-5 flex items-center justify-center">
          <i class="ri-book-open-line"></i>
        </div>
        <span>Bible Verses</span>
      </button>

      <button @click="activeSection = 'settings'"
        :class="activeSection === 'settings' ? 'bg-primary text-white' : 'text-gray-700 hover:bg-gray-100'"
        class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg transition-colors !rounded-button whitespace-nowrap">
        <div class="w-5 h-5 flex items-center justify-center">
          <i class="ri-settings-line"></i>
        </div>
        <span>Settings</span>
      </button>
    </nav>
  </aside>

  <!-- Main Content -->
  <main class="lg:ml-64 pt-16 min-h-screen">
    <div class="p-6">

      <!-- Dashboard Overview -->
      <div x-show="activeSection === 'dashboard'" x-transition>
        <div class="mb-8">
          <h2 class="text-3xl font-bold text-gray-900 mb-2">Dashboard Overview</h2>
          <p class="text-gray-600">Welcome back, John. Here's what's happening at your church today.</p>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
          <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
            <div class="flex items-center justify-between">
              <div>
                <p class="text-sm font-medium text-gray-600">Total News</p>
                <p class="text-3xl font-bold text-gray-900">24</p>
              </div>
              <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                <i class="ri-newspaper-line text-2xl text-blue-600"></i>
              </div>
            </div>
            <div class="mt-4 flex items-center text-sm">
              <span class="text-green-600 font-medium">+12%</span>
              <span class="text-gray-500 ml-2">from last month</span>
            </div>
          </div>

          <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
            <div class="flex items-center justify-between">
              <div>
                <p class="text-sm font-medium text-gray-600">Gallery Items</p>
                <p class="text-3xl font-bold text-gray-900">156</p>
              </div>
              <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                <i class="ri-gallery-line text-2xl text-green-600"></i>
              </div>
            </div>
            <div class="mt-4 flex items-center text-sm">
              <span class="text-green-600 font-medium">+8%</span>
              <span class="text-gray-500 ml-2">from last month</span>
            </div>
          </div>

          <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
            <div class="flex items-center justify-between">
              <div>
                <p class="text-sm font-medium text-gray-600">Upcoming Events</p>
                <p class="text-3xl font-bold text-gray-900">8</p>
              </div>
              <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                <i class="ri-calendar-event-line text-2xl text-purple-600"></i>
              </div>
            </div>
            <div class="mt-4 flex items-center text-sm">
              <span class="text-blue-600 font-medium">3 this week</span>
            </div>
          </div>

          <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
            <div class="flex items-center justify-between">
              <div>
                <p class="text-sm font-medium text-gray-600">Bible Verses</p>
                <p class="text-3xl font-bold text-gray-900">89</p>
              </div>
              <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                <i class="ri-book-open-line text-2xl text-orange-600"></i>
              </div>
            </div>
            <div class="mt-4 flex items-center text-sm">
              <span class="text-green-600 font-medium">+5</span>
              <span class="text-gray-500 ml-2">added this week</span>
            </div>
          </div>
        </div>
      </div>

      <!-- News Management -->
      <div x-show="activeSection === 'news'" x-transition>
        <div class="mb-8 flex items-center justify-between">
          <div>
            <h2 class="text-3xl font-bold text-gray-900 mb-2">News Management</h2>
            <p class="text-gray-600">Manage church news and announcements</p>
          </div>
          <button @click="openNewsModal()" class="bg-primary text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors !rounded-button whitespace-nowrap">
            <div class="flex items-center space-x-2">
              <div class="w-5 h-5 flex items-center justify-center">
                <i class="ri-add-line"></i>
              </div>
              <span>Add News</span>
            </div>
          </button>
        </div>

        <!-- Search and Filter -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 mb-6">
          <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
            <div class="flex-1 max-w-md">
              <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
                  <div class="w-5 h-5 flex items-center justify-center">
                    <i class="ri-search-line text-gray-400"></i>
                  </div>
                </div>
                <input type="text" x-model="newsSearch" placeholder="Search news..."
                  class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent text-sm">
              </div>
            </div>
            <div class="flex items-center space-x-4">
              <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent text-sm pr-8">
                <option>All Status</option>
                <option>Published</option>
                <option>Draft</option>
              </select>
              <button class="px-4 py-2 text-gray-600 hover:text-gray-900 !rounded-button whitespace-nowrap">
                <div class="w-5 h-5 flex items-center justify-center">
                  <i class="ri-filter-line"></i>
                </div>
              </button>
            </div>
          </div>
        </div>

        <!-- News Table -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
          <div class="overflow-x-auto">
            <table class="w-full">
              <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                  <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                  </th>
                  <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                  <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Author</th>
                  <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                  <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                  <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200">
                <template x-for="article in filteredNews" :key="article.id">
                  <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4">
                      <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                    </td>
                    <td class="px-6 py-4">
                      <div class="text-sm font-medium text-gray-900" x-text="article.title"></div>
                      <div class="text-sm text-gray-500" x-text="article.excerpt"></div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900" x-text="article.author"></td>
                    <td class="px-6 py-4">
                      <span :class="article.status === 'published' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800'"
                        class="inline-flex px-2 py-1 text-xs font-semibold rounded-full" x-text="article.status"></span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500" x-text="article.date"></td>
                    <td class="px-6 py-4">
                      <div class="flex items-center space-x-2">
                        <button @click="editNews(article)" class="text-blue-600 hover:text-blue-900">
                          <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-edit-line"></i>
                          </div>
                        </button>
                        <button @click="deleteNews(article.id)" class="text-red-600 hover:text-red-900">
                          <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-delete-bin-line"></i>
                          </div>
                        </button>
                      </div>
                    </td>
                  </tr>
                </template>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Gallery Management -->
      <div x-show="activeSection === 'gallery'" x-transition>
        <div class="mb-8 flex items-center justify-between">
          <div>
            <h2 class="text-3xl font-bold text-gray-900 mb-2">Gallery Management</h2>
            <p class="text-gray-600">Upload and organize church photos</p>
          </div>
          <button @click="openGalleryModal()" class="bg-primary text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors !rounded-button whitespace-nowrap">
            <div class="flex items-center space-x-2">
              <div class="w-5 h-5 flex items-center justify-center">
                <i class="ri-upload-line"></i>
              </div>
              <span>Upload Images</span>
            </div>
          </button>
        </div>

        <!-- Upload Area -->
        <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200 mb-6">
          <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center hover:border-primary transition-colors">
            <div class="w-16 h-16 bg-gray-100 rounded-lg flex items-center justify-center mx-auto mb-4">
              <i class="ri-upload-cloud-line text-3xl text-gray-400"></i>
            </div>
            <h3 class="text-lg font-medium text-gray-900 mb-2">Drop files here or click to upload</h3>
            <p class="text-gray-500 mb-4">Support for JPG, PNG, GIF up to 10MB</p>
            <button class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors !rounded-button whitespace-nowrap">
              Select Files
            </button>
          </div>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-4">
          <template x-for="image in galleryImages" :key="image.id">
            <div class="relative group bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200">
              <img :src="image.url" :alt="image.title" class="w-full h-32 object-cover">
              <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex space-x-2">
                  <button @click="viewImage(image)" class="bg-white text-gray-900 p-2 rounded-lg hover:bg-gray-100">
                    <div class="w-4 h-4 flex items-center justify-center">
                      <i class="ri-eye-line"></i>
                    </div>
                  </button>
                  <button @click="editImage(image)" class="bg-white text-gray-900 p-2 rounded-lg hover:bg-gray-100">
                    <div class="w-4 h-4 flex items-center justify-center">
                      <i class="ri-edit-line"></i>
                    </div>
                  </button>
                  <button @click="deleteImage(image.id)" class="bg-white text-red-600 p-2 rounded-lg hover:bg-gray-100">
                    <div class="w-4 h-4 flex items-center justify-center">
                      <i class="ri-delete-bin-line"></i>
                    </div>
                  </button>
                </div>
              </div>
              <div class="p-3">
                <p class="text-sm font-medium text-gray-900 truncate" x-text="image.title"></p>
                <p class="text-xs text-gray-500" x-text="image.date"></p>
              </div>
            </div>
          </template>
        </div>
      </div>

      <!-- Events Management -->
      <div x-show="activeSection === 'events'" x-transition>
        <div class="mb-8 flex items-center justify-between">
          <div>
            <h2 class="text-3xl font-bold text-gray-900 mb-2">Events Management</h2>
            <p class="text-gray-600">Schedule and manage church events</p>
          </div>
          <button @click="openEventModal()" class="bg-primary text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors !rounded-button whitespace-nowrap">
            <div class="flex items-center space-x-2">
              <div class="w-5 h-5 flex items-center justify-center">
                <i class="ri-add-line"></i>
              </div>
              <span>Add Event</span>
            </div>
          </button>
        </div>

        <!-- Calendar View -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
          <div class="flex items-center justify-between mb-6">
            <h3 class="text-lg font-semibold text-gray-900">December 2024</h3>
            <div class="flex items-center space-x-2">
              <button class="p-2 hover:bg-gray-100 rounded-lg">
                <div class="w-5 h-5 flex items-center justify-center">
                  <i class="ri-arrow-left-s-line"></i>
                </div>
              </button>
              <button class="p-2 hover:bg-gray-100 rounded-lg">
                <div class="w-5 h-5 flex items-center justify-center">
                  <i class="ri-arrow-right-s-line"></i>
                </div>
              </button>
            </div>
          </div>

          <div class="grid grid-cols-7 gap-1 mb-4">
            <div class="p-2 text-center text-sm font-medium text-gray-500">Sun</div>
            <div class="p-2 text-center text-sm font-medium text-gray-500">Mon</div>
            <div class="p-2 text-center text-sm font-medium text-gray-500">Tue</div>
            <div class="p-2 text-center text-sm font-medium text-gray-500">Wed</div>
            <div class="p-2 text-center text-sm font-medium text-gray-500">Thu</div>
            <div class="p-2 text-center text-sm font-medium text-gray-500">Fri</div>
            <div class="p-2 text-center text-sm font-medium text-gray-500">Sat</div>
          </div>

          <div class="grid grid-cols-7 gap-1">
            <template x-for="day in calendarDays" :key="day.date">
              <div class="min-h-24 p-1 border border-gray-100 rounded">
                <div class="text-sm text-gray-600 mb-1" x-text="day.day"></div>
                <template x-for="event in day.events" :key="event.id">
                  <div class="text-xs bg-primary text-white p-1 rounded mb-1 truncate" x-text="event.title"></div>
                </template>
              </div>
            </template>
          </div>
        </div>

        <!-- Upcoming Events List -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200">
          <div class="p-6 border-b border-gray-200">
            <h3 class="text-lg font-semibold text-gray-900">Upcoming Events</h3>
          </div>
          <div class="divide-y divide-gray-200">
            <template x-for="event in upcomingEvents" :key="event.id">
              <div class="p-6 flex items-center justify-between hover:bg-gray-50">
                <div class="flex items-center space-x-4">
                  <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center">
                    <i class="ri-calendar-event-line text-white text-xl"></i>
                  </div>
                  <div>
                    <h4 class="text-lg font-medium text-gray-900" x-text="event.title"></h4>
                    <p class="text-sm text-gray-500" x-text="event.description"></p>
                    <div class="flex items-center space-x-4 mt-1">
                      <span class="text-sm text-gray-500 flex items-center">
                        <div class="w-4 h-4 flex items-center justify-center mr-1">
                          <i class="ri-calendar-line"></i>
                        </div>
                        <span x-text="event.date"></span>
                      </span>
                      <span class="text-sm text-gray-500 flex items-center">
                        <div class="w-4 h-4 flex items-center justify-center mr-1">
                          <i class="ri-time-line"></i>
                        </div>
                        <span x-text="event.time"></span>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="flex items-center space-x-2">
                  <button @click="editEvent(event)" class="text-blue-600 hover:text-blue-900 p-2">
                    <div class="w-5 h-5 flex items-center justify-center">
                      <i class="ri-edit-line"></i>
                    </div>
                  </button>
                  <button @click="deleteEvent(event.id)" class="text-red-600 hover:text-red-900 p-2">
                    <div class="w-5 h-5 flex items-center justify-center">
                      <i class="ri-delete-bin-line"></i>
                    </div>
                  </button>
                </div>
              </div>
            </template>
          </div>
        </div>
      </div>

      <!-- Bible Verses Management -->
      <div x-show="activeSection === 'verses'" x-transition>
        <div class="mb-8 flex items-center justify-between">
          <div>
            <h2 class="text-3xl font-bold text-gray-900 mb-2">Bible Verses Management</h2>
            <p class="text-gray-600">Manage daily verses and inspirational content</p>
          </div>
          <button @click="openVerseModal()" class="bg-primary text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors !rounded-button whitespace-nowrap">
            <div class="flex items-center space-x-2">
              <div class="w-5 h-5 flex items-center justify-center">
                <i class="ri-add-line"></i>
              </div>
              <span>Add Verse</span>
            </div>
          </button>
        </div>

        <!-- Filter Tabs -->
        <div class="mb-6">
          <div class="flex space-x-1 bg-gray-100 p-1 rounded-lg w-fit">
            <button @click="verseFilter = 'all'"
              :class="verseFilter === 'all' ? 'bg-white text-gray-900 shadow-sm' : 'text-gray-600'"
              class="px-4 py-2 rounded-lg text-sm font-medium transition-colors !rounded-button whitespace-nowrap">
              All Verses
            </button>
            <button @click="verseFilter = 'daily'"
              :class="verseFilter === 'daily' ? 'bg-white text-gray-900 shadow-sm' : 'text-gray-600'"
              class="px-4 py-2 rounded-lg text-sm font-medium transition-colors !rounded-button whitespace-nowrap">
              Daily Verses
            </button>
            <button @click="verseFilter = 'featured'"
              :class="verseFilter === 'featured' ? 'bg-white text-gray-900 shadow-sm' : 'text-gray-600'"
              class="px-4 py-2 rounded-lg text-sm font-medium transition-colors !rounded-button whitespace-nowrap">
              Featured
            </button>
          </div>
        </div>

        <!-- Verses Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <template x-for="verse in filteredVerses" :key="verse.id">
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 hover:shadow-md transition-shadow">
              <div class="flex items-start justify-between mb-4">
                <span :class="verse.category === 'daily' ? 'bg-blue-100 text-blue-800' : 'bg-green-100 text-green-800'"
                  class="inline-flex px-2 py-1 text-xs font-semibold rounded-full" x-text="verse.category"></span>
                <div class="flex items-center space-x-2">
                  <button @click="editVerse(verse)" class="text-blue-600 hover:text-blue-900">
                    <div class="w-4 h-4 flex items-center justify-center">
                      <i class="ri-edit-line"></i>
                    </div>
                  </button>
                  <button @click="deleteVerse(verse.id)" class="text-red-600 hover:text-red-900">
                    <div class="w-4 h-4 flex items-center justify-center">
                      <i class="ri-delete-bin-line"></i>
                    </div>
                  </button>
                </div>
              </div>
              <blockquote class="text-gray-900 font-medium mb-3 italic" x-text="verse.text"></blockquote>
              <p class="text-sm font-semibold text-gray-700" x-text="verse.reference"></p>
              <p class="text-xs text-gray-500 mt-2" x-text="verse.date"></p>
            </div>
          </template>
        </div>
      </div>

      <!-- Settings -->
      <div x-show="activeSection === 'settings'" x-transition>
        <div class="mb-8">
          <h2 class="text-3xl font-bold text-gray-900 mb-2">Settings</h2>
          <p class="text-gray-600">Configure your church website settings</p>
        </div>

        <div class="space-y-6">
          <!-- General Settings -->
          <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">General Settings</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Church Name</label>
                <input type="text" value="Grace Community Church" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Contact Email</label>
                <input type="email" value="info@gracechurch.com" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Modals -->
  <!-- News Modal -->
  <div x-show="showNewsModal" x-transition:enter="modal-enter" x-transition:enter-active="modal-enter-active" x-transition:enter-to="modal-enter-to"
    class="fixed inset-0 z-50 overflow-y-auto" style="display: none;">
    <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
      <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" @click="showNewsModal = false"></div>
      <div class="inline-block w-full max-w-2xl p-6 my-8 overflow-hidden text-left align-middle transition-all transform bg-white shadow-xl rounded-xl">
        <div class="flex items-center justify-between mb-6">
          <h3 class="text-lg font-semibold text-gray-900" x-text="editingNews ? 'Edit News Article' : 'Add News Article'"></h3>
          <button @click="showNewsModal = false" class="text-gray-400 hover:text-gray-600">
            <div class="w-6 h-6 flex items-center justify-center">
              <i class="ri-close-line text-xl"></i>
            </div>
          </button>
        </div>

        <form @submit.prevent="saveNews()">
          <div class="space-y-4">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Title</label>
              <input type="text" x-model="newsForm.title" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Content</label>
              <textarea x-model="newsForm.content" rows="6" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"></textarea>
            </div>

            <div class="grid grid-cols-2 gap-4">
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Author</label>
                <input type="text" x-model="newsForm.author" required
                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
              </div>

              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select x-model="newsForm.status" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent pr-8">
                  <option value="draft">Draft</option>
                  <option value="published">Published</option>
                </select>
              </div>
            </div>
          </div>

          <div class="flex justify-end space-x-4 mt-6">
            <button type="button" @click="showNewsModal = false"
              class="px-4 py-2 text-gray-600 hover:text-gray-800 !rounded-button whitespace-nowrap">
              Cancel
            </button>
            <button type="submit"
              class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors !rounded-button whitespace-nowrap">
              <span x-text="editingNews ? 'Update' : 'Create'"></span>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Toast Notifications -->
  <div class="fixed top-4 right-4 z-50 space-y-2" x-show="notifications.length > 0">
    <template x-for="notification in notifications" :key="notification.id">
      <div class="toast bg-white border border-gray-200 rounded-lg shadow-lg p-4 max-w-sm">
        <div class="flex items-center">
          <div class="w-8 h-8 flex items-center justify-center rounded-full mr-3"
            :class="notification.type === 'success' ? 'bg-green-100' : 'bg-red-100'">
            <i :class="notification.type === 'success' ? 'ri-check-line text-green-600' : 'ri-error-warning-line text-red-600'"></i>
          </div>
          <div class="flex-1">
            <p class="text-sm font-medium text-gray-900" x-text="notification.message"></p>
          </div>
          <button @click="removeNotification(notification.id)" class="ml-2 text-gray-400 hover:text-gray-600">
            <div class="w-4 h-4 flex items-center justify-center">
              <i class="ri-close-line"></i>
            </div>
          </button>
        </div>
      </div>
    </template>
  </div>

  <!-- Floating Action Button -->
  <div class="fixed bottom-6 right-6 z-40">
    <div class="relative" x-data="{ open: false }">
      <button @click="open = !open"
        class="w-14 h-14 bg-primary text-white rounded-full shadow-lg hover:bg-blue-700 transition-all duration-300 flex items-center justify-center">
        <div class="w-6 h-6 flex items-center justify-center">
          <i class="ri-add-line text-2xl" :class="open ? 'rotate-45' : ''" style="transition: transform 0.3s;"></i>
        </div>
      </button>

      <div x-show="open" x-transition class="absolute bottom-16 right-0 space-y-3">
        <button @click="openNewsModal(); open = false"
          class="w-12 h-12 bg-white text-gray-700 rounded-full shadow-lg hover:bg-gray-50 transition-colors flex items-center justify-center">
          <div class="w-5 h-5 flex items-center justify-center">
            <i class="ri-newspaper-line"></i>
          </div>
        </button>

        <button @click="openEventModal(); open = false"
          class="w-12 h-12 bg-white text-gray-700 rounded-full shadow-lg hover:bg-gray-50 transition-colors flex items-center justify-center">
          <div class="w-5 h-5 flex items-center justify-center">
            <i class="ri-calendar-event-line"></i>
          </div>
        </button>

        <button @click="openVerseModal(); open = false"
          class="w-12 h-12 bg-white text-gray-700 rounded-full shadow-lg hover:bg-gray-50 transition-colors flex items-center justify-center">
          <div class="w-5 h-5 flex items-center justify-center">
            <i class="ri-book-open-line"></i>
          </div>
        </button>
      </div>
    </div>
  </div>

  <script id="dashboard-data">
    function adminDashboard() {
      return {
        sidebarOpen: false,
        activeSection: 'dashboard',
        showNewsModal: false,
        editingNews: null,
        newsSearch: '',
        verseFilter: 'all',
        notifications: [],

        newsForm: {
          title: '',
          content: '',
          author: '',
          status: 'draft'
        },

        newsData: [{
            id: 1,
            title: 'Christmas Service Schedule 2024',
            excerpt: 'Join us for our special Christmas services and celebrations...',
            author: 'Pastor Michael',
            status: 'published',
            date: 'Dec 15, 2024'
          },
          {
            id: 2,
            title: 'Youth Group Winter Camp Registration',
            excerpt: 'Registration is now open for our annual winter retreat...',
            author: 'Sarah Johnson',
            status: 'published',
            date: 'Dec 10, 2024'
          },
          {
            id: 3,
            title: 'Community Outreach Program Update',
            excerpt: 'Updates on our ongoing community service initiatives...',
            author: 'David Chen',
            status: 'draft',
            date: 'Dec 8, 2024'
          }
        ],

        galleryImages: [{
            id: 1,
            title: 'Sunday Service',
            url: 'https://readdy.ai/api/search-image?query=church%20sunday%20service%20congregation%20worship%20modern%20sanctuary%20with%20people%20singing%20and%20praying%20peaceful%20atmosphere%20warm%20lighting&width=300&height=200&seq=gallery-1&orientation=landscape',
            date: 'Dec 15, 2024'
          },
          {
            id: 2,
            title: 'Youth Group',
            url: 'https://readdy.ai/api/search-image?query=church%20youth%20group%20teenagers%20bible%20study%20fellowship%20activities%20modern%20church%20interior%20bright%20and%20welcoming%20atmosphere&width=300&height=200&seq=gallery-2&orientation=landscape',
            date: 'Dec 12, 2024'
          },
          {
            id: 3,
            title: 'Christmas Choir',
            url: 'https://readdy.ai/api/search-image?query=church%20choir%20christmas%20performance%20robes%20singing%20carols%20beautiful%20church%20sanctuary%20decorated%20for%20christmas%20warm%20lighting&width=300&height=200&seq=gallery-3&orientation=landscape',
            date: 'Dec 10, 2024'
          },
          {
            id: 4,
            title: 'Community Dinner',
            url: 'https://readdy.ai/api/search-image?query=church%20community%20dinner%20fellowship%20hall%20people%20eating%20together%20families%20sharing%20meal%20warm%20welcoming%20atmosphere&width=300&height=200&seq=gallery-4&orientation=landscape',
            date: 'Dec 8, 2024'
          }
        ],

        upcomingEvents: [{
            id: 1,
            title: 'Christmas Eve Service',
            description: 'Special candlelight service with carols and communion',
            date: 'Dec 24, 2024',
            time: '7:00 PM'
          },
          {
            id: 2,
            title: 'New Year Prayer Meeting',
            description: 'Welcome 2025 with prayer and fellowship',
            date: 'Dec 31, 2024',
            time: '10:00 PM'
          },
          {
            id: 3,
            title: 'Youth Winter Retreat',
            description: 'Three-day retreat for teens and young adults',
            date: 'Jan 5, 2025',
            time: '9:00 AM'
          }
        ],

        bibleVerses: [{
            id: 1,
            text: 'For God so loved the world that he gave his one and only Son, that whoever believes in him shall not perish but have eternal life.',
            reference: 'John 3:16',
            category: 'daily',
            date: 'Dec 20, 2024'
          },
          {
            id: 2,
            text: 'Trust in the Lord with all your heart and lean not on your own understanding.',
            reference: 'Proverbs 3:5',
            category: 'featured',
            date: 'Dec 19, 2024'
          },
          {
            id: 3,
            text: 'I can do all this through him who gives me strength.',
            reference: 'Philippians 4:13',
            category: 'daily',
            date: 'Dec 18, 2024'
          }
        ],

        calendarDays: [{
            day: 1,
            date: '2024-12-01',
            events: []
          },
          {
            day: 2,
            date: '2024-12-02',
            events: []
          },
          {
            day: 3,
            date: '2024-12-03',
            events: []
          },
          {
            day: 4,
            date: '2024-12-04',
            events: []
          },
          {
            day: 5,
            date: '2024-12-05',
            events: [{
              id: 3,
              title: 'Youth Retreat'
            }]
          },
          {
            day: 6,
            date: '2024-12-06',
            events: []
          },
          {
            day: 7,
            date: '2024-12-07',
            events: []
          },
          {
            day: 8,
            date: '2024-12-08',
            events: []
          },
          {
            day: 9,
            date: '2024-12-09',
            events: []
          },
          {
            day: 10,
            date: '2024-12-10',
            events: []
          },
          {
            day: 11,
            date: '2024-12-11',
            events: []
          },
          {
            day: 12,
            date: '2024-12-12',
            events: []
          },
          {
            day: 13,
            date: '2024-12-13',
            events: []
          },
          {
            day: 14,
            date: '2024-12-14',
            events: []
          },
          {
            day: 15,
            date: '2024-12-15',
            events: []
          },
          {
            day: 16,
            date: '2024-12-16',
            events: []
          },
          {
            day: 17,
            date: '2024-12-17',
            events: []
          },
          {
            day: 18,
            date: '2024-12-18',
            events: []
          },
          {
            day: 19,
            date: '2024-12-19',
            events: []
          },
          {
            day: 20,
            date: '2024-12-20',
            events: []
          },
          {
            day: 21,
            date: '2024-12-21',
            events: []
          },
          {
            day: 22,
            date: '2024-12-22',
            events: []
          },
          {
            day: 23,
            date: '2024-12-23',
            events: []
          },
          {
            day: 24,
            date: '2024-12-24',
            events: [{
              id: 1,
              title: 'Christmas Eve'
            }]
          },
          {
            day: 25,
            date: '2024-12-25',
            events: []
          },
          {
            day: 26,
            date: '2024-12-26',
            events: []
          },
          {
            day: 27,
            date: '2024-12-27',
            events: []
          },
          {
            day: 28,
            date: '2024-12-28',
            events: []
          },
          {
            day: 29,
            date: '2024-12-29',
            events: []
          },
          {
            day: 30,
            date: '2024-12-30',
            events: []
          },
          {
            day: 31,
            date: '2024-12-31',
            events: [{
              id: 2,
              title: 'Prayer Meeting'
            }]
          }
        ],

        get filteredNews() {
          if (!this.newsSearch) return this.newsData;
          return this.newsData.filter(news =>
            news.title.toLowerCase().includes(this.newsSearch.toLowerCase()) ||
            news.author.toLowerCase().includes(this.newsSearch.toLowerCase())
          );
        },

        get filteredVerses() {
          if (this.verseFilter === 'all') return this.bibleVerses;
          return this.bibleVerses.filter(verse => verse.category === this.verseFilter);
        },

        openNewsModal() {
          this.resetNewsForm();
          this.editingNews = null;
          this.showNewsModal = true;
        },

        openGalleryModal() {
          this.showNotification('Gallery upload modal opened', 'success');
        },

        openEventModal() {
          this.showNotification('Event creation modal opened', 'success');
        },

        openVerseModal() {
          this.showNotification('Bible verse modal opened', 'success');
        },

        resetNewsForm() {
          this.newsForm = {
            title: '',
            content: '',
            author: '',
            status: 'draft'
          };
        },

        editNews(article) {
          this.editingNews = article;
          this.newsForm = {
            ...article
          };
          this.showNewsModal = true;
        },

        saveNews() {
          if (this.editingNews) {
            const index = this.newsData.findIndex(n => n.id === this.editingNews.id);
            this.newsData[index] = {
              ...this.newsForm,
              id: this.editingNews.id
            };
            this.showNotification('News article updated successfully', 'success');
          } else {
            const newArticle = {
              ...this.newsForm,
              id: Date.now(),
              excerpt: this.newsForm.content.substring(0, 100) + '...',
              date: new Date().toLocaleDateString('en-US', {
                year: 'numeric',
                month: 'short',
                day: 'numeric'
              })
            };
            this.newsData.unshift(newArticle);
            this.showNotification('News article created successfully', 'success');
          }
          this.showNewsModal = false;
          this.resetNewsForm();
        },

        deleteNews(id) {
          if (confirm('Are you sure you want to delete this news article?')) {
            this.newsData = this.newsData.filter(n => n.id !== id);
            this.showNotification('News article deleted successfully', 'success');
          }
        },

        showNotification(message, type = 'success') {
          const notification = {
            id: Date.now(),
            message,
            type
          };
          this.notifications.push(notification);
          setTimeout(() => {
            this.removeNotification(notification.id);
          }, 5000);
        },

        removeNotification(id) {
          this.notifications = this.notifications.filter(n => n.id !== id);
        }
      }
    }
  </script>

</body>

</html>