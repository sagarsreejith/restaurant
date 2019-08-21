<style>
	

	input[type=number]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


input[type=submit]:hover {
  background-color: #45a049;
}

	
</style>
<?php echo get_header(); ?>
<?php echo get_partial('content_top'); ?>
<div id="heading">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-section">                    
                    <h3><?php echo lang('text_heading'); ?></h3>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
<section class="track">
    <div class="track_part">
        <div class="track_head"><img src="../assets/images/icon/track_order.png"></div>
        <form action="" id="tract_sec">
            <div class="col-md-4">
                <label class="head_name" for="fname">Order Number</label>
            </div>
            <div class="col-md-8">
                <input type="number" id="ordernum" name="ordernumber" placeholder="Enter Order Number.." value="<?php if(isset($order_number)) { echo $order_number; }?>">
            </div>

            <button type="submit" value="Submit" class="track_btn" onclick="myFunction()">Submit </button>
            
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
                <h1>No record Found</h1>
            <?php } ?>
        </form>
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