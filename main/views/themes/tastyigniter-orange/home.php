<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Amatic+SC:400,700|Lilita+One" rel="stylesheet">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
 
<style>

a.gotop {
  background: rgba(0, 0, 0, 0.5) url(assets/images/top.png) no-repeat scroll -1px -1px;
  border: 1px solid #3b3b3b;
  display: block;
  height: 36px;
  margin-top: -18px;
  position: absolute;
  right: 10px;
  text-align: center;
  top: 50%;
  width: 35px;
}
.about {
    background: rgba(0, 0, 0, 0) url(assets/images/abt.png) no-repeat scroll center bottom / contain;
}

.book[data-book="book-1"] .front:before {
    background: url(assets/images/menu-cover.png);
    position: absolute;
    content: "";
    width: 100%;
    left: 3px;
    right: 0px;
    background-size: 100%;
    background-repeat: no-repeat;
    top: -6px;
    height: 100%;
}
.area-title h2:after {
    background: rgba(0, 0, 0, 0) url((assets/images/red.png) no-repeat scroll center center / contain;
    bottom: 0;
    content: "";
    height: 30px;
    left: 0;
    position: absolute;
    width: 100%;
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
	    <div class="content-wrap">
            <div id="order-steps" class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="step-item">
                        <div class="icon">
                            <i class="fa fa-search"></i>
                            <h4><?php echo lang('text_step_one'); ?></h4>
                        </div>
                       
                      <!--  <p><?php echo lang('text_step_search'); ?></p>-->
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="step-item">
                        <div class="icon">
                            <i class="fa fa-mouse-pointer"></i>
                            <h4><?php echo lang('text_step_two'); ?></h4>
                        </div>
                       
                       <!-- <p><?php echo lang('text_step_choose'); ?></p>-->
                    </div>
                </div>
                <div class="clearfix visible-xs"></div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="step-item">
                        <div class="icon">
                            <i class="fa fa-credit-card"></i>
                            <h4><?php echo lang('text_step_three'); ?></h4>
                        </div>
                       
                      <!--  <p><?php echo lang('text_step_pay'); ?></p>-->
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="step-item">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                            <h4><?php echo lang('text_step_four'); ?></h4>
                        </div>
                      
                       <!-- <p><?php echo lang('text_step_enjoy'); ?></p>-->
                    </div>
                </div>
            </div>
            <?php echo get_partial('content_bottom'); ?>
        </div>
	</div>
</div>

</div>
<section class="about ">
 
  <div class="page-section-ptb">
  <div class="object-right object_right_img">
      <img class="img-responsive" src="assets/images/02.png" alt="">
    </div>
   
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="section-title text-center">
            <div class="title-separator">
             <img src="assets/images/food_icon.png">
             <h2 class="h2_sttt"> <span class="text-orange  padin_rt">Welcome to</span>Lugma</h2>
            </div>
          
            <p>Whatever your occasion, We makes it one to remember!</p>
          </div>
        </div>
      </div>
   
    
    <div class="book-menu mt-40">
   
    <div class="container">
      <div class="row">
      <div class="col-lg-5 col-md-5 col-sm-12 text-right">
            <img class="img-responsive" class="book-menu_img" src="assets/images/about.png">
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12">
            <p>
            We provide you with daily self-made bread, sourdough pizza, roasted fish-meat-vegetables and many more. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            We provide you with daily self-made bread, sourdough pizza, roasted fish-meat-vegetables and many more. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
  
            We provide you with daily self-made bread, sourdough pizza, roasted fish-meat-vegetables and many more. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
  
          </p>
       </div>
    </div>
  </div>

</section>







<section class="our-menu page-section-pt parallax pb-30 bg-overlay-black-70 " style="background-image: url(assets/images/bg10.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        
      <div class="section-title text-center">
            <div class="title-separator">
             
             <h2 class="h2_sttt"> <span class="text-orange  padin_rt">Customer</span>Reviews</h2>
            </div>
          
         
          </div>
      <div class="col-md-offset-2 col-md-8">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                    <div class="pic">
                                <img src="assets/images/img-2.jpg">
                            </div>
                      
                        <h3 class="title">Williamson</h3>
                        <span class="post">Web Developer</span>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium ad asperiores at atque culpa dolores eaque fugiat hic illo ipsam ipsum minima modi necessitatibus nemo officia, omnis perferendis placeat sit vitae, consectetur adipisicing elit ipsam.
                        </p>
                    </div>
                    <div class="testimonial">
                    <div class="pic">
                                <img src="assets/images/img-3.jpg">
                            </div>
                       
                        <h3 class="title">Kristina</h3>
                        <span class="post">Web Designer</span>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium ad asperiores at atque culpa dolores eaque fugiat hic illo ipsam ipsum minima modi necessitatibus nemo officia, omnis perferendis placeat sit vitae, consectetur adipisicing elit ipsam.
                        </p>
                    </div>
                </div>
            </div>
</div>
</div>
</div>
</section>






<div class="clearfix"></div>


<section class="gallery white-bg page-section-ptb">
<div class="col-lg-12 col-md-12">
          <div class="section-title text-center">
            <div class="title-separator">
             <img src="assets/images/food_icon.png">
             <h2 class="h2_sttt"> <span class="text-orange  padin_rt">Our</span>Gallery</h2>
            </div>
          
          </div>
        </div>
  <div class="container">
    <div class="row">
     <div class="col-lg-12 col-md-12">
       <div class="isotope-filters">
       <button data-filter="" class="active">All</button>
       <button data-filter=".vegetarian"> Vegetarian</button>
       <button data-filter=".chinese">Chinese</button>
       <button data-filter=".italian">Italian</button>
       <button data-filter=".mexican">Mexican</button>
       </div>
     </div>
   </div>
 </div>
<div class="container"> 
 <div class="isotope popup-gallery columns-3">
   <div class="grid-item chinese mexican">
      <div class="galllery-item">
        <span><img class="img-responsive" src="assets/images/gallery/01.jpg" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
             <h3><a href="#"> Cheese Pasta </a> </h3>
              <a href="#">Branding</a>/
              <a href="#">Identity</a>
             <a class="portfolio-img" href="assets/images/gallery/01.jpg"><i class="fa fa-expand"></i></a>               
              </div>
           </div>
        </div>
    </div>
    <div class="grid-item chinese">
      <div class="galllery-item">
        <span><img class="img-responsive" src="assets/images/gallery/02.jpg" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
            <h3><a href="#"> Cheese Pasta </a> </h3>
              <a href="#">Branding</a>/
              <a href="#">Identity</a>
             <a class="portfolio-img" href="assets/images/gallery/02.jpg"><i class="fa fa-expand"></i></a>               
              </div>
           </div>
        </div>
    </div>
     <div class="grid-item  vegetarian italian">
        <div class="galllery-item">
        <span><img class="img-responsive" src="assets/images/gallery/03.jpg" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
           <h3><a href="#"> Cheese Pasta </a> </h3>
              <a href="#">Branding</a>/
              <a href="#">Identity</a>
             <a class="portfolio-img" href="assets/images/gallery/03.jpg"><i class="fa fa-expand"></i></a>               
              </div>
           </div>
        </div>  
    </div>
    <div class="grid-item mexican">
      <div class="galllery-item">
        <span><img class="img-responsive" src="assets/images/gallery/04.jpg" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
           <h3><a href="#"> Cheese Pasta </a> </h3>
              <a href="#">Branding</a>/
              <a href="#">Identity</a>
             <a class="portfolio-img" href="assets/images/gallery/04.jpg"><i class="fa fa-expand"></i></a>               
              </div>
           </div>
        </div>
    </div>
    <div class="grid-item  vegetarian chinese">
      <div class="galllery-item">
        <span><img class="img-responsive" src="assets/images/gallery/05.jpg" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
          <h3><a href="#"> Cheese Pasta </a> </h3>
                <a href="#">Branding</a>/
                <a href="#">Identity</a>
             <a class="portfolio-img" href="assets/images/gallery/05.jpg"><i class="fa fa-expand"></i></a>               
              </div>
           </div>
        </div>  
    </div>
    <div class="grid-item  vegetarian">
      <div class="galllery-item">
        <span><img class="img-responsive" src="assets/images/gallery/06.jpg" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
            <h3><a href="#"> Cheese Pasta </a> </h3>
              <a href="#">Branding</a>/
              <a href="#">Identity</a>
             <a class="portfolio-img" href="assets/images/gallery/06.jpg"><i class="fa fa-expand"></i></a>               
              </div>
           </div>
        </div>
    </div>
    <div class="grid-item">
      <div class="galllery-item">
        <span><img class="img-responsive" src="assets/images/gallery/07.jpg" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
           <h3><a href="#"> Cheese Pasta </a> </h3>
              <a href="#">Branding</a>/
              <a href="#">Identity</a>
             <a class="portfolio-img" href="assets/images/gallery/07.jpg"><i class="fa fa-expand"></i></a>               
              </div>
           </div>
        </div> 
    </div>
      <div class="grid-item  vegetarian italian">
        <div class="galllery-item">
        <span><img class="img-responsive" src="assets/images/gallery/08.jpg" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
            <h3><a href="#"> Cheese Pasta </a> </h3>
              <a href="#">Branding</a>/
              <a href="#">Identity</a>
             <a class="portfolio-img" href="assets/images/gallery/08.jpg"><i class="fa fa-expand"></i></a>               
              </div>
           </div>
        </div>  
    </div>
     <div class="grid-item chinese">
        <div class="galllery-item">
        <span><img class="img-responsive" src="assets/images/gallery/09.jpg" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
            <h3><a href="#"> Cheese Pasta </a> </h3>
              <a href="#">Branding</a>/
              <a href="#">Identity</a>
             <a class="portfolio-img" href="assets/images/gallery/09.jpg"><i class="fa fa-expand"></i></a>               
              </div>
           </div>
        </div>
    </div>
     <div class="grid-item chinese">
       <div class="galllery-item">
        <span><img class="img-responsive" src="assets/images/gallery/10.jpg" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
            <h3><a href="#"> Cheese Pasta </a> </h3>
              <a href="#">Branding</a>/
              <a href="#">Identity</a>
             <a class="portfolio-img" href="assets/images/gallery/10.jpg"><i class="fa fa-expand"></i></a>               
              </div>
           </div>
        </div> 
    </div>
    <div class="grid-item chinese">
       <div class="galllery-item">
        <span><img class="img-responsive" src="assets/images/gallery/11.jpg" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
            <h3><a href="#"> Cheese Pasta </a> </h3>
              <a href="#">Branding</a>/
              <a href="#">Identity</a>
             <a class="portfolio-img" href="assets/images/gallery/11.jpg"><i class="fa fa-expand"></i></a>               
              </div>
           </div>
        </div> 
    </div>
    <div class="grid-item chinese">
       <div class="galllery-item">
        <span><img class="img-responsive" src="assets/images/gallery/12.jpg" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
            <h3><a href="#"> Cheese Pasta </a> </h3>
              <a href="#">Branding</a>/
              <a href="#">Identity</a>
             <a class="portfolio-img" href="assets/images/gallery/12.jpg"><i class="fa fa-expand"></i></a>               
              </div>
           </div>
        </div> 
    </div>
   </div>
 </div>
</section>

<div claass="clearfix"></div>

<section class="our-menu2 page-section-pt parallax pb-30 bg-overlay-black-70 " style="background-image: url(assets/images/bg_banner.jpg);">
  
<div class=" parallax bg-overlay-black-70" style="background-image: url(assets/images/resturant_img.png);    background-position: 52% -281.631px;">
<div class="container">
    <div class="row">
      <div class="col-sm-12">
        
      
      <div class="col-md-offset-2 col-md-8">
               <img src="assets/images/img_bannn.jpg" style="max-height:500px;width:100%">
            </div>
</div>
</div>
</div>
</div>
</section>

<div class="clearfix"></div>





<section class="">
<div class="container">
  <div class="row">


                                                            <div id="map" class="">
                                                                <div id="map-holder" style="height:370px;text-align:left;"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                            <div class="content-wrap cont_clr cont_clr2">
                                              
                                                    <div class="row">
                                                        <div class="col-md-12 nopad">

                                                            <div class="col-md-12  bottom-spacing">
                                                                <div class="row contact cnt">
                                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                                        <div class="contact-box text-center">
                                                                            <i class="fa fa-map-marker"></i>
                                                                            <h5>Address</h5>
                                                                            <p>
                                                                               Kuwait
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                                        <div class="contact-box text-center">
                                                                            <i class="fa fa-phone"></i>
                                                                            <h5>Phone</h5>
                                                                            <p>
                                                                               96965686
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                                        <div class="contact-box text-center">
                                                                            <i class="fa fa-envelope-o"></i>
                                                                            <h5>Email</h5>
                                                                            <p> support@website.com</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                                        <div class="contact-box text-center">
                                                                            <i class="fa fa-fax"></i>
                                                                            <h5>Fax</h5>
                                                                            <p>(007) 123 456 7890</p>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
</div>
</div>
</section>
<div claass="clearfix"></div>
    <section class="newsletter-section orange-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="newsletter-image">
          <img class="img-responsive center-block" src="assets/images/15.png" alt="">
        </div>
      </div>
      <div class="col-lg-8 col-md-8 text-center">
        <div class="newsletter-title mb-20 text-left">
          <h4 class="text-white">subscribe our newsletter </h4>
        </div>
        <form class="form-inline">
          <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-7">
              <div class="form-group">
                <input type="text" class="form-control" id="inputPassword2" placeholder="Enter your email address...">
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-5 text-left">
              <a class="button black" href="#">Subscribe now</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<a id="back-to-top" href="#top" class="gotop scroll" style="display: block;"></a>

	    
<?php echo get_footer(); ?><div class="clearfix"></div>
<script>
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:true,
        transitionStyle:"backSlide",
        autoPlay:true
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

$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

});
</script>
