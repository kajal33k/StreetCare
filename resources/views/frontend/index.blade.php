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
    <section class="relative overflow-hidden bg-[#4da665]">
        <div class="absolute inset-0 bg-white opacity-40"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center">
                <!-- Content -->
                <div class="w-full lg:w-1/2 py-12 sm:py-16 lg:py-24 xl:py-32">
                    <div class="text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">
                            <span class="block">This is your chance</span>
                            <span class="block text-[#1c3b25]">to save a life</span>
                        </h1>

                        <p class="mt-3 text-lg text-gray-300 sm:mt-5 sm:text-xl md:mt-5 max-w-lg mx-auto lg:mx-0">
                            Help Us Help Them
                        </p>

                        <div
                            class="mt-8 flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 justify-center lg:justify-start">

                            <!-- Donate Button (styled link as button) -->
                            <a href="{{ route('frontend.donate') }}"
                                class="relative inline-block px-6 py-3 font-semibold  text-white transition-all duration-300 ease-in-out  bg-gradient-to-br from-[#4da666] to-[#1c3b29] rounded-full shadow-lg hover:shadow-2xl hover:scale-105 focus:outline-none focus:ring-4 focus:ring-green-300">
                                <span
                                    class="absolute top-0 left-0 w-full h-full rounded-full opacity-10 bg-white blur-md"></span>
                                <span class="relative z-10">Donate</span>
                            </a>

                            <!-- Learn More Button -->
                            <a href="{{ route('frontend.learn') }}"
                                class="relative inline-block px-6 py-3 font-semibold text-white transition-all duration-300 ease-in-out bg-gradient-to-br from-[#4da666] to-[#1c3b29] rounded-full shadow-lg hover:shadow-2xl hover:scale-105 focus:outline-none focus:ring-4 focus:ring-green-300">
                                <span
                                    class="absolute top-0 left-0 w-full h-full rounded-full opacity-10 bg-white blur-md"></span>
                                <span class="relative z-10">✨Learn More</span>
                            </a>

                        </div>

                    </div>
                </div>

                <!-- Image -->
                <div class="w-full lg:w-1/2 lg:pl-8">
                    <div class="aspect-w-16 aspect-h-9 lg:aspect-none">
                        <img class="w-full h-full object-cover" src="{{ asset('asset/image/street-paws.png') }}"
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
                    How You Can <span class="text-green-500">Make a Difference</span>
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
                    <img src="https://cdn.pixabay.com/photo/2014/03/14/20/13/dog-287420_1280.jpg"
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
                        <a href="{{ route('frontend.adopt') }}"
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
                    <img src="https://media.istockphoto.com/id/1268414333/photo/a-village-woman-tries-to-help-a-wounded-bird-and-gives-it-water.jpg?s=612x612&w=0&k=20&c=4kXVuiXyrs6S26uYj_JBo7HboaWUMfQLNyv26O2Oyio="
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
                        <a href="{{ route('frontend.care') }}"
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
                    <img src="https://cdn.pixabay.com/photo/2020/06/24/10/17/old-crow-5335624_1280.jpg"
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
                        <a href="{{ route('frontend.medical') }}"
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
                    <img src="https://cdn.pixabay.com/photo/2017/08/04/09/39/indian-cow-2579534_1280.jpg"
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
                        <a href="{{ route('frontend.protect') }}"
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
                    <img src="https://cdn.pixabay.com/photo/2018/06/19/10/29/reclining-monkey-3484185_1280.jpg"
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
                        <a href="{{ route('frontend.protect') }}"
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
                        <a href="{{ route('frontend.help') }}" <span
                            class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white/90 text-orange-600">Help
                            Needed</span></a>
                    </div>
                </div>

                <!-- Report Card -->
                <div
                    class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 h-80 bg-white">
                    <div class="absolute inset-0 bg-gradient-to-t from-red-900/70 to-transparent z-10"></div>
                    <img src="https://cdn.pixabay.com/photo/2023/09/18/13/51/cat-8260638_1280.jpg"
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
                        <a href="{{ route('frontend.report') }}"
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
                <a href="{{ route('frontend.help') }}"
                    class="inline-flex items-center px-8 py-3 text-base font-semibold rounded-full text-white 
                    bg-gradient-to-r from-[#4da660] to-[#1c3b22] 
                    shadow-lg shadow-green-200/40 
                    hover:from-[#1c3b1f] hover:to-[#4da662] 
                    hover:shadow-green-300/60 
                    transition-all duration-300 ease-in-out transform hover:-translate-y-0.5 hover:scale-105
                    focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-300">
                    <span class="relative z-10">Explore all ways to help</span>
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


    <!-- Hero Section -->
    <section
        class="hero-bg min-h-[70vh] flex flex-col justify-center items-center text-white text-center px-4 py-20 bg-gradient-to-b from-[#1c3b2a] via-[#4da67a] to-[#c9eada] relative overflow-hidden">

        <!-- Floating Lights (Optional Sparkle Background) -->
        <div class="absolute inset-0 pointer-events-none z-0">
            <div class="w-80 h-80 bg-green-200 opacity-10 rounded-full blur-3xl absolute top-10 left-10 animate-pulse">
            </div>
            <div class="w-60 h-60 bg-teal-300 opacity-10 rounded-full blur-2xl absolute bottom-10 right-10 animate-pulse">
            </div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto">
            <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold mb-4 tracking-wide drop-shadow-md">TRANSFORMING LIVES
            </h1>
            <h2 class="text-2xl md:text-4xl lg:text-5xl font-semibold mb-6 drop-shadow-sm">ONE PAW AT A TIME</h2>
            <p class="max-w-3xl mx-auto text-base md:text-lg lg:text-xl mb-8 text-green-100">
                Animal Matter to Me (AMTM) is a dedicated nonprofit organization focused on the rescue, rehabilitation,
                and care of stray and abandoned animals. Since 2010, we have been creating a safe haven where every animal
                receives the love, respect, and medical care they deserve.
            </p>

            <a href="{{ route('frontend.know') }}"><button
                    class="bg-gradient-to-r from-[#4da67a] to-[#1c3b29] text-white font-semibold py-3 px-10 rounded-full text-lg shadow-lg hover:from-[#1c3b26] hover:to-[#4da682] transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-300">
                    Know More About Us
                </button></a>
        </div>
    </section>


    <!-- What We Do Section -->
    <section
        class="py-20 px-4 max-w-7xl mx-auto relative bg-gradient-to-b from-[#ecfdf3] via-white to-[#f5fff9] rounded-3xl shadow-inner overflow-hidden">

        <!-- Soft Background Glows (Optional) -->
        <div class="absolute inset-0 z-0 pointer-events-none">
            <div class="absolute top-0 left-0 w-72 h-72 bg-green-200 opacity-20 blur-3xl rounded-full animate-pulse"></div>
            <div class="absolute bottom-0 right-0 w-80 h-80 bg-teal-300 opacity-20 blur-3xl rounded-full animate-pulse">
            </div>
        </div>

        <!-- Section Header -->
        <div class="relative z-10 text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-[#1c3b30] tracking-wide mb-2">WHAT WE DO</h2>
            <h3 class="text-2xl md:text-3xl font-medium text-[#4da67e]">PROTECTING OUR VOICELESS FRIENDS</h3>
            <p class="text-gray-600 max-w-2xl mx-auto mt-4 text-base md:text-lg">We’re devoted to the care and safety of
                street animals, bringing warmth, healing, and hope—one paw at a time.</p>
        </div>

        <!-- Cards Grid -->
        <div class="relative z-10 grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            <!-- Card 1 -->
            <div
                class="bg-white rounded-3xl shadow-xl overflow-hidden border-t-4 border-[#4da67a] hover:shadow-2xl transition-transform duration-300 hover:scale-105">
                <div class="h-44 bg-gradient-to-br from-[#1c3b2b] to-[#4da67f] flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="p-6">
                    <h4 class="text-xl font-semibold mb-2 text-[#1c3b24]">Sterilization & Vaccination</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Controlling the population of stray animals through humane sterilization and vaccination drives,
                        preventing the spread of diseases.
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div
                class="bg-white rounded-3xl shadow-xl overflow-hidden border-t-4 border-[#4da678] hover:shadow-2xl transition-transform duration-300 hover:scale-105">
                <div class="h-44 bg-gradient-to-br from-[#1c3b2a] to-[#4da677] flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="p-6">
                    <h4 class="text-xl font-semibold mb-2 text-[#1c3b2f]">Emergency Rescue</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Providing critical rescue services for animals in distress, whether injured in accidents or
                        abandoned by their owners.
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div
                class="bg-white rounded-3xl shadow-xl overflow-hidden border-t-4 border-[#4da684] hover:shadow-2xl transition-transform duration-300 hover:scale-105">
                <div class="h-44 bg-gradient-to-br from-[#1c3b29] to-[#4da67e] flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                </div>
                <div class="p-6">
                    <h4 class="text-xl font-semibold mb-2 text-[#1c3b2e]">Medical Care & Rehabilitation</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Our state-of-the-art facility offers essential medical care, surgeries, and rehabilitation to help
                        animals recover and thrive.
                    </p>
                </div>
            </div>
        </div>

        <!-- Call-to-Action -->
        <div class="relative z-10 text-center mt-16">
            <a href="{{ route('frontend.know') }}"><button
                    class="bg-gradient-to-r from-[#1c3b2b] to-[#4da66e] text-white font-semibold py-3 px-10 rounded-full text-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-green-300">
                    Know More
                </button></a>
        </div>
    </section>



    <section class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto font-sans">
        <div class="text-center mb-16">
            <span
                class="inline-block px-4 py-1 text-sm font-semibold text-[#4da66e] bg-[#e8fbef] rounded-full mb-4 shadow-sm">
                Join the Movement
            </span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-[#1c3b27] mb-4 leading-tight tracking-tight">
                Be Part of the Community & <br class="hidden sm:inline" />Protect Together
            </h2>
            <p class="text-lg text-[#4b5c53] max-w-2xl mx-auto">
                Collaborate with kindred spirits and make a lasting impact in the world of our voiceless friends.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div
                class="bg-white backdrop-blur-md border border-[#d9ede0] rounded-3xl shadow-lg p-8 hover:shadow-xl transition duration-300 ease-in-out">
                <div class="w-14 h-14 bg-[#A64D79]/10 rounded-full flex items-center justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#4da66f]" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1c3b29] mb-3">Collaborate</h3>
                <p class="text-[#4b5c54]">
                    Join forces with caring individuals to uplift street animals through unity and love.
                </p>
            </div>

            <!-- Card 2 -->
            <div
                class="bg-white backdrop-blur-md border border-[#d9ede1] rounded-3xl shadow-lg p-8 hover:shadow-xl transition duration-300 ease-in-out">
                <div class="w-14 h-14 bg-[#A64D79]/10 rounded-full flex items-center justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#4da668]" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1c3b28] mb-3">Take Action</h3>
                <p class="text-[#4b5c52b8]">
                    Engage in rescue missions and compassionate acts that touch lives—both human and animal.
                </p>
            </div>

            <!-- Card 3 -->
            <div
                class="bg-white backdrop-blur-md border border-[#d9ede3] rounded-3xl shadow-lg p-8 hover:shadow-xl transition duration-300 ease-in-out">
                <div class="w-14 h-14 bg-[#A64D79]/10 rounded-full flex items-center justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#4da67c]" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#1c3b2a] mb-3">Share Ideas</h3>
                <p class="text-[#4b5c50]">
                    Contribute your voice to a creative circle of guardians passionate about animal welfare.
                </p>
            </div>
        </div>

        <div class="mt-16 text-center">
            <p class="text-lg font-semibold text-[#1c3b29] mb-8">Together, we can build a gentle world where all beings
                feel safe.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center justify-center px-6 py-3 font-medium rounded-full text-white bg-gradient-to-r from-[#1c3b26] to-[#4da677] shadow-md hover:shadow-lg hover:scale-105 transition duration-300">
                    Join Now
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
                <a href="{{ route('frontend.learn') }}"
                    class="inline-flex items-center justify-center px-6 py-3 font-medium rounded-full text-[#1c3b2c] bg-[#e8fbee] hover:bg-[#dcf9e8] transition duration-300">
                    Learn More
                </a>
            </div>
        </div>
    </section>
@endsection
