<form id="contact" action='' method='post' name='contact'>

	<fieldset>
		<legend>Contact</legend>
			<p>You can get hold of us by phone on work days between 10am and 6pm, at +55(11)3818-0981, or drop us line at falecom@eiselab.com.br or even fill in the form below at any time or day. Yes, we receive and respond to the sent forms. =) </p>

	<?php if($success) : ?>
		<?php echo $presenter::render_partial('contact/contact_success'); ?>
	<?php endif ?>
		
	<?php if(isset($success) && ! $success) : ?>
		<?php echo $presenter::render_partial('contact/contact_failure') ; ?>
	<?php endif ?>
	
		<label for="nome">Name</label>
		<input type="text" name="contactee[name]" id="nome" />
		<label for="email">Email</label>
		<input type="text" name="contactee[email]" id="email" />
		<label for="assunto">Subject</label>
		<input type="text" name="contactee[subject]" id="assunto" />
		<label for="mensagem">Message</label>
		<textarea name="contactee[message]" id="mensagem"></textarea>
		<input type="hidden" name="action" value="contact" >
	</fieldset>
	<input type="submit" title="Send" value="Send" class="send">
</form>