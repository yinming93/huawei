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

$sender = "绿都地产";//红包标题
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