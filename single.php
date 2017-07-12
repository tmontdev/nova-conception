<?php get_header();?>
<?php $imgPage = do_shortcode('[easy_options id="NewsBanner"]');
$newTitle = get_the_title();

include(get_template_directory()."/page-reference.php"); ?>

<?php
		while (have_posts()) {
			the_post();
		?>
<section class="news-post">
  <div class="container">
    <div class="row post-header">
      <div class="col-xs-12 post-title text-center">
        <h3 class="text-title text-green"><?php echo the_title(); ?></h3>
      </div>
			<div class="col-xs-6 post-time text-center">
				<span class="text-blue col-xs-6"><?php the_time('d/m/Y'); ?></span>
			</div>
			<div class="col-xs-6 post-cat text-center">
				<span class="text-blue col-xs-6"><?php the_category(); ?></span>
			</div>
    </div>
    <div class="row post-content">
      <div class="col-xs-12 post-content">
        <span><?php echo the_content();?></span>
      </div>
    </div>
  </div>
</section>
<?php } ?>

<?php get_footer(); ?>
