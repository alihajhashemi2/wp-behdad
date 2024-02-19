<!-- Slider -->
<div id="slider">
    <div class="container">
        <!-- Slider Content -->
        <div class="slider-content">
            <!-- Slider Closer -->
            <div class="slider-closer">
                <a href="">
                    <i class="fa-regular fa-x"></i>
                </a>
            </div>
            <!-- Slider Navigation -->
            <div class="slider-navigation">
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
            <!-- Slider Subscribe -->
            <div class="slider-sub">
                <div class="slider-sub-title">اشتراک</div>
                <div class="slider-sub-des">
                    <a href="">برای دسترسی به قابلیت هایی بیشتر از یک کاربر معمولی اشتراک تهیه کنید <i class="fa-regular fa-arrow-left"></i></a>
                </div>
            </div>
            <!-- Slider Help -->
            <div class="slider-help">
                <div class="slider-help-title">
                    پشتیبانی
                </div>
                <?php
                wp_nav_menu(array(
                    'theme_location'  => 'slider-help',
                    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'ul',
                ));
                ?>
            </div>
            <!-- Slider Footer -->
            <div class="slider-footer">
                © کلیه حقوق مطعلق به ایران تم می باشد. ۱۴۰۲
            </div>
        </div>
    </div>
</div>