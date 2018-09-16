$(document).ready(function()
{
    SetHeights();

    function SetHeights()
    {

        var $screenHeight = $(window).height();

        $("#construction-about").css("min-height", $screenHeight + "px");
        $("#construction-gallery").css("min-height", $screenHeight + "px");
        $("#construction-contacts").css("min-height", $screenHeight + "px");
    }

    $(document).scrollsnap({
        snaps: '.snap',
        proximity: 300,
        latency: 100
    });

});

function ScrollTo(element)
{
    $('html, body').animate({
        scrollTop: $(element).offset().top
    }, 500);
}