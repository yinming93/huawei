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
        // var_dump($openid);
        // exit;
        // $wxname=$userinfo_arr['nickname'];
        // $wximg=$userinfo_arr['headimgurl'];
        // $wxsex=$userinfo_arr['sex'];
        // echo $wxsex;
		include 'db.php';
        $query=mysql_query("select *from $tbname where openid='$openid'");

        $row=mysql_fetch_array($query);
        // var_dump($row);die;
        $com=$row['com'];
        $meal=$row['meal'];

        // 查询人数
         $sq="select * from $tbname where com='$com' and meal='$meal'";
         $qu = mysql_query($sq);
		 $qq = mysql_num_rows($qu);
			// if($qq>49){
			// 	echo "m";exit;
			// }

    } else{
        //echo "NO CODE";
        echo '操作失败！';
        exit;
        //写入日记文件
    }
  if(!$openid){
 	echo "<script>";
 	echo "window.location.href='http://ym.2dreamchaser.com/yin/2018/bm/bm0426/getcodeurl.php';";
 	echo "</script>";
 	exit;
 }
 // if ($row){
	// echo "<script>";
	// echo "$('#box').css('display','none');";
	// echo "$('#shuzi').css('display','block');";
	// // echo "alert('已参与过')";
	// echo "</script>";
 // }
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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>你消费我买单</title>
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
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
	.com{
		position:absolute;
		left:36%;
		top:28%;
		width:60%;
		height: 4%;
		font-size:17px;
		color: white;
		}
	.com input,.name input,.tel input,.address input{
		height: 70%;
		width: 70%;
		border: 0px;
	}
	.address{
		position:absolute;
		left:36%;
		top:36%;
		width:60%;
		height: 4%;
		line-height: 20px;
		font-size:17px;
		color: white;
		}
	.name{
		position:absolute;
		left:36%;
		top:43.5%;
		width:60%;
		height: 4%;
		line-height: 20px;
		font-size:17px;
		color: white;
		}
	.tel{
		position:absolute;
		left:36%;
		top:51%;
		width:60%;
		height: 4%;
		line-height: 20px;
		font-size:17px;
		color: white;
		}
	.bn{
		position:absolute;
		left:35%;
		top:58.5%;
		width:44%;
		height: 6%;
		border-radius:1px;
		font-size:18px;
		z-index: 100;
		color: white;
		opacity: 0;
	}
	.bn2{
		position:absolute;
		left:35%;
		top:65.5%;
		width:44%;
		height: 6%;
		border-radius:1px;
		font-size:18px;
		z-index: 100;
		color: white;
		opacity: 0;
	}
	.tu{
	    width: 100%;
	    display: block;
	}
	.modal-dialog{
		margin-top:40%;
	}
	#xa{
		z-index: 720;
		position: absolute;
		top: 54%;
		width: 100%;
		height: 6%;
		/*border: 1px solid red;*/
		opacity: 0;
	}
	#xb{
		z-index: 720;
		position: absolute;
		top: 63%;
		width: 100%;
		height: 6%;
		opacity: 0;
		/*border: 1px solid red;*/
	}
	.maichong{
	-webkit-animation:pulse 2s infinite ease both;
	-moz-animation:pulse 2s infinite ease both;}
	@-webkit-keyframes pulse{
	0%{-webkit-transform:scale(1)}
	50%{-webkit-transform:scale(1.1)}
	100%{-webkit-transform:scale(1)}
	}
	@-moz-keyframes pulse{
	0%{-moz-transform:scale(1)}
	50%{-moz-transform:scale(1.1)}
	100%{-moz-transform:scale(1)}
	}
	/*左边淡入*/
