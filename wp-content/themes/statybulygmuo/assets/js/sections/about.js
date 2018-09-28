$(window).ready(function() {

    var baseTimeout = 200;
    // playVivusAnimation('logo-animated', 200, '/svg/logotipas.svg');

    showContents();

    function showContents()
    {
        showElement($('#construction-about .frame'), 'fadeIn', baseTimeout);
        showElement($('.js-about-title-wrapper'), 'fadeIn', baseTimeout * 3);
        showElement($('.js-about-text-wrapper'), 'fadeIn', baseTimeout * 4);
        showElement($('#about-house-animated'), 'fadeIn d-md-block', baseTimeout * 5);
        playVivusAnimation('about-house-animated', 150, '/svg/daugiabutis.svg', baseTimeout * 5);
        showElement($('.js-about-logo-wrapper'), 'fadeInDown d-lg-block', baseTimeout * 6);
        showElement($('.js-about-menu-wrapper'), 'fadeInDown d-lg-block', baseTimeout * 7);
        showElement($('.js-about-contacts-wrapper'), 'fadeInUp d-lg-block', baseTimeout * 8);
        showElement($('.js-about-contacts-wrapper-mobile'), 'fadeInUp', baseTimeout * 8);
    }

    // function baseAppear(timeout) {
        // setTimeout(function() {
        //     $('.js-about-slide-down').addClass('fadeInDown');
        //     $('.js-about-slide-down').removeClass('visibility-hidden');
        //
        //     $('.js-about-slide-up').addClass('fadeInUp');
        //     $('.js-about-slide-up').removeClass('visibility-hidden');
        //
        //     menuAppear($('.js-about-menu-wrapper'));
        // }, timeout);
    // }

    // function menuAppear(menu) {
    //     elements = menu.find('.js-element');
    //
    //     let timeOut = timeoutStep;
    //
    //     for(let a = 0; a < elements.length; a++) {
    //         setTimeout(function() {
    //             $(elements[a]).addClass('fadeInDown');
    //             $(elements[a]).removeClass('visibility-hidden');
    //         }, timeOut * a);
    //     }
    // }

    // function loadAnimation(containerId, path) {
    //     return lottie.loadAnimation({
    //         container: document.getElementById(containerId),
    //         renderer: 'svg',
    //         loop: false,
    //         autoplay: false,
    //         path: path
    //     });
    // }

    function playVivusAnimation(id, duration, file, timeout)
    {
        setTimeout(function()
        {
            var currentAnimation = new Vivus(id, {
                duration: duration,
                file: theme_url + file,
                start: 'manual',
                onReady: function()
                {
                    onSvgReady(currentAnimation);
                }
            });
        }, timeout);
    }

    function onSvgReady(animation)
    {
        animation.play();
    }

    function showElement(element, className, timeout) {
        setTimeout(function() {
            element.removeClass('visibility-hidden');
            element.addClass(className);
        }, timeout);
    }

});