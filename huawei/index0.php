<?php
//载入jssdk类
	require_once "jssdk.php";
	$jssdk = new JSSDK( APPID, APPSECRET );
	$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html>
<head>
	<title>20181115| 5G is Now, 5G is Now-Bring MBB to a New Horizon</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" />
    <script src="jquery-1.8.2.min.js"></script>
	<meta http-equiv="Cache-Control" content="max-age=0" />
	<meta name="apple-touch-fullscreen" content="yes" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
</head>
<style>
	body{
		margin: 0;
		padding: 0;
		background: white;
	}
	.top{
		width: 100%;
	}
	.top img{
		width: 100%;
		display: block;
	}
	.menu{
		width: 100%;
	}
	.menu img{
		width: 20%;
		display: block;
		float: left;
	}
	.main{
		width: 100%;
		height: auto;
		overflow: hidden;
	}
	.main a{
		display: block;
		width: 45%;
		float: left;
		margin-left:3.3%;
		margin-bottom:10px;
	}
	.main a img{
		width: 100%;
	}
	.main img{
		width: 100%;
	}
	.ban{
		width: 100%;
		display: none;
	}
	.ban a{
		width: 100%;
		display: block;
	}
	.ban img{
		width: 100%;
	}
</style>
<body>
<div class="top">
	<img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/top.jpg" alt="">
</div>
<div class="menu">
	<img id="m1" src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_01.png" alt="">
	<img id="m2" src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_02.png" alt="">
	<img id="m3" src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_03.png" alt="">
	<img id="m4" src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_04.png" alt="">
	<img id="m5" src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_05.png" alt="">
</div>
<div>
	<!-- 每周要闻 -->
<div class="main">
	<img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/t1.png" alt="">

	<a href="https://www.mobileworldlive.com/featured-content/home-banner/ee-lays-out-5g-launch-strategy/"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/q1.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/116/a1070835.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/q2.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/AAxXkwteKTxB60ar3P2AFQ"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/q3.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/5I-GJ1O8gSRXE71K5B4tyA"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/q4.jpg" alt=""></a>
	<!-- <a href=""><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/q5.jpg" alt=""></a> -->
	<!-- <a href="http://www.c114.com.cn/news/116/a1056143.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/q6.jpg" alt=""></a>  -->

