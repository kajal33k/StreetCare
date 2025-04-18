@extends('layout.main')
@section('content')
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


    <!-- Hero Section -->
    <div class="bg-gradient-to-b from-[#ece8ca] via-[#e7e0be] to-[#dbd797] text-[#44223C]">
        <div class="max-w-7xl mx-auto py-24 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl drop-shadow-[0_4px_6px_rgba(0,0,0,0.3)]">
                    Protecting Street Animals Worldwide
                </h1>
                <p class="mt-6 max-w-lg mx-auto text-xl text-[#44223C] drop-shadow-[0_2px_4px_rgba(0,0,0,0.25)]">
                    BEA is dedicated to rescuing, rehabilitating, and finding loving homes for street animals in need.
                </p>
                <div class="mt-10 flex justify-center space-x-4">
                    <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-lg text-[#44223C] bg-white hover:bg-gray-100 transition duration-300">
                        Get Involved
                    </a>
                    <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-lg text-white bg-[#A05C7B] hover:bg-[#B76D8C] transition duration-300">
                        Adopt a Pet
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Stats Section -->
    <div class="bg-gradient-to-br from-[#44223C] via-[#5A2C4A] to-[#70405F] py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
                <div class="text-center p-6 rounded-2xl bg-white/10 backdrop-blur-md shadow-lg hover:shadow-xl transition duration-300">
                    <div class="text-4xl font-bold text-white drop-shadow">1,250+</div>
                    <div class="mt-2 text-[#EAD7E1]">Animals Rescued</div>
                </div>
                <div class="text-center p-6 rounded-2xl bg-white/10 backdrop-blur-md shadow-lg hover:shadow-xl transition duration-300">
                    <div class="text-4xl font-bold text-[#FFD9EC] drop-shadow">850+</div>
                    <div class="mt-2 text-[#F2C6DC]">Successful Adoptions</div>
                </div>
                <div class="text-center p-6 rounded-2xl bg-white/10 backdrop-blur-md shadow-lg hover:shadow-xl transition duration-300">
                    <div class="text-4xl font-bold text-white drop-shadow">50+</div>
                    <div class="mt-2 text-[#EAD7E1]">Volunteers</div>
                </div>
                <div class="text-center p-6 rounded-2xl bg-white/10 backdrop-blur-md shadow-lg hover:shadow-xl transition duration-300">
                    <div class="text-4xl font-bold text-[#FFD9EC] drop-shadow">15</div>
                    <div class="mt-2 text-[#F2C6DC]">Cities Worldwide</div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Mission Section -->
    <div class="bg-gradient-to-b from-[#ece8ca] via-[#e7e0be] to-[#dbd797] text-[#44223C] py-24 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-sm font-bold tracking-widest uppercase text-[#b04c79] drop-shadow-sm">Our Mission</h2>
                <p class="mt-3 text-4xl font-extrabold tracking-tight sm:text-5xl text-[#44223C] drop-shadow-md">
                    Creating a Better World for Street Animals
                </p>
                <p class="mt-5 max-w-2xl text-lg text-[#5e4454] lg:mx-auto">
                    We believe every animal deserves love, care, and a safe home.
                </p>
            </div>
    
            <div class="mt-20">
                <div class="grid grid-cols-1 gap-10 md:grid-cols-3">
                    <!-- Card 1 -->
                    <div class="bg-white/40 border border-white/30 backdrop-blur-md rounded-2xl p-8 text-center shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-[#FFD6EB] text-[#44223C] mx-auto shadow-md">
                            <i class="fas fa-heart text-2xl"></i>
                        </div>
                        <h3 class="mt-6 text-xl font-semibold text-[#44223C]">Rescue</h3>
                        <p class="mt-3 text-sm text-[#5e4454]">
                            Our teams work around the clock to rescue animals from dangerous situations.
                        </p>
                    </div>
    
                    <!-- Card 2 -->
                    <div class="bg-white/40 border border-white/30 backdrop-blur-md rounded-2xl p-8 text-center shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-[#F5A8C3] text-[#44223C] mx-auto shadow-md">
                            <i class="fas fa-medkit text-2xl"></i>
                        </div>
                        <h3 class="mt-6 text-xl font-semibold text-[#44223C]">Rehabilitate</h3>
                        <p class="mt-3 text-sm text-[#5e4454]">
                            We provide medical care, nourishment, and love to help animals recover.
                        </p>
                    </div>
    
                    <!-- Card 3 -->
                    <div class="bg-white/40 border border-white/30 backdrop-blur-md rounded-2xl p-8 text-center shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-[#FFD6EB] text-[#44223C] mx-auto shadow-md">
                            <i class="fas fa-home text-2xl"></i>
                        </div>
                        <h3 class="mt-6 text-xl font-semibold text-[#44223C]">Rehome</h3>
                        <p class="mt-3 text-sm text-[#5e4454]">
                            We carefully match animals with loving forever families through our adoption program.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Optional decorative shapes (subtle Ghibli feel) -->
        <div class="absolute bottom-0 left-0 w-40 h-40 bg-[#FFD6EB] opacity-20 rounded-full blur-3xl -z-10"></div>
        <div class="absolute top-0 right-0 w-56 h-56 bg-[#F5A8C3] opacity-10 rounded-full blur-2xl -z-10"></div>
    </div>
    
    <!-- Featured Animals -->
    <div class="bg-gradient-to-b from-[#ece8ca] via-[#f4e9d9] to-[#e0d5b4] py-24 text-[#44223C]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Heading -->
            <div class="text-center">
                <h2 class="text-4xl font-extrabold tracking-tight sm:text-5xl drop-shadow-sm text-[#44223C]">
                    Animals Waiting for Homes
                </h2>
                <p class="mt-4 max-w-2xl text-lg text-[#5e4454] mx-auto">
                    Meet some of our wonderful animals ready for adoption.
                </p>
            </div>
    
            <!-- Animal Cards Grid -->
            <div class="mt-16 grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Card -->
                <div class="rounded-3xl overflow-hidden bg-white/30 border border-white/20 backdrop-blur-md shadow-xl hover:shadow-2xl transition duration-300">
                    <div class="h-52 overflow-hidden">
                        <img class="w-full h-full object-cover rounded-t-3xl" src="https://images.unsplash.com/photo-1583511655826-05700d52f4d9?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Buddy the dog">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-xl font-semibold text-[#44223C]">Buddy</h3>
                            <span class="px-3 py-1 text-xs font-semibold text-white bg-[#F5A8C3] rounded-full shadow-sm">Dog</span>
                        </div>
                        <p class="mt-2 text-sm text-[#6c4c5b]">2 years old • Male • Neutered</p>
                        <p class="mt-3 text-base text-[#5e4454]">Friendly and energetic, Buddy loves long walks and cuddles.</p>
                        <button class="mt-5 w-full bg-[#FFD6EB] hover:bg-[#f3bdd9] text-[#44223C] font-semibold py-2 px-4 rounded-lg transition duration-300 shadow-md">
                            Meet Buddy
                        </button>
                    </div>
                </div>
    
                <!-- Card -->
                <div class="rounded-3xl overflow-hidden bg-white/30 border border-white/20 backdrop-blur-md shadow-xl hover:shadow-2xl transition duration-300">
                    <div class="h-52 overflow-hidden">
                        <img class="w-full h-full object-cover rounded-t-3xl" src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Luna the cat">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-xl font-semibold text-[#44223C]">Luna</h3>
                            <span class="px-3 py-1 text-xs font-semibold text-white bg-[#b380a8] rounded-full shadow-sm">Cat</span>
                        </div>
                        <p class="mt-2 text-sm text-[#6c4c5b]">1 year old • Female • Spayed</p>
                        <p class="mt-3 text-base text-[#5e4454]">Gentle and affectionate, Luna enjoys quiet afternoons in sunny spots.</p>
                        <button class="mt-5 w-full bg-[#FFD6EB] hover:bg-[#f3bdd9] text-[#44223C] font-semibold py-2 px-4 rounded-lg transition duration-300 shadow-md">
                            Meet Luna
                        </button>
                    </div>
                </div>
    
                <!-- Card -->
                <div class="rounded-3xl overflow-hidden bg-white/30 border border-white/20 backdrop-blur-md shadow-xl hover:shadow-2xl transition duration-300">
                    <div class="h-52 overflow-hidden">
                        <img class="w-full h-full object-cover rounded-t-3xl" src="https://cdn.pixabay.com/photo/2025/02/28/09/48/ai-generated-9437060_1280.png" alt="Max the dog">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-xl font-semibold text-[#44223C]">Max</h3>
                            <span class="px-3 py-1 text-xs font-semibold text-white bg-[#F5A8C3] rounded-full shadow-sm">Dog</span>
                        </div>
                        <p class="mt-2 text-sm text-[#6c4c5b]">3 years old • Male • Neutered</p>
                        <p class="mt-3 text-base text-[#5e4454]">Loyal and protective, Max would make a great companion for an active family.</p>
                        <button class="mt-5 w-full bg-[#FFD6EB] hover:bg-[#f3bdd9] text-[#44223C] font-semibold py-2 px-4 rounded-lg transition duration-300 shadow-md">
                            Meet Max
                        </button>
                    </div>
                </div>
            </div>
    
            <!-- CTA Button -->
            <div class="mt-16 text-center">
                <a href="#" class="inline-flex items-center px-6 py-3 text-base font-semibold rounded-full text-white bg-[#b04c79] hover:bg-[#99456a] transition duration-300 shadow-lg">
                    View All Animals
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    
        <!-- Decorative Blobs (Optional Ghibli Sparkle) -->
        <div class="absolute top-20 left-10 w-40 h-40 bg-[#FFD6EB] opacity-20 rounded-full blur-3xl -z-10"></div>
        <div class="absolute bottom-10 right-10 w-56 h-56 bg-[#f5a8c3] opacity-10 rounded-full blur-2xl -z-10"></div>
    </div>
    

    <!-- Testimonials -->
   <!-- Success Stories Section -->
<div class="bg-[#fdf8f3] py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
            <h2 class="text-base text-[#8f5a78] font-semibold tracking-widest uppercase">Success Stories</h2>
            <p class="mt-2 text-4xl leading-tight font-extrabold text-[#44223C] sm:text-5xl">
                Happy Pets, Happy Families
            </p>
        </div>

        <div class="mt-16 grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3">
            <!-- Testimonial Card -->
            <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 border border-[#e7d9d1]">
                <div class="flex items-center">
                    <img class="h-14 w-14 rounded-full shadow" src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah Johnson">
                    <div class="ml-4">
                        <h4 class="text-lg font-semibold text-[#44223C]">Sarah Johnson</h4>
                        <p class="text-sm text-[#8f5a78]">Adopted Bella in 2022</p>
                    </div>
                </div>
                <p class="mt-4 text-[#6b4b5b] leading-relaxed">
                    “Adopting Bella through BEA was the best decision we ever made. The process was smooth and the team was so supportive. Bella has brought so much joy to our family!”
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 border border-[#e7d9d1]">
                <div class="flex items-center">
                    <img class="h-14 w-14 rounded-full shadow" src="https://randomuser.me/api/portraits/men/45.jpg" alt="Michael Chen">
                    <div class="ml-4">
                        <h4 class="text-lg font-semibold text-[#44223C]">Michael Chen</h4>
                        <p class="text-sm text-[#8f5a78]">Adopted Rocky in 2021</p>
                    </div>
                </div>
                <p class="mt-4 text-[#6b4b5b] leading-relaxed">
                    “Rocky was rescued from terrible conditions, but you'd never know it now. The rehabilitation work BEA does is incredible. We're so grateful for their dedication.”
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 border border-[#e7d9d1]">
                <div class="flex items-center">
                    <img class="h-14 w-14 rounded-full shadow" src="https://randomuser.me/api/portraits/women/68.jpg" alt="Emma Rodriguez">
                    <div class="ml-4">
                        <h4 class="text-lg font-semibold text-[#44223C]">Emma Rodriguez</h4>
                        <p class="text-sm text-[#8f5a78]">Volunteer since 2020</p>
                    </div>
                </div>
                <p class="mt-4 text-[#6b4b5b] leading-relaxed">
                    “Volunteering with BEA has been one of the most rewarding experiences. Watching animals bloom into joyful companions is a magical feeling.”
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Ghibli-Inspired CTA Section -->
<div class="bg-[#44223C] text-white py-16">
    <div class="max-w-7xl mx-auto px-6 sm:px-8">
        <div class="md:flex md:items-center md:justify-between">
            <div class="md:w-2/3">
                <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">
                    Ready to make a difference?
                </h2>
                <p class="mt-4 max-w-3xl text-lg text-[#f3e5e9]">
                    Whether you want to adopt, volunteer, or donate, your support helps us save more lives every day.
                </p>
            </div>
            <div class="mt-8 md:mt-0 flex gap-4">
                <a href="#" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-semibold rounded-xl text-[#44223C] bg-white hover:bg-[#f3e5e9] transition duration-300 shadow">
                    Get Involved
                </a>
                <a href="#" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-semibold rounded-xl text-white bg-[#8f5a78] hover:bg-[#a2648e] transition duration-300 shadow">
                    Donate Now
                </a>
            </div>
        </div>
    </div>
</div>


@endsection