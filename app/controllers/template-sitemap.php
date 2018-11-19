<?php

namespace App;

use Sober\Controller\Controller;

class Sitemap extends Controller
{
    public function sitemap()
    {
        $args = array(
            'exclude'      => '',
            'title_li'     => __(''),
            'echo'         => 0,
            'sort_column'  => 'menu_order',
        );

        return wp_list_pages($args);
    }
}
