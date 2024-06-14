

document.addEventListener('DOMContentLoaded', function () {
    let mode = localStorage.getItem('mode');

    if (mode === 'dark') {
        applyWhiteToDarkStyles();
        jQuery('.p-bg-switch img').attr('src', my_vars.template_directory_uri + '/src/img/sun.svg');
        jQuery('.p-logo__link img').attr('src', my_vars.template_directory_uri + '/src/img/clinic_white.svg');
        jQuery('.p-address__tel img').attr('src', my_vars.template_directory_uri + '/src/img/tel_white.svg');
    } else {
        applyDarkToWhiteStyles();
        jQuery('.p-bg-switch img').attr('src', my_vars.template_directory_uri + '/src/img/moon.svg');
        jQuery('.p-logo__link img').attr('src', my_vars.template_directory_uri + '/src/img/clinic_black.svg');
        jQuery('.p-address__tel img').attr('src', my_vars.template_directory_uri + '/src/img/tel_black.svg');
    }

    // ページを表示（透明状態を解除）
    document.body.style.opacity = '1';
});

jQuery(function () {
    function switchImage(target, imgUrls) {
        if (target.attr('src') === imgUrls[1]) {
            target.attr('src', imgUrls[0]);
            return true;
        } else {
            target.attr('src', imgUrls[1]);
            return false;
        }
    }

    let bgSwitch = jQuery('.p-bg-switch');
    let sunMoonImages = [
        my_vars.template_directory_uri + '/src/img/sun.svg',
        my_vars.template_directory_uri + '/src/img/moon.svg'
    ];
    let logoImages = [
        my_vars.template_directory_uri + '/src/img/clinic_black.svg',
        my_vars.template_directory_uri + '/src/img/clinic_white.svg'
    ];
    let telImages = [
        my_vars.template_directory_uri + '/src/img/tel_black.svg',
        my_vars.template_directory_uri + '/src/img/tel_white.svg'
    ]

    bgSwitch.click(function () {
        let isDarkMode = switchImage(jQuery('.p-bg-switch img'), sunMoonImages);
        if (isDarkMode) {
            whiteToDark();
            localStorage.setItem('mode', 'dark');
        } else {
            darkToWhite();
            localStorage.setItem('mode', 'light');
        }

        switchImage(jQuery('.p-logo__link img'), logoImages);
        switchImage(jQuery('.p-address__tel img'), telImages);
    });
});


function whiteToDark() {
    applyWhiteToDarkStyles();
}

function darkToWhite() {
    applyDarkToWhiteStyles();
}

function applyWhiteToDarkStyles() {
    let brighter = '#383838';
    let darker = '#222222';

    jQuery('*').each(function () {
        let bgColor = jQuery(this).css('background-color');

        if (bgColor === 'rgb(255, 255, 255)' || bgColor === 'white') {
            jQuery(this).css('background-color', brighter);
        } else if (bgColor === 'rgb(245, 245, 245)' || bgColor === 'rgb(237, 235, 235)') {
            jQuery(this).css('background-color', darker);
        }
    });
    jQuery('body').css('background-color', brighter);

    jQuery('*').each(function () {
        let color = jQuery(this).css('color');

        if (color === 'rgb(23, 23, 23)' || color === 'black' || color === 'gray') {
            jQuery(this).css('color', 'white' + '!important');
        }
    });
    jQuery('body').css('color', 'white');
    jQuery('.openbtn__link').css('color', 'white');
    jQuery('.openbtn__link:visited').css('color', 'white');
    jQuery('.openbtn__btn span').css('background-color', 'white');
    jQuery('.p-archive__ttl').css('color', 'white');
    jQuery('.p-archive__time').css('color', 'white');
    jQuery('.p-archive__summary').css('color', 'white');
    jQuery('.p-logo__text').css('color', 'white');
    jQuery('.p-nav__text').css('color', 'white');
    jQuery('.p-news__postDate').css('color', 'white');
    jQuery('.p-news__blogttl').css('color', 'white');
    jQuery('.p-fv__label').css('color', 'black');
}

function applyDarkToWhiteStyles() {
    jQuery('*').each(function () {
        let bgColor = jQuery(this).css('background-color');

        if (bgColor === '#383838' || bgColor === 'rgb(56, 56, 56)') {
            jQuery(this).css('background-color', 'rgb(255, 255, 255)');
        } else if (bgColor === '#222222' || bgColor === 'rgb(34, 34, 34)') {
            jQuery(this).css('background-color', 'rgb(245, 245, 245)');
        }
    });
    jQuery('body').css('background-color', 'rgb(255, 255, 255)');

    jQuery('*').each(function () {
        let color = jQuery(this).css('color');

        if (color === 'rgb(255, 255, 255)' || color === 'white') {
            jQuery(this).css('color', 'rgb(23, 23, 23)' + '!important');
        }
    });
    jQuery('body').css('color', 'rgb(23, 23, 23)');
    jQuery('.openbtn__link').css('color', 'rgb(23, 23, 23)');
    jQuery('.openbtn__link:visited').css('color', 'rgb(23, 23, 23)');
    jQuery('.openbtn__btn span').css('background-color', '#171717');
    jQuery('.p-archive__ttl').css('color', 'rgb(23, 23, 23)');
    jQuery('.p-archive__time').css('color', 'rgb(23, 23, 23)');
    jQuery('.p-archive__summary').css('color', 'rgb(23, 23, 23)');
    jQuery('.p-logo__text').css('color', 'rgb(23, 23, 23)');
    jQuery('.p-nav__text').css('color', 'rgb(23, 23, 23)');
    jQuery('.p-news__postDate').css('color', 'gray');
    jQuery('.p-news__blogttl').css('color', '#000000');

}