</div>
<!-- 市场进展 -->
<div class="ban one">
	<img class="begin" src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/t2.png" alt="">

	<a href="https://www.mobileworldlive.com/featured-content/home-banner/ee-lays-out-5g-launch-strategy/"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_90.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/116/a1070835.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_91.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/AAxXkwteKTxB60ar3P2AFQ"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_92.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/5I-GJ1O8gSRXE71K5B4tyA"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_93.jpg" alt=""></a>

	<!-- <a href=""><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_87.jpg" alt=""></a> -->
	<a href="https://www.huawei.com/cn/press-events/news/2018/11/huawei-zhejiang-mobile-large-scale-5g-wuzhen"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_88.jpg" alt=""></a>
	<a href="https://www.huawei.com/cn/press-events/news/2018/11/China-Mobile-Huawei-5G-8K-VR-Broadcast-5th-WIC?from=timeline"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_89.jpg" alt=""></a>

	<a href="https://www.toutiao.com/i6618439256614371843/?tt_from=weixin&utm_campaign=client_share&wxshare_count=3&from=timeline&timestamp=1541032546&app=news_article&utm_source=weixin&iid=47852232960&utm_medium=toutiao_android&group_id=6618439256614371843&pbid=6612805326386152967"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_83.jpg" alt=""></a>
	<a href="http://m.c114.com.cn/w126-1069050.html?from=timeline"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_84.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=440662"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_85.jpg" alt=""></a>
	<a href="http://zj.people.com.cn/n2/2018/1028/c198068-32211196.html?from=timeline&isappinstalled=0"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_86.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/JHbvI8oYPJS9HYO8D7_e2w"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_80.jpg" alt=""></a>
	<a href="http://www.cnii.com.cn/5G/2018-10/19/content_2112124.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_81.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/36arNc3xxWURoSCUEcxHYA"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_82.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/yH4OwimkCkSHgI_owCW6zw"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_76.jpg" alt=""></a>
	<a href="http://www.cnii.com.cn/internation/2018-10/17/content_2111344.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_77.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2018-10-11/1411289.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_78.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/22/c19327.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_79.jpg" alt=""></a>

	<a href="https://www.huawei.com/cn/press-events/news/2018/9/huawei-5g-rd-test-third-phase"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_70.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/126/a1067248.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_71.jpg" alt=""></a>
	<a href="https://app.peopleapp.com/Api/600/DetailApi/shareArticle?type=0&article_id=2511952&from=timeline&isappinstalled=0"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_72.jpg" alt=""></a>
	<a href="http://www.cnii.com.cn/5G/2018-10/08/content_2108573.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_73.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2018-9-30/1410549.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_74.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/116/a1067418.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_75.jpg" alt=""></a>

	<a href="https://www.huawei.com/cn/press-events/news/2018/9/5g-3gppr16-new-features-test?from=timeline"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_65.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/soBKDIVtUCIFPUTu7Tym_w"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_66.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/ch8VDjrfHYOViI6rIVi2QA"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_67.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/tBdhLvHWS372mBQmtGNlPg"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_68.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/cV2vosTxM4ikg94hlXOBbw"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_69.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/126/a1065299.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_62.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/117/a1065062.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_63.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/126/a1065623.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_64.jpg" alt=""></a>

	<a href="http://www.cnii.com.cn/conference/2018-09/12/content_2102795.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_57.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/gRxx8qBi-bwio_G0iDfGwQ"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_58.jpg" alt=""></a>
	<a href="http://m.c114.com.cn/w118-1064829.html?from=timeline&isappinstalled=0"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_59.jpg" alt=""></a>
	<a href="http://m.c114.com.cn/w126-1064456.html?from=timeline&isappinstalled=0"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_60.jpg" alt=""></a>
	<a href="http://m.c114.com.cn/w126-1064679.html?from=timeline&isappinstalled=0"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_61.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/Twl5lyocoBLRdz_ZVmXC3w"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_53.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/C6J1pp8vJAf1dXPKoPHdRw"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_54.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/4QDdfA1hdHvCwhO0ovImOQ"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_55.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/116/a1063968.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_56.jpg" alt=""></a>

	<a href="http://www.ccsa.org.cn/article_new/show_article.php?article_id=cyzx_7cfa08bf-b6e4-b295-70b7-5b83588c39f0"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_49.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/5GT-eVXUxfhEolwH2Xmudg"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_50.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2018-8-28/1403631.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_51.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/17/a1063557.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_52.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/oJtaV_nxY-hLHdpo48La0w"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_46.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/F0MBab-qdfUYHf7d8X-4QA"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_47.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/gYC3b15DQZHCiFODd4wJ1g"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_48.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=436788"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_42.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2018-8-15/1401311.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_43.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/116/a1062158.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_44.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/116/a1061807.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_45.jpg" alt=""></a>

	<a href="http://www.cctime.com/html/2018-8-6/1399708.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_38.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/market/38/a1061245.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_39.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=436631"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_40.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2018-8-8/1400011.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_41.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=436447"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_34.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/116/a1060653.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_35.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/market/5366/a1060836.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_36.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/126/a1060530.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_37.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/zbsfdqs4ge8TUyPPCUBsAg"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_33.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/JHRP2T33YYje9E0qb5YItw"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_30.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/market/38/a1059690.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_32.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/41/a1059250.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_26.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/126/a1059344.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_27.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/116/a1059332.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_28.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=435988"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_29.jpg" alt=""></a>

