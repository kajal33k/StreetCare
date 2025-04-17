@extends('layout.main')
@section('content')

  <!-- Hero Section -->
  <section class="relative bg-gradient-to-r from-rose-100 to-pink-50">
    <div class="absolute inset-0 bg-[url('https://source.unsplash.com/1600x900/?dogs,animals')] bg-cover bg-center opacity-20"></div>
    <div class="max-w-4xl mx-auto px-4 py-24 text-center relative z-10">
      <h2 class="text-5xl font-extrabold text-rose-700 mb-4 drop-shadow">Hope for the Homeless Tails</h2>
      <p class="text-xl text-gray-700 mb-6 max-w-2xl mx-auto">Join our mission to spread awareness, provide aid, and share stories that matter. Together, we create a kinder world for street animals.</p>
      <a href="#" class="inline-block bg-rose-600 text-white px-6 py-3 rounded-full font-medium shadow-md hover:bg-rose-700 transition">Explore Stories</a>
    </div>
  </section>

  <!-- Blog Section -->
  <section class="py-20">
    <div class="max-w-7xl mx-auto px-4">
      <h3 class="text-4xl font-bold text-center text-rose-600 mb-12">Latest Blog Stories</h3>
      <div class="grid md:grid-cols-3 gap-10">

        <!-- Blog Card -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition">
          <img src="https://source.unsplash.com/400x250/?puppy,rescue" alt="Rescue Story" class="w-full h-56 object-cover">
          <div class="p-6">
            <h4 class="text-xl font-semibold mb-2 text-rose-700">Rescue Story: Bella the Brave</h4>
            <p class="text-gray-600 mb-4">Bella, an injured pup, found love and recovery through our community's compassion.</p>
            <a href="#" class="text-rose-600 font-semibold hover:underline">Read More →</a>
          </div>
        </div>

        <!-- Blog Card -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition">
          <img src="https://source.unsplash.com/400x250/?cat,rescue" alt="Cat Help" class="w-full h-56 object-cover">
          <div class="p-6">
            <h4 class="text-xl font-semibold mb-2 text-rose-700">Helping Stray Cats Safely</h4>
            <p class="text-gray-600 mb-4">Discover effective and compassionate ways to help feral cats in your area.</p>
            <a href="#" class="text-rose-600 font-semibold hover:underline">Read More →</a>
          </div>
        </div>

        <!-- Blog Card -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition">
          <img src="https://source.unsplash.com/400x250/?vet,animal" alt="First Aid" class="w-full h-56 object-cover">
          <div class="p-6">
            <h4 class="text-xl font-semibold mb-2 text-rose-700">Street Animal First Aid</h4>
            <p class="text-gray-600 mb-4">Learn life-saving tips you can use when you encounter an injured street animal.</p>
            <a href="#" class="text-rose-600 font-semibold hover:underline">Read More →</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="bg-rose-100 py-16">
    <div class="max-w-3xl mx-auto px-6 text-center">
      <h4 class="text-3xl font-bold text-rose-700 mb-4">Want to Make a Bigger Impact?</h4>
      <p class="text-gray-700 mb-6">Subscribe to get the latest stories, rescue tips, and ways to help animals in your area. Every voice matters. 🐾</p>
      <form class="flex flex-col sm:flex-row items-center justify-center gap-4">
        <input type="email" placeholder="Enter your email" class="w-full sm:w-auto px-5 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-rose-400" required>
        <button type="submit" class="bg-rose-600 text-white px-6 py-3 rounded-full font-medium hover:bg-rose-700 transition">Subscribe</button>
      </form>
    </div>
  </section>

@endsection