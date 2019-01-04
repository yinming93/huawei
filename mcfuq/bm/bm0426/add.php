<?php
	header("Content-Type:text/html;charset=utf-8");
	include 'db.php';		
	$tel   = addslashes($_POST['tel']);
	$name = addslashes($_POST['name']);	
	$com = addslashes($_POST['com']);	
	$address = addslashes($_POST['address']);	
	$meal = addslashes($_POST['meal']);	
	
	$openid = addslashes($_POST['openid']);	
	$sql="select * from $tbname where openid='".$openid."'";
	$query = mysql_query($sql);
	$row   = mysql_fetch_assoc($query);
	// 检查信息是否填写完整
	foreach ($_POST as $k => $v) {
		if(!$v){
			echo 'wan';exit; 
		}
	}
	if(!is_numeric($tel) || strlen($tel)!=11 || !preg_match('/^1([358][0-9]|4[579]|66|7[0135678]|9[89])[0-9]{8}$/', $tel)){
		echo 'tel';exit;
	}	
	if($row){
		echo 'chong';
		exit;
	}
	// 统计人数
	// $sq = "select * from $tbname";
	// $qu = mysql_query($sq);
	// $qq = mysql_num_rows($qu);
	// if($qq>49){
	// 	echo "m";exit;
	// }

	$time = date('Y-m-d H:i:s');
	$sql="INSERT INTO $tbname(openid,meal,com,address,name,tel,time) VALUES('{$openid}','{$meal}','{$com}','{$address}','{$name}','{$tel}','{$time}')";
	// echo $sql;exit;
	$query = mysql_query($sql);
	if($query){
		echo 'ok';
	}else{
		echo 'sb';
	}
?>