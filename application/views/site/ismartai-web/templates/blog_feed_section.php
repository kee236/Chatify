<?php /* templates/blog_feed_section.php */ ?><section id="blog" class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">บทความและเคล็ดลับการขายออนไลน์</h2>
    <p class="text-gray-600 max-w-2xl mx-auto mb-12">เรียนรู้กลยุทธ์ เทคนิค และเทคโนโลยีที่ช่วยให้ธุรกิจของคุณเติบโต</p><div class="grid md:grid-cols-3 gap-8 text-left">
  <?php $articles = [
    ["image" => "/assets/images/blog-automation.png", "title" => "เริ่มต้นกับการตลาดอัตโนมัติ", "date" => "1 พ.ค. 2025", "url" => "/blog/auto-marketing"],
    ["image" => "/assets/images/blog-chatbot.png", "title" => "แชทบอทกับประสบการณ์ลูกค้าที่ดีขึ้น", "date" => "25 เม.ย. 2025", "url" => "/blog/chatbot-experience"],
    ["image" => "/assets/images/blog-growth.png", "title" => "5 กลยุทธ์ปั้นยอดขายปี 2025", "date" => "12 เม.ย. 2025", "url" => "/blog/growth-strategy"]
  ]; ?>

  <?php foreach ($articles as $article): ?>
    <div class="bg-gray-50 rounded-lg shadow hover:shadow-md transition">
      <a href="<?php echo $article['url']; ?>">
        <img src="<?php echo $article['image']; ?>" alt="<?php echo htmlspecialchars($article['title']); ?>" class="w-full h-48 object-cover rounded-t-lg">
        <div class="p-5">
          <p class="text-sm text-gray-400 mb-1"><?php echo $article['date']; ?></p>
          <h3 class="text-lg font-semibold text-gray-800 leading-snug hover:text-indigo-600"><?php echo $article['title']; ?></h3>
        </div>
      </a>
    </div>
  <?php endforeach; ?>
</div>

<a href="/blog" class="mt-10 inline-block text-indigo-600 hover:underline text-sm font-medium">อ่านบทความทั้งหมด &rarr;</a>

  </div>
</section>