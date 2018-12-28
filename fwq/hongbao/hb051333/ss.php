<?php
include 'db.php';
// $sql="select * from $tbname order by num desc";
// $a=0;
// $query=mysql_query($sql);
//var_dump($row);
// 统计数量
$sq = "select * from $tbname";
$qu = mysql_query($sq);
$qq = mysql_num_rows($qu);

// 查询发放红包总金额
$sq1 = "select sum(`num`) from $tbname";
$qu1 = mysql_query($sq1);
$qq1 = mysql_fetch_row($qu1);
$qqq1 = $qq1[0]/100;
$ss = 2800-$qqq1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>红包查询</title>
	        <meta name="viewport" content="width=device-width,minimum-scale=1,user-scalable=no,maximum-scale=1,initial-scale=1">
	<style>
	body{
		margin:0;
		padding: 0;
	}
		#sel{
			background:#AD0002; 
		}
		.sel_main{
			width: 90%;
			margin: 0 auto;
			background: #AD0002;
			padding-top: 5px;
		}
		h2{
			width: 100%;
			text-align: center;
			margin-top: 10px;
		}
		tr{
			color: white;
		}
	</style>
</head>
<body>
已领红包数量：<?php echo $qq?><br><br>
已领红包金额：<?php echo $qqq1?><br><br>
剩余金额：<?php echo $ss?><br><br>
</body>
</html>