<style>
	

</style>
<?php echo get_header(); ?>
<?php echo get_partial('content_top'); ?>
<div id="heading">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-section">                    
                    <!-- <h3><?php echo lang('text_heading'); ?></h3> -->
            </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
<section class="track">
    <div class="track_part">
        <div class="track_head"><img src="assets/images/icon/track_order.png"></div>
        <form action="" id="tract_sec">
            <div class="div_part">
                 <div class="col-md-7 col-sm-7 col-xs-7">
                    <input type="number" id="ordernum" name="ordernumber" placeholder="Enter Order Number.." value="<?php if(isset($order_number)) { echo $order_number; }?>">
                </div>
                <div class="col-md-5 col-sm-5 col-xs-5">
                    <!-- <label class="head_name" for="fname">Order Number</label> -->
                    <button type="submit" value="Submit" class="track_btn" >Submit </button>
                </div>
               
            </div>
           
            
            <?php if(isset($result) && $status) { ?>
            <div class="track_part">
                <div id="myDIV">
                    <ul class="progressbar">
                        <li <?php if($result['status_id'] === '11') { ?>  class="active"  <?php } ?>> <span class="list-group-item-heading"><i class="fa fa-check"></i></span> Order Placed</li>
                        <li <?php if($result['status_id'] === '13') { ?>  class="active"  <?php } ?>> <span class="list-group-item-heading"><i class="fa fa-cutlery"></i></span> Preparation</li>
                        <li <?php if($result['status_id'] === '14') { ?>  class="active"  <?php } ?>> <span class="list-group-item-heading"><i class="fa fa-motorcycle"></i></span> Delivery</li>
                    </ul>
                </div>
            </div>
            <?php } ?>
            <?php if(isset($status) && !$status) { ?> 
                <h4 class="notification_track">No record Found</h1>
            <?php } ?>
        </form>
        <p class="tq">We hope to see you again soon</p>
    </div>
</section>
<!-- <?php //if($status) { ?>
<div>
<h1>Success</h1>
<pre><?php //print_r($result);?></pre>
 Printing invidulal Item 
<?php //echo $result['status_name']; ?>
</div>
<?php //} ?> -->

</div>

<?php echo get_footer(); ?>