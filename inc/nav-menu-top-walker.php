<?php

class Nav_Menu_Top_Walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $current_class = '';
        $default_class = 'inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium';

        if (array_search('current-menu-item', $item->classes) != 0) {
            $current_class = 'active border-secondary text-secondary';
        } else {
            $current_class = 'border-transparent text-white hover:border-secondary hover:text-secondary';
        }

        $item_class = $current_class . ' ' . $default_class;

        $output .= '<li class="' . $item_class . '"><a href="' . $item->url . '">' . $item->title;
    }

    function end_el(&$output, $item, $depth = 0, $args = array())
    {
        $output .= '</a></li>';
    }
}

class Mobile_Menu_Top_Walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $current_class = '';
        $default_class = 'px-1 py-3 text-sm font-medium block';

        if (array_search('current-menu-item', $item->classes) != 0) {
            $current_class = 'active bg-secondary text-white';
        } else {
            $current_class = 'text-white';
        }

        $item_class = $current_class . ' ' . $default_class;

        $output .= '<li class=""><a class="' . $item_class . '" href="' . $item->url . '">' . $item->title;
    }

    function end_el(&$output, $item, $depth = 0, $args = array())
    {
        $output .= '</a></li>';
    }
}

class Footer_Menu_Walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $output .= '<li class="text-sm leading-6 text-white hover:text-white"><a href="' . $item->url . '" title="' . $item->title . '">' . $item->title;
    }

    function end_el(&$output, $item, $depth = 0, $args = array())
    {
        $output .= '</a></li>';
    }
}
