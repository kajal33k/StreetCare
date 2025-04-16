@extends('layout.main')
@section('content')
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4F46E5',
                        secondary: '#10B981',
                        accent: '#F59E0B',
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>


    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-[#AC9A60]">
        <div class="absolute inset-0 bg-black opacity-40"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center">
                <!-- Content -->
                <div class="w-full lg:w-1/2 py-12 sm:py-16 lg:py-24 xl:py-32">
                    <div class="text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">
                            <span class="block">This is your chance</span>
                            <span class="block text-accent">to save a life</span>
                        </h1>

                        <p class="mt-3 text-lg text-gray-300 sm:mt-5 sm:text-xl md:mt-5 max-w-lg mx-auto lg:mx-0">
                            Help Us Help Them
                        </p>

                        <div
                            class="mt-8 flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 justify-center lg:justify-start">
                            <a href="#"
                                class="px-8 py-3 border border-white text-base font-medium rounded-md text-white bg-primary hover:bg-yellow-700 transition-colors duration-200 md:py-4 md:text-lg md:px-10">
                                Donate Now
                            </a>

                            <a href="#"
                                class="px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary bg-white hover:bg-gray-50 transition-colors duration-200 md:py-4 md:text-lg md:px-10">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Image -->
                <div class="w-full lg:w-1/2 lg:pl-8">
                    <div class="aspect-w-16 aspect-h-9 lg:aspect-none">
                        <img class="w-full h-full object-cover rounded-lg shadow-xl"
                            src="{{asset('asset/image/street-paws.png')}}"
                            alt="Rescued animals looking for adoption" loading="lazy" width="800" height="600">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-white to-gray-50 font-[Poppins]">
        <div class="max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-14">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    How You Can <span class="text-pink-500">Make a Difference</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Choose your way to help animals in need. Every action counts in creating a better world for them.
                </p>
            </div>

            <!-- Categories Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Adopt Card -->
                <div
                    class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 h-80 bg-white">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent z-10"></div>
                    <img src="https://images.unsplash.com/photo-1583511655826-05700442b31b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                        alt="Happy dog with adoptive family"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        loading="lazy">
                    <div class="absolute bottom-0 left-0 z-20 p-6 w-full">
                        <div class="flex items-center mb-3">
                            <div class="bg-pink-500 p-2 rounded-lg shadow-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <span class="ml-3 text-sm font-semibold text-white bg-pink-500/90 px-3 py-1 rounded-full">Give
                                Home</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2">Adopt a Friend</h3>
                        <p class="text-gray-200 mb-4">Open your heart and home to a loving animal in need of family.</p>
                        <a href="#"
                            class="inline-flex items-center text-white font-medium group-hover:text-pink-300 transition-colors">
                            Find your companion
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 ml-1 transform group-hover:translate-x-1 transition-transform"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                    <div class="absolute top-4 right-4 z-20">
                        <span
                            class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white/90 text-pink-600">42
                            Pets Waiting</span>
                    </div>
                </div>

                <!-- Donate Card -->
                <div
                    class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 h-80 bg-white">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/70 to-transparent z-10"></div>
                    <img src="https://images.unsplash.com/photo-1455103493930-a116f655b6c5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80"
                        alt="Veterinarian helping a dog"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        loading="lazy">
                    <div class="absolute bottom-0 left-0 z-20 p-6 w-full">
                        <div class="flex items-center mb-3">
                            <div class="bg-blue-500 p-2 rounded-lg shadow-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span
                                class="ml-3 text-sm font-semibold text-white bg-blue-500/90 px-3 py-1 rounded-full">Support</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2">Donate for Care</h3>
                        <p class="text-gray-200 mb-4">Your contribution helps provide food, shelter and medical treatment.
                        </p>
                        <a href="#"
                            class="inline-flex items-center text-white font-medium group-hover:text-blue-300 transition-colors">
                            Make a difference
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 ml-1 transform group-hover:translate-x-1 transition-transform"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                    <div class="absolute top-4 right-4 z-20">
                        <span
                            class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white/90 text-blue-600">Urgent
                            Needs</span>
                    </div>
                </div>

                <!-- Medical Help Card -->
                <div
                    class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 h-80 bg-white">
                    <div class="absolute inset-0 bg-gradient-to-t from-green-900/70 to-transparent z-10"></div>
                    <img src="https://images.unsplash.com/photo-1579165466749-5650df9b7dab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                        alt="Veterinarian examining a cat"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        loading="lazy">
                    <div class="absolute bottom-0 left-0 z-20 p-6 w-full">
                        <div class="flex items-center mb-3">
                            <div class="bg-green-500 p-2 rounded-lg shadow-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span
                                class="ml-3 text-sm font-semibold text-white bg-green-500/90 px-3 py-1 rounded-full">Health</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2">Medical Help</h3>
                        <p class="text-gray-200 mb-4">Sponsor medical treatments for injured or sick animals.</p>
                        <a href="#"
                            class="inline-flex items-center text-white font-medium group-hover:text-green-300 transition-colors">
                            Support treatment
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 ml-1 transform group-hover:translate-x-1 transition-transform"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                    <div class="absolute top-4 right-4 z-20">
                        <span
                            class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white/90 text-green-600">Critical
                            Cases</span>
                    </div>
                </div>

                <!-- Protect Card -->
                <div
                    class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 h-80 bg-white">
                    <div class="absolute inset-0 bg-gradient-to-t from-purple-900/70 to-transparent z-10"></div>
                    <img src="https://images.unsplash.com/photo-1544568100-847a948585b9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80"
                        alt="Person protecting a dog"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        loading="lazy">
                    <div class="absolute bottom-0 left-0 z-20 p-6 w-full">
                        <div class="flex items-center mb-3">
                            <div class="bg-purple-500 p-2 rounded-lg shadow-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <span
                                class="ml-3 text-sm font-semibold text-white bg-purple-500/90 px-3 py-1 rounded-full">Safety</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2">Protect Animals</h3>
                        <p class="text-gray-200 mb-4">Join our mission to safeguard animals from abuse and neglect.</p>
                        <a href="#"
                            class="inline-flex items-center text-white font-medium group-hover:text-purple-300 transition-colors">
                            Become protector
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 ml-1 transform group-hover:translate-x-1 transition-transform"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                    <div class="absolute top-4 right-4 z-20">
                        <span
                            class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white/90 text-purple-600">Join
                            5K+ Heroes</span>
                    </div>
                </div>

                <!-- Volunteer Card -->
                <div
                    class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 h-80 bg-white">
                    <div class="absolute inset-0 bg-gradient-to-t from-orange-900/70 to-transparent z-10"></div>
                    <img src="https://images.unsplash.com/photo-1551334787-21e6bd3ab135?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                        alt="Volunteers helping animals"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        loading="lazy">
                    <div class="absolute bottom-0 left-0 z-20 p-6 w-full">
                        <div class="flex items-center mb-3">
                            <div class="bg-orange-500 p-2 rounded-lg shadow-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <span
                                class="ml-3 text-sm font-semibold text-white bg-orange-500/90 px-3 py-1 rounded-full">Hands
                                On</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2">Volunteer</h3>
                        <p class="text-gray-200 mb-4">Donate your time and skills to help animals directly.</p>
                        <a href="#"
                            class="inline-flex items-center text-white font-medium group-hover:text-orange-300 transition-colors">
                            Join our team
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 ml-1 transform group-hover:translate-x-1 transition-transform"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                    <div class="absolute top-4 right-4 z-20">
                        <span
                            class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white/90 text-orange-600">Help
                            Needed</span>
                    </div>
                </div>

                <!-- Report Card -->
                <div
                    class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 h-80 bg-white">
                    <div class="absolute inset-0 bg-gradient-to-t from-red-900/70 to-transparent z-10"></div>
                    <img src="https://images.unsplash.com/photo-1564349683136-77e08dba1ef7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80"
                        alt="Person reporting animal in need"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        loading="lazy">
                    <div class="absolute bottom-0 left-0 z-20 p-6 w-full">
                        <div class="flex items-center mb-3">
                            <div class="bg-red-500 p-2 rounded-lg shadow-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                </svg>
                            </div>
                            <span
                                class="ml-3 text-sm font-semibold text-white bg-red-500/90 px-3 py-1 rounded-full">Emergency</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2">Report Rescue</h3>
                        <p class="text-gray-200 mb-4">See an animal in distress? Alert our rescue team immediately.</p>
                        <a href="#"
                            class="inline-flex items-center text-white font-medium group-hover:text-red-300 transition-colors">
                            Report now
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 ml-1 transform group-hover:translate-x-1 transition-transform"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                    <div class="absolute top-4 right-4 z-20">
                        <span
                            class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white/90 text-red-600">24/7
                            Active</span>
                    </div>
                </div>
            </div>

            <!-- View All Button -->
            <div class="text-center mt-12">
                <a href="#"
                    class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-pink-600 hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500 transition-all">
                    Explore all ways to help
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 -mr-1" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .hero-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1453227588063-bb302b62f50b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
        }
    </style>
 
        <!-- Hero Section -->
        <section class="hero-bg min-h-[70vh] flex flex-col justify-center items-center text-white text-center px-4 py-20">
            <h1 class="text-4xl md:text-6xl font-bold mb-4 tracking-wide">TRANSFORMING LIVES</h1>
            <h2 class="text-3xl md:text-5xl font-semibold mb-8">ONE PAW AT A TIME</h2>
            <p class="max-w-2xl mx-auto text-lg md:text-xl mb-8">
                Animal Matter to Me (AMTM) is a dedicated nonprofit organization focused on the rescue, rehabilitation, and
                care of stray and abandoned animals. Since 2010, we have been creating a safe haven where every animal
                receives the love, respect, and medical care they deserve.
            </p>
            <button
                class="bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 px-8 rounded-full text-lg transition duration-300 transform hover:scale-105">
                Know More About Us
            </button>
        </section>

        <!-- What We Do Section -->
        <section class="py-16 px-4 max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">WHAT WE DO</h2>
                <h3 class="text-2xl md:text-3xl font-semibold text-amber-600">PROTECTING OUR VOICELESS FRIENDS</h3>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition duration-300 transform hover:scale-105">
                    <div class="h-48 bg-amber-100 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-amber-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold mb-3 text-gray-800">Sterilization & Vaccination</h4>
                        <p class="text-gray-600 mb-4">
                            Controlling the population of stray animals through humane sterilization and vaccination drives,
                            preventing the spread of diseases.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition duration-300 transform hover:scale-105">
                    <div class="h-48 bg-amber-100 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-amber-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold mb-3 text-gray-800">Emergency Rescue</h4>
                        <p class="text-gray-600 mb-4">
                            Providing critical rescue services for animals in distress, whether injured in accidents or
                            abandoned by their owners.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition duration-300 transform hover:scale-105">
                    <div class="h-48 bg-amber-100 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-amber-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold mb-3 text-gray-800">Medical Care & Rehabilitation</h4>
                        <p class="text-gray-600">
                            Our state-of-the-art facility offers essential medical care, surgeries, and rehabilitation to
                            help animals recover and thrive.
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <button
                    class="bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 px-8 rounded-full text-lg transition duration-300 transform hover:scale-105">
                    Know More
                </button>
            </div>
        </section>




        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
            rel="stylesheet">
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Inter', 'sans-serif'],
                        },
                        colors: {
                            primary: {
                                500: '#3B82F6',
                                600: '#2563EB',
                            },
                            secondary: {
                                500: '#10B981',
                                600: '#059669',
                            }
                        }
                    }
                }
            }
        </script>

        <section class="py-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <span
                    class="inline-block px-3 py-1 text-sm font-semibold text-secondary-600 bg-secondary-100 rounded-full mb-4">Join
                    The Movement</span>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Be Part of the Community & Protect Together
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Collaborate with like-minded individuals to make a
                    lasting
                    impact on what matters most.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Benefit 1 -->
                <div
                    class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 border border-gray-100">
                    <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Collaborate</h3>
                    <p class="text-gray-600">Work alongside passionate individuals who share your commitment to making a
                        difference.</p>
                </div>

                <!-- Benefit 2 -->
                <div
                    class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 border border-gray-100">
                    <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Take Action</h3>
                    <p class="text-gray-600">Participate in meaningful initiatives that create tangible change in our
                        community.</p>
                </div>

                <!-- Benefit 3 -->
                <div
                    class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 border border-gray-100">
                    <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Share Ideas</h3>
                    <p class="text-gray-600">Contribute your unique perspective and learn from others in our growing
                        network.
                    </p>
                </div>
            </div>

            <div class="mt-16 text-center">
                <p class="text-lg font-medium text-gray-900 mb-8">Together, we can create a stronger, safer future.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#"
                        class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 transition-colors duration-200 shadow-sm">
                        Join Now
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                    <a href="#"
                        class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-primary-700 bg-primary-100 hover:bg-primary-200 transition-colors duration-200">
                        Learn More
                    </a>
                </div>
            </div>
        </section>
    @endsection
