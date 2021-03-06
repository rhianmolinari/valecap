<?php

//tipo produtos
add_action('init', 'create_post_type');

function create_post_type() {
    register_post_type('produto', array(
        'labels' => array(
            'name' => __('Produtos'),
            'singular_name' => __('Produto'),
            'add_new_item' => __('Adicionar novo produto'),
            'edit_item' => __('Editar produto')
        ),
        'description' => 'Tipo de produto da Valecap',
        'public' => true,
        'menu_icon' => get_bloginfo('template_url').'/image/icon-produtos.png',
        'has_archive' => true,
        'rewrite' => array(
            'slug' => 'produto',
            'with_front' => true
        ),
        'taxonomies' => array('post_tag')
      )
    );
}


//removing revisions (autosave)
function disable_revisions() {
    remove_post_type_support('produto', 'revisions');
}

add_action('admin_init', 'disable_revisions');

// Add the Meta Box
// Field Array  
$prefix = 'prd_';
$custom_product_fields = array(
    array(
        'label' => '<img class="eco" src="' . get_bloginfo('template_directory') . '/image/vipal.png" alt="Exclusivo VIPAL">',
        'desc' => 'Exclusivo VIPAL',
        'id' => $prefix . 'checkbox_excl',
        'type' => 'checkbox'
    ),
    array(
        'label' => '<img src="' . get_bloginfo('template_directory') . '/image/ecotread.png" alt="EcoTREAD">',
        'desc' => 'Linha EcoTREAD',
        'id' => $prefix . 'checkbox_ecotread',
        'type' => 'checkbox'
    ),
    array(
        'label' => 'Eixo',
        'desc' => 'Eixo',
        'id' => $prefix . 'radio_eixo',
        'type' => 'radio',
        'options' => array(
            'livre' => array(
                'label' => '<img src="' . get_bloginfo('template_directory') . '/image/eixo-livre.jpg" alt="Eixo Livre"> Eixo Livre',
                'value' => 'livre'
            ),
            'misto' => array(
                'label' => '<img src="' . get_bloginfo('template_directory') . '/image/eixo-misto.jpg" alt="Eixo Misto"> Eixo Misto',
                'value' => 'misto'
            ),
            'tracao' => array(
                'label' => '<img src="' . get_bloginfo('template_directory') . '/image/eixo-tracao.jpg" alt="Eixo Livre"> Eixo Tra&ccedil;&atilde;o',
                'value' => 'tracao'
            )
        )
    ),
    array(
        'label' => 'Pneu',
        'desc' => 'Pneu',
        'id' => $prefix . 'radio_pneu',
        'type' => 'radio',
        'options' => array(
            'radial' => array(
                'label' => '<img src="' . get_bloginfo('template_directory') . '/image/radial.png" alt="Radial"> Radial',
                'value' => 'radial'
            ),
            'diagonal' => array(
                'label' => '<img src="' . get_bloginfo('template_directory') . '/image/diagonal.png" alt="Diagonal"> Diagonal',
                'value' => 'diagonal'
            )
        )
    ),
    array(
        'label' => '<img src="' . get_bloginfo('template_directory') . '/image/foradeestrada.png" alt="Fora de estrada"> Fora de estrada',
        'desc' => 'Fora de estrada',
        'id' => $prefix . 'radio_off',
        'type' => 'radio',
        'options' => array(
            'naoaplicavel_off' => array(
                'label' => 'N&atilde;o aplic&aacute;vel',
                'value' => 'naoaplicavel_off'
            ),
            'aceitavel_off' => array(
                'label' => 'Aceit&aacute;vel',
                'value' => 'aceitavel_off'
            ),
            'indicado_off' => array(
                'label' => 'Indicado',
                'value' => 'indicado_off'
            ),
            'recomendado_off' => array(
                'label' => 'Recomendado',
                'value' => 'recomendado_off'
            )
        )
    ),
    array(
        'label' => '<img src="' . get_bloginfo('template_directory') . '/image/urbano.png" alt="Urbano"> Urbano',
        'desc' => 'Urbano',
        'id' => $prefix . 'radio_urb',
        'type' => 'radio',
        'options' => array(
            'naoaplicavel_urb' => array(
                'label' => 'N&atilde;o aplic&aacute;vel',
                'value' => 'naoaplicavel_urb'
            ),
            'aceitavel_urb' => array(
                'label' => 'Aceit&aacute;vel',
                'value' => 'aceitavel_urb'
            ),
            'indicado_urb' => array(
                'label' => 'Indicado',
                'value' => 'indicado_urb'
            ),
            'recomendado_urb' => array(
                'label' => 'Recomendado',
                'value' => 'recomendado_urb'
            )
        )
    ),
    array(
        'label' => '<img src="' . get_bloginfo('template_directory') . '/image/industrial.png" alt="Industrial"> Industrial',
        'desc' => 'Industrial',
        'id' => $prefix . 'radio_ind',
        'type' => 'radio',
        'options' => array(
            'naoaplicavel_ind' => array(
                'label' => 'N&atilde;o aplic&aacute;vel',
                'value' => 'naoaplicavel_ind'
            ),
            'aceitavel_ind' => array(
                'label' => 'Aceit&aacute;vel',
                'value' => 'aceitavel_ind'
            ),
            'indicado_ind' => array(
                'label' => 'Indicado',
                'value' => 'indicado_ind'
            ),
            'recomendado_ind' => array(
                'label' => 'Recomendado',
                'value' => 'recomendado_ind'
            )
        )
    ),
    array(
        'label' => '<img src="' . get_bloginfo('template_directory') . '/image/misto.png" alt="Misto"> Misto',
        'desc' => 'Misto',
        'id' => $prefix . 'radio_mix',
        'type' => 'radio',
        'options' => array(
            'naoaplicavel_mix' => array(
                'label' => 'N&atilde;o aplic&aacute;vel',
                'value' => 'naoaplicavel_mix'
            ),
            'aceitavel_mix' => array(
                'label' => 'Aceit&aacute;vel',
                'value' => 'aceitavel_mix'
            ),
            'indicado_mix' => array(
                'label' => 'Indicado',
                'value' => 'indicado_mix'
            ),
            'recomendado_mix' => array(
                'label' => 'Recomendado',
                'value' => 'recomendado_mix'
            )
        )
    ),
    array(
        'label' => '<img src="' . get_bloginfo('template_directory') . '/image/pavimentadocurta.png" alt="Pavimentado Curta"> Pavimentado Curta',
        'desc' => 'Pavimentado Curta',
        'id' => $prefix . 'radio_pavc',
        'type' => 'radio',
        'options' => array(
            'naoaplicavel_pavc' => array(
                'label' => 'N&atilde;o aplic&aacute;vel',
                'value' => 'naoaplicavel_pavc'
            ),
            'aceitavel_pavc' => array(
                'label' => 'Aceit&aacute;vel',
                'value' => 'aceitavel_pavc'
            ),
            'indicado_pavc' => array(
                'label' => 'Indicado',
                'value' => 'indicado_pavc'
            ),
            'recomendado_pavc' => array(
                'label' => 'Recomendado',
                'value' => 'recomendado_pavc'
            )
        )
    ),
    array(
        'label' => '<img src="' . get_bloginfo('template_directory') . '/image/pavimentadolonga.png" alt="Pavimentado Longa"> Pavimentado Longa',
        'desc' => 'Pavimentado Longa',
        'id' => $prefix . 'radio_pavl',
        'type' => 'radio',
        'options' => array(
            'naoaplicavel_pavl' => array(
                'label' => 'N&atilde;o aplic&aacute;vel',
                'value' => 'naoaplicavel_pavl'
            ),
            'aceitavel_pavl' => array(
                'label' => 'Aceit&aacute;vel',
                'value' => 'aceitavel_pavl'
            ),
            'indicado_pavl' => array(
                'label' => 'Indicado',
                'value' => 'indicado_pavl'
            ),
            'recomendado_pavl' => array(
                'label' => 'Recomendado',
                'value' => 'recomendado_pavl'
            )
        )
    )
);

