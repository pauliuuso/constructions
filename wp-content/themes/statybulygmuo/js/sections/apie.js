$(document).ready(function() {

    const namasTimeout = 500;
    const rekonstrukcijaTimeout = 800;
    const komercijaTimeout = 1100;
    const apdailaTimeout = 1400;


    let namasAnimation = lottie.loadAnimation({
        container: document.getElementById('namas-icon'),
        renderer: 'svg',
        loop: false,
        autoplay: false,
        path: "wp-content/themes/statybulygmuo/json/rekonstrukcija.json"
    });

    let rekonstrukcijaAnimation = lottie.loadAnimation({
        container: document.getElementById('rekonstrukcija-icon'),
        renderer: 'svg',
        loop: false,
        autoplay: false,
        path: "wp-content/themes/statybulygmuo/json/apdaila.json"
    });

    let komercijaAnimation = lottie.loadAnimation({
        container: document.getElementById('komercija-icon'),
        renderer: 'svg',
        loop: false,
        autoplay: false,
        path: "wp-content/themes/statybulygmuo/json/apdaila.json"
    });

    let apdailaAnimation = lottie.loadAnimation({
        container: document.getElementById('apdaila-icon'),
        renderer: 'svg',
        loop: false,
        autoplay: false,
        path: "wp-content/themes/statybulygmuo/json/rekonstrukcija.json"
    });

    namasAnimation.addEventListener('data_ready', function()
    {
        setTimeout(function() {
            namasAnimation.play();
        }, namasTimeout);

        setTimeout(function() {
            rekonstrukcijaAnimation.play();
        }, rekonstrukcijaTimeout);

        setTimeout(function() {
            komercijaAnimation.play();
        }, komercijaTimeout);

        setTimeout(function() {
            apdailaAnimation.play();
        }, apdailaTimeout);

    });

    namasAnimation.addEventListener('complete', function()
    {
        $('.js-namas-icon-text').removeClass('visibility-hidden');
        $('.js-namas-icon-text').addClass('fadeIn');
    });

    rekonstrukcijaAnimation.addEventListener('complete', function()
    {
        $('.js-rekonstrukcija-icon-text').removeClass('visibility-hidden');
        $('.js-rekonstrukcija-icon-text').addClass('fadeIn');
    });

    komercijaAnimation.addEventListener('complete', function()
    {
        $('.js-komercija-icon-text').removeClass('visibility-hidden');
        $('.js-komercija-icon-text').addClass('fadeIn');
    });

    apdailaAnimation.addEventListener('complete', function()
    {
        $('.js-apdaila-icon-text').removeClass('visibility-hidden');
        $('.js-apdaila-icon-text').addClass('fadeIn');
    });

});