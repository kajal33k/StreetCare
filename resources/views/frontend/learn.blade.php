 @extends('layout.main')
 @section('content')
 <style>
    :root {
      --ghibli-purple: #22442e;
      --ghibli-light: #e8f3f0;
    }
  </style>

  <!-- Hero Section -->
  <section class="bg-[var(--ghibli-purple)] text-white py-20 px-6 text-center">
    <div class="max-w-4xl mx-auto">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">Learn More About ZiggyPawProtect</h1>
      <p class="text-lg md:text-xl mb-6">Together, we can protect and care for street animals with love and compassion.</p>
      <img src="https://cdn.pixabay.com/photo/2016/02/06/13/31/volunteer-1182899_1280.png" alt="Street Animal Help" class="rounded-2xl  mx-auto w-1/2 " />
    </div>
  </section>

  <!-- Our Mission -->
  <section class="py-16 px-6">
    <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-12 items-center">
      <img src="https://cdn.pixabay.com/photo/2018/11/29/22/01/heart-3846613_1280.png" alt="Helping Animals" class="rounded-xl " />
      <div>
        <h2 class="text-3xl font-bold mb-4">Our Mission</h2>
        <p class="text-lg leading-relaxed">
          At ZiggyPawProtect, our goal is to ensure the well-being of stray animals by providing rescue support, medical assistance, and a platform for community-driven animal aid. We believe every animal deserves a safe and loving environment.
        </p>
      </div>
    </div>
  </section>

  <!-- How It Works -->
  <section class="bg-white py-16 px-6">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-6">How ZiggyPawProtect Works</h2>
      <div class="grid md:grid-cols-3 gap-8 text-left">
        <div class="bg-[var(--ghibli-light)] p-6 rounded-xl shadow-sm">
          <h3 class="text-xl font-semibold mb-2">1. Spot & Report</h3>
          <p>See a street animal in need? Use our app or website to report it instantly with location and details.</p>
        </div>
        <div class="bg-[var(--ghibli-light)] p-6 rounded-xl shadow-sm">
          <h3 class="text-xl font-semibold mb-2">2. Our Team Responds</h3>
          <p>Volunteers or local shelters are notified and coordinate to provide rescue, food, or medical care.</p>
        </div>
        <div class="bg-[var(--ghibli-light)] p-6 rounded-xl shadow-sm">
          <h3 class="text-xl font-semibold mb-2">3. You Make a Difference</h3>
          <p>Every report and donation helps us save lives and give these animals a second chance.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Get Involved -->
  <section class="py-16 px-6">
    <div class="max-w-3xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-4">Get Involved</h2>
      <p class="text-lg mb-6">
        Whether you volunteer your time, donate to our cause, or help spread awareness — your actions matter. Let's build a better world for our furry friends.
      </p>
      <a href="/get-involved" class="inline-block bg-[var(--ghibli-purple)] text-white text-lg px-6 py-3 rounded-full shadow hover:bg-opacity-90 transition duration-200">
        Join the Movement
      </a>
    </div>
  </section>

 @endsection