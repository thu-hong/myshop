<?php

register_page_template([
    'default' => 'Default'
]);

register_sidebar([
    'id'          => 'second_sidebar',
    'name'        => 'Second sidebar',
    'description' => 'This is a sample sidebar for main theme',
]);

theme_option()
    ->setField([
        'id'         => 'copyright',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'text',
        'label'      => __('Copyright'),
        'attributes' => [
            'name'    => 'copyright',
            'value'   => '© 2020 Laravel Technologies. All right reserved.',
            'options' => [
                'class'        => 'form-control',
                'placeholder'  => __('Change copyright'),
                'data-counter' => 250,
            ]
        ],
        'helper' => __('Copyright on footer of site'),
    ])
    ->setSection([ // Set section with some fields
        'title' => __('Về Chúng Tôi'),
        'desc' => __(''),
        'id' => 'opt-text-subsection-text',
        'subsection' => true,
        'icon' => 'fas fa-address-card',
        'fields' => [
            [
                'id' => 'Name_layout',
                'type' => 'text',
                'label' => __('Tên Layout'),
                'attributes' => [
                    'name' => 'Name_layout',
                    'value' => null,
                    'options' => [
                        'class' => 'form-control',
                    ],
                ],
            ],
            [
                'id' => 'Name_title',
                'type' => 'text',
                'label' => __('Tên Thuộc Tính '),
                'attributes' => [
                    'name' => 'Name_title',
                    'value' => null,
                    'options' => [
                        'class' => 'form-control',
                    ],
                ],
            ],
            [
                'id' => 'content_title',
                'type' => 'text',
                'label' => __('Nội dung thuộc tính'),
                'attributes' => [
                    'name' => 'content_title',
                    'value' => null,
                    'options' => [
                        'class' => 'form-control',
                    ],
                ],
            ],
            [
                'id' => 'Name_title-2',
                'type' => 'text',
                'label' => __('Tên Thuộc Tính 2 '),
                'attributes' => [
                    'name' => 'Name_title_7',
                    'value' => null,
                    'options' => [
                        'class' => 'form-control',
                    ],
                ],
            ],
            [
                'id' => 'content_title_2',
                'type' => 'text',
                'label' => __('Nội dung thuộc tính 2'),
                'attributes' => [
                    'name' => 'content_title_2',
                    'value' => null,
                    'options' => [
                        'class' => 'form-control',
                    ],
                ],
            ],
            [
                'id' => 'Name_title_3',
                'type' => 'text',
                'label' => __('Tên Thuộc Tính 3 '),
                'attributes' => [
                    'name' => 'Name_title_3',
                    'value' => null,
                    'options' => [
                        'class' => 'form-control',
                    ],
                ],
            ],
            [
                'id' => 'content_title_3',
                'type' => 'text',
                'label' => __('Nội dung thuộc tính 3'),
                'attributes' => [
                    'name' => 'content_title_3',
                    'value' => null,
                    'options' => [
                        'class' => 'form-control',
                    ],
                ],
            ],
            [
                'id' => 'Name_title_4',
                'type' => 'text',
                'label' => __('Tên Thuộc Tính 4'),
                'attributes' => [
                    'name' => 'Name_title_4',
                    'value' => null,
                    'options' => [
                        'class' => 'form-control',
                    ],
                ],
            ],
            [
                'id' => 'content_title_4',
                'type' => 'text',
                'label' => __('Nội dung thuộc tính 4'),
                'attributes' => [
                    'name' => 'content_title_4',
                    'value' => null,
                    'options' => [
                        'class' => 'form-control',
                    ],
                ],
            ],
            [
                'id' => 'Name_title_5',
                'type' => 'text',
                'label' => __('Tên Thuộc Tính 5'),
                'attributes' => [
                    'name' => 'Name_title_5',
                    'value' => null,
                    'options' => [
                        'class' => 'form-control',
                    ],
                ],
            ],
            [
                'id' => 'content_title_5',
                'type' => 'text',
                'label' => __('Nội dung thuộc tính 5'),
                'attributes' => [
                    'name' => 'content_title_5',
                    'value' => null,
                    'options' => [
                        'class' => 'form-control',
                    ],
                ],
            ],
            [
                'id' => 'Name_title_6',
                'type' => 'text',
                'label' => __('Tên Thuộc Tính 6 '),
                'attributes' => [
                    'name' => 'Name_title_6',
                    'value' => null,
                    'options' => [
                        'class' => 'form-control',
                    ],
                ],
            ],
            [
                'id' => 'content_title_6',
                'type' => 'text',
                'label' => __('Nội dung thuộc tính 6'),
                'attributes' => [
                    'name' => 'content_title_6',
                    'value' => null,
                    'options' => [
                        'class' => 'form-control',
                    ],
                ],
            ],

        ],
    ])
    ;

add_action('init', function () {
    config(['filesystems.disks.public.root' => public_path('storage')]);
}, 124);
