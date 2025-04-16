<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Street Animal Care - Volunteer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .hero-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1551334787-21e6bd3ab135?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
        }
        .volunteer-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-md">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                </svg>
                <span class="ml-2 text-xl font-bold text-gray-800">StreetPaws</span>
            </div>
            <div class="hidden md:flex space-x-8">
                <a href="#" class="text-gray-800 hover:text-amber-600 font-medium">Home</a>
                <a href="#" class="text-gray-800 hover:text-amber-600 font-medium">About</a>
                <a href="#" class="text-gray-800 hover:text-amber-600 font-medium">Programs</a>
                <a href="#" class="text-gray-800 hover:text-amber-600 font-medium">Volunteer</a>
                <a href="#" class="text-gray-800 hover:text-amber-600 font-medium">Contact</a>
            </div>
            <button class="md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-bg min-h-[70vh] flex flex-col justify-center items-center text-white text-center px-4 py-20">
        <h1 class="text-4xl md:text-6xl font-bold mb-6">Be Their Voice, Be Their Savior</h1>
        <p class="max-w-2xl mx-auto text-lg md:text-xl mb-8">
            Join our mission to protect and care for street animals. Your time and compassion can transform lives - both theirs and yours.
        </p>
        <div class="flex flex-col sm:flex-row gap-4">
            <button class="bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 px-8 rounded-full text-lg transition duration-300 transform hover:scale-105">
                Volunteer Now
            </button>
            <button class="bg-white hover:bg-gray-100 text-amber-600 font-bold py-3 px-8 rounded-full text-lg transition duration-300 transform hover:scale-105">
                Learn How to Help
            </button>
        </div>
    </section>

    <!-- Why Volunteer Section -->
    <section class="py-16 px-4 max-w-6xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Why Volunteer for Street Animals?</h2>
            <p class="max-w-2xl mx-auto text-gray-600">
                Volunteering isn't just about helping animals - it's about transforming yourself and your community.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-xl shadow-md volunteer-card transition duration-300">
                <div class="bg-amber-100 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-center mb-4">Save Lives Directly</h3>
                <p class="text-gray-600 text-center">
                    Your actions provide food, shelter, and medical care to animals who have no one else.
                </p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-md volunteer-card transition duration-300">
                <div class="bg-amber-100 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-center mb-4">Build Community</h3>
                <p class="text-gray-600 text-center">
                    Connect with like-minded people who share your compassion for animals.
                </p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-md volunteer-card transition duration-300">
                <div class="bg-amber-100 w-16 h-16 rounded-full flex items-center justify-center mb-6 mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-center mb-4">Personal Growth</h3>
                <p class="text-gray-600 text-center">
                    Experience the joy and fulfillment that comes from selfless service.
                </p>
            </div>
        </div>
    </section>

    <!-- How to Help Section -->
    <section class="py-16 px-4 bg-amber-50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">How You Can Help</h2>
                <p class="max-w-2xl mx-auto text-gray-600">
                    Even small actions can make a big difference in an animal's life.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <h3 class="text-2xl font-bold text-amber-600 mb-4">Volunteer Opportunities</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500 mt-1 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Animal feeding and care at our shelter</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500 mt-1 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Rescue operations and emergency response</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500 mt-1 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Adoption events and community outreach</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500 mt-1 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Veterinary assistance (training provided)</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500 mt-1 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Administrative and fundraising support</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-md">
                    <h3 class="text-2xl font-bold text-amber-600 mb-4">Be a Savior in Your Community</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500 mt-1 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Keep water bowls outside your home</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500 mt-1 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Report injured animals to local shelters</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500 mt-1 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Support spay/neuter initiatives</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500 mt-1 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Foster animals in need</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500 mt-1 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Educate others about animal welfare</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Volunteer Form -->
    <section class="py-16 px-4 max-w-4xl mx-auto">
        <div class="bg-white p-8 md:p-12 rounded-xl shadow-lg">
            <h2 class="text-3xl font-bold text-center mb-2">Join Our Volunteer Team</h2>
            <p class="text-gray-600 text-center mb-8">Fill out the form below and we'll contact you about opportunities</p>
            
            <form class="grid md:grid-cols-2 gap-6">
                <div>
                    <label for="name" class="block text-gray-700 font-medium mb-2">Full Name</label>
                    <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500">
                </div>
                <div>
                    <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                    <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500">
                </div>
                <div>
                    <label for="phone" class="block text-gray-700 font-medium mb-2">Phone</label>
                    <input type="tel" id="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500">
                </div>
                <div>
                    <label for="location" class="block text-gray-700 font-medium mb-2">Location</label>
                    <input type="text" id="location" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500">
                </div>
                <div class="md:col-span-2">
                    <label for="interests" class="block text-gray-700 font-medium mb-2">Areas of Interest</label>
                    <select id="interests" multiple class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 h-auto">
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
                    <label for="message" class="block text-gray-700 font-medium mb-2">Why do you want to volunteer with us?</label>
                    <textarea id="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500"></textarea>
                </div>
                <div class="md:col-span-2">
                    <button type="submit" class="w-full bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 px-6 rounded-lg text-lg transition duration-300">
                        Submit Application
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 px-4 bg-gray-100">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Volunteer Stories</h2>
                <p class="max-w-2xl mx-auto text-gray-600">
                    Hear from people who've transformed lives - including their own
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 bg-gray-300 rounded-full mr-4"></div>
                        <div>
                            <h4 class="font-bold">Priya Sharma</h4>
                            <p class="text-sm text-gray-500">Volunteer since 2019</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "Volunteering with street animals helped me overcome depression. The unconditional love I receive from these animals is more therapeutic than anything else I've tried."
                    </p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 bg-gray-300 rounded-full mr-4"></div>
                        <div>
                            <h4 class="font-bold">Rahul Mehta</h4>
                            <p class="text-sm text-gray-500">Rescue Team Lead</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "I started as a weekend volunteer and now lead rescue operations. The skills I've developed here have helped me in my professional life too - teamwork, crisis management, and compassion."
                    </p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 bg-gray-300 rounded-full mr-4"></div>
                        <div>
                            <h4 class="font-bold">Ananya Patel</h4>
                            <p class="text-sm text-gray-500">College Student</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "I never thought I could make a difference until I started feeding street dogs in my area. Now I've mobilized my whole community to care for our local animals."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 px-4 bg-amber-600 text-white">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Make a Difference?</h2>
            <p class="text-xl mb-8">
                Whether you can give an hour a week or make this your life's passion, we have a place for you.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <button class="bg-white hover:bg-gray-100 text-amber-600 font-bold py-3 px-8 rounded-full text-lg transition duration-300">
                    Volunteer Now
                </button>
                <button class="bg-transparent hover:bg-amber-700 border-2 border-white text-white font-bold py-3 px-8 rounded-full text-lg transition duration-300">
                    Contact Us
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12 px-4">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-xl font-bold mb-4">StreetPaws</h3>
                <p class="text-gray-400">
                    Dedicated to protecting and improving the lives of street animals through community action.
                </p>
            </div>
            <div>
                <h4 class="font-bold mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Home</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">About Us</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Programs</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Volunteer</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition">Donate</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-4">Contact</h4>
                <ul class="space-y-2 text-gray-400">
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>123 Animal Care Ave, City</span>
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span>+1 (555) 123-4567</span>
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span>help@streetpaws.org</span>
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-4">Follow Us</h4>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="max-w-6xl mx-auto pt-8 mt-8 border-t border-gray-700 text-center text-gray-400">
            <p>© 2023 StreetPaws. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>