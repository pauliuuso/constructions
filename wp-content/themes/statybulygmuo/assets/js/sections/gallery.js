var productsLoaded = false;

function showProductsContents() {
    if(!productsLoaded)
    {
        productsLoaded = true;
        showElement($('.js-gallery-menu-wrapper'), 'fadeInDown d-lg-block', baseTimeout * 4);
    }
}

function showSlide(element) {
    showElement($($(element).find('.js-gallery-image-wrapper')), 'fadeInLeft', 0);
    showElement($($(element).find('.js-gallery-title')), 'fadeInLeft', baseTimeout);
    showElement($($(element).find('.js-gallery-menu-top-line')), 'fadeInDown d-md-block', baseTimeout);
    showElement($($(element).find('.js-gallery-description')), 'fadeInLeft', baseTimeout * 2);
    showElement($($(element).find('.js-gallery-next-year')), 'fadeInRight', baseTimeout * 3);
    showElement($($(element).find('.js-next-story-wrapper')), 'fadeInRight d-md-block', baseTimeout * 4);
    showElement($($(element).find('.js-next-story-line')), 'fadeInRight d-md-block', baseTimeout * 5);
    showElement($('.fp-next'), 'fadeInRight', baseTimeout * 7);
    showElement($('.fp-prev'), 'fadeInLeft', baseTimeout * 7);
}

$(document).ready(function() {
    $(".js-gallery-slideshow > div:gt(0)").hide();

    var galleries = $('.js-gallery-slideshow');

    for(var a = 0; a < galleries.length; a++) {
        setInterval(function(a) {
            $(galleries[a]).find('div:first')
                .fadeOut(1000)
                .next()
                .fadeIn(1000)
                .end()
                .appendTo(galleries[a]);
        }, 3000, a);
    }
});

