var jQueryScript = document.createElement('script');
jQueryScript.setAttribute('src', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
document.head.appendChild(jQueryScript);
// var waypoint = document.createElement('script');
// waypoint.setAttribute('src', '/wp-content/themes/simpleportfoliotheme/assets/js/jquery.waypoints.min.js');
// document.head.appendChild(waypoint);




// Get the current year for the copyright
$('#year').text(new Date().getFullYear());

// SCROLLSPY
$('body').scrollspy({
    target: '#main-nav'
});

//SMOOTH SCROLLING

$('#main-nav a').on('click', function(e) {
    //check for hash value
    if (this.hash !== '') {
        // prevent default behavior
        e.preventDefault();
        //store hash
        const hash = this.hash;

        //Animate smooth scroll
        $('html,body').animate({
            scrollTop: $(hash).offset().top
        }, 900, function() {
            window.location.hash = hash;
        });
    }

});
//CHANGE NAVBAR COLOR AFTER SCROLING //
$(function() {
    $(document).scroll(function() {
        var $nav = $(".fixed-top");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        var $logo = $(".logo");
        $logo.toggleClass('scroll-logo', $(this).scrollTop() > $logo.height());
        var $toggler = $(".navbar-toggler-icon");
        $toggler.toggleClass('scroll-toggler', $(this).scrollTop() > $toggler.height());

    });
});
// animation on scroll

AOS.init();