@extends('layout.main')
@section('content')

  <style>
    :root {
      --primary-color: #44223C;
      --secondary-color: #8C5C66;
      --accent-color: #D8A7B1;
      --light-bg: #FDF6EC;
      --text-color: #2D1B24;
    }

    body {
      background-color: var(--light-bg);
      color: var(--text-color);
    }
  </style>

  <header class="bg-[color:var(--primary-color)] text-white py-16 text-center border-b-8 border-double border-[color:var(--accent-color)]">
    <h1 class="text-4xl font-bold mb-2">Contact Us</h1>
    <p class="text-lg">We'd love to hear from you</p>
  </header>

  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <!-- Locations -->
    <section>
      <h2 class="text-3xl font-semibold mb-8 text-[color:var(--primary-color)] border-b-2 border-dashed border-[color:var(--accent-color)] pb-2">Our Locations</h2>
      <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 mb-16">
        <!-- Card -->
        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition hover:-translate-y-1">
          <h3 class="text-xl font-semibold text-[color:var(--primary-color)] mb-3">Kolad Location</h3>
          <div class="space-y-1 text-[color:var(--text-color)]">
            <p><strong class="text-[color:var(--secondary-color)]">KOLAD:</strong> Via Vittorio</p>
            <p><strong class="text-[color:var(--secondary-color)]">Mountains:</strong> 4000,000</p>
            <p><strong class="text-[color:var(--secondary-color)]">Arizona:</strong> 4000,000</p>
          </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition hover:-translate-y-1">
          <h3 class="text-xl font-semibold text-[color:var(--primary-color)] mb-3">Malad Location</h3>
          <div class="space-y-1 text-[color:var(--text-color)]">
            <p><strong class="text-[color:var(--secondary-color)]">C13:</strong> Red / Los Alamos</p>
            <p><strong class="text-[color:var(--secondary-color)]">Núcleo:</strong> Nuevo Río, Malad</p>
            <p><strong class="text-[color:var(--secondary-color)]">Volumen:</strong> 40000,000</p>
          </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition hover:-translate-y-1">
          <h3 class="text-xl font-semibold text-[color:var(--primary-color)] mb-3">Animal Matter Drive</h3>
          <div class="space-y-1 text-[color:var(--text-color)]">
            <p><strong class="text-[color:var(--secondary-color)]">Location:</strong> JOS Amaro, Malad Aveiro 18</p>
            <p><strong class="text-[color:var(--secondary-color)]">Phone:</strong> +91 990 12227</p>
            <p><strong class="text-[color:var(--secondary-color)]">Email:</strong> gcimnobu@gmail.com</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Links Section -->
    <section class="flex flex-col lg:flex-row gap-10 mb-16">
      <!-- Useful Links -->
      <div class="flex-1 min-w-[220px]">
        <h3 class="text-2xl font-semibold text-[color:var(--primary-color)] mb-4">Useful Links</h3>
        <ul class="space-y-2 text-[color:var(--text-color)]">
          <li><a href="#" class="hover:text-[color:var(--accent-color)] transition">Home</a></li>
          <li><a href="#" class="hover:text-[color:var(--accent-color)] transition">About Us</a></li>
          <li><a href="#" class="hover:text-[color:var(--accent-color)] transition">Adjuviera</a></li>
          <li><a href="#" class="hover:text-[color:var(--accent-color)] transition">Unión: Cam</a></li>
          <li><a href="#" class="hover:text-[color:var(--accent-color)] transition">Reconoced & Ready</a></li>
          <li><a href="#" class="hover:text-[color:var(--accent-color)] transition">Our Biops</a></li>
          <li><a href="#" class="hover:text-[color:var(--accent-color)] transition">Contact Us</a></li>
        </ul>
      </div>

      <!-- Causes -->
      <div class="flex-1 min-w-[220px]">
        <h3 class="text-2xl font-semibold text-[color:var(--primary-color)] mb-4">Our Causes</h3>
        <ul class="space-y-2 text-[color:var(--text-color)]">
          <li><a href="#" class="hover:text-[color:var(--accent-color)] transition">Donate A Bed for Injured Animals</a></li>
          <li><a href="#" class="hover:text-[color:var(--accent-color)] transition">Fund Ambulance for Rescue</a></li>
          <li><a href="#" class="hover:text-[color:var(--accent-color)] transition">Support Our Field Team</a></li>
          <li><a href="#" class="hover:text-[color:var(--accent-color)] transition">Act Now, Save Tomorrow</a></li>
          <li><a href="#" class="hover:text-[color:var(--accent-color)] transition">Give Injured Animals a Second Chance</a></li>
        </ul>
      </div>
    </section>

    <!-- Newsletter / Form -->
    <section class="bg-white p-8 rounded-xl shadow-md mb-16">
      <h2 class="text-3xl font-semibold mb-6 text-[color:var(--primary-color)] border-b-2 border-dashed border-[color:var(--accent-color)] pb-2">Drop a Message</h2>
      <form class="space-y-6">
        <div>
          <label for="name" class="block font-semibold mb-2">Your Name</label>
          <input type="text" id="name" name="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[color:var(--accent-color)]" required />
        </div>
        <div>
          <label for="email" class="block font-semibold mb-2">Email Address</label>
          <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[color:var(--accent-color)]" required />
        </div>
        <div>
          <label for="subject" class="block font-semibold mb-2">Subject</label>
          <input type="text" id="subject" name="subject" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[color:var(--accent-color)]" required />
        </div>
        <div>
          <label for="message" class="block font-semibold mb-2">Your Message</label>
          <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[color:var(--accent-color)]" required></textarea>
        </div>
        <button type="submit" class="bg-[color:var(--secondary-color)] hover:bg-[#6d4751] text-white px-6 py-3 rounded-lg transition">Send Message</button>
      </form>
    </section>
  </main>
@endsection
