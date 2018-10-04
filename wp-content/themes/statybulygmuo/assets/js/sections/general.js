$(window).ready(function()
{

    $('#fullpage').fullpage({
        anchors: ['section-about', 'section-products', 'section-contacts'],
        licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
        onLeave: function(origin, destination, direction) {
            showPage(destination.anchor);
        },
        afterLoad: function(origin, destination, direction) {
            showPage(destination.anchor);
        },
        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex) {
            showSlide(slideAnchor.item);
        },
        verticalCentered: false
    });

    function showPage(section) {
        if(section === 'section-about') {
            showAboutContents();
        }
        else if(section === 'section-products') {
            showProductsContents();
        }
        else if(section === 'section-contacts') {
            showContactsContents();
        }
    }

});

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