// The Callback  
function show_product_meta_box() {
    global $custom_product_fields, $post;
// Use nonce for verification  
    echo '<input type="hidden" name="custom_product_box_nonce" value="' . wp_create_nonce(basename(__FILE__)) . '" />';

    // Begin the field table and loop  
    echo '<table class="form-table">';
    foreach ($custom_product_fields as $field) {
        // get value of this field if it exists for this post  
        $meta = get_post_meta($post->ID, $field['id'], true);
        // begin a table row with  
        echo '<tr> 
                <th><label for="' . $field['id'] . '">' . $field['label'] . '</label></th> 
                <td>';
        switch ($field['type']) {
            // text  
            case 'text':
                echo '<input type="text" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $meta . '" size="30" /> 
            <br /><span class="description">' . $field['desc'] . '</span>';
                break;
            //// textarea  
            case 'textarea':
                echo '<textarea name="' . $field['id'] . '" id="' . $field['id'] . '" cols="60" rows="4">' . $meta . '</textarea> 
        <br /><span class="description">' . $field['desc'] . '</span>';
                break;
            // checkbox  
            case 'checkbox':
                echo '<input type="checkbox" name="' . $field['id'] . '" id="' . $field['id'] . '" ', $meta ? ' checked="checked"' : '', '/> 
            <label for="' . $field['id'] . '">' . $field['desc'] . '</label>';
                break;
            // radio  
            case 'radio':
                if (isset($field['options'])) {
                    $cont = 0;
                    foreach ($field['options'] as $option) {
                        echo '<input type="radio" name="' . $field['id'] . '" id="' . $option['value'] . '" value="' . $option['value'] . '" ', $meta == $option['value'] || (empty($meta) && $cont++ == 0) ? ' checked="checked"' : '', ' /> 
                <label for="' . $option['value'] . '">' . $option['label'] . '</label>&nbsp;&nbsp;';
                    }
                } else {
                    echo '<input type="radio" name="' . $field['id'] . '" id="' . $field['id'] . '" ', $meta ? ' checked="checked"' : '', '/> 
        <label for="' . $field['id'] . '">' . $field['desc'] . '</label>';
                }
                break;
            // select  
            case 'select':
                echo '<select name="' . $field['id'] . '" id="' . $field['id'] . '">';
                foreach ($field['options'] as $option) {
                    echo '<option', $meta == $option['value'] ? ' selected="selected"' : '', ' value="' . $option['value'] . '">' . $option['label'] . '</option>';
                }
                echo '</select><br /><span class="description">' . $field['desc'] . '</span>';
                break;
        } //end switch  
        echo '</td></tr>';
    } // end foreach  
    echo '</table>'; // end table  
}

