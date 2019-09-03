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
            
                                
            <header class="header" >
			<!-- Header Inner -->
			<div class="main-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-12">						
                            <!-- Logo -->
                            <!-- <button type="button" class="btn-navbar navbar-toggle" data-toggle="collapse" data-target="#main-header-menu-collapse">
							<i class="fa fa-align-justify"></i>
						</button> -->
							<div class="logo">
                                    <a class="" href="<?php echo rtrim(site_url(), '/').'/'; ?>">
                                        <?php if (get_theme_options( 'logo_image')) { ?>
                                        <img alt="<?php echo $this->config->item('site_name'); ?>" src="<?php echo image_url(get_theme_options('logo_image')) ?>" >

                                        <?php } else if (get_theme_options( 'logo_text')) { ?>
                                        <?php echo get_theme_options( 'logo_text'); ?>
                                        <?php } else if ($this->config->item('site_logo') === 'data/no_photo.png') { ?>
                                        <?php echo $this->config->item('site_name'); ?>
                                        <?php } else { ?>
                                        <img alt="<?php echo $this->config->item('site_name'); ?>" src="<?php echo image_url($this->config->item('site_logo')) ?>" >
                                        <?php } ?>
                                    </a>
                                </div>
							<!--/ End Logo -->
							<div class="mobile-nav"></div>
						</div>
						<div class="col-md-9 col-sm-9" >
							<nav class="navbar menu navbar-default">
								<div class="collapse navbar-collapse" >
									
                                    <ul class="nav navbar-nav mobile-menu navbar-right">
                                        <li class=""><a role="presentation" href="<?php echo site_url(''); ?>" active>Home</a>
                                        </li>
                                        <li class=""><a href="<?php echo site_url('#about'); ?>">About</a>
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
                                            <a href="<?php echo site_url('local/all'); ?>">
                                                <?php echo lang( 'menu_locations'); ?>
                                            </a>
                                        </li>
                                       
                                        <li>
                                                <a class="log" data-toggle="modal" data-target="#login"> login</a>
                                              
                                        </li>
                                      
                                        <li class="">
                                            <a href="<?php echo site_url('track-order'); ?>">
                                                <?php echo lang( 'track_recent_order'); ?>
                                            </a>
                                        </li>
                                       

                                        <?php } ?>

                                    </ul>
								</div> 
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>

        <div class="modal fade popup" id="login" tabindex="-1" data-dismiss="modal"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg"  role="document">
                <div class="modal-content">
                
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                        </button>
                    <div class="modal-body">
                            
                        <div class="col-md-6">
                      
                            <?php if ($this->alert->get('', 'alert')) { ?>
                            <div id="notification">
                            <?php echo $this->alert->display('', 'alert'); ?>
                            </div>
                            <?php } ?>
                            <fieldset>
                            <h2> <span class="text-orange">Log In</span></h2>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" name="email" id="login-email" class="form-control input-lg" placeholder="<?php echo lang('emailid'); ?>" autofocus=""/>
                                        <span class="input-group-addon">@</span>
                                    </div>
                                    <?php echo form_error('email', '<span class="text-danger">', '</span>'); ?>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="password" name="password" id="login-password" class="form-control input-lg" placeholder="<?php echo lang('label_password'); ?>" />
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
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
                                            <a class="forgot_btn1  "data-dismiss="modal" data-toggle="modal" data-target="#reset">
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
                        <div class="col-md-6">
                        <div class="object-right object_right_img">
                                <img class="img-responsive img1" src="assets/images/icon/slider_image1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
        <div class="modal fade popup" id="register" tabindex="-1" data-dismiss="modal"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                
                            
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">×</span>
                            </button>
                    
                    <div class="modal-body">
                            <div class="col-md-6">
                                <?php if ($this->alert->get('', 'alert')) { ?>
                                    <div id="notification">
                                    <?php echo $this->alert->display('', 'alert'); ?>
                                    </div>
                                <?php } ?>
                                <div id="register-form" class="content-wrap col-sm-12 center-block">
                                <h2 class="reg_st"> <span class="text-orange forgot"><?php echo lang('text_register'); ?></span></h2>
                            <span class="under-heading"></span>
                                    <form method="POST" accept-charset="utf-8" action="<?php echo current_url(); ?>" role="form" class="">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <input type="text" id="fullname" class="form-control input-lg" value="<?php echo set_value('fullname'); ?>" name="first_name" placeholder="<?php echo lang('label_first_name'); ?>" autofocus="">
                                                    <?php echo form_error('fullname', '<span class="text-danger">', '</span>'); ?>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    
                                                    <input type="text" id="telephone" class="form-control input-lg" value="<?php echo set_value('telephone'); ?>" name="telephone" placeholder="<?php echo lang('label_telephone'); ?>">
                                                    <?php echo form_error('telephone', '<span class="text-danger">', '</span>'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="email" class="form-control input-lg" value="<?php echo set_value('email'); ?>" name="email" placeholder="<?php echo lang('label_email'); ?>">
                                            <?php echo form_error('email', '<span class="text-danger">', '</span>'); ?>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <input type="password" id="password" class="form-control input-lg" value="" name="password" placeholder="<?php echo lang('label_password'); ?>">
                                                    <?php echo form_error('password', '<span class="text-danger">', '</span>'); ?>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <input type="password" id="confirmpassword" class="form-control input-lg" name="password_confirm" value="" placeholder="<?php echo lang('label_password_confirm'); ?>">
                                                    <?php echo form_error('confirmpassword', '<span class="text-danger">', '</span>'); ?>
                                                </div>
                                            </div>
                                        </div>
                                
                                    

                                        <?php if ($registration_terms) {?>
                                            <div class="row">
                                                <div class="col-xs-8 col-sm-9 col-md-12 connt_clr">
                                                    <span class="button-checkbox">
                                                        <button id="terms-condition" type="button" class="btn" data-color="info" tabindex="7">&nbsp;&nbsp;<?php echo lang('button_terms_agree'); ?></button>
                                                        <input type="checkbox" name="terms_condition" class="hidden" value="1" <?php echo set_checkbox('terms_condition', '1'); ?>>
                                                    </span>
                                                    <?php echo sprintf(lang('label_terms'), $registration_terms); ?>
                                                </div>
                                                <?php echo form_error('terms_condition', '<span class="text-danger">', '</span>'); ?>
                                            </div>
                                            <div class="modal fade" id="terms-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            
                                                            
                                                        <h4>	Introduction</h4>
                                                                <p>These Website Standard Terms and Conditions written on this webpage shall manage your use of our website, Webiste Name accessible at Website.com.

                                                                These Terms will be applied fully and affect to your use of this Website. By using this Website, you agreed to accept all terms and conditions written in here. You must not use this Website if you disagree with any of these Website Standard Terms and Conditions.

                                                                Minors or people below 18 years old are not allowed to use this Website.</p>

                                                                <h4> Intellectual Property Rights</h4>
                                                                <p>Other than the content you own, under these Terms, Company Name and/or its licensors own all the intellectual property rights and materials contained in this Website.

                                                                You are granted limited license only for purposes of viewing the material contained on this Website.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        

                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                <button type="submit" class="btn btn-primary btn-block btn-lg" onclick="register()" ><?php echo lang('button_register'); ?></button>
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <a href="<?php echo $login_url; ?>" class="btn btn-default btn-block btn-lg"><?php echo lang('button_login'); ?></a>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-8 col-sm-12 col-md-12  col-md-12 connt_clr subscribe nopad">
                                                <span class="button-checkbox">
                                                    <button id="newsletter" type="button" class="btn" data-color="info" tabindex="7">&nbsp;&nbsp<?php echo lang('button_subscribe'); ?></button>
                                                    <input type="checkbox" name="newsletter" class="hidden" value="1" <?php echo set_checkbox('newsletter', '1'); ?>>
                                                </span>
                                                <?php echo lang('label_newsletter'); ?>
                                            </div>
                                            <?php echo form_error('newsletter', '<span class="text-danger">', '</span>'); ?>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="object-right object_right_img">
                                <img class="img-responsive img1" src="assets/images/icon/Banner-new-3.jpg" alt="">
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
        
        <div class="modal fade" id="reset" tabindex="-1" data-dismiss="modal"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                            <h2 class="reg_st"> <span class="text-orange forgot"><?php echo lang('text_heading'); ?></span></h2>
                            <span class="under-heading"></span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                     
    
                        <?php if ($this->alert->get('', 'alert')) { ?>
                            <div id="notification">
                                <?php echo $this->alert->display('', 'alert'); ?>
                            </div>
                        <?php } ?>
                         <p class="text-center"><?php echo lang('text_summary'); ?></p>
                        <form method="POST" id="password_form"  accept-charset="utf-8" action="<?php echo current_url(); ?>" role="form">
                            <div class="form-group">
                                <input name="email" type="text" id="email" class="form-control input-lg" value="<?php echo set_value('email'); ?>" placeholder="<?php echo lang('label_email'); ?>" />
                                <?php echo form_error('email', '<span class="text-danger">', '</span>'); ?></td>
                            </div>
                        
                            <div class="row text-center">
                                <div class="col-xs-12 col-md-6">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block"><?php echo lang('button_reset'); ?></button>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-default btn-lg btn-block" href="<?php echo $login_url; ?>"><?php echo lang('button_login'); ?></a>
                                </div>
                            </div>
                        </form>
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
$(document).ready(function(){
    $(document).on('click', function (e){
            /* bootstrap collapse js adds "in" class to your collapsible element*/
        var menu_opened = $('#main-header-menu-collapse').hasClass('in');
            if(!$(e.target).closest('main-header-menu-collapse').length &&
                !$(e.target).is('#main-header-menu-collapse') &&
                    menu_opened === true){
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
  function login(){
    var password  = $("#login-password").val();
    var email = $("#login-email").val();
    if(loginValidate(email, password) === false){
        return false;
    }
    $.ajax({
   	    url: js_site_url('login'),
   		type: 'POST',
   		data: 'email=' + email + '&password='+ password,
   		dataType: 'json',
        success: function(json) {
            if(json['success'] == true){
                $(location).attr('href', js_site_url('account/account'));
            }
            if(json['success'] == false){
                $('#login-error').text("Invalid user name or password");
            }
        }
   	});
  }
  function loginValidate(email, password){
    var isValid = true;
    $("#login-email").removeAttr( 'style' );
    $("#login-password").removeAttr( 'style' );
    if(validateEmail(email) === false) {
        $("#login-email").css("border", "1px solid #f47d59");
        isValid = false;
    }
    if(password == '') {
        $("#login-password").css("border", "1px solid #f47d59");
        isValid = false;
    }
    return isValid;
  }

  function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}   






  //Login Ajax call
  function register(){
    var fullname=$("#fullname").val();
    var telephone=$("#telephone").val();
    var email = $("#email").val();
    var password  = $("#password").val();
    var confirmpassword = $("#confirmpassword").val();
    
    if(registerValidate(fullname,telephone,email,password,confirmpassword) === false){
        return false;
    }
    $.ajax({
   	    url: js_site_url('register'),
   		type: 'POST',
   		data: 'fullname=' + fulname + 'telephone' + telephone + 'email=' + email + '&password=' + password + '&confirmpassword' + confirmpassword ,
   		dataType: 'json',
        success: function(json) {
            if(json['success'] == true){
                $(location).attr('href', js_site_url('account/account'));
            }
            if(json['success'] == false){
                $('#reg-error').text("Invalid user name or password");
            }
        }
   	});
  }
  function registerValidate(fullname,telephone,email,password,confirmpassword){
    var isValid = true;
    $("#fullname").removeAttr( 'style' );
    $("#telephone").removeAttr( 'style' );
    $("#email").removeAttr( 'style' );
    $("#password").removeAttr( 'style' );
    $("#confirmpassword").removeAttr( 'style' );

    if(validateEmail(fullname) === false) {
        $("#login-email").css("border", "1px solid #f47d59");
        isValid = false;
    }
    if(validateEmail(telephone) === false) {
        $("#login-email").css("border", "1px solid #f47d59");
        isValid = false;
    }
    if(validateEmail(email) === false) {
        $("#login-email").css("border", "1px solid #f47d59");
        isValid = false;
    }
  
    if(password == '') {
        $("#password").css("border", "1px solid #f47d59");
        isValid = false;
    }
    if(password == '') {
        $("#confirmpassword").css("border", "1px solid #f47d59");
        isValid = false;
    }
    return isValid;
  }

  function registerValidate(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
} 





</script>
