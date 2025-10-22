<?php

$settings = json_decode(file_get_contents(__DIR__ . '/../data/settings.json'), true);
?>
<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($settings['site_name']) ?></title>
  <meta name="description" content="Catholic Diocese of Wukari — a sacred yet modern digital sanctuary.">
  <meta name="theme-color" content="<?= htmlspecialchars($settings['primary_color']) ?>">
  <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
  <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&family=Poppins:wght@400;600&family=Playfair+Display:wght@600;800&display=swap" rel="stylesheet">
  <!-- Tailwind v3 Play CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#1f3d2b',
            secondary: '#c5a559',
            light: '#f9f7f3'
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
          },
          fontFamily: {
            sans: ['Inter', 'Poppins', 'ui-sans-serif', 'system-ui'],
            display: ['Playfair Display', 'serif']
          }
        }
      }
    }
  </script>
  <!-- Alpine.js v3 -->
  <script defer src="https://cdn.jsdelivr.net/npm/[email protected]/dist/cdn.min.js"></script>
  <!-- Leaflet for maps -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="" crossorigin="" />
  <script defer src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="" crossorigin=""></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
  <!-- <link rel="stylesheet" href="/assets/css/custom.css"> -->
  <style>
    :where([class^="ri-"])::before {
      content: "\f3c2";
    }

    .font-playfair {
      font-family: 'Playfair Display', serif;
    }

    .font-inter {
      font-family: 'Inter', sans-serif;
    }

    .hero-bg {
      background-image: linear-gradient(135deg, rgba(249, 247, 243, 0.9) 0%, rgba(31, 61, 43, 0.1) 100%), url('https://readdy.ai/api/search-image?query=peaceful%20cathedral%20interior%20with%20warm%20golden%20light%20streaming%20through%20stained%20glass%20windows%2C%20serene%20atmosphere%2C%20gothic%20architecture%2C%20spiritual%20ambiance%2C%20soft%20lighting%2C%20religious%20sanctuary%2C%20divine%20rays%20of%20light%2C%20sacred%20space%20with%20wooden%20pews%20and%20stone%20pillars%2C%20warm%20color%20palette&width=1920&height=1080&seq=hero1&orientation=landscape');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }

    .scroll-reveal {
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.8s ease;
    }

    .scroll-reveal.revealed {
      opacity: 1;
      transform: translateY(0);
    }

    .card-hover {
      transition: all 0.3s ease;
    }

    .card-hover:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 40px rgba(31, 61, 43, 0.15);
    }

    .navbar-blur {
      backdrop-filter: blur(10px);
      background: rgba(249, 247, 243, 0.9);
    }

    .dropdown-container:hover .dropdown-menu {
      opacity: 1;
      visibility: visible;
      transform: translateY(0);
    }

    .dropdown-container:hover .dropdown-trigger i {
      transform: rotate(180deg);
    }

    .dropdown-menu {
      backdrop-filter: blur(10px);
      background: rgba(255, 255, 255, 0.95);
    }
  </style>
  <style>
    .navbar-blur {
      backdrop-filter: blur(10px);
      background: rgba(249, 247, 243, 0.9);
    }

    .dropdown-container:hover .dropdown-menu {
      opacity: 1;
      visibility: visible;
      transform: translateY(0);
    }

    .dropdown-container:hover .dropdown-trigger i {
      transform: rotate(180deg);
    }

    .dropdown-menu {
      backdrop-filter: blur(10px);
      background: rgba(255, 255, 255, 0.95);
    }
  </style>

  <style>
    .about-hero-bg {
      background-image: linear-gradient(135deg, rgba(31, 61, 43, 0.8) 0%, rgba(31, 61, 43, 0.6) 100%), url('https://readdy.ai/api/search-image?query=majestic%20Catholic%20cathedral%20interior%20with%20vaulted%20ceilings%20and%20stained%20glass%20windows%2C%20golden%20light%20streaming%20through%20colorful%20glass%2C%20gothic%20architecture%2C%20peaceful%20sanctuary%20with%20wooden%20pews%2C%20sacred%20atmosphere%2C%20religious%20grandeur%2C%20spiritual%20space%20with%20stone%20pillars%20and%20arches&width=1920&height=800&seq=about-hero&orientation=landscape');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }

    .timeline-item {
      position: relative;
      padding-left: 2rem;
    }

    .timeline-item::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0.5rem;
      width: 12px;
      height: 12px;
      background: #c5a559;
      border-radius: 50%;
      border: 3px solid white;
      box-shadow: 0 0 0 3px #c5a559;
    }

    .timeline-item:not(:last-child)::after {
      content: '';
      position: absolute;
      left: 5px;
      top: 1.5rem;
      width: 2px;
      height: calc(100% - 1rem);
      background: #e5e7eb;
    }
  </style>

  <script defer src="/assets/js/app.js"></script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "CatholicChurch",
      "name": "Catholic Diocese of Wukari",
      "address": "<?= addslashes($settings['address']) ?>",
      "telephone": "<?= addslashes($settings['contact_phone']) ?>",
      "email": "<?= addslashes($settings['contact_email']) ?>",
      "url": "https://diocese.example",
      "image": "/assets/img/hero.jpg"
    }
  </script>

  <script id="navbar-scroll">
    document.addEventListener('DOMContentLoaded', function() {
      const navbar = document.querySelector('nav');
      let lastScrollY = window.scrollY;
      window.addEventListener('scroll', () => {
        const currentScrollY = window.scrollY;
        if (currentScrollY > 100) {
          navbar.style.transform = currentScrollY > lastScrollY ? 'translateY(-100%)' : 'translateY(0)';
        } else {
          navbar.style.transform = 'translateY(0)';
        }
        lastScrollY = currentScrollY;
      });
    });
  </script>

</head>

<body class="font-inter text-gray-800" style="background-color: #f9f7f3;">