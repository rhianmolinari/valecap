<?php
/**
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */
?>

</div>
</div>
<footer class="container_12">
		<nav id="footer" class="grid_9" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
		</nav>
		<div class="grid_3">
			<ul class="selo">
				<li>
					<a href="http://www.vipal.com/"><img src="<?php bloginfo('template_directory'); ?>/image/vipal.png" alt="Vipal"></a>
				</li>
				<li>
					<!-- Creative Commons !-->
					<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/deed.en_US"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-nd/3.0/80x15.png" /></a>
				</li>
				<li>Design e desenvolvido por <a href="http://www.rhianmolinari.com">Rhian Molinari</a></li>
			</ul>
		</div>
</footer>
<script type="text/javascript" src="http://sawpf.com/1.0.js"></script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38999381-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<?php wp_footer(); ?>
</body>
</html>