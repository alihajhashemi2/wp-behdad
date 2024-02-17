<!-- Header Navigation -->
<div class="header-navigation">
    <div class="container">
        <div class="row">
            <!-- Logo -->
            <div class="col-2">
                <div class="header-navigation-logo">
                    <?php
                    if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }
                    ?>
                </div>
            </div>
            <!-- Navbar -->
            <div class="col-8">
                <div class="header-navigation-bar">
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
            <!-- Icons -->
            <div class="col-2">
                <div class="header-navigation-icons">
                    <ul>
                        <li><a href="#" class="header-navigation-search-icon" title="جستجو"><i class="fa-regular fa-magnifying-glass"></i></a></li>
                        <li><a href="<?php echo esc_url(wp_login_url(get_permalink())); ?>" alt="<?php esc_attr_e('Login', 'textdomain'); ?>" title="حساب کاربری"><i class="fa-regular fa-user"></i></a></li>
                        <li><a href="" title="پسندیده ها"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="" title="سبد خرید"><i class="fa-regular fa-bag-shopping"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>



        <!-- Navbar-Menu -->
        <div class="header-navigation-navbar-menu">
            <div class="header-navigation-navbar-menu-icon">
                <a href=""><i class="fa-regular fa-bars"></i></a>
            </div>
            <div class="header-navigation-navbar-menu-content">
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
            <div class="header-navigation-navbar-menu-closer">
                <a href=""><i class="fa-regular fa-xmark"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Searchbar -->
<div class="searchbar">
    <div class="container">
        <!-- Search Form -->
        <div class="searchbar-form">
            <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
                <!-- <label> -->
                <span class="screen-reader-text"><?php echo _x('Search for:', 'label') ?></span>
                <input type="text" class="search-field" placeholder="<?php echo esc_attr_x('جستجو...', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label') ?>" />
                <!-- </label> -->
                <!-- <input type="submit" class="search-submit" value="<?php echo esc_attr_x('Search', 'submit button') ?>" /> -->
                <!-- closer -->
                <div class="searchbar-closer">
                    <a href="" title="بستن نوار جستجو"><i class="fa-regular fa-xmark"></i></a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- .End Header Navigation -->

<?php get_template_part("/templates/wp-behdad-showcase"); ?>