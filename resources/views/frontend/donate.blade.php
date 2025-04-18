@extends('layout.main')
@section('content')
    <!-- Hero Section -->
    <div class="relative bg-[#44223C] overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-12 bg-[#44223C] sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <div class="pt-10 sm:pt-16 lg:pt-8 lg:pb-14">
                    <div class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                        <div class="sm:text-center lg:text-left">
                            <h1 class="text-4xl tracking-tight font-bold text-[#FDF6EC] sm:text-5xl md:text-6xl">
                                <span class="block">Help Street Animals</span>
                                <span class="block text-[#D8A7B1]">Today</span>
                            </h1>
                            <p class="mt-4 text-base text-[#EADDE1] sm:mt-6 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-6 md:text-xl lg:mx-0">
                                Your kindness gives them food, care, and hope. Join the journey to protect and nurture street animals — every small act matters.
                            </p>
                            <div class="mt-6 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                                <div class="rounded-md shadow">
                                    <a href="#donate-now" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-full text-[#44223C] bg-[#FDF6EC] hover:bg-[#e6dbd3] transition md:py-4 md:text-lg md:px-10">
                                        Donate Now
                                    </a>
                                </div>
                                <div class="mt-3 sm:mt-0 sm:ml-3">
                                    <a href="#learn-more" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-full text-white bg-[#D8A7B1] hover:bg-[#c78b9e] transition md:py-4 md:text-lg md:px-10">
                                        Learn More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Image Section -->
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-64 w-full object-cover sm:h-80 md:h-96 lg:w-full lg:h-full grayscale-[10%] brightness-[95%] saturate-[90%] rounded-bl-3xl shadow-lg"
                src="https://images.unsplash.com/photo-1453227588063-bb302b62f50b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                alt="Street animals">
        </div>
    </div>
    

    <!-- Impact Section -->
    <div class="py-12 bg-white" id="learn-more">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-primary font-semibold tracking-wide uppercase">Our Impact</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Together We Can Make a Difference
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    With your support, we've been able to help thousands of street animals.
                </p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white">
                            <i class="fas fa-utensils text-xl"></i>
                        </div>
                        <div class="mt-5">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Meals Provided</h3>
                            <p class="mt-2 text-base text-gray-500">
                                <span class="text-3xl font-bold text-secondary">25,000+</span><br>
                                nutritious meals served to street animals this year
                            </p>
                        </div>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white">
                            <i class="fas fa-stethoscope text-xl"></i>
                        </div>
                        <div class="mt-5">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Medical Treatments</h3>
                            <p class="mt-2 text-base text-gray-500">
                                <span class="text-3xl font-bold text-secondary">3,200+</span><br>
                                animals received medical care and vaccinations
                            </p>
                        </div>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white">
                            <i class="fas fa-home text-xl"></i>
                        </div>
                        <div class="mt-5">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Animals Sheltered</h3>
                            <p class="mt-2 text-base text-gray-500">
                                <span class="text-3xl font-bold text-secondary">850+</span><br>
                                animals found temporary or permanent homes
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Donation Form -->
    <div class="py-12 bg-gray-50" id="donate-now">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center mb-12">
                <h2 class="text-base text-primary font-semibold tracking-wide uppercase">Make a Donation</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Help Us Help Them
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Your generous gift will provide care for animals in need.
                </p>
            </div>

            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Donation Information</h3>
                            <p class="mt-1 text-sm text-gray-600">
                                All donations are tax-deductible. We'll send you a receipt for your records.
                            </p>
                            <div class="mt-6 bg-white p-6 rounded-lg shadow-sm">
                                <h4 class="text-md font-medium text-gray-900">Where your money goes</h4>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0 h-5 w-5 text-secondary">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                        <p class="ml-3 text-sm text-gray-700">$10 feeds a dog for a week</p>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0 h-5 w-5 text-secondary">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                        <p class="ml-3 text-sm text-gray-700">$25 covers basic vaccinations</p>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0 h-5 w-5 text-secondary">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                        <p class="ml-3 text-sm text-gray-700">$100 sponsors a spay/neuter surgery</p>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0 h-5 w-5 text-secondary">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                        <p class="ml-3 text-sm text-gray-700">$500 supports emergency medical care</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form action="#" method="POST">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <!-- Donation Amount -->
                                        <div class="col-span-6">
                                            <label class="block text-sm font-medium text-gray-700">Donation Amount</label>
                                            <div class="mt-1 grid grid-cols-4 gap-3">
                                                <div>
                                                    <input type="radio" name="amount" id="amount-10" value="10" class="sr-only" checked>
                                                    <label for="amount-10" class="flex items-center justify-center px-4 py-3 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 cursor-pointer">
                                                        $10
                                                    </label>
                                                </div>
                                                <div>
                                                    <input type="radio" name="amount" id="amount-25" value="25" class="sr-only">
                                                    <label for="amount-25" class="flex items-center justify-center px-4 py-3 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 cursor-pointer">
                                                        $25
                                                    </label>
                                                </div>
                                                <div>
                                                    <input type="radio" name="amount" id="amount-50" value="50" class="sr-only">
                                                    <label for="amount-50" class="flex items-center justify-center px-4 py-3 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 cursor-pointer">
                                                        $50
                                                    </label>
                                                </div>
                                                <div>
                                                    <input type="radio" name="amount" id="amount-100" value="100" class="sr-only">
                                                    <label for="amount-100" class="flex items-center justify-center px-4 py-3 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 cursor-pointer">
                                                        $100
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="mt-3 relative rounded-md shadow-sm">
                                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                    <span class="text-gray-500 sm:text-sm">$</span>
                                                </div>
                                                <input type="text" name="custom-amount" id="custom-amount" class="focus:ring-primary focus:border-primary block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="0.00">
                                                <div class="absolute inset-y-0 right-0 flex items-center">
                                                    <label for="currency" class="sr-only">Currency</label>
                                                    <select id="currency" name="currency" class="focus:ring-primary focus:border-primary h-full py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md">
                                                        <option>USD</option>
                                                        <option>EUR</option>
                                                        <option>GBP</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Personal Information -->
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                                            <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                                            <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div class="col-span-6 sm:col-span-4">
                                            <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                                            <input type="text" name="email-address" id="email-address" autocomplete="email" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <!-- Payment Information -->
                                        <div class="col-span-6">
                                            <label for="card-number" class="block text-sm font-medium text-gray-700">Card number</label>
                                            <input type="text" name="card-number" id="card-number" autocomplete="cc-number" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="expiration-date" class="block text-sm font-medium text-gray-700">Expiration date</label>
                                            <input type="text" name="expiration-date" id="expiration-date" autocomplete="cc-exp" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="MM/YY">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                            <label for="cvc" class="block text-sm font-medium text-gray-700">CVC</label>
                                            <input type="text" name="cvc" id="cvc" autocomplete="cc-csc" class="mt-1 focus:ring-primary focus:border-primary block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div class="col-span-6 sm:col-span-2">
                                            <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                                            <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
                                                <option>United States</option>
                                                <option>Canada</option>
                                                <option>Mexico</option>
                                                <option>United Kingdom</option>
                                            </select>
                                        </div>

                                        <div class="col-span-6">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="monthly" name="monthly" type="checkbox" class="focus:ring-primary h-4 w-4 text-primary border-gray-300 rounded">
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="monthly" class="font-medium text-gray-700">Make this a monthly recurring donation</label>
                                                    <p class="text-gray-500">Help provide consistent support for animals in need.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                                        Donate Now
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center mb-12">
                <h2 class="text-base text-primary font-semibold tracking-wide uppercase">Testimonials</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    What Our Supporters Say
                </p>
            </div>
            
            <div class="mt-10">
                <div class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <div class="relative bg-gray-50 p-6 rounded-lg shadow-sm">
                        <div class="absolute -top-5 -left-5 h-12 w-12 rounded-full bg-primary text-white flex items-center justify-center">
                            <i class="fas fa-quote-left text-xl"></i>
                        </div>
                        <blockquote class="relative">
                            <div class="text-lg leading-7 font-medium text-gray-900">
                                <p>
                                    "I've been donating monthly for two years and love seeing the impact reports. Knowing exactly how my money is helping animals keeps me motivated to give."
                                </p>
                            </div>
                            <footer class="mt-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&h=256&q=80" alt="">
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-base font-medium text-gray-900">Sarah Johnson</div>
                                        <div class="text-base font-medium text-secondary">Monthly Donor</div>
                                    </div>
                                </div>
                            </footer>
                        </blockquote>
                    </div>

                    <div class="relative bg-gray-50 p-6 rounded-lg shadow-sm">
                        <div class="absolute -top-5 -left-5 h-12 w-12 rounded-full bg-primary text-white flex items-center justify-center">
                            <i class="fas fa-quote-left text-xl"></i>
                        </div>
                        <blockquote class="relative">
                            <div class="text-lg leading-7 font-medium text-gray-900">
                                <p>
                                    "After adopting my dog from Street Animal Helpers, I knew I wanted to give back. The transparency and dedication of this organization is unmatched."
                                </p>
                            </div>
                            <footer class="mt-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&h=256&q=80" alt="">
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-base font-medium text-gray-900">Michael Chen</div>
                                        <div class="text-base font-medium text-secondary">Adopter & Donor</div>
                                    </div>
                                </div>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Other Ways to Help -->
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center mb-12">
                <h2 class="text-base text-primary font-semibold tracking-wide uppercase">Other Ways to Help</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Support Our Mission
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Donations aren't the only way you can make a difference.
                </p>
            </div>

            <div class="mt-10">
                <div class="space-y-10 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-10">
                    <div class="relative bg-white p-6 rounded-lg shadow-md text-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white mx-auto">
                            <i class="fas fa-hands-helping text-xl"></i>
                        </div>
                        <h3 class="mt-5 text-lg leading-6 font-medium text-gray-900">Volunteer</h3>
                        <p class="mt-2 text-base text-gray-500">
                            Give your time to help care for animals, assist at events, or provide professional skills.
                        </p>
                        <div class="mt-6">
                            <a href="#" class="text-primary font-medium hover:text-indigo-700">Learn more <span aria-hidden="true">→</span></a>
                        </div>
                    </div>

                    <div class="relative bg-white p-6 rounded-lg shadow-md text-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white mx-auto">
                            <i class="fas fa-shopping-bag text-xl"></i>
                        </div>
                        <h3 class="mt-5 text-lg leading-6 font-medium text-gray-900">Wish List</h3>
                        <p class="mt-2 text-base text-gray-500">
                            Donate supplies from our Amazon wish list or drop off items at our shelter.
                        </p>
                        <div class="mt-6">
                            <a href="#" class="text-primary font-medium hover:text-indigo-700">View list <span aria-hidden="true">→</span></a>
                        </div>
                    </div>

                    <div class="relative bg-white p-6 rounded-lg shadow-md text-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white mx-auto">
                            <i class="fas fa-bullhorn text-xl"></i>
                        </div>
                        <h3 class="mt-5 text-lg leading-6 font-medium text-gray-900">Spread the Word</h3>
                        <p class="mt-2 text-base text-gray-500">
                            Follow us on social media and share our mission with your network.
                        </p>
                        <div class="mt-6 flex justify-center space-x-6">
                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                <i class="fab fa-facebook-f text-xl"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                <i class="fab fa-twitter text-xl"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                <i class="fab fa-instagram text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection