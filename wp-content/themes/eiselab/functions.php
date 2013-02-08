<?php

	register_sidebar(array(
	  'name'=>'tweets',
	  'before_title'=>'<h3>',
	  'after_title'=>'</h3>',
	));

	register_sidebar(array(
	  'name'=>'institucionais',
	  'before_title'=>'<h2>',
	  'after_title'=>'</h2>',
	));

	register_sidebar(array(
	  'name'=>'blog',
	  'before_title'=>'<h2>',
	  'after_title'=>'</h2>',
	));

	add_theme_support( 'post-thumbnails' );

	set_post_thumbnail_size( 186, 293 );
	add_image_size( 'square', 134, 134, true );
	add_image_size( 'rect_big', 178, 122, true );
	add_image_size( 'rect_litle', 150, 100, true );
	add_image_size( 'courses', 576, 268, true );
	add_image_size( 'campfire', 239, 354, true );
	add_image_size( 'top', 694, 200, true );
	add_image_size( 'home', 694, 390,true );
	register_nav_menu( 'primary', __( 'Primary Menu', 'twentyeleven' ) );

	// Imprime texto pré-formatado com insformações de data de postagem do post atual. Inclui data, hora e autor.
	function eise_posted_on() {
		printf( __( '<span class="sep">Postado em </span><time class="entry-date" datetime="%3$s" pubdate>%4$s</time><span class="by-author"> <span class="sep"> por: </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'twentyeleven' ),
			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( __( 'View all posts by %s', 'twentyeleven' ), get_the_author() ) ),
			get_the_author()
		);
	}

	/* Imprime imagem do header para este post, vindo de:
	 ** thumbanil correspondente do post atual, se existir.
	 ** imagem definida pelo tipo de post atual, caso o post não tenha um thumbnail ou a página seja uma lista de posts.
	 */
	function the_header_image(){
		global $header_image ;
		if(isset($header_image)){
			echo "<img src='$header_image' alt='' >" ;
		} 		
	}

	// Retorna citação do post atual, ou de seu post type. Comportamento análogo ao the_header_image. 
	function get_the_quote(){
		global $post, $header_quote ;
		if(isset($header_quote)) return $header_quote ; 
		return get_post_meta($post->ID, 'quote', true) ;
	}

	// Imprime o resultado de get_the_quote.
	function the_quote(){
		echo get_the_quote() ;
	}

	// Imprime classe de cor para header-banner, se houver.
	function the_header_color(){
		global $header_color ;
		echo $header_color ;
	}	


	// Retorna um atributo customizado do post atual.
	function get_the($field){
		global $post, $post_object ;
		if($post->post_type == 'page') 
			return get_post_meta($post->ID, $field, true); 
		if (empty($post_object) || $post_object->ID != $post->ID){
			$post_type = $post->post_type ; 
			$class = 'Eise\\' . ucfirst($post_type) ;
			$post_object = new $class($post) ;
		}
		return $post_object->$field ;

	}
	function the_($field){
		echo get_the($field) ;
	}

	function the_page_description(){
		global $post_type ;
		$page = get_posts(array('post_type' => 'page', 'pagename' => get_post_type_object($post_type)->rewrite['slug'])) ; 
		if(! empty($page)) echo $page[0]->post_content ;
	}

	function get_the_video($post=nil){
		global $blog_id ; 
		if($post->post_name == 'manifesto' and $blog_id == 1)
			return '<iframe src="http://player.vimeo.com/video/36918744?title=0&amp;byline=0&amp;portrait=0" width="694" height="390" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe><p><a href="http://vimeo.com/36918744">Revolução EISE</a> from <a href="http://vimeo.com/user10464666">EISE</a> on <a href="http://vimeo.com">Vimeo</a>.</p>' ;
		if($post->post_name == 'drive' and $blog_id == 1)
			return '<iframe src="http://player.vimeo.com/video/38567154?title=0&amp;byline=0&amp;portrait=0 <http://player.vimeo.com/video/38567154?title=0&amp;byline=0&amp;portrait=0>" width="694" height="390" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe><p><a href="http://vimeo.com/38567154">Drive</a> from <a href="http://vimeo.com/user10464666">EISE</a> on <a href="http://vimeo.com">Vimeo</a>.</p>' ;
		if(! $post) global $post ; 
		$matches = array();
		preg_match('|http://vimeo.com/([a-zA-Z0-9]+)|', $post->post_content, $matches);
		if(empty($matches)) preg_match('|http://www.youtube.com/watch\?v=([a-zA-Z0-9]+)|', $post->post_content, $matches);
		if(! empty($matches)){
			return wp_oembed_get($matches[0], array('width' => 694, 'height' => 390));
		} else { return false ; }
	}

	function the_video_or_the_thumbnail($post){
		if($video = get_the_video($post)){
			echo $video ; 
		} else {
			echo get_the_post_thumbnail($post->ID, 'home')	;
		}
	}

	function languages_list(){
    $languages = icl_get_languages('skip_missing=0&orderby=code');
    if(!empty($languages)){
        echo '<div id="language_list"><ul>';
        foreach($languages as $l){
            echo '<li>';
            if($l['country_flag_url']){
                if(!$l['active']) 
                	echo '<a href="'.$l['url'].'">';
                	echo '<img src="'.$l['country_flag_url'].'" height="12" alt="'.$l['language_code'].'" width="18" />';
                	echo '</a>';
            }
            if(!$l['active']) 
            	echo '<a href="'.$l['url'].'">';
            	echo icl_disp_language($l['native_name'], $l['translated_name']);
            	echo '</a>';
            	echo '</li>';
        	}
        	
        echo '</ul></div>';
    }
	}
	add_action('wp_enqueue_scripts', function(){
		global $post_type, $plugin_url ;

		if($post_type == 'location'){
			wp_deregister_script('jquery');
			wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js');
			wp_enqueue_script('jmaps', 'http://maps.google.com/maps/api/js?v=3.5&sensor=false');
			wp_enqueue_script('marker-manager', get_bloginfo('template_url') . '/js/jquery-jmapping/vendor/markermanager.js');
			wp_enqueue_script('styled-marker', get_bloginfo('template_url') . '/js/jquery-jmapping/vendor/StyledMarker.js');
			wp_enqueue_script('jquery-metadata', get_bloginfo('template_url') . '/js/jquery-jmapping/vendor/jquery.metadata.js');
			wp_enqueue_script('jquery-jmapping', get_bloginfo('template_url') . '/js/jquery-jmapping/jquery.jmapping.js', 
				array('jquery', 'jmaps', 'marker-manager', 'styled-marker', 'jquery-metadata'), '2', true);
			wp_enqueue_script('location', get_bloginfo('template_url') . '/js/location.js', array('jquery', 'jquery-jmapping') ) ;

		} elseif ($post_type == 'campfire') {
			wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js');
			wp_enqueue_script('campfire', get_bloginfo('template_url') . '/js/campfire.js', array('jquery') ) ;
			wp_enqueue_script('jquery-maskedinput', site_url('wp-content/mu-plugins/eise/js/jquery-maskedinput/jquery.maskedinput.js'), array('jquery') );
			wp_enqueue_script('jquery-validate', site_url('wp-content/mu-plugins/eise/js/jquery-validate/jquery.validate.js'), array('jquery') );
		}

	});

?>