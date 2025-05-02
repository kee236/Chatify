<?php /* templates/support_section.php */ ?><section id="support" class="py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">เราพร้อมช่วยเหลือคุณ</h2>
    <p class="text-gray-600 max-w-2xl mx-auto mb-12">ไม่ว่าคุณจะเพิ่งเริ่มต้นหรือกำลังขยายธุรกิจ ทีมงาน ismartai พร้อมอยู่เคียงข้างคุณเสมอ</p><div class="grid md:grid-cols-3 gap-8 text-left">
  <!-- Guide Card -->
  <div class="bg-white rounded-lg shadow p-6 flex items-start space-x-4 hover:shadow-lg transition">
    <img src="assets/icons/support-guide.svg" alt="คู่มือและคำถามที่พบบ่อย" class="w-12 h-12">
    <div>
      <h3 class="text-lg font-semibold text-gray-800">คู่มือ & คำถามที่พบบ่อย</h3>
      <p class="text-sm text-gray-600 mt-1">เริ่มต้นใช้งานและค้นหาคำตอบสำหรับคำถามของคุณได้อย่างง่ายดาย</p>
      <a href="/help/guides" class="text-indigo-600 text-sm mt-2 inline-block hover:underline">อ่านคู่มือ</a>
    </div>
  </div>

  <!-- Contact Support -->
  <div class="bg-white rounded-lg shadow p-6 flex items-start space-x-4 hover:shadow-lg transition">
    <img src="assets/icons/support-contact.svg" alt="ติดต่อทีมงาน" class="w-12 h-12">
    <div>
      <h3 class="text-lg font-semibold text-gray-800">ติดต่อทีมงาน</h3>
      <p class="text-sm text-gray-600 mt-1">หากคุณต้องการความช่วยเหลือเพิ่มเติม หรือต้องการปรึกษาการใช้งาน</p>
      <a href="/contact" class="text-indigo-600 text-sm mt-2 inline-block hover:underline">ติดต่อเรา</a>
    </div>
  </div>

  <!-- Live Chat -->
  <div class="bg-white rounded-lg shadow p-6 flex items-start space-x-4 hover:shadow-lg transition">
    <img src="assets/icons/support-chat.svg" alt="แชทสดกับทีมงาน" class="w-12 h-12">
    <div>
      <h3 class="text-lg font-semibold text-gray-800">แชทสดกับทีมงาน</h3>
      <p class="text-sm text-gray-600 mt-1">สอบถามข้อมูลแบบเรียลไทม์ ผ่านระบบ Live Chat บนหน้าเว็บไซต์</p>
      <a href="#livechat" onclick="openChatWidget(); return false;" class="text-indigo-600 text-sm mt-2 inline-block hover:underline">เริ่มแชทตอนนี้</a>
    </div>
  </div>
</div>

  </div>
</section><script>
function openChatWidget() {
  // ตัวอย่าง script เรียกใช้งาน live chat widget (เปลี่ยนตามผู้ให้บริการ)
  if (window.Tawk_API) {
    Tawk_API.maximize();
  } else {
    alert('Live Chat ยังไม่พร้อมใช้งาน กรุณาติดต่อทีมงาน');
  }
}
</script>