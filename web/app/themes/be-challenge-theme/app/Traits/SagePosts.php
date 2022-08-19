<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait SagePosts
{
    /**
     * Creates the array needed to register the post type
     *
     * @param string $singular    The single name for the post type
     * @param string $dashicon    The dashicon name for the post type, an image/svg or url
     * @param string $description The description of the post type
     * @param string $type        Determines whether it's a post or a page style hierarchy
     * @param array  $editor_args Any args for the post type to override defaults
     *
     * @return array
     * @link Dashicon https://developer.wordpress.org/resource/dashicons
     *
     */
    protected function postTypeArray(string $singular, string $dashicon, string $description = '', string $type = "post", array $editor_args = [])
    :array
    {
        $default_args = ["title", "editor", "thumbnail", "excerpt", "revisions", "post-formats"];

        $plural = Str::plural($singular);
        $single_lower = strtolower($singular);

        return [
            "label"               => __($plural, "sage"),
            "description"         => __($description, "sage"),
            "labels"              => [
                "name"                  => _x($singular, "Post Type General Name", "sage"),
                "singular_name"         => _x($singular, "Post Type Singular Name", "sage"),
                "menu_name"             => __($plural, "sage"),
                "name_admin_bar"        => __($singular, "sage"),
                "archives"              => __($plural, "sage"),
                "attributes"            => __("$singular Attributes", "sage"),
                "parent_item_colon"     => __("Parent $singular:", "sage"),
                "all_items"             => __("All $plural", "sage"),
                "add_new_item"          => __("Add New $singular", "sage"),
                "add_new"               => __("Add New $singular", "sage"),
                "new_item"              => __("New $singular", "sage"),
                "edit_item"             => __("Edit $singular", "sage"),
                "update_item"           => __("Update $singular", "sage"),
                "view_item"             => __("View $singular", "sage"),
                "view_items"            => __("View $plural", "sage"),
                "search_items"          => __("Search $plural", "sage"),
                "not_found"             => __("Not found", "sage"),
                "not_found_in_trash"    => __("Not found in Trash", "sage"),
                "featured_image"        => __("$singular Image", "sage"),
                "set_featured_image"    => __("Set $single_lower image", "sage"),
                "remove_featured_image" => __("Remove $single_lower image", "sage"),
                "use_featured_image"    => __("Use as $single_lower image", "sage"),
                "insert_into_item"      => __("Place into $single_lower", "sage"),
                "uploaded_to_this_item" => __("Uploaded to this $singular", "sage"),
                "items_list"            => __("$singular list", "sage"),
                "items_list_navigation" => __("$singular list navigation", "sage"),
                "filter_items_list"     => __("Filter $singular list", "sage"),
            ],
            "supports"            => $editor_args['supports'] ?? $default_args,
            "hierarchical"        => false,
            "public"              => true,
            "show_ui"             => true,
            "show_in_menu"        => true,
            "menu_position"       => 25,
            "menu_icon"           => $dashicon,
            "show_in_admin_bar"   => true,
            "show_in_nav_menus"   => false,
            "can_export"          => true,
            "has_archive"         => false,
            "exclude_from_search" => false,
            "publicly_queryable"  => true,
            "capability_type"     => $type,
            'rewrite'             => $editor_args['rewrite'] ?? true,
            "show_in_rest"        => false,
        ];
    }
}
