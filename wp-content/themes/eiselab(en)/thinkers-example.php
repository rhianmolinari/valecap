<?php the_('likes-text'); //texto do que o camarada gosta ?>
<img src="<?php the_('likes-image') ?>" alt=""> <?php //imagem do que o camarada gosta ?>

<?php //lista dos pontos altos. ?>
<ul>
	<?php foreach (get_the('highlights') as $highlight): ?>
		<li>
			<?php echo $highlight ?>
		</li>	
	<?php endforeach ?>
</ul>