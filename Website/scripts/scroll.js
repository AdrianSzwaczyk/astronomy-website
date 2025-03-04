var path = window.location.pathname;
var page = path.split("/").pop();

if(page==="index.html") {

    $(document).ready(function () {

        if(sessionStorage.getItem("scrolled" + page) != null) {
            $(".wrapper").scrollTop(sessionStorage.getItem("scrolled" + page));
        }

        $(".wrapper").on("scroll", function() {
            sessionStorage.setItem("scrolled" + page, $(".wrapper").scrollTop());
        });
    });
}
else {

    $(document).ready(function () {

        if(sessionStorage.getItem("scrolled" + page) != null) {
            $(window).scrollTop(sessionStorage.getItem("scrolled" + page));
        }
    
        $(window).on("scroll", function() {
            sessionStorage.setItem("scrolled" + page, $(window).scrollTop());
        });
    
    });
}

