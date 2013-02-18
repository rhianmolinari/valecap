<?php

/**
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */

//Adicionando suporte ao menu
register_nav_menu('primary', __('Menu Principal'));

//Adicionando o post-thumbnail
add_theme_support('post-thumbnails');

//Mostrar current url
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

//Breadcrumb
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

//Widget
//Contato Ajax
function contato_ajax() {
    include_once 'includes/send-email.php';
}

add_action('wp_ajax_nopriv_contato_form', 'contato_ajax');

//Tipo produtos, Meta boxes e Campos
include_once('fields.php');

//Registering new image sizes for thumbnails
//Slides home page
add_image_size('homepage-slide-thumb', 640, 260);
//Product details page
add_image_size('product-thumb', 190, 190);
//Featured image on blog home page
add_image_size('featured-blog-thumb', 620, 280);
//Another post thumbnails of the blog
add_image_size('blog-posts-thumb', 300, 150);

//Escondendo versão do Wordpress
remove_action('wp_head', 'wp_generator');

//Removendo versão do Wordpress no RSS
function wpt_remove_version() {
    return '';
}
add_filter('the_generator', 'wpt_remove_version');

?>
