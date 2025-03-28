<?php
// view/site/template/blog.php

<div class="list-blog pt-100 pb-100">
    <div class="container">
        <div class="cursor flex-center gap-12">
            <i class="ph ph-caret-left text-white"></i>
            <i class="ph ph-caret-right text-white"></i>
        </div>
        <div class="heading flex-between">
            <div class="heading3">Our Blogs</div>
            <a href="<?= base_url('blog'); ?>">
                <u class="fw-700 text-blue-hover">View All</u>
            </a>
        </div>
        <div class="row list mt-40">
            <?php 
            $blogs = [
                ["img" => "item1.png", "title" => "สร้างรูปภาพด้วย Ai ใช้งานกับธุรกิจของคุณ", "desc" => "สร้างและปรับแต่งรูปภาพใช้งานกับธุรกิจของคุณโดยใช้ Ai...", "date" => "Oct 12, 2026", "category" => "Creative"],
                ["img" => "item3.png", "title" => "ใช้พลังความคิดสร้างสรรค์ของคุณ", "desc" => "ใช้งาน Ai ช่วยสร้างความคิดสร้างสรรค์ให้ธุรกิจของคุณ...", "date" => "Oct 11, 2023", "category" => "3D Cartoon"],
                ["img" => "item4.png", "title" => "เพิ่มการวิเคราะห์ข้อมูลช่วยคาดการณ์ E-Commerce", "desc" => "Cryptocurrencies operate on decentralized networks...", "date" => "Oct 10, 2023", "category" => "Realistic"],
                ["img" => "item2.png", "title" => "Breaking the Barriers of Creativity", "desc" => "Cryptocurrencies operate on decentralized networks...", "date" => "Oct 10, 2023", "category" => "3D Cartoon"],
            ];
            foreach ($blogs as $blog): 
            ?>
            <div class="item">
                <div class="blog-item bg-line-dark overflow-hidden bora-24">
                    <a class="main-item" href="<?= base_url('blog-detail'); ?>">
                        <div class="bg-img w-100 overflow-hidden">
                            <img class="w-100 h-100 display-block" src="<?= base_url('assets/images/blog/' . $blog['img']); ?>" alt="<?= $blog['title']; ?>">
                        </div>
                        <div class="infor p-24">
                            <div class="heading flex-item-center gap-8">
                                <div class="text-button-uppercase"><?= $blog['category']; ?></div>
                                <i class="ph-fill ph-dot-outline text-placehover"></i>
                                <div class="caption1 text-placehover"><?= $blog['date']; ?></div>
                            </div>
                            <div class="heading6 mt-8"><?= $blog['title']; ?></div>
                            <div class="text-placehover mt-8"><?= $blog['desc']; ?></div>
                        </div>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

?>