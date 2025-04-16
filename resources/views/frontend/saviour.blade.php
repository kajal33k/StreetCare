<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Be a Savior for Street Animals</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }
        .hero-gradient {
            background: linear-gradient(135deg, rgba(241,143,1,0.9) 0%, rgba(239,108,0,0.9) 100%);
        }
        .savior-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .emergency-card {
            background: linear-gradient(135deg, #f87171 0%, #ef4444 100%);
        }
        .step-connector {
            position: relative;
        }
        .step-connector:after {
            content: '';
            position: absolute;
            top: 50%;
            right: -2rem;
            width: 4rem;
            height: 2px;
            background: #f59e0b;
        }
        @media (max-width: 768px) {
            .step-connector:after {
                display: none;
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i class="fas fa-paw text-amber-600 text-2xl mr-2"></i>
                        <span class="text-xl font-bold text-gray-900">StreetSaviors</span>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-center space-x-8">
                        <a href="#home" class="text-gray-900 hover:text-amber-600 px-3 py-2 font-medium">Home</a>
                        <a href="#how-to-help" class="text-gray-900 hover:text-amber-600 px-3 py-2 font-medium">How to Help</a>
                        <a href="#emergency" class="text-gray-900 hover:text-amber-600 px-3 py-2 font-medium">Emergency Guide</a>
                        <a href="#stories" class="text-gray-900 hover:text-amber-600 px-3 py-2 font-medium">Success Stories</a>
                        <a href="#join" class="bg-amber-600 hover:bg-amber-700 text-white px-6 py-2 rounded-full font-medium transition duration-300">Join Now</a>
                    </div>
                </div>
                <div class="md:hidden">
                    <button class="mobile-menu-button p-2 rounded-md text-gray-700 hover:text-amber-600 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div class="mobile-menu hidden md:hidden bg-white shadow-lg">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#home" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-amber-600 hover:bg-gray-50">Home</a>
                <a href="#how-to-help" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-amber-600 hover:bg-gray-50">How to Help</a>
                <a href="#emergency" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-amber-600 hover:bg-gray-50">Emergency Guide</a>
                <a href="#stories" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-amber-600 hover:bg-gray-50">Success Stories</a>
                <a href="#join" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-amber-600 hover:bg-amber-700">Join Now</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-gradient text-white py-20 md:py-32 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="md:flex items-center justify-between">
                <div class="md:w-1/2 mb-12 md:mb-0">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Be a Savior for Street Animals</h1>
                    <p class="text-xl md:text-2xl mb-8 opacity-90">Your compassion can change lives. Learn how to help animals in need and become their hero today.</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#how-to-help" class="bg-white hover:bg-gray-100 text-amber-600 font-bold py-3 px-8 rounded-full text-lg text-center transition duration-300 transform hover:scale-105">
                            Learn How
                        </a>
                        <a href="#join" class="bg-transparent hover:bg-white hover:text-amber-600 border-2 border-white text-white font-bold py-3 px-8 rounded-full text-lg text-center transition duration-300 transform hover:scale-105">
                            Join Our Network
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <img src="https://images.unsplash.com/photo-1551334787-21e6bd3ab135?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Rescued dog" class="rounded-xl shadow-2xl max-w-md w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="p-6">
                    <div class="text-4xl font-bold text-amber-600 mb-2">10M+</div>
                    <div class="text-gray-600">Street Animals in Need</div>
                </div>
                <div class="p-6">
                    <div class="text-4xl font-bold text-amber-600 mb-2">75%</div>
                    <div class="text-gray-600">Without Proper Care</div>
                </div>
                <div class="p-6">
                    <div class="text-4xl font-bold text-amber-600 mb-2">1.2M</div>
                    <div class="text-gray-600">Rescued Yearly</div>
                </div>
                <div class="p-6">
                    <div class="text-4xl font-bold text-amber-600 mb-2">YOU</div>
                    <div class="text-gray-600">Can Make a Difference</div>
                </div>
            </div>
        </div>
    </section>

    <!-- How to Help Section -->
    <section id="how-to-help" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">How You Can Be a Savior</h2>
                <p class="max-w-2xl mx-auto text-gray-600 text-lg">Simple actions that create massive impact for street animals</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white p-8 rounded-xl shadow-md savior-card transition duration-500">
                    <div class="bg-amber-100 w-20 h-20 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-utensils text-amber-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4">Provide Food & Water</h3>
                    <p class="text-gray-600 text-center mb-6">
                        Set up feeding stations in your neighborhood with clean water and nutritious food.
                    </p>
                    <div class="text-center">
                        <a href="#" class="text-amber-600 font-medium hover:underline">Learn proper feeding techniques →</a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-8 rounded-xl shadow-md savior-card transition duration-500">
                    <div class="bg-amber-100 w-20 h-20 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-first-aid text-amber-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4">Basic First Aid</h3>
                    <p class="text-gray-600 text-center mb-6">
                        Learn essential first aid to help injured animals before professional help arrives.
                    </p>
                    <div class="text-center">
                        <a href="#" class="text-amber-600 font-medium hover:underline">Download first aid guide →</a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-8 rounded-xl shadow-md savior-card transition duration-500">
                    <div class="bg-amber-100 w-20 h-20 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-home text-amber-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4">Temporary Shelter</h3>
                    <p class="text-gray-600 text-center mb-6">
                        Create simple shelters for extreme weather conditions using inexpensive materials.
                    </p>
                    <div class="text-center">
                        <a href="#" class="text-amber-600 font-medium hover:underline">View shelter designs →</a>
                    </div>
                </div>
            </div>

            <div class="mt-16 text-center">
                <a href="#" class="inline-block bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 px-8 rounded-full text-lg transition duration-300 transform hover:scale-105">
                    View Complete Savior Guide
                </a>
            </div>
        </div>
    </section>

    <!-- Step-by-Step Rescue Guide -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Your Step-by-Step Rescue Guide</h2>
                <p class="max-w-2xl mx-auto text-gray-600 text-lg">What to do when you find an animal in distress</p>
            </div>

            <div class="grid md:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="step-connector">
                    <div class="bg-amber-600 text-white w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold mb-4 mx-auto">1</div>
                    <h3 class="text-xl font-bold text-center mb-4">Assess Safely</h3>
                    <p class="text-gray-600 text-center">
                        Approach carefully. Check for injuries while keeping yourself safe from bites/scratches.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="step-connector">
                    <div class="bg-amber-600 text-white w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold mb-4 mx-auto">2</div>
                    <h3 class="text-xl font-bold text-center mb-4">Provide Comfort</h3>
                    <p class="text-gray-600 text-center">
                        Offer water and food if possible. Keep the animal warm and calm.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="step-connector">
                    <div class="bg-amber-600 text-white w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold mb-4 mx-auto">3</div>
                    <h3 class="text-xl font-bold text-center mb-4">Contact Help</h3>
                    <p class="text-gray-600 text-center">
                        Call local rescue organizations or veterinarians who help street animals.
                    </p>
                </div>

                <!-- Step 4 -->
                <div>
                    <div class="bg-amber-600 text-white w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold mb-4 mx-auto">4</div>
                    <h3 class="text-xl font-bold text-center mb-4">Transport Safely</h3>
                    <p class="text-gray-600 text-center">
                        If trained, move the animal to safety using proper techniques and equipment.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Emergency Guide -->
    <section id="emergency" class="py-20 bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:flex items-center">
                <div class="md:w-1/2 mb-12 md:mb-0 md:pr-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Emergency Rescue Guide</h2>
                    <p class="text-lg text-gray-300 mb-8">
                        When every second counts, follow these critical steps to save an animal's life. Print this guide and keep it handy.
                    </p>
                    <div class="grid gap-6">
                        <div class="emergency-card p-6 rounded-lg">
                            <div class="flex items-start">
                                <div class="bg-white text-red-600 rounded-full w-10 h-10 flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg mb-2">Severe Bleeding</h4>
                                    <p class="text-gray-200">Apply direct pressure with clean cloth. Elevate wound if possible. Get immediate veterinary help.</p>
                                </div>
                            </div>
                        </div>
                        <div class="emergency-card p-6 rounded-lg">
                            <div class="flex items-start">
                                <div class="bg-white text-red-600 rounded-full w-10 h-10 flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg mb-2">Hit by Vehicle</h4>
                                    <p class="text-gray-200">Don't move unless absolutely necessary. Support head/neck if moving. Cover with blanket to prevent shock.</p>
                                </div>
                            </div>
                        </div>
                        <div class="emergency-card p-6 rounded-lg">
                            <div class="flex items-start">
                                <div class="bg-white text-red-600 rounded-full w-10 h-10 flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg mb-2">Poisoning</h4>
                                    <p class="text-gray-200">Identify substance if possible. Don't induce vomiting unless instructed. Rush to vet with sample.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <div class="bg-gray-800 p-8 rounded-xl">
                        <h3 class="text-2xl font-bold mb-6">Emergency Contacts</h3>
                        <div class="space-y-6">
                            <div class="flex items-center">
                                <div class="bg-amber-600 text-white rounded-full w-12 h-12 flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold">24/7 Animal Rescue Hotline</h4>
                                    <p class="text-gray-300">+1 (800) 555-ANML (2665)</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-amber-600 text-white rounded-full w-12 h-12 flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold">Nearest Emergency Vet</h4>
                                    <p class="text-gray-300">123 Rescue Ave, Your City (Open 24 hours)</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-amber-600 text-white rounded-full w-12 h-12 flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold">Local Rescue Network</h4>
                                    <p class="text-gray-300">50+ volunteers ready to respond in your area</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8">
                            <button class="w-full bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 px-6 rounded-lg text-lg transition duration-300 flex items-center justify-center">
                                <i class="fas fa-download mr-2"></i> Download Complete Emergency Guide
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories -->
    <section id="stories" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Savior Success Stories</h2>
                <p class="max-w-2xl mx-auto text-gray-600 text-lg">Ordinary people doing extraordinary things for street animals</p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Story 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="md:flex">
                        <div class="md:w-1/3">
                            <img src="https://images.unsplash.com/photo-1583511655826-05700442b31b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Rescued dog" class="w-full h-full object-cover">
                        </div>
                        <div class="p-8 md:w-2/3">
                            <div class="flex items-center mb-4">
                                <div class="bg-amber-100 text-amber-600 rounded-full w-10 h-10 flex items-center justify-center mr-3">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <h4 class="font-bold text-lg">From Abandoned to Adored</h4>
                            </div>
                            <p class="text-gray-600 mb-4">
                                "I found Buddy shivering in a cardboard box during winter. After nursing him back to health, he became the most loyal companion. Now he helps me foster other abandoned dogs."
                            </p>
                            <div class="flex items-center">
                                <div class="bg-gray-300 rounded-full w-10 h-10 mr-3"></div>
                                <div>
                                    <p class="font-medium">Rahul Sharma</p>
                                    <p class="text-sm text-gray-500">Delhi, India | 12 rescues</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Story 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="md:flex">
                        <div class="md:w-1/3">
                            <img src="https://images.unsplash.com/photo-1544568100-847a948585b9?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Community feeding" class="w-full h-full object-cover">
                        </div>
                        <div class="p-8 md:w-2/3">
                            <div class="flex items-center mb-4">
                                <div class="bg-amber-100 text-amber-600 rounded-full w-10 h-10 flex items-center justify-center mr-3">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <h4 class="font-bold text-lg">Community Feeding Initiative</h4>
                            </div>
                            <p class="text-gray-600 mb-4">
                                "What started as feeding 3 street dogs in my lane grew into a community effort. Now 25 families take turns feeding over 50 animals daily. We've even set up rain shelters!"
                            </p>
                            <div class="flex items-center">
                                <div class="bg-gray-300 rounded-full w-10 h-10 mr-3"></div>
                                <div>
                                    <p class="font-medium">Priya Patel</p>
                                    <p class="text-sm text-gray-500">Mumbai, India | Community Leader</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="#" class="inline-flex items-center text-amber-600 font-medium hover:underline">
                    View more inspiring stories <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Join Network -->
    <section id="join" class="py-20 bg-amber-600 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Join Our Savior Network</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Connect with fellow animal lovers, get training, and access resources to help street animals in your area.
            </p>
            <div class="bg-white rounded-xl shadow-xl p-8 md:p-10 text-gray-800 max-w-2xl mx-auto">
                <h3 class="text-2xl font-bold mb-6">Become a Certified Street Animal Savior</h3>
                <form class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="first-name" class="block text-left text-gray-700 font-medium mb-2">First Name</label>
                            <input type="text" id="first-name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500">
                        </div>
                        <div>
                            <label for="last-name" class="block text-left text-gray-700 font-medium mb-2">Last Name</label>
                            <input type="text" id="last-name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500">
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-left text-gray-700 font-medium mb-2">Email</label>
                        <input type="email" id="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500">
                    </div>
                    <div>
                        <label for="location" class="block text-left text-gray-700 font-medium mb-2">Location</label>
                        <input type="text" id="location" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500">
                    </div>
                    <div>
                        <label for="commitment" class="block text-left text-gray-700 font-medium mb-2">How would you like to help?</label>
                        <select id="commitment" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500">
                            <option value="">Select an option</option>
                            <option value="feeding">Community Feeding</option>
                            <option value="rescue">Emergency Rescue</option>
                            <option value="fostering">Fostering Animals</option>
                            <option value="education">Community Education</option>
                            <option value="all">All of the Above</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-amber-600 hover:bg-amber-700 text-white font-bold py-4 px-6 rounded-lg text-lg transition duration-300">
                            Join the Savior Network
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16 px-4">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12">
            <div>
                <div class="flex items-center mb-4">
                    <i class="fas fa-paw text-amber-600 text-2xl mr-2"></i>
                    <span class="text-xl font-bold">StreetSaviors</span>
                </div>
                <p class="text-gray-400 mb-4">
                    Empowering communities to protect and care for street animals through education, resources, and collective action.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Home</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">About Us</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Resources</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Training Programs</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Donate</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-4">Resources</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Rescue Guides</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">First Aid Manual</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Shelter Designs</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Feeding Tips</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Vet Partners</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-4">Contact</h4>
                <ul class="space-y-2 text-gray-400">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt mt-1 mr-3 text-amber-600"></i>
                        <span>123 Animal Rescue Plaza, City, Country</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-phone-alt mt-1 mr-3 text-amber-600"></i>
                        <span>+1 (800) SAV-ANML</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-envelope mt-1 mr-3 text-amber-600"></i>
                        <span>help@streetsaviors.org</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-clock mt-1 mr-3 text-amber-600"></i>
                        <span>24/7 Emergency Hotline</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="max-w-7xl mx-auto pt-12 mt-12 border-t border-gray-800 text-center text-gray-400">
            <p>© 2023 StreetSaviors. All rights reserved. | <a href="#" class="hover:text-white transition">Privacy Policy</a> | <a href="#" class="hover:text-white transition">Terms of Service</a></p>
        </div>
    </footer>

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
    </script>
</body>
</html>