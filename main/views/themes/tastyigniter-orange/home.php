
<style>
/* .header-2 .mega-menu section.menu-list-items{
    background:transparent !important;
} */

  /*--------------------------------------------------------- TOP FIXED FOR DESKTOP */
  /* .mega-menu.desktopTopFixed .menu-list-items {
  position: fixed !important;
  top: 0;
  left: 0;
  right: 0;
  max-width: 100%;
  padding: 0px 10px;
  background: #6f1e30 !important ;
  color: #fff  !important ;
}
.mega-menu.desktopTopFixed{
    background: #6f1e30 !important ;
} */
/* 
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
} */
.box-icon-svg .icon-inner{
position:absolute;
left:50%;
top:50%;
transform:translate(-50%,-50%)
}


.galy h3 {
      font-size: 100px;
      text-align: center;
    }

    .galy {
      position: relative;
    }

    .owl-carousel .owl-nav button.owl-next {
        background-color: #525252 !important;
      color: #fff !important;
      width: 20px;
      height: 20px;
      border-radius: 100%;
      line-height: 20px;
      position: absolute;
      right: 0px;
      top: 12px;
    }

    .owl-carousel .owl-nav button.owl-prev {
      background-color: #525252 !important;
      color: #fff !important;
      width: 20px;
      height: 20px;
      border-radius: 100%;
      line-height: 20px;
      position: absolute;
      left: 0px;
      top: 12px;
    }


    .galy ul.nav.nav-tabs li a span {
      display: block;
      text-transform: capitalize;
    }

    .galy ul.nav.nav-tabs {
      margin-bottom: 20px;
    }


    .galy .owl-dots {
      display: none !important;
    }



    .galy ul.nav.nav-tabs li a strong {
      display: block;
    }

    .galy ul.nav.nav-tabs {
      border: none;
    }

    .galy ul.nav.nav-tabs li.active a {
      background-color: #03a9f4 !important;
      color: #fff;
      text-decoration: none !important;
    }

    .galy ul.nav.nav-tabs li a {

      text-decoration: none !important;
    }

    .galy .tab-content {
        background-color: #fff;

    float: left;
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
                    <div class="col-md-3 col-sm-3 col-xs-6 icon-box">
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
                    <div class="col-md-3 col-sm-3 col-xs-6 wow-outer">
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
                    <div class="col-md-3 col-sm-3 col-xs-6 wow-outer">
                        <div class="box-icon-svg">
                            <div class="box-icon-svg-inner">
                                <svg width="60" height="60" viewBox="0 0 93 93" fill="none" xmlns="https://www.w3.org/2000/svg">
                                    <path d="M90 45C90 69.8528 69.8528 90 45 90C20.1472 90 0 69.8528 0 45C0 20.1472 22.5 19 45 4.00001C67.5 -11 90 20.1472 90 45Z" fill="#6f1e31"></path>
                                </svg>
                                <span class="icon-lg-2 icon-inner icon-white"><i class="fa fa-credit-card"></i></span>
                            </div>
                            <div class="box-icon-svg-caption">
                                <h4><?php echo lang('text_step_three'); ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
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
                <img class="img-responsive img1 " src="assets/images/icon/swt1.png" alt="">
            </div>
            <div class="book-menu">
                <div class="row">
                    <div class=" col-md-7 col-sm-12 col-md-offset-right-4 col-sm-10 ">
                        <div class="section-title1 text-center">
                            <div class="title-separator">
                                <h2 class="h2_sttt"> <span class="text-orange  padin_rt">About</span>Us</h2>
                            </div>
                            <span style="color: #7e3545;font-weight: 800; font-size: 15px;">
                                To create and sell high quality gourmet products!!
                            </span>
                            <p> Zalatimo Sweets Company established itself in Amman, Jordan in 1986 and has since, been expanding both locally and regionally. Currently, there are twelve retail outlets in Jordan, in addition to a branch in Kuwait. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="clearfix"></div>
        
        <div class="clearfix"></div>
                <section class="gallery white-bg page-section-ptb" id="gallery">
                <div class="obj_right">
                            <img class="img-responsive book-menu_img " src="assets/images/icon/sec-img-1.png" alt="">
                        </div>
                        <div class="obj_left" >
                            <img class="img-responsive book-menu_img " src="assets/images/icon/sec-img-2.png" >
                         </div>
                
                    <div class="container">
                        <div class="row">
                        <div class="col-lg-12 col-md-12">
                        <div class="section-title text-center">
                            <div class="title-separator">
                                <!-- <img src="assets/images/food_icon.png"> -->
                                <h2 class="h2_sttt"> <span class="text-orange  padin_rt">Our</span>Gallery</h2>
                            </div>

                        </div>
                    </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="isotope-filters">
                                    <div class="galy">
                                        <ul class="nav nav-tabs">
                                            <div class="owl_1 owl-carousel owl-theme">
                                                <div class="item active"> 
                                                    <li><button data-toggle="tab"  href="#all">All</button></li>
                                                </div>
                                                <div class="item">
                                                    <li> <button  data-toggle="tab"  href="#Arabic"> Arabic Sweets</button></li>
                                                </div>
                                                <div class="item">
                                                    <li> <button  data-toggle="tab"  href="#Mamoul">Mamoul</button></li>
                                                </div>
                                                <div class="item">
                                                    <li> <button  data-toggle="tab"  href="#Fresh">Fresh Sweets</button></li>
                                                </div>
                                                <div class="item">
                                                    <li> <button data-toggle="tab"  href="#Manakeesh">Manakeesh</button></li>
                                                </div>
                                                <div class="item">
                                                    <li> <button data-toggle="tab"  href="#Sandwiches">Sandwiches</button></li>
                                                </div>
                                                <div class="item">
                                                    <li> <button   data-toggle="tab"  href="#Appetizer"> Appetizer</button></li>
                                                </div>
                                                <div class="item">
                                                    <li> <button  data-toggle="tab"  href="#emb"> Ambience</button></li>
                                                </div>
                                            
                                            </div>
                                        </ul>
                                    </div>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="isotope popup-gallery columns-4">
                        <div class="grid-item " id="fresh">
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

        <!-- <section class="gallery white-bg page-section-ptb" id="gallery">
            <div class="col-lg-12 col-md-12">
                <div class="section-title text-center">
                    <div class="title-separator">
                        <h2 class="h2_sttt"> <span class="text-orange  padin_rt">Our</span>Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="isotope-filters">
                            <div class="galy">
                                <ul class="nav nav-tabs">
                                    <div class="owl_1 owl-carousel owl-theme">
                                        <div class="item active"> 
                                            <li><button data-toggle="tab"  href="#all">All</button></li>
                                        </div>
                                        <div class="item">
                                            <li> <button  data-toggle="tab"  href="#Arabic"> Arabic Sweets</button></li>
                                        </div>
                                        <div class="item">
                                            <li> <button  data-toggle="tab"  href="#Mamoul">Mamoul</button></li>
                                        </div>
                                        <div class="item">
                                            <li> <button  data-toggle="tab"  href="#Fresh">Fresh Sweets</button></li>
                                        </div>
                                        <div class="item">
                                            <li> <button data-toggle="tab"  href="#Manakeesh">Manakeesh</button></li>
                                        </div>
                                        <div class="item">
                                            <li> <button data-toggle="tab"  href="#Sandwiches">Sandwiches</button></li>
                                        </div>
                                        <div class="item">
                                            <li> <button   data-toggle="tab"  href="#Appetizer"> Appetizer</button></li>
                                        </div>
                                        <div class="item">
                                            <li> <button  data-toggle="tab"  href="#emb"> Ambience</button></li>
                                        </div>
                                    
                                    </div>
                                </ul>
                                <div class="tab-content popup-gallery">
                                    <div id="all" class="tab-pane fade in active">
                                        <div class="col-md-3 nopad grid-item ">
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
                                        <div class="col-md-3 nopad grid-item ">
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
                                        <div class="col-md-3 nopad grid-item ">
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
                        
                                    </div>
                                    <div id="Arabic" class="tab-pane fade">
                                        <div class="col-md-3 nopad grid-item ">
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
                        
                                    </div>
                                    <div id="Mamoul" class="tab-pane fade ">
                                        <div class="col-md-3 nopad grid-item fresh">
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
                        
                                    </div>
                                    <div id="Fresh" class="tab-pane fade">
                                        <div class="col-md-3 nopad grid-item fresh">
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
                                        <div class="col-md-3 nopad grid-item fresh">
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
                        
                                    </div>
                                    <div id="Manakeesh" class="tab-pane fade">
                                        <div class="col-md-3 nopad grid-item fresh">
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
                                        <div class="col-md-3 nopad grid-item fresh">
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
                        
                                    </div>
                                    <div id="Sandwiches" class="tab-pane fade">
                                        <div class="col-md-3 nopad grid-item fresh">
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
                                        <div class="col-md-3 nopad grid-item fresh">
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
                        
                                    </div>
                                    
                                    <div id="Appetizer" class="tab-pane fade">
                                        <div class="col-md-3 nopad grid-item fresh">
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
                                        <div class="col-md-3 nopad grid-item fresh">
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
                        
                                    </div>
                                    <div id="emb" class="tab-pane fade">
                                        <div class="col-md-3 nopad grid-item fresh">
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
                                        <div class="col-md-3 nopad grid-item fresh">
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
                        
                                    </div>
                                
                                
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
         SLIDING <div class="container">
                <div class="isotope popup-gallery columns-4">
                    <div class="col-md-3 nopad grid-item fresh">
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
                    <div class="col-md-3 nopad grid-item Arabic mexican">
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
                    
                    <div class="col-md-3 nopad grid-item Mamoul">
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
                    <div class="col-md-3 nopad grid-item  Mamoul">
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
                    <div class="col-md-3 nopad grid-item mexican">
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
                    <div class="col-md-3 nopad grid-item Mamoul ">
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
                    <div class="col-md-3 nopad grid-item Sandwiches ">
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
                    <div class="col-md-3 nopad grid-item Appetizer">
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
            </div> //SLIDING
        </section> -->

        <div claass="clearfix"></div>

        <section class="our-menu2 page-section-pt parallax pb-30 bg-overlay-black-70 ">
            <div class=" parallax bg-overlay-black-70 hg_bg" style="background: url(assets/images/icon/slider_image1.jpg) !important;background-size: cover;background-repeat:no-repeat;">
            <div class="slider-container">
                                <div class="slider-control left inactive"></div>
                                <div class="slider-control right"></div>
                                <ul class="slider-pagi"></ul>
                                <div class="slider">
                                    <div class="slide slide-0 active">
                                    <div class="slide__bg"></div>
                                    <div class="slide__content">
                                        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                                        <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                                        </svg>
                                        <div class="slide__text">
                                        <h2 class="slide__text-heading">Best Offer 1</h2>
                                        <p class="slide__text-desc">Perhaps one of the most well-known Arabic pastries, Baklava is a flaky, filo-pastry dessert with layers of honey or syrup. It’s widely considered to have originated in Turkey, although many similar desserts can be found in countries throughout the Middle East. The rich flavor comes from the traditional chopped nuts, which are often almonds and pistachios or sometimes walnuts, depending on the region that the recipe derives from.</p>

                                        </div>
                                    </div>
                                    </div>
                                    <div class="slide slide-1 ">
                                    <div class="slide__bg"></div>
                                    <div class="slide__content">
                                        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                                        <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                                        </svg>
                                        <div class="slide__text">
                                        <h2 class="slide__text-heading">Discount</h2>
                                        <p class="slide__text-desc">Perhaps one of the most well-known Arabic pastries, Baklava is a flaky, filo-pastry dessert with layers of honey or syrup. It’s widely considered to have originated in Turkey, although many similar desserts can be found in countries throughout the Middle East. The rich flavor comes from the traditional chopped nuts, which are often almonds and pistachios or sometimes walnuts, depending on the region that the recipe derives from.</p>
                                      
                                        </div>
                                    </div>
                                    </div>
                                    <div class="slide slide-2">
                                    <div class="slide__bg"></div>
                                    <div class="slide__content">
                                        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                                        <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                                        </svg>
                                        <div class="slide__text">
                                        <h2 class="slide__text-heading">Best Price</h2>
                                        <p class="slide__text-desc">Perhaps one of the most well-known Arabic pastries, Baklava is a flaky, filo-pastry dessert with layers of honey or syrup. It’s widely considered to have originated in Turkey, although many similar desserts can be found in countries throughout the Middle East. The rich flavor comes from the traditional chopped nuts, which are often almonds and pistachios or sometimes walnuts, depending on the region that the recipe derives from.</p>
                                     
                                        </div>
                                    </div>
                                    </div>
                                    <div class="slide slide-3">
                                    <div class="slide__bg"></div>
                                    <div class="slide__content">
                                        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                                        <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                                        </svg>
                                        <div class="slide__text">
                                        <h2 class="slide__text-heading">Buy 5Kg Get 10% discount</h2>
                                        <p class="slide__text-desc">Perhaps one of the most well-known Arabic pastries, Baklava is a flaky, filo-pastry dessert with layers of honey or syrup. It’s widely considered to have originated in Turkey, although many similar desserts can be found in countries throughout the Middle East. The rich flavor comes from the traditional chopped nuts, which are often almonds and pistachios or sometimes walnuts, depending on the region that the recipe derives from.</p>
                                     
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                        </div>
                 
            </div>
        </section>

        <div class="clearfix"></div>

        <section>
        
        </section>

    <section class="map_sec" id="locations">
                    <div class="col-lg-12 col-md-12">
                        <div class="section-title text-center">
                            <div class="title-separator">
                                <!-- <img src="assets/images/food_icon.png"> -->
                                <h2 class="h2_sttt"> <span class="text-orange  padin_rt">Our</span>Locations</h2>
                            </div>

                        </div>
                    </div>
                    <div class="content-wrap">
                    <div class="row">
                        <div class="col-sm-4 nopad">
                            <div class="panel-group map_st" id="accordion" role="tablist" aria-multiselectable="true">
                            <?php $count = 0; foreach ($restaurants as $restaurant){  ?>
                                <div class="panel panel-default marker-link" data-markerid="<?php echo $count; ?>">
                                    <div class="panel-heading" role="tab" id="headingOne<?php echo $count; ?>">
                                        <h6 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?php echo $count; ?>" aria-expanded="true" aria-controls="collapseOne<?php echo $count; ?>">
                                            <?php echo $restaurant['location_name']; ?>
                                        </a>
                                    </h6>
                                    </div>
                                    <div id="collapseOne<?php echo $count; ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne<?php echo $count; ?>">
                                        <div class="panel-body">
                                            <div>
                                            <div class="col-xs-12 col-sm-12">
                                                <!-- <div class="open_off">
                                                    <span class="text-open"> open</span>
                                                </div> -->
                                                <ul class="location_list">

                                                    <li class="text-muted">
                                                            <?php if (!$has_delivery AND $has_collection) { ?>
                                                                <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                                            <?php echo lang('text_collection_only'); ?>
                                                            <?php } else if ($has_delivery AND !$has_collection) { ?>
                                                                <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                                            <?php echo lang('text_delivery_only'); ?>
                                                            <?php } else if ($has_delivery AND $has_collection) { ?>
                                                                <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                                            <?php echo lang('text_both_types'); ?>
                                                            <?php } else { ?>
                                                            <?php echo lang('text_no_types'); ?>
                                                            <?php } ?>
                                                     </li> 
                                                     <li class="text-muted">
                                                        <?php if ($has_delivery) { ?>
                                                        <?php if ($delivery_status === 'open') { ?>
                                                            <i class="fa fa-motorcycle ic_size"></i>
                                                        <?php echo sprintf(lang('text_delivery_time_info'), sprintf(lang('text_in_minutes'), $delivery_time)); ?>
                                                        <?php } else if ($delivery_status === 'opening') { ?>
                                                            <i class="fa fa-motorcycle ic_size"></i>
                                                        <?php echo sprintf(lang('text_delivery_time_info'), sprintf(lang('text_starts'), $delivery_time)); ?>
                                                        <?php } else { ?>
                                                            <i class="fa fa-motorcycle ic_size"></i>
                                                        <?php echo sprintf(lang('text_delivery_time_info'), lang('text_is_closed')); ?>
                                                        <?php } ?>
                                                        <?php } ?>
                                                    </li> 
                                                    <li class="text-muted">
                                                        <?php if ($has_collection) { ?>
                                                        <?php if ($collection_status === 'open') { ?>
                                                            <i class="fa fa-suitcase" aria-hidden="true"></i>
                                                        <?php echo sprintf(lang('text_collection_time_info'), sprintf(lang('text_in_minutes'), $collection_time)); ?>
                                                        <?php } else if ($collection_status === 'opening') { ?>
                                                            <i class="fa fa-suitcase" aria-hidden="true"></i>
                                                        <?php echo sprintf(lang('text_collection_time_info'), sprintf(lang('text_starts'), $collection_time)); ?>
                                                        <?php } else { ?>
                                                            <i class="fa fa-suitcase" aria-hidden="true"></i>
                                                        <?php echo sprintf(lang('text_collection_time_info'), lang('text_is_closed')); ?>
                                                        <?php } ?>
                                                        <?php } ?>
                                                    </li> 
                                                     
                                                </ul>
                                           
                                                </div>
                                             
                                                                                
                                                <?php 
                                            
                                           // print_r($restaurant); ?>         
                                              
                                            <!--  <br/> 
                                            <?php //echo $restaurant['location_telephone']; ?>
                                            <?php //print_r($restaurants); ?>
                                            <i class="fa fa-building-o"></i>&nbsp;<?php echo $restaurant['location_address_1'].','.$restaurant['location_address_2'].','.$restaurant['location_city'].','.$restaurant['location_state']; ?>Kuwait<br>
                                            <i class="fa fa-envelope"></i>&nbsp;<?php echo $restaurant['location_email']; ?><br>
                                            <i class="fa fa-phone"></i>&nbsp;<?php echo $restaurant['location_telephone']; ?><br> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $count++; } ?>
                            </div>
                        </div>
                        <div class="col-sm-8 nopad"><div id="map_home" class="slideInUp map_head" style="height:400px; width:100%"></div></div>
                    <div class="clearfix"></div>
                 
                 </div>
                </section>

                <div claass="clearfix"></div>
</div>
</section>

                <?php echo get_footer(); ?>
                    <div class="clearfix"></div>

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
                        function initialize() {
                        var markers = new Array();
var mapOptions = {
    zoom: 14,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    //gestureHandling: 'greedy',
    center: new google.maps.LatLng(29.3757712, 47.9436413)
};
var resta= <?php echo json_encode($restaurants) ?>;
var local_res = [];
resta.forEach(value => {
    var map = [new google.maps.LatLng(value['location_lat'], value['location_lng']), 'Marker 1','<div><strong>'+value['location_name']+'</strong></div><br>\
                                <i class="fa fa-building-o"></i>&nbsp;'+value['location_address_1']+','+value['location_address_2']+','+value['location_city']+','+value['location_state']+ ',Kuwait<br>\
                                <i class="fa fa-envelope"></i>&nbsp;'+value['location_email']+'<br>\
                                <i class="fa fa-phone"></i>&nbsp; '+value['location_telephone']+'<br>\
    	<a href="https://www.google.com/maps/place/'+value['location_name']+'/@'+value['location_lat']+','+value['location_lng']+',16.15z" target="_blank">Get Directions</a>'];
    local_res.push(map);
});
var locations =local_res;
var map = new google.maps.Map(document.getElementById('map_home'), mapOptions);
var infowindow = new google.maps.InfoWindow();
for (var i = 0; i < locations.length; i++) {
    // Append a link to the markers DIV for each marker
    $('#markers').append('<a class="marker-link" data-markerid="' + i + '" href="#">' + locations[i][1] + '</a> ');
    var marker = new google.maps.Marker({
        position: locations[i][0],
	    icon: "assets/images/restaurant_mapmarker13.png",
        map: map,
        title: locations[i][1],
    });
    // Register a click event listener on the marker to display the corresponding infowindow content
    google.maps.event.addListener(marker, 'click', (function (marker, i) {
        return function () {
            infowindow.setContent(locations[i][2]);
            infowindow.open(map, marker);
        }
    })(marker, i));
    // Add marker to markers array
    markers.push(marker);
}
// Trigger a click event on each marker when the corresponding marker link is clicked
$('.marker-link').on('click', function () {
    google.maps.event.trigger(markers[$(this).data('markerid')], 'click');
});
}
initialize();
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
	
	// jQuery(window).on('scroll', function() {
	// 	if ($(this).scrollTop() > 100) {
	// 		$('.header .main-menu').addClass("sticky");
	// 	} else {
	// 		$('.header .main-menu').removeClass("sticky");
	// 	}
	// 	});
});
</script>
<script>
    $(document).ready(function() {
        // document.querySelectorAll('.collapsible').forEach(el => el.addEventListener('click', e => {
        //                 e.currentTarget.classList.toggle('collapsible--open')
        //             }))
        $(".header-2 .mega-menu section.menu-list-items").attr("style", "background:transparent !important");

        window.addEventListener("scroll", function (event) {
            var scroll = this.scrollY;
            if(scroll < 50 ) {
//  $("img").attr("width","500");

                $(".header-2 .mega-menu section.menu-list-items").attr("style", "background:transparent !important");
            } else {
                $(".header-2 .mega-menu section.menu-list-items").removeAttr("style");
            }
           
        });
                    $('.panel-collapse').collapse('hide');
                            if(getCookie('order_type') === ""){
                                document.cookie = "order_type=1; path=/";
                            }
                            $('#main-header .navbar-nav a').on('click', function() {
                                $('#main-header .navbar-nav').find('li.active').removeClass('active');
                                $(this).parent('li').addClass('active');
                            });
                            //initMapHome();
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
	const $app = $('.app');
	const $img = $('.app__img');
	const $pageNav1 = $('.pages__item--1');
	const $pageNav2 = $('.pages__item--2');
	let animation = true;
	let curSlide = 1;
	let scrolledUp, nextSlide;
	
	let pagination = function(slide, target) {
		animation = true;
		if (target === undefined) {
			nextSlide = scrolledUp ? slide - 1 : slide + 1;
		} else {
			nextSlide = target;
		}
		
		$('.pages__item--' + nextSlide).addClass('page__item-active');
		$('.pages__item--' + slide).removeClass('page__item-active');
		
		$app.toggleClass('active');
		setTimeout(function() {
			animation = false;
		}, 3000)
	}
	
	let navigateDown = function() {
		if (curSlide > 1) return;
		scrolledUp = false;
		pagination(curSlide);
		curSlide++;
	}
	let navigateUp = function() {
		if (curSlide === 1) return;
		scrolledUp = true;
		pagination(curSlide);
		curSlide--;
	}
	setTimeout(function() {
		$app.addClass('initial');
	}, 1500);
	setTimeout(function() {
		animation = false;
	}, 4500);
	
	$(document).on('mousewheel DOMMouseScroll', function(e) {
		var delta = e.originalEvent.wheelDelta;
		if (animation) return;
		if (delta > 0 || e.originalEvent.detail < 0) {
			navigateUp();
		} else {
			navigateDown();
		}
	});
	$(document).on("click", ".pages__item:not(.page__item-active)", function() {
		if (animation) return;
		let target = +$(this).attr('data-target');
		pagination(curSlide, target);
		curSlide = target;
	});
});
</script>

