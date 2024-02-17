<!-- top-header -->
<div class="top-header">
    <div class="container">
        <div class="top-header-title">ارسال رایگان برای خرید های بالای ۵۰۰ هزار تومان</div>
        <div class="top-header-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location'  => 'top-header',
                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'ul',
            ));
            ?>
        </div>
    </div>
</div>