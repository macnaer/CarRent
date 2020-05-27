<?php 

# Hooks
add_action("wp_enqueue_scripts", 'cr_enqueue');
function cr_enqueue()
{
    $url = get_template_directory_uri();
    $ver = time();
    wp_enqueue_style('style', $url . '/assets/css/style.css', [], $ver);
    wp_enqueue_style('bootstrap', $url . '/assets/css/bootstrap.min.css', [], $ver);
    wp_enqueue_style('bootstrap-datepicker', $url . '/assets/css/bootstrap-datepicker.css', [], $ver);
    wp_enqueue_style('jquery-fancybox', $url . '/assets/css/jquery.fancybox.min.css', [], $ver);
    wp_enqueue_style('owl-carousel', $url . '/assets/css/owl.carousel.min.css', [], $ver);
    wp_enqueue_style('owl-theme', $url . '/assets/css/owl.theme.default.min.css', [], $ver);
    wp_enqueue_style('flaticon', $url . '/assets/fonts/flaticon/font/flaticon.css', [], $ver);
    wp_enqueue_style('aos', $url . '/assets/css/aos.css', [], $ver);
    wp_enqueue_style('style-icomoon', $url . '/assets/fonts/icomoon/style.css', [], $ver);

    
    wp_enqueue_script("jquery", $url . "/assets/js/jquery-3.3.1.min.js", [], $ver);
    wp_enqueue_script("popper", $url . "/assets/js/popper.min.js", [], $ver);
    wp_enqueue_script("bootstrap", $url . "/assets/js/bootstrap.min.js", [], $ver);
    wp_enqueue_script("carousel", $url . "/assets/js/owl.carousel.min.js", [], $ver);
    wp_enqueue_script("sticky", $url . "/assets/js/slick.min.js", [], $ver);
    wp_enqueue_script("waypoints", $url . "/assets/js/jquery.waypoints.min.js", [], $ver);
    wp_enqueue_script("animateNumber", $url . "/assets/js/jquery.animateNumber.min.js", [], $ver);
    wp_enqueue_script("fancybox", $url . "/assets/js/jquery.fancybox.min.js", [], $ver);
    wp_enqueue_script("easing", $url . "/assets/js/jquery.easing.1.3.js", [], $ver);
    wp_enqueue_script("datepicker", $url . "/assets/js/bootstrap-datepicker.min.js", [], $ver);
    wp_enqueue_script("aos", $url . "/assets/js/aos.js", [], $ver);
    wp_enqueue_script("main", $url . "/assets/js/main.js", [], $ver);
}
