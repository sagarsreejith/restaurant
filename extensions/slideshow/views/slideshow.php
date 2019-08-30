
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
  </style>

<section id="hero-area" class="section-hero2 section overlay1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="hero-content-wrap">
                            <div class="hero-content">
                                <h1>Welcome toZalatimo Sweets</h1>
                                <p>Our software platform and custom development allow healthcare institutions to create
                                    comprehensive cross-platform solutions that ensure positive patient experiences.</p>
                             <div class="slider-action-btn">
                               <a href="#" class="btn order_btn" data-toggle="modal" data-target="#order_now">Order Now</a>
                                   
                               </div> 
                            </div>
						</div>
						
                    </div>
                    <div class="col-md-4">
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

        
