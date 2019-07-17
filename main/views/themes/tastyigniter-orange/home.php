<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Amatic+SC:400,700|Lilita+One" rel="stylesheet">

<style>
 .download_sec{
      display:block;
      width:100%;
      background:#f5f5f5;
      padding:20px 0;
     
  }
  .content_st {
   
    float:left;
    width:100%;
  }
  .content_st h6{color:#000}
  .content_st p{color:#000;font-size:15px;}
 
  .img_sec img{
      max-width:184px;
  }
  .phone_num{ padding:20px 0}
  .btn-add-phone{margin:10px 0;width: 100%;
    background: #e01212;
    padding: 10px;
    color:#fff;
    border: 1px solid #e01112;}



    /*-abt-*/
 
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
<div id="page-content" class="icon_sec">
	<div class="container top-spacing-10">
	    <div class="content-wrap">
            <div id="order-steps" class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="step-item">
                        <div class="icon">
                            <i class="fa fa-search"></i>
                        </div>
                        <h4><?php echo lang('text_step_one'); ?></h4>
                        <p><?php echo lang('text_step_search'); ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="step-item">
                        <div class="icon">
                            <i class="fa fa-mouse-pointer"></i>
                        </div>
                        <h4><?php echo lang('text_step_two'); ?></h4>
                        <p><?php echo lang('text_step_choose'); ?></p>
                    </div>
                </div>
                <div class="clearfix visible-xs"></div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="step-item">
                        <div class="icon">
                            <i class="fa fa-credit-card"></i>
                        </div>
                        <h4><?php echo lang('text_step_three'); ?></h4>
                        <p><?php echo lang('text_step_pay'); ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="step-item">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h4><?php echo lang('text_step_four'); ?></h4>
                        <p><?php echo lang('text_step_enjoy'); ?></p>
                    </div>
                </div>
            </div>
            <?php echo get_partial('content_bottom'); ?>
        </div>
	</div>
</div>


<section class="about white-bg">
  <div class="object-bottom-top">
    <div class="object-left">
      <img class="img-responsive" src="assets/images/01.jpg" alt="">
    </div>
    <div class="object-right">
      <img class="img-responsive" src="assets/images/02.jpg" alt="">
    </div>
  </div>
  <div class="page-section-ptb">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="section-title text-center">
            <div class="title-separator">
              <i class="glyph-icon flaticon-food-27"></i>
            </div>
            <h2 class="h2_sttt"> <span class="text-orange  padin_rt">Welcome to</span>Lugma</h2>
            <p>Whatever your occasion, We makes it one to remember!</p>
          </div>
        </div>
      </div>
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <div class="about-content text-center">
          <p>We provide you with daily self-made bread, sourdough pizza, roasted fish-meat-vegetables and many more. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>
      </div>
    </div>
    <div class="book-menu mt-40">
      <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-7 text-right">
          <div class="content mt-80">
            <h2 class="mr-10">Check out our<span class="text-orange">  delicious menu</span></h2>
            <img class="img-responsive mt-30" src="assets/images/arrow.png" alt="">
          </div>
        </div>
        <div class="col-lg-5 col-md-3 col-sm-5">
        
          <div id="scroll-wrap">
            <div class="main">
            <div id="bookshelf" class="bookshelf">
                <figure>
                  
                  <div class="perspective"><div class="book" data-book="book-1"><div class="cover"><div class="front"></div><div class="inner inner-left"></div></div><div class="inner inner-right"></div></div></div><div class="buttons"><a href="#">Open menu</a> </div>
                  <div class="details"><span class="close-details"></span></div>
                </figure>
              </div>
            </div>
          </div>
          <div class="bb-custom-wrapper" id="book-1">
            <div class="bb-bookblock">
              <div class="bb-item">
                <div class="bb-custom-side page-layout-3">
                  <div class="book-content text-center">
                    <div class="book-logo mt-30">
                      <img class="img-responsive center-block" src="images/menu/book-logo.png" alt="">
                    </div>
                    <div class="delivery-service">
                      <span class="text-white mb-10">delivery service</span>
                      <h2 class="text-white mb-10 mb-10 ">01-147-258-3690</h2>
                      <p class="mb-10 text-white">1234 North Avenue Luke, IN 360001</p>
                      <p class="text-white">support@website.com</p>
                    </div>
                  </div>
                </div>
                <div class="bb-custom-side page-layout-3">
                  <div class="book-content">
                    <div class="row">
                      <div class="col-lg-12 col-md-12">
                        <div class="section-title text-center">
                          <h2 class="text-white"> <span class="text-orange">starter</span> menu</h2>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-50">
                      <div class="col-lg-12 col-md-12">
                        <div class="menu-body menu-left">
                          <div class="menu-thumbnail">
                            <img class="img-responsive center-block" src="images/dish/01.png" alt="">
                          </div>
                          <div class="menu-details">
                            <div class="menu-title clearfix">
                              <h4>BEST DISHES</h4>
                              <span class="price">$99.0</span>
                            </div>
                            <div class="menu-description">
                              <p>Salmon fillet in a rich red curry with coconut milk, sweet basil leaves ,pea aubergine, and kaffir lime leaves</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-50">
                      <div class="col-lg-12 col-md-12">
                        <div class="menu-body menu-left">
                          <div class="menu-thumbnail">
                            <img class="img-responsive center-block" src="images/dish/02.png" alt="">
                          </div>
                          <div class="menu-details">
                            <div class="menu-title clearfix">
                              <h4>PREMIUM CAFE</h4>
                              <span class="price">$99.0</span>
                            </div>
                            <div class="menu-description">
                              <p>The famous hot, sour and spicy thai soup with king prawn, shimeji mushrooms, lemongrass, and lime leaf</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-50">
                      <div class="col-lg-12 col-md-12">
                        <div class="menu-body menu-left">
                          <div class="menu-thumbnail">
                            <img class="img-responsive center-block" src="images/dish/03.png" alt="">
                          </div>
                          <div class="menu-details">
                            <div class="menu-title clearfix">
                              <h4>PREMIUM The Zayka</h4>
                              <span class="price">$99.0</span>
                            </div>
                            <div class="menu-description">
                              <p>Thai rice noodles stir-fried with bean curd, chinese chives, peanuts and beans sprouts in a special homemade sauce</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 col-md-12">
                        <div class="menu-body menu-left">
                          <div class="menu-thumbnail">
                            <img class="img-responsive center-block" src="images/dish/04.png" alt="">
                          </div>
                          <div class="menu-details">
                            <div class="menu-title clearfix">
                              <h4>PREMIUM The Zayka</h4>
                              <span class="price">$99.0</span>
                            </div>
                            <div class="menu-description">
                              <p>Stir fried king prawn, tender stem broccoli and asparagus with oyster sauce. Deep-fried mince prawn</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bb-item">
                <div class="bb-custom-side page-layout-1">
                  <div class="book-content">
                    <div class="row">
                      <div class="col-lg-12 col-md-12">
                        <div class="section-title text-center">
                          <h2 class="text-white"> <span class="text-orange">main</span> menu</h2>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-50">
                      <div class="col-lg-12 col-md-12">
                        <div class="menu-body menu-left">
                          <div class="menu-thumbnail">
                            <img class="img-responsive center-block" src="images/dish/05.png" alt="">
                          </div>
                          <div class="menu-details">
                            <div class="menu-title clearfix">
                              <h4>Breakfast Complete</h4>
                              <span class="price">$99.0</span>
                            </div>
                            <div class="menu-description">
                              <p>Grill boneless corn-fed chicken, marinated in coconut milk, lemongrass, galangal, turmeric and lime leaves</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-50">
                      <div class="col-lg-12 col-md-12">
                        <div class="menu-body menu-left">
                          <div class="menu-thumbnail">
                            <img class="img-responsive center-block" src="images/dish/06.png" alt="">
                          </div>
                          <div class="menu-details">
                            <div class="menu-title clearfix">
                              <h4>French Toast</h4>
                              <span class="price">$99.0</span>
                            </div>
                            <div class="menu-description">
                              <p>Grill sirloin beef with cracked black pepper. Served with green salad and sweet and sour sauce on the side</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-50">
                      <div class="col-lg-12 col-md-12">
                        <div class="menu-body menu-left">
                          <div class="menu-thumbnail">
                            <img class="img-responsive center-block" src="images/dish/07.png" alt="">
                          </div>
                          <div class="menu-details">
                            <div class="menu-title clearfix">
                              <h4>Crepe Complete</h4>
                              <span class="price">$99.0</span>
                            </div>
                            <div class="menu-description">
                              <p>Tender stem broccoli and asparagus with oyster sauce. Stir fried king prawn. Lime mousse with mango ganache</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 col-md-12">
                        <div class="menu-body menu-left">
                          <div class="menu-thumbnail">
                            <img class="img-responsive center-block" src="images/dish/08.png" alt="">
                          </div>
                          <div class="menu-details">
                            <div class="menu-title clearfix">
                              <h4>PREMIUM The Zayka</h4>
                              <span class="price">$99.0</span>
                            </div>
                            <div class="menu-description">
                              <p>With chopped vegetables, served with plum sauce. Tossed in peppercorns and spiced salt</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bb-custom-side page-layout-1">
                  <div class="book-content">
                    <div class="row">
                      <div class="col-lg-12 col-md-12">
                        <div class="section-title text-center">
                          <h2 class="text-white"><span class="text-orange">salad </span> and pizza</h2>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-50">
                      <div class="col-lg-12 col-md-12">
                        <div class="menu-body menu-left">
                          <div class="menu-thumbnail">
                            <img class="img-responsive center-block" src="images/dish/09.png" alt="">
                          </div>
                          <div class="menu-details">
                            <div class="menu-title clearfix">
                              <h4>Vegetarian Breakfast</h4>
                              <span class="price">$99.0</span>
                            </div>
                            <div class="menu-description">
                              <p>With peppercorns and spiced salt, delicately battered. Tossed in peppercorns and spiced salsa</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-50">
                      <div class="col-lg-12 col-md-12">
                        <div class="menu-body menu-left">
                          <div class="menu-thumbnail">
                            <img class="img-responsive center-block" src="images/dish/10.png" alt="">
                          </div>
                          <div class="menu-details">
                            <div class="menu-title clearfix">
                              <h4>French Breakfast</h4>
                              <span class="price">$99.0</span>
                            </div>
                            <div class="menu-description">
                              <p>Salmon fillet in a rich red curry with coconut milk, sweet basil leaves ,pea aubergine, and kaffir lime leaves</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-50">
                      <div class="col-lg-12 col-md-12">
                        <div class="menu-body menu-left">
                          <div class="menu-thumbnail">
                            <img class="img-responsive center-block" src="images/dish/11.png" alt="">
                          </div>
                          <div class="menu-details">
                            <div class="menu-title clearfix">
                              <h4>Eggs Benedict</h4>
                              <span class="price">$99.0</span>
                            </div>
                            <div class="menu-description">
                              <p>The famous hot, sour and spicy thai soup with king prawn, shimeji mushrooms, lemongrass, and lime leaf</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 col-md-12">
                        <div class="menu-body menu-left">
                          <div class="menu-thumbnail">
                            <img class="img-responsive center-block" src="images/dish/12.png" alt="">
                          </div>
                          <div class="menu-details">
                            <div class="menu-title clearfix">
                              <h4>PREMIUM The Zayka</h4>
                              <span class="price">$99.0</span>
                            </div>
                            <div class="menu-description">
                              <p>Thai rice noodles stir-fried with bean curd, chinese chives, peanuts and beans sprouts in a special homemade sauce</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bb-item">
                <div class="bb-custom-side page-layout-2">
                  <div class="book-content">
                    <div class="row">
                      <div class="col-lg-12 col-md-12">
                        <div class="section-title text-center">
                          <h2 class="text-white"><span class="text-orange"> dessert </span> menu</h2>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-50">
                      <div class="col-lg-12 col-md-12">
                        <div class="menu-body menu-left">
                          <div class="menu-thumbnail">
                            <img class="img-responsive center-block" src="images/dish/13.png" alt="">
                          </div>
                          <div class="menu-details">
                            <div class="menu-title clearfix">
                              <h4>Shrimp and Grits</h4>
                              <span class="price">$99.0</span>
                            </div>
                            <div class="menu-description">
                              <p>Stir fried king prawn, tender stem broccoli and asparagus with oyster sauce. Deep-fried mince prawn</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-50">
                      <div class="col-lg-12 col-md-12">
                        <div class="menu-body menu-left">
                          <div class="menu-thumbnail">
                            <img class="img-responsive center-block" src="images/dish/14.png" alt="">
                          </div>
                          <div class="menu-details">
                            <div class="menu-title clearfix">
                              <h4>Spring Salad</h4>
                              <span class="price">$99.0</span>
                            </div>
                            <div class="menu-description">
                              <p>Grill boneless corn-fed chicken, marinated in coconut milk, lemongrass, galangal, turmeric and lime leaves</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-50">
                      <div class="col-lg-12 col-md-12">
                        <div class="menu-body menu-left">
                          <div class="menu-thumbnail">
                            <img class="img-responsive center-block" src="images/dish/15.png" alt="">
                          </div>
                          <div class="menu-details">
                            <div class="menu-title clearfix">
                              <h4>Fried Chicken Breast</h4>
                              <span class="price">$99.0</span>
                            </div>
                            <div class="menu-description">
                              <p>Grill sirloin beef with cracked black pepper. Served with green salad and sweet and sour sauce on the side</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 col-md-12">
                        <div class="menu-body menu-left">
                          <div class="menu-thumbnail">
                            <img class="img-responsive center-block" src="images/dish/16.png" alt="">
                          </div>
                          <div class="menu-details">
                            <div class="menu-title clearfix">
                              <h4>PREMIUM The Zayka</h4>
                              <span class="price">$99.0</span>
                            </div>
                            <div class="menu-description">
                              <p>Tender stem broccoli and asparagus with oyster sauce. Stir fried king prawn. Lime mousse with mango ganache</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bb-custom-side page-layout-2">
                  <div class="book-content">
                    <div class="row">
                      <div class="col-lg-12 col-md-12">
                        <div class="section-title text-center">
                          <h2 class="text-white"> <span class="text-orange"> drink </span> menu</h2>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-50">
                      <div class="col-lg-12 col-md-12">
                        <div class="menu-body menu-left">
                          <div class="menu-thumbnail">
                            <img class="img-responsive center-block" src="images/dish/01.png" alt="">
                          </div>
                          <div class="menu-details">
                            <div class="menu-title clearfix">
                              <h4>Seafood Pasta</h4>
                              <span class="price">$99.0</span>
                            </div>
                            <div class="menu-description">
                              <p>With chopped vegetables, served with plum sauce. Tossed in peppercorns and spiced salt</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-50">
                      <div class="col-lg-12 col-md-12">
                        <div class="menu-body menu-left">
                          <div class="menu-thumbnail">
                            <img class="img-responsive center-block" src="images/dish/02.png" alt="">
                          </div>
                          <div class="menu-details">
                            <div class="menu-title clearfix">
                              <h4>She Crab Soup</h4>
                              <span class="price">$99.0</span>
                            </div>
                            <div class="menu-description">
                              <p>With peppercorns and spiced salt, delicately battered. Tossed in peppercorns and spiced salsa</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-50">
                      <div class="col-lg-12 col-md-12">
                        <div class="menu-body menu-left">
                          <div class="menu-thumbnail">
                            <img class="img-responsive center-block" src="images/dish/03.png" alt="">
                          </div>
                          <div class="menu-details">
                            <div class="menu-title clearfix">
                              <h4>Black Bean Soup</h4>
                              <span class="price">$99.0</span>
                            </div>
                            <div class="menu-description">
                              <p>Salmon fillet in a rich red curry with coconut milk, sweet basil leaves ,pea aubergine, and kaffir lime leaves</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 col-md-12">
                        <div class="menu-body menu-left">
                          <div class="menu-thumbnail">
                            <img class="img-responsive center-block" src="images/dish/04.png" alt="">
                          </div>
                          <div class="menu-details">
                            <div class="menu-title clearfix">
                              <h4>PREMIUM The Zayka</h4>
                              <span class="price">$99.0</span>
                            </div>
                            <div class="menu-description">
                              <p>The famous hot, sour and spicy thai soup with king prawn, shimeji mushrooms, lemongrass, and lime leaf</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div><!-- /bb-bookblock -->
              <nav>
                <a href="#" class="bb-nav-prev">prev</a>
                <a href="#" class="bb-nav-next">Next</a>
                <a href="#" class="bb-nav-close">Close</a>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="special-menu parallax" style="background-image: url(assets/images/06.jpg);">
  <div class="page-section-ptb">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="section-title text-center">
            <div class="title-separator">
              <i class="glyph-icon flaticon-food-27 white"></i>
            </div>
            <h2 class="text-white"> <span class="text-orange">Our Today’s</span> Special Menu</h2>
            <p class="text-white">We serve a daily changing menu</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="owl-carousel" data-nav-dots="true" data-items="4" data-md-items="3" data-sm-items="2" data-xs-items="1" data-dotcolor='white'>
            <div class="item">
              <div class="menu-body menu-center">
                <div class="menu-thumbnail">
                  <img class="img-responsive center-block" src="assets/images/dish/05.png" alt="">
                </div>
                <div class="menu-details">
                  <div class="menu-title clearfix">
                    <h4>Breakfast Complete</h4>
                    <span class="price">$99.0</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="menu-body menu-center">
                <div class="menu-thumbnail">
                  <img class="img-responsive center-block" src="assets/images/dish/06.png" alt="">
                </div>
                <div class="menu-details">
                  <div class="menu-title clearfix">
                    <h4>French Toast</h4>
                    <span class="price">$99.0</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="menu-body menu-center">
                <div class="menu-thumbnail">
                  <img class="img-responsive center-block" src="assets/images/dish/07.png" alt="">
                </div>
                <div class="menu-details">
                  <div class="menu-title clearfix">
                    <h4>Crepe Complete</h4>
                    <span class="price">$99.0</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="menu-body menu-center">
                <div class="menu-thumbnail">
                  <img class="img-responsive center-block" src="assets/images/dish/08.png" alt="">
                </div>
                <div class="menu-details">
                  <div class="menu-title clearfix">
                    <h4>Vegetarian Breakfast</h4>
                    <span class="price">$99.0</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="menu-body menu-center">
                <div class="menu-thumbnail">
                  <img class="img-responsive center-block" src="images/dish/09.png" alt="">
                </div>
                <div class="menu-details">
                  <div class="menu-title clearfix">
                    <h4>French Breakfast</h4>
                    <span class="price">$99.0</span>
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


<section class="our-menu page-section-pt parallax" style="background-image: url();">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="tabs clearfix">
          <!-- Nav tabs -->
          <ul class="tabs-link text-center">
            <li class="active"><a href="#tab-1" data-toggle="tab" aria-expanded="false"><i class="glyph-icon flaticon-hot-mug-doodle"></i> Breakfast</a></li>
            <li><a href="#tab-2" data-toggle="tab" aria-expanded="true"><i class="glyph-icon flaticon-food-36"></i> Lunch</a></li>
            <li><a href="#tab-3" data-toggle="tab"><i class="glyph-icon flaticon-food-9"></i> Dinner</a></li>
            <li><a href="#tab-4" data-toggle="tab"><i class="glyph-icon flaticon-foamy-beer-jar"></i> Drinks</a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in" id="tab-1">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="menu-body menu-left">
                    <div class="menu-thumbnail">
                      <img class="img-responsive center-block" src="assets/images/dish/01.png" alt="">
                    </div>
                    <div class="menu-details">
                      <div class="menu-title h4_st clearfix">
                        <h4>Breakfast Complete</h4>
                        <span class="price">$99.0</span>
                      </div>
                      <div class="menu-description">
                        <p>Salmon fillet in a rich red curry with coconut milk, sweet basil leaves ,pea aubergine, and kaffir lime leaves</p>
                      </div>
                    </div>
                  </div>
                  <div class="menu-body menu-left">
                    <div class="menu-thumbnail">
                      <img class="img-responsive center-block" src="assets/images/dish/02.png" alt="">
                    </div>
                    <div class="menu-details">
                      <div class="menu-title  h4_st clearfix">
                        <h4>French Toast</h4>
                        <span class="price">$99.0</span>
                      </div>
                      <div class="menu-description">
                        <p>The famous hot, sour and spicy thai soup with king prawn, shimeji mushrooms, lemongrass, and lime leaf</p>
                      </div>
                    </div>
                  </div>
                
                
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="menu-body menu-left">
                    <div class="menu-thumbnail">
                      <img class="img-responsive center-block" src="assets/images/dish/05.png" alt="">
                    </div>
                    <div class="menu-details">
                      <div class="menu-title h4_st clearfix">
                        <h4>French Breakfast</h4>
                        <span class="price">$99.0</span>
                      </div>
                      <div class="menu-description">
                        <p>Grill boneless corn-fed chicken, marinated in coconut milk, lemongrass, galangal, turmeric and lime leaves</p>
                      </div>
                    </div>
                  </div>
                  <div class="menu-body menu-left">
                    <div class="menu-thumbnail">
                      <img class="img-responsive center-block" src="assets/images/dish/06.png" alt="">
                    </div>
                    <div class="menu-details">
                      <div class="menu-title  h4_st clearfix">
                        <h4>Eggs Benedict</h4>
                        <span class="price">$99.0</span>
                      </div>
                      <div class="menu-description">
                        <p>Grill sirloin beef with cracked black pepper. Served with green salad and sweet and sour sauce on the side</p>
                      </div>
                    </div>
                  </div>
                 
                 
                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab-2">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="menu-body menu-left">
                    <div class="menu-thumbnail">
                      <img class="img-responsive center-block" src="assets/images/dish/09.png" alt="">
                    </div>
                    <div class="menu-details">
                      <div class="menu-title h4_st clearfix">
                        <h4>Shrimp and Grits</h4>
                        <span class="price">$99.0</span>
                      </div>
                      <div class="menu-description">
                        <p>With peppercorns and spiced salt, delicately battered. Tossed in peppercorns and spiced salsa</p>
                      </div>
                    </div>
                  </div>
                  <div class="menu-body menu-left">
                    <div class="menu-thumbnail">
                      <img class="img-responsive center-block" src="assets/images/dish/10.png" alt="">
                    </div>
                    <div class="menu-details">
                      <div class="menu-title h4_st clearfix">
                        <h4>Spring Salad</h4>
                        <span class="price">$99.0</span>
                      </div>
                      <div class="menu-description">
                        <p>Salmon fillet in a rich red curry with coconut milk, sweet basil leaves ,pea aubergine, and kaffir lime leaves</p>
                      </div>
                    </div>
                  </div>
                 
                 
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="menu-body menu-left">
                    <div class="menu-thumbnail">
                      <img class="img-responsive center-block" src="assets/images/dish/13.png" alt="">
                    </div>
                    <div class="menu-details">
                      <div class="menu-title h4_st clearfix">
                        <h4>She Crab Soup</h4>
                        <span class="price">$99.0</span>
                      </div>
                      <div class="menu-description">
                        <p>Stir fried king prawn, tender stem broccoli and asparagus with oyster sauce. Deep-fried mince prawn</p>
                      </div>
                    </div>
                  </div>
                  <div class="menu-body menu-left">
                    <div class="menu-thumbnail">
                      <img class="img-responsive center-block" src="assets/images/dish/14.png" alt="">
                    </div>
                    <div class="menu-details">
                      <div class="menu-title h4_st clearfix">
                        <h4>Black Bean Soup</h4>
                        <span class="price">$99.0</span>
                      </div>
                      <div class="menu-description">
                        <p>Grill boneless corn-fed chicken, marinated in coconut milk, lemongrass, galangal, turmeric and lime leaves</p>
                      </div>
                    </div>
                  </div>
                  
                 
                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab-3">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="menu-body menu-left">
                    <div class="menu-thumbnail">
                      <img class="img-responsive center-block" src="assets/images/dish/01.png" alt="">
                    </div>
                    <div class="menu-details">
                      <div class="menu-title h4_st clearfix">
                        <h4>Caesar Salad</h4>
                        <span class="price">$99.0</span>
                      </div>
                      <div class="menu-description">
                        <p>With chopped vegetables, served with plum sauce. Tossed in peppercorns and spiced salt</p>
                      </div>
                    </div>
                  </div>
                  <div class="menu-body menu-left">
                    <div class="menu-thumbnail">
                      <img class="img-responsive center-block" src="assets/images/dish/02.png" alt="">
                    </div>
                    <div class="menu-details">
                      <div class="menu-title  h4_st clearfix">
                        <h4>Mixed Greens Salad</h4>
                        <span class="price">$99.0</span>
                      </div>
                      <div class="menu-description">
                        <p>With peppercorns and spiced salt, delicately battered. Tossed in peppercorns and spiced salsa</p>
                      </div>
                    </div>
                  </div>
                 
                 
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="menu-body menu-left">
                    <div class="menu-thumbnail">
                      <img class="img-responsive center-block" src="assets/images/dish/05.png" alt="">
                    </div>
                    <div class="menu-details">
                      <div class="menu-title h4_st clearfix">
                        <h4>Veal Chop</h4>
                        <span class="price">$99.0</span>
                      </div>
                      <div class="menu-description">
                        <p>Thai rice noodles stir-fried with bean curd, chinese chives, peanuts and beans sprouts in a special homemade sauce</p>
                      </div>
                    </div>
                  </div>
                  <div class="menu-body menu-left">
                    <div class="menu-thumbnail">
                      <img class="img-responsive center-block" src="assets/images/dish/06.png" alt="">
                    </div>
                    <div class="menu-details">
                      <div class="menu-title h4_st clearfix">
                        <h4>Wood Roasted Salmon</h4>
                        <span class="price">$99.0</span>
                      </div>
                      <div class="menu-description">
                        <p>Stir fried king prawn, tender stem broccoli and asparagus with oyster sauce. Deep-fried mince prawn</p>
                      </div>
                    </div>
                  </div>
                  
                
                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab-4">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="menu-body menu-left">
                    <div class="menu-thumbnail">
                      <img class="img-responsive center-block" src="assets/images/dish/09.png" alt="">
                    </div>
                    <div class="menu-details">
                      <div class="menu-title h4_st clearfix">
                        <h4>Raspberry Iced Tea</h4>
                        <span class="price">$99.0</span>
                      </div>
                      <div class="menu-description">
                        <p>Tender stem broccoli and asparagus with oyster sauce. Stir fried king prawn. Lime mousse with mango ganache</p>
                      </div>
                    </div>
                  </div>
                  <div class="menu-body menu-left">
                    <div class="menu-thumbnail">
                      <img class="img-responsive center-block" src="assets/images/dish/10.png" alt="">
                    </div>
                    <div class="menu-details">
                      <div class="menu-title h4_st clearfix">
                        <h4>Black Iced Tea</h4>
                        <span class="price">$99.0</span>
                      </div>
                      <div class="menu-description">
                        <p>With chopped vegetables, served with plum sauce. Tossed in peppercorns and spiced salt</p>
                      </div>
                    </div>
                  </div>
                 
                  
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="menu-body menu-left">
                    <div class="menu-thumbnail">
                      <img class="img-responsive center-block" src="assets/images/dish/13.png" alt="">
                    </div>
                    <div class="menu-details">
                      <div class="menu-title h4_st clearfix">
                        <h4>Loose Leaf Teas</h4>
                        <span class="price">$99.0</span>
                      </div>
                      <div class="menu-description">
                        <p>The famous hot, sour and spicy thai soup with king prawn, shimeji mushrooms, lemongrass, and lime leaf</p>
                      </div>
                    </div>
                  </div>
                  <div class="menu-body menu-left">
                    <div class="menu-thumbnail">
                      <img class="img-responsive center-block" src="assets/images/dish/14.png" alt="">
                    </div>
                    <div class="menu-details">
                      <div class="menu-title h4_st clearfix">
                        <h4>Red Bull</h4>
                        <span class="price">$99.0</span>
                      </div>
                      <div class="menu-description">
                        <p>Thai rice noodles stir-fried with bean curd, chinese chives, peanuts and beans sprouts in a special homemade sauce</p>
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
</section>


<section class="newsletter-section orange-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4">
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



<!--<div class="download_sec">
    <div class="container">
        <div class="col-md-6 nopad img_st text-center">
            <img src="assets/images/mobile3.png">
        </div>
        <div class="col-md-6 nopad content_st">
            <div>
                <h3> Download the Zomato Order App!</h4>
                <p>Get real-time order updates, live chat support, and exclusive app-only offers.</p>
            </div>
            <div class="img_sec">
                <img src="assets/images/play.png" alt="">
                <img src="assets/images/playstore.png">
            </div>
            <div class="phone_num">
                <form class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-10">
                            <div class="phone-list">
                                <div class="input-group phone-input">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="type-text">+965</span> <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="changeType" href="javascript:;" data-type-value="mobile">Mobile</a></li>
                                        </ul>
                                    </span>
                                    <input type="hidden" name="phone[1][type]" class="type-input" value="" />
                                    <input type="text" name="phone[1][number]" class="form-control" placeholder=" 999 9999" />
                                </div>
                            </div>
                            <button type="button" class="btn  btn-sm btn-add-phone"><span class="glyphicon glyphicon-plus"></span>Text App Link</button>
                        </div>	
                    </div>
            </form>
        </div>
    </div>

</div>
</div>-->





<div class="clearfix"></div>




<?php echo get_footer(); ?><div class="clearfix"></div>
