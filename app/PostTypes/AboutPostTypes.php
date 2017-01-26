<?php
class AboutPT
{
	/**
	 * Slug used in Custom Post Type
	 *
	 * @var string
	 */
	protected $slug = 'about';

	/**
	 * AboutPT constructor.
	 */
	public function __construct()
	{
		add_action( 'init', array($this, 'postType') );
		add_action( 'admin_init', array($this, 'metaBoxes') );
		add_action( 'save_post', array($this, 'savePost') );
	}

	/**
	 * Create Post Type
	 *
	 * @return mixed
	 */
	public function postType()
	{
		$labels = array(
			'name' => _x('Sobre', 'post type general name'),
			'singular_name' => _x('Sobre', 'post type singular name'),
			'add_new' => _x('Adicionar novo', 'name'),
			'add_new_item' => __('Adicionar novo Sobre'),
			'edit_item' => __('Editar Sobre'),
			'new_item' => __('Novo Sobre'),
			'all_items' => __('Todos os Sobres'),
			'view_item' => __('Ver Sobre'),
			'search_items' => __('Pesquisar Sobre'),
			'not_found' =>  __('Nenhum Sobre encontrado'),
			'not_found_in_trash' => __('Nenhum Sobre encontrado na lixeira'),
			'parent_item_colon' => '',
			'menu_name' => 'Sobre'
		);

		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'rewrite' => true,
			'menu_icon' => 'dashicons-index-card',
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title', 'editor', 'thumbnail'),
		);

		return register_post_type($this->slug, $args);
	}

	/**
	 * Register metaboxes.
	 *
	 * @return mixed
	 */
	public function metaBoxes()
	{
		return add_meta_box("information", "Informações", array($this, 'fieldsInformation'), $this->slug, "normal", "high");
	}

	/**
	 * Register html to metabox information.
	 *
	 * @param $post
	 */
	public function fieldsInformation($post)
	{
		$html = '<table class="form-table"><tbody>';

		$value = get_post_meta( $post->ID, 'information-type', true);

		$html .= '<tr>';
		$html .= '<th class="scope">';
		$html .= '<label for="information-type"><strong>Tipo </strong>: <br></label>';
		$html .= '</th>';
		$html .= '<td>';
		$html .= '<select id="information-type" name="information-type">';
		$html .= '<option value="company" '.($value === 'company' ? 'selected' : null).'>A empresa</option>';
		$html .= '<option value="mission" '.($value === 'mission' ? 'selected' : null).'>Missão</option>';
		$html .= '<option value="vision" '.($value === 'vision' ? 'selected' : null).'>Visão</option>';
    $html .= '<option value="values" '.($value === 'values' ? 'selected' : null).'>Valores</option>';
		$html .= '<option value="partners" '.($value === 'partners' ? 'selected' : null).'>Parceiros/Clientes</option>';
		$html .= '</select>';
		$html .= '</td>';
		$html .= '</tr>';
		$html .= "</tbody></table>";

		echo $html;
	}

	/**
	 * Execute when save post
	 *
	 * @param $post_id
	 */
	public function savePost($post_id)
	{
		if(!empty($_POST) && isset($_POST['information-type']) && !empty($_POST['information-type']))
		{
			$value = esc_attr($_POST['information-type']);
			update_post_meta( $post_id, 'information-type', $value);
		}
	}
}

$GLOBALS['about-pt'] = new AboutPT();
