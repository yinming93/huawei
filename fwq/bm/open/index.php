<?php
	//引入js类文件
	 require_once "jssdk.php";
    $jssdk = new JSSDK( APPID, APPSECRET );
    $signPackage = $jssdk->GetSignPackage();
    if(isset($_GET['code'])){
        include 'func.php';
        define('CODE', $_GET['code']);
        define('APPID', 'wx863e78b1aaf4d6f4'); 
        define('APPSECRET', '2791e35605a17a601eacdcdd83dcd0fd'); 
        //1
        //获页面授权的ACCESS_TOKEN 、 refresh_token、openid、 scope的类型
        $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".APPID."&secret=".APPSECRET."&code=".CODE."&grant_type=authorization_code";
        $json_access_token = https_request($url);
        $arr_access_token  = json_decode($json_access_token, true); //获取access_token
        //2
        $url  = "https://api.weixin.qq.com/sns/userinfo?access_token=". $arr_access_token['access_token'] ."&openid=".$arr_access_token['openid'];
        $json = https_request($url);
        $userinfo_arr = json_decode($json, true); 
        $openid=$userinfo_arr['openid'];
        $wxname=$userinfo_arr['nickname'];
        $wximg=$userinfo_arr['headimgurl'];
        $wxsex=$userinfo_arr['sex'];
        // echo $wxsex;
    } else{
        //echo "NO CODE";
        echo '操作失败！';
        exit;
        //写入日记文件
    }
  if(!$openid){
 	echo "<script>";
 	echo "window.location.href='http://ym.2dreamchaser.com/yin/2018/bm/open/getcodeurl.php';";
 	echo "</script>";
 	exit;
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>获取开发模式信息</title>
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />

<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
</head>
<body>
<p><?php echo $openid; ?></p><br><br>
<p><?php echo $wxname; ?></p><br><br>
<p><?php echo $wxsex; ?></p><br><br>
<img style="width:100px;height:100px;" src="<?php echo $wximg; ?>">
</body>
</html>
<!--开始-->
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript">
wx.config({
		    debug: false,
		    appId: '<?php echo $signPackage["appId"];?>',
		    timestamp: '<?php echo $signPackage["timestamp"];?>',
		    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
		    signature: '<?php echo $signPackage["signature"];?>',
		    jsApiList: [
		"onMenuShareTimeline","onMenuShareAppMessage"
		      // 所有要调用的 API 都要加到这个列表中
		    ]
		  });
		 wx.ready(function () {
		var shareinfo={
		 	 title: '开发信息',
		      desc: '开发信息',
		      link: 'http://ym.2dreamchaser.com/yin/2018/bm/open/getcodeurl.php',
		      imgUrl: 'http://ym.2dreamchaser.com/yin/2018/bm/open/share.jpg'
		  }
      wx.onMenuShareTimeline(shareinfo);
	 wx.onMenuShareAppMessage(shareinfo);
		  });
    </script>
<!--结束-->