.zbdr{
-webkit-animation:fadeInLeft 2s .2s ease both;
-moz-animation:fadeInLeft 2s .2s ease both;}
@-webkit-keyframes fadeInLeft{
0%{opacity:0;
-webkit-transform:translateX(-20px)}
100%{opacity:1;
-webkit-transform:translateX(0)}
}
@-moz-keyframes fadeInLeft{
0%{opacity:0;
-moz-transform:translateX(-20px)}
100%{opacity:1;
-moz-transform:translateX(0)}
}
/*右边淡入*/
.ybdr{
-webkit-animation:fadeInRight 2s 1.2s ease both;
-moz-animation:fadeInRight 2s 1.2s ease both;}
@-webkit-keyframes fadeInRight{
0%{opacity:0;
-webkit-transform:translateX(20px)}
100%{opacity:1;
-webkit-transform:translateX(0)}
}
@-moz-keyframes fadeInRight{
0%{opacity:0;
-moz-transform:translateX(20px)}
100%{opacity:1;
-moz-transform:translateX(0)}
}
/*弹起*/
.tq{
-webkit-animation:bounce 5s infinite ease both;
-moz-animation:bounce 5s infinite ease both;}
@-webkit-keyframes bounce{
0%,20%,50%,80%,100%{-webkit-transform:translateY(0)}
40%{-webkit-transform:translateY(-30px)}
60%{-webkit-transform:translateY(-15px)}
}
@-moz-keyframes bounce{
0%,20%,50%,80%,100%{-moz-transform:translateY(0)}
40%{-moz-transform:translateY(-30px)}
60%{-moz-transform:translateY(-15px)}
}

.tq2{
-webkit-animation:bounce 5.2s infinite ease both;
-moz-animation:bounce 5.2s infinite ease both;}
@-webkit-keyframes bounce{
0%,20%,50%,80%,100%{-webkit-transform:translateY(0)}
40%{-webkit-transform:translateY(-30px)}
60%{-webkit-transform:translateY(-15px)}
}
@-moz-keyframes bounce{
0%,20%,50%,80%,100%{-moz-transform:translateY(0)}
40%{-moz-transform:translateY(-30px)}
60%{-moz-transform:translateY(-15px)}
}	</style>

<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
</head>
<script>
		function sy(){
			var play= document.getElementById('audio');		
			play.play();
		};
    </script>
