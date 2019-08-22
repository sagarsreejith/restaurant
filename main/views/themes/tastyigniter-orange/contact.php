<?php echo get_header(); ?>
    <?php echo get_partial('content_top'); ?>

        <?php if ($this->alert->get('', 'alert')) { ?>
            <div id="notification">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <?php echo $this->alert->display('', 'alert'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

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

                <div id="page-content">
                    <div class=" top-spacing">

                        <div class="row">
                            <div class="margin_st2">

                                <div class="section-title text-center">
                                    <div class="title-separator">
                                    <img src="assets/images/food_icon.png">
                                    </div>
                                    <h2> <span class="text-orange">Contact </span> Us</h2>
                                    <p>It would be great to hear from you! If you got any questions</p>
                                </div>

                                <?php echo get_partial('content_left'); ?>
                                    <?php echo get_partial('content_right'); ?>
                                        <?php
				if (partial_exists('content_left') AND partial_exists('content_right')) {
					$class = "col-sm-6 col-md-6";
				} else if (partial_exists('content_left') OR partial_exists('content_right')) {
					$class = "col-sm-9 col-md-9";
				} else {
					$class = "col-md-12";
				}
            ?>
            
            <div class="row">
                                                        <div class="col-md-12">
                                                            <div id="map" class="">
                                                                <div id="map-holder" style="height:370px;text-align:left;"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                            <div class="content-wrap cont_clr  cont_clr_contact <?php echo $class; ?>">
                                                <?php if (!empty($default_local)) { ?>
                                                    <div class="">
                                                        <div class="col-md-12">

                                                            <div class="col-md-12  bottom-spacing">
                                                                <div class="contact_page">
                                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                                        <div class="contact-box">
                                                                                
                                                                                <div class="cnt_div">
                                                                                    <h4><i class="fa fa-map-marker"></i> Address</h4>
                                                                                    <p>
                                                                                        <?php echo $location_name; ?>
                                                                                            <?php echo $location_address; ?>
                                                                                    </p>
                                                                                </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                                        
                                                                        <div class="contact-box">
                                                                          
                                                                            <div class="cnt_div">
                                                                            <h4>   <i class="fa fa-phone"></i> Phone</h4>
                                                                            <p>
                                                                                <?php echo $location_telephone; ?>
                                                                            </p>
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

                                                 
                                                    <?php } ?>
                                            </div>
                            </div>
						</div>
						



					</div>
					

                                                    

                                                

                                                    <script type="text/javascript">
                                                        //<![CDATA[
                                                        var map;
                                                        var geocoder = null;
                                                        var bounds = null;
                                                        var markers = [];
                                                        var infoWindow = null;
                                                        var local_name = "<?php echo $location_name; ?>";
                                                        var latlng = new google.maps.LatLng(
                                                            parseFloat("<?php echo $location_lat; ?>"),
                                                            parseFloat("<?php echo $location_lng; ?>")
                                                        );

                                                        function initializeMap() {
                                                            var html = "<b>" + local_name + "</b> <br/>" +
                                                                "<?php echo $location_address; ?><br/>" +
                                                                "<?php echo $location_telephone; ?>";

                                                            var mapOptions = {
                                                                scrollwheel: false,
                                                                center: latlng,
                                                                zoom: 11,
                                                                mapTypeId: google.maps.MapTypeId.ROADMAP,mapTypeControl: false
                                                            };

                                                            var map = new google.maps.Map(document.getElementById('map-holder'), mapOptions);

                                                            var infowindow = new google.maps.InfoWindow({
                                                                content: html
                                                            });

                                                            var marker = new google.maps.Marker({
                                                                position: latlng,
                                                                map: map,
                                                                title: local_name
                                                            });

                                                            google.maps.event.addListener(marker, 'click', function() {
                                                                infowindow.open(map, marker);
                                                            });
                                                            
                                                        }

                                                        google.maps.event.addDomListener(window, 'load', initializeMap);
                                                        //]]>
                                                    </script>

                </div>
                <?php echo get_footer(); ?>