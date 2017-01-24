<?php add_theme_support( 'post-thumbnails');
function scripts_register_conception(){
        wp_enqueue_script('jquery');
        wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/css/animate.css');
        wp_enqueue_style( 'slick', get_template_directory_uri().'/assets/css/slick.css');
        wp_enqueue_script( 'slick', get_template_directory_uri().'/assets/js/slick.min.js', array('jquery'), null, true);
        wp_enqueue_script('app', get_template_directory_uri().'/assets/js/app.js',array('jquery'), null, true);
        wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js',array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'scripts_register_conception');
show_admin_bar(false);

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );



add_action( 'init', 'create_post_type_ConsultingServices' );
function create_post_type_ConsultingServices() {
    register_post_type( 'ConsultingServices',
        array(
            'labels' => array(
                'name' => __( 'Serviços de Consultoria' ),
                'singular_name' => __( 'ConsultingService' )
            ),
            'public' => true,
        )
    );
}
add_action( 'init', 'create_post_type_FireServices' );
function create_post_type_FireServices() {
    register_post_type( 'FireServices',
        array(
            'labels' => array(
                'name' => __( 'Serviços Combate Incêndio' ),
                'singular_name' => __( 'FireService' )
            ),
            'public' => true,
        )
    );
}
add_action( 'init', 'create_post_type_SecurityServices' );
function create_post_type_SecurityServices() {
    register_post_type( 'SecurityServices',
        array(
            'labels' => array(
                'name' => __( 'Serviços Segurança Trabalho' ),
                'singular_name' => __( 'SecurityService' )
            ),
            'public' => true,
        )
    );
}
add_action( 'init', 'create_post_type_BoltServices' );
function create_post_type_BoltServices() {
    register_post_type( 'BoltServices',
        array(
            'labels' => array(
                'name' => __( 'Serviços De Eletricidade' ),
                'singular_name' => __( 'BoltService' )
            ),
            'public' => true,
        )
    );
}
?>
