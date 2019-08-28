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
           
               

                  <!-- New Design Strts Here -->
                  <div class="switch-container">
                     <label class="head_lbl" for="theme-switch"> Delivery</label>
                     <input type="checkbox" class="toggle-order" name="odrer_option" id="theme-switch">
                     
                     <label for="theme-switch" class="switch-label">
                        <div class="switch-overlay"></div>
                        <div class="switch-slider">
                           <span class="light-icon theme-icon delivery_icon"></span>
                           <span class="dark-icon  theme-icon resturant_icon"></span>
                        </div>
                     </label>
                     <label class="head_lbl" for="theme-switch"> pickup</label>
                  </div>
                  <!-- New Design Ends Here -->

            <div class="panel panel-local">
               <div class="panel-body h2_col">
                  
                  <!--<h2 style="color:#fff;font-size: 35px;font-weight: 800;"><?php echo lang('text_order_summary'); ?></h2>-->
                  <div class="col-xs-12 col-sm-12 col-md-12 center-block">
                     <?php if ($location_search_mode === 'multi') { ?>
                     <form id="location-form" method="POST" action="<?php echo $local_action; ?>" role="form">
                        <div class="col-md-7 col-sm-7 col-xs-12 nopad">
                        <div class="map_icon_bg1"> </div>
                           <!-- <span><img src="<?php echo $path_image;?>assets/images/new_search.svg" alt="search location"></span> -->
                           <!-- <span><img src="assets/images/new_search.svg" alt="search location"></span> -->
                           <div class="delivery-toggle">
                           <select  class="js-example-templating js-states form-control select2-hidden-accessible form-control postcode-control input-lg" id="aioConceptDelivery" data-select2-id="1" tabindex="8" aria-hidden="true" style="text-align:left; border-top-left-radius: 5px; border-top-right-radius: 5px;" name="search_query">
                              <option></option>
                              <?php foreach($local_areas as $area){ ?>
                              <optgroup label="<?php echo $area['govr_name_en']; ?>" data-select2-id="<?php echo $area['govr_id']; ?>">
                                 <?php foreach($area['areas'] as $local){ ?>
                                    <option <?php if($_COOKIE['del_search'] == $local['govr_area_name_en']) { ?> selected="selected" <?php } ?>  value="<?php echo $local['govr_area_name_en']; ?>" data-select2-id="<?php echo $local['id']; ?>" <?php if(($local['is_disabled'] != 1) OR ($local['is_delivery'] === "0")) { ?> disabled <?php } ?> ><?php echo $local['govr_area_name_en']; ?></option>
                                 <?php } ?>
                              </optgroup>
                              <?php } ?>
                           </select>
                           </div>
                           <div class="collection-toggle">
                           <select  class="js-example-templating js-states form-control select2-hidden-accessible form-control postcode-control input-lg" id="aioConceptPickup" data-select2-id="1" tabindex="8" aria-hidden="true" style="text-align:left; border-top-left-radius: 5px; border-top-right-radius: 5px;" name="search_query">
                              <option></option>
                                 <?php foreach($pickup_areas as $local){ ?>
                                    <option value="<?php echo $local['location_id']; ?>" data-id="<?php echo $local['permalink']; ?>" 
                                    <?php if($_COOKIE['pic_search'] == $local['location_id']) { ?> selected="selected" <?php } ?>  value="<?php echo $local['govr_area_name_en']; ?>">
                                       <?php echo "<b>". $local['location_city']. " - </b>". $local['location_name']; ?>
                                    </option>
                                 <?php } ?>
                           </select>
                           </div>
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
           <!-- <div class="banner_img_st">  
           
               <h4 class="Banner_header animated"><span class="wel_hd">Welcome to Zalatimo Sweets</span></h4>
            <span class="line_banner"></span> 
              <img src="assets/images/icon/lin-img.png">
              
         </div> -->
            <div class="btn_sec animated bounceIn">
                  <!-- <a type="button" class="order_btn" data-toggle="modal" data-target="#order_now"><span> </span>
               
                  <span class="order_btn-label">  Order Now</span>

               
               
               </a> -->
            
            
			   <?php if ($this->config->item('reservation_mode') === '1') { ?>
			   <a  href="<?php echo site_url('reservation'); ?>" type="button" class="order_btn">Reserve Now</a>
			   <?php } ?>
            </div>
            
               <?php } ?>
               <?php if ($location_search !== TRUE AND $rsegment !== 'locations') { ?>
               <div id="local-info" class="col-md-12 nopad" style="display: <?php echo ($local_info) ? 'block' : 'none'; ?>">
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
                              <div class="text-center">
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
                           </div>
                          
                        </div>
                     </div>
                     <?php } ?>
               <?php if($_COOKIE['order_type'] === '2') { ?>     
                 <div class="panel-body" id="panel-body">
                        <div class="row boxes">
                              <div class="box-one col-xs-12 col-sm-6 col-md-6">
                                 <div class="col-xs-12 col-sm-4 col-md-4">
                                    <?php if (!empty($location_image)) { ?>
                                    <img class="img-responsive pull-left" src="<?php echo $location_image; ?>">
                                    <?php } ?>
                                 </div>
                                 <div class="col-xs-12 col-sm-8 col-md-8">
                                 <dl <?php echo (!empty($location_image)) ? 'class="box-image"' : ''; ?>>
                                    <dd>
                                       <h4 class="loc_name_display"><?php echo $location_name; ?></h4>
                                    </dd>
                                 
                                    <dd><span class="text-muted add_b"><?php echo str_replace('<br />', ', ', $location_address); ?></span></dd>
                                 </dl>
                                 </div>
                              </div>
                        
                              <div class="box-two col-xs-12 col-sm-6 col-md-6 right_sec">
                                 <ul class="location_list1">

                                            
                               <?php if ($opening_status !== 'closed') { ?>

                                 <?php if ($opening_status === 'open') { ?>
                                          <span class="open_off"><?php echo lang('text_is_opened'); ?></span>
                                          <?php } else if ($opening_status === 'opening') { ?>
                                          <span class="text-muted"><?php echo sprintf(lang('text_opening_time'), $opening_time); ?></span>
                                          <?php } else { ?>

                                          <span class="text-muted"><?php echo lang('text_closed'); ?></span>
                                          <?php } ?>
                                          <?php if ($opening_status !== 'closed') { ?>
                                    <li class="">
                                       <?php if (!empty($opening_type) AND $opening_type == '24_7') { ?>
                                       <span class="fa fa-clock-o"></span>&nbsp;&nbsp;<span><?php echo lang('text_24_7_hour'); ?></span>
                                       <?php } else if (!empty($opening_time) AND !empty($closing_time)) { ?>
                                       <span class="fa fa-clock-o"></span>&nbsp;&nbsp;<span><?php echo $opening_time; ?> - <?php echo $closing_time; ?></span>
                                       <?php } ?>

                                        


                                       </li>
                                    <?php } ?>  
                                    <?php } ?>

                                   <!-- <?php if (config_item('allow_reviews') !== '1') { ?>
                                    <li class="text-muted">
                                       <div class="rating rating-sm">
                                          <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-half-o"></span><span class="fa fa-star-o"></span>
                                          <span class="small"><?php echo $text_total_review; ?></span>
                                       </div>
                                    </li>
                                    <?php } ?>  -->
                                    
                                 <!-- <li class="text-muted">
                                       <?php if ($has_delivery) { ?>
                                       <?php if ($delivery_status === 'open') { ?>
                                          <i class="fa fa-motorcycle"></i>
                                       <?php echo sprintf(lang('text_delivery_time_info'), sprintf(lang('text_in_minutes'), $delivery_time)); ?>
                                       <?php } else if ($delivery_status === 'opening') { ?>
                                       <?php echo sprintf(lang('text_delivery_time_info'), sprintf(lang('text_starts'), $delivery_time)); ?>
                                       <?php } else { ?>
                                       <?php echo sprintf(lang('text_delivery_time_info'), lang('text_is_closed')); ?>
                                       <?php } ?>
                                       <?php } ?>
                                 </li>  -->

                                    <li class="text-muted li_class">
                                       <?php if ($has_collection) { ?>
                                       <?php if ($collection_status === 'open') { ?>
                                          <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                       <?php echo sprintf(lang('text_collection_time_info'), sprintf(lang('text_in_minutes'), $collection_time)); ?>
                                       <?php } else if ($collection_status === 'opening') { ?>
                                       <?php echo sprintf(lang('text_collection_time_info'), sprintf(lang('text_starts'), $collection_time)); ?>
                                       <?php } else { ?>
                                       <?php echo sprintf(lang('text_collection_time_info'), lang('text_is_closed')); ?>
                                       <?php } ?>
                                       <?php } ?>
                                    </li> 
                            


                           <!-- <li class="text-muted">
                                       <?php if (!$has_delivery AND $has_collection) { ?>
                                       <?php echo lang('text_collection_only'); ?>
                                       <?php } else if ($has_delivery AND !$has_collection) { ?>
                                       <?php echo lang('text_delivery_only'); ?>
                                       <?php } else if ($has_delivery AND $has_collection) { ?>
                                       <?php echo lang('text_both_types'); ?>
                                       <?php } else { ?>
                                       <?php echo lang('text_no_types'); ?>
                                       <?php } ?>
                                 </li> 
 -->


                                 
                                    <!-- <li class="text-muted"><?php echo lang('text_min_total'); ?> : <?php echo currency_format($min_total); ?></li>
                                    <?php if ($has_delivery) { ?>
                                    <li class="text-muted"><?php echo $text_delivery_condition; ?></li> -->
                                    <!-- <li class="text-muted"><?php echo ($delivery_charge > 0) ? sprintf(lang('text_delivery_charge'), currency_format($delivery_charge)) : lang('text_free_delivery'); ?></li> -->
                                    <?php } ?>
                              
                                                                           
                                    </ul>
                              </div>
                         
                        </div>
                     </div> 
                           <div class="full_out">
                     
                                <div class="col-md-12 nopad">

                                       <div class="contact cnt">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                                                   <div class="contact-box ">
                                                         <i class="fa fa-phone"></i>
                                                         <div class="cont_con">
                                                            
                                                         <a href="tel:+965 67678956" target="_blank"><p>949200202</p></a> 
                                                         </div>
                                                   </div>
                                             </div>
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="contact-box ">
                                                      <i class="fa fa-envelope-o"></i>
                                                      <div class="cont_con">
                                                      <a href="mailto:support@website.com"  target="_blank"><p>support@website.com</p></a> 
                                                        
                                                      </div>
                                                </div>
                                             </div>
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="contact-box ">
                                                      <i class="fa fa-whatsapp"></i>
                                                      <div class="cont_con">
                                                      
                                                         <a  class="cont_link_app"  target="_blank" href="//api.whatsapp.com/send?phone=96597425684&text=WHATEVER_TEXT_YOU_WANT_TO_SEND" class="applyinfo-btn">
                                                         <p>949200202</p>	</a>
                                                         
                                                      </div>
                                                </div>
                                             </div>
                                       </div>
                                 </div>
                     
                               </div>                  
               </div>
               <?php }?>                                      
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

  //toggle class
   $( ".toggle-order" ).click(function() {
      if($("input[name='odrer_option']:checked").is(":checked")){
         $( ".collection-toggle" ).css("display", "block");
         $( ".delivery-toggle" ).css("display", "none");
      } else {
         $( ".delivery-toggle" ).css("display", "block");
         $( ".collection-toggle" ).css("display", "none");
      }   
   });
   
   function searchLocal() {
   	// var search_query = $('input[name=\'search_query\']').val();
      var search_query = '';
      document.cookie = "selected_city=" + search_query + "; path=/";
      var order_type = $("input[name='odrer_option']:checked").is(":checked");
      order_type == false ? search_query = $('#aioConceptDelivery').val() : search_query = $('#aioConceptPickup').val();
      order_type == false ? document.cookie = "del_search="+search_query+"; path=/" : document.cookie = "pic_search="+search_query+"; path=/";
      order_type == false ? document.cookie = "order_type=1; path=/" : document.cookie = "order_type=2; path=/";
      order_type == false ? order_type = 'delivery' : order_type = 'pickup';
      if(order_type === 'pickup'){
         //alert($("#aioConceptPickup").find(':selected').data("id"));
         window.location.href = $("#aioConceptPickup").find(':selected').data("id");
         return false;
      }
   	//alert(order_type);
   	//return false;
   	$.ajax({
   		url: js_site_url('local_module/local_module/search'),
   		type: 'POST',
   		data: 'search_query=' + search_query + '&odrer_option='+ order_type,
   		dataType: 'json',
   		success: function(json) {
            json['search_query'] = search_query;
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
      var site_url = '<?php echo site_url(); ?>';

   	if (json['redirect']) {
         if(getCookie('order_type') === "2"){
            var redirect = site_url + 'locations?search=' + json['search_query'] + '&offer_collection=1';
            window.location.href = redirect;
            return false;
         }
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
   		// if (elemt)
      	//         elemt.scrollIntoView(); // Top
         //  }
      }
      
   $(document).ready(function() {
      if(getCookie('order_type') === '2' ){
         $("input[name='odrer_option']").prop("checked", true);
      }

      if($("input[name='odrer_option']:checked").is(":checked")){
         $( ".collection-toggle" ).css("display", "block");
         $( ".delivery-toggle" ).css("display", "none");
      } else {
         $( ".delivery-toggle" ).css("display", "block");
         $( ".collection-toggle" ).css("display", "none");
      }
      
   	$("#order_now").click(function(){
   		$("body").css("padding-right:0");
   
   	});
   	scrollToBody();
   	$('.review-toggle').on('click', function() {
   		$('a[href="#reviews"]').tab('show');
   	});
   });	
   $( "body" ).click(function() {
   	$(".js-example-templating").select2("close");
   }); 

   function getCookie(cname) {
      var name = cname + "=";
      var ca = document.cookie.split(';');
      for(var i = 0; i < ca.length; i++) {
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
    
    $('.wel_hd').each(_checkOffset('animated bounceInDown'));
	

});
   //-->
</script>