
	<?php echo get_header(); ?>
<?php echo get_partial('content_top'); ?>
<div id="page-content">
	<div class="container">
		<div class="row">
			<div class="margin_st2">
			<?php echo get_partial('content_left'); ?>
			<?php
				if (partial_exists('content_left') AND partial_exists('content_right')) {
					$class = "col-sm-6 col-md-6";
				} else if (partial_exists('content_left') OR partial_exists('content_right')) {
					$class = "col-sm-9 col-md-9";
				} else {
					$class = "col-md-12";
				}
			?>

			<div class="<?php echo $class; ?> top-spacing">
				<div class="row">
					<?php echo load_partial('locations_filter', $locations_filter); ?>

					<div class="location-list col-sm-12 col-md-8">
						<?php if ($locations) {?>
							<?php foreach ($locations as $location) { ?>
								<div class="panel panel-local">
							

								
							
								

										<section class="loc_sec_st">

										
										<div class="location_address_top">
											<div class=" col-xs-12 col-sm-10 col-md-10">
												
													<div class="location_head_top"><h4><?php echo $location['location_name']; ?></h4> <div class="distance_location"> (<span class="text-muted"><?php echo $location['distance']; ?> <?php echo $location['distance_unit']; ?></span>)</div></div>
													
													<div class="location_address"><span class="text-muted"><?php echo $location['address']; ?></span></div>
												
													
												
											</div>
											<div class=" col-xs-12 col-sm-2 col-md-2">

											<div class="open_off">
														<?php if ($location['opening_status'] === 'open') { ?>
													<?php echo lang('text_is_opened'); ?>
													<?php } else if ($location['opening_status'] === 'opening') { ?>
														<span class="text-muted open_btn"><?php echo sprintf(lang('text_opening_time'), $location['opening_time']); ?></span>
													<?php } else { ?>
														<span class="text-muted off_btn"><?php echo lang('text_closed'); ?></span>
													<?php } ?>
													<?php if (config_item('allow_reviews') !== '1') { ?>
												
														
													</div>
													<?php } ?>

														<!-- <div class="rating rating-sm text-muted">
															<span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-half-o"></span><span class="fa fa-star-o"></span>
															<span><?php echo sprintf(lang('text_total_review'), $location['total_reviews']); ?></span>
														</div> -->

											</div>
										</div>
											<div class="box_st">
											<div class="box-one col-xs-12 col-sm-10">
												<div class="col-xs-12 col-sm-4">
													<?php if (!empty($location['location_image'])) { ?>
														<img class="img-responsive pull-left branch_img" src="<?php echo $location['location_image']; ?>">
													<?php } ?>
												</div>
												<div class="col-xs-12 col-sm-8">

												<ul class="location_list">
												
													<?php if ($opening_status !== 'closed') { ?>
													<li class="hidden-xs">
													<?php if (!empty($opening_type) AND $opening_type == '24_7') { ?>
													<span class="fa fa-clock-o"></span>&nbsp;&nbsp;<span><?php echo lang('text_24_7_hour'); ?></span>
													<?php } else if (!empty($opening_time) AND !empty($closing_time)) { ?>
													<span class="fa fa-clock-o"></span>&nbsp;&nbsp;<span><?php echo $opening_time; ?> - <?php echo $closing_time; ?></span>
													<?php } ?>
													</li>
													<?php } ?> 
											

													<li class="hidden-xs">
														<?php if ($opening_status !== 'closed') { ?>
													
														<?php if (!empty($opening_type) AND $opening_type == '24_7') { ?>
														<span class="fa fa-clock-o"></span>&nbsp;&nbsp;<span><?php echo lang('text_24_7_hour'); ?></span>
														<?php } else if (!empty($opening_time) AND !empty($closing_time)) { ?>
														<span class="fa fa-clock-o"></span>&nbsp;&nbsp;<span><?php echo $opening_time; ?> - <?php echo $closing_time; ?></span>
														<?php } ?>
														
														<?php } ?> 
                                   					 </li>

														<li class="text-muted">
													<i class="fa fa-dice-two"></i>
													
														<?php if (!$location['has_delivery'] AND $location['has_collection']) { ?>
															<i class="fa fa-hand-o-right" aria-hidden="true"></i>
															<?php echo lang('text_only_collection_is_available'); ?>
														<?php } else if ($location['has_delivery'] AND !$location['has_collection']) { ?>
															<i class="fa fa-hand-o-right" aria-hidden="true"></i>
															<?php echo lang('text_only_delivery_is_available'); ?>
														<?php } else if ($location['has_delivery'] AND $location['has_collection']) { ?>
															<i class="fa fa-hand-o-right" aria-hidden="true"></i>
															<?php echo lang('text_offers_both_types'); ?>
														<?php } else { ?>
															<?php echo lang('text_offers_no_types'); ?>
														<?php } ?>
														
													</li>
													<li class="text-muted">
												
														<?php if ($location['has_delivery']) { ?>
															<?php if ($location['delivery_status'] === 'open') { ?>
																<i class="fa fa-motorcycle"></i>
																<?php echo sprintf(lang('text_delivery_time_info'), sprintf(lang('text_in_minutes'), $location['delivery_time'])); ?>
															<?php } else if ($location['delivery_status'] === 'opening') { ?>
																<?php echo sprintf(lang('text_delivery_time_info'), sprintf(lang('text_starts'), $location['delivery_time'])); ?>
															<?php } else { ?>
																<?php echo sprintf(lang('text_delivery_time_info'), lang('text_is_closed')); ?>
															<?php } ?>
														<?php } ?>
													</li>
													
											
													
													<li class="text-muted ">
												
														<?php if ($location['has_collection']) { ?>
															<?php if ($location['collection_status'] === 'open') { ?>
																<span class="li_class"></span>
																<?php echo sprintf(lang('text_collection_time_info'), sprintf(lang('text_in_minutes'), $location['collection_time'])); ?>
															<?php } else if ($location['collection_status'] === 'opening') { ?>
																<i class="fa fa-shopping-bag"></i>
																<?php echo sprintf(lang('text_collection_time_info'), sprintf(lang('text_starts'), $location['collection_time'])); ?>
															<?php } else { ?>
																<?php echo sprintf(lang('text_collection_time_info'), lang('text_is_closed')); ?>
															<?php } ?>
														<?php } ?>
													</li>
													

					
													
													
												</ul>
												</div>
											
											</div>
									
											<div class="col-xs-12 col-sm-2 goto_menu">
											<a class="" href="<?php echo $location['href']; ?>"><?php echo lang('button_view_menu'); ?> <i class="fa fa-chevron-circle-right"></i></a>
											</div>
									
											<div class="clearfix"></div>
										</div>
									</div>
														</section>
							
							<?php } ?>
						<?php } else { ?>
							<div class="panel panel-local">
								<div class="panel-body">
									<p><?php echo lang('text_filter_no_match'); ?></p>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>

				<nav aria-label="Page navigation nav_branch">
  <ul class="pagination pg-blue">
    <li class="page-item ">
      <a class="page-link" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link">1</a></li>
    <li class="page-item active">
      <a class="page-link">2 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link">3</a></li>
    <li class="page-item ">
      <a class="page-link">Next</a>
    </li>
  </ul>
</nav>
				
			<?php echo get_partial('content_right', 'col-sm-3'); ?>
			<?php echo get_partial('content_bottom'); ?>
		</div>
	</div>
</div>
</div>

<div class="content-wrap cont_clr  cont_clr_contact col-md-12">
                                                                                                    <div class="">
                                                        <div class="col-md-12">

                                                            <div class="col-md-12  bottom-spacing">
                                                                <div class="contact_page">
                                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                                        <div class="contact-box">
                                                                                
                                                                                <div class="cnt_div">
                                                                                    <h4><i class="fa fa-map-marker"></i> Address</h4>
                                                                                    <p>
                                                                                        Zalatimo Sweets - Kipco Branch                                                                                            Sharq Khaled Bin Al Waleed st, Shop No.6 ,,Sharq ,Kuwait City (Capital) ,                                                                                    </p>
                                                                                </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                                        
                                                                        <div class="contact-box">
                                                                          
                                                                            <div class="cnt_div">
                                                                            <h4>   <i class="fa fa-phone"></i> Phone</h4>
                                                                            <p>
                                                                                +965 50392340                                                                            </p>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-3 col-sm-3">

                                                                        <div class="contact-box ">
                                                                           
                                                                            <div class="cnt_div">
                                                                            <h4>  <i class="fa fa-envelope-o"></i> Email</h4>
                                                                            <p> support@website.com</p>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                                        <div class="contact-box ">
                                                                           
                                                                            <div class="cnt_div">
                                                                                <h4>  <i class="fa fa-whatsapp"></i>Whatsapp</h4>
                                                                                <p>949200202</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                 
                                                                                                </div>				

<?php echo get_footer(); ?>
<script>
	$('li').click(function() {
  $(this).addClass('active').siblings().removeClass('active');
});
	</script>