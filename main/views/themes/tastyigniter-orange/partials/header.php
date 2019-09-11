<?php

	$pages = $this->Pages_model->getPages();

	$body_class = '';
	if ($this->uri->rsegment(1) === 'menus') {
		$body_class = 'menus-page';
	}
?>
    <?php echo get_doctype(); ?>
        <html xmlns="http://www.w3.org/1999/xhtml" lang="en">

        <head>
            <?php echo get_metas(); ?>
                <?php if ($favicon = get_theme_options('favicon')) { ?>
                    <link href="<?php echo image_url($favicon); ?>" rel="shortcut icon" type="image/ico">
                    <?php } else { ?>
                        <?php echo get_favicon(); ?>
                            <?php } ?>
                                <title>
                                    <?php echo sprintf(lang('site_title'), get_title(), config_item('site_name')); ?>
                                </title>
                                <?php echo get_style_tags(); ?>
                                    <?php echo get_active_styles(); ?>
                                        <?php echo get_script_tags(); ?>
                                            <?php echo get_theme_options('ga_tracking_code'); ?>
                                                <script type="text/javascript">
                                                    var alert_close = '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';

                                                    var js_site_url = function(str) {
                                                        var strTmp = "<?php echo rtrim(site_url(), '/').'/'; ?>" + str;
                                                        return strTmp;
                                                    };

                                                    var js_base_url = function(str) {
                                                        var strTmp = "<?php echo base_url(); ?>" + str;
                                                        return strTmp;
                                                    };

                                                    var pageHeight = $(window).height();

                                                    $(document).ready(function() {
                                                        if ($('#notification > p').length > 0) {
                                                            setTimeout(function() {
                                                                $('#notification > p').slideUp(function() {
                                                                    $('#notification').empty();
                                                                });
                                                            }, 3000);
                                                        }

                                                        $('.alert').alert();
                                                        $('.dropdown-toggle').dropdown();
                                                        $('a[title], i[title]').tooltip({
                                                            placement: 'bottom'
                                                        });
                                                        $('select.form-control').select2({
                                                            placeholder: 'Select an Area'
                                                        });
                                                    });
                                                </script>

                                                <?php $custom_script = get_theme_options('custom_script'); ?>
                                                    <?php if (!empty($custom_script['head'])) { echo '<script type="text/javascript">'.$custom_script['head'].'</script>'; }; ?>
                                                        <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">

        </head>

        <body class="<?php echo $body_class; ?>">
            <div id="opaclayer" onclick="closeReviewBox();"></div>

            <header class="header">
                <!-- Header Inner -->
                <div class="main-menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12 ">
                                <!-- Logo -->
                                <!-- <button type="button" class="btn-navbar navbar-toggle" data-toggle="collapse" data-target="#main-header-menu-collapse">
							<i class="fa fa-align-justify"></i>
						</button> -->
                                <div class="logo">
                                    <a class="" href="<?php echo rtrim(site_url(), '/').'/'; ?>">
                                        <?php if (get_theme_options( 'logo_image')) { ?>
                                            <img alt="<?php echo $this->config->item('site_name'); ?>" src="<?php echo image_url(get_theme_options('logo_image')) ?>">

                                            <?php } else if (get_theme_options( 'logo_text')) { ?>
                                                <?php echo get_theme_options( 'logo_text'); ?>
                                                    <?php } else if ($this->config->item('site_logo') === 'data/no_photo.png') { ?>
                                                        <?php echo $this->config->item('site_name'); ?>
                                                            <?php } else { ?>
                                                                <img alt="<?php echo $this->config->item('site_name'); ?>" src="<?php echo image_url($this->config->item('site_logo')) ?>">
                                                                <?php } ?>
                                    </a>
                                </div>
                                <!--/ End Logo -->
                                <div class="mobile-nav" ></div>
                            </div>
                            <div class="col-md-9 col-sm-9">
                                <nav class="navbar menu navbar-default">
                                    <div class="collapse navbar-collapse">

                                        <ul class="nav navbar-nav mobile-menu navbar-right" id="mobile_nav_id">
                                            <li class="header_li"><a role="presentation" href="<?php echo site_url(''); ?>" active>Home</a>
                                            </li>
                                            <li class="header_li"><a href="<?php echo site_url('#about'); ?>">About</a>
                                            </li>
                                            <li><a href="<?php echo site_url('#gallery'); ?>">Gallery</a>
                                            </li>

                                            <?php if ($this->config->item('reservation_mode') === '1') { ?>
                                                <li class="">
                                                    <a href="<?php echo site_url('reservation'); ?>">
                                                        <?php echo lang( 'menu_reservation'); ?>
                                                    </a>
                                                </li>
                                                <?php } ?>

                                                    <?php if ($this->customer->isLogged()) { ?>

                                                        <li class="dropdown">
                                                            <a class="dropdown-toggle clickable" data-toggle="dropdown" id="dropdownLabel1">
                                                                <?php echo lang( 'menu_my_account'); ?>
                                                            </a>
                                                            <ul class="dropdown-menu header_drp " role="menu" aria-labelledby="dropdownLabel1">
                                                                <div class="top-arrow"></div>
                                                                <li class="hidden">
                                                                    <a href="#page-top"></a>
                                                                </li>
                                                                <li>
                                                                    <a role="presentation" href="<?php echo site_url('account/orders'); ?>">
                                                                        <?php echo lang( 'menu_recent_order1'); ?>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a role="presentation" href="<?php echo site_url('account/account'); ?>">
                                                                        <?php echo lang( 'menu_my_account'); ?>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a role="presentation" href="<?php echo site_url('account/address'); ?>">
                                                                        <?php echo lang( 'menu_address'); ?>
                                                                    </a>
                                                                </li>

                                                                <?php if ($this->config->item('reservation_mode') === '1') { ?>
                                                                    <li>
                                                                        <a role="presentation" href="<?php echo site_url('account/reservations'); ?>">
                                                                            <?php echo lang( 'menu_recent_reservation'); ?>
                                                                        </a>
                                                                    </li>
                                                                    <?php } ?>

                                                                <li>
                                                                    <a role="presentation" href="<?php echo site_url('account/logout'); ?>">
                                                                        <?php echo lang( 'menu_logout'); ?>
                                                                    </a>
                                                                 </li>
                                                            </ul>
                                                        </li>
                                                        <?php } else { ?>

                                                            <li class="">
                                                                <a href="<?php echo site_url('#locations'); ?>">
                                                                    <?php echo lang( 'menu_locations'); ?>
                                                                </a>
                                                            </li> 

                                                            <li>
                                                                <a class="log" data-toggle="modal" data-dismiss="modal"  data-target="#login"> login</a>

                                                            </li>

                                                           

                                                            <?php } ?>
                                                            <li class="">
                                                                <a  data-toggle="modal" id="tract_modal"data-dismiss="modal"  data-target="#track-modal">
                                                                    <?php echo lang( 'track_recent_order'); ?>
                                                                </a>
                                                            </li>

                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ End Header Inner -->
            </header>

            <div class="modal fade popup" id="login" tabindex="-1" data-dismiss="modal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <div class="modal-header">

                            <div class="section-title text-center">
                                <div class="title-separator">
                                
                                    <h2 class="reg_st"> <span class="text-orange forgot"><?php echo lang('text_modal_login'); ?></span></h2>
                                    <span class="under-heading"></span>
                                </div>

                            </div>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <div class="modal-body">

                            <?php if ($this->alert->get('', 'alert')) { ?>
                                <div id="notification">
                                    <?php echo $this->alert->display('', 'alert'); ?>
                                </div>
                                <?php } ?>
                                    <fieldset>
                                       
                                        <div class="form-group">
                                            <div class="input-group">
                                                <i class="fa fa-envelope prefix"></i>
                                                <input type="text" name="email" id="login-email" class="form-control input-lg" placeholder="<?php echo lang('emailid'); ?>" autofocus="" />
                                                <!-- <span class="input-group-addon">@</span> -->
                                            </div>
                                            <?php echo form_error('email', '<span class="text-danger">', '</span>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                 <i class="fa fa-lock"></i>
                                                <input type="password" name="password" id="login-password" class="form-control input-lg" placeholder="<?php echo lang('label_password'); ?>" />
                                             
                                            </div>
                                            <?php echo form_error('password', '<span class="text-danger">', '</span>'); ?>
                                                <span class="text-danger" id="login-error"></span>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button class="btn btn-primary btn-block btn-lg" onclick="login()">
                                                        Login
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <a class="forgot_btn1  " data-dismiss="modal" data-toggle="modal" data-target="#reset">
                                                Forgot Passowrd?
                                            </a>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <a class=" reg_btn1 text-right" data-dismiss="modal" data-toggle="modal" data-target="#register"> Register</a>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade popup" id="register" tabindex="-1" data-dismiss="modal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog " role="document">
                    <div class="modal-content">

                        <div class="modal-header">

                            <div class="section-title text-center">
                                <div class="title-separator">
                                    <!-- <img src="assets/images/food_icon.png"> -->
                                    <h2 class="reg_st"> <span class="text-orange forgot"><?php echo lang('text_register'); ?></span></h2>
                                    <span class="under-heading"></span>
                                </div>

                            </div>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                         <div class="modal-body">
                                <div id="register-form" class="content-wrap col-sm-12 center-block">
                                    <div id="registration-notification" > </div>
                                      
                                        <form id="register_form" accept-charset="utf-8" action="" role="form" class="">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <i class="fa fa-user prefix" aria-hidden="true"></i>
                                                            <input type="text" id="fullname" class="form-control input-lg" value="<?php echo set_value('fullname'); ?>" name="first_name" placeholder="<?php echo lang('label_first_name'); ?>" autofocus="">
                                                            <?php echo form_error('first-name', '<span class="text-danger">', '</span>'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <i class="fa fa-phone prefix" aria-hidden="true"></i>
                                                            <input type="text" id="telephone" class="form-control input-lg" value="<?php echo set_value('telephone'); ?>" name="telephone" placeholder="<?php echo lang('label_telephone'); ?>">
                                                            <?php echo form_error('telephone', '<span class="text-danger">', '</span>'); ?>      
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <i class="fa fa-envelope  prefix" aria-hidden="true"></i>
                                                    <input type="text" id="email" class="form-control input-lg" value="<?php echo set_value('email'); ?>" name="email" placeholder="<?php echo lang('label_email'); ?>">
                                                    <?php echo form_error('email', '<span class="text-danger">', '</span>'); ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <i class="fa fa-key prefix" aria-hidden="true"></i>
                                                            <input type="password" id="password" class="form-control input-lg" value="" name="password" placeholder="<?php echo lang('label_password'); ?>">
                                                            <?php echo form_error('password', '<span class="text-danger">', '</span>'); ?> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <i class="fa fa-key prefix" aria-hidden="true"></i>
                                                            <input type="password" id="password-confirm" class="form-control input-lg" name="password_confirm" value="" placeholder="<?php echo lang('label_password_confirm'); ?>">
                                                            <?php echo form_error('password-confirm', '<span class="text-danger">', '</span>'); ?> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="col-xs-8 col-sm-9 col-md-12 connt_clr">
                                                                <span class="button-checkbox" id="button-checkbox">
                                                                    <button id="terms-condition" type="button" class="btn_box" data-color="info" tabindex="7">&nbsp;&nbsp;<?php echo lang('button_terms_agree'); ?></button>
                                                                    <input type="checkbox" name="terms_condition" class="hidden" value="1" <?php echo set_checkbox('terms_condition', '1'); ?>>
                                                                 </span>
                                                                <?php echo sprintf(lang('label_terms'), $registration_terms); ?>
                                                            </div>
                                                             <?php echo form_error('terms_condition', '<span class="text-danger">', '</span>'); ?>
                                                        </div>
                                                    </div>
                                            </div>
                                               
                                            <div class="row">
                                                        <div class="col-xs-12 col-md-6">
                                                            <button type="submit" class="btn btn-primary btn-block btn-lg">
                                                                <?php echo lang('button_register'); ?>
                                                            </button>
                                                        </div>
                                                        <div class="col-xs-12 col-md-6">
                                                            <a href="" data-toggle="modal" data-target="#login" data-dismiss="modal" class="btn btn-default btn-block btn-lg">
                                                                <?php echo lang('button_login'); ?>
                                                            </a>
                                                        </div>
                                            </div>

                                                  
                                        </form>
                                </div>
                        </div>
                           

                    </div>
                </div>
            </div>
            <div class="modal fade" id="terms-modal" data-dismiss="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">

                            <div class="section-title text-center">
                                <div class="title-separator">
                                    <!-- <img src="assets/images/food_icon.png"> -->
                                    <h2 class="reg_st"> <span class="text-orange forgot">Terms and Condition</span></h2>
                                    <span class="under-heading"></span>
                                </div>

                            </div>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                                                                <h4>	Introduction</h4>
                                                                <p>These Website Standard Terms and Conditions written on this webpage shall manage your use of our website, Webiste Name accessible at Website.com. These Terms will be applied fully and affect to your use of this Website. By using this Website, you agreed to accept all terms and conditions written in here. You must not use this Website if you disagree with any of these Website Standard Terms and Conditions. Minors or people below 18 years old are not allowed to use this Website.</p>

                                                                <h4> Intellectual Property Rights</h4>
                                                                <p>Other than the content you own, under these Terms, Company Name and/or its licensors own all the intellectual property rights and materials contained in this Website. You are granted limited license only for purposes of viewing the material contained on this Website.</p>
                        </div>
                    </div>
                </div>
            </div>
           

            <div class="modal fade" id="reset" tabindex="-1" data-dismiss="modal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      

                        <div class="modal-header">

                            <div class="section-title text-center">
                                <div class="title-separator">
                                    <!-- <img src="assets/images/food_icon.png"> -->
                                    <h2 class="reg_st"> <span class="text-orange forgot"><?php echo lang('text_reset'); ?></span></h2>
                                    <span class="under-heading"></span>
                                </div>

                            </div>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <?php if ($this->alert->get('', 'alert')) { ?>
                                <div id="notification">
                                    <?php echo $this->alert->display('', 'alert'); ?>
                                </div>
                                <?php } ?>
                                    <p class="text-center">
                                        <?php echo lang('text_summary'); ?>
                                    </p>
                                    <div class="form-group">
                                        <input name="email" type="text" id="reset-email" class="form-control input-lg" value="<?php echo set_value('email'); ?>" placeholder="<?php echo lang('label_email'); ?>" />
                                        <?php echo form_error('email', '<span class="text-danger">', '</span>'); ?></td>
                                    </div>
                                    <div class="row text-center" id="rest-msg"></div>
                                    <div class="row text-center">
                                        <div class="col-xs-12 col-md-6">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="rest_password()">
                                                <?php echo lang('button_reset'); ?>
                                            </button>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <a class="btn btn-default btn-lg btn-block" data-toggle="modal" data-target="#login" data-dismiss="modal">
                                                <?php echo lang('button_login'); ?>
                                            </a>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Button trigger modal -->
              

                <!-- Modal -->
                <div class="modal fade" id="track-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">

                        <div class="section-title text-center">
                            <div class="title-separator">
                                <!-- <img src="assets/images/food_icon.png"> -->
                                <h2 class="reg_st"> <span class="text-orange forgot"><?php echo lang('text_track'); ?></span></h2>
                                <span class="under-heading"></span>
                            </div>

                        </div>
                      
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                                
                            <form action="" id="tract_sec">
                                <div class=" col-md-12 nopad div_part">
                                    <div class="col-md-7 col-sm-9 col-xs-9 nopad">
                                        <input type="number" id="ordernum" name="ordernumber" placeholder="Enter Order Number.." value="<?php if(isset($order_number)) { echo $order_number; }?>">
                                    </div>
                                    <div class="col-md-5 col-sm-3 col-xs-3 nopad">
                                        <!-- <label class="head_name" for="fname">Order Number</label> -->
                                        <button type="submit" value="Submit" class="track_btn" >Submit </button>
                                    </div>

                                </div>
                            
                                <div id="track-msg">
                                    <div class="track_part">
                                        <div id="myDIV">
                                            <ul class="progressbar">
                                                <li id="order-placed-bar" class="" <?php if(($result['status_id'] === '11') OR ($result['status_id'] === '12')) { ?>  class="active"  <?php } ?>> <span class="list-group-item-heading"><i class="fa fa-forward"></i></span> Order Placed</li>
                                                <li id="preperation-bar" class="" <?php if($result['status_id'] === '13') { ?>  class="active"  <?php } ?>> <span class="list-group-item-heading"><i class="fa fa-cutlery"></i></span> Preparation</li>
                                                <li id="delivery-bar" class=""<?php if($result['status_id'] === '14') { ?>  class="active"  <?php } ?>> <span class="list-group-item-heading"><i class="fa fa-motorcycle"></i></span> Delivery</li>
                                                <li id="completed-bar"<?php if($result['status_id'] === '15') { ?>  class="active"  <?php } ?>> <span class="list-group-item-heading"><i class="fa fa-check"></i></span> Completed</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <h4 id="notification_track" style="text-align: center;"></h1>
                            </form>
                           
                        </div>
                 
                    <div class="modal-footer">
                    <!-- <p class="tq">We hope to see you again soon</p> -->
                    </div>
                    </div>
                </div>
                </div>

            <div id="page-wrapper" class="content-area">
                <?php if (get_theme_options('display_crumbs') === '1' AND ($breadcrumbs = get_breadcrumbs()) !== '') { ?>
                    <div id="breadcrumb">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <?php echo $breadcrumbs; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                        <?php if ($page_heading = get_heading()) { ?>
                            <div id="heading">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="heading-content">
                                                <h2><?php echo $page_heading; ?></h2>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="pattern">
                                    <img alt="" src="assets/images/white-pattern.png">
                                </div>
                            </div>
                            <?php } ?>
            </div>

            <script>
                $(document).ready(function() {
                    $("header_li").click(function(){
      //  $(".slicknav_nav").collapse('hide');
      alert();
    });
                $("#track-msg").hide();
                    $(document).on('click', function(e) {
                        /* bootstrap collapse js adds "in" class to your collapsible element*/
                        var menu_opened = $('#main-header-menu-collapse').hasClass('in');
                        if (!$(e.target).closest('main-header-menu-collapse').length &&
                            !$(e.target).is('#main-header-menu-collapse') &&
                            menu_opened === true) {
                            $('#main-header-menu-collapse').collapse('toggle');
                        }
                    });
                });
                $(function() {
                    $('#main-header-menu-collapse a').filter(function() {
                        return this.href == location.href
                    }).parent().addClass('active').siblings().removeClass('active');
                    $('#main-header-menu-collapse a').click(function() {
                        $(this).parent().addClass('active').siblings().removeClass('active')
                    });
                });

                $(function() {
                    $('.navbar-nav li a').click(function() {
                        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                            var target = $(this.hash);
                            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                            if (target.length) {
                                $('html,body').animate({
                                    scrollTop: target.offset().top - 80
                                }, 1500);
                                return false;
                            }
                        }
                    });

                });

                //Login Ajax call
                function login() {
                    var password = $("#login-password").val();
                    var email = $("#login-email").val();
                    if (loginValidate(email, password) === false) {
                        return false;
                    }
                    $.ajax({
                        url: js_site_url('login'),
                        type: 'POST',
                        data: 'email=' + email + '&password=' + password,
                        dataType: 'json',
                        success: function(json) {
                            if (json['success'] == true) {
                                $(location).attr('href', js_site_url('account/account'));
                            }
                            if (json['success'] == false) {
                                $('#login-error').text("Invalid user name or password");
                            }
                        }
                    });
                }

                //Reset Password Ajax call
                function rest_password() {
                    $("#reset-email").removeAttr('style');
                    var email = $("#reset-email").val();

                    if (validateEmail(email) === false) {
                        $("#reset-email").css("border", "1px solid #f47d59");
                        return false;
                    }

                    $.ajax({
                        url: js_site_url('forgot-password'),
                        type: 'POST',
                        data: 'email=' + email,
                        dataType: 'json',
                        success: function(json) {
                            if (json['success'] == true) {
                                $("#rest-msg").html("<span class='text-success ajax-success'>Password reset successfully, please check your email for your new password.!</span>");
                            }
                            if (json['success'] == false) {
                                $("#rest-msg").html("<span class='text-danger ajax-error'>No matching email address</span>");

                            }
                        }
                    });
                }

               

                function loginValidate(email, password) {
                    var isValid = true;
                    $("#login-email").removeAttr('style');
                    $("#login-password").removeAttr('style');
                    if (validateEmail(email) === false) {
                        $("#login-email").css("border", "1px solid #f47d59");
                        isValid = false;
                    }
                    if (password == '') {
                        $("#login-password").css("border", "1px solid #f47d59");
                        isValid = false;
                    }
                    return isValid;
                }

                function validateEmail(email) {
                    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    return re.test(String(email).toLowerCase());
                }

    //User Registration
  $(function() {
 

    $("form#register_form").submit(function(event) {
    event.preventDefault();
    var datastring = $("form#register_form").serialize();
    var fullname=$("#fullname").val();
    var telephone=$("#telephone").val();
    var email = $("#email").val();
    var password  = $("#password").val();
    var confirmpassword = $("#password-confirm").val();
    var terms = $("input[name='terms_condition']").prop("checked");
    if(registerFormValidate(fullname,telephone,email,password,confirmpassword,terms) === false){
        return false;
    }
    $.ajax({
   	    url: js_site_url('register'),
   		type: 'POST',
   		data: 'first_name=' + fullname + '&telephone=' + telephone + '&email=' + email + '&password=' + password + '&password_confirm=' + confirmpassword +'&terms_condition=1' ,
   		dataType: 'json',
        success: function(json) {
            alert(JSON.stringify(json));
            if(json['success'] == true){
                $('#registration-notification').html("<div style='border: 1px solid #712133;border-radius: 3px;padding: 5px;margin-bottom: 15px;text-align: center;background:#ffebeb;color: #712133;font-weight: 900;'>Registered Succesfully</div>");
            }
            if(json['success'] == false){
                $('#registration-notification').html("<div style='border: 1px solid #712133;border-radius: 3px;padding: 5px;margin-bottom: 15px;text-align: center;background:#ffebeb;color: #712133;font-weight: 900;'> Email Already Exist!</div>");
            }
        }
       });
    });
});
  function registerFormValidate(fullname,telephone,email,password,confirmpassword,terms){
    var isValid = true;
    $("#fullname").removeAttr( 'style' );
    $("#telephone").removeAttr( 'style' );
    $("#email").removeAttr( 'style' );
    $("#password").removeAttr( 'style' );
    $("#password-confirm").removeAttr( 'style' );
    $("#button-checkbox").removeAttr( 'style' );

    if(registerValidate(email) == false) {
        $("#email").css("border", "1px solid #f47d59");
        isValid = false;
    }
    if(telephone == '') {
        $("#telephone").css("border", "1px solid #f47d59");
        isValid = false;
    }
    if(fullname == '') {
        $("#fullname").css("border", "1px solid #f47d59");
        isValid = false;
    }
  
    if(password == '') {
        $("#password").css("border", "1px solid #f47d59");
        isValid = false;
    }
    if(confirmpassword == '') {
        $("#password-confirm").css("border", "1px solid #f47d59");
        isValid = false;
    }
    if(confirmpassword != password) {
        $("#password").css("border", "1px solid #f47d59");
        $("#password-confirm").css("border", "1px solid #f47d59");
        isValid = false;
    }
    if(terms != true) {
        $("#button-checkbox").css("border", "1px solid #f47d59");
        isValid = false;
    }
    return isValid;
  }

function registerValidate(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

// Track Order
$(function() {
    $("form#tract_sec").submit(function(event) {
        event.preventDefault();
        $("#track-msg").hide("slow");
        $("#notification_track").hide("slow");
        var order_number = $("#ordernum").val();
        $.ajax({
            url: js_site_url('track-order'),
            type: 'POST',
            data: 'ordernumber=' + order_number,
            dataType: 'json',
            success: function(json) {
                console.log(json);
                if (json['status'] == true) {
                    $("#track-msg").show("slow");
                    $( ".progressbar li" ).removeClass( "active" );
                    
                        

                    switch (json['result']['status_id']) {
                        case '11':
                            $("#order-placed-bar").addClass("active");
                            break;
                        case '13':
                            $("#preperation-bar").addClass("active");
                            break;
                        case '14':
                            $("#completed-bar").addClass("active");
                            break;
                        case '15':
                            $("#completed-bar").addClass("active");
                            break;
                        case '19':
                            $("#completed-bar").addClass("active");
                            break;
                        case '12':
                            //$("#completed-bar").addClass("active");
                            break;
                        default:
                            //$("#completed-bar").addClass("active");
                        }
                }
                if (json['status'] == false) {
                    $("#track-msg").hide("slow");
                    $("#notification_track").show("slow");
                    $("#notification_track").html("<span class='text-danger ajax-error'>No details found!</span>");
                }
            }
        });
    });
});
</script>
<script>
    
</script>