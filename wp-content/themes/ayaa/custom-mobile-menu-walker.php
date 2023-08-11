<?php
class Custom_Mobile_Menu_Walker extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        $arrow_image = esc_url(get_template_directory_uri() . '/assets/img/tooltip.png');
        if ($depth === 0) {
            $output .= '<ul class="list-unstyled">';
        }
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        if ($depth === 0) {
            $output .= '<li class="">';
            $output .= '<a href="' . $item->url . '" class="text-decoration-none fs-14 text-clr-dark1 fw-semi-bold d-flex justify-content-between" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">';
            $output .= '<span>' . $item->title . '</span>';
            if (in_array('menu-item-has-children', $item->classes)) {
                $output .= '<span class="fs-6 ni ni-forward-ios me-2 pe-1"></span>';
            }
            $output .= '</a>';
        }
    }

    function end_el(&$output, $item, $depth = 0, $args = null) {
        if ($depth === 0) {
            $output .= '</li>';
        }
    }



    function end_lvl(&$output, $depth = 0, $args = null) {
        if ($depth === 0) {
            $output .= '</ul>';
        }
    }


}