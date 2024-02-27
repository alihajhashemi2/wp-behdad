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
                    <input type="submit" value="عضویت">
                </form>
            </div>
            <!-- Navigation -->
            <div class="footer-navigation">
                <?php
                if (wp_nav_menu()) {
                    wp_nav_menu(array(
                        'theme_location'  => 'header-navigation',
                        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                        'container'       => 'ul',
                    ));
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Copyright -->
    <div class="footer-copyright">
        <div class="container">
            <!-- Description -->
            <div class="footer-copyright-des">
                © کلیه حقوق مطعلق به ایران تم می باشد ۱۴۰۲
            </div>
            <!-- Icons -->
            <div class="footer-copyright-icons"></div>
        </div>
    </div>
</div>