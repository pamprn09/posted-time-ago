<?php

//Building arguments
$args = array(
    'post_type'     => 'post',
	  'post_per_page' => 3,
);

// The Query
$the_query = new WP_Query( $args );


// The Loop
if ( $the_query->have_posts() ) {

    echo '<ul>';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        $id = get_the_ID();
        $custom_time = thehill_time_since_publish($id);
            echo '<li>' . get_the_title() . '-' . 	$custom_time . '</li>';
        }
    echo '</ul>';
}
