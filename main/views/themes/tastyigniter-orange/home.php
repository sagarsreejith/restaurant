<style>
  
.header .main-menu {
	background:#6f1e30;
	z-index:999;
	position:absolute !important;
	width:100%;
}
.header .main-menu{
    background:transparent !important;
}
.header .sticky {
position: fixed;
width: 100%;
top: 0;
animation: fadeInDown 0.8s both 0s;
background: linear-gradient(5deg,#7a2c3d,#6f1e30) !important;
}
.box-icon-svg .icon-inner{
position:absolute;
left:50%;
top:50%;
transform:translate(-50%,-50%)
}
</style>
<?php echo get_header(); ?>

    <?php echo get_partial('content_top'); ?>
            
        <?php if ($this->alert->get()) { ?>
            <div id="notification">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo $this->alert->display(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
                <div class="main_bg">
                    <div id="page-content" class="icon_sec">
                        <div class="container top-spacing-10">
                            
                                            
                            <div class="col-md-6 col-lg-3 icon-box">
                            
                                <div class="box-icon-svg">
                                <div class="box-icon-svg-inner">
                                    <svg width="60" height="60" viewBox="0 0 93 93" fill="none" xmlns="https://www.w3.org/2000/svg">
                                    <path d="M90 45C90 69.8528 69.8528 90 45 90C20.1472 90 0 69.8528 0 45C0 20.1472 22.5 19 45 4.00001C67.5 -11 90 20.1472 90 45Z" fill="#6f1e31"></path>
                                    </svg><span class="icon-lg-2 icon-inner icon-white"><i class="fa fa-search"></i></span>
                                </div>
                                <div class="box-icon-svg-caption">
                                    <h4><?php echo lang('text_step_one'); ?></h4>
                                   
                                </div>
                                </div>
                            
                            </div>
                            <div class="col-md-6 col-lg-3 wow-outer">
                            
                                <div class="box-icon-svg">
                                <div class="box-icon-svg-inner">
                                    <svg width="60" height="60" viewBox="0 0 93 93" fill="none" xmlns="https://www.w3.org/2000/svg">
                                    <path d="M90 45C90 69.8528 69.8528 90 45 90C20.1472 90 0 69.8528 0 45C0 20.1472 22.5 19 45 4.00001C67.5 -11 90 20.1472 90 45Z" fill="#6f1e31"></path>
                                    </svg><span class="icon-lg-2 icon-inner icon-white">  <i class="fa fa-mouse-pointer"></i></span>
                                </div>
                                <div class="box-icon-svg-caption">
                                    <h4><?php echo lang('text_step_two'); ?></h4>
                                
                                </div>
                                </div>
                        
                            </div>
                                <div class="col-md-6 col-lg-3 wow-outer">
                                
                                    <div class="box-icon-svg">
                                    <div class="box-icon-svg-inner">
                                        <svg width="60" height="60" viewBox="0 0 93 93" fill="none" xmlns="https://www.w3.org/2000/svg">
                                        <path d="M90 45C90 69.8528 69.8528 90 45 90C20.1472 90 0 69.8528 0 45C0 20.1472 22.5 19 45 4.00001C67.5 -11 90 20.1472 90 45Z" fill="#6f1e31"></path>
                                        </svg><span class="icon-lg-2 icon-inner icon-white"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                    <div class="box-icon-svg-caption">
                                        <h4><?php echo lang('text_step_three'); ?></h4>
                                       
                                    </div>
                                    </div>
                                
                                </div>
                                <div class="col-md-6 col-lg-3">
                                
                                    <div class="box-icon-svg">
                                    <div class="box-icon-svg-inner">
                                        <svg width="60" height="60" viewBox="0 0 93 93" fill="none" xmlns="https://www.w3.org/2000/svg">
                                        <path d="M90 45C90 69.8528 69.8528 90 45 90C20.1472 90 0 69.8528 0 45C0 20.1472 22.5 19 45 4.00001C67.5 -11 90 20.1472 90 45Z" fill="#6f1e31"></path>
                                        </svg><span class="icon-lg-2 icon-inner icon-white"><i class="fa fa-heart"></i></span>
                                    </div>
                                    <div class="box-icon-svg-caption">
                                        <h4><?php echo lang('text_step_four'); ?></h4>
                                        
                                    </div>
                                    </div>
                                
                                </div>
                     
                        </div>
                    </div>

                </div>


       
                <section class="about" id="about">
                <div class="object-right object_right_img animated fadeIn ">
                            <img class="img-responsive img1 " src="assets/images/02.png" alt="">
                        </div>
                    <div class="">
                       
                        <div >  <img class="img-responsive book-menu_img " src="assets/images/abtt.png" style="position:absolute;opacity: 0.9;"> </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                   
                                </div>
                            </div>

                            <div class="book-menu mt-40">

                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-12 ">
                                  
                                        </div>
                                        <div class="col-md-7 col-sm-12 col-md-offset-right-2 ">
                                        <div class="section-title1 text-center">
                                        <div class="title-separator">
                                            <!-- <img src="assets/images/food_icon.png"> -->
                                            <h2 class="h2_sttt"> <span class="text-orange  padin_rt">About</span>Us</h2>
                                        </div>

                                        <span style="color: #7e3545;font-weight: 800; font-size: 15px;">Whatever your occasion, We makes it one to remember!</span>
                                        </div>
                                            <p>

                                         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. We provide you with daily self-made bread, sourdough pizza, roasted fish-meat-vegetables and many more. Lorem ipsum dolor sit amet, 

                                            </p>
                                        </div>
                                    </div>
                                </div>
                </section>
                <div class="clearfix"></div>
                <section class="gallery white-bg page-section-ptb" id="gallery">
                    <div class="col-lg-12 col-md-12">
                        <div class="section-title text-center">
                            <div class="title-separator">
                                <!-- <img src="assets/images/food_icon.png"> -->
                                <h2 class="h2_sttt"> <span class="text-orange  padin_rt">Our</span>Gallery</h2>
                            </div>

                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="isotope-filters">
                                    <button data-filter="" class="active">All</button>
                                    <button data-filter=".Arabic"> Arabic Sweets</button>
                                    <button data-filter=".Mamoul">Mamoul</button>
                                    <button data-filter=".Fresh">Fresh Sweets</button>
                                    <button data-filter=".Manakeesh">Manakeesh</button>
                                    <button data-filter=".Sandwiches">Sandwiches</button>
                                    <button data-filter=".Appetizer"> Appetizer</button>
                                    <button data-filter=".emb"> Embains</button>

                                 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="isotope popup-gallery columns-4">
                        <div class="grid-item fresh">
                                <div class="galllery-item gal_img">
                                    <span><img class="img-responsive" src="assets/images/gallery/07.png" alt=""></span>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <h3><a href="#"> Cheese Pasta </a> </h3>
                                            <a class="portfolio-img" href="assets/images/gallery/07.png"><i class="fa fa-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item Arabic mexican">
                                <div class="galllery-item gal_img">
                                    <span><img class="img-responsive" src="assets/images/gallery/08.png" alt=""></span>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <h3><a href="#"> Cheese Pasta </a> </h3>
                                            <a class="portfolio-img" href="assets/images/gallery/08.png"><i class="fa fa-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item Mamoul">
                                <div class="galllery-item gal_img">
                                    <span><img class="img-responsive" src="assets/images/gallery/02.png" alt=""></span>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <h3><a href="#">Diamond</a> </h3>
                                            <a class="portfolio-img" href="assets/images/gallery/02.png"><i class="fa fa-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item   Mamoul">
                                <div class="galllery-item gal_img">
                                    <span><img class="img-responsive" src="assets/images/gallery/09.png" alt=""></span>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <h3><a href="#">Mann Wa Salwa</a> </h3>
                                            <a class="portfolio-img" href="assets/images/gallery/09.png"><i class="fa fa-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item mexican">
                                <div class="galllery-item gal_img">
                                    <span><img class="img-responsive" src="assets/images/gallery/04.png" alt=""></span>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <h3><a href="#"> Cheese Pasta </a> </h3>
                                            <a class="portfolio-img" href="assets/images/gallery/04.png"><i class="fa fa-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item  Mamoul ">
                                <div class="galllery-item gal_img">
                                    <span><img class="img-responsive" src="assets/images/gallery/05.png" alt=""></span>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <h3><a href="#"> Cheese Pasta </a> </h3>
                                            <a class="portfolio-img" href="assets/images/gallery/05.png"><i class="fa fa-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item Sandwiches ">
                                <div class="galllery-item gal_img">
                                    <span><img class="img-responsive" src="assets/images/gallery/06.png" alt=""></span>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <h3><a href="#"> Bassma </a> </h3>
                                            <a class="portfolio-img" href="assets/images/gallery/06.png"><i class="fa fa-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                            <div class="grid-item Appetizer">
                                <div class="galllery-item gal_img">
                                    <span><img class="img-responsive" src="assets/images/gallery/10.png" alt=""></span>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <h3><a href="#"> Cheese Pasta </a> </h3>
                                            <a class="portfolio-img" href="assets/images/gallery/10.png"><i class="fa fa-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                          
                        </div>
                    </div>
                </section>

                <div claass="clearfix"></div>

                <section class="our-menu2 page-section-pt parallax pb-30 bg-overlay-black-70 " style="background-image: url(assets/images/bg_banner.jpg);">

                    <div class=" parallax bg-overlay-black-70 hg_bg" style="background-image: url(assets/images/icon/slider_image1.jpg);background-repeat:no-repeat;">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="col-md-offset-2 col-md-8 banner_sec">
                                        <div id="offer" style="max-height:500px;width:100%">
                                                                                        <div class="ui">
                                                <div class="ui_inner">
                                                    <div class="ui_fruit">
                                                    <img src="assets/images/icon/p.png">
                                                    </div>
                                                
                                                    <div class="ui_inner__selection">
                                                    <input checked="checked" id="lovely" name="selection" type="radio">
                                                    <label for="lovely">
                                                        <div class="selected l">Offer</div>
                                                        <div class="ui_inner__slider">
                                                        <div class="sb">
                                                            <img src="assets/images/icon/starburst2.png">
                                                        </div>
                                                        <div class="slide">
                                                            <div class="slide_inner">
                                                               
                                                            <div class="slide_inner__left">
                                                                <img src="assets/images/icon/baklawa_sweet_1.png">
                                                            
                                                            </div>
                                                            <div class="slide_inner__right">
                                                            <h2>Offer Sweets</h2>
                                                                <h3>$4.99 <span> Pack of 10</span></h3>
                                                                <p>Pie cupcake caramels marshmallow ice cream icing. Brownie biscuit candy macaroon dessert ice cream halvah. Cheesecake sweet roll marzipan brownie lollipop gummies.</p>
                                                                
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </label>
                                                    <input id="super" name="selection" type="radio">
                                                    <label for="super">
                                                        <div class="selected s">Happy Hours</div>
                                                        <div class="ui_inner__slider">
                                                        <div class="sb">
                                                        <img src="assets/images/icon/starburst2.png">
                                                        </div>
                                                        <div class="slide">
                                                            <div class="slide_inner">
                                                            <div class="slide_inner__left">
                                                            <img src="assets/images/icon/baklawa_sweet_1.png">
                                                            
                                                            </div>
                                                            <div class="slide_inner__right">
                                                                <h2>Happy Hours</h2>
                                                                <h3>$4.99 <span> Pack of 10</span></h3>
                                                                <p>Pie cupcake caramels marshmallow ice cream icing. Brownie biscuit candy macaroon dessert ice cream halvah. Cheesecake sweet roll marzipan brownie lollipop gummies.</p>
                                                            
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </label>
                                                    <input id="mega" name="selection" type="radio">
                                                    <label for="mega">
                                                        <div class="selected m">Eid Offer</div>
                                                        <div class="ui_inner__slider">
                                                        <div class="sb">
                                                        <img src="assets/images/icon/starburst2.png">
                                                        </div>
                                                        <div class="slide">
                                                            <div class="slide_inner">
                                                            <div class="slide_inner__left">
                                                            <img src="assets/images/icon/baklawa_sweet_1.png">
                                                                <div class="firework">
                                                            
                                                                </div>
                                                            </div>
                                                            <div class="slide_inner__right">
                                                                <h2>Eid Offer</h2>
                                                                <h3>$4.99 <span> Pack of 10</span></h3>
                                                                <p>Pie cupcake caramels marshmallow ice cream icing. Brownie biscuit candy macaroon dessert ice cream halvah. Cheesecake sweet roll marzipan brownie lollipop gummies.</p>
                                                                
                                                            
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </label>
                                                    <input id="huge" name="selection" type="radio">
                                                    <label for="huge">
                                                        <div class="selected h">Special Sweets</div>
                                                        <div class="ui_inner__slider">
                                                        <div class="sb">
                                                            <img src="assets/images/icon/starburst2.png">
                                                        </div>
                                                        <div class="slide">
                                                            <div class="slide_inner">
                                                            <div class="slide_inner__left">
                                                                <img src="assets/images/icon/baklawa_sweet_1.png">
                                                                <div class="firework">
                                                                
                                                                </div>
                                                            </div>
                                                            <div class="slide_inner__right">
                                                                <h2>Special Sweets</h2>
                                                                <h3>$9.99 <span> Pack of 10</span></h3>
                                                                <p>Pie cupcake caramels marshmallow ice cream icing. Brownie biscuit candy macaroon dessert ice cream halvah. Cheesecake sweet roll marzipan brownie lollipop gummies.</p>
                                                            
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </label>
                                                    </div>
                                                </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

        
           
                <div class="clearfix"></div>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <div id="login-form" class="content-wrap col-sm-4 center-block">

					
<!-- <div class="img_log">
    <img src="assets/images/bg10.jpg" class="" style="width:100%">
</div> -->

<div id="login-form" class="content-wrap col-sm-4 center-block">

					
<!-- <div class="img_log">
    <img src="assets/images/bg10.jpg" class="" style="width:100%">
</div> -->

<div class="section-title text-center">
    <div class="title-separator">

    </div>
    <h2> <span class="text-orange">	<?php echo lang('text_login'); ?></h2>
    <span class="under-heading"></span>
</div>
<?php if ($this->alert->get('', 'alert')) { ?>
    <div id="notification">
        <?php echo $this->alert->display('', 'alert'); ?>
    </div>
    <?php } ?>
        <form method="POST" accept-charset="utf-8" action="<?php echo current_url(); ?>" role="form">
            <fieldset>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="email" id="login-email" class="form-control input-lg" placeholder="<?php echo lang('label_email'); ?>" autofocus="" />
                        <span class="input-group-addon">@</span>
                    </div>
                    <?php echo form_error('email', '<span class="text-danger">', '</span>'); ?>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input type="password" name="password" id="login-password" class="form-control input-lg" placeholder="<?php echo lang('label_password'); ?>" />
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    </div>
                    <?php echo form_error('password', '<span class="text-danger">', '</span>'); ?>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">
                                <?php echo lang('button_login'); ?>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <a class="forgot_btn1  " href="<?php echo $reset_url; ?>">
                                <?php echo lang('text_forgot'); ?>
                            </a>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <a class=" reg_btn1 text-right" style="" href="<?php echo $register_url; ?>">
                                <?php echo lang('button_register'); ?>
                            </a>
                        </div>
                    </div>
                </div>

            </fieldset>
        </form>
</div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


                <section class="map_sec">
                    <div class="col-lg-12 col-md-12">
                        <div class="section-title text-center">
                            <div class="title-separator">
                                <!-- <img src="assets/images/food_icon.png"> -->
                                <h2 class="h2_sttt"> <span class="text-orange  padin_rt">Our</span>Locations</h2>
                            </div>

                        </div>
                    </div>
                    <div class="content-wrap">

                        <div id="map_home" class="slideInUp" style="height:500px; width:100%"></div>
                    </div>
                    <div class="clearfix"></div>
                 
                 </div>
                </section>

                <div claass="clearfix"></div>

                <?php echo get_footer(); ?>
                    <div class="clearfix"></div>
                    <script>
                        // $(function() {

                        //   $('a[href*=#]:not([href=#])').click(function() {
                        //     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                        //       var target = $(this.hash);
                        //       target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                        //       if (target.length) {
                        //         $('html,body').animate({
                        //           scrollTop: target.offset().top
                        //         }, 1500);
                        //         return false;
                        //       }
                        //     }
                        //   });

                        // });

                        $(document).ready(function() {
                            if(getCookie('order_type') === ""){
                                document.cookie = "order_type=1; path=/";
                            }
                            $('#main-header .navbar-nav a').on('click', function() {
                                $('#main-header .navbar-nav').find('li.active').removeClass('active');
                                $(this).parent('li').addClass('active');
                            });

                            initMapHome();
                            $("#order_now").click(function() {
                                $("body").css("padding-right:0");
                            });
                            $('#order_now').on('shown.bs.modal', function() {
                                $("body.modal-open").removeAttr("style");
                            });

                            $("#testimonial-slider").owlCarousel({
                                items: 1,
                                itemsDesktop: [1000, 1],
                                itemsDesktopSmall: [979, 1],
                                itemsTablet: [768, 1],
                                pagination: true,
                                transitionStyle: "backSlide",
                                autoPlay: true
                            });
                        });
                    </script>
                    <script>
                        /* When the user clicks on the button,
                        toggle between hiding and showing the dropdown content */
                        function myFunction() {
                            document.getElementById("myDropdown").classList.toggle("show");
                        }

                        function filterFunction() {

                            var input, filter, ul, li, a, i;
                            input = document.getElementById("myInput");
                            filter = input.value.toUpperCase();
                            div = document.getElementById("myDropdown");
                            a = div.getElementsByTagName("a");
                            for (i = 0; i < a.length; i++) {
                                txtValue = a[i].textContent || a[i].innerText;
                                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                    a[i].style.display = "";
                                } else {
                                    a[i].style.display = "none";
                                }
                            }
                        }

                        $("#order_now").click(function() {
                            $(".js-example-templating").select2("close");
                        });

                        function initMapHome() {
                            var broadway = {
                                info: '<strong>Zalatimo Sweets</strong><br>\
                                Sharq, KIPCO Tower<br> Kuwait City<br>\
    	<a href="https://www.google.com/maps/dir//KIPCO+Tower,+Al+Kuwayt/@29.3757712,47.9436413,12.7z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3fcf84966d43bf01:0xb0f7d549868e3803!2m2!1d47.9868396!2d29.3757397" target="_blank">Get Directions<img src="assets/images/directions.png" width="15"></a>',
                                lat: 29.3757,
                                long: 47.9868,
                            }

                            var belmont = {
                                info: '<strong>Zalatimo Sweets</strong><br>\
                                Ground Floor, Building 25, Marina Crescent<br> Salmiya<br>\
    	<a href="https://www.google.com/maps/place/Marina+Crescent/@29.3439534,48.0604649,16.15z/data=!4m8!1m2!2m1!1sGround+Floor,+Building+25,+Marina+Crescent,+kuwait!3m4!1s0x3fcf9d9950d2a1c1:0xb80aaf80bf2223b4!8m2!3d29.3411726!4d48.0655611" target="_blank">Get Directions<img src="assets/images/directions.png" width="15"></a>',
                                lat: 29.3439534,
                                long: 48.0633999,
                            }

        //                     var sheridan = {
        //                         info: '<strong>Chipotle on Sheridan</strong><br>\r\
    	// 6600 N Sheridan Rd<br> Chicago, IL 60626<br>\
    	// <a href="https://goo.gl/maps/QGUrqZPsYp92" target="_blank">Get Directions<img src="assets/images/directions.png" width="15"></a>',
        //                         lat: 29.14583,
        //                         long: 48.09472,
        //                     }

                            var locations = [
                                [broadway.info, broadway.lat, broadway.long, 0],
                                [belmont.info, belmont.lat, belmont.long, 1],
                                // [sheridan.info, sheridan.lat, sheridan.long, 2],
                            ]

                            var map = new google.maps.Map(document.getElementById('map_home'), {
                                zoom: 12,
                                center: new google.maps.LatLng(29.3759, 47.9774),
                                mapTypeControlOptions: {
                                    mapTypeIds: [google.maps.MapTypeId.ROADMAP, google.maps.MapTypeId.HYBRID]
                                }, // here´s the array of controls
                                //disableDefaultUI: true, // a way to quickly hide all controls
                                mapTypeControl: false,
                                scaleControl: true,
                                mapTypeId: google.maps.MapTypeId.ROADMAP,
                            })

                            var infowindow = new google.maps.InfoWindow({})

                            var marker, i

                            for (i = 0; i < locations.length; i++) {
                                marker = new google.maps.Marker({
                                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                                    icon: "assets/images/restaurant_mapmarker13.png",
                                    map: map,
                                })

                                google.maps.event.addListener(
                                    marker,
                                    'click', (function(marker, i) {
                                        return function() {
                                            infowindow.setContent(locations[i][0])
                                            infowindow.open(map, marker)
                                        }
                                    })(marker, i)
                                )
                            }
                        }
                    </script>
               


                     
<script type="text/javascript">
function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

$(window).scroll(function () {
   "use strict";
    var topOfWindow = $(window).scrollTop();

    function _checkOffset(className) {
        return function () {
            var $this = $(this),
                imagePos = $this.offset().top;

            $this.toggleClass(className, (imagePos < topOfWindow + 900));
        };
    }
    
    $('.img1').each(_checkOffset('animated bounceInRight'));
	$('.book-menu_img').each(_checkOffset('animated bounceInLeft'));
    $('.banner_sec').each(_checkOffset('animated tada'));
    $('#map_home').each(_checkOffset('animated fadeIn'));
    $('.gal_img').each(_checkOffset('animated fadeIn'));
	$('.contact-form').each(_checkOffset('animated fadeInLeft'));
  $('.contact-map').each(_checkOffset('animated fadeInRight'));
  

	
	
	
	jQuery(window).on('scroll', function() {
		if ($(this).scrollTop() > 100) {
			$('.header .main-menu').addClass("sticky");
		} else {
			$('.header .main-menu').removeClass("sticky");
		}
		});

});

</script>