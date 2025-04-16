<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Street Care Informer | Resources for Community Animal Welfare</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
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
</head>
<body class="font-roboto bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i class="fas fa-hands-helping text-accent text-2xl mr-2"></i>
                        <span class="text-xl font-bold text-dark">Street Care Informer</span>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="#" class="border-primary text-dark inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Home</a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Resources</a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Report</a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Volunteer</a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">News</a>
                    </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    <button class="bg-primary hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300">
                        <i class="fas fa-bell mr-2"></i>Alerts
                    </button>
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
                <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl text-shadow font-poppins">
                    Community Resources for Street Animals
                </h1>
                <p class="mt-6 max-w-3xl mx-auto text-xl text-gray-100 text-shadow">
                    Your comprehensive guide to helping street animals in need. Find shelters, report cases, access emergency care, and join local initiatives.
                </p>
                <div class="mt-10">
                    <div class="relative max-w-xl mx-auto">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                        <input type="text" class="block w-full pl-10 pr-3 py-4 border border-transparent rounded-md leading-5 bg-white bg-opacity-20 placeholder-gray-200 focus:outline-none focus:bg-white focus:bg-opacity-30 focus:ring-2 focus:ring-white focus:border-transparent transition duration-150 ease-in-out" placeholder="Search for resources in your area...">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Emergency Alert -->
    <div class="bg-accent text-white">
        <div class="max-w-7xl mx-auto py-3 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between flex-wrap">
                <div class="w-0 flex-1 flex items-center">
                    <span class="flex p-2 rounded-lg bg-yellow-700">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                    <p class="ml-3 font-medium truncate">
                        <span class="md:hidden">Heat wave alert for street animals!</span>
                        <span class="hidden md:inline">Emergency Alert: Extreme heat wave expected this weekend - Learn how to help street animals stay cool</span>
                    </p>
                </div>
                <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
                    <button type="button" class="-mr-1 flex p-2 rounded-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2 transition duration-150 ease-in-out">
                        <span class="sr-only">Dismiss</span>
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-dark text-center mb-8">How Can You Help Today?</h2>
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <a href="#" class="card-hover bg-white rounded-lg shadow-md overflow-hidden border border-gray-100">
                    <div class="px-4 py-5 sm:p-6 text-center">
                        <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-blue-100 text-primary">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-lg font-medium text-dark">Report an Animal</h3>
                            <p class="mt-2 text-sm text-gray-500">
                                Found an injured or distressed street animal? Alert local rescuers.
                            </p>
                        </div>
                    </div>
                </a>

                <a href="#" class="card-hover bg-white rounded-lg shadow-md overflow-hidden border border-gray-100">
                    <div class="px-4 py-5 sm:p-6 text-center">
                        <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100 text-secondary">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-lg font-medium text-dark">Find Shelters</h3>
                            <p class="mt-2 text-sm text-gray-500">
                                Locate nearby animal shelters and emergency care facilities.
                            </p>
                        </div>
                    </div>
                </a>

                <a href="#" class="card-hover bg-white rounded-lg shadow-md overflow-hidden border border-gray-100">
                    <div class="px-4 py-5 sm:p-6 text-center">
                        <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-yellow-100 text-accent">
                            <i class="fas fa-hand-holding-water"></i>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-lg font-medium text-dark">Provide Care</h3>
                            <p class="mt-2 text-sm text-gray-500">
                                Learn how to safely provide food, water, and temporary shelter.
                            </p>
                        </div>
                    </div>
                </a>

                <a href="#" class="card-hover bg-white rounded-lg shadow-md overflow-hidden border border-gray-100">
                    <div class="px-4 py-5 sm:p-6 text-center">
                        <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-purple-100 text-purple-600">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="mt-3">
                            <h3 class="text-lg font-medium text-dark">Join Community</h3>
                            <p class="mt-2 text-sm text-gray-500">
                                Connect with local street animal caregivers and volunteers.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Resource Guides -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-dark">Essential Resource Guides</h2>
                <p class="mt-4 max-w-2xl text-xl text-gray-600 mx-auto">
                    Practical information for helping street animals in different situations
                </p>
            </div>

            <div class="mt-12 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Guide 1 -->
                <div class="card-hover bg-white overflow-hidden shadow rounded-lg">
                    <div class="h-48 overflow-hidden">
                        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1588943211346-0908a1fb0b01?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="First aid for animals">
                    </div>
                    <div class="px-4 py-5 sm:p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-blue-100 rounded-md p-2">
                                <i class="fas fa-first-aid text-primary text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-dark">Emergency First Aid</h3>
                                <p class="text-sm text-gray-500">Updated: June 2023</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <p class="text-gray-600">
                                Step-by-step guide for providing emergency care to injured street animals before professional help arrives.
                            </p>
                        </div>
                        <div class="mt-6 flex justify-between items-center">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                <i class="fas fa-check-circle mr-1"></i> Verified
                            </span>
                            <a href="#" class="text-primary hover:text-blue-700 text-sm font-medium">
                                Read Guide <i class="fas fa-chevron-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Guide 2 -->
                <div class="card-hover bg-white overflow-hidden shadow rounded-lg">
                    <div class="h-48 overflow-hidden">
                        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1554696006-9a5d33df9f04?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Animal feeding">
                    </div>
                    <div class="px-4 py-5 sm:p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-green-100 rounded-md p-2">
                                <i class="fas fa-utensils text-secondary text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-dark">Safe Feeding Practices</h3>
                                <p class="text-sm text-gray-500">Updated: May 2023</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <p class="text-gray-600">
                                What to feed (and what to avoid) when caring for street animals. Includes seasonal recommendations.
                            </p>
                        </div>
                        <div class="mt-6 flex justify-between items-center">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                <i class="fas fa-check-circle mr-1"></i> Verified
                            </span>
                            <a href="#" class="text-primary hover:text-blue-700 text-sm font-medium">
                                Read Guide <i class="fas fa-chevron-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Guide 3 -->
                <div class="card-hover bg-white overflow-hidden shadow rounded-lg">
                    <div class="h-48 overflow-hidden">
                        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1560743641-3914f2c45636?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Community care">
                    </div>
                    <div class="px-4 py-5 sm:p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-yellow-100 rounded-md p-2">
                                <i class="fas fa-snowflake text-accent text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-dark">Extreme Weather Care</h3>
                                <p class="text-sm text-gray-500">Updated: April 2023</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <p class="text-gray-600">
                                Protecting street animals during heat waves, monsoons, and winter. DIY shelter ideas and precautions.
                            </p>
                        </div>
                        <div class="mt-6 flex justify-between items-center">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                <i class="fas fa-check-circle mr-1"></i> Verified
                            </span>
                            <a href="#" class="text-primary hover:text-blue-700 text-sm font-medium">
                                Read Guide <i class="fas fa-chevron-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-primary hover:bg-blue-700 transition duration-300">
                    View All Resources
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Local Initiatives -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-primary font-semibold tracking-wide uppercase">Community Spotlight</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-dark sm:text-4xl font-poppins">
                    Local Street Care Initiatives
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Programs making a difference in your area
                </p>
            </div>

            <div class="mt-12">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                    <!-- Initiative 1 -->
                    <div class="card-hover bg-white rounded-lg shadow-md overflow-hidden border border-gray-100">
                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="h-12 w-12 rounded-full" src="https://randomuser.me/api/portraits/women/44.jpg" alt="Project leader">
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-medium text-dark">Community Feeders Network</h4>
                                    <p class="text-sm text-gray-500">Central District</p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <p class="text-gray-600">
                                    Volunteer-run program providing daily meals to over 200 street dogs across 15 locations.
                                </p>
                            </div>
                            <div class="mt-6">
                                <div class="flex items-center text-sm text-gray-500">
                                    <i class="fas fa-map-marker-alt mr-1.5"></i>
                                    <span>5 km from you</span>
                                </div>
                                <div class="mt-2 flex items-center text-sm text-gray-500">
                                    <i class="fas fa-users mr-1.5"></i>
                                    <span>32 volunteers</span>
                                </div>
                            </div>
                            <div class="mt-6">
                                <button class="w-full bg-gray-50 hover:bg-gray-100 text-primary py-2 px-4 rounded-md text-sm font-medium transition duration-300">
                                    Join Initiative
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Initiative 2 -->
                    <div class="card-hover bg-white rounded-lg shadow-md overflow-hidden border border-gray-100">
                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="h-12 w-12 rounded-full" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Project leader">
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-medium text-dark">TNR Collective</h4>
                                    <p class="text-sm text-gray-500">Westside Area</p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <p class="text-gray-600">
                                    Trap-Neuter-Return program that has sterilized over 500 community cats in the past year.
                                </p>
                            </div>
                            <div class="mt-6">
                                <div class="flex items-center text-sm text-gray-500">
                                    <i class="fas fa-map-marker-alt mr-1.5"></i>
                                    <span>8 km from you</span>
                                </div>
                                <div class="mt-2 flex items-center text-sm text-gray-500">
                                    <i class="fas fa-users mr-1.5"></i>
                                    <span>18 volunteers</span>
                                </div>
                            </div>
                            <div class="mt-6">
                                <button class="w-full bg-gray-50 hover:bg-gray-100 text-primary py-2 px-4 rounded-md text-sm font-medium transition duration-300">
                                    Join Initiative
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Initiative 3 -->
                    <div class="card-hover bg-white rounded-lg shadow-md overflow-hidden border border-gray-100">
                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="h-12 w-12 rounded-full" src="https://randomuser.me/api/portraits/women/68.jpg" alt="Project leader">
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-medium text-dark">Winter Shelter Project</h4>
                                    <p class="text-sm text-gray-500">Citywide</p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <p class="text-gray-600">
                                    Building and distributing insulated shelters for street animals ahead of winter season.
                                </p>
                            </div>
                            <div class="mt-6">
                                <div class="flex items-center text-sm text-gray-500">
                                    <i class="fas fa-map-marker-alt mr-1.5"></i>
                                    <span>Multiple locations</span>
                                </div>
                                <div class="mt-2 flex items-center text-sm text-gray-500">
                                    <i class="fas fa-users mr-1.5"></i>
                                    <span>45 volunteers</span>
                                </div>
                            </div>
                            <div class="mt-6">
                                <button class="w-full bg-gray-50 hover:bg-gray-100 text-primary py-2 px-4 rounded-md text-sm font-medium transition duration-300">
                                    Join Initiative
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- News & Updates -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-primary font-semibold tracking-wide uppercase">News & Alerts</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-dark sm:text-4xl font-poppins">
                    Latest Updates
                </p>
            </div>

            <div class="mt-12 grid grid-cols-1 gap-8 md:grid-cols-3">
                <!-- News 1 -->
                <div class="card-hover bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-48 overflow-hidden">
                        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1544568100-847a948585b9?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="News image">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                Alert
                            </span>
                            <span class="ml-2 text-sm text-gray-500">2 hours ago</span>
                        </div>
                        <div class="mt-2">
                            <h3 class="text-lg font-medium text-dark">Heat Wave Advisory</h3>
                            <p class="mt-2 text-gray-600">
                                Extreme temperatures expected this weekend. Learn how to create cooling stations for street animals.
                            </p>
                        </div>
                        <div class="mt-4">
                            <a href="#" class="text-sm font-medium text-primary hover:text-blue-700">
                                Read more <i class="fas fa-chevron-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- News 2 -->
                <div class="card-hover bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-48 overflow-hidden">
                        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1450778869180-41d0601e046e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="News image">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Event
                            </span>
                            <span class="ml-2 text-sm text-gray-500">1 day ago</span>
                        </div>
                        <div class="mt-2">
                            <h3 class="text-lg font-medium text-dark">Volunteer Training Day</h3>
                            <p class="mt-2 text-gray-600">
                                Free workshop on basic animal first aid and rescue techniques this Saturday at Central Park.
                            </p>
                        </div>
                        <div class="mt-4">
                            <a href="#" class="text-sm font-medium text-primary hover:text-blue-700">
                                Read more <i class="fas fa-chevron-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- News 3 -->
                <div class="card-hover bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-48 overflow-hidden">
                        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="News image">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                Success
                            </span>
                            <span class="ml-2 text-sm text-gray-500">3 days ago</span>
                        </div>
                        <div class="mt-2">
                            <h3 class="text-lg font-medium text-dark">1000th Rescue Milestone</h3>
                            <p class="mt-2 text-gray-600">
                                Local shelter celebrates landmark achievement in street animal rescues and rehabilitations.
                            </p>
                        </div>
                        <div class="mt-4">
                            <a href="#" class="text-sm font-medium text-primary hover:text-blue-700">
                                Read more <i class="fas fa-chevron-right ml-1"></i>
                            </a>
                        </div>
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
                    <h2 class="text-2xl font-bold tracking-tight sm:text-3xl font-poppins">
                        Stay Informed About Street Animals
                    </h2>
                    <p class="mt-3 max-w-3xl text-lg text-blue-100">
                        Subscribe to our newsletter for alerts, resources, and community updates.
                    </p>
                </div>
                <div class="mt-8 flex md:mt-0 md:flex-shrink-0">
                    <div class="inline-flex rounded-md shadow w-full">
                        <div class="relative flex-grow">
                            <input type="email" class="block w-full pl-4 pr-32 py-3 border border-transparent text-base rounded-md text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-white focus:border-transparent" placeholder="Enter your email">
                            <div class="absolute inset-y-0 right-0 flex items-center">
                                <button class="bg-secondary hover:bg-green-700 text-white px-4 py-2 rounded-r-md text-sm font-medium transition duration-300">
                                    Subscribe
                                </button>
                            </div>
                        </div>
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
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">About</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Our Mission</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Team</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Partners</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Impact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Resources</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Guides</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Shelter Map</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Emergency Contacts</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Veterinary Help</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Get Involved</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Volunteer</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Donate</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Report Cases</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Community</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Connect</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Contact</a></li>
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
                            <i class="fab fa-whatsapp text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-12 border-t border-gray-700 pt-8 flex flex-col md:flex-row justify-between">
                <p class="text-base text-gray-400">
                    &copy; 2023 Street Care Informer. All rights reserved.
                </p>
                <div class="mt-4 md:mt-0 flex space-x-6">
                    <a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Privacy</a>
                    <a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Terms</a>
                    <a href="#" class="text-base text-gray-400 hover:text-white transition duration-300">Accessibility</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>