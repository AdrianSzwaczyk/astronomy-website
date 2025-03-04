$(function() {

    setInterval(() => {
        var input = $("#form").serializeArray();
        $.each(input, function(i, inp) {
            localStorage.setItem(inp.name, inp.value);
        });
    }, 500);
    

    var input = $("#form").serializeArray();
    $.each(input, function(i, inp) {
        $("[name='" + inp.name + "']").val(localStorage.getItem(inp.name));
    });

});

$(function(){
    $("#form").validate({
        rules: {
        gender: "required",
        email: "required email",
        },
        messages: {
        email: {
            email: "Invalid email adress"
        }
        }
    });
});

$(function(){
    $("#form").tooltip({
        tooltipClass: "tooltip",
        position: { my: "right top-20", at: "left bottom", collision: "flipfit" }
    });
});

$(function(){
    $("#tel").focus(function(){
        $(".tooltip").addClass("no-tt");
    });
});
