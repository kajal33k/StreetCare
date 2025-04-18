@extends('layout.main')
@section('content')

    <!-- Hero Section -->
    <section id="home" class="hero-ghibli text-black py-20 md:py-32 px-4 bg-gradient-to-br from-[#44223C] to-[#6D4C67]">
        <div class="max-w-7xl mx-auto">
            <div class="md:flex items-center justify-between">
                <div class="md:w-1/2 mb-12 md:mb-0">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight text-[#6e2853]">Be a Guardian for Street Animals</h1>
                    <p class="text-xl md:text-2xl mb-8 opacity-90 text-[#7f446e]">
                        Your kindness can create magical transformations. Learn how to protect animals in need and become their guardian spirit.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#how-to-help" class="bg-[#8B5E83] hover:bg-[#6D4C67] text-white font-bold py-3 px-8 rounded-full text-lg text-center transition duration-300 transform hover:scale-105 shadow-lg hover:shadow-[#8B5E83]/50">
                            Learn How
                        </a>
                        <a href="#join" class="bg-transparent hover:bg-[#8B5E83] text-white hover:text-[#513449] border-2 border-[#623665] text-[#642d53] font-bold py-3 px-8 rounded-full text-lg text-center transition duration-300 transform hover:scale-105">
                            Join Our Circle
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center relative">
                    <img src="https://images.unsplash.com/photo-1551334787-21e6bd3ab135?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Rescued dog" class="rounded-xl shadow-2xl max-w-md w-full object-cover transform rotate-2">
                    <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-[#865473] rounded-full opacity-70 animate-pulse"></div>
                    <div class="absolute -top-4 -left-4 w-16 h-16 bg-[#657d75] rounded-full opacity-70 animate-pulse"></div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Stats Section -->
    <section class="py-16 bg-[#F8F3D6]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="p-6 bg-white rounded-xl shadow-md hover:shadow-xl transition-all">
                    <div class="text-4xl font-bold text-[#8B5E83] mb-2">10M+</div>
                    <div class="text-[#6D4C67]">Street Animals in Need</div>
                </div>
                <div class="p-6 bg-white rounded-xl shadow-md hover:shadow-xl transition-all">
                    <div class="text-4xl font-bold text-[#8B5E83] mb-2">75%</div>
                    <div class="text-[#6D4C67]">Without Proper Care</div>
                </div>
                <div class="p-6 bg-white rounded-xl shadow-md hover:shadow-xl transition-all">
                    <div class="text-4xl font-bold text-[#8B5E83] mb-2">1.2M</div>
                    <div class="text-[#6D4C67]">Rescued Yearly</div>
                </div>
                <div class="p-6 bg-white rounded-xl shadow-md hover:shadow-xl transition-all">
                    <div class="text-4xl font-bold text-[#8B5E83] mb-2">YOU</div>
                    <div class="text-[#6D4C67]">Can Make Magic</div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- How to Help Section -->
    <section id="how-to-help" class="py-20 bg-[#F0E6CC]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-[#44223C] mb-4">How You Can Be a Guardian</h2>
                <div class="max-w-2xl mx-auto text-[#6D4C67] text-lg relative">
                    <p>Small acts that create wonder for street animals</p>
                    <div class="absolute -top-6 -left-6 w-12 h-12 bg-[#F8C7CC] rounded-full opacity-50"></div>
                    {{-- <div class="absolute -bottom-6 -right-6 w-6 h-6 bg-[#B8E0D2] rounded-full opacity-50"></div>
                 --}}
                </div>
            </div>
    
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-500 transform hover:scale-105 border-t-4 border-[#8B5E83]">
                    <div class="bg-[#8B5E83] w-20 h-20 rounded-full flex items-center justify-center mb-6 mx-auto shadow-inner">
                        <i class="fas fa-utensils text-[#F8F3D6] text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4 text-[#44223C]">Provide Nourishment</h3>
                    <p class="text-[#6D4C67] text-center mb-6">
                        Create little feeding stations with clean water and wholesome food.
                    </p>
                    <div class="text-center">
                        <a href="#" class="text-[#8B5E83] font-medium hover:underline flex items-center justify-center">
                            Learn feeding ways <i class="fas fa-leaf ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>
    
                <!-- Card 2 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-500 transform hover:scale-105 border-t-4 border-[#8B5E83]">
                    <div class="bg-[#8B5E83] w-20 h-20 rounded-full flex items-center justify-center mb-6 mx-auto shadow-inner">
                        <i class="fas fa-first-aid text-[#F8F3D6] text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4 text-[#44223C]">Healing Touch</h3>
                    <p class="text-[#6D4C67] text-center mb-6">
                        Learn gentle first aid to comfort animals before help arrives.
                    </p>
                    <div class="text-center">
                        <a href="#" class="text-[#8B5E83] font-medium hover:underline flex items-center justify-center">
                            Healing guide <i class="fas fa-heart ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>
    
                <!-- Card 3 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-500 transform hover:scale-105 border-t-4 border-[#8B5E83]">
                    <div class="bg-[#8B5E83] w-20 h-20 rounded-full flex items-center justify-center mb-6 mx-auto shadow-inner">
                        <i class="fas fa-home text-[#F8F3D6] text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4 text-[#44223C]">Cozy Shelter</h3>
                    <p class="text-[#6D4C67] text-center mb-6">
                        Build charming shelters from natural and recycled materials.
                    </p>
                    <div class="text-center">
                        <a href="#" class="text-[#8B5E83] font-medium hover:underline flex items-center justify-center">
                            Shelter ideas <i class="fas fa-tree ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>
    
            <div class="mt-16 text-center relative">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 w-16 h-16 bg-[#F8C7CC] rounded-full opacity-30"></div>
                <a href="#" class="inline-block bg-[#8B5E83] hover:bg-[#6D4C67] text-[#F8F3D6] font-bold py-3 px-8 rounded-full text-lg transition duration-300 transform hover:scale-105 relative z-10 shadow-md">
                    Complete Guardian's Guide
                </a>
            </div>
        </div>
    </section>
    

    <!-- Step-by-Step Rescue Guide -->
    <section class="py-20 bg-[#F8F3D6]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 relative">
                <h2 class="text-4xl font-bold text-[#44223C] mb-4">Your Guardian's Journey</h2>
                <p class="max-w-2xl mx-auto text-[#6D4C67] text-lg">
                    What to do when you find an animal in need
                </p>
                <div class="absolute top-0 right-0 w-24 h-24 bg-[#B8E0D2] rounded-full opacity-20 -z-10"></div>
            </div>
    
            <!-- Steps Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                <!-- Step Card -->
                <div class="bg-white p-6 rounded-2xl shadow transition-shadow hover:shadow-lg text-center">
                    <div class="bg-[#F8C7CC] text-[#44223C] w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold mb-4 mx-auto shadow-inner">
                        1
                    </div>
                    <h3 class="text-xl font-semibold text-[#44223C] mb-3">Observe Carefully</h3>
                    <p class="text-[#6D4C67]">
                        Approach gently like the morning mist. Check for injuries while respecting their space.
                    </p>
                </div>
    
                <div class="bg-white p-6 rounded-2xl shadow transition-shadow hover:shadow-lg text-center">
                    <div class="bg-[#F8C7CC] text-[#44223C] w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold mb-4 mx-auto shadow-inner">
                        2
                    </div>
                    <h3 class="text-xl font-semibold text-[#44223C] mb-3">Offer Comfort</h3>
                    <p class="text-[#6D4C67]">
                        Provide water and nourishment. Speak softly to calm their spirit.
                    </p>
                </div>
    
                <div class="bg-white p-6 rounded-2xl shadow transition-shadow hover:shadow-lg text-center">
                    <div class="bg-[#F8C7CC] text-[#44223C] w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold mb-4 mx-auto shadow-inner">
                        3
                    </div>
                    <h3 class="text-xl font-semibold text-[#44223C] mb-3">Seek Help</h3>
                    <p class="text-[#6D4C67]">
                        Call local animal guardians or healers who can provide care.
                    </p>
                </div>
    
                <div class="bg-white p-6 rounded-2xl shadow transition-shadow hover:shadow-lg text-center">
                    <div class="bg-[#F8C7CC] text-[#44223C] w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold mb-4 mx-auto shadow-inner">
                        4
                    </div>
                    <h3 class="text-xl font-semibold text-[#44223C] mb-3">Safe Passage</h3>
                    <p class="text-[#6D4C67]">
                        If trained, guide them to safety with gentle hands and a kind heart.
                    </p>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Emergency Guide -->
    <section id="emergency" class="py-20 bg-gradient-to-br from-[#44223C] to-[#6D4C67] text-[#F8F3D6]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:flex items-center">
                <div class="md:w-1/2 mb-12 md:mb-0 md:pr-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Guardian's Emergency Wisdom</h2>
                    <p class="text-lg text-[#F8C7CC] mb-8">
                        When moments matter, follow these sacred steps to protect an animal's life. Keep this knowledge close to your heart.
                    </p>
                    <div class="grid gap-6">
                        <div class="emergency-ghibli p-6 rounded-lg bg-white/10 backdrop-blur-sm border border-[#8B5E83]/30">
                            <div class="flex items-start">
                                <div class="bg-[#F8C7CC] text-[#44223C] rounded-full w-10 h-10 flex items-center justify-center mr-4 flex-shrink-0 shadow-inner">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg mb-2 text-[#F8F3D6]">Severe Bleeding</h4>
                                    <p class="text-[#F8C7CC]">Apply gentle pressure with clean cloth. Elevate wound if possible. Seek healing immediately.</p>
                                </div>
                            </div>
                        </div>
                        <div class="emergency-ghibli p-6 rounded-lg bg-white/10 backdrop-blur-sm border border-[#8B5E83]/30">
                            <div class="flex items-start">
                                <div class="bg-[#F8C7CC] text-[#44223C] rounded-full w-10 h-10 flex items-center justify-center mr-4 flex-shrink-0 shadow-inner">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg mb-2 text-[#F8F3D6]">Vehicle Accident</h4>
                                    <p class="text-[#F8C7CC]">Move only if danger is near. Support head and neck. Keep warm with a blanket to prevent shock.</p>
                                </div>
                            </div>
                        </div>
                        <div class="emergency-ghibli p-6 rounded-lg bg-white/10 backdrop-blur-sm border border-[#8B5E83]/30">
                            <div class="flex items-start">
                                <div class="bg-[#F8C7CC] text-[#44223C] rounded-full w-10 h-10 flex items-center justify-center mr-4 flex-shrink-0 shadow-inner">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg mb-2 text-[#F8F3D6]">Poisoning</h4>
                                    <p class="text-[#F8C7CC]">Identify the substance if safe. Don't induce vomiting. Rush to healer with sample if possible.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl shadow-xl p-8 md:p-10 border border-[#8B5E83]/30">
                        <h3 class="text-2xl font-bold mb-6 text-[#F8F3D6]">Sacred Contacts</h3>
                        <div class="space-y-6">
                            <div class="flex items-center">
                                <div class="bg-[#F8C7CC] text-[#44223C] rounded-full w-12 h-12 flex items-center justify-center mr-4 flex-shrink-0 shadow-inner">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-[#F8F3D6]">24/7 Animal Guardian Hotline</h4>
                                    <p class="text-[#F8C7CC]">+1 (800) 555-GHI (4445)</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-[#F8C7CC] text-[#44223C] rounded-full w-12 h-12 flex items-center justify-center mr-4 flex-shrink-0 shadow-inner">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-[#F8F3D6]">Nearest Healing Sanctuary</h4>
                                    <p class="text-[#F8C7CC]">123 Forest Path, Your Town (Always open)</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-[#F8C7CC] text-[#44223C] rounded-full w-12 h-12 flex items-center justify-center mr-4 flex-shrink-0 shadow-inner">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-[#F8F3D6]">Local Guardian Circle</h4>
                                    <p class="text-[#F8C7CC]">50+ kindred spirits ready to help in your realm</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8">
                            <button class="w-full bg-[#F8C7CC] hover:bg-[#F8F3D6] text-[#44223C] font-bold py-3 px-6 rounded-lg text-lg transition duration-300 flex items-center justify-center shadow-inner">
                                <i class="fas fa-download mr-2"></i> Keep This Wisdom Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories -->
    <section id="stories" class="py-20 bg-[#F0E6CC]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 relative">
                <h2 class="text-3xl md:text-4xl font-bold text-[#44223C] mb-4">Tales of Transformation</h2>
                <p class="max-w-2xl mx-auto text-[#6D4C67] text-lg">
                    Ordinary souls creating extraordinary magic for street animals
                </p>
                <div class="absolute -top-4 -right-4 w-16 h-16 bg-[#B8E0D2] rounded-full opacity-30"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Story 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:rotate-1 transition duration-300">
                    <div class="md:flex">
                        <div class="md:w-1/3 relative overflow-hidden">
                            <img src="https://cdn.pixabay.com/photo/2023/03/11/17/40/ai-generated-7844933_1280.jpg" alt="Rescued dog" class="w-full h-full object-cover transform hover:scale-105 transition duration-500">
                            <div class="absolute bottom-0 left-0 w-full h-1/3 bg-gradient-to-t from-black/30 to-transparent"></div>
                        </div>
                        <div class="p-8 md:w-2/3">
                            <div class="flex items-center mb-4">
                                <div class="bg-[#F8C7CC] text-[#44223C] rounded-full w-10 h-10 flex items-center justify-center mr-3 shadow-inner">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <h4 class="font-bold text-lg text-[#44223C]">From Lonely to Loved</h4>
                            </div>
                            <p class="text-[#6D4C67] mb-4">
                                "I found Totoro (yes, that's his name now) shivering under a bridge during the rainy season. After weeks of care, he blossomed into the most joyful spirit. Now he welcomes all foster animals into our home."
                            </p>
                            <div class="flex items-center">
                                <div class="bg-[#8B5E83] rounded-full w-10 h-10 mr-3 flex items-center justify-center text-[#F8F3D6]">
                                    R
                                </div>
                                <div>
                                    <p class="font-medium text-[#44223C]">Rahul Sharma</p>
                                    <p class="text-sm text-[#8B5E83]">Delhi, India | 12 magical rescues</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Story 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-rotate-1 transition duration-300">
                    <div class="md:flex">
                        <div class="md:w-1/3 relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1544568100-847a948585b9?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Community feeding" class="w-full h-full object-cover transform hover:scale-105 transition duration-500">
                            <div class="absolute bottom-0 left-0 w-full h-1/3 bg-gradient-to-t from-black/30 to-transparent"></div>
                        </div>
                        <div class="p-8 md:w-2/3">
                            <div class="flex items-center mb-4">
                                <div class="bg-[#F8C7CC] text-[#44223C] rounded-full w-10 h-10 flex items-center justify-center mr-3 shadow-inner">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <h4 class="font-bold text-lg text-[#44223C]">Neighborhood Nourishment</h4>
                            </div>
                            <p class="text-[#6D4C67] mb-4">
                                "What began as feeding three street cats in our alley grew into a community ritual. Now our entire neighborhood takes turns caring for over 50 animals. We've built little forest shelters and even have a monthly 'blessing of the beasts' ceremony."
                            </p>
                            <div class="flex items-center">
                                <div class="bg-[#8B5E83] rounded-full w-10 h-10 mr-3 flex items-center justify-center text-[#F8F3D6]">
                                    P
                                </div>
                                <div>
                                    <p class="font-medium text-[#44223C]">Priya Patel</p>
                                    <p class="text-sm text-[#8B5E83]">Mumbai, India | Spirit of the Community</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="#" class="inline-flex items-center text-[#8B5E83] font-medium hover:underline group">
                    More heartwarming tales <i class="fas fa-feather-alt ml-2 transition-transform group-hover:translate-x-1"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Join Network -->
    <section id="join" class="py-20 bg-[#44223C] text-[#F8F3D6]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Join Our Guardian Circle</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto text-[#F8C7CC]">
                Connect with kindred spirits, learn ancient wisdom, and receive gifts to help street animals in your realm.
            </p>
    
            <div class="bg-[#F8F3D6] rounded-xl shadow-xl p-8 md:p-10 text-[#44223C] max-w-2xl mx-auto relative overflow-hidden">
                <div class="absolute -top-20 -right-20 w-40 h-40 bg-[#F8C7CC] rounded-full opacity-20"></div>
                <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-[#B8E0D2] rounded-full opacity-20"></div>
                <div class="relative z-10">
                    <h3 class="text-2xl font-bold mb-6">Become a Certified Animal Guardian</h3>
                    <form class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="first-name" class="block text-left font-medium mb-2">First Name</label>
                                <input type="text" id="first-name" class="w-full px-4 py-3 border border-[#8B5E83] rounded-lg focus:ring-2 focus:ring-[#8B5E83] focus:border-[#8B5E83] bg-white/70">
                            </div>
                            <div>
                                <label for="last-name" class="block text-left font-medium mb-2">Last Name</label>
                                <input type="text" id="last-name" class="w-full px-4 py-3 border border-[#8B5E83] rounded-lg focus:ring-2 focus:ring-[#8B5E83] focus:border-[#8B5E83] bg-white/70">
                            </div>
                        </div>
                        <div>
                            <label for="email" class="block text-left font-medium mb-2">Email</label>
                            <input type="email" id="email" class="w-full px-4 py-3 border border-[#8B5E83] rounded-lg focus:ring-2 focus:ring-[#8B5E83] focus:border-[#8B5E83] bg-white/70">
                        </div>
                        <div>
                            <label for="location" class="block text-left font-medium mb-2">Your Realm</label>
                            <input type="text" id="location" class="w-full px-4 py-3 border border-[#8B5E83] rounded-lg focus:ring-2 focus:ring-[#8B5E83] focus:border-[#8B5E83] bg-white/70">
                        </div>
                        <div>
                            <label for="commitment" class="block text-left font-medium mb-2">How will you serve?</label>
                            <select id="commitment" class="w-full px-4 py-3 border border-[#8B5E83] rounded-lg focus:ring-2 focus:ring-[#8B5E83] focus:border-[#8B5E83] bg-white/70">
                                <option value="">Choose your path</option>
                                <option value="feeding">Community Nourishment</option>
                                <option value="rescue">Guardian Rescues</option>
                                <option value="fostering">Sacred Fostering</option>
                                <option value="education">Wisdom Sharing</option>
                                <option value="all">All Paths Call Me</option>
                            </select>
                        </div>
                        <div>
                            <button type="submit" class="w-full bg-[#8B5E83] hover:bg-[#6D4C67] text-[#F8F3D6] font-bold py-4 px-6 rounded-lg text-lg transition duration-300 shadow-md hover:shadow-[#8B5E83]/50">
                                Join the Circle
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <style>
        .hero-ghibli {
            background-image: url('https://www.transparenttextures.com/patterns/soft-circle-scales.png');
            background-blend-mode: overlay;
        }
        .step-ghibli {
            position: relative;
        }
        .step-ghibli:not(:last-child):after {
            content: '';
            position: absolute;
            top: 50%;
            right: -2rem;
            width: 1.5rem;
            height: 0.25rem;
            background: #F8C7CC;
            transform: translateY(-50%);
        }
        .emergency-ghibli {
            transition: all 0.3s ease;
        }
        .emergency-ghibli:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(139, 94, 131, 0.2);
        }
    </style>
 
    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when clicking a link
        const mobileMenuLinks = document.querySelectorAll('.mobile-menu a');
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });
        
        // Add floating animation to elements
        document.querySelectorAll('.step-ghibli, .emergency-ghibli').forEach(el => {
            el.addEventListener('mousemove', (e) => {
                const xAxis = (window.innerWidth / 2 - e.pageX) / 25;
                const yAxis = (window.innerHeight / 2 - e.pageY) / 25;
                el.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
            });
            el.addEventListener('mouseleave', () => {
                el.style.transform = 'rotateY(0deg) rotateX(0deg)';
            });
        });
    </script>
@endsection