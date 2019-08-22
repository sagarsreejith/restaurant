<style>
.gbh{
   display:none !important;
}


.cta {
   
   padding: 14px 25px;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    font-size: 31px;
    color: white;
    background: #6f1e31;
    transition: 1s;
    box-shadow: 6px 6px 0 white;
    -webkit-transform: skewX(-15deg);
    transform: skewX(-15deg);
    text-align: center;
}

.cta:focus {
   outline: none; 
}

.cta:hover {
    transition: 0.5s;
    box-shadow: 10px 10px 0 #FBC638;
}

.cta span:nth-child(2) {
    transition: 0.5s;
    margin-right: 0px;
}

.cta:hover  span:nth-child(2) {
    transition: 0.5s;
    margin-right: 45px;
}

  span {
    -webkit-transform: skewX(15deg);
            transform: skewX(15deg) 
  }

  span:nth-child(2) {
    width: 20px;
    margin-left: 30px;
    position: relative;
    top: 12%;
  }
  
/**************SVG****************/

path.one {
    transition: 0.4s;
    -webkit-transform: translateX(-60%);
            transform: translateX(-60%);
}

path.two {
    transition: 0.5s;
    -webkit-transform: translateX(-30%);
            transform: translateX(-30%);
}

.cta:hover path.three {
    -webkit-animation: color_anim 1s infinite 0.2s;
            animation: color_anim 1s infinite 0.2s;
}

.cta:hover path.one {
    -webkit-transform: translateX(0%);
            transform: translateX(0%);
    -webkit-animation: color_anim 1s infinite 0.6s;
            animation: color_anim 1s infinite 0.6s;
}

.cta:hover path.two {
    -webkit-transform: translateX(0%);
            transform: translateX(0%);
    -webkit-animation: color_anim 1s infinite 0.4s;
            animation: color_anim 1s infinite 0.4s;
}

/* SVG animations */

@-webkit-keyframes color_anim {
    0% {
        fill: white;
    }
    50% {
        fill: #FBC638;
    }
    100% {
        fill: white;
    }
}

