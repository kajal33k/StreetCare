@extends('layout.main')
@section('content')

  <!-- Help Hero -->
  <section class="text-center py-12 bg-[#f8faf8]">
    <h2 class="text-4xl font-bold mb-4 text-[#1C3B20]">Need Help?</h2>
    <p class="max-w-xl mx-auto text-lg text-[#4a5c4e]">We're here to help you support street animals better. Whether you're reporting a case or need info, check below.</p>
  </section>

  <!-- FAQ Section -->
  <section class="max-w-4xl mx-auto px-6 py-10">
    <h3 class="text-2xl font-semibold mb-6 text-[#1C3B20]">Frequently Asked Questions</h3>

    <div class="space-y-6">
      <div class="bg-white p-6 rounded-xl shadow-sm border border-[#e0e6e1]">
        <h4 class="font-semibold text-lg text-[#1C3B20]">How do I report an injured animal?</h4>
        <p class="text-sm mt-2 text-[#4a5c4e]">Use our <a href="/report" class="text-[#2a7d3e] underline">Report</a> page to submit details and photos. Our volunteers will reach out ASAP.</p>
      </div>

      <div class="bg-white p-6 rounded-xl shadow-sm border border-[#e0e6e1]">
        <h4 class="font-semibold text-lg text-[#1C3B20]">Can I volunteer with PawProtect?</h4>
        <p class="text-sm mt-2 text-[#4a5c4e]">Yes! Visit our <a href="/volunteer" class="text-[#2a7d3e] underline">Volunteer</a> page to sign up and receive training details.</p>
      </div>

      <div class="bg-white p-6 rounded-xl shadow-sm border border-[#e0e6e1]">
        <h4 class="font-semibold text-lg text-[#1C3B20]">How do I donate?</h4>
        <p class="text-sm mt-2 text-[#4a5c4e]">Visit our <a href="/donate" class="text-[#2a7d3e] underline">Donate</a> page. All contributions directly support food, shelter, and medical care.</p>
      </div>
    </div>
  </section>

  <!-- Emergency Help -->
  <section class="bg-[#f0f5f1] py-10 px-6">
    <div class="max-w-4xl mx-auto text-center">
      <h3 class="text-xl font-bold mb-3 text-[#1C3B20]">Emergency Assistance</h3>
      <p class="mb-4 text-[#4a5c4e]">For urgent cases, call us directly at:</p>
      <p class="text-2xl font-bold text-[#2a7d3e]">+91 98765 43210</p>
      <p class="text-sm text-[#5a6d5f] mt-2">Available 24/7 for animal emergencies.</p>
    </div>
  </section>

  <!-- Contact Form -->
  <section class="max-w-3xl mx-auto py-12 px-6">
    <h3 class="text-2xl font-semibold mb-6 text-[#1C3B20]">Still need help? Contact us</h3>
    <form class="space-y-6">
      <div>
        <label class="block text-sm font-medium mb-1 text-[#1C3B20]">Your Name</label>
        <input type="text" class="w-full px-4 py-2 border border-[#d0d9d2] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#2a7d3e]" />
      </div>
      <div>
        <label class="block text-sm font-medium mb-1 text-[#1C3B20]">Email Address</label>
        <input type="email" class="w-full px-4 py-2 border border-[#d0d9d2] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#2a7d3e]" />
      </div>
      <div>
        <label class="block text-sm font-medium mb-1 text-[#1C3B20]">Message</label>
        <textarea rows="4" class="w-full px-4 py-2 border border-[#d0d9d2] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#2a7d3e]"></textarea>
      </div>
      <button type="submit" class="bg-[#2a7d3e] text-white px-6 py-2 rounded-lg hover:bg-[#1C3B20] transition">Send Message</button>
    </form>
  </section>
@endsection