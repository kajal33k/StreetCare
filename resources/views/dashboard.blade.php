<x-layouts.app :title="__('Dashboard')">
   
   
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            primary: {
                                50: '#f0f9ff',
                                100: '#e0f2fe',
                                200: '#bae6fd',
                                300: '#7dd3fc',
                                400: '#38bdf8',
                                500: '#0ea5e9',
                                600: '#0284c7',
                                700: '#0369a1',
                                800: '#075985',
                                900: '#0c4a6e',
                            }
                        }
                    }
                }
            }
        </script>
   
        <!-- Main content -->
        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- Mobile top header -->
            <div class="md:hidden flex items-center justify-between px-4 py-3 bg-black border-b border-gray-200">
                <div class="flex items-center">
                    <i class="fas fa-paw text-primary-600 text-xl mr-2"></i>
                    <span class="text-lg font-semibold text-gray-900">PawCare</span>
                </div>
                <button class="p-2 rounded-md text-gray-500 hover:text-gray-600 hover:bg-gray-100">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
    
            <!-- Main header -->
            <header class="bg-black shadow-sm">
                <div class="px-4 py-4 sm:px-6 lg:px-8 flex justify-between items-center">
                    <h1 class="text-lg font-semibold leading-6 text-gray-900">Animal Rescue Dashboard</h1>
                    <div class="flex items-center space-x-4">
                        <button class="p-2 rounded-full text-gray-400 hover:text-gray-500 hover:bg-gray-100">
                            <i class="fas fa-bell"></i>
                            <span class="sr-only">Notifications</span>
                        </button>
                        <button class="p-2 rounded-full text-gray-400 hover:text-gray-500 hover:bg-gray-100">
                            <i class="fas fa-envelope"></i>
                            <span class="sr-only">Messages</span>
                        </button>
                        <div class="relative md:hidden">
                            <button class="p-2 rounded-full text-gray-400 hover:text-gray-500 hover:bg-gray-100">
                                <i class="fas fa-ellipsis-v"></i>
                                <span class="sr-only">More</span>
                            </button>
                        </div>
                    </div>
                </div>
            </header>
    
            <!-- Main content area -->
            <main class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8 bg-black">
                <!-- Stats cards -->
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4 mb-8">
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-primary-500 rounded-md p-3">
                                    <i class="fas fa-dog text-white"></i>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dl>
                                        <dt class="text-sm font-medium text-gray-500 truncate">Animals Rescued</dt>
                                        <dd class="flex items-baseline">
                                            <div class="text-2xl font-semibold text-gray-900">42</div>
                                            <div class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                                                <i class="fas fa-arrow-up text-xs"></i>
                                                <span class="sr-only">Increased by</span>
                                                12.4%
                                            </div>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-green-500 rounded-md p-3">
                                    <i class="fas fa-home text-white"></i>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dl>
                                        <dt class="text-sm font-medium text-gray-500 truncate">Adoptions Completed</dt>
                                        <dd class="flex items-baseline">
                                            <div class="text-2xl font-semibold text-gray-900">28</div>
                                            <div class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                                                <i class="fas fa-arrow-up text-xs"></i>
                                                <span class="sr-only">Increased by</span>
                                                8.6%
                                            </div>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-yellow-500 rounded-md p-3">
                                    <i class="fas fa-clinic-medical text-white"></i>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dl>
                                        <dt class="text-sm font-medium text-gray-500 truncate">Under Treatment</dt>
                                        <dd class="flex items-baseline">
                                            <div class="text-2xl font-semibold text-gray-900">15</div>
                                            <div class="ml-2 flex items-baseline text-sm font-semibold text-red-600">
                                                <i class="fas fa-arrow-down text-xs"></i>
                                                <span class="sr-only">Decreased by</span>
                                                3.2%
                                            </div>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 bg-purple-500 rounded-md p-3">
                                    <i class="fas fa-hand-holding-heart text-white"></i>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dl>
                                        <dt class="text-sm font-medium text-gray-500 truncate">Active Volunteers</dt>
                                        <dd class="flex items-baseline">
                                            <div class="text-2xl font-semibold text-gray-900">23</div>
                                            <div class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                                                <i class="fas fa-arrow-up text-xs"></i>
                                                <span class="sr-only">Increased by</span>
                                                5.1%
                                            </div>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Charts and main content -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
                    <!-- Rescue activity chart -->
                    <div class="bg-white shadow rounded-lg lg:col-span-2">
                        <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Monthly Rescue Activity</h3>
                        </div>
                        <div class="px-4 py-5 sm:p-6">
                            <div class="h-80">
                                <!-- Chart placeholder - in a real app you would use Chart.js or similar -->
                                <div
                                    class="flex items-center justify-center h-full bg-gray-50 rounded-md border border-gray-200 border-dashed">
                                    <p class="text-gray-500">Monthly rescue statistics chart would appear here</p>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Recent activity -->
                    <div class="bg-white shadow rounded-lg">
                        <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Recent Activity</h3>
                        </div>
                        <div class="px-4 py-5 sm:p-6">
                            <ul class="divide-y divide-gray-200">
                                <li class="py-4">
                                    <div class="flex space-x-3">
                                        <div class="flex-shrink-0 h-6 w-6 rounded-full bg-green-100 flex items-center justify-center">
                                            <i class="fas fa-cat text-green-600 text-xs"></i>
                                        </div>
                                        <div class="flex-1 space-y-1">
                                            <div class="flex items-center justify-between">
                                                <h3 class="text-sm font-medium">New cat rescued</h3>
                                                <p class="text-sm text-gray-500">2h ago</p>
                                            </div>
                                            <p class="text-sm text-gray-500">Tabby found in Downtown area</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-4">
                                    <div class="flex space-x-3">
                                        <div class="flex-shrink-0 h-6 w-6 rounded-full bg-blue-100 flex items-center justify-center">
                                            <i class="fas fa-home text-blue-600 text-xs"></i>
                                        </div>
                                        <div class="flex-1 space-y-1">
                                            <div class="flex items-center justify-between">
                                                <h3 class="text-sm font-medium">Adoption completed</h3>
                                                <p class="text-sm text-gray-500">5h ago</p>
                                            </div>
                                            <p class="text-sm text-gray-500">Max found a forever home</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-4">
                                    <div class="flex space-x-3">
                                        <div class="flex-shrink-0 h-6 w-6 rounded-full bg-yellow-100 flex items-center justify-center">
                                            <i class="fas fa-syringe text-yellow-600 text-xs"></i>
                                        </div>
                                        <div class="flex-1 space-y-1">
                                            <div class="flex items-center justify-between">
                                                <h3 class="text-sm font-medium">Vaccination drive</h3>
                                                <p class="text-sm text-gray-500">1d ago</p>
                                            </div>
                                            <p class="text-sm text-gray-500">12 street dogs vaccinated</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-4">
                                    <div class="flex space-x-3">
                                        <div class="flex-shrink-0 h-6 w-6 rounded-full bg-purple-100 flex items-center justify-center">
                                            <i class="fas fa-user-plus text-purple-600 text-xs"></i>
                                        </div>
                                        <div class="flex-1 space-y-1">
                                            <div class="flex items-center justify-between">
                                                <h3 class="text-sm font-medium">New volunteer</h3>
                                                <p class="text-sm text-gray-500">2d ago</p>
                                            </div>
                                            <p class="text-sm text-gray-500">Sarah joined the rescue team</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="mt-6">
                                <a href="#"
                                    class="w-full flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                    View all
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Animals table -->
                <div class="bg-white shadow rounded-lg">
                    <div class="px-4 py-5 sm:px-6 border-b border-gray-200 flex justify-between items-center">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Current Animals in Care</h3>
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            <i class="fas fa-plus mr-2"></i>
                            Add Animal
                        </button>
                    </div>
                    <div class="px-4 py-5 sm:p-6">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Animal</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Caretakers</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Status</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Recovery</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Rescued Date</th>
                                        <th scope="col" class="relative px-6 py-3"><span
                                                class="sr-only">Actions</span></th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div
                                                    class="flex-shrink-0 h-10 w-10 bg-orange-100 rounded-md flex items-center justify-center">
                                                    <i class="fas fa-dog text-orange-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Max</div>
                                                    <div class="text-sm text-gray-500">German Shepherd, 3 years</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex -space-x-2">
                                                <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                                                    src="/api/placeholder/32/32"
                                                    alt="Caretaker">
                                                <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                                                    src="/api/placeholder/32/32"
                                                    alt="Caretaker">
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Ready for Adoption</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                                <div class="bg-primary-600 h-2.5 rounded-full" style="width: 100%">
                                                </div>
                                            </div>
                                            <span class="text-sm text-gray-500 mt-1">100%</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mar 15, 2025</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="#"
                                                class="text-primary-600 hover:text-primary-900 mr-3">Edit</a>
                                            <a href="#" class="text-gray-600 hover:text-gray-900">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div
                                                    class="flex-shrink-0 h-10 w-10 bg-blue-100 rounded-md flex items-center justify-center">
                                                    <i class="fas fa-cat text-blue-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Luna</div>
                                                    <div class="text-sm text-gray-500">Tabby, 1 year</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex -space-x-2">
                                                <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                                                    src="/api/placeholder/32/32"
                                                    alt="Caretaker">
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Under Treatment</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                                <div class="bg-primary-600 h-2.5 rounded-full" style="width: 45%">
                                                </div>
                                            </div>
                                            <span class="text-sm text-gray-500 mt-1">45%</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Apr 1, 2025</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="#"
                                                class="text-primary-600 hover:text-primary-900 mr-3">Edit</a>
                                            <a href="#" class="text-gray-600 hover:text-gray-900">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div
                                                    class="flex-shrink-0 h-10 w-10 bg-green-100 rounded-md flex items-center justify-center">
                                                    <i class="fas fa-dog text-green-600"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Buddy</div>
                                                    <div class="text-sm text-gray-500">Labrador Mix, 5 years</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex -space-x-2">
                                                <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                                                    src="/api/placeholder/32/32"
                                                    alt="Caretaker">
                                                <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                                                    src="/api/placeholder/32/32"
                                                    alt="Caretaker">
                                                <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                                                    src="/api/placeholder/32/32"
                                                    alt="Caretaker">
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Ready for Adoption</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                                <div class="bg-primary-600 h-2.5 rounded-full" style="width: 88%">
                                                </div>
                                            </div>
                                            <span class="text-sm text-gray-500 mt-1">88%</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mar 22, 2025</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="#"
                                                class="text-primary-600 hover:text-primary-900 mr-3">Edit</a>
                                            <a href="#" class="text-gray-600 hover:text-gray-900">View</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
  
</x-layouts.app>
