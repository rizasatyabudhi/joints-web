$(document).ready(function () {
    // buka tutup navbar hamburger
    $(".navbar-burger").click(function () {
        $("#navbarMenuHeroC").toggleClass("is-active");
        $(".navbar-burger > span").toggleClass("is-active");
        $(".navbar-item").addClass("has-text-twitter-reverse");
        $("#loginButton").removeClass("is-inverted");
    });

    // mengganti login button menjadi warna hijau
    $("#loginButton").addClass("is-twitter");
    // logo c-comp
    $("#logoJoints").attr("src", "http://joints.id/images/ccomp/logoccomp-white.png");

    // add id footer
    $("footer").attr("id", "footer");
    // fungsi scroll
    $("#contact").click(function () {
        $('html, body').animate({
            scrollTop: $("#footer").offset().top
        }, 1000);
    });

    // change background footer
    $("footer").addClass("is-footer-ccomp");
    
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
            // mennganti menjadi warna hijau
            $(".navbar-item").addClass("has-text-twitter-reverse");
            // login button
            $("#loginButton").removeClass("is-inverted");
            // logo joints
            $("#logoJoints").attr("src", "http://joints.id/images/ccomp/logoccomp.png");
        } else {
            // navbar
            $(".navbar").removeClass("is-fixed-top");
            // login button
            $("#loginButton").addClass("is-inverted");
            // logo joints
            $("#logoJoints").attr("src", "http://joints.id/images/ccomp/logoccomp-white.png");
        }

        // conditional navbar muncul saat di scroll keatas
        $(".navbar").toggleClass("hiddenUp", wScroll > prev);
        prev = wScroll;

    });
});