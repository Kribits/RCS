$(document).ready(function() {

    //Pārbaudām vai ekrāns ir Top vai paritināts uz leju
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.btn-toTop').fadeIn(); // Parādām pogu
            $('#navi-bar').removeClass("bg-dark"); // noņemam bg krāsas klasi
            $("#navi-bar").addClass("bg-light"); // ieliekam jaunu bg krāsas klasi
        } else {
            $('.btn-toTop').fadeOut(); // Slēpjam pogu
            $('#navi-bar').removeClass("bg-light");
            $("#navi-bar").addClass("bg-dark"); // ieliekam atpakaļ bg krāsas klasi
        }
    });

    //Klikšķis uz pogas aizritina ekrānu uz sākumu
    $('.btn-toTop').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });

});