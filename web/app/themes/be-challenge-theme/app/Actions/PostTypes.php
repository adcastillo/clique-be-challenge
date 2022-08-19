<?php

namespace App\Actions;

use App\Traits\SagePosts;

class PostTypes
{

    use SagePosts;

    /**
     * Construct to add actions and filters on init
     */
    public function __construct()
    {
        add_action('init', [$this, 'registerPostTypes']);
    }

    /**
     * Registers the post types needed for this site
     *
     * @return void
     * @link Dashicon https://developer.wordpress.org/resource/dashicons
     */
    public function registerPostTypes()
    {
        collect(
            [
                'faqs' => $this->faqs(),
            ]
        )
            ->each(function ($pt_args, $post_type) {
                register_post_type($post_type, $pt_args);
            });
    }

    /**
     * Registers the FAQ Post Type
     *
     * @return array
     */
    protected function faqs()
    :array
    {
        return $this->postTypeArray(
            'FAQ',
            'dashicons-format-status',
            __("This post type holds the questions and answers for an FAQ section.", 'sage'),
            'post',
            [
                // Register only what fields we need from WP
                'supports' => ['title', 'editor', 'excerpt', 'revisions']
            ]
        );
    }
}
