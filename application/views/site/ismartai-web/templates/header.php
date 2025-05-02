<?php /* templates/header.php */ ?><header class="bg-white shadow-md sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center py-4">
      <!-- Logo -->
      <div class="flex-shrink-0">
        <a href="/">
          <img src="assets/images/ismartai_logo_color.svg" alt="โลโก้ ismartai" class="h-10">
        </a>
      </div><!-- Navigation -->
  <nav class="hidden md:flex space-x-8">
    <a href="/" class="text-gray-700 hover:text-indigo-600 font-medium">หน้าแรก</a>
    <a href="/features" class="text-gray-700 hover:text-indigo-600 font-medium">ฟีเจอร์</a>
    <a href="/pricing" class="text-gray-700 hover:text-indigo-600 font-medium">ราคา</a>
    <a href="/blog" class="text-gray-700 hover:text-indigo-600 font-medium">บทความ</a>
    <a href="/contact" class="text-gray-700 hover:text-indigo-600 font-medium">ติดต่อเรา</a>
  </nav>

  <!-- Action Buttons -->
  <div class="hidden md:flex items-center space-x-4">
    <a href="/login" class="text-indigo-600 hover:underline">เข้าสู่ระบบ</a>
    <a href="/signup" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">สมัครใช้งาน</a>
  </div>

  <!-- Mobile Menu Toggle -->
  <div class="md:hidden">
    <button id="mobile-menu-button" class="text-indigo-600 focus:outline-none">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>
</div>

  </div>  <!-- Mobile Menu -->  <div id="mobile-menu" class="md:hidden hidden px-4 pb-4">
    <a href="/" class="block py-2 text-gray-700 hover:text-indigo-600">หน้าแรก</a>
    <a href="/features" class="block py-2 text-gray-700 hover:text-indigo-600">ฟีเจอร์</a>
    <a href="/pricing" class="block py-2 text-gray-700 hover:text-indigo-600">ราคา</a>
    <a href="/blog" class="block py-2 text-gray-700 hover:text-indigo-600">บทความ</a>
    <a href="/contact" class="block py-2 text-gray-700 hover:text-indigo-600">ติดต่อเรา</a>
    <a href="/login" class="block py-2 text-indigo-600 font-medium">เข้าสู่ระบบ</a>
    <a href="/signup" class="block py-2 bg-indigo-600 text-white text-center rounded-md mt-2">สมัครใช้งาน</a>
  </div>  <script>
    const menuBtn = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script></header>