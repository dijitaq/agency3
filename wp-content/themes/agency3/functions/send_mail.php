<?php

function agency3_send_email () {
	
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "), $name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    //$to = get_option('admin_email');
    $to = 'sandy@agency3.com.au';
    $headers = 'From: ' . $name . ' <"' . $email . '">';
    $subject = "Agency3 | New Message from " . $name;
    
    ob_start();
    
    //
    $email_content = "Name: $name \n";
    $email_content .= "Email: $email \n\n";
    $email_content .= "Message:\n $message \n";

    // Build the email headers.
    $email_headers = array('Content-Type: text/html; charset=UTF-8');
    
    $message = ob_get_contents();
    
    ob_end_clean();

    $mail = wp_mail($to, $subject, $email_content, $email_headers);
    
    if($mail){
        $returns = array(
            'success' => '1',
            'message' => "Thank You! Your message has been sent.",
        );

    } else {
    	$returns = array(
            'success' => '0',
            'message' => "Oops! Something went wrong and we could not send your message.",
        );
    }

    echo json_encode($returns); 

	wp_die();
}

function agency3_mail_content_type() {
    return "text/html";
}

add_action( 'wp_ajax_agency3_send_email', 'agency3_send_email' );
add_action( 'wp_ajax_nopriv_agency3_send_email', 'agency3_send_email' );
add_action( 'wp_mail_content_type', 'agency3_mail_content_type' );