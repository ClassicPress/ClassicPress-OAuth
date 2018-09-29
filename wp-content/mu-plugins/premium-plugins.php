<?php

add_action( 'init', function() {
	if ( ! function_exists( 'wo_is_licensed' ) ) {
		wp_die( 'The WP OAuth Server plugin is required for this site.  Please contact a site administrator for more information.' );
	}
} );
