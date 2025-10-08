<?php
/**
 * Plugin Name: BB Pusher — ACF Fields for Posts
 * Description: Registers ACF fields on the core 'post' post type via local PHP.
 * Version: 0.1.0
 * Author: You
 */

if ( ! defined('ABSPATH') ) exit;

add_action('acf/init', function () {
    if ( ! function_exists('acf_add_local_field_group') ) return;

    acf_add_local_field_group([
        'key' => 'group_bbpusher_post_fields',
        'title' => 'Post Extras',
        'fields' => [

            // 1) Internal Note (Text)
            [
                'key' => 'field_bbpusher_internal_note',
                'label' => 'Internal Note',
                'name' => 'internal_note',
                'type' => 'text',
                'instructions' => 'Private note (not shown on the front end).',
                'required' => 0,
                'wrapper' => ['width' => '', 'class' => '', 'id' => ''],
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
            ],

            // 2) Instagram URL (URL)
            [
                'key' => 'field_bbpusher_instagram_url',
                'label' => 'Instagram URL',
                'name' => 'instagram_url',
                'type' => 'url',
                'instructions' => 'Link to the related Instagram post/profile.',
                'required' => 0,
                'wrapper' => ['width' => '', 'class' => '', 'id' => ''],
                'default_value' => '',
                'placeholder' => 'https://instagram.com/...',
            ],

            // 3) Promo Price (Number)
            [
                'key' => 'field_bbpusher_promo_price',
                'label' => 'Promo Price',
                'name' => 'promo_price',
                'type' => 'number',
                'instructions' => 'Optional promotional price.',
                'required' => 0,
                'wrapper' => ['width' => '', 'class' => '', 'id' => ''],
                'default_value' => '',
                'min' => 0,
                'step' => '0.01',
                'prepend' => '$',
            ],

            // 4) Promo Window (Date Range: two date pickers)
            [
                'key' => 'field_bbpusher_promo_start',
                'label' => 'Promo Start',
                'name' => 'promo_start',
                'type' => 'date_picker',
                'display_format' => 'Y-m-d',
                'return_format' => 'Y-m-d',
                'first_day' => 1,
            ],
            [
                'key' => 'field_bbpusher_promo_end',
                'label' => 'Promo End',
                'name' => 'promo_end',
                'type' => 'date_picker',
                'display_format' => 'Y-m-d',
                'return_format' => 'Y-m-d',
                'first_day' => 1,
            ],

            // 5) Feature on Homepage (True/False)
            [
                'key' => 'field_bbpusher_feature_home',
                'label' => 'Feature on Homepage',
                'name' => 'feature_on_homepage',
                'type' => 'true_false',
                'ui' => 1,
                'default_value' => 0,
            ],
        ],
        'location' => [[
            [
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'post', // change to your CPT slug if needed
            ],
        ]],
        'position' => 'normal',
        'style' => 'default',
        'labe
