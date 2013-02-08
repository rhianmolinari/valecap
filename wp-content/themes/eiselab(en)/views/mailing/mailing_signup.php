<div class="boxNewsletter">

	<?php if($success) : ?>
		<?php echo Presenter::render_partial('mailing/mailing_signup_success'); ?>
	<?php endif ?>
		
	<?php if(isset($success) && ! $success) : ?>
		<?php echo Presenter::render_partial('mailing/mailing_signup_failure') ; ?>
	<?php endif ?>

	<h3>Apply now and receive our newsletter</h3>
	<form action="<?php site_url() ?>" name='signup' id='signup' method="post">
		<label for="nome">name</label>
		<input name="registree[name]" id="nome" type="text" value="" >
		<label for="email">email</label>
		<input name="registree[email]" id="email" type="text" value="" >
		<input type="submit" value="Click here" title="Click here" class="submit" />
		<input type="hidden" name="action" value="mailing_signup">
	</form>
</div>