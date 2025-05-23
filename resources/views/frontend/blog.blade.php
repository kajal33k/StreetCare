@extends('layout.main')
@section('content')

  <!-- Hero Section -->
  <section class="relative bg-gradient-to-br from-[#E8F2E9] via-[#D5E6D8] to-[#C2DAC7]">
    <!-- Background Image Layer -->
    <div class="absolute inset-0 bg-[url('https://source.unsplash.com/1600x900/?studio-ghibli,dog')] bg-cover bg-center opacity-10"></div>
  
    <!-- Content Layer -->
    <div class="relative z-10 max-w-4xl mx-auto px-6 py-28 text-center">
      <h2 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-[#1C3B20] mb-6 drop-shadow-md">
        Hope for the Homeless Tails
      </h2>
      <p class="text-lg sm:text-xl text-[#2D3B2A] mb-8 max-w-2xl mx-auto leading-relaxed">
        Join our journey to bring love, care, and hope to the streets. Every tail deserves a story, every paw deserves protection.
      </p>
      <a href="#"
         class="inline-block bg-[#1C3B20] hover:bg-[#0F2915] text-white px-6 py-3 rounded-full font-medium shadow-md transition duration-300 ease-in-out">
        Explore Stories
      </a>
    </div>
  </section>
  

  <!-- Blog Section -->
  <section class="py-20 bg-gradient-to-br from-[#F5F9F5] via-[#E8F2E9] to-[#DBEBDE]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h3 class="text-4xl sm:text-5xl font-extrabold text-center text-[#1C3B20] mb-16 drop-shadow-sm">Latest Blog Stories</h3>
  
      <div class="grid md:grid-cols-3 gap-10">
        
        <!-- Blog Card -->
        <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 group">
          <img src="https://cdn.pixabay.com/photo/2019/10/06/10/03/team-4529717_1280.jpg" alt="Rescue Story"
               class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300 ease-in-out">
          <div class="p-6">
            <h4 class="text-xl font-semibold mb-2 text-[#1C3B20]">Rescue Story: Bella the Brave</h4>
            <p class="text-[#2D3B2A] mb-4">Bella, an injured pup, found love and recovery through our community's compassion.</p>
            <a href="#" class="text-[#3A5C40] font-semibold hover:underline">Read More →</a>
          </div>
        </div>
  
        <!-- Blog Card -->
        <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 group">
          <img src="https://cdn.pixabay.com/photo/2019/05/15/23/34/welcome-4206177_1280.jpg" alt="Cat Help"
               class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300 ease-in-out">
          <div class="p-6">
            <h4 class="text-xl font-semibold mb-2 text-[#1C3B20]">Helping Stray Cats Safely</h4>
            <p class="text-[#2D3B2A] mb-4">Discover effective and compassionate ways to help feral cats in your area.</p>
            <a href="#" class="text-[#3A5C40] font-semibold hover:underline">Read More →</a>
          </div>
        </div>
  
        <!-- Blog Card -->
        <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 group">
          <img src="https://cdn.pixabay.com/photo/2016/10/11/21/11/first-aid-1732757_1280.jpg" alt="First Aid"
               class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300 ease-in-out">
          <div class="p-6">
            <h4 class="text-xl font-semibold mb-2 text-[#1C3B20]">Street Animal First Aid</h4>
            <p class="text-[#2D3B2A] mb-4">Learn life-saving tips you can use when you encounter an injured street animal.</p>
            <a href="#" class="text-[#3A5C40] font-semibold hover:underline">Read More →</a>
          </div>
        </div>
  
      </div>
    </div>
  </section>
  

  <!-- Call to Action -->
  <section class="bg-gradient-to-b from-[#F5F9F5] to-[#DBEBDE] py-20">
    <div class="max-w-3xl mx-auto px-6 text-center">
      <h4 class="text-3xl sm:text-4xl font-extrabold text-[#1C3B20] mb-4 drop-shadow-sm">Want to Make a Bigger Impact?</h4>
      <p class="text-[#3A5C40] text-lg mb-8">Subscribe to get the latest stories, rescue tips, and ways to help animals in your area. Every voice matters. 🐾</p>
      
      <form class="flex flex-col sm:flex-row items-center justify-center gap-4">
        <input type="email" 
               placeholder="Enter your email" 
               class="w-full sm:w-auto px-6 py-3 rounded-full border border-[#C2DAC7] bg-white text-[#1C3B20] placeholder-[#8CA692] focus:outline-none focus:ring-2 focus:ring-[#1C3B20] transition" 
               required>
               
        <button type="submit" 
                class="bg-[#1C3B20] text-white px-6 py-3 rounded-full font-medium shadow hover:bg-[#0F2915] transition">
          Subscribe
        </button>
      </form>
    </div>
  </section>
  

@endsection