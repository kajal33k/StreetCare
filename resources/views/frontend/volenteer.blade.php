@extends('layout.main')
@section('content')
    <!-- Add to your global CSS if not using Tailwind plugins -->
    <style>
        @keyframes fade-in-up {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fade-in-up 1s ease-out forwards;
        }

        .delay-100 {
            animation-delay: 0.1s;
        }

        .delay-200 {
            animation-delay: 0.2s;
        }
    </style>

    <!-- Hero Section -->
    <section
        class="min-h-[70vh] flex flex-col justify-center items-center text-white text-center px-4 py-20 bg-[#3B1C32] relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-[#4a2640]/80 to-[#2b1225]/90 backdrop-blur-sm"></div>
        <div class="relative z-10 max-w-3xl">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 text-pink-100 drop-shadow-lg animate-fade-in-up">
                Be Their Voice, Be Their Savior
            </h1>
            <p class="max-w-2xl mx-auto text-lg md:text-xl mb-8 text-pink-200 animate-fade-in-up delay-100">
                Join our mission to protect and care for street animals. Your time and compassion can transform lives – both
                theirs and yours.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-up delay-200">
                <button
                    class="bg-gradient-to-br from-[#A64D79] to-[#3B1C32] hover:bg-gradient-to-br hover:from-[#3B1C32] hover:to-[#A64D79] text-white font-bold py-3 px-8 rounded-full text-lg shadow-lg transition duration-300 transform hover:scale-105">
                    🌱 Volunteer Now
                </button>
                <button
                    class="bg-pink-100 hover:bg-pink-200 text-[#3B1C32] font-bold py-3 px-8 rounded-full text-lg shadow-lg transition duration-300 transform hover:scale-105">
                    🍃 Learn How to Help
                </button>
            </div>
        </div>
    </section>



    <!-- Why Volunteer Section -->
    <section class="relative py-24 px-6 sm:px-10 lg:px-16 mt-24 max-w-7xl mx-auto bg-gradient-to-br from-[#e8dbc6] to-[#dbc8b1] rounded-3xl shadow-[0_25px_60px_rgba(0,0,0,0.4)] text-pink-900 overflow-hidden">
        <!-- Sparkles Background -->
        <div class="absolute inset-0 bg-[url('/images/sparkles.svg')] bg-repeat opacity-10 pointer-events-none z-0 animate-slowfade"></div>
    
        <!-- Heading -->
        <div class="relative z-10 text-center mb-20 px-4">
            <h2 class="text-4xl sm:text-5xl md:text-6xl font-extrabold tracking-tight drop-shadow-[0_5px_15px_rgba(0,0,0,0.3)] text-pink-900">
                Why Volunteer for Street Animals?
            </h2>
            <p class="max-w-3xl mx-auto mt-6 text-pink-800 text-lg sm:text-xl md:text-2xl leading-relaxed font-medium">
                It's not just about saving animals – it's about becoming a beacon of kindness in your world.
            </p>
        </div>
    
        <!-- Cards -->
        <div class="relative z-10 grid gap-10 sm:grid-cols-2 md:grid-cols-3">
            <!-- Card -->
            <div class="bg-white/20 backdrop-blur-lg p-8 rounded-3xl shadow-[0_15px_40px_rgba(0,0,0,0.2)] transition-transform transform hover:-translate-y-3 hover:shadow-[0_0_35px_rgba(255,192,203,0.5)] duration-300">
                <div class="bg-yellow-300 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 shadow-xl ring-4 ring-yellow-100/60 animate-pulse-slow">
                    <svg class="w-10 h-10 text-yellow-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-center text-pink-900 mb-4">Save Lives Directly</h3>
                <p class="text-center text-pink-800 text-base sm:text-lg leading-relaxed">
                    Your time means warmth, food, and healing for helpless animals. Be their guardian angel.
                </p>
            </div>
    
            <!-- Card -->
            <div class="bg-white/20 backdrop-blur-lg p-8 rounded-3xl shadow-[0_15px_40px_rgba(0,0,0,0.2)] transition-transform transform hover:-translate-y-3 hover:shadow-[0_0_35px_rgba(255,192,203,0.5)] duration-300">
                <div class="bg-yellow-300 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 shadow-xl ring-4 ring-yellow-100/60 animate-pulse-slow">
                    <svg class="w-10 h-10 text-yellow-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-center text-pink-900 mb-4">Build Community</h3>
                <p class="text-center text-pink-800 text-base sm:text-lg leading-relaxed">
                    Discover bonds with others who care deeply about compassion and collective change.
                </p>
            </div>
    
            <!-- Card -->
            <div class="bg-white/20 backdrop-blur-lg p-8 rounded-3xl shadow-[0_15px_40px_rgba(0,0,0,0.2)] transition-transform transform hover:-translate-y-3 hover:shadow-[0_0_35px_rgba(255,192,203,0.5)] duration-300">
                <div class="bg-yellow-300 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 shadow-xl ring-4 ring-yellow-100/60 animate-pulse-slow">
                    <svg class="w-10 h-10 text-yellow-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-center text-pink-900 mb-4">Personal Growth</h3>
                <p class="text-center text-pink-800 text-base sm:text-lg leading-relaxed">
                    Volunteering nurtures empathy, gratitude, and a deep sense of purpose.
                </p>
            </div>
        </div>
    </section>
    


    <!-- How to Help Section -->
    <section class="relative py-20 px-4 bg-[#FBEFEF] overflow-hidden">
        <!-- Optional Background Texture or Pattern -->
        <div class="absolute inset-0 bg-[url('/images/sparkles.svg')] bg-repeat opacity-10 pointer-events-none z-0"></div>
    
        <div class="max-w-6xl mx-auto relative z-10">
            <!-- Heading -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-extrabold text-[#44223C] drop-shadow-md mb-4 tracking-wide">
                    How You Can Help
                </h2>
                <p class="max-w-2xl mx-auto text-[#6D4C60] text-lg md:text-xl leading-relaxed">
                    Even small actions can make a big difference in an animal's life.
                </p>
            </div>
    
            <!-- Grid -->
            <div class="grid md:grid-cols-2 gap-10">
                <!-- Volunteer Card -->
                <div class="bg-white/70 backdrop-blur-md border border-[#E9D3DD] p-8 rounded-3xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                    <h3 class="text-2xl font-bold text-[#8B5C79] mb-6 text-center">Volunteer Opportunities</h3>
                    <ul class="space-y-5 text-[#44223C]">
                        <li class="flex items-start">
                            <svg class="h-6 w-6 mt-1 mr-3 text-[#B37D9A]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Animal feeding and care at our shelter</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 mt-1 mr-3 text-[#B37D9A]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Rescue operations and emergency response</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 mt-1 mr-3 text-[#B37D9A]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Adoption events and community outreach</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 mt-1 mr-3 text-[#B37D9A]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Veterinary assistance (training provided)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 mt-1 mr-3 text-[#B37D9A]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Administrative and fundraising support</span>
                        </li>
                    </ul>
                </div>
    
                <!-- Community Savior Card -->
                <div class="bg-white/70 backdrop-blur-md border border-[#E9D3DD] p-8 rounded-3xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                    <h3 class="text-2xl font-bold text-[#8B5C79] mb-6 text-center">Be a Savior in Your Community</h3>
                    <ul class="space-y-5 text-[#44223C]">
                        <li class="flex items-start">
                            <svg class="h-6 w-6 mt-1 mr-3 text-[#B37D9A]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Keep water bowls outside your home</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 mt-1 mr-3 text-[#B37D9A]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Report injured animals to local shelters</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 mt-1 mr-3 text-[#B37D9A]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Support spay/neuter initiatives</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 mt-1 mr-3 text-[#B37D9A]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Foster animals in need</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 mt-1 mr-3 text-[#B37D9A]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Educate others about animal welfare</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    

    <!-- Volunteer Form -->
    <section class="py-20 px-4 max-w-4xl mx-auto relative bg-[#FBEFEF] overflow-hidden">
        <!-- Optional soft pattern background -->
        <div class="absolute inset-0 bg-[url('/images/petals-pattern.svg')] bg-repeat opacity-10 pointer-events-none z-0"></div>
    
        <div class="bg-white/80 backdrop-blur-lg border border-[#E9D3DD] p-10 md:p-14 rounded-3xl shadow-xl relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-3 text-[#44223C] drop-shadow-sm">
                Join Our Volunteer Team
            </h2>
            <p class="text-[#6D4C60] text-center mb-10 text-lg">
                Fill out the form below and we'll contact you about opportunities
            </p>
    
            <form class="grid md:grid-cols-2 gap-6 text-[#44223C]">
                <div>
                    <label for="name" class="block font-medium mb-2">Full Name</label>
                    <input type="text" id="name"
                        class="w-full px-4 py-3 border border-[#D9B8C9] rounded-xl bg-white focus:ring-2 focus:ring-[#B37D9A] focus:border-[#B37D9A] placeholder-[#A68AA0]">
                </div>
                <div>
                    <label for="email" class="block font-medium mb-2">Email</label>
                    <input type="email" id="email"
                        class="w-full px-4 py-3 border border-[#D9B8C9] rounded-xl bg-white focus:ring-2 focus:ring-[#B37D9A] focus:border-[#B37D9A] placeholder-[#A68AA0]">
                </div>
                <div>
                    <label for="phone" class="block font-medium mb-2">Phone</label>
                    <input type="tel" id="phone"
                        class="w-full px-4 py-3 border border-[#D9B8C9] rounded-xl bg-white focus:ring-2 focus:ring-[#B37D9A] focus:border-[#B37D9A] placeholder-[#A68AA0]">
                </div>
                <div>
                    <label for="location" class="block font-medium mb-2">Location</label>
                    <input type="text" id="location"
                        class="w-full px-4 py-3 border border-[#D9B8C9] rounded-xl bg-white focus:ring-2 focus:ring-[#B37D9A] focus:border-[#B37D9A] placeholder-[#A68AA0]">
                </div>
                <div class="md:col-span-2">
                    <label for="interests" class="block font-medium mb-2">Areas of Interest</label>
                    <select id="interests" multiple
                        class="w-full px-4 py-3 border border-[#D9B8C9] rounded-xl bg-white focus:ring-2 focus:ring-[#B37D9A] focus:border-[#B37D9A] h-auto">
                        <option value="feeding">Feeding and Care</option>
                        <option value="rescue">Rescue Operations</option>
                        <option value="medical">Medical Assistance</option>
                        <option value="fostering">Fostering</option>
                        <option value="events">Adoption Events</option>
                        <option value="admin">Administrative Support</option>
                        <option value="fundraising">Fundraising</option>
                        <option value="education">Community Education</option>
                    </select>
                </div>
                <div class="md:col-span-2">
                    <label for="message" class="block font-medium mb-2">Why do you want to volunteer with us?</label>
                    <textarea id="message" rows="4"
                        class="w-full px-4 py-3 border border-[#D9B8C9] rounded-xl bg-white focus:ring-2 focus:ring-[#B37D9A] focus:border-[#B37D9A] placeholder-[#A68AA0]"></textarea>
                </div>
                <div class="md:col-span-2">
                    <button type="submit"
                        class="w-full bg-gradient-to-br from-[#A64D79] to-[#3B1C32] hover:bg-gradient-to-br hover:from-[#3B1C32] hover:to-[#A64D79] text-white font-bold py-3 px-6 rounded-xl text-lg transition duration-300 shadow-md hover:shadow-lg">
                        Submit Application
                    </button>
                </div>
            </form>
        </div>
    </section>
    
    <!-- Testimonials -->
    <section class="py-20 px-4 bg-[#F9F4F5]">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-[#44223C] mb-4 leading-tight drop-shadow-sm">
                    Volunteer Stories
                </h2>
                <p class="max-w-2xl mx-auto text-lg text-[#6D4C60]">
                    Hear from people who've transformed lives — including their own.
                </p>
            </div>
    
            <!-- Story Cards -->
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Story Card 1 -->
                <div class="bg-white p-8 rounded-3xl shadow-xl border border-[#EBDDE2] transition hover:shadow-2xl">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="h-14 w-14 bg-[#D8C4CD] rounded-full flex items-center justify-center text-white font-bold text-lg">
                            PS
                        </div>
                        <div>
                            <h4 class="font-semibold text-[#44223C] text-lg">Priya Sharma</h4>
                            <p class="text-sm text-[#9B7D91]">Volunteer since 2019</p>
                        </div>
                    </div>
                    <p class="text-[#5E4455] italic leading-relaxed">
                        “Volunteering with street animals helped me overcome depression. The unconditional love I receive from these animals is more therapeutic than anything else I've tried.”
                    </p>
                </div>
    
                <!-- Story Card 2 -->
                <div class="bg-white p-8 rounded-3xl shadow-xl border border-[#EBDDE2] transition hover:shadow-2xl">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="h-14 w-14 bg-[#D8C4CD] rounded-full flex items-center justify-center text-white font-bold text-lg">
                            RM
                        </div>
                        <div>
                            <h4 class="font-semibold text-[#44223C] text-lg">Rahul Mehta</h4>
                            <p class="text-sm text-[#9B7D91]">Rescue Team Lead</p>
                        </div>
                    </div>
                    <p class="text-[#5E4455] italic leading-relaxed">
                        “I started as a weekend volunteer and now lead rescue operations. The skills I've developed here have helped me in my professional life too — teamwork, crisis management, and compassion.”
                    </p>
                </div>
    
                <!-- Story Card 3 -->
                <div class="bg-white p-8 rounded-3xl shadow-xl border border-[#EBDDE2] transition hover:shadow-2xl">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="h-14 w-14 bg-[#D8C4CD] rounded-full flex items-center justify-center text-white font-bold text-lg">
                            AP
                        </div>
                        <div>
                            <h4 class="font-semibold text-[#44223C] text-lg">Ananya Patel</h4>
                            <p class="text-sm text-[#9B7D91]">College Student</p>
                        </div>
                    </div>
                    <p class="text-[#5E4455] italic leading-relaxed">
                        “I never thought I could make a difference until I started feeding street dogs in my area. Now I've mobilized my whole community to care for our local animals.”
                    </p>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Call to Action -->
    <section class="py-16 px-4 bg-[#44223C] text-white">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Make a Difference?</h2>
            <p class="text-xl mb-8">
                Whether you can give an hour a week or make this your life's passion, we have a place for you.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <button
                    class="bg-white hover:bg-[#f3eef2] text-[#44223C] font-bold py-3 px-8 rounded-full text-lg transition duration-300">
                    Volunteer Now
                </button>
                <button
                    class="bg-transparent hover:bg-[#5A2B47] border-2 border-white text-white font-bold py-3 px-8 rounded-full text-lg transition duration-300">
                    Contact Us
                </button>
            </div>
        </div>
    </section>
    
@endsection
