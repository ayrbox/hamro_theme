<?php 

function add_minicart_menu($item_output, $item)
{
    if ('MINICART' == $item->attr_title) {
        ob_start(); ?>
            <li class="nav-item">
                <div class="widget_shopping_cart_content">
                    <?php woocommerce_mini_cart() ?>
                </div>
            </li>
        <?php
        $minicart_fragment = ob_get_clean();
        return $minicart_fragment;
    }
    return $item_output;
}



add_filter('walker_nav_menu_start_el', 'add_minicart_menu', 10, 2);




function add_search_menu($item_output, $item)
{
    if ('SEARCH' == $item->attr_title) {
        ob_start(); ?>
            <li class="nav-item position-relative">
                <a class="nav-link nav-search-toggler" href="#"></a>
                <div class="nav-search-form">
                    <?php get_product_search_form(); ?>
                </div>
            </li>
        <?php
        $minicart_fragment = ob_get_clean();
        return $minicart_fragment;
    }
    return $item_output;
}

add_filter('walker_nav_menu_start_el', 'add_search_menu', 10, 2);



function hamro_do_shortcode($tag, array $atts = array(), $content = null)
{
    global $shortcode_tags;

    if (! isset($shortcode_tags[ $tag ])) {
        return false;
    }

    return call_user_func($shortcode_tags[ $tag ], $atts, $content, $tag);
}
