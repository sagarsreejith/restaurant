
<style>
  .mobile-slider{
    border-radius: 34px;
    overflow: hidden;
    position: absolute;
    left: 0%;
    top: 0;
    width: 100%;
    z-index: 1;
  }
  .phone{
    height: 370px;
    width: 100%;
  }
  .phone .owl-carousel .owl-item{
    background: #f1f1f1;
    height: 360px;
    border-radius: 30px;
 
  }  
  .phone .owl-carousel .owl-item img{
    min-height: 360px !important;
  }
  </style>

     

<section id="hero-area" class="section-hero2 section overlay1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="hero-content-wrap">
                            <div class="hero-content">
                            <div class="hero-content typed-strings">
                               <h1>Welcome to Zalatimo Sweets <span class="typed"></span></h1>

                               <p>We always strive to bring our customers only the very best delicacies made from fresh ingredients with special care.</p>

                            </div>
                              <div class="slider-action-btn">
                                  <a href="#" class="btn order_btn" data-toggle="modal" data-target="#order_now">Order Now</a>    
                              </div> 
                            </div>
					        	    </div>

                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="mobile-slider-area">

                            <div class="phone">

                                <div class="mobile-slider owl-carousel owl-theme">
                                    <?php if (!empty($slides)) { ?>
                                      <?php foreach ($slides as $slide) { ?>
                                        <?php if (isset($slide['image_src'])) { ?>
                                            <img src="<?php echo $slide['image_src']; ?>" />
                                        <?php } ?>
                                      <?php } ?>
                                    <?php } ?>
                               </div>

                            </div>
                            <div class="slider-indicator" style="position:absoulte">
                                    <ul>
                                      <li id="prev">
                                        <i class="fa fa-angle-left" style="color:#fff"></i>
                                      </li>
                                      <li id="next">
                                        <i class="fa fa-angle-right"></i>
                                      </li>
                                    </ul>
                            </div>

					            	</div>
					          </div>
				        </div>
            </div>
		      	<div class="section-shape">
                <div class="river-wave"></div>
                <div class="river-wave"></div>
            </div>
        </section>