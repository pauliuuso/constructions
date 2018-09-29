var productsLoaded = false;

function showProductsContents() {
    if(!productsLoaded)
    {
        productsLoaded = true;
        showElement($('#construction-gallery .frame'), 'fadeIn', 0);
        showElement($('.js-gallery-item-wrapper'), 'fadeInLeft', baseTimeout * 2);
        showElement($('.js-gallery-item-info-wrapper'), 'fadeInLeft', baseTimeout * 2);
        showElement($('.js-gallery-logo-wrapper'), 'fadeInDown d-lg-block', baseTimeout * 4);
        showElement($('.js-gallery-menu-wrapper'), 'fadeInDown d-lg-block', baseTimeout * 5);
    }
}