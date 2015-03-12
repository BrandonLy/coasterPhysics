$(".accordion-content").hide();
$(".accordion-title").click(function () {
    $accordions = $(".accordion-content");
    $accordions.not($(this).next()).hide("fast");
    $(this).next().toggle("fast");
    if ($(this).hasClass("closed")) {
        $(this).removeClass("closed").addClass("open");
    } else {
        $(this).removeClass("open").addClass("closed");
    }
});

$(document).scroll(function () {
    if ($(window).scrollTop() > 0) {
        $("header").removeClass("topHeader").addClass("scrollHeader");
    } else {
        $("header").removeClass("scrollHeader").addClass("topHeader");
    }
});

function openMobileNav() {
    if ($("#nav").hasClass("nav-closed")) {
        $("#nav").removeClass("nav-closed");
    } else {
        $("#nav").addClass("nav-closed");
    }
}