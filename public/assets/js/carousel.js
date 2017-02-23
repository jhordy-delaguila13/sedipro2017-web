
/* AFFIX NAV
-------------------------------------
 */
$('#top').affix({
    offset: {
        top: $('header').height()
    }
});


/*  CAROUSEL
--------------------------------------
 */
$(document).ready(function() {
    $('#Carousel').carousel({
        interval: 5000
    })
});
