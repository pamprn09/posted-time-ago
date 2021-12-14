<?php 
function relative_time($format, $post_id) {
    $d1 = new \DateTime(get_the_date('c', $post_id));
    $d2 = new \DateTime(current_time('c'));
    $diff = $d2->diff($d1);
    $d = $diff->d;
    $h = $diff->h;
    $m= $diff->m;

    if ($d == 0) {
        if ($h == 0) {
            return "{$m}m ago";
        }
        return "{$h}h {$m}m ago";
    }

    return "{$d}d {$h}h {$m}m ago";
    
}
