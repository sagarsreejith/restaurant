<?php echo get_header(); ?>
<div id="page-content" class="parallax pb-30 bg-overlay-black-70 " style="background:url('../assets/images/d2.jpg');    background-size: cover;
    background-attachment: fixed;
    background-position: center center;">
	<div class="container">
		<div class="margin_st">
		<div class="row">
			<div class="col-xs-12 col-sm-9 center-block top-spacing-10 bg_payment">
				<div class="row">
					<div class="col-xs-12">
						<ul class="nav nav-pills nav-justified thumbnail">
							<li class="disabled">
								<a href="#checkout">
									<h4 class="list-group-item-heading"><?php echo lang('text_step_one'); ?></h4>
									<p class="list-group-item-text hidden-xs"><?php echo lang('text_step_one_summary'); ?></p>
								</a>
							</li>
							<li class="disabled">
								<a href="#payment">
									<h4 class="list-group-item-heading"><?php echo lang('text_step_two'); ?></h4>
									<p class="list-group-item-text hidden-xs"><?php echo lang('text_step_two_summary'); ?></p>
								</a>
							</li>
							<li class="active">
								<a href="#confirmation">
									<h4 class="list-group-item-heading"><?php echo lang('text_step_three'); ?></h4>
									<p class="list-group-item-text hidden-xs"><?php echo lang('text_step_three_summary'); ?></p>
								</a>
							</li>
						</ul>
					</div>

					<div class="col-xs-12 content-wrap clr_prog2">
						<div class="heading-section">
							<?php echo $text_success_message; ?>
		                    <span class="under-heading"></span>
						</div>

			            <div class="panel panel-default">
			                <div class="panel-heading pan_head">
			                    <h3 class="panel-title"><strong><?php echo lang('text_order_details'); ?></strong></h3>
			                </div>
			                <div class="panel-body">
								
							
			                    <div class="col-sm-12 clr_prog">
								
			                        <p class="st_res"><?php echo $order_details; ?></p>
			                    </div>
			                    <div class="col-sm-12 clr_prog text-center">
									<?php if ($delivery_address) { ?>
										<strong><?php echo lang('text_delivery_address'); ?>:</strong>
										<address><?php echo $delivery_address; ?></address>
									<?php } ?>
			                    </div>
								<div class="col-sm-12 clr_prog text-center">
									<strong><?php echo lang('text_your_local'); ?></strong><br />
									<strong><?php echo $location_name; ?></strong><br />
									<address><?php echo $location_address; ?></address>
								</div>
			                </div>
			            </div>

			            <div class="panel panel-default">
			                <div class="panel-heading pan_head">
			                    <h3 class="panel-title"><strong><?php echo lang('text_order_items'); ?></strong></h3>
			                </div>
			                <div class="panel-body">
								<?php if ($menus) { ?>
				                    <div class="table-responsive">
										<table class="table table-condensed clr_prog">
				                            <tbody>
												<?php foreach ($menus as $menu) { ?>
													<tr>
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
															<td class="text-right thick-line"><b><?php echo $total['title']; ?></b></td>
															<td class="text-right thick-line"><b><?php echo $total['value']; ?></b></td>
														<?php } else { ?>
															<td class="text-right no-line"><?php echo $total['title']; ?></td>
															<td class="text-right no-line"><?php echo $total['value']; ?></td>
														<?php } ?>
													</tr>
												<?php } ?>
				                            </tbody>
				                        </table>
				                    </div>
								<?php } ?>
								<p><?php echo lang('text_thank_you'); ?></p>
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