<?php

namespace OffbeatWP\LocalSeo\Helpers;

class MakeAcfFieldsForStructuredData
{

    public function __construct($groupName)
    {

        $this->acfField = [
            'key'                   => sha1($groupName),
            'title'                 => $groupName,
            'location'              => [
                [
                    [
                        'param'    => 'post_type',
                        'operator' => '==',
                        'value'    => 'voorbeeld_2',
                    ],
                ],
            ],
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