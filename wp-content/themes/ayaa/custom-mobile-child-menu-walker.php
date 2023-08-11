<?php
class Custom_Mobile_Child_Menu_Walker extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        if ($depth === 0) {
            $output .= '<ul class="offcanvas-service-item p-0 list-unstyled">';
        }
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $parent_menu_item = '736'; // Replace with the slug of the parent menu item
        $icon_image = get_field('menu_icon', $item->ID); // Replace with your custom field name for the icon
        $description = get_field('menu_subtitle', $item->ID); // Replace with your custom field name for the subtitle

        if ($depth === 1 && $item->menu_item_parent == $parent_menu_item) {
            $output .= '<li class="custom-dorpdown-item">';
            $output .= '<a href="' . $item->url . '" class="text-decoration-none"><div class="d-flex align-items-center gap-3">';
            $output .= '<div class="custom-navitem-icon"><img src="'.$icon_image.'" alt=""></div>';
            $output .= '<div class="custom-navitem-info"><div class="custom-nav-name"><h5 class="fs-15 fw-bold text-clr-dark1">' . $item->title . '</h5></div>';
            $output .= '<div class="custom-nav-des"><p class="fw-medium fs-12 text-clr-dark2">'.$description.'</p></div>';
            $output .= '</div></div></a>';
        }
    }

    function end_lvl(&$output, $depth = 0, $args = null) {
        if ($depth === 0) {
            $output .= '</ul>';
        }
    }


}