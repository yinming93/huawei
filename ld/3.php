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
    <title>绿都.褐石街区</title>
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
	<h2>【郑州】绿都褐石街区</h2>
	<br>
	<h4>19号楼</h4>
	<img src="images/6-1.jpg" alt="">
	<p>屋面混凝土已完成，室内外抹灰已完成，正在拆外架。</p>
	<h4>20号楼</h4>
	<img src="images/6-2.jpg" alt="">
	<p>外架已拆除，外保温开始施工，窗框、窗扇、玻璃安装完成。</p>
	<h4>21号楼</h4>
	<img src="images/6-3.jpg" alt="">
	<p>外架已拆除，窗框、窗扇、玻璃安装完成，外保温施工完成40%。</p>
	<h4>22号楼</h4>
	<img src="images/6-4.jpg" alt="">
	<p>外架已拆除，窗框、窗扇、玻璃安装完成，外保温施工完成60%。</p>
	<h4>23号楼</h4>
	<img src="images/6-5.jpg" alt="">
	<p>砌体施工完成90%，2-10层构造柱完成。</p>
	<h4>25号楼</h4>
	<img src="images/6-6.jpg" alt="">
	<p>内外墙抹灰已完成，外保温已完成。</p>
	<h4>26号楼</h4>
	<img src="images/6-7.jpg" alt="">
	<p>砌体及二次结构已完成。</p>
	<h4>27号楼</h4>
	<img src="images/6-8.jpg" alt="">
	<p>砌体施工完成80%。</p>
	<h4>28号楼</h4>
	<img src="images/6-9.jpg" alt="">
	<p>砌体施工完成，构造柱4-12层施工完成。</p>
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