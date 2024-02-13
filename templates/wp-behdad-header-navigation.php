<!-- Header Navigation -->
<div class="header-navigation">
    <div class="container">
        <!-- Logo -->
        <div class="header-navigation-logo">
            <?php
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            }
            ?>
        </div>
        <!-- Navbar -->
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
        <!-- Icons -->
        <div class="header-navigation-icons">
            <ul>
                <li><a href=""><i class="fa-regular fa-magnifying-glass"></i></a></li>
                <li><a href=""><i class="fa-regular fa-user"></i></a></li>
                <li><a href=""><i class="fa-regular fa-heart"></i></a></li>
                <li><a href=""><i class="fa-regular fa-bag-shopping"></i></a></li>
            </ul>
        </div>
        <!-- Navbar-Menu -->
        <div class="header-navigation-navbar-menu">
            <div class="header-navigation-navbar-menu-icon">
                <a href=""><i class="fa-regular fa-bars"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- .End Header Navigation -->

<?php get_template_part("/templates/wp-behdad-showcase"); ?>