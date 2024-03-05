<div id="footer" class="footer">
    <div class="footer-content">
        <div class="container">
            <!-- Newsletter -->
            <div class="footer-newsletter">
                <!-- Newsletter Title -->
                <div class="footer-newsletter-title">
                    عضویت - خبرنامه
                </div>
                <!-- Newsletter Description -->
                <div class="footer-newsletter-des">
                    جزو اولین نفر ها باشید که از تخفیفات ویژه،اخبار محصولات و جشنواره ها مطلع میشوند.
                </div>
                <!-- Newsletter Form -->
                <form action="" class="footer-newsletter-form">
                    <input type="email" placeholder="ایمیل شما">
                    <input type="submit" value="عضویت در خبرنامه">
                </form>
            </div>
            <!-- Navigation -->
            <div class="footer-navigation">
                <div class="footer-navigation-shop">
                    خرید محصولات
                    <?php
                    wp_nav_menu(array(
                        'theme_location'  => 'footer_shop',
                        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                        'container'       => 'ul',
                    ));
                    ?>
                </div>
                <div class="footer-navigation-customers">
                    فروشنده
                    <?php
                    wp_nav_menu(array(
                        'theme_location'  => 'footer_customers',
                        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                        'container'       => 'ul',
                    ));
                    ?>
                </div>
                <div class="footer-navigation-contact-us">
                    راه های ارتباطی
                    <?php
                    wp_nav_menu(array(
                        'theme_location'  => 'footer_contact',
                        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                        'container'       => 'ul',
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright -->
    <div class="footer-copyright">
        <div class="container">
            <!-- Description -->
            <div class="footer-copyright-des">
                © کلیه حقوق محفوظ است ۱۴۰۲
            </div>
            <!-- Icons -->
            <div class="footer-copyright-icons">
                <ul>
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>