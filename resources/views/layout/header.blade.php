<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PawProtect - Street Animal Helper</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to bottom, #fef9f6 0%, #f4ece6 100%);
    }
    .navbar-scrolled {
      @apply shadow-md bg-white/90 backdrop-blur-sm;
    }
    .hamburger-line {
      @apply w-6 h-0.5 bg-gray-700 transition-all;
    }
    .hamburger-active > span:nth-child(1) {
      @apply rotate-45 translate-y-1.5;
    }
    .hamburger-active > span:nth-child(2) {
      @apply scale-0;
    }
    .hamburger-active > span:nth-child(3) {
      @apply -rotate-45 -translate-y-1.5;
    }
  </style>
</head>
<body class="text-gray-700">

  <!-- Topbar -->
  <div class="bg-[#3B1C32] text-white py-2 px-4 sm:px-6 lg:px-8 text-sm">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
      <div class="flex flex-wrap space-x-4 sm:space-x-8">
        <a href="mailto:contact@example.com" class="flex items-center hover:text-pink-200">
          <span class="material-icons mr-2">email</span> contact@example.com
        </a>
        <a href="tel:+1234567890" class="flex items-center hover:text-pink-200">
          <span class="material-icons mr-2">call</span> +1 (234) 567-890
        </a>
      </div>
      <div class="flex space-x-4">
        <a href="#" class="hover:text-blue-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(249, 247, 247);transform: ;msFilter:;"><path d="M12.001 2.002c-5.522 0-9.999 4.477-9.999 9.999 0 4.99 3.656 9.126 8.437 9.879v-6.988h-2.54v-2.891h2.54V9.798c0-2.508 1.493-3.891 3.776-3.891 1.094 0 2.24.195 2.24.195v2.459h-1.264c-1.24 0-1.628.772-1.628 1.563v1.875h2.771l-.443 2.891h-2.328v6.988C18.344 21.129 22 16.992 22 12.001c0-5.522-4.477-9.999-9.999-9.999z"></path></svg></a>
        <a href="#" class="hover:text-blue-300">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(243, 237, 237);transform: ;msFilter:;"><path d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z"></path></svg>
        </a>
        <a href="#" class="hover:text-blue-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(244, 241, 241);transform: ;msFilter:;"><path d="M20 3H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM8.339 18.337H5.667v-8.59h2.672v8.59zM7.003 8.574a1.548 1.548 0 1 1 0-3.096 1.548 1.548 0 0 1 0 3.096zm11.335 9.763h-2.669V14.16c0-.996-.018-2.277-1.388-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248h-2.667v-8.59h2.56v1.174h.037c.355-.675 1.227-1.387 2.524-1.387 2.704 0 3.203 1.778 3.203 4.092v4.71z"></path></svg></a>
      </div>
    </div>
  </div>

  <!-- Navbar -->
  <header class="w-full z-50 sticky top-0">
    <nav class="navbar transition-all duration-300 bg-white/80 backdrop-blur-md shadow-sm px-4 lg:px-6 py-3">
      <div class="max-w-7xl mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="#" class="flex items-center">
          <img src="{{ asset('asset/image/logo.jpg') }}" alt="PawProtect" class="h-10 md:h-12 rounded-full">
        </a>

        <!-- Desktop Nav -->
        <div class="hidden lg:flex items-center space-x-4">
          <a href="#" class="hover:text-pink-600 font-medium">About Us</a>
          <div class="relative group">
            <button class="hover:text-pink-600 font-medium flex items-center">
              Services
              <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
              </svg>
            </button>
            <div class="absolute hidden group-hover:block bg-white text-sm text-gray-700 rounded-md shadow-md mt-2 py-1 z-50">
              <a href="#" class="block px-4 py-2 hover:bg-pink-50">Volunteer</a>
              <a href="#" class="block px-4 py-2 hover:bg-pink-50">Be a Savior</a>
              <a href="#" class="block px-4 py-2 hover:bg-pink-50">Be a Protector</a>
              <a href="#" class="block px-4 py-2 hover:bg-pink-50">Be an Informer</a>
            </div>
          </div>
          <a href="#" class="hover:text-pink-600 font-medium">Donate</a>
          <a href="#" class="hover:text-pink-600 font-medium">Contact</a>
        </div>

        <!-- Auth Buttons -->
        <div class="hidden lg:flex items-center space-x-3">
          <a href="#" class="relative px-5 py-2 bg-gradient-to-r from-[#3B1C32] to-[#A64D79] text-white rounded-full shadow-md hover:scale-105 transition transform duration-300">
            <span class="absolute inset-0 bg-white opacity-10 blur-md rounded-full"></span>
            <span class="relative z-10">Login</span>
          </a>
          <a href="#" class="relative px-5 py-2 bg-gradient-to-r from-[#A64D79] to-[#3B1C32] text-white rounded-full shadow-md hover:scale-105 transition transform duration-300">
            <span class="absolute inset-0 bg-white opacity-10 blur-md rounded-full"></span>
            <span class="relative z-10">Register</span>
          </a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button" class="lg:hidden flex flex-col gap-1 p-2 focus:outline-none">
          <span class="hamburger-line"></span>
          <span class="hamburger-line"></span>
          <span class="hamburger-line"></span>
        </button>
      </div>

      <!-- Mobile Menu -->
      <div id="mobile-menu" class="hidden lg:hidden mt-4 px-4 space-y-2">
        <a href="#" class="block py-2 hover:text-pink-600">About Us</a>
        <div class="border-t border-gray-200"></div>
        <button id="mobile-dropdown-button" class="w-full text-left py-2 flex justify-between items-center hover:text-pink-600">
          Services
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
          </svg>
        </button>
        <div id="mobile-dropdown-menu" class="hidden pl-4 space-y-2">
          <a href="#" class="block py-1 hover:text-pink-600">Volunteer</a>
          <a href="#" class="block py-1 hover:text-pink-600">Be a Savior</a>
          <a href="#" class="block py-1 hover:text-pink-600">Be a Protector</a>
          <a href="#" class="block py-1 hover:text-pink-600">Be an Informer</a>
        </div>
        <a href="#" class="block py-2 hover:text-pink-600">Donate</a>
        <a href="#" class="block py-2 hover:text-pink-600">Contact</a>
        <div class="border-t border-gray-200 pt-3">
          <a href="#" class="block w-full text-center py-2 rounded-full text-white bg-gradient-to-r from-[#3B1C32] to-[#A64D79]">Login</a>
          <a href="#" class="block mt-2 w-full text-center py-2 rounded-full text-white bg-gradient-to-r from-[#A64D79] to-[#3B1C32]">Register</a>
        </div>
      </div>
    </nav>
  </header>

  <!-- JS -->
  <script>
    const mobileMenuBtn = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileDropdownBtn = document.getElementById('mobile-dropdown-button');
    const mobileDropdownMenu = document.getElementById('mobile-dropdown-menu');
    const navbar = document.querySelector('.navbar');

    mobileMenuBtn.addEventListener('click', () => {
      mobileMenuBtn.classList.toggle('hamburger-active');
      mobileMenu.classList.toggle('hidden');
    });

    mobileDropdownBtn.addEventListener('click', () => {
      mobileDropdownMenu.classList.toggle('hidden');
    });

    window.addEventListener('scroll', () => {
      if (window.scrollY > 10) {
        navbar.classList.add('navbar-scrolled');
      } else {
        navbar.classList.remove('navbar-scrolled');
      }
    });
  </script>
</body>
</html>
