$(document).ready(function() {

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })

      
    $("#link-home").click(function() {
        let res = 0;
        $('html, body').animate({
            scrollTop: res
        }, 2000);
    });

    $("#link-about").click(function() {
        let res = $("#about").offset().top - 120;
        $('html, body').animate({
            scrollTop: res
        }, 2000);
    });

    $("#link-education").click(function() {
        let res = $("#school").offset().top - 70;
        $('html, body').animate({
            scrollTop: res
        }, 2000);
    });

    $("#link-skills").click(function() {
        let res = $("#skills").offset().top - 70;
        $('html, body').animate({
            scrollTop: res
        }, 2000);
    });

    $("#link-portfolio").click(function() {
        let res = $("#portfolio").offset().top - 80;
        $('html, body').animate({
            scrollTop: res
        }, 2000);
    });

    $("#link-hobbies").click(function() {
        let res = $("#hobbies").offset().top - 90;
        $('html, body').animate({
            scrollTop: res
        }, 2000);
    });

    $("#link-contact").click(function() {
        let res = $("#footer").offset().top;
        $('html, body').animate({
            scrollTop: res
        }, 2000);
    });



    var i = 0;
    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        if (scroll > 2600){
           while(i < 80){
            setInterval(function(){
                $("#skill-bar-fonce").css("width", i + "%").attr("aria-valuenow", i);
                
            },1000);
            i = i + 1;
           }
        }
    });






});