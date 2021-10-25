<?php

    require_once("wp-load.php");

    switch($_POST['action']){
        
        case "breached":
            $password = $_POST["password"];
            $sha1 = sha1($password);
            
            $sha1prefix = substr($sha1, 0, 5);
            $sha1suffix = substr($sha1, 5, strlen($sha1));
            
            $data = file_get_contents("https://api.pwnedpasswords.com/range/$sha1prefix");

            //echo "$sha1 $sha1prefix $sha1suffix $data";
            
            $result = stripos($data, $sha1suffix);
            
            if(stripos($data, $sha1suffix)){
                echo json_encode(array('breached'=>true, 'message'=>__('Password breached.')));
            }else{
                echo json_encode(array('breached'=>false, 'message'=>__('Password not breached.')));            
            }
            
        break;

        case "login":
      
      	$info = array();
        $info['user_login'] = $_POST["username"];
        $info['user_password'] = $_POST["password"];
      	
      	$user_signon = wp_signon( $info, '' ); 
        if ( is_wp_error($user_signon) ){
    		echo json_encode(array('loggedin'=>false, 'message'=>__('Wrong username or password.')));
        } else {
    		wp_set_current_user($user_signon->ID); 
            echo json_encode(array('loggedin'=>true, 'message'=>__('Logged in')));
        }
          
        break;
       }


?>