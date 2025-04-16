<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEA - Protector for Street Animals</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        primary: '#4F46E5',
                        secondary: '#10B981',
                        dark: '#1F2937',
                        light: '#F9FAFB',
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .text-shadow {
                text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
            }
            .hero-gradient {
                background: linear-gradient(135deg, rgba(79, 70, 229, 0.9) 0%, rgba(16, 185, 129, 0.9) 100%);
            }
        }
    </style>
</head>
<body class="font-poppins bg-light">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i class="fas fa-paw text-secondary text-2xl mr-2"></i>
                        <span class="text-xl font-bold text-dark">BEA</span>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="#" class="border-primary text-dark inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Home</a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">About</a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Our Work</a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Adoption</a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Contact</a>
                    </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    <button class="bg-primary hover:bg-indigo-700 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300">Donate Now</button>
                </div>
                <div class="-mr-2 flex items-center sm:hidden">
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary">
                        <span class="sr-only">Open main menu</span>
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-gradient text-white">
        <div class="max-w-7xl mx-auto py-24 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl text-shadow">
                    Protecting Street Animals Worldwide
                </h1>
                <p class="mt-6 max-w-lg mx-auto text-xl text-gray-100 text-shadow">
                    BEA is dedicated to rescuing, rehabilitating, and finding loving homes for street animals in need.
                </p>
                <div class="mt-10 flex justify-center space-x-4">
                    <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-primary bg-white hover:bg-gray-50 transition duration-300">
                        Get Involved
                    </a>
                    <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-secondary hover:bg-emerald-600 transition duration-300">
                        Adopt a Pet
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
                <div class="text-center p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-4xl font-bold text-primary">1,250+</div>
                    <div class="mt-2 text-gray-600">Animals Rescued</div>
                </div>
                <div class="text-center p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-4xl font-bold text-secondary">850+</div>
                    <div class="mt-2 text-gray-600">Successful Adoptions</div>
                </div>
                <div class="text-center p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-4xl font-bold text-primary">50+</div>
                    <div class="mt-2 text-gray-600">Volunteers</div>
                </div>
                <div class="text-center p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-4xl font-bold text-secondary">15</div>
                    <div class="mt-2 text-gray-600">Cities Worldwide</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mission Section -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-primary font-semibold tracking-wide uppercase">Our Mission</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-dark sm:text-4xl">
                    Creating a better world for street animals
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    We believe every animal deserves love, care, and a safe home.
                </p>
            </div>

            <div class="mt-20">
                <div class="grid grid-cols-1 gap-12 md:grid-cols-3">
                    <div class="text-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white mx-auto">
                            <i class="fas fa-heart text-xl"></i>
                        </div>
                        <div class="mt-5">
                            <h3 class="text-lg font-medium text-dark">Rescue</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Our teams work around the clock to rescue animals from dangerous situations.
                            </p>
                        </div>
                    </div>

                    <div class="text-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-secondary text-white mx-auto">
                            <i class="fas fa-medkit text-xl"></i>
                        </div>
                        <div class="mt-5">
                            <h3 class="text-lg font-medium text-dark">Rehabilitate</h3>
                            <p class="mt-2 text-base text-gray-500">
                                We provide medical care, nourishment, and love to help animals recover.
                            </p>
                        </div>
                    </div>

                    <div class="text-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white mx-auto">
                            <i class="fas fa-home text-xl"></i>
                        </div>
                        <div class="mt-5">
                            <h3 class="text-lg font-medium text-dark">Rehome</h3>
                            <p class="mt-2 text-base text-gray-500">
                                We carefully match animals with loving forever families through our adoption program.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Animals -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold tracking-tight text-dark sm:text-4xl">
                    Animals Waiting for Homes
                </h2>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">
                    Meet some of our wonderful animals ready for adoption.
                </p>
            </div>

            <div class="mt-12 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Animal Card 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="h-48 overflow-hidden">
                        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1583511655826-05700d52f4d9?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Dog for adoption">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-medium text-dark">Buddy</h3>
                            <span class="px-2 py-1 text-xs font-semibold text-white bg-secondary rounded-full">Dog</span>
                        </div>
                        <div class="mt-2 text-sm text-gray-500">
                            <p>2 years old • Male • Neutered</p>
                        </div>
                        <p class="mt-3 text-base text-gray-600">
                            Friendly and energetic, Buddy loves long walks and cuddles.
                        </p>
                        <div class="mt-4">
                            <button class="w-full bg-primary hover:bg-indigo-700 text-white py-2 px-4 rounded-md text-sm font-medium transition duration-300">
                                Meet Buddy
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Animal Card 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="h-48 overflow-hidden">
                        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Cat for adoption">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-medium text-dark">Luna</h3>
                            <span class="px-2 py-1 text-xs font-semibold text-white bg-primary rounded-full">Cat</span>
                        </div>
                        <div class="mt-2 text-sm text-gray-500">
                            <p>1 year old • Female • Spayed</p>
                        </div>
                        <p class="mt-3 text-base text-gray-600">
                            Gentle and affectionate, Luna enjoys quiet afternoons in sunny spots.
                        </p>
                        <div class="mt-4">
                            <button class="w-full bg-primary hover:bg-indigo-700 text-white py-2 px-4 rounded-md text-sm font-medium transition duration-300">
                                Meet Luna
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Animal Card 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="h-48 overflow-hidden">
                        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1591769225440-811ad7d6eab2?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Dog for adoption">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-medium text-dark">Max</h3>
                            <span class="px-2 py-1 text-xs font-semibold text-white bg-secondary rounded-full">Dog</span>
                        </div>
                        <div class="mt-2 text-sm text-gray-500">
                            <p>3 years old • Male • Neutered</p>
                        </div>
                        <p class="mt-3 text-base text-gray-600">
                            Loyal and protective, Max would make a great companion for an active family.
                        </p>
                        <div class="mt-4">
                            <button class="w-full bg-primary hover:bg-indigo-700 text-white py-2 px-4 rounded-md text-sm font-medium transition duration-300">
                                Meet Max
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-secondary hover:bg-emerald-600 transition duration-300">
                    View All Animals
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-primary font-semibold tracking-wide uppercase">Success Stories</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-dark sm:text-4xl">
                    Happy Pets, Happy Families
                </p>
            </div>

            <div class="mt-16 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Testimonial 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-12 w-12 rounded-full" src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah Johnson">
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-medium text-dark">Sarah Johnson</h4>
                            <p class="text-sm text-gray-500">Adopted Bella in 2022</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text-gray-600">
                            "Adopting Bella through BEA was the best decision we ever made. The process was smooth and the team was so supportive. Bella has brought so much joy to our family!"
                        </p>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-12 w-12 rounded-full" src="https://randomuser.me/api/portraits/men/45.jpg" alt="Michael Chen">
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-medium text-dark">Michael Chen</h4>
                            <p class="text-sm text-gray-500">Adopted Rocky in 2021</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text-gray-600">
                            "Rocky was rescued from terrible conditions, but you'd never know it now. The rehabilitation work BEA does is incredible. We're so grateful for their dedication to animals in need."
                        </p>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-12 w-12 rounded-full" src="https://randomuser.me/api/portraits/women/68.jpg" alt="Emma Rodriguez">
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-medium text-dark">Emma Rodriguez</h4>
                            <p class="text-sm text-gray-500">Volunteer since 2020</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text-gray-600">
                            "Volunteering with BEA has been one of the most rewarding experiences of my life. Seeing animals transform from scared and injured to happy and healthy is truly magical."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="bg-primary text-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="md:flex md:items-center md:justify-between">
                <div class="md:w-2/3">
                    <h2 class="text-2xl font-bold tracking-tight sm:text-3xl">
                        Ready to make a difference?
                    </h2>
                    <p class="mt-3 max-w-3xl text-lg text-indigo-100">
                        Whether you want to adopt, volunteer, or donate, your support helps us save more lives every day.
                    </p>
                </div>
                <div class="mt-8 flex md:mt-0 md:flex-shrink-0">
                    <div class="inline-flex rounded-md shadow">
                        <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-primary bg-white hover:bg-gray-50 transition duration-300">
                            Get Involved
                        </a>
                    </div>
                    <div class="ml-3 inline-flex rounded-md shadow">
                        <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-secondary hover:bg-emerald-600 transition duration-300">
                            Donate Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">About BEA</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Our Story</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Team</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Impact</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Careers</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Get Involved</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Volunteer</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Foster</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Donate</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Fundraise</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Adoption</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Available Pets</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Adoption Process</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Adoption Fees</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Post-Adoption</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Connect</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Contact Us</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">FAQ</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Blog</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Press</a></li>
                    </ul>
                    <div class="mt-6 flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-12 border-t border-gray-700 pt-8 flex flex-col md:flex-row justify-between">
                <p class="text-base text-gray-400">
                    &copy; 2023 BEA - Protector for Street Animals. All rights reserved.
                </p>
                <div class="mt-4 md:mt-0 flex space-x-6">
                    <a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Privacy Policy</a>
                    <a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Terms of Service</a>
                    <a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>