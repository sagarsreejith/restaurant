<?php if ($categories) { ?>
	<div id="searchText" class="form-group has-feedback has-search has-clear">
                <input type="text" name="catsearch" id="catsearch" class="form-control search" placeholder="Search" >
                <span class="fa fa-search fa-2x form-control-feedback"></span>
                <span class="form-control-feedback form-control-clear fa fa-times fa-2x hidden"  onClick="clearSearch();"></span>
	</div>
	
	<div id="Container" class="menu-list">
		
	 
        
      <!-- <div class="item_sec" id="food_list">
		<div class="col-md-12  popup-gallery">
			<div class="fullout_div">
					<div class="food_image galllery-item">
						<img class="img-responsive" alt="" src="../assets/images/gallery/01.jpg">
							<div class="food_price">
								3<span>Kwd</span>
							</div>
							<div class="overlay">
						<div class="overlay-content">
							
							
							<a class="portfolio-img" href="../assets/images/gallery/01.jpg"><i class="fa fa-expand"></i></a>               
							</div>
						</div>
					</div>
					<div class="food_content">
						<div class="food_title">
							<h4>Rice</h4>
						</div>
				
						<div class="food_description">
							<span class="menu-button">
								<a class=" btn btn-cart add_cart" onclick="addToCart('77', '1');"><span class="fa fa-plus"></span></a>
							</span>
							<p>Boiled egg wrapped in a ground meat mixture, coated in breadcrumbs, and deep-fried.</p> 
						</div>
					</div>
			</div>	
			<div class="fullout_div">
					<div class="food_image galllery-item">
						<img class="img-responsive" alt="" src="../assets/images/gallery/01.jpg">
							<div class="food_price">
								3<span>Kwd</span>
							</div>
							<div class="overlay">
						<div class="overlay-content">
							
							
							<a class="portfolio-img" href="../assets/images/gallery/01.jpg"><i class="fa fa-expand"></i></a>               
							</div>
						</div>
					</div>
					<div class="food_content">
						<div class="food_title">
							<h4>Rice</h4>
						</div>
				
						<div class="food_description">
							<span class="menu-button">
								<a class=" btn btn-cart add_cart" onclick="addToCart('77', '1');"><span class="fa fa-plus"></span></a>
							</span>
							<p>Boiled egg wrapped in a ground meat mixture, coated in breadcrumbs, and deep-fried.</p> 
						</div>
					</div>
			</div>	
			<div class="fullout_div">
					<div class="food_image galllery-item">
						<img class="img-responsive" alt="" src="../assets/images/gallery/01.jpg">
							<div class="food_price">
								3<span>Kwd</span>
							</div>
							<div class="overlay">
						<div class="overlay-content">
							
							
							<a class="portfolio-img" href="../assets/images/gallery/01.jpg"><i class="fa fa-expand"></i></a>               
							</div>
						</div>
					</div>
					<div class="food_content">
						<div class="food_title">
							<h4>Rice</h4>
						</div>
				
						<div class="food_description">
							<span class="menu-button">
								<a class=" btn btn-cart add_cart" onclick="addToCart('77', '1');"><span class="fa fa-plus"></span></a>
							</span>
							<p>Boiled egg wrapped in a ground meat mixture, coated in breadcrumbs, and deep-fried.</p> 
						</div>
					</div>
			</div>	
				

			<div class="fullout_div">
					<div class="food_image galllery-item">
						<img class="img-responsive" alt="" src="../assets/images/gallery/01.jpg">
							<div class="food_price">
								3<span>Kwd</span>
							</div>
							<div class="overlay">
						<div class="overlay-content">
							
							
							<a class="portfolio-img" href="../assets/images/gallery/01.jpg"><i class="fa fa-expand"></i></a>               
							</div>
						</div>
					</div>
					<div class="food_content">
						<div class="food_title">
							<h4>Rice</h4>
						</div>
				
						<div class="food_description">
							<span class="menu-button">
								<a class=" btn btn-cart add_cart" onclick="addToCart('77', '1');"><span class="fa fa-plus"></span></a>
							</span>
							<p>Boiled egg wrapped in a ground meat mixture, coated in breadcrumbs, and deep-fried.</p> 
						</div>
					</div>
			</div>	
			<div class="fullout_div">
					<div class="food_image galllery-item">
						<img class="img-responsive" alt="" src="../assets/images/gallery/01.jpg">
							<div class="food_price">
								3<span>Kwd</span>
							</div>
							<div class="overlay">
						<div class="overlay-content">
							
							
							<a class="portfolio-img" href="../assets/images/gallery/01.jpg"><i class="fa fa-expand"></i></a>               
							</div>
						</div>
					</div>
					<div class="food_content">
						<div class="food_title">
							<h4>Rice</h4>
						</div>
				
						<div class="food_description">
							<span class="menu-button">
								<a class=" btn btn-cart add_cart" onclick="addToCart('77', '1');"><span class="fa fa-plus"></span></a>
							</span>
							<p>Boiled egg wrapped in a ground meat mixture, coated in breadcrumbs, and deep-fried.</p> 
						</div>
					</div>
			</div>	


		</div>
		
				  
		
			  
		</div> -->
       
     
    
		<?php $category_count = 1; ?>
		<?php foreach ($categories as $category_id => $category) { ?>
			<?php $catname_replace = array("&", ",", "'"); $category_name = strtolower(str_replace(' ', '-', str_replace($catname_replace, '_', $category['name']))); ?>
			<div class="menu-container mix <?php echo $category_name; ?>">
				<a class="menu-toggle visible-xs visible-sm collapsed" href="#<?php echo $category_name; ?>" role="button" data-toggle="collapse" data-parent=".menu-list" aria-expanded="<?php echo ($category_count === 1) ? 'true' : 'false'; ?>" aria-controls="<?php echo $category_name; ?>">
					<?php echo $category['name']; ?>
					<i class="fa fa-angle-down fa-2x fa-pull-right text-muted"></i>
					<i class="fa fa-angle-up fa-2x fa-pull-right text-muted"></i>
				</a>
				<div id="<?php echo $category_name; ?>" class="navbar-collapse collapse <?php echo ($category_count === 1) ? 'in' : ''; ?> wrap-none">
					<div class="menu-category">
						<h3 class="hidden-xs hidden-sm"><?php echo $category['name']; ?></h3>
						<p><?php echo $category['description']; ?></p>
						<?php if (!empty($category['image'])) { ?>
							<img class="img-responsive" src="<?php echo $category['image']; ?>" alt="<?php echo $category['name']; ?>"/>
						<?php }?>
					</div>

					 <div class="menu-items">
						 
						<?php if (isset($menus[$category_id]) AND !empty($menus[$category_id])) { ?>
							<?php foreach ($menus[$category_id] as $menu) { ?>


     
 
								<div id="menu<?php echo $menu['menu_id']; ?>" class="menu-item">
									<div class="menu-item-wrapper row">
										<?php if ($show_menu_images === '1' AND !empty($menu['menu_photo'])) { ?>
									
											<div class="menu-thumb col-xs-2 col-sm-3 wrap-none wrap-right">
												<img class="img-responsive img-thumbnail" alt="<?php echo $menu['menu_name']; ?>" src="<?php echo $menu['menu_photo']; ?>">
											</div>
										<?php } ?>

										<div class="menu-content <?php echo ($show_menu_images === '1' AND !empty($menu['menu_photo'])) ? 'col-xs-6 col-sm-5' : 'col-xs-8'; ?> wrap-none wrap-right">
											<span class="menu-name"><b><?php echo character_limiter($menu['menu_name'], 80); ?></b></span>
											<span class="menu-desc small">
												<?php echo character_limiter($menu['menu_description'], 120); ?>
											</span>
										</div>
										<div class="menu-right col-xs-4 wrap-none">
											<span class="menu-price"><?php echo $menu['menu_price']; ?></span>
											<span class="menu-button">
												<?php if ($menu['mealtime_status'] === '1' AND empty($menu['is_mealtime'])) { ?>
													<a class="btn btn-primary btn-cart add_cart disabled"><span class="fa fa-plus"></span></a>
												<?php } else if (isset($menu_options[$menu['menu_id']])) { ?>
													<a class="btn btn-primary btn-cart add_cart" onClick="openMenuOptions('<?php echo $menu['menu_id']; ?>', '<?php echo $menu['minimum_qty']; ?>');">
														<span class="fa fa-plus"></span>
													</a>
												<?php } else { ?>
													<a class="btn btn-primary btn-cart add_cart" onClick="addToCart('<?php echo $menu['menu_id']; ?>', '<?php echo $menu['minimum_qty']; ?>');">
														<span class="fa fa-plus"></span>
													</a>
												<?php } ?>
											</span>
											<?php if ($menu['mealtime_status'] === '1' AND empty($menu['is_mealtime'])) { ?>
												<div class="menu-mealtime text-danger"><?php echo sprintf(lang('text_mealtime'), $menu['mealtime_name'], $menu['start_time'], $menu['end_time']); ?></div>
											<?php }?>

											<?php if ($menu['special_status'] === '1' AND $menu['is_special'] === '1') { ?>
												<div class="menu-special"><?php echo $menu['end_days']; ?></div>
											<?php }?>
										</div>
											
									</div>
								</div>
							<?php } ?>
						<?php } else { ?>
							<p><?php echo lang('text_empty'); ?></p>
						<?php } ?>

						<div class="gap"></div>
						<div class="gap"></div>
					 </div>
				</div>
			</div>
			<?php $category_count++; ?>
		<?php } ?>
	</div>
<?php } else { ?>
	<p><?php echo lang('text_no_category'); ?></p>
<?php } ?>

