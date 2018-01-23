$(document).ready(function () {
    // buka tutup navbar hamburger
    $(".navbar-burger").click(function () {
        $("#navbarMenuHeroC").toggleClass("is-active");
        $(".navbar-burger > span").toggleClass("is-active");
        $(".navbar-item").addClass("has-text-success-reverse");      
    });

    $("#hamburgerMenu").click(function () {
        $("#sideNav").toggleClass("is-toggle");
    });
});