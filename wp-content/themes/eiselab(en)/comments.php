<?php // Do not delete these lines
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Please do not load this page directly. Thanks!');
if (!empty($post->post_password)) { // if there's a password
	if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
?>
<h2><?php _e('Password Protected'); ?></h2>
<p><?php _e('Enter the password to view comments.'); ?></p>
<?php return;
	}
}

$oddcomment = 'alt';

?>

<!-- EDITAR A PARTIR DAQUI -->
<?php if ($comments) : ?>
<h3 id="comments"><?php comments_number('Nenhum comentário', '1 comentário', '% comentários' );?></h3>
<ol class="commentlist">
<?php foreach ($comments as $comment) : ?>
	<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
		<div class="commentmetadata">
			<strong><?php comment_author_link() ?></strong>, em <a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?> às <?php comment_time() ?></a> disse: <?php edit_comment_link('Edit Comment','',''); ?>
 		<?php if ($comment->comment_approved == '0') : ?>
			<em><?php _e('Your comment is awaiting moderation.'); ?></em>
 		<?php endif; ?>
</div>
<?php comment_text() ?>
	</li>

<?php /* Changes every other comment to a different class */
	$oddcomment = ($oddcomment == 'alt') ? '' : 'alt';
?>

<?php endforeach; /* end for each comment */ ?>
</ol>
<?php else : // this is displayed if there are no comments so far ?>
<?php if ('open' == $post->comment_status) : ?>
	<!-- If comments are open, but there are no comments. -->
	<?php else : // comments are closed ?>
	<!-- If comments are closed. -->
<p class="nocomments">Comments are closed.</p>
	<?php endif; ?>
<?php endif; ?>

<div class="formularioPost"><?php comment_form(); ?></div>
