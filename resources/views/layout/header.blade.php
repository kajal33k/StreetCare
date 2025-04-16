<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PawProtect - Street Animal Helper</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .navbar {
            transition: all 0.3s ease;
        }
        .navbar-scrolled {
            @apply shadow-md bg-white/90 backdrop-blur-sm;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
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
<body class="font-['Poppins']">
    <!-- Header/Navbar -->
    <header class="fixed w-full z-50">
        <nav class="navbar bg-white border-b border-gray-100 px-4 lg:px-6 py-3">
            <div class="max-w-7xl mx-auto flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="#" class="flex items-center">
                        <svg class="w-8 h-8 text-orange-500" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <span class="ml-2 text-xl font-bold text-gray-800">PawProtect</span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center space-x-1">
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-orange-50 hover:text-orange-600">About us</a>
                           
                    <div class="dropdown relative">
                      
                        <button class="px-4 py-2 text-gray-700 hover:text-orange-500 font-medium flex items-center">
                            Services
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="dropdown-menu absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 hidden">
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-orange-50 hover:text-orange-600">Volunteer</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-orange-50 hover:text-orange-600">Be a Savior</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-orange-50 hover:text-orange-600">Be a Protector</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-orange-50 hover:text-orange-600">Be an Informer</a>
                        </div>
                    </div>
                    <a href="#" class="px-4 py-2 text-gray-700 hover:text-orange-500 font-medium">Donate</a>
                    <a href="#" class="px-4 py-2 text-gray-700 hover:text-orange-500 font-medium">About</a>
                    <a href="#" class="px-4 py-2 text-gray-700 hover:text-orange-500 font-medium">Contact</a>
                </div>

                <!-- Auth Buttons - Desktop -->
                <div class="hidden lg:flex items-center space-x-3">
                    <a href="#" class="px-4 py-2 text-gray-700 hover:text-orange-500 font-medium">Login</a>
                    <a href="#" class="px-4 py-2 bg-orange-500 text-white rounded-md hover:bg-orange-600 font-medium transition-colors">Register</a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="lg:hidden focus:outline-none p-2">
                    <span class="hamburger-line block mb-1.5"></span>
                    <span class="hamburger-line block mb-1.5"></span>
                    <span class="hamburger-line block"></span>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="lg:hidden hidden bg-white border-t border-gray-200 px-4 py-3">
                <div class="flex flex-col space-y-2">
                    <a href="#" class="px-3 py-2 text-gray-700 hover:text-orange-500 font-medium">About us</a>
                    
                    <div class="dropdown relative">
                     
                        <button class="w-full flex justify-between items-center px-3 py-2 text-gray-700 hover:text-orange-500 font-medium">
                            Services
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="dropdown-menu pl-4 hidden">
                            <a href="#" class="block px-3 py-2 text-gray-700 hover:text-orange-500">Volunteer</a>
                            <a href="#" class="block px-3 py-2 text-gray-700 hover:text-orange-500">Be a Savior</a>
                            <a href="#" class="block px-3 py-2 text-gray-700 hover:text-orange-500">Be a Protector</a>
                            <a href="#" class="block px-3 py-2 text-gray-700 hover:text-orange-500">Be an Informer</a>
                        </div>
                    </div>
                    <a href="#" class="px-3 py-2 text-gray-700 hover:text-orange-500 font-medium">Donate</a>
                    <a href="#" class="px-3 py-2 text-gray-700 hover:text-orange-500 font-medium">About</a>
                    <a href="#" class="px-3 py-2 text-gray-700 hover:text-orange-500 font-medium">Contact</a>
                    <div class="border-t border-gray-200 pt-2 mt-1">
                        <a href="#" class="block px-3 py-2 text-gray-700 hover:text-orange-500 font-medium">Login</a>
                        <a href="#" class="block px-3 py-2 mt-2 bg-orange-500 text-white rounded-md hover:bg-orange-600 font-medium text-center">Register</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Placeholder for content -->
    <div class="pt-20"></div>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenuButton.classList.toggle('hamburger-active');
            mobileMenu.classList.toggle('hidden');
        });

        // Dropdown functionality
        const dropdownButtons = document.querySelectorAll('.dropdown > button');
        dropdownButtons.forEach(button => {
            button.addEventListener('click', () => {
                const dropdownMenu = button.nextElementSibling;
                dropdownMenu.classList.toggle('hidden');
            });
        });

        // Navbar scroll effect
        const navbar = document.querySelector('.navbar');
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