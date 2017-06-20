<?php get_header();?>
<?php $imgPage = do_shortcode('[easy_options id="NewsBanner"]');
include(get_template_directory()."/page-reference.php"); ?>

<?php
		while (have_posts()) {
			the_post();
		?>
<section class="news-post">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 post-title text-center">
        <h3 class="text-title text-green"><?php echo the_title(); ?></h3>
				<span class="text-blue col-xs-6"><?php the_time('d/m/Y'); ?></span>
				<span class="text-blue col-xs-6"><?php the_category(); ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 post-content">
        <span><?php echo the_content();?></span>
      </div>
    </div>
  </div>
</section>
<?php } ?>

<?php get_footer(); ?>
