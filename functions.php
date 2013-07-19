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

//remove generator on the meta tag
remove_action('wp_head', 'wp_generator');

function wpt_remove_version() {
    return '';
}  
add_filter('the_generator', 'wpt_remove_version');

//custom login
function custom_login_logo() {
    echo '<style type="text/css">div#login h1 a { background-image: url('.get_bloginfo('template_directory').'/image/logo.png) !important; background-size: auto !important; }</style>';
}
add_action('login_head', 'custom_login_logo');

function custom_login_url() {
    return get_bloginfo('url');
}
add_filter( 'login_headerurl', 'custom_login_url' );

function custom_login_title() {
    return get_option('blogname');
}
add_filter( 'login_headertitle', 'custom_login_title' );

// Limit word
function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);

    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
    } else {
        $excerpt = implode(" ",$excerpt);
    }
    
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
}
function content($limit) {
    $content = explode(' ', get_the_content(), $limit);
    if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'...';
    } else {
        $content = implode(" ",$content);
    }
    $content = preg_replace('/\[.+\]/','', $content);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
}

//display the content page
function content_page_id($id) {
    $post = get_page($id);
    $content = apply_filters( 'get_the_content', $post->post_content );
    echo strip_tags($content);
}
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

//funcao para retorno da aplicacao do produto
function showUse($tipo) {
    $tipos = array('aceitavel'=>'Aceit&aacute;vel', 'indicado'=>'Indicado', 'recomendado'=>'Recomendado');
    echo $tipos[substr($tipo, 0, strlen($tipo)-(strlen($tipo)-strrpos($tipo, '_')))];
}

//exibir select das categorias no tipo produto
add_action( 'restrict_manage_posts', 'my_restrict_manage_posts' );
function my_restrict_manage_posts() {
    global $typenow;
    $taxonomy = 'tipo_produto';
    if( $typenow == 'produto' ){
        $filters = array($taxonomy);
        foreach ($filters as $tax_slug) {
            $tax_obj = get_taxonomy($tax_slug);
            $tax_name = $tax_obj->labels->name;
            $terms = get_terms($tax_slug);
            echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
            echo "<option value=''>Mostrar tudo</option>";
            foreach ($terms as $term) { echo '<option value='. $term->slug, $_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '','>' . $term->name .' (' . $term->count .')</option>'; }
            echo "</select>";
        }
    }
}

//widget

//contato ajax
function contato_ajax() {
    include_once 'includes/send-email-contato.php';
    die("");
}

add_action('wp_ajax_contato_ajax', 'contato_ajax');
add_action('wp_ajax_nopriv_contato_ajax', 'contato_ajax');

//orçamento ajax
function orcamento_ajax() {
    include_once 'includes/send-email-orcamento.php';
    die("");
}

add_action('wp_ajax_orcamento_ajax', 'orcamento_ajax');
add_action('wp_ajax_nopriv_orcamento_ajax', 'orcamento_ajax');

function tipo_produto() {
    $consulta = new WP_Query(array(
        'tipo_produto' => $_GET['slug'],
        'post_type' => 'produto',
        'orderby' => 'title',
        'order' => 'ASC',
        'posts_per_page' => -1
        )
    );
    
    $produtos = array();
    $cont = 0;
    while ( $consulta->have_posts() ) :
        $consulta->the_post();
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'product-thumb' );
        $produtos['produtos'][] = array('id'=>get_the_ID(), 'title'=>get_the_title(), 'img'=>$thumb[0], 'link'=>get_permalink());
    endwhile;
    wp_reset_postdata();
    die((count($produtos)>0)?json_encode($produtos):"");
}

add_action('wp_ajax_tipo_produto', 'tipo_produto');
add_action('wp_ajax_nopriv_tipo_produto', 'tipo_produto');

function tags_produto() {
    $posttags = get_the_tags($_GET['post_id']);
    $tags = "";
    if($posttags) {
        for($i=0;$i<count($posttags);$i++) {
            $tags .= $posttags[$i]->name . " ";
        }
        $tags = trim($tags);
        $uhu = explode(" ", $tags);
        $tags = implode("|", $uhu);
    }
    die($tags);
}

add_action('wp_ajax_tags_produto', 'tags_produto');
add_action('wp_ajax_nopriv_tags_produto', 'tags_produto');

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
