// Searchbar Section Scripts
jQuery(function () {
    jQuery('.header-navigation-search-icon').on('click', function (e) {
        e.preventDefault();
        jQuery('.searchbar').slideToggle();
    });
    jQuery('.searchbar-closer').on('click', function (e) {
        e.preventDefault();
        jQuery('.searchbar').slideUp();
    });
});

// Cart Slider Scripts
jQuery(function () {
    jQuery('.header-navigation-cart-icon').on('click', function (e) {
        e.preventDefault();
        jQuery('.cart-slider').toggleClass('active');
    });
    jQuery('.cart-slider-closer').on('click', function () {
        jQuery('.cart-slider').removeClass('active');
    });
});

// Slider Section Scripts
jQuery(function () {
    // Opening Silder
    jQuery(
        '.header-navigation .container .row .header-navigation-icons ul .header-navigation-navbar-icon'
    ).on('click', function (e) {
        e.preventDefault();
        jQuery('#slider').addClass('slider-active');
    });
    // Closing Slider
    jQuery('#slider .container .slider-content .slider-closer').on(
        'click',
        function (e) {
            e.preventDefault();
            jQuery('#slider').removeClass('slider-active');
        }
    );
    // Dropdown Settings
    jQuery(
        '#slider .container .slider-content .slider-navigation .menu-header-navigation-container ul li a'
    ).on('click', function () {
        jQuery(this).siblings('.sub-menu').slideToggle('fast');
    });
});
