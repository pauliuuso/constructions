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
}