@keyframes color_anim {
    0% {
        fill: white;
    }
    50% {
        fill: #FBC638;
    }
    100% {
        fill: white;
    }
}
</style>
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
                              <?php foreach($local_areas as $area){ ?>
                                 <?php foreach($area['areas'] as $local){ ?>
                                    <option <?php if($_COOKIE['pic_search'] == $local['govr_area_name_en']) { ?> selected="selected" <?php } ?>  class="<?php if(($local['is_disabled'] != 1) OR ($local['is_pickup'] === "0")) { echo 'gbh';} ?>"  value="<?php echo $local['govr_area_name_en']; ?>" data-select2-id="<?php echo $local['id']; ?>"  ><?php echo $local['govr_area_name_en']; ?></option>
                                 <?php } ?>
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
           <div class="banner_img_st">  
           
               <h4 class="Banner_header">Welcome to Zalatimo Sweets</h4>
               <!-- <span class="line_banner"></span> -->
               <img src="assets/images/icon/lin-img.png">
              
         </div>
            <div class="btn_sec animated bounceIn">
            <a type="button" class="order_btn cta" data-toggle="modal" data-target="#order_now"><span> </span>
         
            <span>
            Order Now
      <svg width="43px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
          <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
          <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
        </g>
      </svg>
    </span> 
         
         </a>

            
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
               <?php if($_COOKIE['order_type'] === '2') { ?>     
                 <div class="panel-body" id="panel-body">
                        <div class="row boxes">
                              <div class="box-one col-xs-12 col-sm-12 col-md-6">
                                 <div class="col-xs-12 col-sm-12 col-md-4">
                                    <?php if (!empty($location_image)) { ?>
                                    <img class="img-responsive pull-left" src="<?php echo $location_image; ?>">
                                    <?php } ?>
                                 </div>
                                 <div class="col-xs-12 col-sm-12 col-md-8">
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
                                 <div class="open_off">
                                    <?php if ($opening_status === 'open') { ?>
                                    <span><?php echo lang('text_is_opened'); ?></span>
                                    <?php } else if ($opening_status === 'opening') { ?>
                                    <span class="text-muted"><?php echo sprintf(lang('text_opening_time'), $opening_time); ?></span>
                                    <?php } else { ?>

                                    <span class="text-muted"><?php echo lang('text_closed'); ?></span>
                                    <?php } ?>
                                    <?php if ($opening_status !== 'closed') { ?>
                                    </div>
                                    <li class="visible-xs">
                                       <?php if (!empty($opening_type) AND $opening_type == '24_7') { ?>
                                       <span class="fa fa-clock-o"></span>&nbsp;&nbsp;<span><?php echo lang('text_24_7_hour'); ?></span>
                                       <?php } else if (!empty($opening_time) AND !empty($closing_time)) { ?>
                                       <span class="fa fa-clock-o"></span>&nbsp;&nbsp;<span><?php echo $opening_time; ?> - <?php echo $closing_time; ?></span>
                                       <?php } ?>
                                    </li>
                                    <?php } ?>
                                    <!-- <?php if (config_item('allow_reviews') !== '1') { ?>
                                    <li class="text-muted">
                                       <div class="rating rating-sm">
                                          <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-half-o"></span><span class="fa fa-star-o"></span>
                                          <span class="small"><?php echo $text_total_review; ?></span>
                                       </div>
                                    </li>
                                    <?php } ?> -->
                                 <!-- <li class="text-muted">
                                       <?php if ($has_delivery) { ?>
                                       <?php if ($delivery_status === 'open') { ?>
                                       <?php echo sprintf(lang('text_delivery_time_info'), sprintf(lang('text_in_minutes'), $delivery_time)); ?>
                                       <?php } else if ($delivery_status === 'opening') { ?>
                                       <?php echo sprintf(lang('text_delivery_time_info'), sprintf(lang('text_starts'), $delivery_time)); ?>
                                       <?php } else { ?>
                                       <?php echo sprintf(lang('text_delivery_time_info'), lang('text_is_closed')); ?>
                                       <?php } ?>
                                       <?php } ?>
                                 </li> -->
                                    <!-- <li class="text-muted">
                                       <?php if ($has_collection) { ?>
                                       <?php if ($collection_status === 'open') { ?>
                                       <?php echo sprintf(lang('text_collection_time_info'), sprintf(lang('text_in_minutes'), $collection_time)); ?>
                                       <?php } else if ($collection_status === 'opening') { ?>
                                       <?php echo sprintf(lang('text_collection_time_info'), sprintf(lang('text_starts'), $collection_time)); ?>
                                       <?php } else { ?>
                                       <?php echo sprintf(lang('text_collection_time_info'), lang('text_is_closed')); ?>
                                       <?php } ?>
                                       <?php } ?>
                                    </li> -->
                              
                               <!-- <?php if ($opening_status !== 'closed') { ?>
                                    <li class="hidden-xs">
                                       <?php if (!empty($opening_type) AND $opening_type == '24_7') { ?>
                                       <span class="fa fa-clock-o"></span>&nbsp;&nbsp;<span><?php echo lang('text_24_7_hour'); ?></span>
                                       <?php } else if (!empty($opening_time) AND !empty($closing_time)) { ?>
                                       <span class="fa fa-clock-o"></span>&nbsp;&nbsp;<span><?php echo $opening_time; ?> - <?php echo $closing_time; ?></span>
                                       <?php } ?>
                                       </li>
                                    <?php } ?>  -->
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
                                 </li> -->
                                    <li class="text-muted"><?php echo lang('text_min_total'); ?> : <?php echo currency_format($min_total); ?></li>
                                    <?php if ($has_delivery) { ?>
                                    <li class="text-muted"><?php echo $text_delivery_condition; ?></li>
                                     <!-- <li class="text-muted"><?php echo ($delivery_charge > 0) ? sprintf(lang('text_delivery_charge'), currency_format($delivery_charge)) : lang('text_free_delivery'); ?></li> -->
                                    <?php } ?>
                              
                                                                           
                                    </ul>
                              </div>
                         
                        </div>
                     </div> 
                           <div class="full_out">
                     
                                <div class="col-md-12 nopad">

                                       <div class="contact cnt">
                                             <div class="col-lg-4 col-md-4 col-sm-6 ">
                                                   <div class="contact-box ">
                                                         <i class="fa fa-phone"></i>
                                                         <div class="cont_con">
                                                            
                                                         <a href="tel:+965 67678956"><p>949200202</p></a> 
                                                         </div>
                                                   </div>
                                             </div>
                                             <div class="col-lg-4 col-md-4 col-sm-6 ">
                                                <div class="contact-box ">
                                                      <i class="fa fa-envelope-o"></i>
                                                      <div class="cont_con">
                                                      <a href="mailto:support@website.com"><p>support@website.com</p></a> 
                                                        
                                                      </div>
                                                </div>
                                             </div>
                                             <div class="col-lg-4 col-md-4 col-sm-6 ">
                                                <div class="contact-box ">
                                                      <i class="fa fa-whatsapp"></i>
                                                      <div class="cont_con">
                                                      
                                                         <a  class="cont_link_app" href="//api.whatsapp.com/send?phone=96597425684&text=WHATEVER_TEXT_YOU_WANT_TO_SEND" class="applyinfo-btn">
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
   //-->
</script>