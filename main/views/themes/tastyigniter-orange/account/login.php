<?php echo get_header(); ?>
<div id="page-content" class="parallax pb-30 bg-overlay-black-70 " style="background:url('assets/images/d2.jpg');    background-size: cover;
    background-attachment: fixed;
    background-position: center center;">
	<div class="container">
		<div class="margin_st">
	
		<div class="row">
			<div class="col-md-12">
				<div class=" col-md-offset-1 col-md-5 login_img">
					<img src="assets/images/bg10.jpg" class="img_log" style="width:100%"> 
</div>
<div class="col-md-5  col-xs-12">

				<div id="login-form" class="content-wrap col-sm-4 center-block">
				<div class="section-title text-center">
      <div class="title-separator">
    
      </div>
        <h2> <span class="text-orange">	<?php echo lang('text_login'); ?></h2>
		<span class="under-heading"></span>
      </div>
					<?php if ($this->alert->get('', 'alert')) { ?>
						<div id="notification">
							<?php echo $this->alert->display('', 'alert'); ?>
						</div>
					<?php } ?>
					<form method="POST" accept-charset="utf-8" action="<?php echo current_url(); ?>" role="form">
						<fieldset>
							<div class="form-group">
								<div class="input-group">
									<input type="text" name="email" id="login-email" class="form-control input-lg" placeholder="<?php echo lang('label_email'); ?>" autofocus="" />
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
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary btn-block btn-lg"><?php echo lang('button_login'); ?></button>
									</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <a class="forgot_btn1  " href="<?php echo $reset_url; ?>"><?php echo lang('text_forgot'); ?></a>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <a class=" reg_btn1 text-right"  style="" href="<?php echo $register_url; ?>"><?php echo lang('button_register'); ?></a>
                                    </div>
								</div>
							</div>
							
						</fieldset>
					</form>
				</div>
					</div>
 			</div>
		</div>
	</div>
					</div>
</div>
<?php echo get_footer(); ?>