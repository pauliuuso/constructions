$(document).ready(function()
{
    SetHeights();


    function SetHeights()
    {
        var $screenHeight = $(document).height();

        $("#construction-home").css("height", ($screenHeight - 50) + "px");
        $("#construction-about").css("height", $screenHeight + "px");
        $("#construction-gallery").css("height", $screenHeight + "px");
        $("#construction-contacts").css("height", $screenHeight + "px");
    }

    $(document).scrollsnap({
        snaps: '.snap',
        proximity: 100,
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