$(document).ready(function()
{
    // SetHeights();


    function SetHeights()
    {
        var $screenHeight = $(document).height();

        $("#construction-about").css("height", $screenHeight + "px");
        $("#construction-gallery").css("height", $screenHeight + "px");
        $("#construction-contacts").css("height", $screenHeight + "px");
    }

    $(document).scrollsnap({
        snaps: '.snap',
        proximity: 300,
        latency: 100
    });

});

function ScrollTo(element)
{
    console.log(element);
    $('html, body').animate({
        scrollTop: $(element).offset().top
    }, 500);
}