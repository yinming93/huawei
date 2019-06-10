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
    <title>绿都.悦府</title>
    <!-- Bootstrap -->
    <link href="./lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
	<style>
	body{
		margin: 0px;
		padding: 0px;
		font-family: "微软雅黑";
		font-size: 13px;
		color: #4c4c4c;
		background-color: white;
		}
	.box{
    	width: 94%;
        margin: 0px;
        padding: 0px;
		position: absolute;
		background-color: white;
		top:0px;
		left:3%;
		overflow: hidden;
		}
	.modal-dialog{
		margin-top:40%;
	}
	.box img{
		width: 100%;
		margin-top: 5px;
	}
	</style>
<body>
	<div class="box">
	<h2>【南阳】绿都悦府</h2>
	<br>
	<h4>15#楼</h4>
	<img src="images/9-1.jpg" alt="">
	<p>正在进行砌体施工。</p>
	<h4>16#楼</h4>
	<img src="images/9-2.jpg" alt="">
	<p>屋面正在进行砌体施工。</p>
	<h4>17#楼</h4>
	<img src="images/9-3.jpg" alt="">
	<p>10层主体结构施工。</p>
	<h4>18#楼</h4>
	<img src="images/9-4.jpg" alt="">
	<p>10层主体结构施工。</p>
	<h4>19#楼</h4>
	<img src="images/9-5.jpg" alt="">
	<p>室内批顶完成80%；公区地砖粘贴完成。</p>
	<h4>23#楼</h4>
	<img src="images/9-6.jpg" alt="">
	<p>后期维修中。</p>
	<h4>25#楼，26#楼</h4>
	<img src="images/9-7.jpg" alt="">
	<p>25#10层主体结构施工;26#楼11层主体结构施工。</p>

	<br>
	<br>
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