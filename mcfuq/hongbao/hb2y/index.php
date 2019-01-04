<?php

/*2016.11.24
	发送金额大于账户金额 -- 发送失败 -- FAIL
	
*/
header("Content-type: text/html; charset=utf-8");
define('APPID','wx863e78b1aaf4d6f4'); 
define('APPSECRET','2791e35605a17a601eacdcdd83dcd0fd'); 

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//OAuth2.0 接口获取数据
if( !isset($_GET['code']) ){
	echo '操作失败！';
	header('Location:https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx863e78b1aaf4d6f4&redirect_uri=http://tou.webg.top/yin/hongbao/hb2/index.php&response_type=code&scope=snsapi_base&state=1#wechat_redirect');
	exit;
}

define('CODE', $_GET['code']);
include 'func.php';//公共函数
//获页面授权
$url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".APPID."&secret=".APPSECRET."&code=".CODE."&grant_type=authorization_code";
$json_access_token = https_request($url);
$arr_access_token  = json_decode($json_access_token, true); //获取access_token

//判断openid是否获取到	
$openid=$arr_access_token['openid'];
if(!$openid){
	header('Location:https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx863e78b1aaf4d6f4&redirect_uri=http://tou.webg.top/yin/hongbao/hb2/index.php&response_type=code&scope=snsapi_base&state=1#wechat_redirect');
	exit;
}

include 'db.php';

// 查询发放红包总金额
$sq1 = "select sum(`num`) from $tbname";
$qu1 = mysql_query($sq1);
$qq1 = mysql_fetch_row($qu1);
$qqq1 = $qq1[0];
// 定义一个变量dis  为9则代表红包额度发完了
$dis=8;

// 查询数据库是否领过红包
$query=mysql_query("select *from $tbname where openid='$openid'");
$row=mysql_fetch_array($query);
$num=$row[2];

// 设置红包发放总额 单位 分
if($qqq1>300000){
// 9代表额度用完了
$dis=9;
$num=$num/100;
}else{
if($row){
		$num=$num/100;

	}else{
		//加载红包接口
			include 'wxpayall.class.php';
			//设置红包数固定额--数字类型
		/*  $money = 1;//元
			$money = $money *100;
		*/	
			$min = 1;//最小红包金额，单位(元)  填写最小值1 --数字类型
			$max = 2;//最大红包金额，单位(元) 填写最大值200 --数字类型
			$min=$min*100;
			$max=$max*100;
			$money = rand($min,$max);
			$num=$money/100;

			$sender = "江山美宸";//红包标题
			$obj2 = array();
			$obj2['wxappid']        = APPID;
			$obj2['mch_id']         = MCHID;//商户号
			$obj2['mch_billno']	    = MCHID.date('YmdHis').rand(1000, 9999);//订单号
			$obj2['client_ip']    	= $_SERVER['REMOTE_ADDR'];
			$obj2['re_openid']      = $openid;//openid
			$obj2['total_amount']   = $money; //付款金额，单位（分）
			$obj2['total_num']      = 1;      //红包发放总人数
			$obj2['nick_name']      = $sender;//提供方名称
			$obj2['send_name']      = $sender;//红包发送者名称
			$obj2['wishing']        = "恭喜发财，大吉大利";//红包祝福语
			$obj2['act_name']      	= "给你发红包";//活动名,字段必填,并且少于32个字符
			$obj2['remark']      	= "给你发红包";//备注
			$url = 'https://api.mch.weixin.qq.com/mmpaymkttransfers/sendredpack';
			$wxHongBaoHelper2 = new WxPay();
			$resultxml = $wxHongBaoHelper2->pay($url, $obj2);//发红包
			$resultObj = simplexml_load_string($resultxml, 'SimpleXMLElement', LIBXML_NOCDATA);//返回执行结果				
			if($resultObj->result_code =="SUCCESS"){
				//发送成功-插入数据库
				$time = date('Y-m-d H:i:s');
				$sql="INSERT INTO $tbname(openid,num,time) VALUES('{$openid}','{$money}','{$time}')";
				$query = mysql_query($sql);
				
			}else{
				$num=0;
				$dis=9;
				// echo $resultObj->result_code;
			}
		}
}

	
		
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
<script type="text/javascript" src="jquery-1.8.3.min.js"></script>
	<title>江山美宸给你发红包啦</title>
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
</style>
<body>
<img src="bg.jpg" alt="" style="width:100%;disolay:block;position:absolute;top:0;left:0;">

<img class="yzdr" id="chai" src="1-1.png" alt="" style="width:100%;display:<?php if ($row||$dis==9){echo "none";}else{echo "block";} ?>;position:absolute;top:0;left:0;" onclick="na()">

<img class="xfdr" id="chou" src="1-2.png" alt="" style="width:100%;display:<?php if ($row){echo "block";}else{echo "none";} ?>;position:absolute;top:0;left:0;">

<img id="wu" src="1-3.png" alt="" style="width:100%;display:<?php if (!$row&&$dis==9){echo "block";}else{echo "none";} ?>;position:absolute;top:0;left:0;">

<div class="xfdr" id="qian" style="width:30%;height:40px;position:absolute;top:57%;left:35%;text-align:center;line-height:30px;color:red;font-size:40px;font-weight:bold;display:<?php if ($row){echo "block";}else{echo "none";} ?>"><?php echo $num; ?></div>
</body>
</html>
<?php
	require_once "jssdk.php";
    $jssdk = new Jssdk( APPID, APPSECRET );
    $signPackage = $jssdk->GetSignPackage();
?>
<script>
	function na() {
		$("#chai").css("display","none");
		$("#chou").css("display","block");
		$("#qian").css("display","block");

	}
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
		 	 title: '江山美宸给您送红包啦',
		      desc: '抢幸运红包过开心幸福年',
		      link: 'http://tou.webg.top/yin/hongbao/hb2/index.php',
		      imgUrl: 'http://tou.webg.top/yin/hongbao/hb2/share.jpg'}
		      wx.onMenuShareTimeline(shareinfo);
		 wx.onMenuShareAppMessage(shareinfo);
		  });
    </script>