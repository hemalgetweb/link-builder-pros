<?php
class Custom_Mega_Menu_Walker extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        $arrow_image = esc_url(get_template_directory_uri() . '/assets/img/tooltip.png');
        if ($depth === 0) {
            $output .= '<ul class="custom-dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">';
            $output .= '<div class="tool-tip position-relative"><img src="'.$arrow_image.'" alt=""></div>';
            $output .= '<div class="m-menu-widgets"><ul class="custom-dropdown-wrapper p-0">';
        } elseif ($depth === 1) {
            $output .= '<div class="tool-tip position-relative"><img src="assets/img/tooltip.png" alt=""></div>';
            $output .= '<div class="m-menu-widgets"><ul class="custom-dropdown-wrapper p-0">';
        }
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $icon_image = get_field('menu_icon', $item->ID);
        $description = get_field('menu_subtitle', $item->ID);

        if ($depth === 0) {
            if (in_array('menu-item-has-children', $item->classes)) {
                $output .= '<li class="nav-item dropdown fw-medium fs-6 custom-dropdown">';
                $output .= '<a class="nav-link dropdown-toggle active" href="' . esc_url($item->url) . '" role="button" data-bs-toggle="dropdown">' . $item->title . '</a>';
            } else {
                $output .= '<li class="nav-item">';
                $output .= '<a class="nav-link text-clr-dark1 fw-medium fs-6" href="' . esc_url($item->url) . '" role="button" >' . $item->title . '</a>';
            }

        } elseif ($depth === 1) {
            $output .= '<li class="custom-dorpdown-item cuscehck">';
            $output .= '<a href="' . $item->url . '" class="text-decoration-none"><div class="d-flex align-items-center gap-3">';
            $output .= '<div class="custom-navitem-icon"><img src="'.$icon_image.'" alt=""></div>';
            $output .= '<div class="custom-navitem-info"><div class="custom-nav-name"><h5 class="fs-15 fw-bold text-clr-dark1">' . $item->title . '</h5></div>';
            $output .= '<div class="custom-nav-des"><p class="fw-medium fs-12 text-clr-dark2">'.$description.'</p></div>';
            $output .= '</div></div></a>';
        }
    }

    function end_lvl(&$output, $depth = 0, $args = null) {
        if ($depth === 0) {
            $output .= '</ul></div></ul>';
        } elseif ($depth === 1) {
            $output .= '</ul></div>';
        }
    }

    function end_el(&$output, $item, $depth = 0, $args = null) {
        if ($depth === 0) {
            $output .= '</li>';
        } elseif ($depth === 1) {
            $output .= '</li>';
        }
    }
}