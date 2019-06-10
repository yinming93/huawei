<?php
	 require_once "jssdk.php";
    $jssdk = new JSSDK( APPID, APPSECRET );
    $signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>绿都工程进度</title>
    <!-- Bootstrap -->
    <link href="./lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
	<style>
	body{
		margin: 0px;
		padding: 0px;
		font-family: "微软雅黑";
		background-color: black;
		}
	.box{
    	width: 100%;
        margin: 0px;
        padding: 0px;
		position: absolute;
		background-color: #000;
		top:0px;
		left:0px;
		overflow: hidden;
		}
	.modal-dialog{
		margin-top:40%;
	}
	.box img{
		width: 100%;
	}
	</style>
<body>
	<div class="box">
	<img src="images/top.jpg" alt="">
	<a href="https://mp.weixin.qq.com/s/NfzCDLsnQQLZWn7YCl5cgA"><img src="images/1.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/nHQNbAYBYN4tMB-rpLnCjw"><img src="images/2.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/CWodX1hKNMVWKIo6y7ho8w"><img src="images/3.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/fPFtTRP5-hxz7c3o6io2UA"><img src="images/4.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/Aa3mxweImewMcvUBzCoRTg"><img src="images/5.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/vY9q7aVWDWqnuPhmuBYvPw"><img src="images/j2.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/HM9KtTejUfPlL5XEc7Z9qw"><img src="images/6.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/xKCqFkM0wq0yNNHPSuHz0Q"><img src="images/7.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/2TthMjmS9LHRoAC5G9qD_g"><img src="images/8.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/zOMHYed5yfpCWpVzFfsBNw"><img src="images/9.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/m8Endhu8ULP02bPjFl0sYw"><img src="images/10.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/PZIyzxEPlgqq2yX8McXxGQ"><img src="images/j1.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/b5TAoYZP6i1ueQzzpgMTpw"><img src="images/11.jpg" alt=""></a>
	
	</div>
</body>
<script src="./lib/jquery/jquery.min.js"></script>
<script src="./lib/bootstrap/js/bootstrap.js"></script>
<script src="js/dialog.js"></script>
</html>

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
	    ]
	  });
	 wx.ready(function () {
	var shareinfo={
	 	 title: '绿都工程进度',
	      desc: '工程进度',
	      link: 'http://xytang88.com/yin/wls/ld',
	      imgUrl: 'http://xytang88.com/yin/wls/ld/share.jpg'}
	      wx.onMenuShareTimeline(shareinfo);
	 wx.onMenuShareAppMessage(shareinfo);
	  });
</script>