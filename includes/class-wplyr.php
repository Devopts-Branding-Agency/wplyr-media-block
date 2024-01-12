<?php
/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://devopts.com
 * @since      1.0.0
 *
 * @package    Wplyr
 * @subpackage Wplyr/includes
 */

// use the carbon fields block class.
use Carbon_Fields\Carbon_Fields;
use Carbon_Fields\Container;
use Carbon_Fields\Block;
use Carbon_Fields\Field;

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Wplyr
 * @subpackage Wplyr/includes
 * @author     WeCodify Co. <info@devopts.com>
 */
class Wplyr {

	const languages = array(
		'ab' => 'Abkhazian',
		'aa' => 'Afar',
		'af' => 'Afrikaans',
		'ak' => 'Akan',
		'sq' => 'Albanian',
		'am' => 'Amharic',
		'ar' => 'Arabic',
		'an' => 'Aragonese',
		'hy' => 'Armenian',
		'as' => 'Assamese',
		'av' => 'Avaric',
		'ae' => 'Avestan',
		'ay' => 'Aymara',
		'az' => 'Azerbaijani',
		'bm' => 'Bambara',
		'ba' => 'Bashkir',
		'eu' => 'Basque',
		'be' => 'Belarusian',
		'bn' => 'Bengali',
		'bh' => 'Bihari languages',
		'bi' => 'Bislama',
		'bs' => 'Bosnian',
		'br' => 'Breton',
		'bg' => 'Bulgarian',
		'my' => 'Burmese',
		'ca' => 'Catalan, Valencian',
		'km' => 'Central Khmer',
		'ch' => 'Chamorro',
		'ce' => 'Chechen',
		'ny' => 'Chichewa, Chewa, Nyanja',
		'zh' => 'Chinese',
		'cu' => 'Church Slavonic, Old Bulgarian, Old Church Slavonic',
		'cv' => 'Chuvash',
		'kw' => 'Cornish',
		'co' => 'Corsican',
		'cr' => 'Cree',
		'hr' => 'Croatian',
		'cs' => 'Czech',
		'da' => 'Danish',
		'dv' => 'Divehi, Dhivehi, Maldivian',
		'nl' => 'Dutch, Flemish',
		'dz' => 'Dzongkha',
		'en' => 'English',
		'eo' => 'Esperanto',
		'et' => 'Estonian',
		'ee' => 'Ewe',
		'fo' => 'Faroese',
		'fj' => 'Fijian',
		'fi' => 'Finnish',
		'fr' => 'French',
		'ff' => 'Fulah',
		'gd' => 'Gaelic, Scottish Gaelic',
		'gl' => 'Galician',
		'lg' => 'Ganda',
		'ka' => 'Georgian',
		'de' => 'German',
		'ki' => 'Gikuyu, Kikuyu',
		'el' => 'Greek (Modern)',
		'kl' => 'Greenlandic, Kalaallisut',
		'gn' => 'Guarani',
		'gu' => 'Gujarati',
		'ht' => 'Haitian, Haitian Creole',
		'ha' => 'Hausa',
		'he' => 'Hebrew',
		'hz' => 'Herero',
		'hi' => 'Hindi',
		'ho' => 'Hiri Motu',
		'hu' => 'Hungarian',
		'is' => 'Icelandic',
		'io' => 'Ido',
		'ig' => 'Igbo',
		'id' => 'Indonesian',
		'ia' => 'Interlingua (International Auxiliary Language Association)',
		'ie' => 'Interlingue',
		'iu' => 'Inuktitut',
		'ik' => 'Inupiaq',
		'ga' => 'Irish',
		'it' => 'Italian',
		'ja' => 'Japanese',
		'jv' => 'Javanese',
		'kn' => 'Kannada',
		'kr' => 'Kanuri',
		'ks' => 'Kashmiri',
		'kk' => 'Kazakh',
		'rw' => 'Kinyarwanda',
		'kv' => 'Komi',
		'kg' => 'Kongo',
		'ko' => 'Korean',
		'kj' => 'Kwanyama, Kuanyama',
		'ku' => 'Kurdish',
		'ky' => 'Kyrgyz',
		'lo' => 'Lao',
		'la' => 'Latin',
		'lv' => 'Latvian',
		'lb' => 'Letzeburgesch, Luxembourgish',
		'li' => 'Limburgish, Limburgan, Limburger',
		'ln' => 'Lingala',
		'lt' => 'Lithuanian',
		'lu' => 'Luba-Katanga',
		'mk' => 'Macedonian',
		'mg' => 'Malagasy',
		'ms' => 'Malay',
		'ml' => 'Malayalam',
		'mt' => 'Maltese',
		'gv' => 'Manx',
		'mi' => 'Maori',
		'mr' => 'Marathi',
		'mh' => 'Marshallese',
		'ro' => 'Moldovan, Moldavian, Romanian',
		'mn' => 'Mongolian',
		'na' => 'Nauru',
		'nv' => 'Navajo, Navaho',
		'nd' => 'Northern Ndebele',
		'ng' => 'Ndonga',
		'ne' => 'Nepali',
		'se' => 'Northern Sami',
		'no' => 'Norwegian',
		'nb' => 'Norwegian Bokmål',
		'nn' => 'Norwegian Nynorsk',
		'ii' => 'Nuosu, Sichuan Yi',
		'oc' => 'Occitan (post 1500)',
		'oj' => 'Ojibwa',
		'or' => 'Oriya',
		'om' => 'Oromo',
		'os' => 'Ossetian, Ossetic',
		'pi' => 'Pali',
		'pa' => 'Panjabi, Punjabi',
		'ps' => 'Pashto, Pushto',
		'fa' => 'Persian',
		'pl' => 'Polish',
		'pt' => 'Portuguese',
		'qu' => 'Quechua',
		'rm' => 'Romansh',
		'rn' => 'Rundi',
		'ru' => 'Russian',
		'sm' => 'Samoan',
		'sg' => 'Sango',
		'sa' => 'Sanskrit',
		'sc' => 'Sardinian',
		'sr' => 'Serbian',
		'sn' => 'Shona',
		'sd' => 'Sindhi',
		'si' => 'Sinhala, Sinhalese',
		'sk' => 'Slovak',
		'sl' => 'Slovenian',
		'so' => 'Somali',
		'st' => 'Sotho, Southern',
		'nr' => 'South Ndebele',
		'es' => 'Spanish, Castilian',
		'su' => 'Sundanese',
		'sw' => 'Swahili',
		'ss' => 'Swati',
		'sv' => 'Swedish',
		'tl' => 'Tagalog',
		'ty' => 'Tahitian',
		'tg' => 'Tajik',
		'ta' => 'Tamil',
		'tt' => 'Tatar',
		'te' => 'Telugu',
		'th' => 'Thai',
		'bo' => 'Tibetan',
		'ti' => 'Tigrinya',
		'to' => 'Tonga (Tonga Islands)',
		'ts' => 'Tsonga',
		'tn' => 'Tswana',
		'tr' => 'Turkish',
		'tk' => 'Turkmen',
		'tw' => 'Twi',
		'ug' => 'Uighur, Uyghur',
		'uk' => 'Ukrainian',
		'ur' => 'Urdu',
		'uz' => 'Uzbek',
		've' => 'Venda',
		'vi' => 'Vietnamese',
		'vo' => 'Volap_k',
		'wa' => 'Walloon',
		'cy' => 'Welsh',
		'fy' => 'Western Frisian',
		'wo' => 'Wolof',
		'xh' => 'Xhosa',
		'yi' => 'Yiddish',
		'yo' => 'Yoruba',
		'za' => 'Zhuang, Chuang',
		'zu' => 'Zulu'
	);

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string $plugin_name The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string $version The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
		if ( defined( 'WPLYR_VERSION' ) ) {
			$this->version = WPLYR_VERSION;
		} else {
			$this->version = '1.0.0';
		}
		$this->plugin_name = 'wplyr';

