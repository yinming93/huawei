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
    <title>绿都.澜湾</title>
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
	<h2>【郑州】澜湾</h2>
	<br>
	<h3>桂园</h3>
	<h4>园区景观</h4>
	<img src="images/1-1.jpg" alt="">
	<img src="images/1-2.jpg" alt="">
	<img src="images/1-3.jpg" alt="">
	<p>桂园8、9、10号楼内正在收尾及物业分户验收；景观已全部完成。</p>
	<br>
	<h3>樟园</h3>
	<h4>1号楼</h4>
	<img src="images/2-1.jpg" alt="">
	<p>砌体完成，内粉1-28层完成，外粉10-34层完成，室内地坪6-10层完成。</p>
	<h4>2号楼</h4>
	<img src="images/2-2.jpg" alt="">
	<p>砌体完成，内粉2-28层完成，外粉10-34层完成。</p>
	<h4>3号楼</h4>
	<img src="images/2-3.jpg" alt="">
	<p>砌体完成，内粉1-14层完成，外粉5-22层完成。</p>
	<h4>5号楼</h4>
	<img src="images/2-4.jpg" alt="">
	<p>砌体完成，内粉1-16层完成，外粉5-22层完成，室内地坪1-3层完成。</p>
	<h4>6号楼</h4>
	<img src="images/2-5.jpg" alt="">
	<p>砌体完成，内粉1-27层完成，外粉5-34层完成，室内地坪1-6层完成。</p>
	<h4>7号楼</h4>
	<img src="images/2-6.jpg" alt="">
	<p>砌体完成，内粉2-28层完成，外粉5-28层完成。</p>
	<br>
	<h3>榕园</h3>
	<img src="images/2-7.jpg" alt="">
	<p>主体施工至24层，墙柱钢筋绑扎完成。</p>
	<h4>2号楼</h4>
	<img src="images/2-8.jpg" alt="">
	<p>主体施工至15层，顶板铺设完成。</p>
	<h4>3号楼</h4>
	<img src="images/2-9.jpg" alt="">
	<p>主体施工至18层，梁板钢筋绑扎完成。</p>
	<h4>5号楼</h4>
	<img src="images/2-10.jpg" alt="">
	<p>主体施工至16层，顶板铺设完成。</p>
	<h4>6号楼</h4>
	<img src="images/2-11.jpg" alt="">
	<p>主体施工至21层，顶板铺设完成。</p>
	<h4>7号楼</h4>
	<img src="images/2-12.jpg" alt="">
	<p>主体施工至20层，梁板钢筋绑扎完成，砌体6-10层完成。</p>
	<h4>8号楼</h4>
	<img src="images/2-13.jpg" alt="">
	<p>主体施工至17层，墙柱钢筋绑扎完成。</p>
	<h4>9号楼</h4>
	<img src="images/2-14.jpg" alt="">
	<p>主体施工至29层，墙柱钢筋绑扎完成，砌体6-17层完成。</p>
	<h4>10号楼</h4>
	<img src="images/2-15.jpg" alt="">
	<p>主体施工至28层，梁板钢筋绑扎完成，砌体6-17层完成。</p>
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