<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>

<aside class="grid_4">
<?php if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
	<div>
		<h1><?php _e( 'Archives', 'boilerplate' ); ?></h1>
		<ul>
		<?php wp_list_categories('exclude=1,4,3'); ?> 
		</ul>
	</div>
	<div>
		<h1><?php _e( 'Meta', 'boilerplate' ); ?></h1>
		<ul>
		<?php wp_register(); ?>
		<li><?php wp_loginout(); ?></li>
		<?php wp_meta(); ?>
		</ul>
	</div>
<?php endif; ?>
</aside>

<?php if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>
	<aside class="grid_4">
	<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
	</aside>
<?php endif; ?>