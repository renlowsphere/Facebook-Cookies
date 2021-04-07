<?php
system("clear");
echo "
   _____    _____    ____   |  /   O   ____    ____
  |        /     \  /    \  |_/    |  |        \
  |        |     |  |    |  | \    |  |----     ()
  |_____   |_____|  |____|  |  \   |  |____    __ /
                         V1.0   By Ren Lowsphere
  ";
$url = "https://m.facebook.com/login.php";
$ch = curl_init();
$em = readline("
[#]Email, Phone or ID: ");
$pa = readline("
[#]Password: ");
$cookie = 'cookies.txt';
curl_setopt($ch, CURLOPT_REFERER,
   "https://www.facebook.com");
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS,'email='.urlencode($em).'&pass='.urlencode($pa).'&login=Login');
curl_setopt($ch, CURLOPT_POST, 1);

 curl_setopt($ch, CURLOPT_HEADER, 0);

 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIEJAR,$cookie);
 curl_setopt($ch, CURLOPT_COOKIEFILE,$cookie);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Android 8.1.0; Mobile; rv:84.0) Gecko/84.0 Firefox/84.0");
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
    $last = curl_exec($ch);
    $word = "c_user";
    $wor = "home";
    $wo = "checkpoint";
    $js = curl_getinfo($ch, CURLINFO_HEADER_OUT);
    if(strpos($js, $word) !== false){
    	echo " Correct Password! 
    	saved to cookies.txt \n";
    	sleep(2); echo "\n Coded by Ren Lowsphere 
    	\n Thanks for usage!";
    	system("termux-open-url https://renlowsphere.surge.sh/");
    	echo "\n Telegram: @renlowsphere
    	 Instagram: renlowsphere";
    }
    if(strpos($js, $wor) !== false){
    echo "Correct Password! 
        Saved to cookies.txt\n";
        sleep(2); echo "\n Coded by Ren Lowsphere \n Thanks for usage!";
system("termux-open-url https://renlowsphere.surge.sh/");
echo "\n Telegram: @renlowsphere
Instagram: renlowsphere";
    }
    if (strpos($js,  $wo) !== false){
    echo "Checkpoint..";
    system("rm -rf cookies.txt");
    }
    $r = "recover";
    if(strpos($js, $r) !== false){
    	echo "Wrong Password!";
    	system("rm -rf cookies.txt");
    }
?>
