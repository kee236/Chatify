# ismartai Homepage - HTML + PHP + TailwindCSS Specification

## 1. Project Structure

```
ismartai-web/
├── index.php
├── assets/
│   ├── css/style.css
│   ├── js/main.js
│   ├── images/
│   │   └── ismartai_logo_color.svg, hero-illustration.png, etc.
│   ├── icons/
│   │   └── feature-auto-reply.svg, platform-messenger.svg, social-facebook.svg, etc.
│   └── logos/
│       └── logo-shopee.png, logo-lazada.png, etc.
├── templates/
│   ├── header.php
│   ├── hero_section.php
│   ├── key_features_section.php
│   ├── integrations_section.php
│   ├── why_choose_us_section.php
│   ├── pricing_snippet_section.php
│   ├── support_section.php
│   ├── blog_feed_section.php
│   ├── newsletter_section.php
│   └── footer.php
```

---

## 2. index.php
```php
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ismartai - แชทบอท ระบบจัดการร้านค้าอัตโนมัติ</title>
  <meta name="description" content="ismartai แชทบอท ระบบจัดการร้านค้าอัตโนมัติครบวงจร ตอบแชท ปิดการขาย จัดการออเดอร์ อัตโนมัติ 24 ชั่วโมง">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="font-prompt text-gray-800 bg-white">

  <?php include 'templates/header.php'; ?>

  <main>
    <?php include 'templates/hero_section.php'; ?>
    <?php include 'templates/key_features_section.php'; ?>
    <?php include 'templates/integrations_section.php'; ?>
    <?php include 'templates/why_choose_us_section.php'; ?>
    <?php include 'templates/pricing_snippet_section.php'; ?>
    <?php include 'templates/support_section.php'; ?>
    <?php include 'templates/newsletter_section.php'; ?>
  </main>

  <?php include 'templates/footer.php'; ?>

  <script src="assets/js/main.js"></script>
</body>
</html>
```

---

## 3. TailwindCSS Setup (`style.css`)
```css
@tailwind base;
@tailwind components;
@tailwind utilities;
```

Run Tailwind build:
```bash
npx tailwindcss -i ./assets/css/style.css -o ./assets/css/output.css --watch
```

---

## 4. Included Sections
Each section (e.g., `hero_section.php`, `key_features_section.php`) should:
- Use Tailwind utility classes
- Follow the structure defined in your spec (e.g., H1 + Paragraph + Button in Hero)
- Reference icons/images via `assets/icons/` and `assets/images/`

---

## 5. Assets Checklist
- `/assets/images/ismartai_logo_color.svg`
- `/assets/images/hero-illustration.png`
- `/assets/icons/feature-*.svg`
- `/assets/icons/platform-*.svg`
- `/assets/icons/social-*.svg`
- `/assets/logos/logo-*.png`

---

## 6. Font and Color Guide
- **Font:** Prompt (Google Fonts)
- **Primary Colors:** `bg-gradient-to-r from-indigo-500 to-purple-600`, `text-indigo-600`
- **Background Sections:** `bg-white`, `bg-gray-50`, `bg-indigo-50`
- **Buttons:**
  - Primary: `bg-indigo-600 text-white hover:bg-indigo-700`
  - Secondary: `border border-indigo-600 text-indigo-600 hover:bg-indigo-50`

---

## 7. Ready to Code
Use the structure above to generate full HTML+PHP code for each section.
Let me know if you want:
- All PHP files ready-to-deploy
- One section coded right now (e.g., Hero)
- Everything zipped up for download

ผมได้จัดโครงสร้างโปรเจกต์ ismartai Homepage พร้อมโค้ด index.php, การตั้งค่า TailwindCSS, รายการเทมเพลต, และรายการไฟล์ assets ที่ต้องใช้ทั้งหมดไว้ให้แล้วในรูปแบบ markdown อย่างละเอียดครับ

เนื้อหาประกอบด้วย:

โครงสร้างโฟลเดอร์/ไฟล์

ตัวอย่าง index.php

วิธีตั้งค่า Tailwind CSS

รายการ assets ที่ต้องจัดเตรียม

แนวทางใช้โครงสร้าง HTML พร้อม Tailwind classes


ขั้นตอนต่อไป: คุณอยากให้ผมสร้าง:

1. โค้ด PHP/HTML จริงสำหรับแต่ละไฟล์ใน templates/


2. ZIP พร้อม deploy


3. GitHub repo clone-ready



เลือกเลยครับ จะได้เริ่มสร้างให้ครบทุกส่วนทันที 🔧✨

