jQuery("#openbtn").click(function () {
    jQuery(this).toggleClass('active');
    if (jQuery(this).hasClass('active')) {
        jQuery('#overlay').animate({left: '0'}, 200);
        jQuery('#openbtn').css('position', 'fixed');
    } else {
        jQuery('#overlay').animate({left: '-100vw'}, 200);
        jQuery('#openbtn').css('position', 'relative');
    }
});

jQuery('#overlay a').click(function () {
    jQuery('#openbtn').toggleClass('active');
    jQuery('#overlay').fadeOut(200);
})