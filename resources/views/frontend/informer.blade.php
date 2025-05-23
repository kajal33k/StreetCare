 @extends('layout.main')
 @section('content')
 <script>
     tailwind.config = {
         theme: {
             extend: {
                 fontFamily: {
                     poppins: ['Poppins', 'sans-serif'],
                     roboto: ['Roboto', 'sans-serif'],
                 },
                 colors: {
                     primary: '#3B82F6',
                     secondary: '#10B981',
                     accent: '#F59E0B',
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
             text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
         }

         .hero-gradient {
             background: linear-gradient(135deg, rgba(59, 130, 246, 0.9) 0%, rgba(16, 185, 129, 0.9) 100%);
         }

         .card-hover {
             transition: all 0.3s ease;
         }

         .card-hover:hover {
             transform: translateY(-5px);
             box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
         }
     }
 </style>

 
 <!-- Hero Section -->
<!-- Ghibli-Style Hero Section -->
<div class="bg-gradient-to-br from-[#22442d] via-[#3a6a44] to-[#5a8f69] text-white">
    <div class="max-w-7xl mx-auto py-24 px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-shadow-xl font-poppins">
                Community Resources for Street Animals
            </h1>
            <p class="mt-6 max-w-3xl mx-auto text-xl text-[#f7eaf2] font-light text-shadow-sm">
                Your comprehensive guide to helping street animals in need. Find shelters, report cases, access emergency care, and join local initiatives.
            </p>

            <!-- Search Bar -->
            <div class="mt-10">
                <div class="relative max-w-xl mx-auto">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i class="fas fa-search text-[#c9e0d1]"></i>
                    </div>
                    <input
                        type="text"
                        class="block w-full pl-12 pr-4 py-4 rounded-xl bg-white/20 placeholder-[#e9d9e3] text-white focus:outline-none focus:ring-2 focus:ring-[#e9d9e3] focus:bg-white/30 focus:text-white transition duration-300 backdrop-blur-sm shadow-lg"
                        placeholder="Search for resources in your area...">
                </div>
            </div>
        </div>
    </div>
</div>


 <!-- Emergency Alert -->
 <div class="bg-[#5d9a78] text-white">
     <div class="max-w-7xl mx-auto py-3 px-4 sm:px-6 lg:px-8">
         <div class="flex items-center justify-between flex-wrap">
             <div class="w-0 flex-1 flex items-center">
                 <span class="flex p-2 rounded-lg bg-green-700">
                     <i class="fas fa-exclamation-triangle"></i>
                 </span>
                 <p class="ml-3 font-medium truncate">
                     <span class="md:hidden">Heat wave alert for street animals!</span>
                     <span class="hidden md:inline">Emergency Alert: Extreme heat wave expected this weekend - Learn how
                         to help street animals stay cool</span>
                 </p>
             </div>
             <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
                 <button type="button"
                     class="-mr-1 flex p-2 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2 transition duration-150 ease-in-out">
                     <span class="sr-only">Dismiss</span>
                     <i class="fas fa-times"></i>
                 </button>
             </div>
         </div>
     </div>
 </div>

 <!-- Quick Actions -->
 <!-- Ghibli-Styled: How Can You Help Today Section -->
<div class="bg-gradient-to-b from-[#f3f9f6] to-[#e8f4ed] py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-[#224431] text-center mb-12 font-poppins">
            How Can You Help Today?
        </h2>
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Report an Animal -->
            <a href="#" class="group bg-white rounded-xl border border-[#d8e8db] shadow-sm hover:shadow-lg transition duration-300">
                <div class="px-6 py-8 text-center">
                    <div class="mx-auto flex items-center justify-center h-14 w-14 rounded-full bg-[#ddd6f3] text-[#22442f] text-xl">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-lg font-semibold text-[#22442f] group-hover:text-[#2c5c3d]">Report an Animal</h3>
                        <p class="mt-2 text-sm text-[#5b7a63]">
                            Found an injured or distressed street animal? Alert local rescuers.
                        </p>
                    </div>
                </div>
            </a>

            <!-- Find Shelters -->
            <a href="#" class="group bg-white rounded-xl border border-[#e8d8e4] shadow-sm hover:shadow-lg transition duration-300">
                <div class="px-6 py-8 text-center">
                    <div class="mx-auto flex items-center justify-center h-14 w-14 rounded-full bg-[#cfe9e3] text-[#2f4f4f] text-xl">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-lg font-semibold text-[#22442f] group-hover:text-[#2c5c3a]">Find Shelters</h3>
                        <p class="mt-2 text-sm text-[#5b7a62]">
                            Locate nearby animal shelters and emergency care facilities.
                        </p>
                    </div>
                </div>
            </a>

            <!-- Provide Care -->
            <a href="#" class="group bg-white rounded-xl border border-[#d8e8dc] shadow-sm hover:shadow-lg transition duration-300">
                <div class="px-6 py-8 text-center">
                    <div class="mx-auto flex items-center justify-center h-14 w-14 rounded-full bg-[#d7ffe3] text-[#3ba15b] text-xl">
                        <i class="fas fa-hand-holding-water"></i>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-lg font-semibold text-[#22442f] group-hover:text-[#2c5c46]">Provide Care</h3>
                        <p class="mt-2 text-sm text-[#5b7a64]">
                            Learn how to safely provide food, water, and temporary shelter.
                        </p>
                    </div>
                </div>
            </a>

            <!-- Join Community -->
            <a href="#" class="group bg-white rounded-xl border border-[#d8e8df] shadow-sm hover:shadow-lg transition duration-300">
                <div class="px-6 py-8 text-center">
                    <div class="mx-auto flex items-center justify-center h-14 w-14 rounded-full bg-[#d6efdd] text-[#3a6a51] text-xl">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-lg font-semibold text-[#224432] group-hover:text-[#2c5c3b]">Join Community</h3>
                        <p class="mt-2 text-sm text-[#5b7a64]">
                            Connect with local street animal caregivers and volunteers.
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

 <!-- Resource Guides -->
 <!-- Ghibli-Styled: Essential Resource Guides Section -->
<div class="bg-gradient-to-b from-[#f4f9f6] to-[#e6f5ed] py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Title -->
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-[#22442c] font-poppins">Essential Resource Guides</h2>
            <p class="mt-4 max-w-2xl text-lg text-[#4c6d52] mx-auto">
                Practical information for helping street animals in different situations
            </p>
        </div>

        <!-- Guide Cards -->
        <div class="mt-16 grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Guide 1 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 border border-[#d3e5d9]">
                <div class="h-48 overflow-hidden">
                    <img class="w-full h-full object-cover"
                         src="https://images.unsplash.com/photo-1588943211346-0908a1fb0b01?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                         alt="First aid for animals">
                </div>
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="bg-[#ddd6f3] text-[#22442a] rounded-md p-2 text-xl">
                            <i class="fas fa-first-aid"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-[#22442c]">Emergency First Aid</h3>
                            <p class="text-sm text-[#7a9481]">Updated: June 2023</p>
                        </div>
                    </div>
                    <p class="mt-4 text-[#4c6d57] text-sm">
                        Step-by-step guide for providing emergency care to injured street animals before professional help arrives.
                    </p>
                    <div class="mt-6 flex justify-between items-center">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#d8f3e4] text-[#317a5c]">
                            <i class="fas fa-check-circle mr-1"></i> Verified
                        </span>
                        <a href="#" class="text-[#2c5c43] hover:text-[#3a7a53] text-sm font-medium">
                            Read Guide <i class="fas fa-chevron-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Guide 2 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 border border-[#d3e5d8]">
                <div class="h-48 overflow-hidden">
                    <img class="w-full h-full object-cover"
                         src="https://cdn.pixabay.com/photo/2020/07/30/22/40/bird-5451466_1280.jpg"
                         alt="Animal feeding">
                </div>
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="bg-[#cfe9e3] text-[#2f4f4f] rounded-md p-2 text-xl">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-[#224429]">Safe Feeding Practices</h3>
                            <p class="text-sm text-[#7a9481]">Updated: May 2023</p>
                        </div>
                    </div>
                    <p class="mt-4 text-[#4c6d5b] text-sm">
                        What to feed (and what to avoid) when caring for street animals. Includes seasonal recommendations.
                    </p>
                    <div class="mt-6 flex justify-between items-center">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#d8f3e4] text-[#317a5c]">
                            <i class="fas fa-check-circle mr-1"></i> Verified
                        </span>
                        <a href="#" class="text-[#2c5c3a] hover:text-[#3a7a49] text-sm font-medium">
                            Read Guide <i class="fas fa-chevron-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Guide 3 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 border border-[#d3e5da]">
                <div class="h-48 overflow-hidden">
                    <img class="w-full h-full object-cover"
                         src="https://images.unsplash.com/photo-1560743641-3914f2c45636?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                         alt="Community care">
                </div>
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="bg-[#ccffef] text-[#3ba18d] rounded-md p-2 text-xl">
                            <i class="fas fa-snowflake"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-[#224424]">Extreme Weather Care</h3>
                            <p class="text-sm text-[#7a9486]">Updated: April 2023</p>
                        </div>
                    </div>
                    <p class="mt-4 text-[#4c6d50] text-sm">
                        Protecting street animals during heat waves, monsoons, and winter. DIY shelter ideas and precautions.
                    </p>
                    <div class="mt-6 flex justify-between items-center">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#d8f3e4] text-[#317a5c]">
                            <i class="fas fa-check-circle mr-1"></i> Verified
                        </span>
                        <a href="#" class="text-[#2c5c32] hover:text-[#3a7a40] text-sm font-medium">
                            Read Guide <i class="fas fa-chevron-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- View All Button -->
        <div class="mt-14 text-center">
            <a href="#"
               class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-[#2c5c35] hover:bg-[#224428] transition duration-300">
                View All Resources
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</div>


 <!-- Local Initiatives -->
 <div class="bg-[#fdf9f3] py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
            <h2 class="text-base text-[#86a18e] font-semibold tracking-wide uppercase">Community Spotlight</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-[#22442b] sm:text-4xl font-poppins">
                Local Street Care Initiatives
            </p>
            <p class="mt-4 max-w-2xl text-xl text-[#6e7e77] lg:mx-auto">
                Programs making a difference in your area
            </p>
        </div>

        <div class="mt-12">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Card -->
                <div class="bg-[#f7fff8] hover:bg-[#edfced] transition duration-300 rounded-2xl shadow-lg overflow-hidden border border-[#dbe8dd]">
                    <div class="p-6">
                        <div class="flex items-center">
                            <img class="h-12 w-12 rounded-full" src="https://randomuser.me/api/portraits/women/44.jpg" alt="Project leader">
                            <div class="ml-4">
                                <h4 class="text-lg font-semibold text-[#224429]">Community Feeders Network</h4>
                                <p class="text-sm text-[#86a18d]">Central District</p>
                            </div>
                        </div>
                        <p class="mt-4 text-[#4b5f52]">
                            Volunteer-run program providing daily meals to over 200 street dogs across 15 locations.
                        </p>
                        <div class="mt-6 space-y-2 text-sm text-[#6e7e74]">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-map-marker-alt text-[#86a18f]"></i><span>5 km from you</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-users text-[#86a18e]"></i><span>32 volunteers</span>
                            </div>
                        </div>
                        <button class="mt-6 w-full bg-[#dbe8dd] hover:bg-[#cee0d3] text-[#22442f] py-2 px-4 rounded-lg font-medium transition duration-300">
                            Join Initiative
                        </button>
                    </div>
                </div>

                <!-- Repeat for other two initiatives -->
                <div class="bg-[#f7fffb] hover:bg-[#edfcf5] transition duration-300 rounded-2xl shadow-lg overflow-hidden border border-[#dbe8e2]">
                    <div class="p-6">
                        <div class="flex items-center">
                            <img class="h-12 w-12 rounded-full" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Project leader">
                            <div class="ml-4">
                                <h4 class="text-lg font-semibold text-[#224429]">TNR Collective</h4>
                                <p class="text-sm text-[#86a18c]">Westside Area</p>
                            </div>
                        </div>
                        <p class="mt-4 text-[#4b5f54]">
                            Trap-Neuter-Return program that has sterilized over 500 community cats in the past year.
                        </p>
                        <div class="mt-6 space-y-2 text-sm text-[#6e7e72]">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-map-marker-alt text-[#86a18a]"></i><span>8 km from you</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-users text-[#86a190]"></i><span>18 volunteers</span>
                            </div>
                        </div>
                        <button class="mt-6 w-full bg-[#dbe8df] hover:bg-[#cee0d2] text-[#244422] py-2 px-4 rounded-lg font-medium transition duration-300">
                            Join Initiative
                        </button>
                    </div>
                </div>

                <div class="bg-[#f7fffc] hover:bg-[#edfcf6] transition duration-300 rounded-2xl shadow-lg overflow-hidden border border-[#dbe8e1]">
                    <div class="p-6">
                        <div class="flex items-center">
                            <img class="h-12 w-12 rounded-full" src="https://randomuser.me/api/portraits/women/68.jpg" alt="Project leader">
                            <div class="ml-4">
                                <h4 class="text-lg font-semibold text-[#00b853]">Winter Shelter Project</h4>
                                <p class="text-sm text-[#86a191]">Citywide</p>
                            </div>
                        </div>
                        <p class="mt-4 text-[#4b5f51]">
                            Building and distributing insulated shelters for street animals ahead of winter season.
                        </p>
                        <div class="mt-6 space-y-2 text-sm text-[#6e7e71]">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-map-marker-alt text-[#86a18a]"></i><span>Multiple locations</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fas fa-users text-[#86a18a]"></i><span>45 volunteers</span>
                            </div>
                        </div>
                        <button class="mt-6 w-full bg-[#dfe8db] hover:bg-[#cee0d2] text-[#224424] py-2 px-4 rounded-lg font-medium transition duration-300">
                            Join Initiative
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

 <!-- News & Updates -->
 <div class="bg-[#f2f9f5] py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
            <h2 class="text-base text-[#78a683] font-semibold tracking-wide uppercase">News & Alerts</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-[#224431] sm:text-4xl font-poppins">
                Latest Updates
            </p>
        </div>

        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- News Card Template -->
            <div class="bg-white rounded-2xl shadow-[0_10px_30px_-10px_rgba(68,34,60,0.25)] overflow-hidden transition-transform transform hover:-translate-y-1 hover:shadow-xl border border-[#dce9df]">
                <div class="h-48 overflow-hidden">
                    <img class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
                         src="https://images.unsplash.com/photo-1544568100-847a948585b9?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                         alt="News image">
                </div>
                <div class="p-6">
                    <div class="flex items-center space-x-2">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#e6f9ec] text-[#40b868]">
                            Alert
                        </span>
                        <span class="text-sm text-gray-500">2 hours ago</span>
                    </div>
                    <h3 class="mt-3 text-lg font-semibold text-[#22442e]">Heat Wave Advisory</h3>
                    <p class="mt-2 text-[#4f6b55]">
                        Extreme temperatures expected this weekend. Learn how to create cooling stations for street animals.
                    </p>
                    <div class="mt-4">
                        <a href="#" class="text-sm font-medium text-[#78a687] hover:text-[#2344229e] transition">
                            Read more <i class="fas fa-chevron-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- News 2 -->
            <div class="bg-white rounded-2xl shadow-[0_10px_30px_-10px_rgba(68,34,60,0.25)] overflow-hidden transition-transform transform hover:-translate-y-1 hover:shadow-xl border border-[#dce9dd]">
                <div class="h-48 overflow-hidden">
                    <img class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
                         src="https://images.unsplash.com/photo-1450778869180-41d0601e046e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                         alt="News image">
                </div>
                <div class="p-6">
                    <div class="flex items-center space-x-2">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#E7F7EC] text-[#4B9268]">
                            Event
                        </span>
                        <span class="text-sm text-gray-500">1 day ago</span>
                    </div>
                    <h3 class="mt-3 text-lg font-semibold text-[#224431]">Volunteer Training Day</h3>
                    <p class="mt-2 text-[#4f6b55]">
                        Free workshop on basic animal first aid and rescue techniques this Saturday at Central Park.
                    </p>
                    <div class="mt-4">
                        <a href="#" class="text-sm font-medium text-[#78a694] hover:text-[#224431] transition">
                            Read more <i class="fas fa-chevron-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- News 3 -->
            <div class="bg-white rounded-2xl shadow-[0_10px_30px_-10px_rgba(68,34,60,0.25)] overflow-hidden transition-transform transform hover:-translate-y-1 hover:shadow-xl border border-[#E9DCE5]">
                <div class="h-48 overflow-hidden">
                    <img class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
                         src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                         alt="News image">
                </div>
                <div class="p-6">
                    <div class="flex items-center space-x-2">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#EDE6F9] text-[#51a191]">
                            Success
                        </span>
                        <span class="text-sm text-gray-500">3 days ago</span>
                    </div>
                    <h3 class="mt-3 text-lg font-semibold text-[#224431]">1000th Rescue Milestone</h3>
                    <p class="mt-2 text-[#4f6b55]">
                        Local shelter celebrates landmark achievement in street animal rescues and rehabilitations.
                    </p>
                    <div class="mt-4">
                        <a href="#" class="text-sm font-medium text-[#78a68a] hover:text-[#224429] transition">
                            Read more <i class="fas fa-chevron-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


 <!-- Call to Action -->
 <div class="bg-[#224429] text-white">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="md:flex md:items-center md:justify-between">
            <div class="md:w-2/3">
                <h2 class="text-2xl sm:text-3xl font-bold tracking-tight font-poppins text-white">
                    Stay Informed About Street Animals
                </h2>
                <p class="mt-3 max-w-2xl text-lg text-[#E3D6E6]">
                    Subscribe to our newsletter for alerts, resources, and community updates.
                </p>
            </div>

            <div class="mt-8 md:mt-0 md:flex-shrink-0 w-full md:w-auto">
                <form class="flex flex-col sm:flex-row items-center gap-4 sm:gap-0">
                    <input type="email"
                        class="w-full sm:w-72 px-4 py-3 text-base text-gray-900 placeholder-[#78a68e] rounded-l-md border-none focus:ring-2 focus:ring-[#78a680] focus:outline-none"
                        placeholder="Enter your email" required>

                    <button type="submit"
                        class="bg-[#78a68d] hover:bg-[#5b876a] transition duration-300 px-6 py-3 rounded-md text-sm font-medium text-white">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
