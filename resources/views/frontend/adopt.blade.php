@extends('layout.main')
@section('content')
<style>
    body {
      font-family: 'Quicksand', sans-serif;
      background-color: #f8f9fa;
    }
</style>

<!-- Hero Section -->
<section class="py-20 px-6 md:px-12 bg-gradient-to-b from-[#1C3B20] to-[#2a5c34]">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-12">
      
      <!-- Text Block -->
      <div class="flex-1 text-center md:text-left text-white">
        <h2 class="text-4xl md:text-5xl font-bold mb-4 leading-tight">Give Home,<br class="hidden md:block"> Adopt a Friend</h2>
        <p class="text-lg md:text-xl mb-6 max-w-xl">Open your heart and home to a loving animal in need of family. Every paw deserves a place to feel safe and loved.</p>
        <a href="#adopt" class="inline-block bg-[#b9e8b9] text-[#1C3B20] hover:bg-[#9ce2af] px-6 py-3 rounded-2xl text-lg font-semibold shadow-md transition duration-300">
          Find Your Companion
        </a>
      </div>

      <!-- Image Block -->
      <div class="flex-1">
        <img src="{{asset('asset/image/adopt.jpg')}}" alt="Adoptable Animal" class="w-full max-w-md rounded-3xl shadow-xl mx-auto border-4 border-white">
      </div>

    </div>
</section>

<!-- Adoption Gallery Section -->
<section id="adopt" class="py-16 px-6 md:px-12 bg-[#f5f5f5]">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-[#1C3B20] mb-4">Available for Adoption</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Meet our wonderful animals waiting for their forever homes</p>
        </div>
        
        <div class="p-5 sm:p-8">
            <div class="columns-1 gap-5 sm:columns-2 sm:gap-8 md:columns-3 lg:columns-4 [&>img:not(:first-child)]:mt-8">
                <img src="https://images.unsplash.com/photo-1472491235688-bdc81a63246e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxfHxjYXR8ZW58MHwwfHx8MTcyMTgyMjE3OXww&ixlib=rb-4.0.3&q=80&w=1080" class="rounded-lg shadow-md hover:shadow-lg transition duration-300"/>
                <img src="https://images.unsplash.com/photo-1478098711619-5ab0b478d6e6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxjYXR8ZW58MHwwfHx8MTcyMTgyMjE3OXww&ixlib=rb-4.0.3&q=80&w=1080" class="rounded-lg shadow-md hover:shadow-lg transition duration-300"/>
                <img src="https://images.unsplash.com/photo-1668491195456-9341d9cf3977?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxfHxjYXQlMjB3aGl0ZXxlbnwwfDF8fHwxNzIxODIyMzU3fDA&ixlib=rb-4.0.3&q=80&w=1080" class="rounded-lg shadow-md hover:shadow-lg transition duration-300"/>
                <img src="https://images.unsplash.com/photo-1515002246390-7bf7e8f87b54?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxM3x8Y2F0fGVufDB8MHx8fDE3MjE4MjIxNzl8MA&ixlib=rb-4.0.3&q=80&w=1080" class="rounded-lg shadow-md hover:shadow-lg transition duration-300"/>
                <img src="https://images.unsplash.com/photo-1511044568932-338cba0ad803?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxjYXR8ZW58MHwwfHx8MTcyMTgyMjE3OXww&ixlib=rb-4.0.3&q=80&w=1080" class="rounded-lg shadow-md hover:shadow-lg transition duration-300"/>
                <img src="https://images.unsplash.com/photo-1475518112798-86ae358241eb?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMHx8Y2F0fGVufDB8MHx8fDE3MjE4MjIxNzl8MA&ixlib=rb-4.0.3&q=80&w=1080" class="rounded-lg shadow-md hover:shadow-lg transition duration-300"/>
                <img src="https://images.unsplash.com/photo-1498100152307-ce63fd6c5424?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMXx8Y2F0fGVufDB8MHx8fDE3MjE4MjIxNzl8MA&ixlib=rb-4.0.3&q=80&w=1080" class="rounded-lg shadow-md hover:shadow-lg transition duration-300"/>
                <img src="https://images.unsplash.com/photo-1503777119540-ce54b422baff?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw5fHxjYXQlMjB3aGl0ZXxlbnwwfDF8fHwxNzIxODIyMzU3fDA&ixlib=rb-4.0.3&q=80&w=1080" class="rounded-lg shadow-md hover:shadow-lg transition duration-300"/>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="#" class="inline-block bg-[#1C3B20] hover:bg-[#2a5c34] text-white px-8 py-3 rounded-lg text-lg font-semibold shadow-md transition duration-300">
                View All Animals
            </a>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="py-16 px-6 md:px-12 bg-white">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-[#1C3B20] mb-4">How Adoption Works</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Simple steps to bring your new friend home</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-[#f8f9fa] p-6 rounded-lg shadow-sm hover:shadow-md transition duration-300 border-t-4 border-[#1C3B20]">
                <div class="text-4xl font-bold text-[#1C3B20] mb-4">1</div>
                <h3 class="text-xl font-semibold text-[#1C3B20] mb-3">Browse Animals</h3>
                <p class="text-gray-600">View our available pets and find one that matches your lifestyle.</p>
            </div>
            
            <div class="bg-[#f8f9fa] p-6 rounded-lg shadow-sm hover:shadow-md transition duration-300 border-t-4 border-[#1C3B20]">
                <div class="text-4xl font-bold text-[#1C3B20] mb-4">2</div>
                <h3 class="text-xl font-semibold text-[#1C3B20] mb-3">Apply to Adopt</h3>
                <p class="text-gray-600">Fill out our adoption application form to begin the process.</p>
            </div>
            
            <div class="bg-[#f8f9fa] p-6 rounded-lg shadow-sm hover:shadow-md transition duration-300 border-t-4 border-[#1C3B20]">
                <div class="text-4xl font-bold text-[#1C3B20] mb-4">3</div>
                <h3 class="text-xl font-semibold text-[#1C3B20] mb-3">Bring Them Home</h3>
                <p class="text-gray-600">Complete the adoption and welcome your new family member!</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-16 px-6 md:px-12 bg-[#f5f5f5]">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-[#1C3B20] mb-4">Happy Tails</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Stories from our adoptive families</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 rounded-full bg-[#1C3B20] flex items-center justify-center text-white font-bold mr-4">JD</div>
                    <div>
                        <h4 class="font-semibold text-[#1C3B20]">Jane & David</h4>
                        <p class="text-gray-500 text-sm">Adopted Luna, 2023</p>
                    </div>
                </div>
                <p class="text-gray-600 italic">"Luna has brought so much joy to our home. The adoption process was smooth and the staff was incredibly supportive. We couldn't imagine our lives without her now!"</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 rounded-full bg-[#1C3B20] flex items-center justify-center text-white font-bold mr-4">SM</div>
                    <div>
                        <h4 class="font-semibold text-[#1C3B20]">Sarah M.</h4>
                        <p class="text-gray-500 text-sm">Adopted Max, 2022</p>
                    </div>
                </div>
                <p class="text-gray-600 italic">"Max was the perfect addition to our family. He had some special needs but the shelter was transparent about everything and helped us prepare. Highly recommend adopting!"</p>
            </div>
        </div>
    </div>
</section>
@endsection