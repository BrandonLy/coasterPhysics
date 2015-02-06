$(".accordion-content").hide();
$(".accordion-title").click(function () {
    $(this).next().toggle("slow");
});

$(document).scroll(function() { 
   if($(window).scrollTop() > 0) {
     $("header").removeClass("topHeader").addClass("scrollHeader");
   } else {
     $("header").removeClass("scrollHeader").addClass("topHeader");
   }
});