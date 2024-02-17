jQuery(function () {
    console.log('fsadjfklasdflj');
    // Header Navigation Searchbar
    jQuery('.header-navigation-search-icon').on('click', function (e) {
        e.preventDefault();
        jQuery('.searchbar').slideToggle();
    });
    jQuery('.searchbar-closer').on('click', function (e) {
        e.preventDefault();
        jQuery('.searchbar').slideUp();
    });

    // Header Navigation on Mobile
    jQuery(
        '.header-navigation .container .header-navigation-navbar-menu>.header-navigation-navbar-menu-icon>a'
    ).on('click', function (e) {
        e.preventDefault();
        jQuery(
            '.header-navigation .container .header-navigation-navbar-menu .header-navigation-navbar-menu-content .menu-header-navigation-container'
        ).slideDown();
        jQuery(
            '.header-navigation .container .header-navigation-navbar-menu .header-navigation-navbar-menu-closer '
        ).slideDown();
    });
    jQuery(
        '.header-navigation .container .header-navigation-navbar-menu .header-navigation-navbar-menu-closer '
    ).on('click', function (e) {
        e.preventDefault();
        jQuery(
            '.header-navigation .container .header-navigation-navbar-menu .header-navigation-navbar-menu-content .menu-header-navigation-container'
        ).slideUp();
        jQuery(
            '.header-navigation .container .header-navigation-navbar-menu .header-navigation-navbar-menu-closer'
        ).hide();
    });
    jQuery(
        '.header-navigation-navbar-menu-content>.menu-header-navigation-container>ul>li>a'
    ).on('click', function () {
        jQuery(
            '.header-navigation .container .header-navigation-navbar-menu .header-navigation-navbar-menu-content>.menu-header-navigation-container>ul>li>ul'
        ).slideToggle();
    });
    jQuery(
        '.header-navigation-navbar-menu-content>.menu-header-navigation-container>ul>li>ul>li>a'
    ).on('click', function () {
        jQuery(
            '.header-navigation-navbar-menu-content>.menu-header-navigation-container>ul>li>ul>li>ul'
        ).slideToggle();
    });
});
