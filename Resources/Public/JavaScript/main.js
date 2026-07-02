console.log('sitepackage: onemorephoto (main.js)');

document.addEventListener('DOMContentLoaded', function () {

    // make home active, when on the start page
    if (window.location.pathname !== '/') {
        document.querySelector('.nav-item:first-child').classList.remove('active');
    } else {
        document.querySelector('.nav-item:first-child').classList.add('active');
    }

    // prevent right click on images
    document.addEventListener('contextmenu', function (e) {
        if (e.target.tagName === 'IMG') {
            e.preventDefault();
        }
    });
});
