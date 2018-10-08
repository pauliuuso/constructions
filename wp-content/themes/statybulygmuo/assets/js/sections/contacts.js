var contactsLoaded = false;

function showContactsContents()
{
    if(!contactsLoaded)
    {
        contactsLoaded = true;
        showElement($('.js-contacts-title-wrapper'), 'fadeIn', baseTimeout * 2);
        showElement($('.js-contacts-form-wrapper'), 'fadeIn', baseTimeout * 4);
        showElement($('.js-contacts-logo-wrapper'), 'fadeInDown d-md-block', baseTimeout * 5);
        showElement($('.js-contacts-menu-wrapper'), 'fadeInDown d-md-block', baseTimeout * 6);
        showElement($('.js-contacts-top-line'), 'fadeInDown d-md-block', baseTimeout * 6);
        playVivusAnimation('email-icon-animated', 100, '/svg/mail_icon.svg', baseTimeout * 7);
        showElement($('.js-email-icon-text'), 'fadeIn d-md-block', baseTimeout * 8);
        playVivusAnimation('phone-icon-animated', 100, '/svg/phone_icon.svg', baseTimeout * 9);
        showElement($('.js-phone-icon-text'), 'fadeIn d-md-block', baseTimeout * 10);
        showElement($('.js-contacts-bottom-left-line'), 'fadeInLeft d-md-block', baseTimeout * 11);
        showElement($('.js-contacts-footer-wrapper'), 'fadeInLeft d-md-block', baseTimeout * 12);
    }
}

$(document).ready(function() {
    var wpcf7Elm = document.querySelector( '.wpcf7' );

    $(wpcf7Elm).on('submit', function() {
        $(wpcf7Elm).find('.wpcf7-submit').addClass('inactive');
        $(wpcf7Elm).find('.wpcf7-submit').prop('disabled', true);
    });

    wpcf7Elm.addEventListener('wpcf7mailsent', function() {
        console.log('mailsent');
        mailSent()
    }, false);

    wpcf7Elm.addEventListener('wpcf7invalid', function() {
        removeInactive();
    }, false);

    wpcf7Elm.addEventListener('wpcf7mailfailed', function() {
        $('#modal').find('.modal-body').html('Žinutės išsiųsti nepavyko, bandykite vėliau');
        $('#modal').modal();
        removeInactive();
    }, false);
});

function mailSent() {
    removeInactive();
    var wpcf7Elm = document.querySelector( '.wpcf7');
    $(wpcf7Elm).find('input[type=text]').val('');
    $(wpcf7Elm).find('textarea').val('');
    $('#modal').find('.modal-body').html('Žinutė išsiųsta sėkmingai!');
    $('#modal').modal();
}

function removeInactive() {
    var wpcf7Elm = document.querySelector( '.wpcf7');
    $(wpcf7Elm).find('.wpcf7-submit').removeClass('inactive');
    $(wpcf7Elm).find('.wpcf7-submit').prop('disabled', false);
}