<?php if (!empty($menu_total) AND $menu_total < 150) { ?>
	<div class="pager-list"></div>
<?php } else { ?>
	<div class="pagination-bar text-right">
		<div class="links"><?php echo $pagination['links']; ?></div>
		<div class="info"><?php echo $pagination['info']; ?></div>
	</div>
<?php } ?>

<script type="text/javascript"><!--
	function clearSearch() {
		$('#catsearch').val('').trigger('propertychange').focus();
		resetFilter();
	}

    function resetFilter() {
         var find =$("#catsearch").val();
         var allSpan = $(".menu-name");

         var menuCount = 0;
         var oldCount;
         var count;
         var parent;
         var prevParent;

         allSpan.each(function( index ) {
            $( "p:contains('There are no menus in this category.')" ).parent().parent().parent().hide();
            $(this).closest('.menu-items').parent().parent().hide();
         });

         if (!find) {
            $( "p:contains('There are no menus in this category.')" ).parent().parent().parent().show();
         }

         allSpan.each(function( index ) {
             var spantext = $(this).text().toLowerCase();
             var findtext = find.toLowerCase();

             if(spantext.indexOf(findtext) != -1) {
                $(this).closest('.menu-items').parent().parent().show();
                $(this).closest('.menu-item').show();
             } else {
                $(this).closest('.menu-item').hide();
             }
         });
    }

	$( document ).ready(function() {
		var $myGroup = $('.menu-list');

	    $myGroup.on('show.bs.collapse','.collapse', function() {
	        $myGroup.find('.collapse.in').collapse('hide');

	    });
        
        $myGroup.on('shown.bs.collapse', function () {
            
            $('html, body').animate({
                scrollTop: $myGroup.find('.collapse.in').offset().top - 75
            }, 1);
	    });
            
        $("#catsearch").keyup(function() {
			resetFilter();
	});
    
        $('.has-clear input[type="text"]').on('input propertychange', function() {
	    	  var $this = $(this);
	    	  var visible = Boolean($this.val());
	    	  $this.siblings('.form-control-clear').toggleClass('hidden', !visible);
	    	  $this.siblings('.fa-search').toggleClass('hidden', visible);
		 }).trigger('propertychange');
	});
</script>