function add_product_meta_box() {
    add_meta_box(
            'product_meta_box', // $id  
            'Informações', // $title   
            'show_product_meta_box', // $callback  
            'produto', // $page  
            'normal', // $context  
            'high'); // $priority  
}

add_action('add_meta_boxes', 'add_product_meta_box');

// Save the Data  
function save_product_meta($post_id) {
    global $custom_product_fields;

    // verify nonce
    if (isset($_POST['custom_product_box_nonce'])) {
        if (!wp_verify_nonce($_POST['custom_product_box_nonce'], basename(__FILE__)))
            return $post_id;
    }
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;
    // check permissions  
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
    } elseif (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }

    // loop through fields and save the data  
    foreach ($custom_product_fields as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    } // end foreach  
}

add_action('save_post', 'save_product_meta');

function add_xyz_meta_box() {
    add_meta_box(
            'xyz_meta_box', // $id  
            'P&aacute;gina inicial', // $title   
            'show_xyz_meta_box', // $callback  
            'produto', // $page  
            'side', // $context  
            'high'); // $priority  
}

add_action('add_meta_boxes', 'add_xyz_meta_box');

$prefix_xyz = 'xyz_';
$custom_xyz_fields = array(
    array(
        'label' => 'Produto em destaque',
        'desc' => 'Produto em destaque para a p&aacute;gina inicial',
        'id' => $prefix_xyz . 'dest_post_id',
        'type' => 'post_list',
        'post_type' => array('produto')
    ),
    array(
        'label' => 'Mais vendidos',
        'desc' => '1&#186; lugar',
        'id' => $prefix_xyz . 'first_post_id',
        'type' => 'post_list',
        'post_type' => array('produto')
    ),
    array(
        'label' => '',
        'desc' => '2&#186; lugar',
        'id' => $prefix_xyz . 'second_post_id',
        'type' => 'post_list',
        'post_type' => array('produto')
    ),
    array(
        'label' => '',
        'desc' => '3&#186; lugar',
        'id' => $prefix_xyz . 'third_post_id',
        'type' => 'post_list',
        'post_type' => array('produto')
    )
);

