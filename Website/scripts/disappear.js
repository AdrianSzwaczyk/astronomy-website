$(document).ready(function(){
    $(".a").css({"opacity":"0", "pointer-events":"none"});
});

$(".wrapper").scroll(function() {
    if($(".wrapper").scrollTop() > 2000) {
        $(".b").css({"opacity":"0", "pointer-events":"none"});
    }
    else {
        $(".b").css({"opacity":"1", "transition":"opacity 1s", "pointer-events":"auto"});
    }
    if($(".wrapper").scrollTop() < 400) {
        $(".a").css({"opacity":"0", "pointer-events":"none"});
    }
    else {
        $(".a").css({"opacity":"1", "transition":"opacity 1s", "pointer-events":"auto"});
    }
 });

$(function() {
    $("#planets div a").hover(function() {
        $('#planets div').css({"filter": "brightness(50%)", "transition": "filter 1s"});
        $(this).parent().css({"filter": "brightness(100%)", "transition": "filter 1s"});
        console.log('#planets div.' + $(this).attr('class'));
    }, function() {
        $('#planets div').css({"filter": "brightness(100%)", "transition": "filter 1s"});
    });
});

