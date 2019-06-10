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
    <title>绿都.紫荆华庭</title>
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
	<h2>【郑州】绿都紫荆华庭</h2>
	<br>
	<h3>朗园</h3>
	<h4>1号楼</h4>
	<img src="images/3-1.jpg" alt="">
	<p>北侧地库负一层顶板钢筋绑扎完成，具备浇筑条件。</p>
	<h4>2号楼</h4>
	<img src="images/3-2.jpg" alt="">
	<p>5层顶板铺设完成，1层砌体砌筑完成。</p>
	<h4>3号楼</h4>
	<img src="images/3-3.jpg" alt="">
	<p>4层顶板铺设完成，1层砌体砌筑完成。</p>
	<h4>5号楼</h4>
	<img src="images/3-4.jpg" alt="">
	<p>南侧地库负三层顶板模板铺设完成。</p>
	<br>
	<h3>润园</h3>
	<h4>2号楼</h4>
	<img src="images/4-1.jpg" alt="">
	<p>景观绿化完成95%，园区灯具安装完成。</p>
	<h4>3号楼</h4>
	<img src="images/4-2.jpg" alt="">
	<p>景观绿化完成95%，园区灯具安装完成。</p>
	<h4>5号楼</h4>
	<img src="images/4-3.jpg" alt="">
	<p>景观绿化完成95%，园区灯具安装完成。</p>
	<br>
	<h3>晴园</h3>
	<h4>2号楼</h4>
	<img src="images/5-1.jpg" alt="">
	<p>外墙抹灰完成，内墙抹灰4-26层完成。</p>
	<h4>3号楼</h4>
	<img src="images/5-2.jpg" alt="">
	<p>外墙抹灰完成，内墙抹灰3-33层完成。</p>
	<h4>5号楼</h4>
	<img src="images/5-3.jpg" alt="">
	<p>外墙抹灰完成，内墙抹灰4-22层完成。</p>
	<h4>6号楼</h4>
	<img src="images/5-4.jpg" alt="">
	<p>外墙抹灰11-34层完成，内墙抹灰2-10层完成，屋面施工完成80%。</p>
	<h4>7号楼</h4>
	<img src="images/5-5.jpg" alt="">
	<p>外墙抹灰4-13层完成，内墙抹灰2-13层完成，屋面施工完成80%。</p>
	<h4>8号楼</h4>
	<img src="images/5-6.jpg" alt="">
	<p>外墙抹灰5-34层施工完成，内抹灰3-23层施工完成。</p>
	<h4>9号楼</h4>
	<img src="images/5-7.jpg" alt="">
	<p>西单元28层完成，砌体2-10层完成，东单元施工至29层。</p>
	<h4>10号楼</h4>
	<img src="images/5-8.jpg" alt="">
	<p>外墙抹灰完成，内墙抹灰2-27层完成，外架拆除完成50%。</p>
	<h4>11号楼</h4>
	<img src="images/5-9.jpg" alt="">
	<p>外墙抹灰完成，内墙抹灰2-24层完成，外架拆除完成50%。</p>
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