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


function wptester_admin_tabs( $current = 'services' ) {
    $tabs = array( 'services' => 'Home', 'Consultoria' => 'Consultoria', 'Combate' => 'Combate ao Incendio', 'Segurança' => 'Segurança no Trabalho', 'Eletricidade' => 'Eletricidade');
    $links = array();
    echo '<div id="icon-themes" class="icon32"><br></div>';
    echo '<h2 class="nav-tab-wrapper">';
    foreach( $tabs as $tab => $name ){
        $class = ( $tab == $current ) ? ' nav-tab-active' : '';
        echo "<a class='nav-tab$class' href='?page=theme-settings&tab=$tab'>$name</a>";

    }
    echo '</h2>';
}
function wptester_settings_page() {
    global $pagenow;
    $settings = get_option( "wptester_theme_settings" );

        //some html and code goes here...

        if ( isset ( $_GET['tab'] ) ) wptester_admin_tabs($_GET['tab']); else wptester_admin_tabs('homepage');

//...
?>
