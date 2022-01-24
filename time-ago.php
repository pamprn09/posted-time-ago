<?php

/**
 * Determine how long ago post was published.
 *
 * @param int $post_id ID of post.
 * @return string Human-readable string describing age of post.
 */

function relative_time( $post_id ) {

	$d1   = new \DateTime( get_the_date( 'c', $post_id ) );
	$d2   = new \DateTime( current_time( 'c' ) );
	$diff = $d2->diff( $d1 );
	$d    = $diff->d;
	$h    = $diff->h;
	$m    = $diff->m;

	if ( 0 === $d ) {
		if ( 0 === $h ) {
			return "{$m}m ago";
		}
		return "{$h}h {$m}m ago";
	}

	return "{$d}d {$h}h {$m}m ago";
}
