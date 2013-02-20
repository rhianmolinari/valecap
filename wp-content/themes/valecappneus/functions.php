<?php

/**
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */
//add suporte ao menu
register_nav_menu('primary', __('Menu Principal'));

//post-thumbnail
add_theme_support('post-thumbnails');

//current url
function current_url() {
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {
        $pageURL .= "s";
    }
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}

//breadcrumb
function the_breadcrumb() {
    if (!is_home()) {
        echo '<a href="';
        echo get_option('home');
        echo '">';
        bloginfo('name');
        echo "</a> &raquo; ";
        if (is_category() || is_single()) {
            the_category(' &raquo; ');
            if (is_single()) {
                echo " &raquo; ";
                the_title();
            }
        } elseif (is_page()) {
            echo the_title();
        }
    }
}

//widget
//contato ajax
function contato_ajax() {
    include_once 'includes/send-email.php';
}

add_action('wp_ajax_contato_form', 'contato_ajax');
add_action('wp_ajax_nopriv_contato_form', 'contato_ajax');

function tipo_produto() {
    $consulta = new WP_Query(array(
        'tipo_produto' => $_GET['slug'],
        'post_type' => 'produto',
        'orderby' => 'title',
        'order' => 'ASC'
        )
    );
    
    $produtos = array();
    $cont = 0;
    while ( $consulta->have_posts() ) :
        $consulta->the_post();
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'product-thumb' );
        $produtos['produtos'][] = array('title'=>get_the_title(), 'img'=>$thumb[0], 'link'=>get_permalink());
        array_push($produtos, $produto);
    endwhile;
    die((count($produtos)>0)?json_encode($produtos):"");
}

add_action('wp_ajax_tipo_produto', 'tipo_produto');
add_action('wp_ajax_nopriv_tipo_produto', 'tipo_produto');

//tipo produtos, meta boxes e campos
include_once('fields.php');

//registering new image sizes for thumbnails
if ( function_exists( 'add_image_size' ) ) { 
    //slides home page
    add_image_size('homepage-slide-thumb', 640, 260, true);
    //product details page
    add_image_size('product-thumb', 190, 190, true);
    //featured image on blog home page
    add_image_size('featured-blog-thumb', 620, 280, true);
    //another post thumbnails of the blog
    add_image_size('blog-posts-thumb', 300, 150, true);
}

?>
