<?php
/*
Template Name: Home Page
*/

/**

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Simple_Portfolio_theme
 */

//Advanced Custom Fields
$about_image = get_field('about_image');
$about_title = get_field('about_title');
$about_desc = get_field('about_description');
$header_title = get_field('header_title');
$header_subtitle = get_field('header_subtitle');
$portolio_image_one = get_field('portfolio_image_1');
$portolio_image_two = get_field('portfolio_image_2');
$portolio_image_three = get_field('portfolio_image_3');
$contact_title = get_field('contact_title');
$contact_subtitle = get_field('contact_subtitle');

get_header();?>
<!-- HEADER -->
<header id="header">
        <div class="primary-overlay text-white d-flex align-items-center text-center ">
            <div class="container">
                <div class="row  ">
                    <div class="col ">
                        <div class="header-text-wrapper mt-2 ">
                            <h1 class="small-shadow display-3 text-uppercase mb-4" data-aos="fade-right" data-aos-duration="2000"><?php echo $header_title ?></h1>
                            <p class="small-shadow mb-5 font-weight-light " data-aos="fade-left" data-aos-duration="2000" > <?php echo $header_subtitle ?></p>
                            <a href="#contact" class=" btn btn-secondary btn-lg text-white contact-popup" data-aos="fade-right" data-aos-duration="2000"> <i class="fas fa-arrow-right mr-2"></i>Kontakt</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ABOUT -->
    <section id="about" class=" py-6 ">
        <div class="container">
           
                    <div class="about__text " data-aos="fade-left" data-aos-duration="1000">
                        <h2 class=" mb-3 text-primary h1 about-title "> <?php echo $about_title ?> </h2>
                        <h3 class="mb-4" >Frontend Developer aus Berlin</h3>
                        <div data-aos="fade-right" data-aos-duration="1000">
                        <?php if(!empty($about_image)) :  ?>
                            <img src="<?php echo $about_image['url']; ?>" class=" about-img mb-5 " alt="<?php echo $about_image['alt']; ?>">
                            <?php endif; ?>
                        <p class="p-format about-description hide"> <?php echo $about_desc ?> </p>
                    </div>
               
            </div>
        </div>
    </section>

    <!-- PORTFOLIO -->


    <section id="portfolio" class="py-6  text-center ">
        <div class="container portfolio">
            <h2 class=" text-white h1 " data-aos="fade-down" data-aos-duration="1000">Portfolio</h2>
            <div class="row justify-content-center">


                <div class="flip-card" data-aos="fade-right" data-aos-duration="1000">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                        <?php if(!empty($portolio_image_one)) :  ?>
                    <img style="width:340px;height:235px;" src="<?php echo $portolio_image_one['url']; ?>" class="mr-5" alt="<?php echo $portolio_image_one['alt']; ?>">
<?php endif; ?>
                        </div>
                        <div class="flip-card-back">

                            <p>Business savvy tech experts helping forward thinking companies do amazing things.</p>
                            <a href="#" class="btn btn-outline-secondary btn-lg text-white"> <i class="fas fa-arrow-right mr-2"></i>Read More </a>
                        </div>
                    </div>
                </div>
                <div class="flip-card" data-aos="fade-up" data-aos-duration="1000">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                        <?php if(!empty($portolio_image_one)) :  ?>
                        <img style="width:340px;height:235px;" src="<?php echo $portolio_image_two['url']; ?>" class="mr-5" alt="<?php echo $portolio_image_two['alt']; ?>">
<?php endif; ?>
                        </div>
                        <div class="flip-card-back">

                            <p class=" ">Blockchain pioneers bringing transparency, trust, and security to.</p>
                            <a target="_blank" href="https://github.com/Marburc/my-todo" class="btn btn-outline-secondary btn-sm text-white"> <i class="fas fa-arrow-right mr-2"></i>Zu Git </a>
                            <a  target="_blank" href="https://marburc.github.io/my-todo/" class="btn btn-outline-secondary btn-sm text-white"> <i class="fas fa-arrow-right mr-2"></i>Zur App </a>
                        </div>
                    </div>
                </div>

                <div class="flip-card" data-aos="fade-left" data-aos-duration="1000">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                        <?php if(!empty($portolio_image_three)) :  ?>
                    <img style="width:340px;height:235px;" src="<?php echo $portolio_image_three['url']; ?>" class="mr-5" alt="<?php echo $portolio_image_three['alt']; ?>">
<?php endif; ?>
                        </div>
                        <div class="flip-card-back">

                            <p>Eine kleines Spiel, welches ich auf Basis von Vue.js programmiert habe. </p>
                            <a target="_blank" href="https://github.com/Marburc/remember" class="btn btn-outline-secondary btn-sm text-white"> <i class="fas fa-arrow-right mr-2"></i>Zu Git </a>
                            <a  target="_blank" href="https://marburc.github.io/remember/" class="btn btn-outline-secondary btn-sm text-white"> <i class="fas fa-arrow-right mr-2"></i>Zum Spiel </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTATC -->

    <section id="contact" class="py-6">
        <div class="container">
            <div class="row">
               
                <div class="col text-center py6">
                <div data-aos="flip-up" data-aos-duration="2000">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/Logo-2.png" width="100" height="100" alt="">
                    <h3 class=" display-5 py-1 "><?php echo $contact_title ?></h3>
                    <!-- <p class="mb-4"><?php echo $contact_subtitle ?></p> -->
                    <div>
                        <button class="btn btn-lg mb-4 btn-outline-primary contact-popup" data-toggle="modal" data-target="#myModal"> <i class="fas fa-envelope mr-2"></i>Kontakt </button>
                    </div>

                </div>
                    <!-- modal -->
                    <!-- <div class="modal fade text-dark" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Contact Me</h5>
                                    <button class="close" data-dismiss="modal"><span>&times;</span></button>

                                </div>
                                <div class="modal-body">
                                    <form action="">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                        <button class="btn btn-secondary btn-block">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- icons -->
                    <a href="https://de.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in" <div data-aos="flip-left" data-aos-duration="2000"></i></a>
                    <a href='https://facebook.com' target="_blank"> <i class="fab fa-facebook-f" <div data-aos="flip-down" data-aos-duration="2000"></i></a>
                    <a href='https://github.com/Marburc' target="_blank"> <i class="fab fas fa-code-branch" <div data-aos="flip-right" data-aos-duration="2000">></i></a>


                </div>
            </div>
        </div>
    </section>

 
	

<?php

 get_footer(); ?>
