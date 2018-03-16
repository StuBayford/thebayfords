<?php

function form_subscribe() {
  $api_key = '78c1e18ef653eaea0785db60b4d34e3b-us17';
  $datacenter = 'us17';
  $list_id = 'd6770b97c6';
  $email = $_POST['email'];
  $status = $_POST['status'];
  $spam = $_POST['spam'];

  if (empty($_POST['status'])) {
    $status = 'pending';
  }

  if ($spam == '') {
    $url = 'https://'.$datacenter.'.api.mailchimp.com/3.0/lists/'.$list_id.'/members/';
    $username = 'apikey';
    $password = $api_key;
    $data = array(
      "email_address" => $email,
      "status" => $status
    );
    $data_string = json_encode($data);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_USERPWD, "$username:$api_key");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_string))
    );
    $result = curl_exec($ch);
    curl_close($ch);
    // echo $result;
    wp_send_json($result);
  }
}

add_action('wp_ajax_form_subscribe', 'form_subscribe');
add_action('wp_ajax_nopriv_form_subscribe', 'form_subscribe');

?>