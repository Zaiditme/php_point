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
$chat_ed = $update->edited_message->chat->id; =
$data = $update->callback_query->data;
  
$u = explode("\n",file_get_contents("data/memb.txt"));
$c = count($u)-1;
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("data/memb.txt", $chat_id."\n",FILE_APPEND);
  } 
# ch :- @php_i  #  Dev :- @dev_i  #
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$message_id2 = $update->callback_query->message->message_id;
$php_i = 1445174188;
$u = explode("\n",file_get_contents("data/memb.txt"));
$c = count($u)-1;
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("data/memb.txt", $chat_id."\n",FILE_APPEND);
 }
 # ch :- @php_i  #  Dev :- @dev_i  #
if($text == "الاوامر" and $chat_id == $php_i){
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"اخـتر ما تريـد الان 💡",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"عدد الاعضـاء 🙎🏻‍♂️",'callback_data'=>"count"]],
            [['text'=>"اذاعـة 🥤",'callback_data'=>"send_all"]],
        ] ])]);}
if($data == "count" and $chat_id2 == $sudo and $chat_id2 == $php_i){ //مشتركين البوت = مهمة 1
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عدد مشتركين البوت📬 : $c",
        'show_alert'=>true,
]);}
$mode = file_get_contents("data/dev_i.txt");
if($data == "send_all" and $chat_id2 == $php_i){
    file_put_contents("data/mode.txt","yas");
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,    'message_id'=>$message_id2,
    'text'=>"ارسل رسالتك الان 📩 وسيتم نشرها لـ $c مشترك",   'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"الغاء🚫",'callback_data'=>"off"]],]])]);}
if($text and $mode == "yas" and $chat_id2 == $php_i ){
    for ($i=0; $i < count($u); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$u[$i],
          'text'=>"$text", ]);}} 
if($data == "off"){
    file_put_contents("data/dev_i.txt","no");
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,    'message_id'=>$message_id2,
    'text'=>"تم الالغاء",]);
}
 if ($text == 'الاعضاء' and $chat_id == $php_i) {
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"مستخدمين البوت 🤖 الخاص بك :- $c"
    ]);
  }
  # ch :- @php_i  #  Dev :- @dev_i  #
