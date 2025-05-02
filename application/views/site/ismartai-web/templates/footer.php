<?php /* templates/footer.php */ ?>
<footer class="bg-gray-800 text-gray-300 pt-12 pb-6">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-4 gap-8 text-sm">
    
    <!-- Logo & Social -->
    <div>
      <img src="/assets/images/ismartai_logo_grey.svg" alt="ismartai logo" class="h-8 mb-3">
      <p class="mb-4">ระบบจัดการร้านค้าอัตโนมัติ</p>
      <div class="flex space-x-3">
        <a href="https://www.facebook.com/ismartai_page" target="_blank"><img src="/assets/icons/social-facebook.svg" class="h-5" alt="Facebook"></a>
        <a href="https://line.me/R/ti/p/%40ismartai_line" target="_blank"><img src="/assets/icons/social-line.svg" class="h-5" alt="LINE OA"></a>
        <a href="https://www.youtube.com/channel/ismartai" target="_blank"><img src="/assets/icons/social-youtube.svg" class="h-5" alt="YouTube"></a>
        <a href="https://www.instagram.com/ismartai" target="_blank"><img src="/assets/icons/social-instagram.svg" class="h-5" alt="Instagram"></a>
      </div>
    </div>

    <!-- About Links -->
    <div>
      <h4 class="text-white font-semibold mb-3">เกี่ยวกับ ismartai</h4>
      <ul class="space-y-1">
        <li><a href="/features" class="hover:underline">ฟีเจอร์</a></li>
        <li><a href="/pricing" class="hover:underline">ราคา</a></li>
        <li><a href="/about" class="hover:underline">เกี่ยวกับเรา</a></li>
        <li><a href="/contact" class="hover:underline">ติดต่อเรา</a></li>
      </ul>
    </div>

    <!-- Resources -->
    <div>
      <h4 class="text-white font-semibold mb-3">แหล่งข้อมูล</h4>
      <ul class="space-y-1">
        <li><a href="/blog" class="hover:underline">บทความ</a></li>
        <li><a href="/help/guides" class="hover:underline">คู่มือการใช้งาน</a></li>
        <li><a href="/faq" class="hover:underline">คำถามที่พบบ่อย</a></li>
      </ul>
    </div>

    <!-- Legal -->
    <div>
      <h4 class="text-white font-semibold mb-3">กฏหมาย</h4>
      <ul class="space-y-1">
        <li><a href="/terms-of-service" class="hover:underline">ข้อตกลงการใช้งาน</a></li>
        <li><a href="/privacy-policy" class="hover:underline">นโยบายความเป็นส่วนตัว</a></li>
      </ul>
    </div>
  </div>

  <div class="mt-10 border-t border-gray-700 pt-4 text-center text-xs text-gray-500">
    &copy; <?php echo date("Y"); ?> ismartai. สงวนลิขสิทธิ์.
  </div>
</footer>