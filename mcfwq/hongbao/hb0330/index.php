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
        //2.
        $openid = $arr_access_token['openid'];

		include 'db.php';
		// 查询是否领取过红包
        $query=mysql_query("select *from $tbname where openid='$openid'");
        $row=mysql_fetch_array($query);
        if($row){
		$num=$row['num']/100;
		}
        
        // 查询发放红包总金额
		$sq1 = "select sum(`num`) from $tbname";
		$qu1 = mysql_query($sq1);
		$qq1 = mysql_fetch_row($qu1);
		$qqq1 = $qq1[0];
        
        // 设置红包发放总额 单位:分
		if($qqq1>120000){
		// 9代表额度用完了
		$dis=9;
		}
    } else{
        //echo "NO CODE";
        echo '操作失败！';
        exit;
        //写入日记文件
    }
  if(!$openid){
 	echo "<script>";
 	echo "window.location.href='http://ym.2dreamchaser.com/yin/hongbao/hb0330/getcodeurl.php';";
 	echo "</script>";
 	exit;
 }
  // 当前时间戳
  $xz=time();
  // 活动结束时间
  // $js=strtotime('2017-05-28 17:59:00');
  // if ($xz>$js){
  // echo "<script>";
  // echo "window.location.href='indexj.php'";
  // echo "</script>";
  // }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
<script type="text/javascript" src="jquery-1.8.3.min.js"></script>
	<title>愚人节的红包， 你敢信吗？</title>
</head>
<style>
/*y轴淡入*/
.yzdr{
-webkit-animation:flipInY 1s .2s ease both;
-moz-animation:flipInY 1s .2s ease both;}
@-webkit-keyframes flipInY{
0%{-webkit-transform:perspective(400px) rotateY(90deg);
opacity:0}
40%{-webkit-transform:perspective(400px) rotateY(-10deg)}
70%{-webkit-transform:perspective(400px) rotateY(10deg)}
100%{-webkit-transform:perspective(400px) rotateY(0deg);
opacity:1}
}
@-moz-keyframes flipInY{
0%{-moz-transform:perspective(400px) rotateY(90deg);
opacity:0}
40%{-moz-transform:perspective(400px) rotateY(-10deg)}
70%{-moz-transform:perspective(400px) rotateY(10deg)}
100%{-moz-transform:perspective(400px) rotateY(0deg);
opacity:1}
}
/*下方淡入*/
.xfdr{
-webkit-animation:fadeInUp 1s .2s ease both;
-moz-animation:fadeInUp 1s .2s ease both;}
@-webkit-keyframes fadeInUp{
0%{opacity:0;
-webkit-transform:translateY(20px)}
100%{opacity:1;
-webkit-transform:translateY(0)}
}
@-moz-keyframes fadeInUp{
0%{opacity:0;
-moz-transform:translateY(20px)}
100%{opacity:1;
-moz-transform:translateY(0)}
}
.tt{
    display: none;
}
</style>
 <script>
		function sy(){
			var play= document.getElementById('audio');		
			play.play();
		};
    </script>
<body onload="sy()">

<!-- <img src="bg.jpg" alt="" style="width:100%;disolay:block;position:absolute;top:0;left:0;"> -->
<input type="hidden" id="openid" name="openid" value="<?php echo $openid; ?>">
<img class="" id="chai" src="11.jpg" alt="" style="width:100%;display:<?php if ($row||$dis==9){echo "none";}else{echo "block";} ?>;position:absolute;top:0;left:0;" onclick="na()">
<img id="gai" src="11.jpg" style="width:100%;display:none;position:absolute;top:0;left:0;">

<img class="" id="chou" src="1-2.jpg" alt="" style="width:100%;display:<?php if ($row){echo "block";}else{echo "none";} ?>;position:absolute;top:0;left:0;">

<img id="wu" src="1-3.jpg" alt="" style="width:100%;display:<?php if (!$row&&$dis==9){echo "block";}else{echo "none";} ?>;position:absolute;top:0;left:0;">

<div class="xfdr" id="qian" style="width:30%;height:60px;position:absolute;top:40%;left:35%;text-align:center;line-height:60px;color:red;font-size:40px;font-weight:bold;display:<?php if ($row){echo "block";}else{echo "none";} ?>"><?php echo $num; ?></div>

<div style="display:<?php if ($row||$dis==9){echo "none";}else{echo "block";} ?>;">
<img id="fm" src="fmm.jpg" alt="" style="width:100%;position:absolute;top:0;left:0;" onclick="ks()">
<div class="tt" id="one">
   <img src="1.jpg" alt="" style="width:100%;position:absolute;top:0;left:0;">
   <div class="fla" style="width:40%;height:50%;background:;position:absolute;top:50%;left:5%;"></div> 
   <div class="tru" style="width:40%;height:50%;background:;position:absolute;top:50%;left:55%;"></div> 
</div>
<div class="tt">
   <img src="2.jpg" alt="" style="width:100%;position:absolute;top:0;left:0;">
   <div class="fla" style="width:40%;height:50%;background:;position:absolute;top:50%;left:5%;"></div> 
   <div class="tru" style="width:40%;height:50%;background:;position:absolute;top:50%;left:55%;"></div> 
