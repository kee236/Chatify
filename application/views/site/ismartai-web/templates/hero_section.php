<?php /* templates/hero_section.php */ ?><section id="hero" class="relative bg-gradient-to-tr from-indigo-600 to-purple-600 text-white py-20 overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center"><!-- Hero Content -->
<div class="md:w-1/2 mb-10 md:mb-0 text-center md:text-left">
  <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6 animate-fade-in-up">
    ismartai แชทบอท<br />เพื่อร้านค้าที่ต้องการเติบโต
  </h1>
  <p class="text-lg md:text-xl mb-8 animate-fade-in-up delay-100">
    เพิ่มยอดขาย ตอบลูกค้าอัตโนมัติ ตลอด 24 ชม. ประหยัดเวลาทำงานของแอดมินและลดต้นทุนธุรกิจของคุณ
  </p>
  <div class="flex justify-center md:justify-start space-x-4 animate-fade-in-up delay-200">
    <a href="/signup" class="px-6 py-3 bg-white text-indigo-600 rounded-lg font-semibold shadow hover:bg-gray-100 transition">ทดลองใช้ฟรี</a>
    <a href="/features" class="px-6 py-3 border border-white text-white rounded-lg hover:bg-white hover:text-indigo-700 transition">ดูฟีเจอร์</a>
  </div>

  <!-- Supported Platforms -->
  <div class="mt-10 flex flex-wrap items-center justify-center md:justify-start space-x-4 animate-fade-in-up delay-300">
    <p class="text-sm font-medium text-white mr-2">รองรับการเชื่อมต่อ:</p>
    <img src="assets/icons/platform-messenger.svg" alt="Facebook Messenger" class="h-6" title="Facebook Messenger">
    <img src="assets/icons/platform-lineoa.svg" alt="LINE OA" class="h-6" title="LINE OA">
    <img src="assets/icons/platform-instagram.svg" alt="Instagram DM" class="h-6" title="Instagram DM">
    <img src="assets/icons/platform-shopee.svg" alt="Shopee" class="h-6" title="Shopee">
    <img src="assets/icons/platform-lazada.svg" alt="Lazada" class="h-6" title="Lazada">
  </div>
</div>

<!-- Hero Illustration -->
<div class="md:w-1/2 relative">
  <div class="absolute w-56 h-56 bg-purple-400 rounded-full opacity-30 blur-3xl -top-10 -left-10 animate-pulse"></div>
  <div class="absolute w-48 h-48 bg-indigo-500 rounded-full opacity-20 blur-2xl -bottom-10 -right-10 animate-ping"></div>
  <img src="assets/images/hero-illustration.png" alt="ภาพประกอบ ismartai แชทบอท" class="relative z-10 animate-fade-in">
</div>

  </div>  <!-- Custom Animations -->  <style>
    @keyframes fade-in-up {
      0% { opacity: 0; transform: translateY(30px); }
      100% { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in-up {
      animation: fade-in-up 0.8s ease-out both;
    }
    .animate-fade-in-up.delay-100 { animation-delay: 0.1s; }
    .animate-fade-in-up.delay-200 { animation-delay: 0.2s; }
    .animate-fade-in-up.delay-300 { animation-delay: 0.3s; }
    .animate-fade-in {
      animation: fade-in 1s ease-out both;
    }
    @keyframes fade-in {
      from { opacity: 0; }
      to { opacity: 1; }
    }
  </style></section>