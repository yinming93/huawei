<?php 
header("Content-type: text/html; charset=utf-8");  
$appid = "wx863e78b1aaf4d6f4";  
$url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$appid.'&redirect_uri=http://ym.2dreamchaser.com/yin/hongbao/hb0330/index.php&response_type=code&scope=snsapi_base&state=STATE#wechat_redirect';  
header("Location:".$url); 
?>