</div>
<div class="tt">
   <img src="3.jpg" alt="" style="width:100%;position:absolute;top:0;left:0;">
   <div class="fla" style="width:40%;height:50%;background:;position:absolute;top:50%;left:5%;"></div> 
   <div class="tru" style="width:40%;height:50%;background:;position:absolute;top:50%;left:55%;"></div> 
</div>
<div class="tt">
   <img src="4.jpg" alt="" style="width:100%;position:absolute;top:0;left:0;">
   <div class="tru" style="width:40%;height:50%;background:;position:absolute;top:50%;left:5%;"></div> 
   <div class="fla" style="width:40%;height:50%;background:;position:absolute;top:50%;left:55%;"></div> 
</div>
<div class="tt">
   <img src="5.jpg" alt="" style="width:100%;position:absolute;top:0;left:0;">
   <div class="tru" style="width:40%;height:50%;background:;position:absolute;top:50%;left:5%;"></div> 
   <div class="tru" style="width:40%;height:50%;background:;position:absolute;top:50%;left:55%;"></div> 
</div>
<div class="tt">
   <img src="6.jpg" alt="" style="width:100%;position:absolute;top:0;left:0;">
   <div class="fla" style="width:40%;height:50%;background:;position:absolute;top:50%;left:5%;"></div> 
   <div class="tru" style="width:40%;height:50%;background:;position:absolute;top:50%;left:55%;"></div> 
</div>
<div class="tt">
   <img src="7.jpg" alt="" style="width:100%;position:absolute;top:0;left:0;">
   <div class="fla" style="width:40%;height:50%;background:;position:absolute;top:50%;left:5%;"></div> 
   <div class="tru" style="width:40%;height:50%;background:;position:absolute;top:50%;left:55%;"></div> 
</div>
<div class="tt">
   <img src="88.jpg" alt="" style="width:100%;position:absolute;top:0;left:0;">
   <div class="fla" style="width:40%;height:50%;background:;position:absolute;top:50%;left:5%;"></div> 
   <div class="tru" style="width:40%;height:50%;background:;position:absolute;top:50%;left:55%;"></div> 
</div>
<div class="tt">
   <img src="9.jpg" alt="" style="width:100%;position:absolute;top:0;left:0;">
   <div class="tru" style="width:40%;height:50%;background:;position:absolute;top:50%;left:5%;"></div> 
   <div class="fla" style="width:40%;height:50%;background:;position:absolute;top:50%;left:55%;"></div> 
</div>
<div class="tt" id="ele">
   <img src="10.jpg" alt="" style="width:100%;position:absolute;top:0;left:0;">
   <div class="fla" style="width:40%;height:50%;background:;position:absolute;top:50%;left:5%;"></div> 
   <div class="" style="width:40%;height:50%;background:;position:absolute;top:50%;left:55%;" onclick="ele()"></div> 
</div>
</div>
<!-- <div class="tt" id="ele">
   <img src="11.jpg" alt="" style="width:100%;position:absolute;top:0;left:0;" onclick="ele()">
</div>
 -->

<img class="tou" src="wr.png" alt="" style="width:100%;position:absolute;top:0;left:0;display:none;" onclick="tou()">
<audio preload="preload"  id="audio" src="sr.mp3" loop></audio>
</body>
</html>
<script>
	 setTimeout(function(){
	     $(window).scrollTop(1);
	 },0);
	  document.getElementById('audio').play();
	  document.addEventListener("WeixinJSBridgeReady", function () {
			WeixinJSBridge.invoke('getNetworkType', {}, function (e) {
	            document.getElementById('audio').play();
			});
	  }, false);
	</script>
<script>
$(".tru").on('click',function(){
    $(this).parent().fadeOut(100).next('.tt').fadeIn(10);
})
$(".fla").on('click',function(){
    $(".tou").css("display","block");
})

function ks(){
    $("#fm").css("display","none");
    $("#one").css("display","block");
}
function tou(){
    $(".tou").css("display","none");
}
function ele(){
    $("#ele").css("display","none");
}
function na() {
		$("#chai").css("display","none");
		$("#gai").css("display","block");
	}


	$("#chai").on("click",function(){
		var openid  = $("#openid").val();
		var data = "openid="+openid;
            $.post("add.php",data,function(m){
            	// alert(m);return false;
            if(m=='rep'){
                        alert("请勿重复提交！");
                    }
                    if(m=='name'){
                        alert("请填写正确的姓名！");
                    }
                    if(m=='ok'){
                        alert("恭喜你获得红包，注意查收！");
                        window.location.href='getcodeurl.php';
                    }                   
                    if(m=='sb'){
                        alert("红包已发完！");
                    }                   
                    if(m==-1){
                        alert("请完善信息！");
                    }
                    if(m==-2){
                        alert("插入数据库失败！");
                    }
            })
	
	})
</script>
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
		 	wx.hideOptionMenu();
		var shareinfo={
		 	 title: '愚人节的红包， 你敢信吗？',
		      desc: '答完这十道题，瓜分8888个红包',
		      link: 'http://ym.2dreamchaser.com/yin/hongbao/hb0330/getcodeurl.php',
		      imgUrl: 'http://ym.2dreamchaser.com/yin/hongbao/hb0330/share.jpg'}
		      wx.onMenuShareTimeline(shareinfo);
		 wx.onMenuShareAppMessage(shareinfo);
		  });
    </script>

    <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?ddc56bd67e09ff74a6d607913cc5305b";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>