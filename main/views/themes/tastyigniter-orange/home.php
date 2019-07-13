
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
<div id="page-content">
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


<div class="download_sec">
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
<?php echo get_footer(); ?>