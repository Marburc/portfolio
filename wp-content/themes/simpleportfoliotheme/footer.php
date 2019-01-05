<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Simple_Portfolio_theme
 */

?>

<?php wp_footer(); ?>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script type="text/javascript"  src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery-3.3.1.min.js" ></script>
<script type="text/javascript"  src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootstrap.min.js" ></script>
<script type="text/javascript"  src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/main.js" ></script>

<script>
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
        $(function () {
  $(document).scroll(function () {
    var $nav = $(".fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    var $logo = $(".logo");
    $logo.toggleClass('scroll-logo', $(this).scrollTop() > $logo.height());
    var $toggler = $(".navbar-toggler-icon");
    $toggler.toggleClass('scroll-toggler', $(this).scrollTop() > $toggler.height());
    
    
    
    

  });
});



     
    </script>


</body>
</html>
