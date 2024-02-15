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
});
