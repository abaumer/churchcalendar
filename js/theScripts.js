$(document).ready(function() {

    // Set Current Year Block
    var seasonid = $("#theseason").attr("data-season");
    $( "#block" + seasonid ).addClass("current");

    // Set ScrollTo for CalBlocks
    $(".page").localScroll({
			duration: 600
    });
});