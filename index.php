<?php
/*
  ___                   _         _ 
 | . \ ___  ___  ___  _| | ___  _| |
 |   // __)/    / . \/ . |/ __)/ . |
 |_\_\\___.\___ \___/\___|\___.\___|
 
Programmer(); 
@zayoudy                    
*/
ob_start();
$BOT_KEY = '5632479348:AAHSz591sPZm-NHKJSlLlzSGKzpVj8Gdoww'; /*TOKEN BOT*/
define('API_KEY',$BOT_KEY,0);
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name;
$username = $message->from->username;
$title = $message->chat->title;
$edited = $update->edited_message;
$chat_ed = $update->edited_message->chat->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
      
if($text == "/start"){
$start = array(
'حياك الله',
'أهلا وسهلا',
'كل الهلا',
'ياهلا بالطيبين',
' أرررحب',);
$rstart = array_rand($start, 1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"text"=>$start[$rstart],
'reply_to_message_id'=>$message->message_id
]);
} 
