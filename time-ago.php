<?php 
function thehill_relative_time($format, $post_id) {
    $post_date = get_the_time($format, $post_id);
    $delta = (time() - $post_date);
    $m = floor(($delta%3600)/60);
    $h = floor(($delta%86400)/3600);
    $d = floor(($delta%2592000)/86400);

    if ($d == 0) {
        if ($h == 0) {
            return "{$m}m ago";
        }
        return "{$h}h {$m}m ago";
    }

    return "{$d}d {$h}h {$m}m ago";
    
}
