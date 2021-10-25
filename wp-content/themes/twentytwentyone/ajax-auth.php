<?php

	$info = array();
    $info['user_login'] = $POST["username"];
    $info['user_password'] = $POST["password"];

	
	$user_signon = wp_signon( $info, '' ); // From false to '' since v4.9
    if ( is_wp_error($user_signon) ){
		echo json_encode(array('loggedin'=>false, 'message'=>__('Wrong username or password.')));
    } else {
		wp_set_current_user($user_signon->ID); 
        echo json_encode(array('loggedin'=>true, 'message'=>__(' successful, redirecting...')));
    }

?>