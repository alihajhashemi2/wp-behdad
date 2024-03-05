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
                        <li><a href="#" class="header-navigation-search-icon" title="جستجو"><i class="fa-light fa-magnifying-glass"></i></a></li>
                        <li><a href="<?php echo esc_url(wp_login_url(get_permalink())); ?>" alt="<?php esc_attr_e('Login', 'textdomain'); ?>" title="حساب کاربری"><i class="fa-light fa-user"></i></a></li>
                        <li><a href="" title="پسندیده ها"><i class="fa-light fa-heart"></i></li>
                        <li><a href="" title="سبد خرید" class="header-navigation-cart-icon"><i class="fa-light fa-bag-shopping"></i></a></li>
                        <li class="header-navigation-navbar-icon">
                            <a href=""><i class="fa-light fa-bars"></i></a>
                        </li>
                    </ul>
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
                        <a href="" title="بستن نوار جستجو"><i class="fa-light fa-x"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Cart Slider -->
<div class="cart-slider">
    <div class="cart-slider-closer">
        <a href="#">بستن</a>
    </div>
    <div class="cart-slider-products">
        <?php
        global $woocommerce;
        $items = $woocommerce->cart->get_cart();

        foreach ($items as $item => $values) {
            $_product =  wc_get_product($values['data']->get_id());
            //product image
            $getProductDetail = wc_get_product($values['product_id']);
            echo $getProductDetail->get_image(); // accepts 2 arguments ( size, attr )

            echo "<b>" . $_product->get_title() . '</b>  <br> Quantity: ' . $values['quantity'] . '<br>';
            $price = get_post_meta($values['product_id'], '_price', true);
            echo "  Price: " . $price . "<br>";
            /*Regular Price and Sale Price*/
            echo "Regular Price: " . get_post_meta($values['product_id'], '_regular_price', true) . "<br>";
            echo "Sale Price: " . get_post_meta($values['product_id'], '_sale_price', true) . "<br>";
        }
        ?>
    </div>
</div>


<!-- .End Header Navigation -->