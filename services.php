<?php
/*
 * Template name: serviços
*/
get_header();
?>
<?php include(get_template_directory()."/page-reference.php"); ?>
<section class="services">
  <div class="services-menu">
    <div class="container">
      <div class="services-menu-content">
        <div class="consulting-button menu-button text-center border-green bg-white actived" id="consulting-button" data-target="#consulting">
          <i class="fa fa-users text-green" aria-hidden="true"></i><span class="desktop"> Consultoria</span>
        </div>
        <div class="fire-button menu-button text-center border-blue bg-white" id="fire-button" data-target="#fire">
          <i class="fa fa-fire-extinguisher text-blue" aria-hidden="true"></i><span class="desktop"> Combate à Incendio</span>
        </div>
        <div class="security-button menu-button text-center border-green bg-white" id="security-button" data-target="#security">
          <i class="fa fa-line-chart text-green" aria-hidden="true"></i><span class="desktop"> Segurança no Trabalho</span>
        </div>
        <div class="bolt-button menu-button text-center border-blue bg-white" id="bolt-button" data-target="#bolt">
          <i class="fa fa-bolt text-blue" aria-hidden="true"></i><span class="desktop"> Eletricidade</span>
        </div>
      </div>
    </div>
  </div>
  <div class="service-item hb-green consulting" id="consulting">
    <?php
    $posts = array(
        'consulting' => array(),
        'fire' => array(),
        'security' => array(),
        'bolt' => array()
    );

    $args = array(
      'post_type' => 'services',
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
          'type' => $type
      );
    }
    wp_reset_query();

    $posts['consulting'] = array_chunk($posts['consulting'], 2);
    $posts['fire'] = array_chunk($posts['fire'], 2);
    $posts['security'] = array_chunk($posts['security'], 2);
    $posts['bolt'] = array_chunk($posts['bolt'], 2);

    ?>

    <div class="container">
      <div class="service-section-banner whole-block" style="height: 200px; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/5.jpg'); background-position: center center; background-size: cover;"></div>
      <div class="service-item-title whole-block">
        <h2 class="text-center mobile text-title text-green">Consultoria</h2>
      </div>

	    <?php foreach ($posts['consulting'] as $chunk): ?>
      <div class="row no-padding">
            <?php foreach($chunk as $post){ ?>
            <div class="service-post-content col-xs-12 col-md-6 whole-block ">
              <div class="row dropdown">
                <div class="service-post-head  dd-green whole-block">
                  <div class="col-xs-2 service-post-icon middle">
                    <i class="fa text-white whole-block text-center fa-info-circle middle" aria-hidden="true"></i>
                  </div>
                  <div class="col-xs-8 service-post-title middle">
                    <h6 class="text-white text-center text-subtitle whole-block middle"><?php echo $post['title']; ?></h6>
                  </div>
                  <div class="col-xs-2 indicator middle">
                    <div class="indicator-content">

                    </div>
                  </div>
                </div>
                <div class="service-post-body whole-block border-green">
                  <span><?php echo $post['description']; ?></span>
                </div>
              </div>
            </div>

        <?php }; ?>



      </div>
	    <?php endforeach;  ?>
    </div>
  </div>
  <div class="service-item hb-blue fire" id="fire">
    <div class="container">    
      <div class="service-section-banner whole-block" style="height: 200px; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/5.jpg'); background-position: center center; background-size: cover; "></div>
      <div class="service-item-title whole-block">
        <h2 class="text-center mobile text-title text-blue">Combate à Incendio</h2>
      </div>
      <?php foreach ($posts['fire'] as $chunk): ?>
      <div class="row no-padding">
            <?php foreach($chunk as $post){ ?>
            <div class="service-post-content col-xs-12 col-md-6 whole-block ">
              <div class="row dropdown">
                <div class="service-post-head  dd-blue whole-block">
                  <div class="col-xs-2 service-post-icon middle">
                    <i class="fa text-white whole-block text-center fa-info-circle middle" aria-hidden="true"></i>
                  </div>
                  <div class="col-xs-8 service-post-title middle">
                    <h6 class="text-white text-center text-subtitle whole-block middle"><?php echo $post['title']; ?></h6>
                  </div>
                  <div class="col-xs-2 indicator middle">
                    <div class="indicator-content">
                    </div>
                  </div>
                </div>
                <div class="service-post-body whole-block border-blue">
                  <span><?php echo $post['description']; ?></span>
                </div>
              </div>
            </div>
          <?php }; ?>
        </div>
      <?php endforeach;  ?>      
    </div>
  </div>
  <div class="service-item hb-green security" id="security">
    <div class="container">
      <div class="service-section-banner whole-block" style="height: 200px; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/5.jpg'); background-position: center center; background-size: cover;"></div>
      <div class="service-item-title whole-block">
        <h2 class="text-center mobile text-title text-green">Segurança do Trabalho</h2>
      </div>
      <?php foreach ($posts['security'] as $chunk): ?>
      <div class="row no-padding">
            <?php foreach($chunk as $post){ ?>
            <div class="service-post-content col-xs-12 col-md-6 whole-block ">
              <div class="row dropdown">
                <div class="service-post-head  dd-green whole-block">
                  <div class="col-xs-2 service-post-icon middle">
                    <i class="fa text-white whole-block text-center fa-info-circle middle" aria-hidden="true"></i>
                  </div>
                  <div class="col-xs-8 service-post-title middle">
                    <h6 class="text-white text-center text-subtitle whole-block middle"><?php echo $post['title']; ?></h6>
                  </div>
                  <div class="col-xs-2 indicator middle">
                    <div class="indicator-content">
                    </div>
                  </div>
                </div>
                <div class="service-post-body whole-block border-green">
                  <span><?php echo $post['description']; ?></span>
                </div>
              </div>
            </div>
          <?php }; ?>
        </div>
      <?php endforeach;  ?>      

        </div>
      </div>
    </div>
  </div>
  <div class="service-item hb-blue bolt" id="bolt">
    <div class="container">
      <div class="service-section-banner whole-block" style="height: 200px; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/5.jpg'); background-position: center center; background-size: cover;"></div>
      <div class="service-item-title whole-block">
        <h2 class="text-center mobile text-title text-blue">Eletricidade</h2>
      </div>
            <?php foreach ($posts['bolt'] as $chunk): ?>
      <div class="row no-padding">
            <?php foreach($chunk as $post){ ?>
            <div class="service-post-content col-xs-12 col-md-6 whole-block ">
              <div class="row dropdown">
                <div class="service-post-head  dd-blue whole-block">
                  <div class="col-xs-2 service-post-icon middle">
                    <i class="fa text-white whole-block text-center fa-info-circle middle" aria-hidden="true"></i>
                  </div>
                  <div class="col-xs-8 service-post-title middle">
                    <h6 class="text-white text-center text-subtitle whole-block middle"><?php echo $post['title']; ?></h6>
                  </div>
                  <div class="col-xs-2 indicator middle">
                    <div class="indicator-content">
                    </div>
                  </div>
                </div>
                <div class="service-post-body whole-block border-blue">
                  <span><?php echo $post['description']; ?></span>
                </div>
              </div>
            </div>
          <?php }; ?>
        </div>
      <?php endforeach;  ?>      
    </div>

    </div>
  </div>
  <div class="antibug"></div>

</section>
<?php get_footer(); ?>
