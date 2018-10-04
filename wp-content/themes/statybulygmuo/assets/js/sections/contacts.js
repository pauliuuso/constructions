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
        showElement($('.js-contacts-bottom-left-line'), 'fadeInLeft d-md-block', baseTimeout * 7);
        showElement($('.js-contacts-footer-wrapper'), 'fadeInLeft d-md-block', baseTimeout * 7);
    }
}