</div>
<!-- 产业动态 -->
<div class="ban two">
	<img class="begin" src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/t3.png" alt="">

	<a href="http://www.cww.net.cn/article?id=441951"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_72.jpg" alt=""></a>
	<a href="https://media.weibo.cn/article?id=2309404305587490928653&from=timeline&isappinstalled=0"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_73.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=441836"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_69.jpg" alt=""></a>
	<a href="https://www.mobileworldlive.com/featured-content/top-three/ee-bulks-up-5g-trials-as-uk-race-hots-up/"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_70.jpg" alt=""></a>
	<a href="https://www.mobileworldlive.com/featured-content/top-three/3uk-set-for-2b-5g-investment/"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_71.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/PHmR5Wg8fm2fHkZbKomaiA"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_66.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/XeL_8b-r6VLtaSDl7WHmEg"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_67.jpg" alt=""></a>
	<a href="https://www.fiercewireless.com/5g/trump-to-create-spectrum-strategy-for-5g"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_68.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/0nPfn3j8144OjadWn5Lelg"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_65.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/zPDxmwWmNj_1Lcj1kXZJtA"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_63.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/NUIihb9wDJOysRc8BcSe8A"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_64.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/RWBJ3ziGz9W1l_ApLSjNeg"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_60.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/3InD34Vvr_20utysIY6_Gg"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_61.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/e8ZKzjUGDYbnd8jBR49CQA"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_62.jpg" alt=""></a>

	<a href="http://www.cctime.com/html/2018-9-26/1409357.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_56.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=439308"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_57.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/dmxJHIUQY7MODkxmLS9Oew"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_58.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/L9V9emOcsh9Y0AGyf_KYNg"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_59.jpg" alt=""></a>、

	<a href="http://www.c114.com.cn/news/119/a1065742.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_53.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/f5NGJdg3tz-AEI7_UeeYPg"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_54.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/D0W7toPvd3LFGW91ElB5zA"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_55.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/zRbQh6jmt4MgB8XaSI18Hg"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_50.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/fh5NfLFevCau9FCNkLR4sw"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_51.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/uDH8TZ8dA1253LRO6RMdEA"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_52.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/-o9US_OxN3pFvxWmOyfa1w"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_46.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/pKao167w8KCDb-kwZLc22w"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_47.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/116/a1064153.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_48.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/41/a1064092.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_49.jpg" alt=""></a>

	<a href="http://www.cnii.com.cn/hygl/2018-08/27/content_2097314.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_43.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/4564/a1063593.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_44.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=437398"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_45.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=437049"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_40.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=437079"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_41.jpg" alt=""></a>
	<a href="http://www.cnii.com.cn/internation/2018-08/20/content_2094669.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_42.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/nWsoCTQ_flYGpaY3Zc-Eyw"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_37.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/MAVTV9qk4fDN_7QVaR9bsg"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_38.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=436860"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_39.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=436574"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_33.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/avjYt7OliE1s4Suadd9SiA"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_34.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/5bwdnZppqBZ3errrWv1jSA"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_35.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2018-8-9/1400279.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_36.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/116/a1060815.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_31.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=436426"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_32.jpg" alt=""></a>

	<a href="http://www.cctime.com/html/2018-7-25/1397450.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_30.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/bCd5Zncu0FViUE5BQRmA8g"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_31.jpg" alt=""></a>
	
	<a href="http://www.c114.com.cn/news/116/a1060295.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_28.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/22/c19144.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_29.jpg" alt=""></a>

	<a href="http://www.cnii.com.cn/5G/2018-07/17/content_2083475.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_27.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/22/c19103.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_24.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/116/a1058542.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_25.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/AQuCpKSNvzQC4MdlfqrPKg"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_26.jpg" alt=""></a>

