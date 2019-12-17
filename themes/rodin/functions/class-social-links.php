<?php
/**
 * Class Social Links
 *
 * @package ARMIX
 */

namespace ARMIX;

/**
 * Armix Social Links
 */
class Social_Links {

	/**
	 * Email
	 *
	 * @var bool
	 */
	public $email;

	/**
	 * Twitter
	 *
	 * @var bool
	 */
	public $twitter;

	/**
	 * Facebook
	 *
	 * @var bool
	 */
	public $facebook;

	/**
	 * Instagram
	 *
	 * @var bool
	 */
	public $instagram;

	/**
	 * Google Plus
	 *
	 * @var bool
	 */
	public $google_plus;

	/**
	 * LinkedIn
	 *
	 * @var bool
	 */
	public $linkedin;

	/**
	 * Youtube
	 *
	 * @var bool
	 */
	public $youtube;

	/**
	 * Menu Parent Slug
	 *
	 * @var string
	 */
	public $parent_slug;

	/**
	 * Slug
	 *
	 * @var string
	 */
	public $slug;

	/**
	 * Slug
	 *
	 * @var string
	 */
	public $social_links_array;

	/**
	 * Constructor
	 */
	public function __construct() {

		$this->email = true;
		$this->twitter = true;
		$this->facebook = true;
		$this->instagram = false;
		$this->google_plus = false;
		$this->linkedin = true;
		$this->youtube = false;

		$this->slug = 'site_options_social_links';

		$this->option_page();
		$this->fields();

		$this->social_links_array = array();
		if ( $this->email ) {
			$this->social_links_array[] = 'email';
		}
		if ( $this->twitter ) {
			$this->social_links_array[] = 'twitter';
		}
		if ( $this->facebook ) {
			$this->social_links_array[] = 'facebook';
		}
		if ( $this->instagram ) {
			$this->social_links_array[] = 'instagram';
		}
		if ( $this->google_plus ) {
			$this->social_links_array[] = 'google_plus';
		}
		if ( $this->linkedin ) {
			$this->social_links_array[] = 'linkedin';
		}
		if ( $this->youtube ) {
			$this->social_links_array[] = 'youtube';
		}
	}

	/**
	 * Option Page
	 */
	public function option_page() {
		if ( function_exists( 'acf_add_options_page' ) ) {
			acf_add_options_sub_page(
				array(
					'menu_slug' => $this->slug,
					'page_title' => 'Redes Sociales',
					'menu_title' => 'Redes Sociales',
					'parent_slug' => 'site_options',
				),
			);
		}
	}

	/**
	 * Filds
	 */
	public function fields() {

		if ( function_exists( 'acf_add_local_field_group' ) ) {

			$fields = array();

			if ( $this->email ) {
				$fields[] = array(
					'key' => 'email_link',
					'label' => 'Email',
					'name' => 'email_link',
					'type' => 'email',
					'default_value' => 'email@email.com',
					'placeholder' => 'email@email.com',
				);
			}

			if ( $this->facebook ) {
				$fields[] = array(
					'key' => 'facebook_link',
					'label' => 'Facebook',
					'name' => 'facebook_link',
					'type' => 'url',
					'default_value' => 'https://facebook.com/',
					'placeholder' => 'https://facebook.com/usuario',
				);
			}

			if ( $this->twitter ) {
				$fields[] = array(
					'key' => 'twitter_link',
					'label' => 'Twitter',
					'name' => 'twitter_link',
					'type' => 'url',
					'default_value' => 'https://twitter.com/',
					'placeholder' => 'https://twitter.com/usuario',
				);
			}

			if ( $this->linkedin ) {
				$fields[] = array(
					'key' => 'linkedin_link',
					'label' => 'LinkedIn',
					'name' => 'linkedin_link',
					'type' => 'url',
					'default_value' => 'https://linkedin.com/',
					'placeholder' => 'https://linkedin.com/usuario',
				);
			}

			if ( $this->google_plus ) {
				$fields[] = array(
					'key' => 'google_plus_link',
					'label' => 'Google Plus',
					'name' => 'google_plus_link',
					'type' => 'url',
					'default_value' => 'https://plus.google.com/',
					'placeholder' => 'https://plus.google.com/usuario',
				);
			}

			if ( $this->instagram ) {
				$fields[] = array(
					'key' => 'instagram_link',
					'label' => 'Instagram',
					'name' => 'instagram_link',
					'type' => 'url',
					'default_value' => 'https://instagram.com/',
					'placeholder' => 'https://instagram.com/usuario',
				);
			}

			if ( $this->youtube ) {
				$fields[] = array(
					'key' => 'youtube_link',
					'label' => 'Youtube',
					'name' => 'youtube_link',
					'type' => 'url',
					'default_value' => 'https://youtube.com/',
					'placeholder' => 'https://youtube.com/usuario',
				);
			}

			acf_add_local_field_group(
				array(
					'key' => 'social_links_group',
					'title' => 'Links',
					'fields' => $fields,
					'location' =>
						array(
							array(
								array(
									'param' => 'options_page',
									'operator' => '==',
									'value' => $this->slug,
								),
							),
						),
					'menu_order' => 1,
					'position' => 'normal',
					'style' => 'default',
					'label_placement' => 'left',
					'instruction_placement' => 'label',
					'active' => 1,
				)
			);

		}
	}

	/**
	 * Social Links Array
	 *
	 * @return array
	 */
	public function get_array() {
		return $this->social_links_array;
	}

}

new Social_Links();
