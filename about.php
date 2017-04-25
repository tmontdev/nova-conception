<?php
/*
 * Template name: Sobre
*/
get_header();
?>
<?php include(get_template_directory()."/page-reference.php"); ?>
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
    'posts_per_page' => 1
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
      <div class="col-xs-12 col-md-7 about-item-content">
        <?php foreach ($posts['company'] as $post): ?>
        <div class="about-item-title">
          <h2 class="text-title"><?php echo $post['title']; ?></h2>
          <p><?php echo $post['description']; ?></p>
        </div>
      </div>
    </div>
  </div>
<?php endforeach;  ?>
  <div class="about-item hb-blue text-blue" id="mission">
    <div class="about-item-bg desktop"></div>
    <div class="container">
      <div class="col-xs-12 col-md-7 about-item-content">
        <div class="about-item-title">
          <h2 class="text-title">Missão</h2>
          <p>Ser referência no mercado de engenharia de projetos e consultoria, através do nosso profissionalismo, visando o aprimoramento continuo da gestão do nosso negócio, oferencendo sempre, técnicamente, economicamente e tecnológicamente,
             o que há de melhor aos nossos clientes.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="about-item hb-green text-green" id="vision">
    <div class="about-item-bg desktop"></div>
    <div class="container">
      <div class="col-xs-12 col-md-7 about-item-content">
        <div class="about-item-title">
          <h2 class="text-title">Visão</h2>
          <p>Entender as necessidades de nossos clientes aplicando a engenharia de forma ética, técnica e eficaz, proporcionando assim qualidade, viabilidade e economia em cada trabalho concluído, contribuindo significativamente para o sucesso de cada
            empreendimento construído.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="about-item hb-blue text-blue" id="values">
    <div class="about-item-bg desktop"></div>
    <div class="container">
      <div class="col-xs-12 col-md-7 about-item-content">
        <div class="about-item-title">
          <h2 class="text-title">Valores</h2>
          <ul>
            <li>Agir de forma ética e sustentável</li>
            <li>Promessa é dívida</li>
            <li>Progredir sempre</li>
            <li>Respeitar o ser humano</li>
            <li>Ter compromisso com alto desempenho</li>
            <li>Gestão prática</li>
            <li>Organização dinâmica</li>
            <li>Transpaência nos objetivos</li>
            <li>Garra e vontade de vencer</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="about-item hb-green text-green" id="partners">
    <div class="about-item-bg desktop"></div>
    <div class="container">
      <div class="col-xs-12 col-md-7 about-item-content">
        <div class="about-item-title">
          <h2 class="text-title">Clientes e Parceiros</h2>
          <div class="logo-square">
              <div class="logo-img col-xs-6 col-sm-4 col-ld-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/01.png">
              </div>
              <div class="logo-img col-xs-6 col-sm-4 col-ld-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/1.png">
              </div>
              <div class="logo-img col-xs-6 col-sm-4 col-ld-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/2.png">
              </div>
              <div class="logo-img col-xs-6 col-sm-4 col-ld-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/3.png">
              </div>
              <div class="logo-img col-xs-6 col-sm-4 col-ld-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/4.png">
              </div>
              <div class="logo-img col-xs-6 col-sm-4 col-ld-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/5.png">
              </div>
              <div class="logo-img col-xs-6 col-sm-4 col-ld-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/6.jpg">
              </div>
              <div class="logo-img col-xs-6 col-sm-4 col-ld-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/7.png" class="lower">
              </div>
              <div class="logo-img col-xs-6 col-sm-4 col-ld-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/8.png">
              </div>
              <div class="logo-img col-xs-6 col-sm-4 col-ld-3">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/9.png">
              </div>
              <div class="logo-img col-xs-6 col-sm-4 col-ld-3">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/10.jpg">
              </div>
              <div class="logo-img col-xs-6 col-sm-4 col-ld-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/11.jpg">
              </div>
              <div class="logo-img col-xs-6 col-sm-4 col-ld-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/12.png">
              </div>
              <div class="logo-img col-xs-6 col-sm-4 col-ld-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/13.jpg">
              </div>
              <div class="logo-img col-xs-6 col-sm-4 col-ld-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/14.jpg">
              </div>
           </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
