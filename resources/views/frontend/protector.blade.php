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
                        primary: '#2D5E36',
                        secondary: '#4CAF50',
                        dark: '#1C3B20',
                        light: '#F1F8F2',
                    }
                }
            }
        }
    </script>


    <!-- Hero Section -->
    <div class="bg-gradient-to-b from-[#E8F5E9] via-[#C8E6C9] to-[#A5D6A7] text-[#1C3B20]">
        <div class="max-w-7xl mx-auto py-24 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl drop-shadow-[0_4px_6px_rgba(0,0,0,0.3)]">
                    Protecting Street Animals Worldwide
                </h1>
                <p class="mt-6 max-w-lg mx-auto text-xl text-[#1C3B20] drop-shadow-[0_2px_4px_rgba(0,0,0,0.25)]">
                    BEA is dedicated to rescuing, rehabilitating, and finding loving homes for street animals in need.
                </p>
                <div class="mt-10 flex justify-center space-x-4">
                    <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-lg text-[#1C3B20] bg-white hover:bg-gray-100 transition duration-300">
                        Get Involved
                    </a>
                    <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-lg text-white bg-[#2E7D32] hover:bg-[#388E3C] transition duration-300">
                        Adopt a Pet
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Stats Section -->
    <div class="bg-gradient-to-br from-[#1C3B20] via-[#2E4E2A] to-[#3E6039] py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
                <div class="text-center p-6 rounded-2xl bg-white/10 backdrop-blur-md shadow-lg hover:shadow-xl transition duration-300">
                    <div class="text-4xl font-bold text-white drop-shadow">1,250+</div>
                    <div class="mt-2 text-[#C8E6C9]">Animals Rescued</div>
                </div>
                <div class="text-center p-6 rounded-2xl bg-white/10 backdrop-blur-md shadow-lg hover:shadow-xl transition duration-300">
                    <div class="text-4xl font-bold text-[#E8F5E9] drop-shadow">850+</div>
                    <div class="mt-2 text-[#A5D6A7]">Successful Adoptions</div>
                </div>
                <div class="text-center p-6 rounded-2xl bg-white/10 backdrop-blur-md shadow-lg hover:shadow-xl transition duration-300">
                    <div class="text-4xl font-bold text-white drop-shadow">50+</div>
                    <div class="mt-2 text-[#C8E6C9]">Volunteers</div>
                </div>
                <div class="text-center p-6 rounded-2xl bg-white/10 backdrop-blur-md shadow-lg hover:shadow-xl transition duration-300">
                    <div class="text-4xl font-bold text-[#E8F5E9] drop-shadow">15</div>
                    <div class="mt-2 text-[#A5D6A7]">Cities Worldwide</div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Mission Section -->
    <div class="bg-gradient-to-b from-[#E8F5E9] via-[#C8E6C9] to-[#A5D6A7] text-[#1C3B20] py-24 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-sm font-bold tracking-widest uppercase text-[#2E7D32] drop-shadow-sm">Our Mission</h2>
                <p class="mt-3 text-4xl font-extrabold tracking-tight sm:text-5xl text-[#1C3B20] drop-shadow-md">
                    Creating a Better World for Street Animals
                </p>
                <p class="mt-5 max-w-2xl text-lg text-[#2E4E2A] lg:mx-auto">
                    We believe every animal deserves love, care, and a safe home.
                </p>
            </div>
    
            <div class="mt-20">
                <div class="grid grid-cols-1 gap-10 md:grid-cols-3">
                    <!-- Card 1 -->
                    <div class="bg-white/40 border border-white/30 backdrop-blur-md rounded-2xl p-8 text-center shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-[#C8E6C9] text-[#1C3B20] mx-auto shadow-md">
                            <i class="fas fa-heart text-2xl"></i>
                        </div>
                        <h3 class="mt-6 text-xl font-semibold text-[#1C3B20]">Rescue</h3>
                        <p class="mt-3 text-sm text-[#2E4E2A]">
                            Our teams work around the clock to rescue animals from dangerous situations.
                        </p>
                    </div>
    
                    <!-- Card 2 -->
                    <div class="bg-white/40 border border-white/30 backdrop-blur-md rounded-2xl p-8 text-center shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-[#A5D6A7] text-[#1C3B20] mx-auto shadow-md">
                            <i class="fas fa-medkit text-2xl"></i>
                        </div>
                        <h3 class="mt-6 text-xl font-semibold text-[#1C3B20]">Rehabilitate</h3>
                        <p class="mt-3 text-sm text-[#2E4E2A]">
                            We provide medical care, nourishment, and love to help animals recover.
                        </p>
                    </div>
    
                    <!-- Card 3 -->
                    <div class="bg-white/40 border border-white/30 backdrop-blur-md rounded-2xl p-8 text-center shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-[#C8E6C9] text-[#1C3B20] mx-auto shadow-md">
                            <i class="fas fa-home text-2xl"></i>
                        </div>
                        <h3 class="mt-6 text-xl font-semibold text-[#1C3B20]">Rehome</h3>
                        <p class="mt-3 text-sm text-[#2E4E2A]">
                            We carefully match animals with loving forever families through our adoption program.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Optional decorative shapes -->
        <div class="absolute bottom-0 left-0 w-40 h-40 bg-[#C8E6C9] opacity-20 rounded-full blur-3xl -z-10"></div>
        <div class="absolute top-0 right-0 w-56 h-56 bg-[#A5D6A7] opacity-10 rounded-full blur-2xl -z-10"></div>
    </div>
    
    <!-- Featured Animals -->
    <div class="bg-gradient-to-b from-[#E8F5E9] via-[#F1F8F2] to-[#C8E6C9] py-24 text-[#1C3B20]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Heading -->
            <div class="text-center">
                <h2 class="text-4xl font-extrabold tracking-tight sm:text-5xl drop-shadow-sm text-[#1C3B20]">
                    Animals Waiting for Homes
                </h2>
                <p class="mt-4 max-w-2xl text-lg text-[#2E4E2A] mx-auto">
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
                            <h3 class="text-xl font-semibold text-[#1C3B20]">Buddy</h3>
                            <span class="px-3 py-1 text-xs font-semibold text-white bg-[#A5D6A7] rounded-full shadow-sm">Dog</span>
                        </div>
                        <p class="mt-2 text-sm text-[#2E4E2A]">2 years old • Male • Neutered</p>
                        <p class="mt-3 text-base text-[#2E4E2A]">Friendly and energetic, Buddy loves long walks and cuddles.</p>
                        <button class="mt-5 w-full bg-[#C8E6C9] hover:bg-[#81C784] text-[#1C3B20] font-semibold py-2 px-4 rounded-lg transition duration-300 shadow-md">
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
                            <h3 class="text-xl font-semibold text-[#1C3B20]">Luna</h3>
                            <span class="px-3 py-1 text-xs font-semibold text-white bg-[#689F38] rounded-full shadow-sm">Cat</span>
                        </div>
                        <p class="mt-2 text-sm text-[#2E4E2A]">1 year old • Female • Spayed</p>
                        <p class="mt-3 text-base text-[#2E4E2A]">Gentle and affectionate, Luna enjoys quiet afternoons in sunny spots.</p>
                        <button class="mt-5 w-full bg-[#C8E6C9] hover:bg-[#81C784] text-[#1C3B20] font-semibold py-2 px-4 rounded-lg transition duration-300 shadow-md">
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
                            <h3 class="text-xl font-semibold text-[#1C3B20]">Max</h3>
                            <span class="px-3 py-1 text-xs font-semibold text-white bg-[#A5D6A7] rounded-full shadow-sm">Dog</span>
                        </div>
                        <p class="mt-2 text-sm text-[#2E4E2A]">3 years old • Male • Neutered</p>
                        <p class="mt-3 text-base text-[#2E4E2A]">Loyal and protective, Max would make a great companion for an active family.</p>
                        <button class="mt-5 w-full bg-[#C8E6C9] hover:bg-[#81C784] text-[#1C3B20] font-semibold py-2 px-4 rounded-lg transition duration-300 shadow-md">
                            Meet Max
                        </button>
                    </div>
                </div>
            </div>
    
            <!-- CTA Button -->
            <div class="mt-16 text-center">
                <a href="#" class="inline-flex items-center px-6 py-3 text-base font-semibold rounded-full text-white bg-[#2E7D32] hover:bg-[#388E3C] transition duration-300 shadow-lg">
                    View All Animals
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    
        <!-- Decorative Blobs -->
        <div class="absolute top-20 left-10 w-40 h-40 bg-[#C8E6C9] opacity-20 rounded-full blur-3xl -z-10"></div>
        <div class="absolute bottom-10 right-10 w-56 h-56 bg-[#A5D6A7] opacity-10 rounded-full blur-2xl -z-10"></div>
    </div>
    

    <!-- Testimonials -->
   <!-- Success Stories Section -->
<div class="bg-[#F1F8F2] py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
            <h2 class="text-base text-[#689F38] font-semibold tracking-widest uppercase">Success Stories</h2>
            <p class="mt-2 text-4xl leading-tight font-extrabold text-[#1C3B20] sm:text-5xl">
                Happy Pets, Happy Families
            </p>
        </div>

        <div class="mt-16 grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3">
            <!-- Testimonial Card -->
            <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 border border-[#C8E6C9]">
                <div class="flex items-center">
                    <img class="h-14 w-14 rounded-full shadow" src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah Johnson">
                    <div class="ml-4">
                        <h4 class="text-lg font-semibold text-[#1C3B20]">Sarah Johnson</h4>
                        <p class="text-sm text-[#689F38]">Adopted Bella in 2022</p>
                    </div>
                </div>
                <p class="mt-4 text-[#2E4E2A] leading-relaxed">
                    "Adopting Bella through BEA was the best decision we ever made. The process was smooth and the team was so supportive. Bella has brought so much joy to our family!"
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 border border-[#C8E6C9]">
                <div class="flex items-center">
                    <img class="h-14 w-14 rounded-full shadow" src="https://randomuser.me/api/portraits/men/45.jpg" alt="Michael Chen">
                    <div class="ml-4">
                        <h4 class="text-lg font-semibold text-[#1C3B20]">Michael Chen</h4>
                        <p class="text-sm text-[#689F38]">Adopted Rocky in 2021</p>
                    </div>
                </div>
                <p class="mt-4 text-[#2E4E2A] leading-relaxed">
                    "Rocky was rescued from terrible conditions, but you'd never know it now. The rehabilitation work BEA does is incredible. We're so grateful for their dedication."
                </p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 border border-[#C8E6C9]">
                <div class="flex items-center">
                    <img class="h-14 w-14 rounded-full shadow" src="https://randomuser.me/api/portraits/women/68.jpg" alt="Emma Rodriguez">
                    <div class="ml-4">
                        <h4 class="text-lg font-semibold text-[#1C3B20]">Emma Rodriguez</h4>
                        <p class="text-sm text-[#689F38]">Volunteer since 2020</p>
                    </div>
                </div>
                <p class="mt-4 text-[#2E4E2A] leading-relaxed">
                    "Volunteering with BEA has been one of the most rewarding experiences. Watching animals bloom into joyful companions is a magical feeling."
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Green CTA Section -->
<div class="bg-[#1C3B20] text-white py-16">
    <div class="max-w-7xl mx-auto px-6 sm:px-8">
        <div class="md:flex md:items-center md:justify-between">
            <div class="md:w-2/3">
                <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">
                    Ready to make a difference?
                </h2>
                <p class="mt-4 max-w-3xl text-lg text-[#C8E6C9]">
                    Whether you want to adopt, volunteer, or donate, your support helps us save more lives every day.
                </p>
            </div>
            <div class="mt-8 md:mt-0 flex gap-4">
                <a href="#" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-semibold rounded-xl text-[#1C3B20] bg-white hover:bg-[#F1F8F2] transition duration-300 shadow">
                    Get Involved
                </a>
                <a href="#" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-semibold rounded-xl text-white bg-[#2E7D32] hover:bg-[#388E3C] transition duration-300 shadow">
                    Donate Now
                </a>
            </div>
        </div>
    </div>
</div>
@endsection