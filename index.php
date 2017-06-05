<?php get_header(); ?>
<section class="welcome" style="background-image: url('<?php echo do_shortcode('[easy_options id="HomePicture"]' ); ?>');">
  
</style>>
  <div class="overlay">
    <div class="container">
      <div class="row">
        <div class=" desktop col-md-4"></div>
        <div class="col-xs-12 col-sm-12 col-md-8 greetings header-distance">
          <h4 class="col-xs-12 col-sm-12 text-white"><?php echo do_shortcode('[easy_options id="HomeWelcome"]'); ?></h4>
          <h2 class="text-title col-xs-12 col-sm-12 text-white"><?php  echo do_shortcode('[easy_options id="HomeFeatured"]' );; ?></h2>
          <span class="text-white col-xs-12 col-sm-12"><?php echo do_shortcode('[easy_options id="HomeDescription"]'); ?></span>
        </div>
      </div>
      <div class="row">
        <div class="desktop col-md-4"></div>
        <div class="col-xs-12 col-sm-12 col-md-8 index">
          <a class="col-xs-12 col-sm-12 col-md-6 text-white" href="<?php echo get_permalink(get_page_by_path('sobre')); ?>">
            <div class="text-center col-xs-12 col-sm-12 bg-a-green  large-border-green link-description">
              <span><?php echo do_shortcode('[easy_options id="HomeToAbout"]' ); ?></span>
            </div>
            <div class="col-xs-12 col-sm-12 bg-green text-center link-name">
              <i class="fa fa-info-circle" aria-hidden="true"></i> <span>Saiba Mais</span>
            </div>
          </a>
          <a class="col-xs-12 col-sm-12 col-md-6 text-white" href="<?php echo get_permalink(get_page_by_path('sobre')); ?>">
            <div class="text-center col-xs-12 col-sm-12 bg-a-blue  large-border-blue link-description">
              <span>Você tambem terá acesso a formulários para contato, email, telefones e todas as nossas Redes Socias. Venha falar conosco</span>
            </div>
            <div class="col-xs-12 col-sm-12 bg-blue text-center link-name">
              <i class="fa fa-phone" aria-hidden="true"></i> <span>Contato</span>
            </div>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="desktop col-md-4"></div>
        <div class="col-xs-12 col-sm-12 col-md-8 index">
          <a class="col-xs-12 col-sm-12 col-md-6 text-white" href="<?php echo get_permalink(get_page_by_path('sobre')); ?>">
            <div class="text-center col-xs-12 col-sm-12 bg-a-green  large-border-green link-description">
              <span><?php echo do_shortcode('[easy_options id="HomeToNews"]'); ?></span>
            </div>
            <div class="col-xs-12 col-sm-12 bg-green text-center link-name">
              <i class="fa fa-newspaper-o" aria-hidden="true"></i></i> <span>Notícias</span>
            </div>
          </a>
          <a class="col-xs-12 col-sm-12 col-md-6 text-white" href="<?php echo get_permalink(get_page_by_path('sobre')); ?>">
            <div class="text-center col-xs-12 col-sm-12 bg-a-blue  large-border-blue link-description">
              <span><?php echo do_shortcode('[easy_options id="HomeToServices"]'); ?></span>
            </div>
            <div class="col-xs-12 col-sm-12 bg-blue text-center link-name">
              <i class="fa fa-cog" aria-hidden="true"></i></i> <span>Serviços</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="home-news">
  <div class="home-slider">
    <?php
    $posts = array();
    $args = array(
    	'category_name' => 'Home'
    );
    $query = new WP_Query( $args );
    while($query->have_posts()) {
    	$query->the_post();
    	$posts[] = array(
    		'title' => get_the_title(),
    		'description' => get_the_excerpt(),
    		'day' => get_the_date('d'),
        'month' => get_the_date('m'),
        'year' => get_the_date('Y'),
        'link' => get_permalink(),
        'thumb' => get_the_post_thumbnail_url(),
    	);
    }
    ?>
    <div class="home-news-security slide">
      <div class="container">
        <div class="slide-presentation text-center ">
          <h4 class="text-subtitle"><span class="text-title text-green">Ultimas Notícias</span></h4>
        </div>
        <div class="news-square whole-block">
          <div class="row news-row">
              <?php foreach ($posts as $post): ?>
            <div class="post-field col-xs-12 col-md-4">
              <a href="<?php echo $post['link']; ?>" target="_blank">
                <div class="post-content bg-white col-xs-12">
                  <div class="post-thumb whole-block" style="background-image: url('<?php echo $post['thumb']; ?>'); height: 200px;">
                    <div class="post-when col-xs-4 col-md-3">
                      <div class="post-date text-center bg-white whole-block">
                        <div class="whole-block post-day text-center text-green">
                          <?php echo $post['day']; ?>
                        </div>
                        <div class=" whole-block post-month text-center text-blue">
                          <?php echo $post['month']; ?>
                        </div>
                        <div class="whole-block post-year text-grey text-center">
                          <?php echo $post['year']; ?>
                        </div>
                      </div>
                    </div>
                    <div class="text-excerpt">
                      <?php echo $post['description']; ?>
                    </div>
                    <div class="post-entry text-center">
                      Entrar
                    </div>
                  </div>
                  <div class="post-title  whole-block">
                    <h6 class="text-title"><?php echo $post['title']; ?></h6>
                  </div>
                </div>
              </a>
            </div>
          <?php endforeach;  wp_reset_query();?>
        </div>
        </div>
      </div>
    </div>
  </div>
  <?php do_shortcode('[easy_options id="services-banner"]'); ?>
</section>
 <?php get_footer(); ?>
