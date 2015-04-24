// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

function hideModal() {
    $('.modal.in').modal('hide');
    $('body').removeClass('modal-open');
    $('.modal-backdrop').remove();
}

function showNotification(message, type, delay) {
    if (typeof(delay) === "undefined" || isNaN(delay)) {
        delay = 5000;
    }
    if (typeof(type) === "undefined") {
        type = 'success';
    }

    $("#alert").notify({
        message: {text: message},
        type: type,
        closeable: 'true',
        transition: 'fade',
        fadeOut: {enabled: true, delay: delay}
    }).show();
}