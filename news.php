<?php
/*
 * Template name: news
*/
get_header();
?>
<?php
$imgPage = do_shortcode('[easy_options id="NewsBanner"]');
include(get_template_directory()."/page-reference.php"); ?>

<section class="search-bar whole-block bg-green">
	<div class="container">
        <form  method="get">
            <div class="row">
                <div class="text-search-field col-xs-12 col-md-6">
                    <input type="text" name="searchField" class="whole-block text-search" placeholder="Digite o que deseja Pesquisar!">
                    <div class="send-button-field">
                        <button>
                            <a href="#" class="send-button">
                                <span class="fa fa-search"><span class="button-text">Pesquisar</span></span>
                            </a>
                        </button>
                    </div>
                </div>
                <div class="category-search-field col-xs-12 col-md-6">
                    <?php
                    $listCategories = get_categories();
                    ?>
                    <select name="searchCategory[]" class="whole-block" multiple="multiple" id="category-selection">
                        <?php foreach($listCategories as $category): ?>
                            <option value="<?php echo $category->cat_ID; ?>"><?php echo $category->cat_name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </form>
	</div>
</section>
    <?php
    $posts = array();
    $args = array(
        'post_type' => 'post'
    );

    $search = isset($_GET['searchField']) ? trim($_GET['searchField']) : null;
    $categories = isset($_GET['searchCategory']) ? ($_GET['searchCategory']) : array();

    if (is_array($categories) && count($categories) > 0) {
        $args['cat'] = implode(',', $categories);
    }

    if ($search) {
        $args['s'] = $search;
    }

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

    $posts = array_chunk($posts, 3);
    ?>
<section id="news" class="news whole-block">
	<div class="container">
		<div class="row news-selections-title text-center">
			<h3 class="text-title"><span class="fa fa-newspaper-o"> </span> Notícias</h3>
		</div>
		<div class="whole-block news-square">
            <?php foreach($posts as $chunk){ ?>
                <div class="row news-row">
                    <?php foreach ($chunk as $post): ?>
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
                                        <div class="post-entry text-center">Entrar</div>
                                    </div>
                                    <div class="post-title  whole-block">
                                        <h6 class="text-title"><?php echo $post['title']; ?></h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach;  wp_reset_query();?>
                </div>
            <?php } ?>
        </div>
	</div>
</section>



<?php get_footer(); ?>
