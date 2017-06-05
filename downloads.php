<?php
/*
 * Template name: downloads
*/
get_header();

$downloads = new WP_Query([
    'post_type' => 'download',
    'posts_per_page' => '-1'
]);
?>
<?php 
$imgPage = do_shortcode('[easy_options id="DownloadsBanner"]');
include(get_template_directory()."/page-reference.php"); ?>

<section class="search-bar whole-block bg-green">
	<div class="container">
		<div class="row">
			<div class="text-search-field col-xs-12 col-md-6">
				<input type="text" class="whole-block text-search" placeholder="Digite o que deseja Pesquisar!">
				<div class="send-button-field">
					<button>
						<a href="#" class="send-button">
							<span class="fa fa-search"><span class="button-text">Pesquisar</span></span>
						</a>
					</button>
				</div>
			</div>
			<div class="category-search-field col-xs-12 col-md-6">
				<select name="category-selection" class="whole-block" multiple="multiple" id="category-selection">
					<option value="Consultoria">Consultoria</option>
					<option value="Combate ao Incendio"> Combate ao Incendio</option>
					<option value="Segurança do Trabalho">Segurança do Trabalho</option>
					<option value="Eletricidade">Eletricidade</option>
				</select>
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>
<section class="downloads whole-block" id="downloads">
	<div class="container">
		<div class="row downloads-selections-title text-center">
			<h3 class="text-title"><span class="fa fa-download"> </span> Downloads</h3>
			<h4 class="text-subtitle">Todas as Categorias: <span>Consultoria</span> <span>Combate ao Incendio</span> <span>Segurança no Trabalho</span> <span>Eletricidade</span></h4>
		</div>
		<div class="whole-block downloads-square">
			<div class="row downloads-row">
                <?php
                while ($downloads->have_posts()):
                    $downloads->the_post();
                    ?>
                    <div class="post-field col-xs-12 col-md-4">
                        <a href="<?php the_post('arquivo'); ?>" download>
                            <div class="post-content bg-white whole-block">
                                <div class="post-icon">
                                    <span class="fa fa-file-word-o text-center whole-block"></span>
                                </div>
                                <div class="post-title">
                                    <h6 class="text-title"><?php the_title(); ?></h6>
                                </div>
                                <div class="post-description">
                                    <i>
                                        
                                    </i>
                                </div>
                                <div class="post-size"></div>
                                <div class="post-button"><span class="fa fa-download"> <span class="button-text">Download</span></div>
                            </div>
                        </a>
                    </div>
                    <?php
                endwhile;
                ?>

                        <div class="post-field col-xs-12 col-md-4">
	              			<a href="#" target="_blank">
	              				<div class="post-content bg-white whole-block">
	              					<div class="post-icon">
	              						<span class="fa fa-file-pdf-o text-center whole-block"></span>
	              					</div>
	              					<div class="post-title">
	              						<h6 class="text-title">Título da Postagem Maior</h6>
	              					</div>
	              					<div class="post-description">
	              						<i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum saepe earum mollitia vero est ullam, placeat eum rem deleniti sit quidem dolore.</i>
	              					</div>
	              					<div class="post-size">1.785Kb</div>
	              					<div class="post-button"><span class="fa fa-download"> <span class="button-text">Download</span></div>
	              				</div>
	              			</a>
	            			</div>
	            			<div class="post-field col-xs-12 col-md-4">
	              			<a href="#" target="_blank">
	              				<div class="post-content bg-white whole-block">
	              					<div class="post-icon">
	              						<span class="fa fa-file-excel-o text-center whole-block"></span>
	              					</div>
	              					<div class="post-title">
	              						<h6 class="text-title">Título da Postagem Maior</h6>
	              					</div>
	              					<div class="post-description">
	              						<i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum saepe earum mollitia vero est ullam, placeat eum rem deleniti sit quidem dolore.</i>
	              					</div>
	              					<div class="post-size">1.785Kb</div>
	              					<div class="post-button"><span class="fa fa-download"> <span class="button-text">Download</span></div>
	              				</div>
	              			</a>
	            			</div>

            			</div>

            		</div>
            	</div>
 
	
</section>