</div>
<!-- 上市专题 -->
<div class="ban three">
	<img class="begin" src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/t4.png" alt="">

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1795390&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r31.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1873694&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r30.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1870212&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r28.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1870212&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r29.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1868333&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r27.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1868156&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r26.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1857302&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r25.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1871881&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r24.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1812183&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r23.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1861959&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r22.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1860947&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r21.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1860024&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r20.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1857209&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r19.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1855705&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r18.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1855172&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r17.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1847494&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r16.jpg" alt=""></a>

	<a href="https://xpa-ssl.huawei.com/h/imss/imss_share.html?AppId=com.huawei.imss&id=1f64591c8abe4bfc956c153780b1a5fa&ititle=5G%20RAN2.0%20Main%20Slide%20%2F%205G%20RAN2.0%20%E4%B8%BB%E6%89%93%E8%83%B6%E7%89%87"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r13.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1846954&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r14.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1792712&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r15.jpg" alt=""></a>

	<a href="http://3ms.huawei.com/mm/docMaintain/mmMaintain.do?method=showMMDetail&f_id=1812099"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r12.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1795390&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r11.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1805166&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r10.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1796351&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r9.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1800427&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r8.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1790783&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r7.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1773005&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r6.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1797059&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r5.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1795390&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r4.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1795390&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r3.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1795390&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r2.jpg" alt=""></a>
	<a href="https://xpa-ssl.huawei.com/h/imss/imss_share.html?AppId=com.huawei.imss&id=935c6229bd72416c9292509bc637a9bb&ititle=5G+Technical+Proposal+Template+V1.0&from=groupmessage"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r1.jpg" alt=""></a>
	
</div>
<!-- 应用趋势 -->
<div class="ban four">
	<img class="begin" src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/t5.png" alt="">

	<a href="http://www.cctime.com/html/2018-11-15/1419172.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y61.jpg" alt=""></a>

	<a href="http://app.cctv.com/special/cbox/detail/index.html?guid=dce4fbd2452e4f1b8fcf0afca335cae6&mid=dce4fbd2452e4f1b8fcf0afca335cae6&from=timeline"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y56.jpg" alt=""></a>
	<a href="https://m.weibo.cn/status/4303308547932007?from=timeline"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y57.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/iIX-R6JmJmMI_oQUin4qww"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y58.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/126/a1070027.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y59.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/52/a1070037.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y60.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/LsVUpoRjAn5rYwGzJlA9IA"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y55.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/126/a1068493.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y54.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=440294"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y55.jpg" alt=""></a>
	<a href="http://www.cnii.com.cn/5G/2018-10/18/content_2111826.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y56.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/3I77RBqMo0V7hkfzhMfiLQ"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y51.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/118/a1067910.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y52.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/wYFplweApdQuf4NfLQsXuA"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y53.jpg" alt=""></a>

	<a href="http://www.cctime.com/html/2018-10-10/1411272.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y47.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2018-10-8/1410683.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y48.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2018-10-8/1410689.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y49.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=439522"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y50.jpg" alt=""></a>

	<a href="http://www.cctime.com/html/2018-9-27/1408649.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y45.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/N-Ce4YIOSJW5mJDhQTAgog"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y46.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/117/a1065170.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y43.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=438944"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y44.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=438589"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y41.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/126/a1064695.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y42.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/22/c19241.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y39.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/sHYsBrdkRa9DojeRqodElA"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y40.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=437402"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y36.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/SKvgh90pwqMsQMosbl6X5Q"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y37.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=437390"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y38.jpg" alt=""></a>

	<a href="http://www.cnii.com.cn/mobileinternet/2018-08/21/content_2095168.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y35.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/KZA-emYpNXL4_l6QAQZAMQ"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y33.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/dFijrzfSiZJXfcPK9Bhrqg"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y34.jpg" alt=""></a>

	<a href="http://www.cctime.com/html/2018-7-27/1397879.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y31.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2018-7-26/1397602.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y32.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=436419"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y29.jpg" alt=""></a>
	<a href="http://www.cnii.com.cn/5G/2018-07/26/content_2086399.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y30.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/market/38/a1059855.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y27.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/118/a1060283.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y28.jpg" alt=""></a>

	<a href="http://www.cnii.com.cn/5G/2018-07/16/content_2082917_2.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y24.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=436032"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y25.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/4uS24RoYM8ik8GxI4_n5lQ"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y26.jpg" alt=""></a>

