<?php
/**
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */

?>
<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>  	
	<?php die('Voc&ecirc; n&atilde;o pode acessar essa p&aacute;gina diretamente!'); ?>  
<?php endif; ?>

<?php if(!empty($post->post_password)) : ?>
  	<?php if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
			<div class="box-yellow"><h6>Este post &eacute; protegido por senha. Fa&ccedil;a o login para visualizar os coment&aacute;rios.</h6></div>
  	<?php endif; ?>
<?php endif; ?>

<?php if($comments) : ?>
	<h1>Coment&aacute;rios</h1>
  	<ol class="box">
    	<?php foreach($comments as $comment) : ?>
  		<li id="comment-<?php comment_ID(); ?>">
  			<?php if ($comment->comment_approved == '0') : ?>
  				<h6>Seu coment&aacute;rio est&aacute; aguardando aprova&ccedil;&atilde;o</h6>
  			<?php endif; ?>
  			<cite><?php comment_author_link(); ?></cite>
  			<time datetime="<?php comment_time('Y-m-d g:i A') ?>"><?php comment_time('d/m/Y - g:i A'); ?></time>
  			<?php comment_text(); ?>
  		</li>
		<?php endforeach; ?>
	</ol>
<?php else : ?>
	<div class="box"><h6>Sem coment&aacute;rios</h6></div>
<?php endif; ?>

<?php if(comments_open()) : ?>
	<?php if(get_option('comment_registration') && !$user_ID) : ?>
		<p>Voc&ecirc; deve estar <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logado</a> para postar um coment&aacute;rio.</p><?php else : ?>

	<div class="newcomment">
		<h1>Deixar um coment&aacute;rio</h1>
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" class="commentform" id="commentform">
			<?php if($user_ID) : ?>
				<div class="user">Logado como <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Fazer logout desta conta">Log out &raquo;</a></div>
			<?php else : ?>
				<div>
					<label for="author" class="grid_2 alpha">Nome <?php if($req) echo "*"; ?></label>
					<input type="text" value="<?php echo $comment_author; ?>" id="author" name="author" tabindex="1" />
				</div>

				<div>
					<label for="email" class="grid_2 alpha">E-mail <?php if($req) echo "*"; ?></label>
					<input type="email" value="<?php echo $comment_author_email; ?>" id="email" name="email" tabindex="2" />
				</div>

			<?php endif; ?>
			<div>
				<label for="comment" class="grid_2 alpha">Comentário</label>
				<textarea name="comment" id="comment" tabindex="3"></textarea>
			</div>

			<button type="submit" name="submit" class="grid_6 omega alpha push_2" tabindex="4">Publicar</button>
			<input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID(); ?>" />
			<?php do_action('comment_form', get_the_ID()); ?>
		</form>
	</div>
	<?php endif; ?>
<?php else : ?>
	<div class="box-yellow"><h6>Os coment&aacute;rios est&atilde;o fechados.</h6></div>
<?php endif; ?>
