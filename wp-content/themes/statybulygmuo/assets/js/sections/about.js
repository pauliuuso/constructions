$(document).ready(function() {

    let baseTimeout = 200;
    const timeoutStep = 300;
    const textTimeout = 400;

    const namasAnimation = loadAnimation('namas-icon', 'wp-content/themes/statybulygmuo/json/rekonstrukcija.json');
    const rekonstrukcijaAnimation = loadAnimation('rekonstrukcija-icon', 'wp-content/themes/statybulygmuo/json/apdaila.json');
    const komercijaAnimation = loadAnimation('komercija-icon', 'wp-content/themes/statybulygmuo/json/rekonstrukcija.json');
    const apdailaAnimation = loadAnimation('apdaila-icon', 'wp-content/themes/statybulygmuo/json/apdaila.json');

    const logoAnimation = loadAnimation('logo-animated', 'wp-content/themes/statybulygmuo/json/rekonstrukcija.json');
    const houseAnimation = loadAnimation('about-house-animated', 'wp-content/themes/statybulygmuo/json/pastatas.json');
    const beamAnimation = loadAnimation('about-text-beam-animated', 'wp-content/themes/statybulygmuo/json/bruksnys.json');

    const iconAnimations = [namasAnimation, rekonstrukcijaAnimation, komercijaAnimation, apdailaAnimation];
    const iconText = [$('.js-namas-icon-text'), $('.js-rekonstrukcija-icon-text'), $('.js-komercija-icon-text'), $('.js-apdaila-icon-text')];

    baseAppear(baseTimeout);

    // logoAnimation.addEventListener('data_ready', function()
    // {
    //     logoAnimation.play();
    // });

    houseAnimation.addEventListener('data_ready', function()
    {
        houseAnimation.play();
    });

    // beamAnimation.addEventListener('data_ready', function ()
    // {
    //     beamAnimation.play();
    // });

    // namasAnimation.addEventListener('data_ready', function()
    // {
    //     let timeOut = timeoutStep;
    //
    //     for(let a = 0; a < iconAnimations.length; a++) {
    //         setTimeout(function() {
    //             iconAnimations[a].play();
    //             fadeIn(iconText[a], textTimeout);
    //         }, baseTimeout + timeOut * a);
    //     }
    // });


    function baseAppear(timeout) {
        setTimeout(function() {
            $('.js-about-slide-down').addClass('fadeInDown');
            $('.js-about-slide-down').removeClass('visibility-hidden');

            $('.js-about-slide-up').addClass('fadeInUp');
            $('.js-about-slide-up').removeClass('visibility-hidden');

            menuAppear($('.js-about-menu-wrapper'));
        }, timeout);
    }

    function menuAppear(menu) {
        elements = menu.find('.js-element');

        let timeOut = timeoutStep;

        for(let a = 0; a < elements.length; a++) {
            setTimeout(function() {
                $(elements[a]).addClass('fadeInDown');
                $(elements[a]).removeClass('visibility-hidden');
            }, timeOut * a);
        }
    }

    function loadAnimation(containerId, path) {
        return lottie.loadAnimation({
            container: document.getElementById(containerId),
            renderer: 'svg',
            loop: false,
            autoplay: false,
            path: path
        });
    }

    function fadeIn(element, timeout) {
        setTimeout(function() {
            element.removeClass('visibility-hidden');
            element.addClass('fadeIn');
        }, timeout);
    }

});