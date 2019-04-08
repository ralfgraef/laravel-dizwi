var toggle = false;

$("#hamburger").click(function() {
    toggle = !toggle;
    if (toggle) {
        $("#mySidebar").animate({ left: -200 });
        $("#main").animate({ left: 100 });
        $(this)
            .find(".fas")
            .removeClass("fas fa-arrow-left")
            .addClass("fas fa-arrow-right");
    } else {
        $("#main").animate({ left: 250 });
        $("#mySidebar").animate({ left: 0 });
        $(this)
            .find(".fas")
            .removeClass("fas fa-arrow-right")
            .addClass("fas fa-arrow-left");
    }
});
