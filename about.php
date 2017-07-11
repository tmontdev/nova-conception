<?php
/*
 * Template name: Sobre
*/
get_header();
?>
<?php 
$imgPage = do_shortcode('[easy_options id="AboutBanner"]');
include(get_template_directory()."/page-reference.php"); ?>
<?php
$posts = array(
    'company' => array(),
    'mission' => array(),
    'vision' => array(),
    'values' => array(),
    'partners' => array()
);

$args = array(
    'post_type' => 'about',
    'posts_per_page' => -1
);
$query = new WP_Query( $args );
while($query->have_posts()) {
  $query->the_post();
  $id = get_the_ID();
  $type = get_post_meta($id, 'information-type', true);

  $posts[$type][] = array(
    'title' => get_the_title(),
    'description' => get_the_content(),
    'type' => $type,
    'thumb' => get_the_post_thumbnail_url()
  );
}
wp_reset_query();
?>

<section class="about">
  <div class="about-menu">
    <div class="container">
      <div class="about-menu-content">
        <div class="menu-item text-center border-green bg-white actived" id="company-buttom" data-target="#company">
          <i class="fa fa-building-o text-green" aria-hidden="true"></i><span class="desktop"> A Empresa</span>
        </div>
        <div class="menu-item text-center border-blue bg-white" id="mission-buttom" data-target="#mission">
          <i class="fa fa-crosshairs text-blue" aria-hidden="true"></i><span class="desktop"> Missão</span>
        </div>
        <div class="menu-item text-center border-green bg-white" id="vision-buttom" data-target="#vision">
          <i class="fa fa-eye text-green" aria-hidden="true"></i><span class="desktop"> Visão</span>
        </div>
        <div class="menu-item text-center border-blue bg-white" id="values-buttom" data-target="#values">
          <i class="fa fa-diamond text-blue" aria-hidden="true"></i><span class="desktop"> Valores</span>
        </div>
        <div class="menu-item text-center border-green bg-white" id="partners-buttom" data-target="#partners">
          <i class="fa fa-handshake-o text-green" aria-hidden="true"></i><span class="desktop"> Parceiros/Clientes</span>
        </div>
      </div>
    </div>
  </div>
  <div class="about-item hb-green text-green actived" id="company">
    <div class="about-item-bg desktop"></div>
    <div class="container">
        <?php foreach ($posts['company'] as $post): ?>
          <div class="col-xs-12 col-md-7 about-item-content">

            <div class="about-item-title">
              <h2 class="text-title"><?php echo $post['title']; ?></h2>
              <p><?php echo $post['description']; ?></p>
            </div>
          </div>
        <?php endforeach;  ?>
    </div>
  </div>

  <div class="about-item hb-blue text-blue" id="mission">
    <div class="about-item-bg desktop" style="background-image: url('<?php echo $post['thumb']; ?>');">
    </div>
    <div class="container">
        <?php foreach ($posts['mission'] as $post): ?>
            <div class="col-xs-12 col-md-7 about-item-content">
                <div class="about-item-title">
                    <h2 class="text-title"><?php echo $post['title']; ?></h2>
                    <p><?php echo $post['description']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
  </div>
  <div class="about-item hb-green text-green" id="vision">
      <div class="about-item-bg desktop"></div>
      <div class="container">
          <?php foreach ($posts['vision'] as $post): ?>
              <div class="col-xs-12 col-md-7 about-item-content">
                  <div class="about-item-title">
                      <h2 class="text-title"><?php echo $post['title']; ?></h2>
                      <p><?php echo $post['description']; ?></p>
                  </div>
              </div>
          <?php endforeach; ?>
      </div>
  </div>
  <div class="about-item hb-blue text-blue" id="values">
    <div class="about-item-bg desktop"></div>
    <div class="container">
        <?php foreach ($posts['values'] as $post): ?>
            <div class="col-xs-12 col-md-7 about-item-content">
                <div class="about-item-title">
                    <h2 class="text-title"><?php echo $post['title']; ?></h2>
                    <p><?php echo $post['description']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
  </div>
  <div class="about-item hb-green text-green" id="partners">
    <div class="about-item-bg desktop"></div>
    <div class="container">
        <?php foreach ($posts['partners'] as $post): ?>
            <div class="col-xs-12 col-md-7 about-item-content">
                <div class="about-item-title">
                    <h2 class="text-title"><?php echo $post['title']; ?></h2>
                    <p><?php echo $post['description']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
