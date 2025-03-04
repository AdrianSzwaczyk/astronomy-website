$("#rs").css("display" , "none");

$("#submit").click(function() {
    $( "#dialog" ).dialog({
        resizable: false,
        draggable: false,
        width: 600,
        modal:true,
        show: {effect: 'fade', duration: 200},
        hide: {effect: 'fade', duration: 200},
        buttons: [
            {
                text: "Confirm",
                id: "confirm",
                click: function() {
                    $(this).dialog("close");
                    $("#rs").click();
                }
            },
            {
                text: "Cancel",
                id: "cancel",
                click: function() {
                    $(this).dialog("close");
                }
            }
        ],
        create: function (event) {
            $(event.target).parent().css({ 'position': 'fixed', "left": 50, "top": 150 });
        }
    });
});