</div>
<!-- 高层发言 -->
<div class="ban five">
	<img class="begin" src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/t6.png" alt="">

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1877"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/g10.jpg" alt=""></a>

	<a href="https://xpa-ssl.huawei.com/h/imss/imss_share.html?AppId=com.huawei.imss&id=85f820c4e24147af83211e1299e1b476&ititle=%E3%80%90%E9%AB%98%E5%B1%82%E5%8F%91%E8%A8%80%E3%80%91%E7%94%98%E6%96%8C%E5%8C%97%E5%B1%95%E5%8F%91%E8%A8%80%EF%BC%9A5G%E5%B7%B2%E6%9D%A5%EF%BC%8C%E6%90%BA%E6%89%8B%E4%BA%A7%E4%B8%9A%E5%85%B1%E5%8A%A95G%E6%88%90%E5%8A%9F%E5%95%86%E7%94%A8_20180928"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/g8.jpg" alt=""></a>
	<a href="https://xpa-ssl.huawei.com/h/imss/imss_share.html?AppId=com.huawei.imss&id=8b587b8517924b0abd2917d428e3adc2&ititle=%E3%80%90%E9%AB%98%E5%B1%82%E5%8F%91%E8%A8%80%E3%80%91%E7%94%98%E6%96%8C%E5%8C%97%E5%B1%95%E6%9C%9F%E9%97%B4%E5%9C%A8Intel%E5%B3%B0%E4%BC%9A%E5%8F%91%E8%A8%80%EF%BC%9A%E5%90%88%E4%BD%9C%E5%85%B1%E8%B5%A2%EF%BC%8C%E5%85%B1%E7%AD%915G%E5%95%86%E4%B8%9A%E6%88%90%E5%8A%9F%20-%2020180925"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/g9.jpg" alt=""></a>

	<a href="http://xpa.huawei.com/g/imss.html?AppId=com.huawei.imss&id=5f0c2fa61bee4a50a679df5681a9b0e1&ititle=Eric%20Xu%EF%BC%9ABringing%20MBB%20to%20a%20New%20Level%20with%205G"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/g4.jpg" alt=""></a>
	<a href="http://xpa.huawei.com/g/imss.html?AppId=com.huawei.imss&id=a822feb6ca114c93a25da7afa18acef4&ititle=Yang%20Chaobin%3A%205G%20is%20Now%2C%20Sailing%20to%20New%20eMBB%20Horiz..."><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/g5.jpg" alt=""></a>
	<a href="http://xpa.huawei.com/g/imss.html?AppId=com.huawei.imss&id=15f55fb46a2b4e94ba9d8e89b3bb8d10&ititle=%5BKevin%2C%20Keynote%20on%20MWCS%20Summit%5D%20Vitalizing%20Mobile%20..."><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/g7.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=434606&from=timeline&isappinstalled=0"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/g6.jpg" alt=""></a>

	<a href="https://xpa-ssl.huawei.com/h/imss/imss_share.html?AppId=com.huawei.imss&id=65b0e41541ba46a9b87ccc4d91701f03&ititle=%E3%80%902018HAS%E5%85%A8%E7%90%83%E5%88%86%E6%9E%90%E5%B8%88%E5%A4%A7%E4%BC%9A-5G%20Session%E6%9D%A8%E8%B6%85%E6%96%8C%E6%80%BB%E6%BC%94%E8%AE%B2%E3%80%915G%20is%20Now%2C%20from%20e..."><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/g1.jpg" alt=""></a>
	<a href="https://xpa-ssl.huawei.com/h/imss/imss_share.html?AppId=com.huawei.imss&id=09920a1f724a48f798d40941e08e9bed&ititle=%E3%80%9020180424%2C%20Peter%20VDF%20Wireless%20Executive%20Meeting%E3%80%915G..."><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/g2.jpg" alt=""></a>
	<a href="https://xpa-ssl.huawei.com/h/imss/imss_share.html?AppId=com.huawei.imss&id=e9ecc73bf8d94b58a0eb5e27b3167b71&ititle=%E3%80%90%E6%9D%AD%E5%B7%9E516%205G%E4%B9%8B%E5%9F%8E-%E5%8D%8E%E4%B8%BA%E6%9D%A8%E8%B6%85%E6%96%8C%E5%8F%91%E8%A8%80%E3%80%91%E5%BC%80%E6%94%BE%E5%90%88%E4%BD%9C%EF%BC%8C%E4%BB%A5%E8%A1%8C%E8%B7%B5%E8%A8%80%EF%BC%8C%E5%85%B1%E7%AD%915G%E5%95%86%E7%94%A8%E4%B9%8B%E8%B7%AF"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/g3.jpg" alt=""></a>
	
