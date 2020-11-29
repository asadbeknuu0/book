<?php
ob_start();
define('API_KEY','1428584873:AAHVQ85ISUajjcBRSuOVsrHafa5IpI256uU');
$admin = "502373783"; 

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
function put($fayl,$nima){  
file_put_contents("$fayl","$nima");  
}  
function get($fayl){  
$get = file_get_contents("$fayl");  
return $get;  
}  
   function ty($chat_id){ 
   return bot('sendChatAction', [
   'chat_id' => $chat_id,
   'action' => 'typing',
   ]);
   } 
   function del($nomi){
   array_map('unlink', glob("$nomi"));
   }
          $replyc= json_encode([
           'resize_keyboard'=>false,
                'force_reply' => true,
                'selective' => true
            ]);
$efede = json_decode(file_get_contents('php://input'), true);

$update = json_decode(file_get_contents('php://input'));
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$tx = $message->text;
//callback
$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$callcid = $update->callback_query->message->chat->id;
$clid = $update->callback_query->from->id;
$callmid = $update->callback_query->message->message_id;
$gid = $update->callback_query->message->chat->id;

//call_back
$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$callcid = $update->callback_query->message->chat->id;
$calltext = $update->callback_query->message->text;
$clid = $update->callback_query->from->id;
$callmid = $update->callback_query->message->message_id;
$gid = $update->callback_query->message->chat->id;

//user
$id = $message->reply_to_message->from->id;   
$repmid = $message->reply_to_message->message_id; 
$repname = $message->reply_to_message->from->first_name;
$repulogin = $message->reply_to_message->from->username;
$reply = $message->reply_to_message;
$sreply = $message->reply_to_message->text;


$mid = $message->message_id;
$edname = $editm ->from->first_name;
$forward2 = $update->message->forward_from;
$editm = $update->edited_message;
mkdir("data");
mkdir("data/$fadmin");
$starttx = "👋* Salom!* Bu Bot Yordamida:
🌠 *Super Logotiplar Yaratishingiz Mumkin!*
💡 Bu Juda Oddiy, Shunchaki:
📝 `/logo10` Yoki `/logo15`, `/logo45` ...
✏️ *So'zidan So'ng Ismingizni Yozing!*
📄 *Masalan* `/logo11 Abroriy`
❗️ `/logo` so'zidan so'ng *10 dan 84 gacha* raqamlarni ishlatishingiz mumkin!
💌 `/ism Ismingiz` - Manosini bilish,
🔖 *Masalan:* `/ism Abror`";

if(mb_stripos($tx,"/start")!==false){

   $baza=file_get_contents("data/users.txt");
   if(mb_stripos($baza,$chat_id) !==false){
   }else{
   $txt="\n$chat_id";
   $file=fopen("data/users.txt","a");
   fwrite($file,$txt);
   fclose($file);
   }
}

    if(stripos($tx,"/start") !== false){
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$starttx,
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
   'inline_keyboard'=>[
    [['text'=>'👨‍💻 Support','callback_data'=>'sup'],['text'=>'💎 Loyihalar','callback_data'=>'project']],
       ]
    ])
  ]);
}




