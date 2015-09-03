/**
 * Created by murat on 8/21/15.
 */
function wResize(){
    $(".pages").css("min-height",$(window).height());
    $("#home").css("min-height",$(window).height());
    $("#home").css("min-width",$(window).width());
    $(".top_menu").css("min-height",$(window).height());
   }

wResize();

$(window).resize(function(){
    wResize();
});


$("#top_menu").click(function(){
    $(".top_menu").show("slide", { direction: "right" }, 700);
    $(".list_menu_1").show();
    $(".list_menu_2").hide();

});
$(".closeAll").click(function(){

    $(".top_menu").hide("slide", { direction: "left" }, 1000);

});

$(".map_link").click(function(){
    $('.close').addClass('closeMapSite');
   $(".list_menu_1").hide('fast');
    $(".list_menu_2").show("slide", { direction: "down" }, 700);
});

$(".closeMapSite").click(function(){

    $(".list_menu_2").hide("slide", { direction: "left" }, 700);

});

$(".map_before").click(function(){
    $(".list_menu_2").hide('fast');
    $(".list_menu_1").show("slide", { direction: "down" }, 700);
});


$('section[data-type="background"]').each(function(){
    var $bgobj = $(this); // создаем объект
    $(window).scroll(function() {
        var yPos = -($(window).scrollTop() / $bgobj.data('speed')); // вычисляем коэффициент
        // Присваиваем значение background-position
        var coords = 'center '+ yPos + 'px';
        // Создаем эффект Parallax Scrolling
        $bgobj.css({ backgroundPosition: coords });
        console.log($bgobj);
    });
});