		// call the method to invoke all hooks
		$this->define_hooks();
	}

	/**
	 * Register all of the hooks related to the plugin functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_hooks() {
		add_action( 'plugin_action_links_wplyr-media-block/wplyr.php', [ $this, 'plugin_links' ] );
		add_action( 'after_setup_theme', [ $this, 'load_carbon_fields' ] );
		add_action( 'plugins_loaded', [ $this, 'set_locale' ] );
		add_action( 'carbon_fields_register_fields', [ $this, 'register_fields' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'load_assets' ] );
		add_action( 'admin_enqueue_scripts', [ $this, 'load_assets' ] );
		add_action( 'carbon_fields_container_wplyr_before_sidebar', [ $this, 'options_sidebar' ] );
		add_action( 'carbon_fields_container_wplyr_before_fields', [ $this, 'options_top' ] );
	}

	/**
	 * Applied to the list of links to display on the plugins page (beside the activate/deactivate links).
	 *
	 * @param array $links array of action links for the plugin.
	 *
	 * @return array $links modified array of links.
	 *
	 * @since    1.0.0
	 * @access   public
	 */
	public function plugin_links( $links ) {

		// new array of links
		$links_to_add = [];

		// insert our custom link to settings page.
		$links_to_add[] = '<a href="' . esc_url( get_admin_url( null, 'options-general.php?page=wplyr-settings' ) ) . '">' . __( 'Settings', 'wplyr' ) . '</a>';

		// return the merged array to the action.
		return array_merge( $links_to_add, $links );
	}

	/**
	 * Load the required Carbon Fields framework for this plugin.
	 *
	 * Create an instance of the Carbon Fields  which will be used to register the fields
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   public
	 */
	public function load_carbon_fields() {
		require_once( WPLYR_PATH . 'vendor/autoload.php' );
		Carbon_Fields::boot();
	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Wplyr_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   public
	 */
	public function set_locale() {
		// Load the plugin text domain for translation.
		load_plugin_textdomain( 'wplyr', false, dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/' );
	}

	/**
	 * Registers and enqueues the CSS and JS.
	 *
	 * Uses the wp_enqueue_style and wp_enqueue_script functions to add
	 * the files to the pages.
	 *
	 * @since    1.0.0
	 * @access   public
	 */
	public function load_assets() {

		// register CSS for the plugin
		wp_register_style( 'plyr', WPLYR_URL . 'assets/css/plyr.min.css', false, PLYR_VERSION );
		wp_register_style( 'wplyr', WPLYR_URL . 'assets/css/wplyr.css', false, WPLYR_VERSION );
		wp_register_style( 'carbon-fields-admin', WPLYR_URL . 'assets/css/carbon-fields-admin.css', false, WPLYR_VERSION );

		// register JS for the plugin
		wp_register_script( 'plyr', WPLYR_URL . 'assets/js/plyr.min.js', false, PLYR_VERSION, true );
		wp_register_script( 'wplyr', WPLYR_URL . 'assets/js/wplyr.js', false, WPLYR_VERSION, true );

		// admin only css.
		if ( is_admin() ) {
			wp_enqueue_style( 'carbon-fields-admin' );
		}

		// enqueue css.
		wp_enqueue_style( 'plyr' );
		wp_enqueue_style( 'wplyr' );
		wp_add_inline_style( 'wplyr', $this->set_ui_color() );

		//enqueue js.
		wp_enqueue_script( 'plyr' );
		wp_enqueue_script( 'wplyr' );
		wp_localize_script( 'wplyr', 'wplyr', $this->generate_settings() );
	}

	/**
	 * Player Settings configuration.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function generate_settings() {
		// default player settings.
		$defaults = [
			'iconUrl'    => WPLYR_URL . 'assets/images/plyr.svg',
			'blankVideo' => WPLYR_URL . 'assets/video/blank.mp4',
			'controls'   => [
				'play-large',
				'play',
				'progress',
				'current-time',
				'mute',
				'volume',
				'captions',
				'settings',
				'pip',
				'airplay',
				'fullscreen'
			],
			'settings'   => [ 'captions', 'quality', 'speed' ],
			'seekTime'   => 10
		];

		// empty argument array
		$args = [];

		if ( $controls = carbon_get_theme_option( 'wplyr_controls' ) ) {
			$args['controls'] = $controls;
		}

		if ( $settings = carbon_get_theme_option( 'wplyr_settings' ) ) {
			$args['settings'] = $settings;
		}

		if ( $seektime = carbon_get_theme_option( 'wplyr_seektime' ) ) {
			$args['seekTime'] = $seektime;
		}

		if ( carbon_get_theme_option( 'wplyr_monetization' ) && carbon_get_theme_option( 'wplyr_publisher_id' ) ) {
			$args['ads']['enabled']     = carbon_get_theme_option( 'wplyr_monetization' );
			$args['ads']['publisherId'] = carbon_get_theme_option( 'wplyr_publisher_id' );
		}

		// merging together an array of arguments and an array of default values.
		$args = wp_parse_args( $args, $defaults );

		// return the final args.
		return $args;
	}

	/**
	 * Sets the plyr UI color
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_ui_color() {

		// modify the variables from options.
		$accent_color = carbon_get_theme_option( 'wplyr_accent_color' ) ? carbon_get_theme_option( 'wplyr_accent_color' ) : '#eb4d4b';

		// return the style needed
		return ':root { --plyr-color-main: ' . $accent_color . '; }';
	}

	/**
	 * Register the Gutenberg block and  the plugin option pages.
	 *
	 * Uses the Carbon Fields Block class in order to create the plugin's block
	 * and register all the fields.
	 * Uses the Carbon Fields Container class in order to create the plugin's
	 * options page and register all the fields.
	 *
	 *
	 * @since    1.0.0
	 * @access   public
	 */
	public function register_fields() {

		// gutenberg block
		$block = Block::make( __( 'WPlyr Media' ) );

		// options container.
		$options = Container::make( 'theme_options', __( 'WPlyr', 'wplyr' ) );

		// options fields.
		$option_fields = array(
			Field::make( 'color', 'wplyr_accent_color', __( 'Player Color', 'wplyr' ) )
			     ->set_required( true )
			     ->set_default_value( '#fca311' ),
			Field::make( 'set', 'wplyr_controls', __( 'Control Visibility', 'wplyr' ) )
			     ->set_options( array(
				     'play-large'   => __( 'Play Large', 'wplyr' ),
				     'restart'      => __( 'Restart', 'wplyr' ),
				     'rewind'       => __( 'Rewind', 'wplyr' ),
				     'play'         => __( 'Play', 'wplyr' ),
				     'fast-forward' => __( 'Fast Forward', 'wplyr' ),
				     'progress'     => __( 'Progress', 'wplyr' ),
				     'current-time' => __( 'Current Time', 'wplyr' ),
				     'duration'     => __( 'Duration', 'wplyr' ),
				     'mute'         => __( 'Mute', 'wplyr' ),
				     'volume'       => __( 'Volume', 'wplyr' ),
				     'captions'     => __( 'Closed Captions', 'wplyr' ),
				     'settings'     => __( 'Settings', 'wplyr' ),
				     'pip'          => __( 'Picture-in-Picture', 'wplyr' ),
				     'airplay'      => __( 'Airplay', 'wplyr' ),
				     'download'     => __( 'Download', 'wplyr' ),
				     'fullscreen'   => __( 'Fullscreen', 'wplyr' ),
			     ) )
			     ->set_default_value( [
				     'play-large',
				     'play',
				     'progress',
				     'current-time',
				     'mute',
				     'volume',
				     'captions',
				     'settings',
				     'pip',
				     'airplay',
				     'fullscreen'
			     ] ),
			Field::make( 'set', 'wplyr_settings', __( 'Settings controls', 'wplyr' ) )
			     ->set_options( array(
				     'speed'    => __( 'Speed', 'wplyr' ),
				     'quality'  => __( 'Quality', 'wplyr' ),
				     'captions' => __( 'Captions', 'wplyr' ),
			     ) )
			     ->set_default_value( [ 'captions', 'quality', 'speed' ] ),
			Field::make( 'text', 'wplyr_seektime', __( 'Seek Time', 'wplyr' ) )
			     ->set_required( true )
			     ->set_attribute( 'type', 'number' )
			     ->set_attribute( 'min', 5 )
			     ->set_attribute( 'max', 60 )
			     ->set_default_value( 10 )
			     ->set_conditional_logic( array(
				     'relation' => 'OR',
				     array(
					     'field'   => 'wplyr_controls',
					     'value'   => array( 'rewind' ),
					     'compare' => 'INCLUDES',
				     ),
				     array(
					     'field'   => 'wplyr_controls',
					     'value'   => array( 'fast-forward' ),
					     'compare' => 'INCLUDES',
				     ),
			     ) )
		);

		// fields for blocks/post meta.
		$fields = array(
			Field::make( 'select', 'wplyr_type', __( 'Media Type', 'wplyr' ) )
			     ->set_default_value( 'video' )
			     ->set_options( array(
				     'video'   => __( 'Video', 'wplyr' ),
				     'audio'   => __( 'Audio', 'wplyr' ),
				     'youtube' => __( 'YouTube', 'wplyr' ),
				     'vimeo'   => __( 'Vimeo', 'wplyr' ),
			     ) ),
			Field::make( 'set', 'wplyr_media_options', __( 'Media Options', 'wplyr' ) )
			     ->set_options( array(
				     'muted'    => __( 'Muted', 'wplyr' ),
				     'loop'     => __( 'Loop', 'wplyr' ),
				     'autoplay' => __( 'Autoplay', 'wplyr' ),
			     ) )
			     ->set_conditional_logic( array(
				     'relation' => 'OR',
				     array(
					     'field'   => 'wplyr_type',
					     'value'   => [ 'video' ],
					     'compare' => 'INCLUDES',
				     ),
				     array(
					     'field'   => 'wplyr_type',
					     'value'   => [ 'audio' ],
					     'compare' => 'INCLUDES',
				     ),
			     ) ),
			Field::make( 'image', 'wplyr_video_poster', __( 'Video Poster', 'wplyr' ) )
			     ->set_value_type( 'url' )
			     ->set_conditional_logic( array(
				     array(
					     'field'   => 'wplyr_type',
					     'value'   => 'video',
					     'compare' => '=',
				     )
			     ) ),
			Field::make( 'complex', 'wplyr_video_sources', __( 'Video Source', 'wplyr' ) )
			     ->set_layout( 'tabbed-horizontal' )
			     ->setup_labels( array(
				     'plural_name'   => 'Video Sources',
				     'singular_name' => 'Video Source',
			     ) )
			     ->set_conditional_logic( array(
				     array(
					     'field'   => 'wplyr_type',
					     'value'   => 'video',
					     'compare' => '=',
				     )
			     ) )
			     ->add_fields( array(
				     Field::make( 'select', 'size', __( 'Video Resolution', 'wplyr' ) )
				          ->set_width( 20 )
				          ->set_default_value( '480' )
				          ->set_options( array(
					          '240'  => __( '240p', 'wplyr' ),
					          '360'  => __( '360p', 'wplyr' ),
					          '480'  => __( '480p', 'wplyr' ),
					          '576'  => __( '576p', 'wplyr' ),
					          '720'  => __( '720p', 'wplyr' ),
					          '1080' => __( '1080p', 'wplyr' ),
					          '1440' => __( '1440p', 'wplyr' ),
					          '2160' => __( '2160p 4K', 'wplyr' ),
					          '2880' => __( '2880p 4K Ultra HD', 'wplyr' ),
					          '4320' => __( '4320p 8K', 'wplyr' ),
				          ) ),
				     Field::make( 'select', 'mime', __( 'Video Format', 'wplyr' ) )
				          ->set_width( 20 )
				          ->set_default_value( 'video/mp4' )
				          ->set_options( array(
					          'video/mp4'  => __( 'MP4', 'wplyr' ),
					          'video/webm' => __( 'WebM', 'wplyr' ),
					          'video/ogg'  => __( 'Ogg', 'wplyr' ),
				          ) ),
				     Field::make( 'text', 'link', __( 'Video File Link', 'wplyr' ) )
				          ->set_width( 60 )
				          ->set_required( true ),
			     ) )
			     ->set_header_template( '<%- size %>p' ),
			Field::make( 'complex', 'wplyr_video_captions', __( 'Video Caption', 'wplyr' ) )
			     ->set_layout( 'tabbed-horizontal' )
			     ->setup_labels( array(
				     'plural_name'   => 'Video Captions',
				     'singular_name' => 'Video Caption',
			     ) )
			     ->set_conditional_logic( array(
				     array(
					     'field'   => 'wplyr_type',
					     'value'   => 'video',
					     'compare' => '=',
				     )
			     ) )
			     ->add_fields( array(
				     Field::make( 'html', 'crb_html', __( 'Section Description' ) )
				          ->set_html( __( 'Only <a href="https://developer.mozilla.org/en-US/docs/Web/API/WebVTT_API#WebVTT_files" target="_blank">WebVTT</a> caption sources are supported.', 'wplyr' ) ),
				     Field::make( 'select', 'language', __( 'Caption Language', 'wplyr' ) )
				          ->set_width( 20 )
				          ->set_default_value( 'en' )
				          ->set_options( self::languages ),
				     Field::make( 'text', 'label', __( 'Caption Label' ) )
				          ->set_width( 20 )
				          ->set_required( true ),
				     Field::make( 'text', 'link', __( 'Caption File Link', 'wplyr' ) )
				          ->set_width( 60 )
				          ->set_required( true )
			     ) )
			     ->set_header_template( '<%- label %>' ),
			Field::make( 'complex', 'wplyr_audio_sources', __( 'Audio Source', 'wplyr' ) )
			     ->set_layout( 'tabbed-horizontal' )
			     ->setup_labels( array(
				     'plural_name'   => 'Audio Sources',
				     'singular_name' => 'Audio Source',
			     ) )
			     ->set_conditional_logic( array(
				     array(
					     'field'   => 'wplyr_type',
					     'value'   => 'audio',
					     'compare' => '=',
				     )
			     ) )
			     ->add_fields( array(
				     Field::make( 'select', 'mime', __( 'Audio Format', 'wplyr' ) )
				          ->set_width( 20 )
				          ->set_default_value( 'audio/mp3' )
				          ->set_options( array(
					          'audio/mp3' => __( 'Mp3', 'wplyr' ),
					          'audio/ogg' => __( 'Ogg', 'wplyr' ),
					          'audio/wav' => __( 'Wav', 'wplyr' ),
				          ) ),
				     Field::make( 'text', 'link', __( 'Audio File Link', 'wplyr' ) )
				          ->set_width( 80 )
				          ->set_required( true ),
			     ) ),
			Field::make( 'text', 'wplyr_youtube_sources', __( 'Youtube Video Link', 'wplyr' ) )
			     ->set_conditional_logic( array(
				     array(
					     'field'   => 'wplyr_type',
					     'value'   => 'youtube',
					     'compare' => '=',
				     )
			     ) ),

			Field::make( 'text', 'wplyr_vimeo_sources', __( 'Vimeo Video Link', 'wplyr' ) )
			     ->set_conditional_logic( array(
				     array(
					     'field'   => 'wplyr_type',
					     'value'   => 'vimeo',
					     'compare' => '=',
				     )
			     ) ),
		);

		// set the options and fields for the block.
		$block->set_icon( 'format-video' )
		      ->set_category( 'media' )
		      ->set_description( __( 'Embeds a nice player for HTML, YouTube and Vimeo videos.', 'wplyr' ) )
		      ->set_keywords( [ __( 'video', 'wplyr' ), __( 'youtube', 'wplyr' ), __( 'vimeo', 'wplyr' ) ] )
		      ->set_mode( 'both' )
		      ->add_fields( $fields )
		      ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
			      // type of the block.
			      $type = $fields['wplyr_type'];
			      // slug of the template to load.
			      $template_slug = 'template-' . $type;
			      // load the template based on type.
			      $this->load_template( $template_slug, [ 'data' => $fields, 'attributes' => $attributes ] );
		      } );

		// set the fields for the options container.
		$options->set_page_file( 'wplyr-settings' )
		        ->set_page_parent( 'options-general.php' )
		        ->add_fields( $option_fields );
	}

	/**
	 * Retrieve the name of the highest priority template file that exists.
	 *
	 * Searches in the STYLESHEETPATH before TEMPLATEPATH so that themes which
	 * inherit from a parent theme can just overload one file. If the template is
	 * not found in either of those, it looks in the theme-compat folder last.
	 *
	 * Taken from bbPress
	 *
	 * @param string $file Template file(s) to search for.
	 * @param array $template_args $load If true the template file will be loaded if it is found.
	 *
	 * @return string if $load in $template_args is false then return file contents.
	 * @since v1.0.0
	 *
	 */
	public static function load_template( $file, $template_args = array() ) {

		$load = true;

		// merging together an array of arguments and an array of default values.
		$template_args = wp_parse_args(
			$template_args,
			array(
				'load' => true,
			)
		);

		// break the entire template arguments to it's individual variable.
		extract( $template_args );

		// file name to load.
		$file_handle = $file;

		// $prefix.
		$plugin_prefix = 'wplyr';

		// $slug.
		$slug = str_replace( 'template-', '', $file_handle );

		if ( file_exists( trailingslashit( get_stylesheet_directory() ) . $plugin_prefix . $file . '.php' ) ) {
			// Check child theme first.
			$file = trailingslashit( get_stylesheet_directory() ) . $plugin_prefix . $file . '.php';
		} elseif ( file_exists( trailingslashit( get_template_directory() ) . $plugin_prefix . $file . '.php' ) ) {
			// Check parent theme next.
			$file = trailingslashit( get_template_directory() ) . $plugin_prefix . $file . '.php';
		} elseif ( file_exists( trailingslashit( WPLYR_PATH ) . 'views/' . $file . '.php' ) ) {
			$file = trailingslashit( WPLYR_PATH ) . 'views/' . $file . '.php';
		} else {
			// Return empty if the file was not found.
			return false;
		}

		// start output buffering.
		ob_start();

		// action to perform before the file is loaded.
		do_action( 'wplyr_template_start', $slug );

		// require the file so that the variable are passed.
		$require_success = require $file;

		// get buffer content and clean the buffer.
		$file_data = ob_get_clean();

		// action to perform after the file is loaded.
		do_action( 'wplyr_template_end', $slug );

		if ( ! $load ) {

			if ( false === $require_success ) {
				// if the file is requested not to be echoed and the data is empty then return empty.
				return false;
			} else {
				// if the file is requested not to be echoed then return file data.
				return $file_data;
			}
		}

		// echo the file data.
		echo $file_data;
	}

	/**
	 * Sidebar output on options page.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	public function options_top() {
		$this->load_template( 'admin/template-top', [ 'plugin_name' => $this->plugin_name ] );
	}

	/**
	 * Sidebar output on options page.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	public function options_sidebar() {
		$this->load_template( 'admin/template-sidebar', [ 'plugin_name' => $this->plugin_name ] );
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @return    string    The name of the plugin.
	 * @since     1.0.0
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @return    string    The version number of the plugin.
	 * @since     1.0.0
	 */
	public function get_version() {
		return $this->version;
	}
}