<?php

declare(strict_types = 1);

namespace App\Helper;

class ImageHelper
{

    /**
     * Returns a picture tag serving webp images in a source tag for an image
     *
     * @param int   $src_id    The Image ID
     * @param array $img_attrs
     *                         size      Allows the overriding of the image size, Defaults to large
     *                         property  Allows the overriding of the image property type, Defaults to image
     *                         class     Appends a class to the image tag
     *                         alt       Allows for the overriding of the image's alt tag, Defaults to the image alt, then image's title
     *                         role      Allows for the overriding of the image's role, Defaults to img
     * @param array $data_atts Pass an array of data attributes for use with JS
     * @param array $aria_atts Any aria attributes needed for the image
     *
     * @return string          Returns a formatted picture HTML element with source and img tags
     */
    public static function imgSrcSet(int $src_id, array $img_attrs = [], array $data_atts = [], array $aria_atts = [])
    :string
    {
        $get_img_data = self::imgSrcSetArr($src_id, $img_attrs);

        // Empty array for data attributes return
        $da_return = [];
        $aa_return = [];

        $properties  = $get_img_data['prop'] ?? '';
        $image_class = $img_attrs['class'] ?? '';
        $pic_class   = $img_attrs['pic_class'] ?? '';
        $image_id    = $img_attrs['id'] ?? '';

        // Image Information
        $source    = $get_img_data['url'] ?? '';
        $src_set   = $get_img_data['src_set'] ?? '';
        $src_sizes = $get_img_data['src_set_sizes'] ?? '';
        $get_webp  = $get_img_data['webp'] ?? '';

        $role_atts = $img_attrs['role'] ?? ($get_img_data['role'] ?? 'img');

        if ($data_atts) {
            $da_return = self::mapDataAtts($data_atts);
        }

        if ($aria_atts) {
            $aa_return = self::mapAriaAtts($aria_atts);
        }

        /**
         * The webp output in a source tag
         */
        $webp_source = $get_webp ? sprintf(
            '<source srcset="%s" sizes="%s" type="image/webp">',
            $get_webp,
            $src_sizes
        ) : '';

        /**
         * The original image output  in a source tag
         */
        $og_source = $src_set ? sprintf(
            '<source srcset="%s" sizes="%s" type="%s">',
            $src_set,
            $src_sizes,
            $get_img_data['img_type'] ?? ''
        ) : '';

        if (isset($get_img_data['img_type']) && strpos($get_img_data['img_type'], 'svg')) {
            return sprintf(
                '<picture %9$s><img src="%1$s" role="%4$s" %2$s property="v:%3$s" %5$s %6$s content="%1$s" %7$s %8$s/></picture>',
                esc_url($source),
                $get_img_data['alt'] ? "alt=\"{$get_img_data['alt']}\"" : '',
                $properties,
                $role_atts,
                $image_class ? "class=\"$image_class\"" : '',
                $image_id ? "id=\"{$image_id}\"" : '',
                implode(' ', $da_return),
                implode(' ', $aa_return),
                $pic_class ? "class=\"$pic_class\"" : '',
            );
        }

        return sprintf(
            '<picture %10$s>%2$s<img src="%1$s" role="%5$s" %3$s property="v:%4$s" %6$s %7$s content="%1$s" %8$s %9$s/></picture>',
            esc_url($source),
            ($webp_source ?? '') . $og_source,
            isset($get_img_data['alt']) ? "alt=\"{$get_img_data['alt']}\"" : '',
            $properties,
            $role_atts,
            $image_class ? "class=\"$image_class\"" : '',
            $image_id ? "id=\"$image_id\"" : '',
            implode(' ', $da_return),
            implode(' ', $aa_return),
            $pic_class ? "class=\"$pic_class\"" : '',
        );
    }

    /**
     * Since this data is used in a few spots, I wanted to be able to just parse and return the data as is
     * as well as have the content all in the same spot
     *
     * @param int   $src_id
     * @param array $img_attrs
     *
     * @return array
     */
    public static function imgSrcSetArr(int $src_id, array $img_attrs = [])
    :array
    {

        // $img_attrs
        $img_size = $img_attrs['size'] ?? 'large';
        $img_prop = $img_attrs['property'] ?? 'image';

        // Image Information
        $img_src       = wp_get_attachment_image_url($src_id, $img_size);
        $src_set       = wp_get_attachment_image_srcset($src_id, $img_size) ?: '';
        $src_set_sizes = wp_get_attachment_image_sizes($src_id, $img_size) ?: '';
        $src_alt       = $img_attrs['alt'] ?? '';

        if (!$src_alt) {
            $src_alt = get_post_meta($src_id, '_wp_attachment_image_alt', true) ? get_post_meta($src_id, '_wp_attachment_image_alt', true) : get_the_title($src_id);
        }

        if (is_array($src_alt)) {
            $src_alt = $src_alt[0];
        }

        // Grabs the image extension
        if ($img_src) {
            $image_type = str_replace('.', '', substr($img_src, strrpos($img_src, '.')));

            return [
                'alt'           => html_entity_decode($src_alt),
                'img_type'      => "image/{$image_type}",
                'prop'          => $img_prop,
                'role'          => 'img',
                'src_set'       => $src_set,
                'src_set_sizes' => $src_set_sizes,
                'url'           => $img_src,
                'webp'          => self::getWebp($src_set),
            ];
        }
        return [];
    }

    /**
     * Checks if there are any webp generated images in the uploads directory
     * and returns them as a concatenated string
     *
     * @param string $src_set The srcset that WP generates for the image
     *
     * @return string
     */
    protected static function getWebp(string $src_set)
    :string
    {
        $home_url = get_home_url();

        // Creation of webp support
        return collect(explode(', ', $src_set))
            ->map(function ($srcset) use ($home_url) {
                $img_file   = explode(' ', $srcset) ? explode(' ', $srcset) : $srcset;
                $webp_image = '';
                if (!empty($img_file) && $img_file[0]) {
                    $item_size = $img_file[1] ?? '';
                    $extension = substr($img_file[0], strrpos($img_file[0], '.'));
                    switch ($extension) {
                        case '.jpg':
                        case '.jpeg':
                        case '.png':
                            $webp_file      = str_replace($extension, '.webp', $img_file[0]);
                            $webp_file_path = parse_url($webp_file)['path'];
                            $file_check     = WP_CONTENT_DIR . str_replace('/app', '', $webp_file_path);
                            if (file_exists($file_check)) {
                                $webp_image = "$home_url$webp_file_path $item_size";
                            }
                            break;
                        default:
                            break;
                    }
                }
                return $webp_image;
            })
            ->filter()
            ->implode(', ');
    }

    /**
     * Maps the data attributes
     *
     * @param array $data_atts
     *
     * @return array
     */
    protected static function mapDataAtts(array $data_atts)
    :array
    {
        return collect($data_atts)
            ->map(function ($att_val, $att_type) {
                return "data-$att_type=\"$att_val\"";
            })
            ->toArray();
    }

    /**
     * Maps the aria attributes
     *
     * @param array $aria_atts
     *
     * @return array
     */
    protected static function mapAriaAtts(array $aria_atts)
    :array
    {
        return collect($aria_atts)
            ->map(function ($att_val, $att_type) {
                return "$att_type=\"$att_val\"";
            })
            ->toArray();
    }
}
