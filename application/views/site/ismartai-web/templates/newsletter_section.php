<?php /* templates/newsletter_section.php */ ?><section id="newsletter" class="py-16 bg-indigo-50">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">รับข่าวสาร อัปเดต และโปรโมชั่นจาก ismartai ก่อนใคร!</h2>
    <p class="text-gray-600 max-w-xl mx-auto mb-8">สมัครเพื่อรับข้อมูลข่าวสาร ฟีเจอร์ใหม่ และข้อเสนอสุดพิเศษสำหรับผู้ใช้งาน ismartai</p><form action="/api/newsletter/subscribe" method="POST" class="flex flex-col sm:flex-row justify-center gap-3 max-w-xl mx-auto">
  <input type="email" name="email" required placeholder="กรอกอีเมลของคุณ" class="w-full px-4 py-2 rounded border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:outline-none" />
  <button type="submit" class="px-5 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition">สมัครรับข่าวสาร</button>
</form>

  </div>
</section>