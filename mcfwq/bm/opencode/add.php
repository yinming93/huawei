<?php
	header("Content-Type:text/html;charset=utf-8");
	
	/*生成临时二维码*/
     public static String getTemporaryQR(String scene_id){
          //获取数据的地址（微信提供）
          String url = "https://api.weixin.qq.com/cgi-bin/qrcode/create?access_token=10_1Wif9X6kj-Va9JAwVhOMRZxsqUD5_JxgMpg2eyC_5bxtJkTzlEgid-yA9lCII3YVlbtx7eGqBdkrGkF__eTeND32blFx-MxIad7gA5EVGOir6GaNMfuLsVz9FBg4y1VbB4jKpJy2il2gRZGjZJXbACAISG";
 
          //发送给微信服务器的数据
          String jsonStr = "{\"expire_seconds\": 2592000,\"action_name\": \"QR_SCENE\", \"action_info\": {\"scene\": {\"scene_id\": "123"}}}";
 
          //将得到的字符串转化成json对象
          String response = RequestMethod.sendPost(jsonStr, url);
          return response.toString();
     }
     // var_dump(String)
?>