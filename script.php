#!/usr/bin/php
<?php
/*
This Code Was created by Akbar
FB : https://facebook.com/akbar.fx23
Phone : 083807804186
E-mail : ckpakbar23@gmail.com
*/
date_default_timezone_set('Asia/Jakarta');
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');
ini_set('output_buffering',0); 
ini_set('request_order', 'GP');
ini_set('variables_order','EGPCS');
ini_set('max_execution_time','-1');
ini_set('user_agent', 'Mozilla/5.0 (Linux; Android 6.0; E1C 3G Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Mobile Safari/537.36');
if (date("H") >= 4){
$url = array(
'http://japakar.com/blk/faucet.php?coinhive-captcha-token=yZG6bmyKLOy30tIPvDN8bNRBYUWYOoTl&address=BTkjcJ4ByM57jrsw58Fv1MnFRfu5wmE8cJ&currency=BLK&key=6e7f1a02239a2fd61cdf4cf7d36ddde4',
'http://japakar.com/dash/faucet.php?coinhive-captcha-token=br46zaKRKJY6RYZaJlnbiLFFMZWyq4n3&address=Xg86L1ys5NsWqQgq5gf12vmGiyTrmvCrMT&currency=DASH&key=4b217e335fea37c5eb312fddde9e9ecf',
'http://japakar.com/dash/faucet.php?coinhive-captcha-token=67TIdfjakxS5rl3W5ZLZjktx70tLUt4M&address=Xv6uumZnVp7ACKyKoyy7qUe5KsZRsKdPmt&currency=DASH&key=a8ff66ed2a2d07556efe40d7c4573772',
'http://japakar.com/doge/faucet.php?coinhive-captcha-token=hG1QdZXvPcnmXWCnY2uQ45mYzG3t62cq&address=D9LXCfLiTnfuRJ1DYLhxqPBX2cBGaxhSLm&currency=DOGE&key=809854b1de0e47dd0e65414fb2529a7f',
'http://japakar.com/eth/faucet.php?coinhive-captcha-token=n27JTLFUhItvboVba8f8bvwUX2ZIsbcG&address=0xb0fa9ed6d4d053c084b76811aa0887a76dde1901&currency=ETH&key=09ca65dc4fc768c1c33dfc4dea8c14e9',
'http://japakar.com/ppc/faucet.php?coinhive-captcha-token=jxa2DuxbQxTTiey1VZBf0ey38lD5CrsM&address=PLyMRbMLz3h3B5nvPogN7yLjb7gPv8uJVY&currency=PPC&key=d5dcef43a5e7bb4bbe9b39dfad1bcd71,
'http://japakar.com/xpm/faucet.php?coinhive-captcha-token=5pybaPdDbsMpKzbMnYyJaO2a0UGvfvVe&address=AZTCuQj8nG83gDTwk5BLC5xsuhZ2zn9NKu&currency=XPM&key=fc39eb5518e081013de0da78b4e5ea34',
'http://faucet-mining.club//faucet.php?address=BTkjcJ4ByM57jrsw58Fv1MnFRfu5wmE8cJ&currency=BLK&key=06eaa51ec7089164e5a9944146b9838d,
'http://faucet-mining.club//faucet.php?address=D9LXCfLiTnfuRJ1DYLhxqPBX2cBGaxhSLm&currency=DOGE&key=def75dc10b655a62eeceb5036d6bc8e5',
'http://faucet-mining.club//faucet.php?address=Lbd5hyXWbse64Wx5XxgC3zdpyofgSjCakj&currency=LTC&key=fac54242f49b995ad7458e69a2097204',
'http://faucet-mining.club//faucet.php?address=AZTCuQj8nG83gDTwk5BLC5xsuhZ2zn9NKu&currency=XPM&key=d99eddb0b7870cc0fcce615a9c3ad49e',
'http://faucet-mining.club//faucet.php?address=PLyMRbMLz3h3B5nvPogN7yLjb7gPv8uJVY&currency=PPC&key=b1524fd8afb1d7589dc1b457b828a006',
'http://idle.nekoearn.com/blk/faucet.php?address=BTkjcJ4ByM57jrsw58Fv1MnFRfu5wmE8cJ&currency=BLK&key=f97c9fd001da54583da97a741b848346',
'http://idle.nekoearn.com/dash/faucet.php?address=Xv6uumZnVp7ACKyKoyy7qUe5KsZRsKdPmt&currency=DASH&key=ddda556379704bba7c1627dca7feabc0',
'http://idle.nekoearn.com/doge/faucet.php?address=D9LXCfLiTnfuRJ1DYLhxqPBX2cBGaxhSLm&currency=DOGE&key=d007c182f8bd0d5b24f1a6b72ab7924e',
'http://idle.nekoearn.com/eth/faucet.php?address=0xb0fa9ed6d4d053c084b76811aa0887a76dde1901&currency=ETH&key=fc421082cc03e45135a4ed73e999b329',
'http://idle.nekoearn.com/ltc/faucet.php?address=Lbd5hyXWbse64Wx5XxgC3zdpyofgSjCakj&currency=LTC&key=248bed6d1039f57cc26024b5b552e38a',
'http://idle.nekoearn.com/ppc/faucet.php?address=PLyMRbMLz3h3B5nvPogN7yLjb7gPv8uJVY&currency=PPC&key=4dfda476781fd482b9157c12702f9a04',
'http://idle.nekoearn.com/xpm/faucet.php?address=AZTCuQj8nG83gDTwk5BLC5xsuhZ2zn9NKu&currency=XPM&key=86cc16a4ededd0f8b2fbf6fac6600c08',
'http://letsgetstarted.cloudminingfromzero.com/faucet.php?coinhive-captcha-token=JNNdn0VgCmI4wX4CtA53rcyCPCUhrUJL&address=BTkjcJ4ByM57jrsw58Fv1MnFRfu5wmE8cJ&currency=BLK&key=00b898952ee5eebcbfaa401db52b7339',
'letsgetstarted.cloudminingfromzero.com/faucet.php?coinhive-captcha-token=hykktkpKnzFuZhjqV6Q27Gpa0V60orzv&address=D9LXCfLiTnfuRJ1DYLhxqPBX2cBGaxhSLm&currency=DOGE&key=26b357abdedf4a13005d91379052eda1',);
foreach($url as $link){
	$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_REFERER, 'https://google.com');
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Win64; x64; Trident/4.0; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; NeoDownloader Embedded Web Browser from: http://bsalsa.com/; .NET CLR 2.0.50727; SLCC2; .NET CLR 3.5.30729; .NET CLR 3.0.30729)');
    curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie');
    curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie');
    $data = curl_exec($ch);
    curl_close($data);
    $one = explode('<div class="alert alert-success">', $data);
    $two = explode('</div>', $one[1]);
    $pr = "$two[0]\n";
    echo $pr;
}
}else{
echo "Time to Sleep and have  a nice dream";
}
?>