</div>
</div>
</body>
</html>
<script>
	$(".begin").click(function(){
		$(".main").css("display","block");
		$(".main").siblings().css("display","none");

		$("#m1").attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_01.png");
		$("#m2").attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_02.png");
		$("#m3").attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_03.png");
		$("#m4").attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_04.png");
		$("#m5").attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_05.png");
	})

	$("#m1").click(function(){
		$(this).attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/mu11.png");
		$("#m2").attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_02.png");
		$("#m3").attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_03.png");
		$("#m4").attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_04.png");
		$("#m5").attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_05.png");

		$(".one").css("display","block");
		$(".one").siblings().css("display","none");
	})
	$("#m2").click(function(){
		$(this).attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/mu22.png");
		$("#m1").attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_01.png");
		$("#m3").attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_03.png");
		$("#m4").attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_04.png");
		$("#m5").attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_05.png");

		$(".two").css("display","block");
		$(".two").siblings().css("display","none");
	})
	$("#m3").click(function(){
		$(this).attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/mu33.png");
		$("#m1").attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_01.png");
		$("#m2").attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_02.png");
		$("#m4").attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_04.png");
		$("#m5").attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_05.png");

		$(".three").css("display","block");
		$(".three").siblings().css("display","none");
	})
	$("#m4").click(function(){
		$(this).attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/mu44.png");
		$("#m1").attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_01.png");
		$("#m2").attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_02.png");
		$("#m3").attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_03.png");
		$("#m5").attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_05.png");

		$(".four").css("display","block");
		$(".four").siblings().css("display","none");
	})
	$("#m5").click(function(){
		$(this).attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/mu55.png");
		$("#m1").attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_01.png");
		$("#m2").attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_02.png");
		$("#m3").attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_03.png");
		$("#m4").attr("src","https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/m_04.png");

		$(".five").css("display","block");
		$(".five").siblings().css("display","none");
	})
</script>
<!--开始-->
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
		      // 所有要调用的 API 都要加到这个列表中
		    ]
		  });
		 wx.ready(function () {
		var shareinfo={
		 	 title: '20181115| 5G is Now, 5G is Now-Bring MBB to a New Horizon',
		      desc: 'MBBF 5G外场&展区预热；英国BT/EE宣布2019年推出5G服务;',
		      link: 'http://ym.2dreamchaser.com/yin/2018/huawei/',
		      imgUrl: 'http://ym.2dreamchaser.com/yin/2018/huawei/share.jpg'
		  }
		  // wx.hideOptionMenu();
      wx.onMenuShareTimeline(shareinfo);
	 wx.onMenuShareAppMessage(shareinfo);
		  });
    </script>
<!--结束-->
<!--百度统计代码-->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?631a34f2cd5cae7ab446444d33869db0";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
