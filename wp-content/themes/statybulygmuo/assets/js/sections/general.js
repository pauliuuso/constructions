let scrolling = false;
const sections = ['#construction-about', '#construction-gallery', '#construction-contacts'];
let currentPage = 0;

$(document).ready(function()
{
    SetHeights();
    $(document).scrollTop(0);

    function SetHeights()
    {
        var $screenHeight = $(window).height();
        $('.full-height').css("height", $screenHeight + "px");
    }

    $(window).on('mousewheel', (function(event) {
        // down
        if (event.deltaY < 0 && !scrolling && currentPage < sections.length - 1) {
            scroll(parseInt(currentPage) + 1);
            scrolling = true;
        }
        // up
        else if (event.deltaY > 0 && !scrolling && currentPage > 0) {
            scroll(parseInt(currentPage - 1));
            scrolling = true;
        }
    }));

    function scroll(pageToScroll) {

        let scrollTo = function() {
            currentPage = pageToScroll;
            return sections[pageToScroll];
        }(this);

        $([document.documentElement, document.body]).animate(
            {
                scrollTop: $(scrollTo).offset().top
            },
            500,
            function()
            {
                scrolling = false;
            });
    }

});