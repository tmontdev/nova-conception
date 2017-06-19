<?php

//Código para criar Custom Post Type.
add_action('init', 'Anuncio_registrer');
function Anuncio_registrer(){
     $labels = array(
        'name' => _x('Anuncio', 'post type general name'),
        'singular_name' => _x('Anuncio', 'post type singular name'),
        'add_new' => _x('Adicionar Anuncio', 'Anuncio'),
        'add_new_item' => __('Adicionar novo Anuncio'),
        'edit_item' => __('Editar Anuncio'),
        'new_item' => __('Novo Anuncio'),
        'view_item' => __('Ver Anuncio'),
        'search_items' => __('Procurar Anuncio'),
        'not_found' =>  __('Nada encontrado'),
        'not_found_in_trash' => __('Nada encontrado no lixo'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => true, // Abilitando o uso do template de arquivo o archive-videos.php
        'menu_icon'   => 'dashicons-info',
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug'=>'anuncios'), // Nome que vai ser usado para gerar o link permanente ex: http://localhost/video-aula/videos
        'menu_position' => 6,
        'supports' => array('title', 'thumbnail'),
        //'taxonomies' => array('category_noticias'), // Informado qual taxonomia (grupo de categorias) este post type vai usar
      );
    register_post_type('Anuncios',$args);
}
