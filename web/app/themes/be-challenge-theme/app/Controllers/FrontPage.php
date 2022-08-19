<?php

declare(strict_types = 1);

namespace App\Controllers;

use Illuminate\Support\Collection;
use Sober\Controller\Controller;
use WP_Query;

class FrontPage extends Controller
{

    /**
     * ACF Field Values
     *
     * @var string[]
     */
    protected $acf = [
        'hero_title',
        'hero_content',
        'about_title',
        'about_content',
        'about_image',
        'why_title',
        'why_subtitle',
        'why_content',
        'why_image',
        'faq_title',
        'faq_subtitle',
        'faq_content',
        'faq_repeater_title',
        'expand_accordion',
        'collapse_accordion',
    ];
 
    /**
     * This function should return all posts of the "FAQ" custom post type.
     * It will automatically expose a variable $faq that you can use in home-faq-blade.php partial.
     * You can return an array, an object, a Collection, a List, etc. It's your call!
     */
    public function faq()
    {

     

        $args = array(
            'post_type' => 'faqs',
            
        
        );
        
        $result = new WP_Query($args);

       
        $faqArray = [];
        $faqArrayInc = 0;


        if ($result->have_posts()){
            

            while ($result->have_posts()){
                
                $result->the_post();

                $faqArray[$faqArrayInc] = array(get_the_title(),get_the_content());
        
                                                                          
                $faqArrayInc++;
                                                                
                                                              
        
            // $faqTitle =   "get_title()";
       
            $faqTitle = get_the_title();;
        
    
     
        
        
        
            }
    }
      





        return $faqArray;
    }

}
