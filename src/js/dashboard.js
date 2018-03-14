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

    $('#tabs li').on('click', function () {
        var tab = $(this).data('tab');

        $('#tabs li').removeClass('is-active');
        $(this).addClass('is-active');

        $('#tab-content .column').removeClass('is-active');
        $('.column[data-content="' + tab + '"]').addClass('is-active');
    });
});