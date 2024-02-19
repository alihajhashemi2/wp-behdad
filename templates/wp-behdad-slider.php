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
        </div>
    </div>
</div>