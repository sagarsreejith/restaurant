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
                                        </svg><span class="icon-lg-2 icon-inner icon-white"><i class="fa fa-credit-card"></i></span>
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

                </div>


       
                <section class="about" id="about">
                        <div class="object-right object_right_img animated fadeIn ">
                            <img class="img-responsive img1 " src="assets/images/icon/swt1.png" alt="">
                        </div>
                        <!-- <div class=" " >
                            <img class="img-responsive book-menu_img " src="assets/images/icon/swt2.png" style="position:absolute;opacity: 0.9;">
                         </div> -->
                        <div class="">
                        
                            <div class="book-menu">

                                <div class="">
                                    <div class="row">
                                        
                                        <div class=" col-md-7 col-sm-12 col-md-offset-right-4 col-sm-10 ">
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
                                      
                                 
                             
                </section>
                <div class="clearfix"></div>
                <!-- <section class="gallery white-bg page-section-ptb" id="gallery">
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
                                        
                                            <h2 class="h2_sttt"> <span class="text-orange  padin_rt">Our</span>Gallery</h2>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="isotope-filters"> 
                                    
                                    <button data-filter="" class="active">All</button>
                                    <?php $count=0; foreach ($menu_categories as $category){  if($count < 7) {?> 
                                        
                                        <button data-filter='.<?php echo strtolower(preg_replace("/[^a-zA-Z]/", "", $category['name']))?>'><?php echo $category['name']; ?></button>
                                    
                                    <?php $count++; } }?>
                                    </div>
                                </div>
                            </div>
                     
                            <div class="isotope popup-gallery columns-4">
                                <?php foreach ($res_menu as $menu){  ?>
                                <div class='grid-item <?php echo strtolower(preg_replace("/[^a-zA-Z]/", "", $menu->name))?>'>
                                        <div class="galllery-item gal_img">
                                            <span><img class="img-responsive" src="<?php echo site_url('assets/images/'.$menu->menu_photo); ?>" alt=""></span>
                                            <div class="overlay">
                                                <div class="overlay-content">
                                                    <h3><a href="#"> <?php echo $menu->menu_name; ?></a> </h3>
                                                    <a class="portfolio-img" href="<?php echo site_url('assets/images/'.$menu->menu_photo); ?>"><i class="fa fa-expand"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                </section> -->
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

                <div claass="clearfix"></div>

                <section class="our-menu2 page-section-pt parallax pb-30 bg-overlay-black-70 ">

                    <div class=" parallax bg-overlay-black-70 hg_bg" style="background: url(assets/images/icon/slider_image1.jpg) !important;background-size: cover;background-repeat:no-repeat;">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">

                                <div class="cont">
                                                 
                                                    <div class="app">
                                                        <div class="app__bgimg">
                                                            <div class="app__bgimg-image app__bgimg-image--1">
                                                            <div class="app__img">
                                                                <img onmousedown="return false" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/537051/whiteTest4.png" alt="city" />
                                                             </div>
                                                             <div class="app__text app__text--1">
                                                                <div class="app__text-line app__text-line--4">Eid Special </div>
                                                                <div class="app__text-line app__text-line--3">25% offer</div>
                                                             </div>
                                                            </div>
                                                            <div class="app__bgimg-image app__bgimg-image--2">

                                                                <div class="app__img">
                                                                    <img onmousedown="return false" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/537051/whiteTest4.png" alt="city" />
                                                                </div>
                                                                <div class="app__text app__text--2">
                                                                    <div class="app__text-line app__text-line--4">Best Offer</div>
                                                                    <div class="app__text-line app__text-line--3">Get free </div>
                                                                </div>
                                                        
                                                            </div>
                                                          
                                                        </div>
                                                      
                                                       
                                                        
                                                       
                                                        
                                                    </div>
                                                    <div class="pages">
                                                        <ul class='pages__list'>
                                                            <li data-target='1' class='pages__item pages__item--1 page__item-active'></li>
                                                            <li data-target='2' class='pages__item pages__item--2'></li>
                                                        </ul>
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
                                                <div class="open_off">
                                                    <span class="text-success"> open</span>
                                                </div>
                                                <ul class="location_list">

                                                    <li class="text-muted"><i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                                                Offers delivery only, pick-up is not available.																												
                                                    </li>
                                                    <li class="text-muted"><i class="fa fa-motorcycle"></i>
                                                            Delivery in <b>50</b> minutes
                                                    </li>
                                                    <li class="text-muted "><span class="li_class"></span>
                                                                    Pick-up in <b>30</b> minutes
                                                    </li>
                                                     
                                                </ul>
                                           
                                                </div>
                                             
                                                                                
                                                            
                                              
                                            <!-- <?php echo $restaurant['description']; ?> <br/> 
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



                <div class="modal fade" id="login" tabindex="-1" data-dismiss="modal"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2> <span class="text-orange">Log In</span></h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php if ($this->alert->get('', 'alert')) { ?>
                        <div id="notification">
                        <?php echo $this->alert->display('', 'alert'); ?>
                        </div>
                        <?php } ?>
                        <fieldset>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" name="email" id="login-email" class="form-control input-lg" placeholder="<?php echo lang('emailid'); ?>" autofocus=""/>
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
                                <span class="text-danger" id="login-error"></span>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-primary btn-block btn-lg" onclick="login()">
                                            Login
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <a class="forgot_btn1  " href="<?php echo site_url('forgot-password'); ?>" style="color:#6f1e30;text-transform: none;">
                                            Forgot Passowrd?
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <a class=" reg_btn1 text-right" data-dismiss="modal" data-toggle="modal" data-target="#register"> Register</a> 
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
   
        <div class="modal fade" id="register" tabindex="-1" data-dismiss="modal"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    </div>
                    <div class="modal-body">
                    <div id="register-form" class="content-wrap col-sm-12 center-block">
					<div class="section-title text-center">
						<div class="title-separator"></div>
						<h2 class="reg_st"> <span class="text-orange"><?php echo lang('text_register'); ?></span></h2>
						<span class="under-heading"></span>
					</div>
				
					<form method="POST" accept-charset="utf-8" action="<?php echo current_url(); ?>" role="form" class="">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" id="first-name" class="form-control input-lg" value="<?php echo set_value('first_name'); ?>" name="first_name" placeholder="<?php echo lang('label_first_name'); ?>" autofocus="">
									<?php echo form_error('first_name', '<span class="text-danger">', '</span>'); ?>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<!-- <input type="text" id="last-name" class="form-control input-lg" value="<?php echo set_value('last_name'); ?>" name="last_name" placeholder="<?php echo lang('label_last_name'); ?>">
									<?php echo form_error('last_name', '<span class="text-danger">', '</span>'); ?> -->
									<input type="text" id="telephone" class="form-control input-lg" value="<?php echo set_value('telephone'); ?>" name="telephone" placeholder="<?php echo lang('label_telephone'); ?>">
									<?php echo form_error('telephone', '<span class="text-danger">', '</span>'); ?>
								</div>
							</div>
						</div>
						<div class="form-group">
							<input type="text" id="email" class="form-control input-lg" value="<?php echo set_value('email'); ?>" name="email" placeholder="<?php echo lang('label_email'); ?>">
							<?php echo form_error('email', '<span class="text-danger">', '</span>'); ?>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="password" id="password" class="form-control input-lg" value="" name="password" placeholder="<?php echo lang('label_password'); ?>">
									<?php echo form_error('password', '<span class="text-danger">', '</span>'); ?>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="password" id="password-confirm" class="form-control input-lg" name="password_confirm" value="" placeholder="<?php echo lang('label_password_confirm'); ?>">
									<?php echo form_error('password_confirm', '<span class="text-danger">', '</span>'); ?>
								</div>
							</div>
						</div>
				
					

						<?php if ($registration_terms) {?>
							<div class="row">
								<div class="col-xs-8 col-sm-9 col-md-12 connt_clr">
									<span class="button-checkbox">
										<button id="terms-condition" type="button" class="btn" data-color="info" tabindex="7">&nbsp;&nbsp;<?php echo lang('button_terms_agree'); ?></button>
				                        <input type="checkbox" name="terms_condition" class="hidden" value="1" <?php echo set_checkbox('terms_condition', '1'); ?>>
									</span>
									<?php echo sprintf(lang('label_terms'), $registration_terms); ?>
								</div>
								<?php echo form_error('terms_condition', '<span class="text-danger">', '</span>'); ?>
							</div>
							<div class="modal fade" id="terms-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-body">
											
											
										<h4>	Introduction</h4>
												<p>These Website Standard Terms and Conditions written on this webpage shall manage your use of our website, Webiste Name accessible at Website.com.

												These Terms will be applied fully and affect to your use of this Website. By using this Website, you agreed to accept all terms and conditions written in here. You must not use this Website if you disagree with any of these Website Standard Terms and Conditions.

												Minors or people below 18 years old are not allowed to use this Website.</p>

												<h4> Intellectual Property Rights</h4>
												<p>Other than the content you own, under these Terms, Company Name and/or its licensors own all the intellectual property rights and materials contained in this Website.

												You are granted limited license only for purposes of viewing the material contained on this Website.</p>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
						

						<div class="row">
							<div class="col-xs-12 col-md-6">
								<button type="submit" class="btn btn-primary btn-block btn-lg"><?php echo lang('button_register'); ?></button>
							</div>
							<div class="col-xs-12 col-md-6">
								<a href="<?php echo $login_url; ?>" class="btn btn-default btn-block btn-lg"><?php echo lang('button_login'); ?></a>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-8 col-sm-12 col-md-12  col-md-12 connt_clr subscribe">
								<span class="button-checkbox">
									<button id="newsletter" type="button" class="btn" data-color="info" tabindex="7">&nbsp;&nbsp<?php echo lang('button_subscribe'); ?></button>
			                        <input type="checkbox" name="newsletter" class="hidden" value="1" <?php echo set_checkbox('newsletter', '1'); ?>>
								</span>
								 <?php echo lang('label_newsletter'); ?>
							</div>
							<?php echo form_error('newsletter', '<span class="text-danger">', '</span>'); ?>
						</div>
					</form>
				</div>
                    </div>
                </div>
            </div>
        </div>                                           



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
    gestureHandling: 'greedy',
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
	
	jQuery(window).on('scroll', function() {
		if ($(this).scrollTop() > 100) {
			$('.header .main-menu').addClass("sticky");
		} else {
			$('.header .main-menu').removeClass("sticky");
		}
		});

});

</script>
<script>
    $(document).ready(function() {
        // document.querySelectorAll('.collapsible').forEach(el => el.addEventListener('click', e => {
        //                 e.currentTarget.classList.toggle('collapsible--open')
        //             }))
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