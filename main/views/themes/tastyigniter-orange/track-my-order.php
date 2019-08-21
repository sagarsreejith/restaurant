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
        

        <div class="track_part">

            <div id="myDIV">
                <ul class="progressbar">
                    <li class="active"> <span class="list-group-item-heading"><i class="fa fa-check"></i></span> Order Placed</li>
                    <li> <span class="list-group-item-heading"><i class="fa fa-cutlery"></i></span> Preparation</li>
                    <li> <span class="list-group-item-heading"><i class="fa fa-motorcycle"></i></span> Delivery</li>
                </ul>
            </div>
        </div>
    </div>
</section>
</div>




<form action="track-order.php">
  First name:<br>
  <input type="text" name="firstname" value="Mickey">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="Mouse">
  <br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>


<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
 
}
</script>

<?php echo get_footer(); ?>