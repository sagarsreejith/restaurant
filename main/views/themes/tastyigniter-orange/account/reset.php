<?php echo get_header(); ?>

<div id="page-content " class="parallax pb-30 bg-overlay-black-70 forgot_background">
	<div class="container">
	<div class="margin_st">
		

		<div class="row">
			<div class="content-wrap col-md-6 center-block  forgot_bg">
				
			<div class="col-md-12">
				



				<div class="section-title text-center">
					<div class="title-separator">
					
					</div>
						<h2 class="reg_st"> <span class="text-orange forgot"><?php echo lang('text_heading'); ?></span></h2>
						<span class="under-heading"></span>
      			</div>

			</div>
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
					<!-- <div class="form-group">
						<select name="security_question" id="security-question" class="form-control input-lg">
                            <?php //foreach ($questions as $question) { ?>
                                <option value="<?php //echo $question['id']; ?>"><?php //echo $question['text']; ?></option>
                            <?php //} ?>
						</select>
						<?php //echo form_error('security_question', '<span class="text-danger">', '</span>'); ?>
					</div>
					<div class="form-group">
						<label for="security-answer"></label>
						<input type="text" name="security_answer" id="security-answer" class="form-control input-lg" placeholder="<?php echo lang('label_s_answer'); ?>" />
						<?php //echo form_error('security_answer', '<span class="text-danger">', '</span>'); ?>
					</div>
					<br /> -->

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
							</div>
<?php echo get_footer(); ?>