<style>
.ext-cross:before, .checkbox__checker:before, .checkbox__cross:before, .checkbox__ok:before, .ext-cross:after, .checkbox__checker:after, .checkbox__cross:after, .checkbox__ok:after {

  display: block;
  position: absolute;
  width: 14px;
  height: 2px;
  margin: 0 auto;
  top: 20px;
  left: 0;
  right: 0;
  background:url('https://image.flaticon.com/icons/svg/726/726455.svg');
  border-radius: 5px;
  transition-duration: .3s;
}
.ext-cross:before, .checkbox__checker:before, .checkbox__cross:before, .checkbox__ok:before {
  -webkit-transform: rotateZ(45deg);
          transform: rotateZ(45deg);
}
.ext-cross:after, .checkbox__checker:after, .checkbox__cross:after, .checkbox__ok:after {
  -webkit-transform: rotateZ(-45deg);
          transform: rotateZ(-45deg);
}

.ext-ok:before, .checkbox__toggle:checked + .checkbox__checker:before, .checkbox__ok:before, .ext-ok:after, .checkbox__toggle:checked + .checkbox__checker:after, .checkbox__ok:after {
  background-color: #0cb018;
  
}
.ext-ok:before, .checkbox__toggle:checked + .checkbox__checker:before, .checkbox__ok:before {
  width: 6px;
  top: 23px;
  left: -7px;
}
.ext-ok:after, .checkbox__toggle:checked + .checkbox__checker:after, .checkbox__ok:after {
  width: 12px;
  left: 5px;
}

.checkbox {
  width: 100px;
  margin: 0 auto 30px auto;
}
.checkbox__container {
  display: block;
  position: relative;
  height: 42px;
  cursor: pointer;
}
.checkbox__toggle {
  display: none;
}
.checkbox__toggle:checked + .checkbox__checker {
  left: calc(100% - 43px);
  -webkit-transform: rotateZ(360deg);
          transform: rotateZ(360deg);
          background: url('https://image.flaticon.com/icons/svg/123/123403.svg') #fff;

}
.checkbox__checker, .checkbox__cross, .checkbox__ok {
  display: block;
  position: absolute;
  height: 43px;
  width: 43px;
  top: -1px;
  left: 0px;
  z-index: 1;

}
.checkbox__checker {
  border-radius: 50%;
  background-color: #fff;
  box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.5);
  transition: .3s;
  z-index: 2;

  background:url('https://image.flaticon.com/icons/svg/726/726455.svg') #fff;
}
.checkbox__checker:before, .checkbox__checker:after {
  transition-duration: .3s;
}
.checkbox__cross:before, .checkbox__cross:after, .checkbox__ok:before, .checkbox__ok:after {
  background-color: #ddd;
}
.checkbox__ok {
  left: calc(100% - 43px);
}
.checkbox__txt-left, .checkbox__txt-right {
  display: block;
  position: absolute;
  width: 42px;
  top: 15px;
  text-align: center;
  color: #fff;
  font-size: 12px;
  z-index: 1;
}
.checkbox__txt-right {
  right: 0px;
}
.checkbox__bg {
  position: absolute;
  top: 0;
  left: 0;
  fill: #aaa;
  width: 100%;
  height: 100%;
}

</style>

<?php $path_image = '';
if($rsegment !="home"){
	$path_image = '../';
}

