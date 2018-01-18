$(document).ready(function () {
    // buka tutup navbar hamburger
    $(".navbar-burger").click(function () {
        $("#navbarMenuHeroC").toggleClass("is-active");
        $(".navbar-burger > span").toggleClass("is-active");
        $("#loginButton").removeClass("is-inverted");
    });

    // mengganti login button menjadi warna pink
    $("#loginButton").addClass("is-pink");

    var prev = 53;
    // console.log(prev + " prev awal");

    $(window).scroll(function () {
        // nilai scroll
        var wScroll = $(window).scrollTop();
        // console.log(wScroll + " wScroll");
        // console.log(prev + " prev akhir");

        // conditional navbar fixed dan logo joints
        if (wScroll > 53) {
            // navbar
            $(".navbar").addClass("is-fixed-top");
            // login button
            $("#loginButton").removeClass("is-inverted");
            // logo joints
            $("#logoJoints").attr("src", "images/logo-pink.png");
        } else {
            // navbar
            $(".navbar").removeClass("is-fixed-top");
            // login button
            $("#loginButton").addClass("is-inverted");
            // logo joints
            $("#logoJoints").attr("src", "images/index/logo.png");
        }

        // conditional navbar muncul saat di scroll keatas
        $(".navbar").toggleClass("hiddenUp", wScroll > prev);
        prev = wScroll;

    });
});