<?php
if ( get_query_var('paged') ) {
	$paged = get_query_var('paged');
} elseif ( get_query_var('page') ) {
	$paged = get_query_var('page');
} else {
	$paged = 1;
}
query_posts( array( 'post_type' => 'post', 'paged' => $paged ) );
if ( have_posts() ) : $count = 0; while ( have_posts() ) : the_post(); $count++;
?>