function show_xyz_meta_box() {
    global $custom_xyz_fields, $post;
// Use nonce for verification  
    echo '<input type="hidden" name="custom_xyz_box_nonce" value="' . wp_create_nonce(basename(__FILE__)) . '" />';

    // Begin the field table and loop  
    echo '<table class="form-table">';
    foreach ($custom_xyz_fields as $field) {
        // get value of this field if it exists for this post  
        //$meta = get_post_meta($post->ID, $field['id'], true);
        // begin a table row with  
        echo '<tr> 
                <th><label for="' . $field['id'] . '">' . $field['label'] . '</label></th> 
                <td>';

        switch ($field['type']) {
            // post_list  
            case 'post_list':
                $items = get_posts(array(
                    'post_type' => $field['post_type'],
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'posts_per_page' => -1
                        ));
                $atual = get_posts(array(
                    'post_type' => $field['post_type'],
                    'posts_per_page' => -1,
                    'meta_query' => array(
                        array(
                            'key' => $field['id'],
                        )
                    )
                        ));

                $current = get_post_meta($atual[0]->ID, $field['id'], true);

                echo '<select name="' . $field['id'] . '" id="' . $field['id'] . '"> 
            <option value="">Selecione um produto</option>'; // Select One  
                foreach ($items as $item) {
                    echo '<option value="' . $item->ID . '"', $current == $item->ID ? ' selected="selected"' : '', '>' . $item->post_title . '</option>';
                } // end foreach  
                echo '</select><br /><span class="description">' . $field['desc'] . '</span>';
                break;
        }
        echo '</td></tr>';
    } // end foreach  
    echo '</table>'; // end table  
}

function save_xyz_meta($post_id) {
    global $custom_xyz_fields;

    // verify nonce
    if (isset($_POST['custom_xyz_box_nonce'])) {
        if (!wp_verify_nonce($_POST['custom_xyz_box_nonce'], basename(__FILE__)))
            return $post_id;
    }
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;
    // check permissions  
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
    } elseif (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }

    // loop through fields and save the data  
    foreach ($custom_xyz_fields as $field) {
        $atual = get_posts(array(
            'post_type' => $field['post_type'],
            'posts_per_page' => -1,
            'meta_query' => array(
                array(
                    'key' => $field['id']
                )
            )
                ));

        if (get_post_meta($atual[0]->ID, $field['id'], true) <> $_POST[$field['id']]) {
            $items = get_posts(
                    array(
                        'post_type' => $field['post_type'],
                        'posts_per_page' => -1,
                        'meta_query' => array(
                            array('key' => $field['id'])
                        )
                    ));

            if (!empty($_POST[$field['id']])) {
                foreach ($items as $item) {
                    update_post_meta($item->ID, $field['id'], $_POST[$field['id']]);
                }
            }
        }

        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    } // end foreach  
}

add_action('save_post', 'save_xyz_meta');

add_post_type_support('produto', array('thumbnail', 'tags'));

//adicionando categoria especifica dos produtos
add_action('init', 'create_taxonomy_product_category');

function create_taxonomy_product_category() {
    register_taxonomy('tipo_produto', 'produto', array(
        'hierarchical' => true,
        'label' => __('Categorias dos produtos'),
        'show_ui' => true,
        'show_in_tag_cloud' => true,
        'query_var' => true,
        'rewrite' => array('slug'=>'categoria', 'with_front'=>false)
         )
    );
}
?>
