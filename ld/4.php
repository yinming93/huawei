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
    <title>绿都.绣云里</title>
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
	<h2>【上海】绿都绣云里</h2>
	<br>
	<h4>B1#</h4>
	<img src="images/7-1.jpg" alt="">
	<p>楼室内入户门安装完成，外窗安装完成。</p>
	<h4>B2#</h4>
	<img src="images/7-2.jpg" alt="">
	<p>楼室内入户门安装完成，外窗安装完成。</p>
	<h4>B3#</h4>
	<img src="images/7-3.jpg" alt="">
	<p>楼室内入户门安装完成。</p>
	<h4>B4#</h4>
	<img src="images/7-4.jpg" alt="">
	<p>楼室内入户门安装完成。</p>
	<h4>B5#</h4>
	<img src="images/7-5.jpg" alt="">
	<p>楼室内入户门安装完成。</p>
	<h4>B6#</h4>
	<img src="images/7-6.jpg" alt="">
	<p>楼室内入户门安装完成。</p>
	<h4>B7#</h4>
	<img src="images/7-7.jpg" alt="">
	<p>楼室内入户门安装完成。</p>
	<h4>B8#</h4>
	<img src="images/7-8.jpg" alt="">
	<p>楼室内入户门安装完成。</p>
	<h4>B9#</h4>
	<img src="images/7-9.jpg" alt="">
	<p>楼室内入户门安装完成。</p>
	<h4>B10#</h4>
	<img src="images/7-10.jpg" alt="">
	<p>楼室内入户门安装完成。</p>
	<h4>B11#</h4>
	<img src="images/7-11.jpg" alt="">
	<p>楼室内入户门安装完成。</p>
	<h4>C2#</h4>
	<img src="images/7-12.jpg" alt="">
	<p>楼室内入户门安装完成。</p>
	<h4>C3#</h4>
	<img src="images/7-13.jpg" alt="">
	<p>楼室内入户门安装完成。</p>
	<h4>C4#</h4>
	<img src="images/7-14.jpg" alt="">
	<p>楼室内入户门安装完成，幕墙施工中。</p>
	<h4>C5#</h4>
	<img src="images/7-15.jpg" alt="">
	<p>楼室内入户门安装完成。</p>
	<h4>C6#</h4>
	<img src="images/7-16.jpg" alt="">
	<p>楼室内入户门安装完成。</p>
	<h4>D1#</h4>
	<img src="images/7-17.jpg" alt="">
	<img src="images/7-18.jpg" alt="">
	<p>楼腻子完成，外窗施工完成。</p>
	<h4>D2#</h4>
	<img src="images/7-19.jpg" alt="">
	<img src="images/7-20.jpg" alt="">
	<p>楼腻子完成，外窗施工完成。</p>
	<h4>D3#</h4>
	<img src="images/7-21.jpg" alt="">
	<img src="images/7-22.jpg" alt="">
	<p>楼腻子完成，外窗施工完成。</p>
	<h4>D4#</h4>
	<img src="images/7-23.jpg" alt="">
	<img src="images/7-24.jpg" alt="">
	<p>楼外窗施工完成。</p>
	<h4>D5#</h4>
	<img src="images/7-25.jpg" alt="">
	<img src="images/7-26.jpg" alt="">
	<p>楼腻子完成，外窗施工完成。</p>
	<h4>D6#</h4>
	<img src="images/7-27.jpg" alt="">
	<img src="images/7-28.jpg" alt="">
	<p>楼腻子完成，外窗施工完成。</p>
	<h4>D7#</h4>
	<img src="images/7-29.jpg" alt="">
	<img src="images/7-30.jpg" alt="">
	<p>楼外窗施工完成。</p>
	<h4>整体</h4>
	<img src="images/7-31.jpg" alt="">
	<img src="images/7-32.jpg" alt="">
	<p>高层外立面真石漆开始施工。</p>
	
	
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