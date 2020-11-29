<?php
define('API_KEY', '1428584873:AAHVQ85ISUajjcBRSuOVsrHafa5IpI256uU');
$Manager = "502373783";
$compane = "Asadbek";
function bot($method, $datas = []){
    $url = "https://api.telegram.org/bot".API_KEY."/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
    $res = curl_exec($ch);
    curl_close($ch);
    if (!curl_error($ch)) return json_decode($res);
};
function html($text){
    return str_replace(['<','>'],['&#60;','&#62;'],$text);
};
$update = json_decode(file_get_contents('php://input'));
//test log
file_put_contents("log.txt",file_get_contents('php://input'));
{
"update_id":502373783,
  "message":{
  "message_id":39,
  "from":
   {
   "id":502373783,"is_bot":false,
   "first_name":"Asadbek",
   "last_name":"turg'unov",
   "username":"asadbeknung_telegrami",
   "language_code":"eng"
   },
  "chat":
  {
   "id":5023737831,
   "first_name":"Asadbek",
   "last_name":"turg'unov",
   "username":"asadbeknung_telegrami",
   "type":"private"
  },
"date":502373783,
"text":"/start",
"entities":[{"offset":0,"length":6,"type":"bot_command"}]}
}
// message variables
$message = $update->message;
$text = html($message->text);
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$message_id = $message->message_id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$full_name = html($first_name . " " . $last_name);

// replymessage
$reply_to_message = $message->reply_to_message;
$reply_chat_id = $message->reply_to_message->forward_from->id;
$reply_text = $message->text;
if($text=='/start'){
$reply='assalomu aleykum';
    bot('sendmessage', ['chat_id' => $chat_id, 'text' => $reply,'parse_mode' => "HTML",]);
}
