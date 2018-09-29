var baseTimeout = 100;
var aboutLoaded = false;

function showAboutContents()
{
    if(!aboutLoaded)
    {
        aboutLoaded = true;
        showElement($('#construction-about .frame'), 'fadeIn', baseTimeout);
        showElement($('.js-about-title-wrapper'), 'fadeIn', baseTimeout * 3);
        showElement($('.js-about-text-wrapper'), 'fadeIn', baseTimeout * 4);
        playVivusAnimation('logo-animated', 40, '/svg/logotipas.svg', baseTimeout * 5);
        showElement($('#about-house-animated'), 'fadeIn d-md-block', baseTimeout * 6);
        playVivusAnimation('about-house-animated', 150, '/svg/daugiabutis.svg', baseTimeout * 6);
        showElement($('#about-roof-animated'), 'fadeIn', baseTimeout * 6);
        playVivusAnimation('about-roof-animated', 150, '/svg/fragmentas.svg', baseTimeout * 6);
        showElement($('.js-about-logo-wrapper'), 'fadeInDown d-lg-block', baseTimeout * 7);
        showElement($('.js-about-menu-wrapper'), 'fadeInDown d-lg-block', baseTimeout * 8);
        showElement($('.js-about-contacts-wrapper'), 'fadeInUp d-lg-block', baseTimeout * 9);
        showElement($('.js-about-contacts-wrapper-mobile'), 'fadeInUp', baseTimeout * 10);
    }
}