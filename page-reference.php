<section class="page-reference">
  <?php $pagename = get_query_var('pagename');
      if ( !$pagename && $id > 0 ) {
      // If a static page is set as the front page, $pagename will not be set. Retrieve it from the queried object
      $post = $wp_query->get_queried_object();
      $pagename = $post->post_name;
    } ?>
  <div class="pr-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/5.jpg');"></div>
  <div class="pr-line">
    <div class="container">
        <a href="<?php echo get_option('home'); ?>" class="home-icon text-green fa fa-home" aria-hidden="true"></a>
        <a class="pr-page text-grey" href="<?php get_page_by_path($pagename); ?>">  <?php echo $pagename ?></a>
        <a class="pr-post text-grey" href="<?php echo get_option('home'); ?>"><?php echo  $post ?></a>
    </div>
  </div>
</section>
