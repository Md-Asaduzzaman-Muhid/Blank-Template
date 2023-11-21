<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_5abcadae90a72',
	'title' => 'Inner Banner',
	'fields' => array (
		array (
			'key' => 'field_5abcadb7cd220',
			'label' => 'Inner Banner',
			'name' => 'inner_banner',
			'type' => 'image',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'side',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));


//Page Icon
acf_add_local_field_group(array(
	'key' => 'group_5b7139de87851',
	'title' => 'Page Icon',
	'fields' => array(
		array(
			'key' => 'field_5b7139e781eb6',
			'label' => '',
			'name' => 'page_icon',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'side',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));



//Job Post Info
acf_add_local_field_group(array (
	'key' => 'group_5a9fc87fc2d3f',
	'title' => 'Job Information',
	'fields' => array (
		array (
			'key' => 'field_5a9fc88c3aaca',
			'label' => 'Deadline',
			'name' => 'deadline',
			'type' => 'date_picker',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'F j, Y',
			'return_format' => 'F j, Y',
			'first_day' => 1,
		),
		array (
			'key' => 'field_5a9fc8b73aacb',
			'label' => 'No. of Vacancies',
			'name' => 'no_of_vacancies',
			'type' => 'text',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'job',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
        "key" => "group_5db6df22a2412",
        "title" => "Contact Informations",
        "fields" => array (
            array (
                "key" => "field_5db6df539aef5",
                "label" => "Office Address",
                "name" => "office_address",
                "type" => "textarea",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "wrapper" => array (
                    "width" => "",
                    "class" => "",
                    "id" => ""
                ),
                "default_value" => "",
                "placeholder" => "",
                "maxlength" => "",
                "rows" => "",
                "new_lines" => ""
            ),
            array (
                "key" => "field_5db6df9c9aef7",
                "label" => "Office Hour",
                "name" => "office_hour",
                "type" => "textarea",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "wrapper" => array (
                    "width" => "",
                    "class" => "",
                    "id" => ""
                ),
                "default_value" => "",
                "placeholder" => "",
                "maxlength" => "",
                "rows" => "",
                "new_lines" => ""
            ),
            array (
                "key" => "field_5db6dfab9aef8",
                "label" => "Phone",
                "name" => "phone",
                "type" => "text",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "wrapper" => array (
                    "width" => "",
                    "class" => "",
                    "id" => ""
                ),
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => ""
            ),
            array (
                "key" => "field_5db7cef956eb9",
                "label" => "Fax",
                "name" => "fax",
                "type" => "text",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "wrapper" => array (
                    "width" => "",
                    "class" => "",
                    "id" => ""
                ),
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => ""
            ),
            array (
                "key" => "field_5e2acd1a561bc",
                "label" => "Toll Free",
                "name" => "toll_free",
                "type" => "text",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "wrapper" => array (
                    "width" => "",
                    "class" => "",
                    "id" => ""
                ),
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => ""
            ),
            array (
                "key" => "field_5db6dfb79aef9",
                "label" => "Email",
                "name" => "email",
                "type" => "text",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "wrapper" => array (
                    "width" => "",
                    "class" => "",
                    "id" => ""
                ),
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => ""
            ),
            array (
                "key" => "field_5db6dfc79aefa",
                "label" => "Social Media Group",
                "name" => "social_media_group",
                "type" => "group",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "wrapper" => array (
                    "width" => "",
                    "class" => "",
                    "id" => ""
                ),
                "layout" => "block",
                "sub_fields" => array (
                    array (
                        "key" => "field_5db6dfd49aefb",
                        "label" => "Facebook",
                        "name" => "facebook",
                        "type" => "text",
                        "instructions" => "",
                        "required" => 0,
                        "conditional_logic" => 0,
                        "wrapper" => array (
                            "width" => "",
                            "class" => "",
                            "id" => ""
                        ),
                        "default_value" => "",
                        "placeholder" => "",
                        "prepend" => "",
                        "append" => "",
                        "maxlength" => ""
                    ),
                    array (
                        "key" => "field_5db6dfe39aefc",
                        "label" => "Twitter",
                        "name" => "twitter",
                        "type" => "text",
                        "instructions" => "",
                        "required" => 0,
                        "conditional_logic" => 0,
                        "wrapper" => array (
                            "width" => "",
                            "class" => "",
                            "id" => ""
                        ),
                        "default_value" => "",
                        "placeholder" => "",
                        "prepend" => "",
                        "append" => "",
                        "maxlength" => ""
                    ),
                    array (
                        "key" => "field_5db6dff59aefd",
                        "label" => "Linkedin",
                        "name" => "linkedin",
                        "type" => "text",
                        "instructions" => "",
                        "required" => 0,
                        "conditional_logic" => 0,
                        "wrapper" => array (
                            "width" => "",
                            "class" => "",
                            "id" => ""
                        ),
                        "default_value" => "",
                        "placeholder" => "",
                        "prepend" => "",
                        "append" => "",
                        "maxlength" => ""
                    ),
                    array (
                        "key" => "field_5db6dffe9aefe",
                        "label" => "Pinterest",
                        "name" => "pinterest",
                        "type" => "text",
                        "instructions" => "",
                        "required" => 0,
                        "conditional_logic" => 0,
                        "wrapper" => array (
                            "width" => "",
                            "class" => "",
                            "id" => ""
                        ),
                        "default_value" => "",
                        "placeholder" => "",
                        "prepend" => "",
                        "append" => "",
                        "maxlength" => ""
                    ),
                    array (
                        "key" => "field_5db6e0029aeff",
                        "label" => "Instagram",
                        "name" => "instagram",
                        "type" => "text",
                        "instructions" => "",
                        "required" => 0,
                        "conditional_logic" => 0,
                        "wrapper" => array (
                            "width" => "",
                            "class" => "",
                            "id" => ""
                        ),
                        "default_value" => "",
                        "placeholder" => "",
                        "prepend" => "",
                        "append" => "",
                        "maxlength" => ""
                    ),
                    array (
                        "key" => "field_5db6e0139af00",
                        "label" => "Youtube",
                        "name" => "youtube",
                        "type" => "text",
                        "instructions" => "",
                        "required" => 0,
                        "conditional_logic" => 0,
                        "wrapper" => array (
                            "width" => "",
                            "class" => "",
                            "id" => ""
                        ),
                        "default_value" => "",
                        "placeholder" => "",
                        "prepend" => "",
                        "append" => "",
                        "maxlength" => ""
                    )
                )
            ),
            array (
                "key" => "field_5dc3dcb0ec6a7",
                "label" => "Company Slogan",
                "name" => "company_slogan",
                "type" => "textarea",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "wrapper" => array (
                    "width" => "",
                    "class" => "",
                    "id" => ""
                ),
                "default_value" => "",
                "placeholder" => "",
                "maxlength" => "",
                "rows" => "",
                "new_lines" => "wpautop"
            )
        ),
        "location" => array (
            array (
                array (
                    "param" => "page_template",
                    "operator" => "==",
                    "value" => "page-contact.php"
                )
            )
        ),
        "menu_order" => 0,
        "position" => "normal",
        "style" => "default",
        "label_placement" => "top",
        "instruction_placement" => "label",
        "hide_on_screen" => "",
        "active" => true,
        "description" => ""
	)
);

endif;
