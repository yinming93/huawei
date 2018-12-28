<?php

/*2018.02.28
	发送金额大于账户金额 -- 发送失败 -- FAIL
	yinming
*/
header("Content-type: text/html; charset=utf-8");
define('APPID','wx863e78b1aaf4d6f4'); 
define('APPSECRET','2791e35605a17a601eacdcdd83dcd0fd'); 

include 'db.php';
$openid=addslashes($_POST['openid']);
// $openid='oB_Y5w4TpVbOoDWcbh5KNrKQkVvQ';
// echo $openid;exit;
// 查询是否领取过红包
$query=mysql_query("select *from $tbname where openid='$openid'");
$row=mysql_fetch_array($query);
if($row){
echo "sb";
exit;
}else{
// 统计金额1
$sq1 = "select * from $tbname where num='280'";
$qu1 = mysql_query($sq1);
$qq1 = mysql_num_rows($qu1);
// 统计金额2
$sq2 = "select * from $tbname where num='680'";
$qu2 = mysql_query($sq2);
$qq2 = mysql_num_rows($qu2);
// 统计金额3
$sq3 = "select * from $tbname where num='1080'";
$qu3 = mysql_query($sq3);
$qq3 = mysql_num_rows($qu3);
// 统计金额4
$sq4 = "select * from $tbname where num='1880'";
$qu4 = mysql_query($sq4);
$qq4 = mysql_num_rows($qu4);
// 统计金额5
$sq5 = "select * from $tbname where num='18800'";
$qu5 = mysql_query($sq5);
$qq5 = mysql_num_rows($qu5);

$a=rand(1,10);
// echo $a;
// 设定红包金额
if ($a==1) {
	if ($qq5<1) {
		$money =18800;
	}else{
		$money =100;
	}
}elseif ($a==2) {
	if ($qq4<5) {
		$money =1880;
	}else{
		$money =100;
	}
}elseif ($a==3) {
	if ($qq3<5) {
		$money =1080;
	}else{
		$money =100;
	}
}elseif ($a==4) {
	if ($qq2<5) {
		$money =680;
	}else{
		$money =100;
	}
}elseif ($a==5) {
	if ($qq1<5) {
		$money =280;
	}else{
		$money =100;
	}
}else{
	$money =100;
}


//加载红包接口
include 'wxpayall.class.php';
//设置红包数固定额--数字类型
/*  $money = 1;//元
$money = $money *100;
*/	
// $min = 1;//最小红包金额，单位(元)  填写最小值1 --数字类型
// $max = 1;//最大红包金额，单位(元) 填写最大值200 --数字类型
// $min=$min*100;
// $max=$max*100;
// $money = rand($min,$max);
$num=$money/100;

$sender = "华冕财富";//红包标题
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
// var_dump($resultObj);
// exit;		
if($resultObj->result_code =="SUCCESS"){
	//发送成功-插入数据库
	echo "ok";
	$time = date('Y-m-d H:i:s');
	$sql="INSERT INTO $tbname(openid,num,time) VALUES('{$openid}','{$money}','{$time}')";
	$query = mysql_query($sql);
	
}else{
	// echo $resultObj->result_code;
	echo "sb";
}


}		
?>