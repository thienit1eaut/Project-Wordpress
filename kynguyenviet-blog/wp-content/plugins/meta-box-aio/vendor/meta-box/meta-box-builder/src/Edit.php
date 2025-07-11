<?php
namespace MBB;

use MBBParser\Parsers\Base as BaseParser;
use MBBParser\Parsers\MetaBox as Parser;
use MetaBox\Support\Data as DataHelper;
use MBB\Helpers\Data;

class Edit extends BaseEditPage {
	public function add_meta_boxes( $meta_boxes ) {
		$meta_boxes = parent::add_meta_boxes( $meta_boxes );

		$meta_boxes[] = [
			'title'      => esc_html__( 'Documentation', 'meta-box' ),
			'id'         => 'mbb-documentation',
			'post_types' => [ $this->post_type ],
			'context'    => 'side',
			'priority'   => 'low',
			'fields'     => [
				[
					'type' => 'custom_html',
					'std'  => '<ul>
						<li><span class="dashicons dashicons-media-document"></span> <a href="https://docs.metabox.io/extensions/meta-box-builder/" target="_blank">' . esc_html__( 'Documentation', 'meta-box' ) . '</a></li>
						<li><span class="dashicons dashicons-video-alt3"></span> <a href="https://youtu.be/_DaFUt92kYY" target="_blank">' . esc_html__( 'How to create custom fields', 'meta-box' ) . '</a></li>
						<li><span class="dashicons dashicons-video-alt3"></span> <a href="https://youtu.be/WWeaM5vIAwM" target="_blank">' . esc_html__( 'Understanding field types', 'meta-box' ) . '</a></li>
					</ul>',
				],
			],
		];

		return $meta_boxes;
	}

	public function enqueue() {
		wp_enqueue_code_editor( [ 'type' => 'application/x-httpd-php' ] );
		wp_enqueue_style( 'mbb-app', MBB_URL . 'assets/css/style.css', [ 'wp-components', 'code-editor' ], MBB_VER );
		wp_enqueue_script( 'mbb-app', MBB_URL . 'assets/js/app.js', [ 'jquery', 'wp-element', 'wp-components', 'wp-i18n', 'clipboard', 'wp-color-picker', 'code-editor' ], MBB_VER, true );

		$fields = get_post_meta( get_the_ID(), 'fields', true ) ?: [];
		$fields = array_values( $fields );

		$data = [
			'fields'        => $fields,
			'settings'      => get_post_meta( get_the_ID(), 'settings', true ),
			'data'          => get_post_meta( get_the_ID(), 'data', true ),

			'rest'          => untrailingslashit( rest_url() ),
			'nonce'         => wp_create_nonce( 'wp_rest' ),

			'postTypes'     => Data::get_post_types(),
			'taxonomies'    => Data::get_taxonomies(),
			'settingsPages' => Data::get_setting_pages(),
			'templates'     => Data::get_templates(),
			'icons'         => DataHelper::get_dashicons(),

			// Extensions check.
			'extensions'    => [
				'blocks'             => Data::is_extension_active( 'mb-blocks' ),
				'columns'            => Data::is_extension_active( 'meta-box-columns' ),
				'commentMeta'        => Data::is_extension_active( 'mb-comment-meta' ),
				'conditionalLogic'   => Data::is_extension_active( 'meta-box-conditional-logic' ),
				'customTable'        => Data::is_extension_active( 'mb-custom-table' ),
				'frontendSubmission' => Data::is_extension_active( 'mb-frontend-submission' ),
				'group'              => Data::is_extension_active( 'meta-box-group' ),
				'includeExclude'     => Data::is_extension_active( 'meta-box-include-exclude' ),
				'settingsPage'       => Data::is_extension_active( 'mb-settings-page' ),
				'showHide'           => Data::is_extension_active( 'meta-box-show-hide' ),
				'tabs'               => Data::is_extension_active( 'meta-box-tabs' ),
				'termMeta'           => Data::is_extension_active( 'mb-term-meta' ),
				'userMeta'           => Data::is_extension_active( 'mb-user-meta' ),
			],
		];

		$data = apply_filters( 'mbb_app_data', $data );

		wp_localize_script( 'mbb-app', 'MbbApp', $data );
	}

	public function save( $post_id, $post ) {
		// Save data for JavaScript (serialized arrays).
		$request     = rwmb_request();
		$base_parser = new BaseParser;

		$base_parser->set_settings( $request->post( 'settings' ) )->parse_boolean_values()->parse_numeric_values();
		update_post_meta( $post_id, 'settings', $base_parser->get_settings() );

		$base_parser->set_settings( $request->post( 'fields' ) )->parse_boolean_values()->parse_numeric_values();
		update_post_meta( $post_id, 'fields', $base_parser->get_settings() );

		$base_parser->set_settings( $request->post( 'data' ) )->parse_boolean_values()->parse_numeric_values();
		update_post_meta( $post_id, 'data', $base_parser->get_settings() );

		// Save parsed data for PHP (serialized array).
		$submitted_data = $_POST;

		// Set post title and slug in case they're auto-generated.
		$submitted_data['post_title'] = $post->post_title;
		$submitted_data['post_name']  = $post->post_name;

		$parser = new Parser( $submitted_data );
		$parser->parse();
		
		update_post_meta( $post_id, 'meta_box', $parser->get_settings() );

		// Allow developers to add actions after saving the meta box.
		do_action( 'mbb_after_save', $parser, $post_id, $submitted_data );
	}
}
