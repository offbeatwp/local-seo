<?php

namespace OffbeatWP\LocalSeo\Helpers;

class MakeAcfFieldsForStructuredData
{

    public function __construct($groupName)
    {

        $this->acfField = [
            'key'                   => sha1($groupName),
            'title'                 => $groupName,
            'menu_order'            => 0,
            'position'              => 'normal',
            'style'                 => 'default',
            'label_placement'       => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen'        => '',
            'active'                => true,
            'description'           => '',
        ];

    }


    public function addImageField($fieldLabel, $fieldName)
    {

        $this->acfField['fields'][] = [
            'key'               => sha1($fieldName),
            'label'             => $fieldLabel,
            'name'              => $fieldName,
            'type'              => 'image',
            'instructions'      => '',
            'required'          => 0,
            'conditional_logic' => 0,
            'wrapper'           => [
                'width' => '',
                'class' => '',
                'id'    => '',
            ],
            'return_format'     => 'url',
            'preview_size'      => 'full',
            'library'           => 'all',
            'min_width'         => '',
            'min_height'        => '',
            'min_size'          => '',
            'max_width'         => '',
            'max_height'        => '',
            'max_size'          => '',
            'mime_types'        => '',
        ];

    }


    public function addTextField($fieldLabel, $fieldName)
    {

        $this->acfField['fields'][] = [
            'key'               => sha1($fieldName),
            'label'             => $fieldLabel,
            'name'              => $fieldName,
            'type'              => 'text',
            'instructions'      => '',
            'required'          => 0,
            'conditional_logic' => 0,
            'wrapper'           => [
                'width' => '',
                'class' => '',
                'id'    => '',
            ],
            'default_value'     => '',
            'placeholder'       => '',
            'prepend'           => '',
            'append'            => '',
            'maxlength'         => '',
        ];
    }

    public function addDateField($fieldLabel, $fieldName)
    {


        $this->acfField['fields'][] =
            [
                'key'               => sha1($fieldName),
                'label'             => $fieldLabel,
                'name'              => $fieldName,
                'type'              => 'date_picker',
                'instructions'      => '',
                'required'          => 0,
                'conditional_logic' => 0,
                'wrapper'           => [
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ],
                'display_format'    => 'd/m/Y',
                'return_format'     => 'd/m/Y',
                'first_day'         => 1,

            ];

    }

    public function addUrlField($fieldLabel, $fieldName)
    {

        $this->acfField['fields'][] =
            [
                'key'               => sha1($fieldName),
                'label'             => $fieldLabel,
                'name'              => $fieldName,
                'type'              => 'url',
                'instructions'      => '',
                'required'          => 0,
                'conditional_logic' => 0,
                'wrapper'           => [
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ],
                'default_value'     => '',
                'placeholder'       => '',
            ];
    }


    public function addTextBoxField($fieldLabel, $fieldName)
    {

        $this->acfField['fields'][] = [
            'key'               => sha1($fieldName),
            'label'             => $fieldLabel,
            'name'              => $fieldName,
            'type'              => 'textarea',
            'instructions'      => '',
            'required'          => 0,
            'conditional_logic' => 0,
            'wrapper'           => [
                'width' => '',
                'class' => '',
                'id'    => '',
            ],
            'default_value'     => '',
            'placeholder'       => '',
            'prepend'           => '',
            'append'            => '',
            'maxlength'         => '',
        ];
    }

    public function addTabField($fieldLabel, $fieldName)
    {

        $this->acfField['fields'][] = [
            'key'               => sha1($fieldName),
            'label'             => $fieldLabel,
            'name'              => '',
            'type'              => 'tab',
            'instructions'      => '',
            'required'          => 0,
            'conditional_logic' => 0,
            'wrapper'           => [
                'width' => '',
                'class' => '',
                'id'    => '',
            ],
            'placement'         => 'top',
            'endpoint'          => 0,
        ];

    }


    public function addType($fieldLabel, $fieldName)
    {

        $this->acfField['fields'][] = [
            'key'               => sha1($fieldName),
            'label'             => $fieldLabel,
            'name'              => '',
            'type'              => 'tab',
            'instructions'      => '',
            'required'          => 0,
            'conditional_logic' => 0,
            'wrapper'           => [
                'width' => '',
                'class' => '',
                'id'    => '',
            ],
            'placement'         => 'top',
            'endpoint'          => 0,
        ];

        $this->acfField['fields'][] = [
            'key'               => 'enabled' . sha1($fieldName),
            'label'             => 'Show structured data for ' . $fieldLabel . '?',
            'name'              => 'enabled' . sha1($fieldName),
            'type'              => 'true_false',
            'instructions'      => '',
            'required'          => 0,
            'conditional_logic' => 0,
            'wrapper'           => [
                'width' => '',
                'class' => '',
                'id'    => '',
            ],
            'message'           => '',
            'default_value'     => 0,
            'ui'                => 0,
            'ui_on_text'        => '',
            'ui_off_text'       => '',
        ];

        $this->addTextField('Headline', 'head_line' . $fieldName);

    }


    public function execute()
    {

        $args = [
            'public'   => true,
            '_builtin' => false,
        ];

        $output = 'names'; // names or objects, note names is the default
        $operator = 'and'; // 'and' or 'or'

        $post_types = get_post_types($args, $output, $operator);

        foreach ($post_types as $post_type) {

            $this->acfField['location'][] = [
                [
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => $post_type,
                ],
            ];

        }

        acf_add_local_field_group($this->acfField);
    }

}

?>