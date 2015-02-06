$(".accordion-content").hide();
$(".accordion-title").click(function () {
    $(this).next().toggle("slow");
});