$(document).ready(function () {
    var index = 0;

    $(window).scroll(function () {
        // sticky navbar on scroll script
        if (this.scrollY > 20) {
            $('.navbar').addClass("sticky");
        } else {
            $('.navbar').removeClass("sticky");
        }
    });

    // slide-up script
    $('.scroll-up-btn').click(function () {
        $('html').animate({ scrollTop: 0 });
        // removing smooth scroll on slide-up button click
        $('html').css("scrollBehavior", "auto");
    });

    // toggle menu/navbar script
    $('.menu-btn').click(function () {
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });

    // typing text animation script
    var typed = new Typed(".typing", {
        strings: ["YouTuber", "Developer", "Blogger", "Designer", "Freelancer"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });

    var arrImagenes = ['banner.jpg', 'banner2.jpg', 'banner3.jpg'];
    //cambiar la imagen del parallax cada x segundos
    $(function () {

        setInterval(changeImage, 4000);

    });

    function changeImage() {
        $('.home').css("background-image", 'url(images/' + arrImagenes[index] + ')');
        index++;
        if (index == 3)
            index = 0;
    }

    // If a link has a dropdown, add sub menu toggle.
    $('nav ul li div img:not(:only-child)').click(function (e) {
        $(this).siblings('.navbar-dropdown').slideToggle("slow");

        // Close dropdown when select another dropdown
        $('.navbar-dropdown').not($(this).siblings()).hide("slow");
        e.stopPropagation();
    });

    // Click outside the dropdown will remove the dropdown class
    $('html').click(function () {
        $('.navbar-dropdown').hide();
    });

});