?>
<div class="">
<div class="modal fade" id="order_now" role="dialog">
<div class="modal-dialog  modal-dialog-centered modal_order_now">
   <div class="modal-content">
         <!-- <div class="img_log">
				<img src="assets/images/bg10.jpg" class="" style="width:100%">
			</div> -->
						

      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <div class="section-title text-center">
            <div class="title-separator">
               <!-- <img src="<?php echo $path_image;?>assets/images/food_icon.png"> -->
               <h2 class="h2_sttt_order"> <span class="text-orange  padin_rt">Order 	</span>Sweets</h2>
            </div>
         </div>
      </div>
      <div class="modal-body bg_before">
         <div id="local-search " class=" col-md-12 text-center">
           
               <!-- <div class="toggle_radio">
               <img src="assets/images/cook.png" style="    width: 132px;
    position: absolute;
    top: -94px;
    left: 179px;">
                        <div class="normal-container">
                              <div class="smile-rating-container">
                                 <div class="smile-rating-toggle-container">
                                    <form class="submit-rating">
                                       <input id="meh"  name="odrer_option" type="radio" value="delivery"/> 
                                       <input id="fun" name="odrer_option" type="radio" value="pickup"/> 
                                       <label for="meh" class="rating-label rating-label-meh">Delivery</label>
                                       <a class="smile-rating-toggle"></a>
                                       <div class="toggle-rating-pill"></div>
                                       <label for="fun" class="rating-label rating-label-fun">Pick Up</label>
                                    </form>
                                 </div>
                              </div>
                           </div>
                  </div>  -->

                     <!-- <div class='checkbox'>
                     <label class='checkbox__container'>
                        <input class='checkbox__toggle' type='checkbox'>
                        <span class='checkbox__checker'></span>
                        <span class='checkbox__txt-left'>Delivery</span>
                        <span class='checkbox__txt-right'>Pickup</span>
                        <svg class='checkbox__bg' space='preserve' style='enable-background:new 0 0 110 43.76;width:300px' version='1.1' viewbox='0 0 110 43.76'>
                           <path class='shape'  d='M88.256,43.76c12.188,0,21.88-9.796,21.88-21.88S100.247,0,88.256,0c-15.745,0-20.67,12.281-33.257,12.281,S38.16,0,21.731,0C9.622,0-0.149,9.796-0.149,21.88s9.672,21.88,21.88,21.88c17.519,0,20.67-13.384,33.263-13.384,S72.784,43.76,88.256,43.76z'></path>
                        </svg>
                     </label>
                     </div> -->

                  <!-- New Design Strts Here -->
                  <div class="switch-container">
                     <label class="head_lbl"> Delivery</label>
                     <input type="checkbox" name="odrer_option" id="theme-switch">
                     <label for="theme-switch" class="switch-label">
                        <div class="switch-overlay"></div>
                        <div class="switch-slider">
                           <img src="https://image.flaticon.com/icons/svg/726/726455.svg" alt="" class="light-icon theme-icon">
                           <img src="https://image.flaticon.com/icons/svg/123/123403.svg" alt="" class="dark-icon  theme-icon">
                        </div>
                     </label>
                     <label class="head_lbl"> pickup</label>
                  </div>
                  <!-- New Design Ends Here -->

            <div class="panel panel-local">
               <div class="panel-body h2_col">
                  <!--<h2 style="color:#fff;font-size: 35px;font-weight: 800;"><?php echo lang('text_order_summary'); ?></h2>-->
                  <div class="col-xs-12 col-sm-12 col-md-12 center-block">
                     <?php if ($location_search_mode === 'multi') { ?>
                     <form id="location-form" method="POST" action="<?php echo $local_action; ?>" role="form">
                        <div class="col-md-7 col-sm-7 col-xs-12 nopad">
                           <span><img src="<?php echo $path_image;?>assets/images/new_search.svg" alt="search location"></span>
                           <!-- <span><img src="assets/images/new_search.svg" alt="search location"></span> -->
                           <select class="js-example-templating js-states form-control select2-hidden-accessible form-control postcode-control input-lg" id="aioConceptName" data-select2-id="1" tabindex="8" aria-hidden="true" style="text-align:left; border-top-left-radius: 5px; border-top-right-radius: 5px;" name="search_query">
                              
                              <option></option>
                              <?php foreach($local_areas as $area){ ?>
                              <optgroup label="<?php echo $area['govr_name_en']; ?>" data-select2-id="<?php echo $area['govr_id']; ?>">
                                 <?php foreach($area['areas'] as $local){ ?>
                                    <option <?php if($location_city == $local['govr_area_name_en']) { ?> selected="selected" <?php } ?>  value="<?php echo $local['govr_area_name_en']; ?>" data-select2-id="<?php echo $local['id']; ?>" <?php if($local['is_disabled'] != 1) { ?> disabled <?php } ?> ><?php echo $local['govr_area_name_en']; ?></option>
                                 <?php } ?>
                              </optgroup>
                              <?php } ?>
                           </select>
                        </div>
                        <div class="col-md-5 col-sm-5 col-xs-12 nopad nopad">
                           <a id="search" class="search_btn_hme" onclick="searchLocal();"><?php echo lang('text_find'); ?></a> 
                        </div>
                     </form>
                     <?php } else { ?>
                     <a class="btn btn-block btn-primary" href="<?php echo $single_location_url; ?>"><?php echo lang('text_find'); ?></a>
                     <?php } ?>
                  </div>
               </div>
            </div>
         </div>
		 <div class="clearfix"></div>
		 
		 <div id="local-alert" class="<?php echo ($location_search === TRUE) ? 'col-xs-12 col-sm-8 center-block' : 'col-sm-12' ?>">
				<div class="local-alert"></div>
				<?php if (!empty($local_alert)) { ?>
					<?php echo $local_alert; ?>
				<?php } ?>
		</div>
      </div>
     
   </div>
