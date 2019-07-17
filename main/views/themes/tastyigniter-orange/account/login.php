<?php echo get_header(); ?>
<div id="page-content" class="bg_clr">
	<div class="container">
		<div class="margin_st">
		<div class="row">
			<div class="col-md-12">
			<div class="section-title text-center">
      <div class="title-separator">
    
      </div>
        <h2> <span class="text-orange">	<?php echo lang('text_login'); ?></h2>
		<span class="under-heading"></span>
      </div>
				
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div id="login-form" class="content-wrap col-sm-4 center-block">
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
                                    <div class="col-md-4">
                                        <a class="btn  " href="<?php echo $reset_url; ?>"><span class="small"><small><?php echo lang('text_forgot'); ?></small></span></a>
                                    </div>
                                    <div class="col-md-8">
                                        <a class="btn  text-right"  style="text-align:right;width:100%;color:red" href="<?php echo $register_url; ?>"><?php echo lang('button_register'); ?></a>
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
<?php echo get_footer(); ?>