<body onload="sy()">
	<div class="box">
	<img class="maichong" src="images/kaf.png" alt="" style="<?php if ($row){echo 'display: none';} ?>;width:100%;position:absolute;top:0%;right:0%;z-index:910;">
	
	<!-- 第一篇 -->
	<img class="one" src="images/b1.jpg" alt="" style="<?php if ($row){echo 'display: none';} ?>;width:100%;position:absolute;top:0;left:0;z-index:900;">
	<img class="zbdr one" src="images/b1-1.png" alt="" style="<?php if ($row){echo 'display: none';} ?>;width:100%;position:absolute;top:0;left:0;z-index:920;">
	<img class="ybdr one" src="images/b1-2.png" alt="" style="<?php if ($row){echo 'display: none';} ?>;width:100%;position:absolute;top:0;left:0;z-index:930;" onclick="x1()">
	
	<!-- 规则 -->
	<!-- <img class="ga" src="images/b2.jpg" alt="" style="<?php if ($row){echo 'display: none';} ?>;width:100%;position:absolute;top:0;left:0;z-index:800;" onclick="x2()"> -->
	

	<!-- 套餐选择开始 -->
	
	<img class="tu xuan" src="images/b5.jpg" style="<?php if ($row){echo 'display: none';} ?>;position:absolute;top:0;left:0;z-index:700;">
	<img class="xuan maichong" src="images/b5-11.png" alt="" style="<?php if ($row){echo 'display: none';} ?>;width:100%;position:absolute;top:0;left:0;z-index:710;">
	<img class="xuan maichong" src="images/b5-22.png" alt="" style="<?php if ($row){echo 'display: none';} ?>;width:100%;position:absolute;top:0;left:0;z-index:710;">

	<!-- 双规则 -->
	<img class="ga r1" src="images/gz1.jpg" alt="" style="display:none;width:100%;position:absolute;top:0;left:0;z-index:600;" onclick="x2()">
	<img class="ga r2" src="images/gz22.jpg" alt="" style="display:none;width:100%;position:absolute;top:0;left:0;z-index:600;" onclick="x2()">

	<img class="tu" src="<?php if ($row){echo 'images/jj.jpg';}else{echo "images/b4.jpg";} ?>">
	<form action="add.php" method="POST" style="<?php if ($row){echo 'display: none';} ?>;">
	<input type="hidden" name="openid" value="<?php echo $openid; ?>">

		<label class="xuan" id="xa" onclick="xia()"><input type="radio" name="meal" value="免费下午茶登门计划"></label>
		<label class="xuan" id="xb" onclick="xib()"><input type="radio" name="meal" value="免费运动包场计划"></label>

		<label class="com"><input type="text" name="com" placeholder="请输入公司名"></label>
		<label class="address"><input type="text" name="address" placeholder="请输入公司地址"></label>
		<label class="name"><input type="text" name="name" placeholder="请输入姓名"></label>
		<label class="tel"><input type="tel" name="tel" placeholder="请输入电话"></label>
		<input class="bn" name="sub" type="button" value="预约">
	<a href="getcodeurl.php"><input class="bn2" type="button" value="返回"></a>

	</form>
	<!-- <p id="two" style="<?php if (!$row){echo 'display: none';} ?>;width:66%;position:absolute;top:82%;left:17%;background-color:transparent;border:0;color:black;font-size:1.5em;text-align:center;">恭喜您<br>已成功报名</p> -->
	<div style="width:70%;height:150px;background:white;border-radius:6px;<?php if (!$row){echo 'display: none';} ?>;position:absolute;top:62%;left:18%;opacity:0.7;font-size:12px;">
			<span>
				<center><b style="font-size:18px;">参与信息</b></center><br>
				&nbsp;&nbsp;<b>你所在公司：</b><?php echo $com ?><br>
				&nbsp;&nbsp;<b>所选套餐：</b><?php echo $meal ?><br>
				&nbsp;&nbsp;<b>人数已达：</b><?php echo $qq ?><br><br>
				<!-- <b style="<?php if ($qq<10){echo 'display: none';} ?>;font-size:13px;">同一公司报名同奖品超过10人即可享受免单福利！</b> -->
			</span>
	</div>

	</div>
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
	function xia () {
		$(".xuan").css("display","none");
		$(".r1").css("display","block");
	}
	function xib () {
		$(".xuan").css("display","none");
		$(".r2").css("display","block");
	}
	function x1(){
		$(".one").css("display","none");
	}
	function x2(){
		$(".ga").css("display","none");
	}
</script>
<script>
	$("input[name='sub']").on("click",function(){
		$.ajax({
		url:'add.php',
		data:$('form').serialize(),
		type:'POST',
		success:function(m){
			if(m=='chong'){
				alert("请勿重复提交！");
			}
			if(m=='ok'){
				// alert("报名成功！");
				window.location.href='getcodeurl.php';

			}  
			if(m=='m'){
				alert("报名人数已满！");
				// $("input[name='name']").val('');
				// $("input[name='tel']").val('');
				// $("input[name='age']").val('');
				window.location.href='getcodeurl.php';
			}    				
			if(m=='tel'){
				alert("手机号格式不正确！");
			}    				
			if(m=='wan'){
				alert("请完善信息！");
			}
			if(m=='sb'){
				alert("插入数据库失败！");
			}
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
		var shareinfo={
		 	 title: '你消费我买单',
		      desc: '凤凰城·天境给你买单啦！',
		      link: 'http://ym.2dreamchaser.com/yin/2018/bm/bm0426/getcodeurl.php',
		      imgUrl: 'http://ym.2dreamchaser.com/yin/2018/bm/bm0426/share1.jpg'}
		      wx.onMenuShareTimeline(shareinfo);
		 wx.onMenuShareAppMessage(shareinfo);
		  });
    </script>