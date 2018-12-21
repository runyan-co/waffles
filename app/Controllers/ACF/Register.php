<?php

namespace App\Controllers\ACF;

/**
 * Handles ACF field registration programmatically
 */
class Register
{
    /**
     * Set the Advanced Custom Field keys as constants to reference later
     */
    public const FullWidthHero_Key = '5c1ce823da1d2';
    public const FWH_BackgroundColor_Key = 'field_5c1ce86b37a0a';
    public const FWH_BackgroundImage_Key = 'field_5c1ce8b437a0b';
    public const FWH_HeightSetting_Key = 'field_5c1ce943a2253';
    public const FWH_Content_Key = 'field_5c1ce993e4db6';

    public function Register()
    {
        if( function_exists('acf_add_local_field_group') ) :

            acf_add_local_field_group(array(
                'key' => 'group_5c1ce804b9fb0',
                'title' => 'Page Options',
                'fields' => array(
                    array(
                        'key' => 'field_5c1ce813ed2ad',
                        'label' => 'Content',
                        'name' => 'content',
                        'type' => 'flexible_content',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layouts' => array(
                            self::FullWidthHero_Key => array(
                                'key' => self::FullWidthHero_Key,
                                'name' => 'full_width_hero',
                                'label' => 'Full-Width Hero',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => self::FWH_BackgroundColor_Key,
                                        'label' => 'Background Color',
                                        'name' => 'hero_background_color',
                                        'type' => 'color_picker',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '33',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => self::FWH_BackgroundImage_Key,
                                        'label' => 'Background Image',
                                        'name' => 'background_image',
                                        'type' => 'image',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '33',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'return_format' => 'array',
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
                                    array(
                                        'key' => self::FWH_HeightSetting_Key,
                                        'label' => 'Height',
                                        'name' => 'hero_height',
                                        'type' => 'select',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '33',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'choices' => array(
                                            'normal' => 'Normal',
                                            'extra' => 'Extra Padding',
                                            'fullheight' => 'Full-Height',
                                        ),
                                        'default_value' => array(
                                            0 => 'normal',
                                        ),
                                        'allow_null' => 0,
                                        'multiple' => 0,
                                        'ui' => 0,
                                        'return_format' => 'value',
                                        'ajax' => 0,
                                        'placeholder' => '',
                                    ),
                                    array(
                                        'key' => self::FWH_Content_Key,
                                        'label' => 'Hero Content',
                                        'name' => 'hero_content',
                                        'type' => 'wysiwyg',
                                        'instructions' => '',
                                        'required' => 1,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '100',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'tabs' => 'all',
                                        'toolbar' => 'full',
                                        'media_upload' => 1,
                                        'delay' => 0,
                                    ),
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                        ),
                        'button_label' => 'Add',
                        'min' => '',
                        'max' => '',
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
                'position' => 'acf_after_title',
                'style' => 'seamless',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
                'active' => 1,
                'description' => '',
            ));
            
            endif;
    }
}