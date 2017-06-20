<?php
/*
 * Template name: downloads
*/
get_header();

$args = [
    'post_type' => 'download',
    'posts_per_page' => '-1'
];

$search = isset($_POST['sField']) ? trim($_POST['sField']) : null;

if ($search) {
    $args['s'] = $search;
}

$downloads = new WP_Query($args);

$downloadPosts = [];
while ($downloads->have_posts()){
    $downloads->the_post();

    $categorySearch = isset($_POST['sCategory']) ? trim($_POST['sCategory']) : null;

    if ($categorySearch) {
        $type = get_post_meta(get_the_ID(), 'information-type', true);

        if (! is_array($categorySearch)) {
            $categorySearch = [$categorySearch];
        }

        if (in_array($type, $categorySearch)) {
            $downloadPosts[] = [
                'title' => get_the_title(),
                'description' => get_the_content(),
                'size' => null,
                'file' => get_field('arquivo')
            ];
        }

        continue;
    }

    $downloadPosts[] = [
        'title' => get_the_title(),
        'description' => get_the_content(),
        'size' => null,
        'file' => get_field('arquivo')
    ];
}

$downloadsPosts = array_chunk($downloadPosts, 3);
?>
<?php
$imgPage = do_shortcode('[easy_options id="DownloadsBanner"]');
include(get_template_directory()."/page-reference.php"); ?>

<section class="search-bar whole-block bg-green">
	<div class="container">
        <form action="<?php
        global $wp;
        $current_url = home_url(add_query_arg(array(),$wp->request));

        echo $current_url
        ?>" method="post">
            <div class="row">
                <div class="text-search-field col-xs-12 col-md-6">
                    <input type="text" name="sField" class="whole-block text-search" placeholder="Digite o que deseja Pesquisar!">
                    <div class="send-button-field">
                        <button>
                            <a href="#" class="send-button">
                                <span class="fa fa-search"><span class="button-text">Pesquisar</span></span>
                            </a>
                        </button>
                    </div>
                </div>
                <div class="category-search-field col-xs-12 col-md-6">
                    <select name="sCategory" class="whole-block" multiple="multiple" id="category-selection">
                        <option value="consulting">Consultoria</option>
                        <option value="additional">Projetos Complementares</option>
                        <option value="building">Execução de Obras</option>
                        <option value="security">Segurança do Trabalho</option>
                    </select>
                </div>
            </div>
        </form>
	</div>
</section>



<?php get_footer(); ?>
<section class="downloads whole-block" id="downloads">
	<div class="container">
		<div class="row downloads-selections-title text-center">
			<h3 class="text-title"><span class="fa fa-download"> </span> Downloads</h3>
		</div>
		<div class="whole-block downloads-square">
            <?php
            foreach($downloadsPosts as $chunk) {
                ?>
                <div class="row downloads-row">
                    <?php
                    foreach ($chunk as $downloadPost) {
                        ?>
                        <div class="post-field col-xs-12 col-md-4">
                            <a href="<?php echo $downloadPost['file']; ?>" download>
                                <div class="post-content bg-white whole-block">
                                    <div class="post-icon">
                                        <span class="fa fa-file-word-o text-center whole-block"></span>
                                    </div>
                                    <div class="post-title">
                                        <h6 class="text-title"><?php echo $downloadPost['title'] ?></h6>
                                    </div>
                                    <div class="post-description">
                                        <i><?php echo $downloadPost['description']; ?></i>
                                    </div>
                                    <div class="post-size"><?php echo $downloadPost['size']; ?></div>
                                    <div class="post-button"><span class="fa fa-download"> <span class="button-text">Download</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                    ?>

                </div>
                <?php
            }
            ?>
            	</div>


</section>
