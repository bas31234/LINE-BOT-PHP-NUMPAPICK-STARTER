 <?php
  

function send_LINE($msg){
 $access_token = 'Ld3zC1kgptNaWyyNdrp7dzS1fe7EwBI2hDNdzPPZ/hRba0y6qSv05Qp6MJmXnhQHI7bkMj+6V+Q9jLOwHq4SlRVHrRzR9EEDKZgg6AcFgTfPz9t9yzonInMGZWYKsFUT4vDnI80M+AiRB7tdZPHbVQdB04t89/1O/w1cDnyilFU=
'; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'Userid' => 'bas31234',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