</div>
</div>
<div <?php if( $rsegment ==="home") { ?> id="local-box" <?php }  ?>  class="col-md-12 col-sm-12 col-xs-12 " <?php echo ($location_search === TRUE) ? 'class="local-box-fluid"' : ''; ?>>
   <div class="container">
      <div class="row">
         <?php if( $rsegment ==="home") { ?>
         <div class="order_now">
            <h2 class="Banner_header">Welcome to Zalatimo Sweets</h2>
            <div class="btn_sec animated bounceIn">
			   <a type="button" class="order_btn " data-toggle="modal" data-target="#order_now">Order Now</a>
			   <?php if ($this->config->item('reservation_mode') === '1') { ?>
			   <a  href="<?php echo site_url('reservation'); ?>" type="button" class="order_btn">Reserve Now</a>
			   <?php } ?>
            </div>
            
               <?php } ?>
               <?php if ($location_search !== TRUE AND $rsegment !== 'locations') { ?>
               <div id="local-info" class="col-md-12" style="display: <?php echo ($local_info) ? 'block' : 'none'; ?>">
                  <div class="panel panel-local display-local">
                     <?php if ($location_search_mode === 'multi') { ?>
                     <div class="panel-heading">
                        <div class="row local-search bg-warning" style="display: <?php echo (empty($search_query) AND $order_type == '1' AND $location_order === '1') ? 'block' : 'none'; ?>">
                           <a class="close-search clickable" onclick="toggleLocalSearch();">&times;</a>
                           <div class="col-xs-12 col-sm-6 center-block">
                              <div class="postcode-group text-center">
                                 <?php echo lang('text_no_search_query'); ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                 <div class="input-group">
                                    <input type="text" id="search-query" class="form-control text-center postcode-control input-xs" name="search_query" placeholder="<?php echo lang('label_search_query'); ?>" value="<?php echo $search_query; ?>">
                                    <a id="search" class="input-group-addon btn btn-primary" onclick="searchLocal();"><?php echo lang('button_search_location'); ?></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row local-change" style="display: <?php echo (!empty($search_query) OR (empty($search_query) AND $location_order !== '1')) ? 'block' : 'none'; ?>">
                           <div class="col-xs-12 col-sm-12 col-md-12 place_st">
                              <?php $text_location_summary = ($has_search_query AND $delivery_coverage) ? lang('text_location_summary') : lang('text_delivery_coverage'); ?>
                              <?php $text_search_query = (empty($search_query)) ? lang('text_enter_location') : sprintf($text_location_summary, lang('text_at').$search_query); ?>
                              <?php echo $text_search_query; ?>&nbsp;&nbsp; 
                              <!-- <a onclick="toggleLocalSearch();" class="clickable btn-link visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="">
                              <?php //echo empty($search_query) ? lang('button_enter_location') : lang('button_change_location'); ?>
							  </a> -->
                       <div class="map_icon_bg "> </div>	
							  <a data-toggle="modal" data-target="#order_now" class="clickable map_A btn-link visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="">
                      <?php echo empty($search_query) ? lang('button_enter_location') : lang('button_change_location'); ?>
                              </a>
                           </div>
                           <?php if (!in_array($rsegment, array('local', 'locations'))) { ?>
                           <div class="col-xs-12 col-sm-12 text-center">
                              <a class="btn btn-primary btn-menus" href="<?php echo site_url('local?location_id='.$location_id).'#local-menus'; ?>"><i class="fa fa-cutlery"></i>
                              <span>&nbsp;&nbsp;<?php echo lang('text_goto_menus'); ?></span>
                              </a>
                           </div>
                           <?php } ?>
                        </div>
                     </div>
                     <?php } ?>
                     <div class="panel-body" id="panel-body">
                        <div class="row boxes">
                           <div class="box-one col-xs-12 col-sm-12 col-md-5">
                              <?php if (!empty($location_image)) { ?>
                              <img class="img-responsive pull-left" src="<?php echo $location_image; ?>">
                              <?php } ?>
                              <dl <?php echo (!empty($location_image)) ? 'class="box-image"' : ''; ?>>
                                 <dd>
                                    <h4><?php echo $location_name; ?></h4>
                                 </dd>
                                 <?php if (config_item('allow_reviews') !== '1') { ?>
                                 <dd class="text-muted">
                                    <div class="rating rating-sm">
                                       <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-half-o"></span><span class="fa fa-star-o"></span>
                                       <span class="small"><?php echo $text_total_review; ?></span>
                                    </div>
                                 </dd>
                                 <?php } ?>
                                 <dd><span class="text-muted"><?php echo str_replace('<br />', ', ', $location_address); ?></span></dd>
                              </dl>
                           </div>
                           <div class="col-xs-12 box-divider visible-xs"></div>
                           <div class="box-two col-xs-12 col-sm-6 col-md-3">
                              <dl>
                                 <?php if ($opening_status === 'open') { ?>
                                 <dt><?php echo lang('text_is_opened'); ?></dt>
                                 <?php } else if ($opening_status === 'opening') { ?>
                                 <dt class="text-muted"><?php echo sprintf(lang('text_opening_time'), $opening_time); ?></dt>
                                 <?php } else { ?>
                                 <dt class="text-muted"><?php echo lang('text_closed'); ?></dt>
                                 <?php } ?>
                                 <?php if ($opening_status !== 'closed') { ?>
                                 <dd class="visible-xs">
                                    <?php if (!empty($opening_type) AND $opening_type == '24_7') { ?>
                                    <span class="fa fa-clock-o"></span>&nbsp;&nbsp;<span><?php echo lang('text_24_7_hour'); ?></span>
                                    <?php } else if (!empty($opening_time) AND !empty($closing_time)) { ?>
                                    <span class="fa fa-clock-o"></span>&nbsp;&nbsp;<span><?php echo $opening_time; ?> - <?php echo $closing_time; ?></span>
                                    <?php } ?>
                                 </dd>
                                 <?php } ?>
                                 <dd class="text-muted">
                                    <?php if ($has_delivery) { ?>
                                    <?php if ($delivery_status === 'open') { ?>
                                    <?php echo sprintf(lang('text_delivery_time_info'), sprintf(lang('text_in_minutes'), $delivery_time)); ?>
                                    <?php } else if ($delivery_status === 'opening') { ?>
                                    <?php echo sprintf(lang('text_delivery_time_info'), sprintf(lang('text_starts'), $delivery_time)); ?>
                                    <?php } else { ?>
                                    <?php echo sprintf(lang('text_delivery_time_info'), lang('text_is_closed')); ?>
                                    <?php } ?>
                                    <?php } ?>
                                 </dd>
                                 <dd class="text-muted">
                                    <?php if ($has_collection) { ?>
                                    <?php if ($collection_status === 'open') { ?>
                                    <?php echo sprintf(lang('text_collection_time_info'), sprintf(lang('text_in_minutes'), $collection_time)); ?>
                                    <?php } else if ($collection_status === 'opening') { ?>
                                    <?php echo sprintf(lang('text_collection_time_info'), sprintf(lang('text_starts'), $collection_time)); ?>
                                    <?php } else { ?>
                                    <?php echo sprintf(lang('text_collection_time_info'), lang('text_is_closed')); ?>
                                    <?php } ?>
                                    <?php } ?>
                                 </dd>
                              </dl>
                           </div>
                           <div class="col-xs-12 box-divider visible-xs"></div>
                           <div class="box-three col-xs-12 col-sm-4 col-md-4">
                              <dl>
                                 <?php if ($opening_status !== 'closed') { ?>
                                 <dd class="hidden-xs">
                                    <?php if (!empty($opening_type) AND $opening_type == '24_7') { ?>
                                    <span class="fa fa-clock-o"></span>&nbsp;&nbsp;<span><?php echo lang('text_24_7_hour'); ?></span>
                                    <?php } else if (!empty($opening_time) AND !empty($closing_time)) { ?>
                                    <span class="fa fa-clock-o"></span>&nbsp;&nbsp;<span><?php echo $opening_time; ?> - <?php echo $closing_time; ?></span>
                                    <?php } ?>
                                 </dd>
                                 <?php } ?>
                                 <dd class="text-muted">
                                    <?php if (!$has_delivery AND $has_collection) { ?>
                                    <?php echo lang('text_collection_only'); ?>
                                    <?php } else if ($has_delivery AND !$has_collection) { ?>
                                    <?php echo lang('text_delivery_only'); ?>
                                    <?php } else if ($has_delivery AND $has_collection) { ?>
                                    <?php echo lang('text_both_types'); ?>
                                    <?php } else { ?>
                                    <?php echo lang('text_no_types'); ?>
                                    <?php } ?>
                                 </dd>
                                 <?php if ($has_delivery) { ?>
                                 <dd class="text-muted"><?php echo $text_delivery_condition; ?></dd>
                                 <!--                                            <dd class="text-muted">--><?php //echo ($delivery_charge > 0) ? sprintf(lang('text_delivery_charge'), currency_format($delivery_charge)) : lang('text_free_delivery'); ?><!--</dd>-->
                                 <?php } ?>
                                 <!--                                        <dd class="text-muted">--><?php //echo lang('text_min_total'); ?><!--: --><?php //echo currency_format($min_total); ?><!--</dd>-->
                              </dl>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php } ?>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
   function toggleLocalSearch() {
   	if ($('.panel-local .panel-heading .local-search').is(":visible")) {
   		$('.panel-local .panel-heading .local-search').slideUp();
   		$('.panel-local .panel-heading .local-change').slideDown();
   	} else {
   		$('.panel-local .panel-heading .local-search').slideDown();
   		$('.panel-local .panel-heading .local-change').slideUp();
   	}
   }
   
   function searchLocal() {
   	// var search_query = $('input[name=\'search_query\']').val();
   	var search_query = $('#aioConceptName').val();
      var order_type = $("input[name='odrer_option']:checked").is(":checked");
      order_type == false ? order_type = 'delivery' : order_type = 'pickup';
   	//alert(order_type);
   	//return false;
   	$.ajax({
   		url: js_site_url('local_module/local_module/search'),
   		type: 'POST',
   		data: 'search_query=' + search_query + '&odrer_option='+ order_type,
   		dataType: 'json',
   		success: function(json) {
   			updateLocalBox(json);
   		}
   	});
   }
   
   
   function getCurrentLocal() {
   	var search_query = $('input[name=\'search_query\']').val();
   
   	$.ajax({
   		url: js_site_url('local_module/local_module/search'),
   		type: 'POST',
   		data: 'search_query=' + search_query,
   		dataType: 'json',
   		success: function(json) {
   			console.log(json);
   			///updateLocalBox(json);
   		}
   	});
   }
   
   function updateLocalBox(json) {
   	var alert_close = '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
   	var local_alert = $('#local-alert .local-alert');
   	var alert_message = '';
   
   	if (json['redirect']) {
   		window.location.href = json['redirect'];
   	}
   
   	if (json['error']) {
   		alert_message = '<div class="alert">' + alert_close + json['error'] + '</div>';
   	}
   
   	if (json['success']) {
   		alert_message = '<div class="alert">' + alert_close + json['success'] + '</div>';
   	}
   
   	if ($('#cart-box').is(':visible')) {
   		$('#cart-box').load(js_site_url('cart_module/cart_module #cart-box > *'), function (response) {
   			if (alert_message != '') {
   				local_alert.empty();
   				local_alert.append(alert_message);
   				$('#local-alert').fadeIn('slow').fadeTo('fast', 0.5).fadeTo('fast', 1.0);
   				$('html, body').animate({scrollTop: 0}, 300);
   			}
   		});
   	} else {
   		if (alert_message != '') {
   			local_alert.empty();
   			local_alert.append(alert_message);
   			$('#local-alert').fadeIn('slow').fadeTo('fast', 0.5).fadeTo('fast', 1.0);
   			$('html, body').animate({scrollTop: 0}, 300);
   		}
   	}
   }
   
   
   
   // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.
   
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
   
     
      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
          if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(function(position) {
                  var geolocation = {
                      lat: position.coords.latitude,
                      lng: position.coords.longitude
                  };
                  var circle = new google.maps.Circle({
                      center: geolocation,
                      radius: position.coords.accuracy
                  });
                  autocomplete.setBounds(circle.getBounds());
              });
          }
      }
    
	function scrollToBody() {
      	var elemt;
      	var sear = "<?php echo $search_query; ?>";
      	
      	// if (sear) {
      	//     elemt = document.getElementById("panel-body");
   	// 	if (elemt)
      	//         elemt.scrollIntoView(); // Top
          // }
      }
      
   $(document).ready(function() {
   	$("#order_now").click(function(){
   		$("body").css("padding-right:0");
   
   	});
   	scrollToBody();
   	// apicall = $('#google-maps-js').attr('src');
   	// apicall = apicall.replace("&ver=", "&callback=initAutocomplete&ver=");
   	// $('#google-maps-js').attr('src' , apicall);
   	// initAutocomplete();
   	$('.review-toggle').on('click', function() {
   		$('a[href="#reviews"]').tab('show');
   	});
   });	
   $( "body" ).click(function() {
   	$(".js-example-templating").select2("close");
   }); 
   //-->
</script>