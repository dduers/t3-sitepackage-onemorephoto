console.log('sitepackage: onemorephoto (main.js)');

$(document).ready(function () {

    // make home active, when on the start page
    if (window.location.pathname !== '/') {
        $('.nav-item:first-child').removeClass('active');
    } else {
        $('.nav-item:first-child').addClass('active');
    }

    // // make card links look like buttons
    // $('.card-link').addClass('btn btn-default');

    // prevent right click on images
    $(document).on('contextmenu', 'img', function () {
        return false;
    });

    // // remove xing button from news article
    // $('.news .shariff-button.xing').remove();

    // // make news share buttons grey
    // $('.news .shariff .theme-color').addClass('theme-grey').removeClass('theme-color');
});
