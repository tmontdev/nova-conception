<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Conception Engenharia | Bem Vindo</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.com" media="screen" title="no title" charset="utf-8">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header id="header" class="header">
		<div class="mobile mobile-header">
			<div class="switch-header-mobile"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<a href="<?php echo get_option('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/conception-logo.png"></a>
		</div>
      <div class="header-first-line desktop">
        <div class="container">
          <div class="col-md-6 text-center">
            Bem-Vindo à Conception Engenharia
          </div>
          <div class="col-md-6 text-center">
            Adequado à ISO 9001
          </div>
        </div>
      </div>
      <div class="header-second-line desktop">
        <div class="container">
					<div class="row">
						<div class="header-logo col-md-3 ">
	            <a href="<?php echo get_option('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/conception-logo.png"></a>
	          </div>
						<div class="header-address col-md-3 ">
							<div class="address-street col-md-12 ">
								<span class="text-green">Rua Voluntários da Pátria, nº2-55</span>
							</div>
							<div class="address-city col-md-12">
								<span class="text-blue">Bauru - São Paulo</span>
							</div>
							<i class="fa fa-map-marker text-green" aria-hidden="true"></i>
						</div>
						<div class="header-contact col-md-3 ">
							<div class="contact-phone col-md-12">
								<span class="text-green">(14)99669-2010</span>
							</div>
							<div class="contact-mail col-md-12">
								<span class="text-blue">contato@conceptionengenharia.com.br</span>
							</div>
							<i class="fa fa-whatsapp text-green" aria-hidden="true"></i>
						</div>
						<div class="header-social col-xs-12 col-md-3">
							<a class="col-xs-4"href="https://www.facebook.com/ConceptionEngenharia/?ref=ts&fref=ts">
								<div class="circle text-center text-green border-green">
									<i class="fa fa-facebook text-green" aria-hidden="true"></i>
								</div>
							</a>
							<a class="col-xs-4"href="https://www.youtube.com/channel/UCZeUv9_Gf-5xEmAfe0QhJuA">
								<div class="circle text-center text-green border-green">
									<i class="fa fa-youtube text-green" aria-hidden="true"></i>
								</div>
							</a>
							<a class="col-xs-4"href="https://www.facebook.com/ConceptionEngenharia/?ref=ts&fref=ts">
								<div class="circle text-center text-green border-green">
									<i class="fa fa-linkedin text-green" aria-hidden="true"></i>
								</div>
							</a>
						</div>
					</div>
        </div>
      </div>
			<div class="mobile shadow rollback-area rollback"></div>
			<div class="header-menu">
				<div class="header-menu-line mobile">
					<div class="col-xs-9 logo">
						<a href="<?php echo get_option('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/conception-logo.png"></a>
					</div>
					<div class="col-xs-2 rollback">
						<i class="fa fa-arrow-left circle text-green" aria-hidden="true"></i>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<nav>
							<ul>
								<li class="text-center col-xs-12 col-md-2 no-padding"><a class="no-padding" href="<?php echo get_option('home'); ?>"><div class="link-icon col-xs-2 mobile no-padding text-center"><i class="fa fa-home" aria-hidden="true"></i></div><span class="col-xs-10 col-md-12"><i class="fa fa-home desktop" aria-hidden="true"></i> Home</span>	</a></li>
								<li class="text-center col-xs-12 col-md-2 no-padding"><a class="no-padding" href="<?php echo get_permalink(get_page_by_path('sobre')); ?>"><div class="link-icon col-xs-2 mobile no-padding text-center"><i class="fa fa-question-circle-o" aria-hidden="true"></i></div><span class="col-xs-10 col-md-12"><i class="fa fa-question-circle-o desktop" aria-hidden="true"></i> Sobre</span>	</a></li></a></li>
								<li class="text-center col-xs-12 col-md-2 no-padding"><a class="no-padding" href="<?php echo get_permalink(get_page_by_path('servicos')); ?>"><div class="link-icon col-xs-2 mobile no-padding text-center"><i class="fa fa-cog" aria-hidden="true"></i></div><span class="col-xs-10 col-md-12"><i class="fa fa-cog desktop" aria-hidden="true"></i> Serviços</span>	</a></li></a></li>
								<li class="text-center col-xs-12 col-md-2 no-padding"><a class="no-padding" href="<?php echo get_permalink(get_page_by_path('downloads')); ?>"><div class="link-icon col-xs-2 mobile no-padding text-center"><i class="fa fa-download" aria-hidden="true"></i></div><span class="col-xs-10 col-md-12"><i class="fa fa-download desktop" aria-hidden="true"></i> Downloads</span>	</a></li></a></li>
								<li class="text-center col-xs-12 col-md-2 no-padding"><a class="no-padding" href="<?php echo get_permalink(get_page_by_path('news')); ?>"><div class="link-icon col-xs-2 mobile no-padding text-center"><i class="fa fa-newspaper-o" aria-hidden="true"></i></div><span class="col-xs-10 col-md-12"><i class="fa fa-newspaper-o desktop" aria-hidden="true"></i> Notícias</span>	</a></li></a></li>
								<li class="text-center col-xs-12 col-md-2 no-padding"><a class="no-padding" href="<?php echo get_permalink(get_page_by_path('contato')); ?>"><div class="link-icon col-xs-2 mobile no-padding text-center"><i class="fa fa-phone" aria-hidden="true"></i></div><span class="col-xs-10 col-md-12"><i class="fa fa-phone desktop" aria-hidden="true"></i> Contato</span>	</a></li></a></li>
							</ul>
						</nav>
						<a class="mobile col-xs-4"href="https://www.facebook.com/ConceptionEngenharia/?ref=ts&fref=ts">
							<div class="circle text-center text-white border-white">
								<i class="fa fa-facebook text-white" aria-hidden="true"></i>
							</div>
						</a>
						<a class="mobile col-xs-4"href="https://www.youtube.com/channel/UCZeUv9_Gf-5xEmAfe0QhJuA">
							<div class="circle text-center text-white border-white">
								<i class="fa fa-youtube text-white" aria-hidden="true"></i>
							</div>
						</a>
						<a class="mobile col-xs-4"href="https://www.facebook.com/ConceptionEngenharia/?ref=ts&fref=ts">
							<div class="circle text-center text-white border-white">
								<i class="fa fa-linkedin text-white" aria-hidden="true"></i>
							</div>
						</a>

					</div>
				</div>
			</div>

  </header>




