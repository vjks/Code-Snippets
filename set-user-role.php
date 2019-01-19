<?php
add_action( 'tc_order_updated_status_to_paid', 'change_user_role', 10, 5 );

function change_user_role( $order_id, $status, $cart_contents, $cart_info, $payment_info ) {
	if( strcmp( $status, "order_paid" ) == 0 ) {
		$user_id = get_post_field( 'post_author', $order_id );
		$user_meta = get_userdata( $user_id );
		$user_roles = $user_meta->roles;
		if ( in_array("subscriber", $user_roles) ) {
			$user = new WP_User( $user_id );
			$user->set_role( 'editor' );
		}
	}
}

?>
