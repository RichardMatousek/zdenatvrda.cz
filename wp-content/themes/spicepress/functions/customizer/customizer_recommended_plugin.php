<?php
/* Notifications in customizer */


require get_template_directory() . '/functions/customizer-notify/spicepress-customizer-notify.php';


$config_customizer = array(
	'recommended_plugins'       => array(
		'spicebox' => array(
			'recommended' => true,
			'description' => sprintf('Install and activate <strong>Spicebox</strong> plugin for taking full advantage of all the features this theme has to offer %s.', 'spicepress'),
		),
	),
	'recommended_actions'       => array(),
	'recommended_actions_title' => esc_html__( 'Recommended Actions', 'spicepress' ),
	'recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'spicepress' ),
	'install_button_label'      => esc_html__( 'Install and Activate', 'spicepress' ),
	'activate_button_label'     => esc_html__( 'Activate', 'spicepress' ),
	'deactivate_button_label'   => esc_html__( 'Deactivate', 'spicepress' ),
);
Spicepress_Customizer_Notify::init( apply_filters( 'spicepress_customizer_notify_array', $config_customizer ) );

?>