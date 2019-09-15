

<?php echo get_header(); ?>
<div id="page-content" class="parallax pb-30 bg-overlay-black-70 " style="background:url('../assets/images/icon/slider_image1.jpg');    background-size: cover;
    background-attachment: fixed;
    background-position: center center;">
	<div class="container">
		<div class="margin_st">
		<div class="row">
			<div class="col-xs-12 col-sm-9 center-block top-spacing-10 bg_payment">
				<div class="row">
					<div class="col-xs-12 nopad">


					<ul class="progressbar">
							<li class="step-one <?php if ($checkout_step === 'one') { echo 'active'; } else if ($checkout_step === 'two') { echo 'link'; } else { echo 'disabled'; }; ?>">
								<a href ="#checkout">
									
								 <span class="list-group-item-heading"><i class="fa fa-user"></i></span>
									<p class="list-group-item-text hidden-xs"><?php echo lang('text_step_one_summary'); ?></p>
								</a>
							</li>
							<!-- <li class="disabled">
								<a  href="#payment">
								<span class="list-group-item-heading"><i class="fa fa-money"></i></span>
									<p class="list-group-item-text hidden-xs"><?php echo lang('text_step_two_summary'); ?></p>
								</a>
							</li> -->
							<li class="step-three active">
								<a href="#confirmation">
								<span class="list-group-item-heading"><i class="fa fa-check"></i></span>
									<p class="list-group-item-text hidden-xs"><?php echo lang('text_step_three_summary'); ?></p>
								</a>
							</li>
						</ul>

					
					</div>

					<div class="col-xs-12 content-wrap clr_prog2">
							<div class="cust_head">
								
								<img class="img_logo" src="../assets/images/logo_1.png">
							</div>
						<div class="heading-section">
							<?php echo $text_success_message; ?>

						
						

							<a role="presentation" class="clr_prog1"  data-toggle="modal" data-target="#track-modal">
                                                        <?php echo lang( 'menu_recent_order'); ?> <span>to view your order progress.</span>
                                                    </a>
		                    <span class="under-heading"></span>
						</div>

						

			            <div class="">
			                <div class="head_sec">
			                    <h3 class="panel-title"><strong><?php echo lang('text_order_details'); ?></strong></h3>
			                </div>
			                <div class="panel-body">
								
							
			                    <div class="col-sm-12 clr_prog nopad">
								
			                        <p class="st_res"><?php echo $order_details; ?></p>
			                    </div>
			                    <div class="col-sm-12 clr_prog heading_info_st nopad ">
									<?php if ($delivery_address) { ?>
										<span class="heading_info "><?php echo lang('text_delivery_address'); ?>:</span>
										<div class="text-subline offset-top-15"></div>
										<address><?php echo $delivery_address; ?></address>
									<?php } ?>
			                    </div>
								<div class="col-sm-12 clr_prog heading_info_st nopad">
								<?php if ($collection) { ?>
										<span class="heading_info ">Order Details</span>
										<div class="text-subline offset-top-15"></div>

										<div class="col-md-5 nopad text-right">
											 <strong class="location_name_rest"><?php echo lang('text_your_local'); ?> : </strong><br />
										</div>
										<div class="col-md-7 nopad">
											<strong class="location_name_rest nm_rs"><?php echo $location_name; ?></strong><br /> 
										</div>
									<address><?php echo $location_address; ?></address>
									<?php } ?>
								</div>
			                </div>
			            </div>

			            <div class="">
			                <div class="head_sec1">
			                    <h3 class="panel-title"><strong><?php echo lang('text_order_items'); ?></strong></h3>
			                </div>
			                <div class="panel-body payment_sec">
								<?php if ($menus) { ?>
				                    <div class="table-responsive">
										<table class="table table-condensed clr_prog">
				                            <tbody>
												<tr class="item_details">
													<td>Quantity</td>
													<td width="65%"> Item Name</td>
													<td> Item Price</td>
													<td> Total Price</td>
												</tr>
												<?php foreach ($menus as $menu) { ?>
													<tr class="item_details1">
														<td><?php echo $menu['quantity']; ?> x</td>
														<td class="text-left" width="65%">
															<?php echo $menu['name']; ?>
															<?php if (!empty($menu['options'])) { ?>
																<div class="text-muted"><small><?php echo $menu['options']; ?></small></div>
															<?php } ?>
															<?php if (!empty($menu['comment'])) { ?>
																<div class="text-muted"><small><b><?php echo $menu['comment']; ?></b></small></div>
															<?php } ?>
														</td>
														<td class="text-right"><?php echo $menu['price']; ?></td>
														<td class="text-right"><?php echo $menu['subtotal']; ?></td>
													 </tr>
												<?php } ?>
												<tr><td class="thick-line" colspan="4"></td></tr>
												<?php foreach ($order_totals as $total) { ?>
													<tr>
														<td class="no-line" colspan="2"></td>
														<?php if ($total['code'] === 'order_total') { ?>
															<td class="text-center thick-line"><b><?php echo $total['title']; ?></b></td>
															<td class="text-center thick-line"><b><?php echo $total['value']; ?></b></td>
														<?php } else { ?>
															<td class="text-center no-line"><?php echo $total['title']; ?></td>
															<td class="text-center no-line"><?php echo $total['value']; ?></td>
														<?php } ?>
													</tr>
												<?php } ?>
				                            </tbody>
				                        </table>
				                    </div>
								<?php } ?>
								<p class="tq"><?php echo lang('text_thank_you'); ?></p>
								
									</div>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>


</div>

<?php echo get_footer(); ?>
