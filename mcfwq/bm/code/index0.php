<?php 
public function buildQrcode()  
    {  
        //var_dump(request()->post());exit;  
        $appid = 'wx863e78b1aaf4d6f4';  
        $appsecret ='2791e35605a17a601eacdcdd83dcd0fd';  
        $activity_head = request()->post('activity_head');  
        $activity_address = request()->post('activity_address');  
        $activity_type = request()->post('activity_type');  
        $url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.$appid.'&secret='.$appsecret;  
        $ch = curl_init();  
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  
        curl_setopt($ch, CURLOPT_URL,$url);  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
        $a = curl_exec($ch);  
        $strjson=json_decode($a);  
        $token = $strjson->access_token;  
        //return $token;  
        echo $token;exit;
  
        $path = './Qrcode/';  
        $filename = time().'.jpg';  
  
        $pathname = $path.$filename;  
        $datat = [  
            'activity_head'=>$activity_head,  
            'activity_address'=>$activity_address,  
            'activity_type'=>$activity_type,  
            'activity_code'=>trim($pathname,'.')  
        ];  
        $id = db('sys_scene_qrcode')->insertGetId($datat);  
  
        //初始化 获取ticket  
        $post_data = [  
            "expire_seconds"=> 2592000,  
            "action_name"=> "QR_STR_SCENE",  
            "action_info"=> [  
                "scene"=> [  
                    "scene_id"=>$id,  
                    'scene_str'=>$id  
                ]  
            ]  
        ];  
        $dat = json_encode($post_data);  
        $curl = curl_init();  
        //设置抓取的url  
        curl_setopt($curl, CURLOPT_URL, 'https://api.weixin.qq.com/cgi-bin/qrcode/create?access_token='.$token.'&'.$dat);  
        //设置头文件的信息作为数据流输出  
        //curl_setopt($curl, CURLOPT_HEADER, 1);  
        //设置获取的信息以文件流的形式返回，而不是直接输出。  
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  
        //设置post方式提交  
        curl_setopt($curl, CURLOPT_POST, 1);  
        //设置post数据  
  
        curl_setopt($curl, CURLOPT_POSTFIELDS, $dat);  
        //执行命令  
        $data = curl_exec($curl);  
        //关闭URL请求  
        curl_close($curl);  
        //显示获得的数据  
        //var_dump($data);  
  
        $str = json_decode($data);  
        $ticket = urlencode($str->ticket);  
        $buildurl = $str->url;  
        //var_dump($ticket);exit;  
  
  
        //换取二维码  
        $url = 'https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket='.$ticket;  
        $imageInfo = $this->downloadImageFromWeiXin($url);  
  
        $local_file = fopen($path.$filename,'w');  
        if(false !== $local_file){  
            if(false !== fwrite($local_file,$imageInfo['body'])){  
                fclose($local_file);  
            }  
        }  
        $res = db('sys_scene_qrcode')->select();  
        $this->assign('res',$res);  
        $this->success('二维码生成成功');  
  
    }
buildQrcode()
 ?>