<script>
    $(document).ready(function() {
      var li = $(".galy .owl-item li ");
      $(".galy .owl-item li").click(function() {
        li.removeClass('active');
      });
  
    });
  </script>
  <script>
    $(' .owl_1').owlCarousel({
      loop: false,
      margin: 2,
      responsiveClass: true,
      autoplayHoverPause: false,
      autoplay: false,
      slideSpeed: 400,
      paginationSpeed: 400,
      autoplayTimeout: 3000,
      responsive: {
        0: {
          items: 2,
          nav: true,
          loop: false
        },
        600: {
          items: 4,
          nav: true,
          loop: false
        },
        1000: {
          items: 8,
          nav: true,
          loop: false
        }
      }
    })
  </script>
  <script>
      $(document).ready(function() {
  var $slider = $(".slider"),
    $slideBGs = $(".slide__bg"),
    diff = 0,
    curSlide = 0,
    numOfSlides = $(".slide").length - 1,
    animating = false,
    animTime = 2000,
    autoSlideTimeout,
    autoSlideDelay = 6000,
    $pagination = $(".slider-pagi");

  function createBullets() {
    for (var i = 0; i < numOfSlides + 1; i++) {
      var $li = $("<li class='slider-pagi__elem'></li>");
      $li.addClass("slider-pagi__elem-" + i).data("page", i);
      if (!i) $li.addClass("active");
      $pagination.append($li);
    }
  }

  createBullets();

  function manageControls() {
    $(".slider-control").removeClass("inactive");
    if (!curSlide) $(".slider-control.left").addClass("inactive");
    if (curSlide === numOfSlides)
      $(".slider-control.right").addClass("inactive");
  }

  function autoSlide() {
    autoSlideTimeout = setTimeout(function() {
      curSlide++;
      if (curSlide > numOfSlides) curSlide = 0;
      changeSlides();
    }, autoSlideDelay);
  }

  autoSlide();

  function changeSlides(instant) {
    if (!instant) {
      animating = true;
      manageControls();
      $slider.addClass("animating");
      $slider.css("top");
      $(".slide").removeClass("active");
      $(".slide-" + curSlide).addClass("active");
      setTimeout(function() {
        $slider.removeClass("animating");
        animating = false;
      }, animTime);
    }
    window.clearTimeout(autoSlideTimeout);
    $(".slider-pagi__elem").removeClass("active");
    $(".slider-pagi__elem-" + curSlide).addClass("active");
    $slider.css("transform", "translate3d(" + -curSlide * 100 + "%,0,0)");
    $slideBGs.css("transform", "translate3d(" + curSlide * 50 + "%,0,0)");
    diff = 0;
    autoSlide();
  }

  function navigateLeft() {
    if (animating) return;
    if (curSlide > 0) curSlide--;
    changeSlides();
  }

  function navigateRight() {
    if (animating) return;
    if (curSlide < numOfSlides) curSlide++;
    changeSlides();
  }

  $(document).on("mousedown touchstart", ".slider", function(e) {
    if (animating) return;
    window.clearTimeout(autoSlideTimeout);
    var startX = e.pageX || e.originalEvent.touches[0].pageX,
      winW = $(window).width();
    diff = 0;

    $(document).on("mousemove touchmove", function(e) {
      var x = e.pageX || e.originalEvent.touches[0].pageX;
      diff = (startX - x) / winW * 70;
      if ((!curSlide && diff < 0) || (curSlide === numOfSlides && diff > 0))
        diff /= 2;
      $slider.css(
        "transform",
        "translate3d(" + (-curSlide * 100 - diff) + "%,0,0)"
      );
      $slideBGs.css(
        "transform",
        "translate3d(" + (curSlide * 50 + diff / 2) + "%,0,0)"
      );
    });
  });

  $(document).on("mouseup touchend", function(e) {
    $(document).off("mousemove touchmove");
    if (animating) return;
    if (!diff) {
      changeSlides(true);
      return;
    }
    if (diff > -8 && diff < 8) {
      changeSlides();
      return;
    }
    if (diff <= -8) {
      navigateLeft();
    }
    if (diff >= 8) {
      navigateRight();
    }
  });

  $(document).on("click", ".slider-control", function() {
    if ($(this).hasClass("left")) {
      navigateLeft();
    } else {
      navigateRight();
    }
  });

  $(document).on("click", ".slider-pagi__elem", function() {
    curSlide = $(this).data("page");
    changeSlides();
  });
});
$('.panel-heading').click( function(e) {
        $('.in').collapse('hide');
    });
      </script>