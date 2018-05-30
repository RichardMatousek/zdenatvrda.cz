<?php
/**
 * Welcome Screen Class
 */
class spicepress_screen {

	/**
	 * Constructor for the welcome screen
	 */
	public function __construct() {

		/* create dashbord page */
		add_action( 'admin_menu', array( $this, 'spicepress_register_menu' ) );

		/* activation notice */
		add_action( 'load-themes.php', array( $this, 'spicepress_activation_admin_notice' ) );

		/* enqueue script and style for welcome screen */
		add_action( 'admin_enqueue_scripts', array( $this, 'spicepress_style_and_scripts' ) );

		/* enqueue script for customizer */
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'spicepress_scripts_for_customizer' ) );

		/* load welcome screen */
		add_action( 'spicepress_info_screen', array( $this, 'spicepress_getting_started' ), 	    10 );
		//add_action( 'spicepress_info_screen', array( $this, 'spicepress_action_required' ), 	    20 );
		add_action( 'spicepress_info_screen', array( $this, 'spicepress_github' ), 		            40 );
		add_action( 'spicepress_info_screen', array( $this, 'spicepress_welcome_free_pro' ), 				50 );

		/* ajax callback for dismissable required actions */
		add_action( 'wp_ajax_spicepress_dismiss_required_action', array( $this, 'spicepress_dismiss_required_action_callback') );
		add_action( 'wp_ajax_nopriv_spicepress_dismiss_required_action', array($this, 'spicepress_dismiss_required_action_callback') );

	}

	public function spicepress_register_menu() {
		add_theme_page( 'About SpicePress Theme', 'About SpicePress Theme', 'activate_plugins', 'spicepress-info', array( $this, 'spicepress_welcome_screen' ) );
	}

	public function spicepress_activation_admin_notice() {
		global $pagenow;

		if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
			add_action( 'admin_notices', array( $this, 'spicepress_admin_notice' ), 99 );
		}
	}

	/**
	 * Display an admin notice linking to the welcome screen
	 * @sfunctionse 1.8.2.4
	 */
	public function spicepress_admin_notice() {
		?>
			<div class="updated notice is-dismissible spicepress-notice">
				<h1><?php
				$theme_info = wp_get_theme();
				printf( esc_html__('Welcome to %1$s - Version %2$s', 'spicepress'), esc_html( $theme_info->Name ), esc_html( $theme_info->Version ) ); ?>
				</h1>
				<p><?php echo sprintf( esc_html__("Welcome! Thank you for choosing SpiceThemes SpicePress WordPress theme. To take full advantage of the features this theme has to offer visit our %swelcome page%s.", "spicepress"), '<a href="' . esc_url( admin_url( 'themes.php?page=spicepress-info' ) ) . '">', '</a>' ); ?></p>
				<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=spicepress-info' ) ); ?>" class="button button-blue-secondary button_spicepress" style="text-decoration: none;"><?php _e('Get started with SpicePress','spicepress'); ?></a></p>
			</div>
		<?php
	}

	/**
	 * Load welcome screen css and javascript
	 * @sfunctionse  1.8.2.4
	 */
	public function spicepress_style_and_scripts( $hook_suffix ) {

		if ( 'appearance_page_spicepress-info' == $hook_suffix ) {
			
			
			wp_enqueue_style( 'spicepress-info-css', get_template_directory_uri() . '/functions/spicepress-info/css/bootstrap.css' );
			
			wp_enqueue_style( 'spicepress-info-screen-css', get_template_directory_uri() . '/functions/spicepress-info/css/welcome.css' );

			wp_enqueue_script( 'spicepress-info-screen-js', get_template_directory_uri() . '/functions/spicepress-info/js/welcome.js', array('jquery') );

			global $spicepress_required_actions;

			$nr_actions_required = 0;

			/* get number of required actions */
			if( get_option('spicepress_show_required_actions') ):
				$spicepress_show_required_actions = get_option('spicepress_show_required_actions');
			else:
				$spicepress_show_required_actions = array();
			endif;

			if( !empty($spicepress_required_actions) ):
				foreach( $spicepress_required_actions as $spicepress_required_action_value ):
					if(( !isset( $spicepress_required_action_value['check'] ) || ( isset( $spicepress_required_action_value['check'] ) && ( $spicepress_required_action_value['check'] == false ) ) ) && ((isset($spicepress_show_required_actions[$spicepress_required_action_value['id']]) && ($spicepress_show_required_actions[$spicepress_required_action_value['id']] == true)) || !isset($spicepress_show_required_actions[$spicepress_required_action_value['id']]) )) :
						$nr_actions_required++;
					endif;
				endforeach;
			endif;

			wp_localize_script( 'spicepress-info-screen-js', 'spicepressLiteWelcomeScreenObject', array(
				'nr_actions_required' => $nr_actions_required,
				'ajaxurl' => admin_url( 'admin-ajax.php' ),
				'template_directory' => get_template_directory_uri(),
				'no_required_actions_text' => __( 'Hooray! There are no required actions for you right now.','spicepress' )
			) );
		}
	}

	/**
	 * Load scripts for customizer page
	 * @sfunctionse  1.8.2.4
	 */
	public function spicepress_scripts_for_customizer() {

		wp_enqueue_style( 'spicepress-info-screen-customizer-css', get_template_directory_uri() . '/functions/spicepress-info/css/welcome_customizer.css' );
		wp_enqueue_script( 'spicepress-info-screen-customizer-js', get_template_directory_uri() . '/functions/spicepress-info/js/welcome_customizer.js', array('jquery'), '20120206', true );

		global $spicepress_required_actions;

		$nr_actions_required = 0;

		/* get number of required actions */
		if( get_option('spicepress_show_required_actions') ):
			$spicepress_show_required_actions = get_option('spicepress_show_required_actions');
		else:
			$spicepress_show_required_actions = array();
		endif;

		if( !empty($spicepress_required_actions) ):
			foreach( $spicepress_required_actions as $spicepress_required_action_value ):
				if(( !isset( $spicepress_required_action_value['check'] ) || ( isset( $spicepress_required_action_value['check'] ) && ( $spicepress_required_action_value['check'] == false ) ) ) && ((isset($spicepress_show_required_actions[$spicepress_required_action_value['id']]) && ($spicepress_show_required_actions[$spicepress_required_action_value['id']] == true)) || !isset($spicepress_show_required_actions[$spicepress_required_action_value['id']]) )) :
					$nr_actions_required++;
				endif;
			endforeach;
		endif;

		wp_localize_script( 'spicepress-info-screen-customizer-js', 'spicepressLiteWelcomeScreenCustomizerObject', array(
			'nr_actions_required' => $nr_actions_required,
			'aboutpage' => esc_url( admin_url( 'themes.php?page=spicepress-info' ) ),
			'customizerpage' => esc_url( admin_url( 'customize.php' ) ),
			'themeinfo' => __('View Theme Info','spicepress'),
		) );
	}

	/**
	 * Dismiss required actions
	 * @sfunctionse 1.8.2.4
	 */
	public function spicepress_dismiss_required_action_callback() {

		global $spicepress_required_actions;

		$spicepress_dismiss_id = (isset($_GET['dismiss_id'])) ? $_GET['dismiss_id'] : 0;

		echo $spicepress_dismiss_id; /* this is needed and it's the id of the dismissable required action */

		if( !empty($spicepress_dismiss_id) ):

			/* if the option exists, update the record for the specified id */
			if( get_option('spicepress_show_required_actions') ):

				$spicepress_show_required_actions = get_option('spicepress_show_required_actions');

				$spicepress_show_required_actions[$spicepress_dismiss_id] = false;

				update_option( 'spicepress_show_required_actions',$spicepress_show_required_actions );

			/* create the new option,with false for the specified id */
			else:

				$spicepress_show_required_actions_new = array();

				if( !empty($spicepress_required_actions) ):

					foreach( $spicepress_required_actions as $spicepress_required_action ):

						if( $spicepress_required_action['id'] == $spicepress_dismiss_id ):
							$spicepress_show_required_actions_new[$spicepress_required_action['id']] = false;
						else:
							$spicepress_show_required_actions_new[$spicepress_required_action['id']] = true;
						endif;

					endforeach;

				update_option( 'spicepress_show_required_actions', $spicepress_show_required_actions_new );

				endif;

			endif;

		endif;

		die(); // this is required to return a proper result
	}


	/**
	 * Welcome screen content
	 * @sfunctionse 1.8.2.4
	 */
	public function spicepress_welcome_screen() {

		require_once( ABSPATH . 'wp-load.php' );
		require_once( ABSPATH . 'wp-admin/admin.php' );
		require_once( ABSPATH . 'wp-admin/admin-header.php' );
		?>
		<div class="container-fluid">
		<div class="row">
		<div class="col-md-12">
		<ul class="spicepress-nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#getting_started" aria-controls="getting_started" role="tab" data-toggle="tab"><?php esc_html_e( 'Getting Started','spicepress'); ?></a></li>
			
			<li role="presentation"><a href="#github" aria-controls="github" role="tab" data-toggle="tab"><?php esc_html_e( 'Why Upgrade to PRO?','spicepress'); ?></a></li>
			<li role="presentation"><a href="#free_pro" aria-controls="free_pro" role="tab" data-toggle="tab"><?php esc_html_e( 'Free VS PRO','spicepress'); ?></a></li>
			
		</ul>
		</div>
		</div>
		</div>

		<div class="spicepress-tab-content">

			<?php do_action( 'spicepress_info_screen' ); ?>

		</div>
		<?php
	}

	/**
	 * Getting started
	 *
	 */
	public function spicepress_getting_started() {
		require_once( get_template_directory() . '/functions/spicepress-info/sections/getting-started.php' );
	}

	/**
	 * Contribute
	 *
	 */
	public function spicepress_github() {
		require_once( get_template_directory() . '/functions/spicepress-info/sections/github.php' );
	}


	/**
	 * Free vs PRO
	 * 
	 */
	public function spicepress_welcome_free_pro() {
		require_once( get_template_directory() . '/functions/spicepress-info/sections/free_pro.php' );
	}
}

$GLOBALS['spicepress_screen'] = new spicepress_screen();