if($data=="sup"){
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"👨‍💻 Creator: @Abroriy
📡 Kanal: @PHP_OWN
👥 Guruh: @PHP_Owners

💪 @PHP_OWN - Doim Birinchi!",
        'parse_mode'=>'html',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"🔙Ortga qaytish", 'callback_data'=>"back"]]
           ]
        ])
    ]);
}
if($data=="back"){
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"$starttx",
        'parse_mode'=>'markdown',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>'👨‍💻 Support','callback_data'=>'sup'],['text'=>'💎 Loyihalar','callback_data'=>'project']]
           ]
        ])
    ]);
}
if($data=="project"){
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"👨‍💻 @PHP_OWN Dasturchilar Jamoasi Tasarrufidagi Loyihalar:

💣 @GoPHPbot - Tayyor bot konstruktor!
💣 @uChanBot - Guruhga Kanal Ulaydi!
🎁 @AdvokatBot - Guruhlarni nazorat qilish
🎁 @YoqtiBot - Advokat nusxasi
🆕 @ilogoBot - Super Logotiplar Yaratish
🎁 @MixChangeBot - Valyuta obmennik (offline)
🎁 @UzChanBot - Kanaldagi Postlarga Avtomatik Like&Share qo'yuvchi
🎁 @UzFileNameBot - Fayllarni Qayta Nomlovchi Bot
🌙 @IslomMediaBot - Islomiy bot
🎁 @MakeMediabot - Media Maker
🎁 @ChannelMediaBot - Kanalda MP3 Maker

📡 @PHP_OWN - Dasturchilar Kanali
📡 @Qitmirvoy - Universal kanal

😎 @Abroriy - Asosiy Dasturchi",
        'parse_mode'=>'html',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"🔙Ortga qaytish", 'callback_data'=>"back"]]
           ]
        ])
    ]);
}
if(mb_stripos($tx,"stat")!==false){
      $baza=file_get_contents("data/users.txt");
      $all=substr_count($baza,"\n");
      $gr=substr_count($baza,"-");
      $us=$all-$gr;
      $text = "<b>📡 Bot Foydalanuvchilari
👥 Super Group: $gr
👤 Userlar: $us
👨‍👩‍👧‍👦 Jami: $all
🏆</b> @PHP_Owners
📣 @PHP_OWN";
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'parse_mode'=>'html',
   'text'=>$text,
  ]);
}
if(mb_stripos($tx,"logo10") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=matrix-style-text-effect-online-884",
'caption'=>"✅ 10 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo11") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=neon-light-text-effect-online-882",
'caption'=>"✅ 11 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo12") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=rock-text-effect-online-915",
'caption'=>"✅ 12 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo13") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=road-warning-text-effect-878",
'caption'=>"✅ 13 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo14") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=toxic-text-effect-online-901",
'caption'=>"✅ 14 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo15") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=dropwater-text-effect-872",
'caption'=>"✅ 15 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo16") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=horror-blood-text-effect-online-883",
'caption'=>"✅ 16 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo17") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=break-wall-text-effect-871",
'caption'=>"✅ 17 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo18") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=wood-text-effect-856",
'caption'=>"✅ 18 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo19") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=advanced-glow-text-effect-873",
'caption'=>"✅ 19 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo20") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=create-3d-avengers-logo-online-974",
'caption'=>"✅ 20 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo21") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=captain-america-text-effect-905",
'caption'=>"✅ 21 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo22") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=natural-leaves-text-effect-931",
'caption'=>"✅ 22 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo23") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=create-wolf-logo-black-white-937",
'caption'=>"✅ 23 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo24") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=create-lion-logo-mascot-online-938",
'caption'=>"✅ 24 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo25") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=purple-foil-balloon-text-effect-927",
'caption'=>"✅ 25 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo26") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=carbon-text-effect-833",
'caption'=>"✅ 26 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo27") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=decorate-green-text-effect-918",
'caption'=>"✅ 27 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo28") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=cyan-glass-text-effect-909",
'caption'=>"✅ 28 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo29") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=firework-sparkle-text-effect-930",
'caption'=>"✅ 29 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo30") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=bokeh-text-effect-876",
'caption'=>"✅ 30 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo31") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=thunder-text-effect-online-881",
'caption'=>"✅ 31 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo32") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=happ-new-year-card-firework-gif-959",
'caption'=>"✅ 32 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo33") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=neon-text-effect-online-963",
'caption'=>"✅ 33 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo34") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=rainbow-equalizer-text-effect-902",
'caption'=>"✅ 34 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo35") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=green-neon-text-effect-874",
'caption'=>"✅ 35 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo36") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=neon-light-text-effect-online-882",
'caption'=>"✅ 36 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo37") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=holographic-3d-text-effect-975",
'caption'=>"✅ 37 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo38") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=neon-text-effect-online-879",
'caption'=>"✅ 38 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo39") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=metal-purple-dual-effect-973",
'caption'=>"✅ 39 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo40") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=deluxe-silver-text-effect-970",
'caption'=>"✅ 40 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo41") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=color-full-luxury-metal-text-effect-969",
'caption'=>"✅ 41 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo42") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=deluxe-gold-text-effect-966",
'caption'=>"✅ 42 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo43") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=create-text-logo-3d-metal-online-957",
'caption'=>"✅ 43 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo44") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=metal-dark-gold-text-effect-online-939",
'caption'=>"✅ 44 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo45") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=steel-text-effect-online-921",
'caption'=>"✅ 45 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo46") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=rusty-metal-text-effect-860",
'caption'=>"✅ 46 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo47") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=shiny-metal-text-effect-852",
'caption'=>"✅ 47 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo48") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=hot-metal-text-effect-843",
'caption'=>"✅ 48 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo49") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=blue-metal-text-effect-831",
'caption'=>"✅ 49 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo50") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=black-metal-text-effect-829",
'caption'=>"✅ 50 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo51") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=3d-chrome-text-effect-827",
'caption'=>"✅ 51 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo52") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=create-ninja-logo-online-935",
'caption'=>"✅ 52 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo53") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=create-logo-joker-online-934",
'caption'=>"✅ 53 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo54") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=wicker-text-effect-online-932",
'caption'=>"✅ 54 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo55") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=natural-leaves-text-effect-931",
'caption'=>"✅ 55 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo56") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=skeleton-text-effect-online-929",
'caption'=>"✅ 56 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo57") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=lava-text-effect-online-914",
'caption'=>"✅ 57 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo58") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=captain-america-text-effect-905",
'caption'=>"✅ 58 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo59") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=toxic-text-effect-online-901",
'caption'=>"✅ 59 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo60") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=purple-glass-text-effect-online-892",
'caption'=>"✅ 60 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo61") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=break-wall-text-effect-871",
'caption'=>"✅ 61 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo62") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=chrismast-gift-text-effect-869",
'caption'=>"✅ 62 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo63") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=plastic-bag-drug-text-effect-867",
'caption'=>"✅ 63 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo64") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=horror-gift-text-effect-866",
'caption'=>"✅ 64 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo65") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=ice-cold-text-effect-862",
'caption'=>"✅ 65 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo66") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=fruit-juice-text-effect-861",
'caption'=>"✅ 66 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo67") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=chocolate-cake-text-effect-890",
'caption'=>"✅ 67 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo68") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=strawberry-text-effect-online-889",
'caption'=>"✅ 68 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo69") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=bread-text-effect-online-887",
'caption'=>"✅ 69 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo70") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=honey-text-effect-868",
'caption'=>"✅ 70 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo71") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=biscuit-text-effect-858",
'caption'=>"✅ 71 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo72") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=pink-sparkling-jewelry-text-effect-899",
'caption'=>"✅ 72 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo73") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=cyan-sparkling-jewelry-text-effect-893",
'caption'=>"✅ 73 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo74") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=marble-text-effect-863",
'caption'=>"✅ 74 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo75") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=abstra-gold-text-effect-859",
'caption'=>"✅ 75 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo76") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=purple-gem-text-effect-853",
'caption'=>"✅ 76 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo77") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=silver-jewelry-text-effect-850",
'caption'=>"✅ 77 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo78") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=hexa-golden-text-effect-842",
'caption'=>"✅ 78 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo79") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=blue-glitter-text-effect-841",
'caption'=>"✅ 79 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo80") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=blue-gem-text-effect-830",
'caption'=>"✅ 80 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo81") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=3d-box-text-effect-online-880",
'caption'=>"✅ 81 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo82") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=3d-steel-text-effect-877",
'caption'=>"✅ 82 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo83") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=robot-r2-d2-text-effect-903",
'caption'=>"✅ 83 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}
if(mb_stripos($tx,"logo84") !== false){ 
$ex = explode(" ",$tx);
bot('SendMessage',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'text'=>"🕑 Tayyorlanmoqda...",
]);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://uzkod.ru/go.php?text=$ex[1]&type=sci-fi-text-effect-855",
'caption'=>"✅ 83 Raqamli Logo Tayyor!
🤖 Tayyorlovchi: @ilogoBot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
  [['text'=>'👥','url'=>'https://telegram.me/ilogoBot?startgroup=new'],['text'=>'📡','url'=>'https://telegram.me/php_own'],['text'=>'📝','url'=>'https://telegram.me/php_owners'],['text'=>'👨‍✈️','url'=>'https://telegram.me/abroriy']]
]
])
]);
}





if(mb_stripos($tx,"/ism") !== false){
    sleep("0.5");
$ex=explode(" ",$tx);
$ism = file_get_contents("https://ismlar.com/search/$ex[1]");
$exp = explode('<p class="text-size-5">',$ism);
$expl = explode('<div class="col-12 col-md-4 text-md-right">',$exp[1]);
$im = str_replace($expl[1],' ',$exp[1]);
$ims = str_replace('</p>',' ',$im);
$isms = str_replace('</div>',' ',$ims);
$ismn = str_replace('<div class="col-12 col-md-4 text-md-right">',' ',$isms);
$ismk = str_replace('&#039;','`',$ismn);
$ismm = trim("$ismk");
bot('SendMessage',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$mid,
'text'=>"📙<b>Ismlar Ma'nosi

🔖 $ex[1]

📑Manosi:</b> <i>$ismm</i>",
'parse_mode' => 'html'
    ]);
    sleep("0.5");
   }











?>
