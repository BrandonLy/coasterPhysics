$(".accordion-content").hide();
$(".accordion-title").click(function () {
    $(this).next().toggle("fast");
    if($(".accordion-title").hasClass("closed")) {
        $(".accordion-title").removeClass("closed").addClass("open");
    } else {
        $(".accordion-title").removeClass("open").addClass("closed");
    }
});

$(document).scroll(function() { 
   if($(window).scrollTop() > 0) {
     $("header").removeClass("topHeader").addClass("scrollHeader");
   } else {
     $("header").removeClass("scrollHeader").addClass("topHeader");
   }
});