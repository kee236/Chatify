// view/site/template/footer.php

<?php
$currentYear = date("Y");
?>

<div id="footer">
    <div class="footer-block bg-black-surface pt-15">
        <div class="container">
            <div class="heading flex-between">
                <!-- Logo and Company Info -->
                <div class="footer-company-infor d-flex flex-column gap-20">
                    <a href="/" class="logo">
                        <!-- ใส่โลโก้ของคุณที่นี่ -->
                        <svg width="46" height="34" viewBox="0 0 46 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clipPath="url(#clip0_8601_1496)">
                                <path d="M0.745605 29.981C1.67613 27.7771 2.54072 25.7314 3.40532 23.6877C6.04243 17.449 8.69272 11.2161 11.3016 4.96611C11.5992 4.25409 11.9495 3.97154 12.7369 4.00168C14.3983 4.06761 16.0653 4.05819 17.7267 4.00356C18.4123 3.98096 18.7118 4.23902 18.9605 4.84367C20.7744 9.25141 22.6148 13.6497 24.4589 18.0462C25.1615 19.7226 25.9243 21.3764 26.5968 23.0642C26.8436 23.6858 27.1638 23.9005 27.8381 23.8968C33.2367 23.8685 38.6371 23.8798 44.0356 23.8779C44.4067 23.8779 44.7759 23.8779 45.1997 23.8779C45.1997 25.9255 45.1997 27.8863 45.1997 29.9339C44.872 29.9508 44.5687 29.981 44.2654 29.981C37.1076 29.9847 29.9516 29.9753 22.7937 29.9979C22.1382 29.9998 21.7709 29.8378 21.5467 29.1842C21.1794 28.118 20.6972 27.0914 20.2998 26.0347C20.1227 25.5619 19.8778 25.3566 19.3391 25.3623C16.4835 25.3905 13.626 25.3585 10.7704 25.4037C10.469 25.4093 10.0301 25.7164 9.89825 25.9989C9.38213 27.1065 8.98845 28.2687 8.49305 29.3857C8.38192 29.6362 8.04286 29.9508 7.80175 29.9546C5.515 29.9979 3.22449 29.981 0.745605 29.981ZM17.9358 19.7867C16.9827 17.3605 16.071 15.038 15.0595 12.463C14.0649 15.0512 13.172 17.3718 12.2453 19.7867C14.176 19.7867 15.9824 19.7867 17.9358 19.7867Z" fill="#3D89FB" />
                                <path d="M45.2506 4.09424C45.2506 5.7688 45.2656 7.36614 45.2355 8.96347C45.2299 9.21023 45.0622 9.49466 44.8889 9.69056C41.7357 13.2601 37.8422 17.4418 34.6513 20.9774C33.3045 20.9755 31.2287 20.9585 29.8423 20.9096C29.8423 20.9096 28.4032 18.4213 28.1847 18.0219C28.2864 17.924 28.3354 17.9278 30.1682 16.0234C31.92 14.2038 33.5268 12.2429 35.3614 10.1596C34.7003 10.1596 34.2482 10.1596 33.7961 10.1596C31.0968 10.1596 28.3976 10.1709 25.6983 10.1389C25.3894 10.1351 24.9091 9.9505 24.8017 9.71505C23.9748 7.89167 23.2213 6.03816 22.4038 4.09424C30.0439 4.09424 37.5785 4.09424 45.2506 4.09424Z" fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_8601_1496">
                                    <rect width="44.5087" height="26" fill="white" transform="translate(0.745605 4)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="footer-navigate">
                    <ul class="flex-item-center gap-40">
                        <li class="flex-center"><a href="/" class="text-subtitle text-white">Home</a></li>
                        <li class="flex-center"><a href="/services" class="text-subtitle text-white">Services</a></li>
                        <li class="flex-center"><a href="/about" class="text-subtitle text-white">About</a></li>
                        <li class="flex-center"><a href="/blog" class="text-subtitle text-white">Blog</a></li>
                        <li class="flex-center"><a href="/contact" class="text-subtitle text-white">Contact</a></li>
                    </ul>
                </div>

                <!-- Social Media Links -->
                <div class="list-social flex-item-center gap-12">
                    <a class="item bg-blue button-blue-hover bora-50 w-40 h-40 flex-center" href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer"><i class="ph-facebook-logo size-20"></i></a>
                    <a class="item bg-blue button-blue-hover bora-50 w-40 h-40 flex-center" href="https://www.tiktok.com/" target="_blank" rel="noopener noreferrer"><i class="ph-tiktok-logo size-20"></i></a>
                    <a class="item bg-blue button-blue-hover bora-50 w-40 h-40 flex-center" href="https://www.line.com/" target="_blank" rel="noopener noreferrer"><i class="ph-line-logo size-20"></i></a>
                    <a class="item bg-blue button-blue-hover bora-50 w-40 h-40 flex-center" href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer"><i class="ph-instagram-logo size-20"></i></a>
                    <a class="item bg-blue button-blue-hover bora-50 w-40 h-40 flex-center" href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer"><i class="ph-youtube-logo size-20"></i></a>
                </div>
            </div>

            <!-- Company Contact Info -->
            <div class="company-contact flex-center gap-16 mt-32 flex-wrap">
                <div class="phone flex-item-center gap-8">
                    <i class="ph-phone size-24 text-placehover"></i>
                    <span class="text-button-uppercase text-placehover">012 345 6789</span>
                </div>
                <span class="text-placehover">|</span>
                <div class="mail flex-item-center gap-8">
                    <i class="ph-envelope size-24 text-placehover"></i>
                    <span class="text-button-uppercase text-placehover">support 786@ismart.com</span>
                </div>
                <span class="text-placehover">|</span>
                <div class="location flex-item-center gap-8">
                    <i class="ph-map-pin size-24 text-placehover"></i>
                    <span class="text-button-uppercase text-placehover">710 ต.บานา อ.เมือง, จ.ปัตตานี 96150 | ประเทศไทย</span>
                </div>
            </div


</div>
    </div>
</div>

<!-- Footer Bottom -->
<div class="footer-bottom bg-black-deep pt-30 pb-30">
    <div class="container">
        <div class="flex-between flex-wrap gap-10">
            <p class="text-body-caption text-gray-600">© <?php echo $currentYear; ?> iSmart - All rights reserved</p>
            <div class="footer-bottom-nav flex-item-center gap-20">
                <a href="/privacy-policy" class="text-body-caption text-gray-600">Privacy Policy</a>
                <a href="/terms-of-service" class="text-body-caption text-gray-600">Terms of Service</a>
            </div>
        </div>
    </div>
</div>

</div>