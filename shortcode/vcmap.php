<?php
return array(
	'name' => __( 'Test custom google fonts', 'js_composer' ),
	'base' => 'vc_custom_google_fonts',
	'category' => __( 'Content', 'js_composer' ),
	'description' => __( 'Test custom google fonts', 'js_composer' ),
	'params' => array(
		array(
			'type' => 'textarea',
			'param_name' => 'content',
			'value' => 'Grumpy wizards make toxic brew for the evil Queen and Jack. Close',
		),
		array(
			'type' => 'google_fonts',
			'param_name' => 'google_fonts',
			'value' => 'font_family:Abril%20Fatface%3Aregular|font_style:400%20regular%3A400%3Anormal',
			'settings' => array(
				'fields' => array(
					'font_family_description' => __( 'Select font family.', 'js_composer' ),
					'font_style_description' => __( 'Select font styling.', 'js_composer' ),
				),
			),
		),
	),
);
