<?php include __DIR__ . '/partials/head.php';
$active = 'Contact';
include __DIR__ . '/partials/nav.php'; ?>
<section class="pt-24 pb-8 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <nav class="text-sm text-gray-500 mb-6 scroll-reveal">
      <a href="https://readdy.ai/home/596364b0-1abe-4f0c-95b0-76ae3006c30d/7ad433e2-8a20-4df8-846a-661c513607d3"
        data-readdy="true" class="hover:text-primary transition-colors">Home</a>
      <span class="mx-2">></span>
      <span class="text-gray-700">Contact</span>
    </nav>
    <div class="text-center mb-12 scroll-reveal">
      <h1 class="font-playfair text-4xl lg:text-5xl font-bold text-primary mb-4">Contact Us</h1>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        We're here to serve you and answer any questions you may have. Reach out to us through any of the
        channels below, and we'll respond as soon as possible.
      </p>
    </div>
  </div>
</section>
<section class="py-12 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
      <div class="contact-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 scroll-reveal">
        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4">
          <i class="ri-map-pin-line text-primary text-xl"></i>
        </div>
        <h3 class="font-playfair text-lg font-semibold text-gray-800 mb-2">Visit Us</h3>
        <p class="text-gray-600 text-sm leading-relaxed">
          Diocesan Secretariat<br>
          PMB 1002, Wukari<br>
          Taraba State, Nigeria
        </p>
      </div>
      <div class="contact-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 scroll-reveal">
        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4">
          <i class="ri-phone-line text-primary text-xl"></i>
        </div>
        <h3 class="font-playfair text-lg font-semibold text-gray-800 mb-2">Call Us</h3>
        <div class="space-y-1 text-sm text-gray-600">
          <p>Main: +234 803 123 4567</p>
          <p>Emergency: +234 807 890 1234</p>
          <p>Youth: +234 805 567 8901</p>
        </div>
      </div>
      <div class="contact-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 scroll-reveal">
        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4">
          <i class="ri-mail-line text-primary text-xl"></i>
        </div>
        <h3 class="font-playfair text-lg font-semibold text-gray-800 mb-2">Email Us</h3>
        <div class="space-y-1 text-sm text-gray-600">
          <p>info@dioceseofwukari.org</p>
          <p>bishop@dioceseofwukari.org</p>
          <p>youth@dioceseofwukari.org</p>
        </div>
      </div>
      <div class="contact-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 scroll-reveal">
        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4">
          <i class="ri-time-line text-primary text-xl"></i>
        </div>
        <h3 class="font-playfair text-lg font-semibold text-gray-800 mb-2">Office Hours</h3>
        <div class="space-y-1 text-sm text-gray-600">
          <p>Mon - Fri: 8:00 AM - 5:00 PM</p>
          <p>Saturday: 9:00 AM - 2:00 PM</p>
          <p>Sunday: After Mass</p>
        </div>
      </div>
    </div>
    <div class="grid lg:grid-cols-2 gap-12 mb-16">
      <div class="scroll-reveal">
        <h2 class="font-playfair text-3xl font-bold text-primary mb-6">Send Us a Message</h2>
        <form class="space-y-6">
          <div class="grid md:grid-cols-2 gap-4">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
              <input type="text" required
                class="form-input w-full px-4 py-3 border border-gray-200 !rounded-button focus:outline-none text-sm"
                placeholder="Enter your full name">
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
              <input type="email" required
                class="form-input w-full px-4 py-3 border border-gray-200 !rounded-button focus:outline-none text-sm"
                placeholder="Enter your email">
            </div>
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
            <input type="tel"
              class="form-input w-full px-4 py-3 border border-gray-200 !rounded-button focus:outline-none text-sm"
              placeholder="Enter your phone number">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Subject *</label>
            <select required
              class="custom-select form-input w-full px-4 py-3 border border-gray-200 !rounded-button focus:outline-none text-sm pr-8">
              <option value="">Select a subject</option>
              <option value="general">General Inquiry</option>
              <option value="pastoral">Pastoral Care</option>
              <option value="youth">Youth Ministry</option>
              <option value="marriage">Marriage Preparation</option>
              <option value="baptism">Baptism & Confirmation</option>
              <option value="funeral">Funeral Services</option>
              <option value="volunteer">Volunteer Opportunities</option>
              <option value="donation">Donations & Tithing</option>
            </select>
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
            <textarea required rows="5"
              class="form-input w-full px-4 py-3 border border-gray-200 !rounded-button focus:outline-none text-sm resize-none"
              placeholder="Enter your message"></textarea>
          </div>
          <button type="submit"
            class="w-full bg-primary text-white py-3 px-6 !rounded-button font-medium hover:bg-opacity-90 transition-colors whitespace-nowrap">
            Send Message
          </button>
        </form>
      </div>
      <div class="scroll-reveal">
        <h2 class="font-playfair text-3xl font-bold text-primary mb-6">Find Us</h2>
        <div class="bg-gray-200 rounded-2xl overflow-hidden mb-6"
          style="height: 400px; background-image: url('https://public.readdy.ai/gen_page/map_placeholder_1280x720.png'); background-size: cover; background-position: center;">
          <div class="w-full h-full flex items-center justify-center bg-black/20">
            <div class="text-center text-white">
              <i class="ri-map-pin-line text-4xl mb-2"></i>
              <p class="font-medium">Diocese of Wukari</p>
              <p class="text-sm opacity-90">PMB 1002, Wukari, Taraba State</p>
            </div>
          </div>
        </div>
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
          <h3 class="font-playfair text-lg font-semibold text-gray-800 mb-4">Directions & Landmarks</h3>
          <div class="space-y-3 text-sm text-gray-600">
            <div class="flex items-start space-x-3">
              <i class="ri-navigation-line text-primary mt-1"></i>
              <p>Located near Wukari Central Market, opposite Government Secondary School</p>
            </div>
            <div class="flex items-start space-x-3">
              <i class="ri-car-line text-primary mt-1"></i>
              <p>Parking available within the diocesan compound</p>
            </div>
            <div class="flex items-start space-x-3">
              <i class="ri-bus-line text-primary mt-1"></i>
              <p>Accessible by public transport - Wukari town buses stop nearby</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-12 scroll-reveal">
      <h2 class="font-playfair text-3xl font-bold text-primary mb-4">Our Staff Directory</h2>
      <p class="text-lg text-gray-600">Meet the dedicated team serving our diocesan community</p>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
      <div class="staff-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 scroll-reveal">
        <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="ri-user-line text-white text-2xl"></i>
        </div>
        <div class="text-center">
          <h3 class="font-playfair text-lg font-semibold text-gray-800 mb-1">Most Rev. Emmanuel Badejo
          </h3>
          <p class="text-secondary font-medium mb-3">Bishop of Wukari</p>
          <div class="space-y-2 text-sm text-gray-600">
            <div class="flex items-center justify-center space-x-2">
              <i class="ri-phone-line text-primary"></i>
              <span>+234 803 123 4567</span>
            </div>
            <div class="flex items-center justify-center space-x-2">
              <i class="ri-mail-line text-primary"></i>
              <span>bishop@dioceseofwukari.org</span>
            </div>
          </div>
        </div>
      </div>
      <div class="staff-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 scroll-reveal">
        <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="ri-user-line text-white text-2xl"></i>
        </div>
        <div class="text-center">
          <h3 class="font-playfair text-lg font-semibold text-gray-800 mb-1">Rev. Fr. Michael Adamu</h3>
          <p class="text-secondary font-medium mb-3">Chancellor</p>
          <div class="space-y-2 text-sm text-gray-600">
            <div class="flex items-center justify-center space-x-2">
              <i class="ri-phone-line text-primary"></i>
              <span>+234 805 234 5678</span>
            </div>
            <div class="flex items-center justify-center space-x-2">
              <i class="ri-mail-line text-primary"></i>
              <span>chancellor@dioceseofwukari.org</span>
            </div>
            <p class="text-xs">Office Hours: Mon-Fri 9:00 AM - 4:00 PM</p>
          </div>
        </div>
      </div>
      <div class="staff-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 scroll-reveal">
        <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="ri-user-line text-white text-2xl"></i>
        </div>
        <div class="text-center">
          <h3 class="font-playfair text-lg font-semibold text-gray-800 mb-1">Mrs. Grace Tarka</h3>
          <p class="text-secondary font-medium mb-3">Secretary</p>
          <div class="space-y-2 text-sm text-gray-600">
            <div class="flex items-center justify-center space-x-2">
              <i class="ri-phone-line text-primary"></i>
              <span>+234 807 345 6789</span>
            </div>
            <div class="flex items-center justify-center space-x-2">
              <i class="ri-mail-line text-primary"></i>
              <span>secretary@dioceseofwukari.org</span>
            </div>
            <p class="text-xs">Office Hours: Mon-Fri 8:00 AM - 5:00 PM</p>
          </div>
        </div>
      </div>
      <div class="staff-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 scroll-reveal">
        <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="ri-user-line text-white text-2xl"></i>
        </div>
        <div class="text-center">
          <h3 class="font-playfair text-lg font-semibold text-gray-800 mb-1">Mr. Paul Nkomo</h3>
          <p class="text-secondary font-medium mb-3">Finance Officer</p>
          <div class="space-y-2 text-sm text-gray-600">
            <div class="flex items-center justify-center space-x-2">
              <i class="ri-phone-line text-primary"></i>
              <span>+234 809 456 7890</span>
            </div>
            <div class="flex items-center justify-center space-x-2">
              <i class="ri-mail-line text-primary"></i>
              <span>finance@dioceseofwukari.org</span>
            </div>
            <p class="text-xs">Office Hours: Mon-Fri 9:00 AM - 4:00 PM</p>
          </div>
        </div>
      </div>
      <div class="staff-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 scroll-reveal">
        <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="ri-user-line text-white text-2xl"></i>
        </div>
        <div class="text-center">
          <h3 class="font-playfair text-lg font-semibold text-gray-800 mb-1">Rev. Fr. John Amos</h3>
          <p class="text-secondary font-medium mb-3">Youth Ministry Coordinator</p>
          <div class="space-y-2 text-sm text-gray-600">
            <div class="flex items-center justify-center space-x-2">
              <i class="ri-phone-line text-primary"></i>
              <span>+234 805 567 8901</span>
            </div>
            <div class="flex items-center justify-center space-x-2">
              <i class="ri-mail-line text-primary"></i>
              <span>youth@dioceseofwukari.org</span>
            </div>
            <p class="text-xs">Available: Tue, Thu, Sat 2:00 PM - 6:00 PM</p>
          </div>
        </div>
      </div>
      <div class="staff-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 scroll-reveal">
        <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="ri-user-line text-white text-2xl"></i>
        </div>
        <div class="text-center">
          <h3 class="font-playfair text-lg font-semibold text-gray-800 mb-1">Dr. Mary Okwu</h3>
          <p class="text-secondary font-medium mb-3">Education Director</p>
          <div class="space-y-2 text-sm text-gray-600">
            <div class="flex items-center justify-center space-x-2">
              <i class="ri-phone-line text-primary"></i>
              <span>+234 806 678 9012</span>
            </div>
            <div class="flex items-center justify-center space-x-2">
              <i class="ri-mail-line text-primary"></i>
              <span>education@dioceseofwukari.org</span>
            </div>
            <p class="text-xs">Office Hours: Mon-Wed-Fri 10:00 AM - 3:00 PM</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-12 scroll-reveal">
      <h2 class="font-playfair text-3xl font-bold text-primary mb-4">Departments & Services</h2>
      <p class="text-lg text-gray-600">Specialized services to meet your spiritual and pastoral needs</p>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
      <div class="department-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 scroll-reveal">
        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
          <i class="ri-building-line text-blue-600 text-xl"></i>
        </div>
        <h3 class="font-playfair text-lg font-semibold text-gray-800 mb-2">Administration</h3>
        <p class="text-gray-600 text-sm mb-4">General inquiries, documentation, and administrative services
        </p>
        <div class="space-y-2 text-sm text-gray-600">
          <div class="flex items-center space-x-2">
            <i class="ri-phone-line text-primary"></i>
            <span>+234 803 123 4567</span>
          </div>
          <div class="flex items-center space-x-2">
            <i class="ri-time-line text-primary"></i>
            <span>Mon-Fri: 8:00 AM - 5:00 PM</span>
          </div>
        </div>
      </div>
      <div class="department-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 scroll-reveal">
        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-4">
          <i class="ri-heart-line text-green-600 text-xl"></i>
        </div>
        <h3 class="font-playfair text-lg font-semibold text-gray-800 mb-2">Pastoral Care</h3>
        <p class="text-gray-600 text-sm mb-4">Spiritual guidance, counseling, and pastoral support</p>
        <div class="space-y-2 text-sm text-gray-600">
          <div class="flex items-center space-x-2">
            <i class="ri-phone-line text-primary"></i>
            <span>+234 807 890 1234</span>
          </div>
          <div class="flex items-center space-x-2">
            <i class="ri-time-line text-primary"></i>
            <span>Daily: 9:00 AM - 6:00 PM</span>
          </div>
        </div>
      </div>
      <div class="department-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 scroll-reveal">
        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mb-4">
          <i class="ri-team-line text-purple-600 text-xl"></i>
        </div>
        <h3 class="font-playfair text-lg font-semibold text-gray-800 mb-2">Youth Ministry</h3>
        <p class="text-gray-600 text-sm mb-4">Programs, events, and leadership development for young
          Catholics</p>
        <div class="space-y-2 text-sm text-gray-600">
          <div class="flex items-center space-x-2">
            <i class="ri-phone-line text-primary"></i>
            <span>+234 805 567 8901</span>
          </div>
          <div class="flex items-center space-x-2">
            <i class="ri-time-line text-primary"></i>
            <span>Tue, Thu, Sat: 2:00 PM - 6:00 PM</span>
          </div>
        </div>
      </div>
      <div class="department-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 scroll-reveal">
        <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mb-4">
          <i class="ri-book-line text-orange-600 text-xl"></i>
        </div>
        <h3 class="font-playfair text-lg font-semibold text-gray-800 mb-2">Education</h3>
        <p class="text-gray-600 text-sm mb-4">Schools, catechesis, and faith formation programs</p>
        <div class="space-y-2 text-sm text-gray-600">
          <div class="flex items-center space-x-2">
            <i class="ri-phone-line text-primary"></i>
            <span>+234 806 678 9012</span>
          </div>
          <div class="flex items-center space-x-2">
            <i class="ri-time-line text-primary"></i>
            <span>Mon, Wed, Fri: 10:00 AM - 3:00 PM</span>
          </div>
        </div>
      </div>
      <div class="department-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 scroll-reveal">
        <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mb-4">
          <i class="ri-hand-heart-line text-red-600 text-xl"></i>
        </div>
        <h3 class="font-playfair text-lg font-semibold text-gray-800 mb-2">Social Services</h3>
        <p class="text-gray-600 text-sm mb-4">Charity, community outreach, and social ministry</p>
        <div class="space-y-2 text-sm text-gray-600">
          <div class="flex items-center space-x-2">
            <i class="ri-phone-line text-primary"></i>
            <span>+234 808 789 0123</span>
          </div>
          <div class="flex items-center space-x-2">
            <i class="ri-time-line text-primary"></i>
            <span>Mon-Thu: 9:00 AM - 4:00 PM</span>
          </div>
        </div>
      </div>
      <div class="department-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100 scroll-reveal">
        <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mb-4">
          <i class="ri-money-dollar-circle-line text-yellow-600 text-xl"></i>
        </div>
        <h3 class="font-playfair text-lg font-semibold text-gray-800 mb-2">Finance</h3>
        <p class="text-gray-600 text-sm mb-4">Donations, tithing, and parish financial support</p>
        <div class="space-y-2 text-sm text-gray-600">
          <div class="flex items-center space-x-2">
            <i class="ri-phone-line text-primary"></i>
            <span>+234 809 456 7890</span>
          </div>
          <div class="flex items-center space-x-2">
            <i class="ri-time-line text-primary"></i>
            <span>Mon-Fri: 9:00 AM - 4:00 PM</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid lg:grid-cols-2 gap-12">
      <div class="scroll-reveal">
        <h2 class="font-playfair text-3xl font-bold text-primary mb-6">Quick Access Services</h2>
        <div class="grid gap-4">
          <div
            class="bg-white rounded-xl p-4 shadow-sm border border-gray-100 flex items-center space-x-4 hover:shadow-md transition-shadow">
            <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
              <i class="ri-calendar-line text-primary"></i>
            </div>
            <div class="flex-1">
              <h3 class="font-medium text-gray-800">Mass Schedules</h3>
              <p class="text-sm text-gray-600">Find mass times at all parishes</p>
            </div>
            <div class="text-sm text-gray-500">
              <i class="ri-phone-line mr-1"></i>
              +234 803 123 4567
            </div>
          </div>
          <div
            class="bg-white rounded-xl p-4 shadow-sm border border-gray-100 flex items-center space-x-4 hover:shadow-md transition-shadow">
            <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
              <i class="ri-heart-2-line text-primary"></i>
            </div>
            <div class="flex-1">
              <h3 class="font-medium text-gray-800">Marriage Preparation</h3>
              <p class="text-sm text-gray-600">Pre-marriage counseling & courses</p>
            </div>
            <div class="text-sm text-gray-500">
              <i class="ri-phone-line mr-1"></i>
              +234 807 890 1234
            </div>
          </div>
          <div
            class="bg-white rounded-xl p-4 shadow-sm border border-gray-100 flex items-center space-x-4 hover:shadow-md transition-shadow">
            <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
              <i class="ri-drop-line text-primary"></i>
            </div>
            <div class="flex-1">
              <h3 class="font-medium text-gray-800">Baptism & Confirmation</h3>
              <p class="text-sm text-gray-600">Sacrament preparation classes</p>
            </div>
            <div class="text-sm text-gray-500">
              <i class="ri-phone-line mr-1"></i>
              +234 806 678 9012
            </div>
          </div>
          <div
            class="bg-white rounded-xl p-4 shadow-sm border border-gray-100 flex items-center space-x-4 hover:shadow-md transition-shadow">
            <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
              <i class="ri-hand-heart-line text-primary"></i>
            </div>
            <div class="flex-1">
              <h3 class="font-medium text-gray-800">Volunteer Opportunities</h3>
              <p class="text-sm text-gray-600">Join our ministry teams</p>
            </div>
            <div class="text-sm text-gray-500">
              <i class="ri-phone-line mr-1"></i>
              +234 808 789 0123
            </div>
          </div>
          <div class="bg-red-50 rounded-xl p-4 border border-red-200 flex items-center space-x-4">
            <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
              <i class="ri-phone-line text-red-600"></i>
            </div>
            <div class="flex-1">
              <h3 class="font-medium text-red-800">Emergency Pastoral Care</h3>
              <p class="text-sm text-red-600">24/7 spiritual support & last rites</p>
            </div>
            <div class="text-sm text-red-600 font-medium">
              +234 807 890 1234
            </div>
          </div>
        </div>
      </div>
      <div class="scroll-reveal">
        <h2 class="font-playfair text-3xl font-bold text-primary mb-6">Stay Connected</h2>
        <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 mb-8">
          <h3 class="font-playfair text-xl font-semibold text-gray-800 mb-4">Newsletter Subscription</h3>
          <p class="text-gray-600 mb-6">Subscribe to our weekly newsletter for the latest news, events,
            and spiritual reflections from the Diocese of Wukari.</p>
          <div class="flex gap-3 mb-4">
            <input type="email" placeholder="Enter your email address"
              class="flex-1 px-4 py-3 border border-gray-200 !rounded-button focus:outline-none focus:border-primary text-sm">
            <button
              class="bg-primary text-white px-6 py-3 !rounded-button font-medium hover:bg-opacity-90 transition-colors whitespace-nowrap">
              Subscribe
            </button>
          </div>
          <p class="text-xs text-gray-500">We respect your privacy. Unsubscribe at any time.</p>
        </div>
        <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
          <h3 class="font-playfair text-xl font-semibold text-gray-800 mb-4">Follow Us</h3>
          <p class="text-gray-600 mb-6">Connect with us on social media for daily inspiration and
            community updates.</p>
          <div class="grid grid-cols-2 gap-4">
            <a href="#"
              class="flex items-center space-x-3 p-3 bg-blue-50 rounded-xl hover:bg-blue-100 transition-colors">
              <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                <i class="ri-facebook-fill text-white"></i>
              </div>
              <div>
                <p class="font-medium text-gray-800">Facebook</p>
                <p class="text-xs text-gray-500">2.1k followers</p>
              </div>
            </a>
            <a href="#"
              class="flex items-center space-x-3 p-3 bg-sky-50 rounded-xl hover:bg-sky-100 transition-colors">
              <div class="w-10 h-10 bg-sky-500 rounded-full flex items-center justify-center">
                <i class="ri-twitter-fill text-white"></i>
              </div>
              <div>
                <p class="font-medium text-gray-800">Twitter</p>
                <p class="text-xs text-gray-500">856 followers</p>
              </div>
            </a>
            <a href="#"
              class="flex items-center space-x-3 p-3 bg-pink-50 rounded-xl hover:bg-pink-100 transition-colors">
              <div class="w-10 h-10 bg-pink-600 rounded-full flex items-center justify-center">
                <i class="ri-instagram-fill text-white"></i>
              </div>
              <div>
                <p class="font-medium text-gray-800">Instagram</p>
                <p class="text-xs text-gray-500">1.3k followers</p>
              </div>
            </a>
            <a href="#"
              class="flex items-center space-x-3 p-3 bg-red-50 rounded-xl hover:bg-red-100 transition-colors">
              <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center">
                <i class="ri-youtube-fill text-white"></i>
              </div>
              <div>
                <p class="font-medium text-gray-800">YouTube</p>
                <p class="text-xs text-gray-500">654 subscribers</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script id="form-handling">
  document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.querySelector('form');
    const newsletterForms = document.querySelectorAll('input[type="email"]');
    contactForm.addEventListener('submit', function(e) {
      e.preventDefault();
      const submitBtn = this.querySelector('button[type="submit"]');
      const originalText = submitBtn.textContent;
      submitBtn.textContent = 'Sending...';
      submitBtn.disabled = true;
      setTimeout(() => {
        submitBtn.textContent = 'Message Sent!';
        submitBtn.style.backgroundColor = '#10b981';
        setTimeout(() => {
          submitBtn.textContent = originalText;
          submitBtn.disabled = false;
          submitBtn.style.backgroundColor = '';
          contactForm.reset();
        }, 2000);
      }, 1500);
    });
    newsletterForms.forEach(form => {
      const submitBtn = form.nextElementSibling;
      if (submitBtn && submitBtn.tagName === 'BUTTON') {
        submitBtn.addEventListener('click', function(e) {
          e.preventDefault();
          const originalContent = this.innerHTML;
          this.innerHTML = '<i class="ri-loader-4-line animate-spin"></i>';
          this.disabled = true;
          setTimeout(() => {
            this.innerHTML = '<i class="ri-check-line"></i>';
            this.style.backgroundColor = '#10b981';
            setTimeout(() => {
              this.innerHTML = originalContent;
              this.disabled = false;
              this.style.backgroundColor = '';
              form.value = '';
            }, 2000);
          }, 1000);
        });
      }
    });
  });
</script>
<!-- <script>
document.addEventListener('DOMContentLoaded', () => {
  const m = L.map('map2').setView([7.868, 9.777], 12);
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(m);
  L.marker([7.868,9.777]).addTo(m).bindPopup('Cathedral House');
});
</script> -->
<?php include __DIR__ . '/partials/footer.php'; ?>