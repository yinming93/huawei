<?php
//载入jssdk类
	require_once "jssdk.php";
	$jssdk = new JSSDK( APPID, APPSECRET );
	$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html>
<head>
	<title>20190606| 5G is On-Bring MBB to a New Horizon</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" />
    <script src="jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="jquery.lazyload.js"></script>
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
		/*box-shadow:8px 8px 4px #888888;*/
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
<!-- 懒加载 -->
<script>
	$(function() {
    $("img").lazyload({
    threshold : 200
});
});
</script>
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

	<a href="https://mp.weixin.qq.com/s/8ZKA87pD_mSKK6A2A8oVPA"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/q1.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/r2r19mxFd-jlxcJOkV6zLg"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/q2.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/rvp5anYfd81gXwPnXhOp6w"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/q3.jpg" alt=""></a>
	<a href="http://m.c114.com.cn/w126-1089184.html?from=timeline"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/q4.jpg" alt=""></a>
	<!-- <a href="http://www.c114.com.cn/news/126/a1085013.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/q5.jpg" alt=""></a> -->
	<!-- <a href="http://www.c114.com.cn/news/126/a1082713.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/q6.jpg" alt=""></a> -->
	<!-- <a href="http://www.cctime.com/html/2019-3-2/1435636.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/q7.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=448133&from=timeline&isappinstalled=0"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/q8.jpg" alt=""></a>
	<a href="http://m.c114.com.cn/w126-1080737.html?from=timeline"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/q9.jpg" alt=""></a> -->

</div>
<!-- 市场进展 -->
<div class="ban one">
	<img class="begin" src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/t2.png" alt="">
	

	<a href="https://mp.weixin.qq.com/s/8ZKA87pD_mSKK6A2A8oVPA"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_200.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/r2r19mxFd-jlxcJOkV6zLg"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_201.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/rvp5anYfd81gXwPnXhOp6w"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_202.jpg" alt=""></a>
	<a href="http://m.c114.com.cn/w126-1089184.html?from=timeline"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_203.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/jc1LtrU8MpLOWwMbGow-uw"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_199.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/116/a1089070.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_197.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/22/c19855.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_198.jpg" alt=""></a>

	<a href="https://www.dailymail.co.uk/sciencetech/article-7057441/EE-launch-UKs-5G-network-MONTH.html?from=timeline"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_194.jpg" alt=""></a>
	<a href="https://ishare.ifeng.com/c/s/7msTc4nKhW6"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_195.jpg" alt=""></a>
	<a href="https://view.inews.qq.com/a/20190518A055QA00?from=timeline&openid=o04IBAJksyy9PvVHR7_w1ikARz3M&key=&version=2700043b&devicetype=android-27&wuid=oDdoCt_XYVguYPaH5oeiWkpkTfQE&sharer=o04IBAJksyy9PvVHR7_w1ikARz3M&uid=&shareto="><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_196.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/116/a1087861.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_190.jpg" alt=""></a>
	<a href="https://ishare.ifeng.com/c/s/7mgVq4xnaKv?from=timeline"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_191.jpg" alt=""></a>
	<a href="https://view.inews.qq.com/a/20190514A049KK00?openid=o04IBAJksyy9PvVHR7_w1ikARz3M&key=6866887b7bd2f3ff6bc107276b0fcfe988b28ec9bd8f562c3dfdf4413f0016784b59e12b43352da078f9bab7e39078e508ce07c3340733ca61eab7e266d0ebcced3ccb585d50903d11647f94f602c78c&version=2700043a&devicetype=android-27&wuid=oDdoCt_XYVguYPaH5oeiWkpkTfQE&cv=0x2700043a&dt=2&lang=zh_CN&pass_ticket=UGupTaye6TtNMCSKFBg8SKp2296SKcijCgzd6DYo8OemM7bjgbYGYcQsHpvY9wxy&sharer=o04IBAJksyy9PvVHR7_w1ikARz3M&uid=&shareto=&from=timeline"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_192.jpg" alt=""></a>
	<a href="http://m.c114.com.cn/w116-1087461.html?from=timeline"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_193.jpg" alt=""></a>

	<a href="https://www.mobileworldlive.com/featured-content/home-banner/korea-operators-amass-260k-5g-customers/"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_187.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=451492&from=timeline"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_188.jpg" alt=""></a>
	<a href="http://m.c114.com.cn/w126-1086299.html?from=timeline"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_189.jpg" alt=""></a>

	<a href="https://www.gulf-times.com/story/629619/Vodafone-makes-5G-available-in-Qatar-homes"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_182.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/22/c19776.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_183.jpg" alt=""></a>
	<a href="http://app.time-weekly.com/wamei/articleController/preview2/8a9eaf056a457d81016a4a40c5d105e4.htm?_s=1&from=timeline&isappinstalled=0"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_184.jpg" alt=""></a>
	<a href="https://www.telegraph.co.uk/politics/2019/04/23/theresa-may-defies-security-warnings-ministers-us-allow-huawei/"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_185.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/126/a1085187.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_177.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/126/a1085032.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_178.jpg" alt=""></a>
	<a href="https://www.strategyanalytics.com/access-services/service-providers/networks-and-service-platforms/reports/report-detail/comparison-and-2023-5g-global-market-potential-for-leading-5g-ran-vendors-ericsson-huawei-and-nokia"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_179.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/16/a1084935.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_180.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/126/a1085013.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_181.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=450102&from=timeline"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_175.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2019-4-9/1442062.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_176.jpg" alt=""></a>

	<a href="https://www.huawei.com/cn/press-events/news/2019/4/huawei-sunrise-5g-fwa-pioneer-users-switzerland?from=timeline"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_174.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/LOm2qIkb_wNJfi8jcxVJrA"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_170.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2019-3-30/1440894.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_171.jpg" alt=""></a>
	<a href="http://www.tellerchina.com/tech/--lg-uplus%E6%97%A8%E5%9C%A8%E6%88%90%E4%B8%BA5g%E7%9A%84%E5%B8%82%E5%9C%BA%E9%A2%86%E5%AF%BC%E8%80%85-.S18M_8A_E.html?from=timeline"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_172.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=449868"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_173.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/116/a1083307.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_165.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=449479&from=timeline"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_166.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=449193&from=timeline"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_167.jpg" alt=""></a>
	<a href="https://edition.cnn.com/2019/03/26/tech/huawei-europe-5g/index.html?from=timeline"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_168.jpg" alt=""></a>
	<a href="https://www.mobileworldlive.com/featured-content/home-banner/bahrain-targets-5g-launches-in-june/"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_169.jpg" alt=""></a>

	<a href="http://m.c114.com.cn/w116-1082353.html?from=timeline"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_159.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=449002"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_160.jpg" alt=""></a>
	<a href="http://m.c114.com.cn/w126-1082587.html?from=timeline&isappinstalled=0"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_161.jpg" alt=""></a>
	<a href="https://ie.bjd.com.cn/5b165687a010550e5ddc0e6a/contentApp/5c27294de4b06597cc7d1999/AP5c8f8d32e4b099b8d058190b?isshare=1&from=timeline&isappinstalled=0"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_162.jpg" alt=""></a>
	<a href="http://www.businesskorea.co.kr/news/articleView.html?idxno=30086"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_163.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/126/a1082713.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_164.jpg" alt=""></a>

	<a href="http://m.focus.sinorusfocus.com/p/9813.html?from=timeline"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_154.jpg" alt=""></a>
	<a href="https://m.weibo.cn/status/4348617731523554?sourceType=weixin&wm=9006_2001&featurecode=newtitle&from=singlemessage&isappinstalled=0"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_155.jpg" alt=""></a>
	<a href="http://www.channelpostmea.com/2019/03/12/viva-announces-nationwide-5g-service-huawei-kuwait/"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_156.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/126/a1081952.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_157.jpg" alt=""></a>
	<a href="https://www.mobileworldlive.com/huawei-2018-19-media-updates/massive-mimo-key-to-simplified-5g-networks/"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_158.jpg" alt=""></a>

	<a href="https://www.huawei.com/cn/press-events/news/2019/2/huawei-5g-simplified-solution"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_145.jpg" alt=""></a>
	<a href="http://m.c114.com.cn/w126-1080763.html?from=timeline&isappinstalled=0"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_146.jpg" alt=""></a>
	<a href="https://www.huawei.com/cn/press-events/news/2019/2/huawei-vodafone-superior-5g-experience-live-network-5g-devices"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_147.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/JnP_yNXsvFfEsn8YTipaWQ"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_148.jpg" alt=""></a>
	<a href="http://m.c114.com.cn/w119-1080817.html?from=timeline"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_149.jpg" alt=""></a>
	<a href="https://www.toutiao.com/i6664870027830755851/?tt_from=weixin&utm_campaign=client_share&wxshare_count=3&from=timeline&timestamp=1551786014&app=news_article&utm_source=weixin&iid=64594128915&utm_medium=toutiao_android&group_id=6664870027830755851&pbid=6664681132397594125"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_150.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2019-3-2/1435636.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_151.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=448133&from=timeline&isappinstalled=0"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_152.jpg" alt=""></a>
	<a href="http://m.c114.com.cn/w126-1080737.html?from=timeline"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_153.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/wireless/2935/a1078935.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_140.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2019-2-14/1433080.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_141.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=446506"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_142.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=446643"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_143.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/110/a1078959.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_144.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/550/a1078279.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_136.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2019-1-28/1431911.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_137.jpg" alt=""></a>
	<a href="http://www.cnii.com.cn/5G/2019-01/28/content_2137765.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_138.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/85/a1078176.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_139.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/126/a1077930.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_131.jpg" alt=""></a>
	<a href="https://www.huawei.com/cn/press-events/news/2019/1/huawei-lead-third-phase-china-5g-technology-rd-test"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_132.jpg" alt=""></a>
	<a href="https://www.huawei.com/cn/press-events/news/2019/1/china-5g-technology-rd-trial-2dot6ghz-spectrum"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_133.jpg" alt=""></a>
	<a href="https://www.rcrwireless.com/20190124/5g/lg-uplus-complete-5g-deployment-korea-major-cities-end-2019"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_134.jpg" alt=""></a>
	<a href="https://www.rcrwireless.com/20190124/5g/europe-leads-5g-trial-activity-139-pilots"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_135.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/8Y_LJMi4g-QLXBx4p4GQmQ"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_130.jpg" alt=""></a>
	<a href="http://news.cctv.com/2019/01/10/ARTICgAKe3EV0efNOQEYTJCC190110.shtml"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_127.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=445590"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_128.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/ReX9aaU-Li8Uz79jzh-S7Q"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_129.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=445368"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_124.jpg" alt=""></a>
	<a href="http://www.cnii.com.cn/telecom/2019-01/10/content_2132771.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_125.jpg" alt=""></a>
	<a href="https://www.mobileworldlive.com/featured-content/home-banner/5g-to-take-centre-stage-at-ces-2019/"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_126.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/eB2Q8mrntS8aEFLbgNFHrw"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_121.jpg" alt=""></a>
	<a href="http://m.tvoao.com/news/196115.html?from=timeline"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_122.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/126/a1075909.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_123.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/Fh01GR0CaIBctcF0wEje4g"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_117.jpg" alt=""></a>
	<a href="http://xinsheng.huawei.com/cn/index.php?app=forum&mod=Detail&act=index&id=4125183"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_118.jpg" alt=""></a>
	<a href="https://app.peopleapp.com/Api/600/DetailApi/shareArticle?type=0&article_id=3329171&from=timeline&isappinstalled=0"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_119.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/q-SmUo_j7PgHrJiRP9AkYg"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_120.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/22/c19496.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_113.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/116/a1074799.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_114.jpg" alt=""></a>
	<a href="http://www.3gpp.org/news-events/3gpp-news/2005-ran_r16_schedule"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_115.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/kqg6OrVCrpLvJ3joRIavDw"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_116.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=443655"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_108.jpg" alt=""></a>
	<!-- <a href="https://mp.weixin.qq.com/s/7o2lHhg7WW5-zO8yx-AAPA"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_109.jpg" alt=""></a> -->
	<a href="https://mp.weixin.qq.com/s/5oTKzR3Skcq93rMyh5u9Dw"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_110.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/4app/3542/a1073993.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_111.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2018-12-6/1423068.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_112.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/126/a1073288.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_102.jpg" alt=""></a>
	<a href="https://www.lightreading.com/mobile/5g/intel-and-huawei-achieve-worlds-first-26ghz-5g-interoperability-testing-under-sa/d/d-id/748065?from=timeline&isappinstalled=0"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_103.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/9_YBoGr_0ZrzntgSuHzuRg"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_104.jpg" alt=""></a>
	<a href="http://m.koreatimes.co.kr/pages/article.asp?newsIdx=259642&from=timeline&isappinstalled=0"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_105.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=443325"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_106.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=443584"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_107.jpg" alt=""></a>

	<a href="http://www.cnii.com.cn/5G/2018-11/22/content_2121519.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_94.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/126/a1071728.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_95.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/126/a1071607.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_96.jpg" alt=""></a>
	<a href="https://huaweihub.com.au/huawei-and-spark-unveil-world-first-5g-trial-network-with-separated-access-and-core/?doing_wp_cron=1543129309.6305820941925048828125&from=groupmessage&isappinstalled=0"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_97.jpg" alt=""></a>
	<a href="https://www.huawei.com/cn/press-events/news/2018/11/5g-home-broadband-capability-london"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_98.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/101/a1072310.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_99.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2018-11-20/1419994.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_100.jpg" alt=""></a>
	<a href="https://m.toutiaolite.com/i6628455792334864904/?iid=51433264262&app=news_article&timestamp=1543312976&group_id=6628455792334864904&tt_from=weixin&utm_source=weixin&utm_medium=toutiao_ios&utm_campaign=client_share&wxshare_count=11&pbid=6628556600272307716&from=timeline&isappinstalled=0"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_101.jpg" alt=""></a>

	<a href="https://www.mobileworldlive.com/featured-content/home-banner/ee-lays-out-5g-launch-strategy/"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_90.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/116/a1070835.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_91.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/AAxXkwteKTxB60ar3P2AFQ"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_92.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/5I-GJ1O8gSRXE71K5B4tyA"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_93.jpg" alt=""></a>

	<a href="https://www.huawei.com/cn/press-events/news/2018/11/huawei-zhejiang-mobile-large-scale-5g-wuzhen"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_88.jpg" alt=""></a>
	<a href="https://www.huawei.com/cn/press-events/news/2018/11/China-Mobile-Huawei-5G-8K-VR-Broadcast-5th-WIC?from=timeline"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_89.jpg" alt=""></a>

	<a href="https://www.toutiao.com/i6618439256614371843/?tt_from=weixin&utm_campaign=client_share&wxshare_count=3&from=timeline&timestamp=1541032546&app=news_article&utm_source=weixin&iid=47852232960&utm_medium=toutiao_android&group_id=6618439256614371843&pbid=6612805326386152967"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_83.jpg" alt=""></a>
	<a href="http://m.c114.com.cn/w126-1069050.html?from=timeline"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_84.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=440662"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_85.jpg" alt=""></a>
	<a href="http://zj.people.com.cn/n2/2018/1028/c198068-32211196.html?from=timeline&isappinstalled=0"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_86.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/JHbvI8oYPJS9HYO8D7_e2w"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_80.jpg" alt=""></a>
	<a href="http://www.cnii.com.cn/5G/2018-10/19/content_2112124.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_81.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/36arNc3xxWURoSCUEcxHYA"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_82.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/yH4OwimkCkSHgI_owCW6zw"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_76.jpg" alt=""></a>
	<a href="http://www.cnii.com.cn/internation/2018-10/17/content_2111344.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_77.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2018-10-11/1411289.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_78.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/22/c19327.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_79.jpg" alt=""></a>

	<a href="https://www.huawei.com/cn/press-events/news/2018/9/huawei-5g-rd-test-third-phase"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_70.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/126/a1067248.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_71.jpg" alt=""></a>
	<a href="https://app.peopleapp.com/Api/600/DetailApi/shareArticle?type=0&article_id=2511952&from=timeline&isappinstalled=0"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_72.jpg" alt=""></a>
	<a href="http://www.cnii.com.cn/5G/2018-10/08/content_2108573.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_73.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2018-9-30/1410549.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_74.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/116/a1067418.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_75.jpg" alt=""></a>

	<a href="https://www.huawei.com/cn/press-events/news/2018/9/5g-3gppr16-new-features-test?from=timeline"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_65.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/soBKDIVtUCIFPUTu7Tym_w"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_66.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/ch8VDjrfHYOViI6rIVi2QA"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_67.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/tBdhLvHWS372mBQmtGNlPg"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_68.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/cV2vosTxM4ikg94hlXOBbw"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_69.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/126/a1065299.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_62.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/117/a1065062.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_63.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/126/a1065623.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_64.jpg" alt=""></a>

	<a href="http://www.cnii.com.cn/conference/2018-09/12/content_2102795.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_57.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/gRxx8qBi-bwio_G0iDfGwQ"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_58.jpg" alt=""></a>
	<a href="http://m.c114.com.cn/w118-1064829.html?from=timeline&isappinstalled=0"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_59.jpg" alt=""></a>
	<a href="http://m.c114.com.cn/w126-1064456.html?from=timeline&isappinstalled=0"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_60.jpg" alt=""></a>
	<a href="http://m.c114.com.cn/w126-1064679.html?from=timeline&isappinstalled=0"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_61.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/Twl5lyocoBLRdz_ZVmXC3w"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_53.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/C6J1pp8vJAf1dXPKoPHdRw"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_54.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/4QDdfA1hdHvCwhO0ovImOQ"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_55.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/116/a1063968.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_56.jpg" alt=""></a>

	<a href="http://www.ccsa.org.cn/article_new/show_article.php?article_id=cyzx_7cfa08bf-b6e4-b295-70b7-5b83588c39f0"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_49.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/5GT-eVXUxfhEolwH2Xmudg"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_50.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2018-8-28/1403631.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_51.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/17/a1063557.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_52.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/oJtaV_nxY-hLHdpo48La0w"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_46.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/F0MBab-qdfUYHf7d8X-4QA"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_47.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/gYC3b15DQZHCiFODd4wJ1g"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_48.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=436788"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_42.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2018-8-15/1401311.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_43.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/116/a1062158.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_44.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/116/a1061807.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_45.jpg" alt=""></a>

	<a href="http://www.cctime.com/html/2018-8-6/1399708.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_38.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/market/38/a1061245.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_39.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=436631"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_40.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2018-8-8/1400011.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_41.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=436447"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_34.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/116/a1060653.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_35.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/market/5366/a1060836.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_36.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/126/a1060530.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_37.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/zbsfdqs4ge8TUyPPCUBsAg"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_33.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/JHRP2T33YYje9E0qb5YItw"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_30.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/market/38/a1059690.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_32.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/41/a1059250.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_26.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/126/a1059344.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_27.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/116/a1059332.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_28.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=435988"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_29.jpg" alt=""></a>

</div>
<!-- 产业动态 -->
<div class="ban two">
	<img class="begin" src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/t3.png" alt="">

	<a href="http://www.cnii.com.cn/5G/2019-06/04/content_2168896.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_129.jpg" alt=""></a>

	<a href="http://m.c114.com.cn/w126-1089141.html?from=timeline"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_128.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/22/c19858.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_126.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2019-5-27/1450843.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_127.jpg" alt=""></a>
	
	<a href="https://www.toutiao.com/i6693448580826399244/?tt_from=weixin_moments&utm_campaign=client_share&wxshare_count=1&from=timeline&share_type=original&timestamp=1558491157&app=news_article&utm_source=weixin_moments&utm_medium=toutiao_android&req_id=20190522101237010026043033618D7FE&group_id=6693448580826399244"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_124.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/8lpVNVBndpTaiYjNoRGlEA"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_125.jpg" alt=""></a>

	<a href="https://m.toutiaocdn.com/i6691073979576222215/?app=news_article&timestamp=1557898884&req_id=20190515134124010022062086309A093&group_id=6691073979576222215&wxshare_count=1&tt_from=weixin_moments&utm_source=weixin_moments&utm_medium=toutiao_android&utm_campaign=client_share&share_type=original&from=timeline"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_123.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/16/a1086901.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_120.jpg" alt=""></a>
	<a href="http://m.c114.com.cn/w111-1086637.html?from=timeline"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_121.jpg" alt=""></a>
	<a href="https://www.mobileworldlive.com/asia/asia-news/singapore-seeks-5g-deployments-in-2020/"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_122.jpg" alt=""></a>

	<a href="https://www.rcrwireless.com/20190423/5g/huawei-5g-product-line"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_118.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/z2L1i4vny_260DFU8dEBgg"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_119.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/Iq44kPjmPNsL--56i-9-rw"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_116.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/qQks-L2Gm7bDfBqPJgDukg"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_117.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=450306"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_113.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=450329"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_114.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/9Kp4aCfB7FxXQSiv-jRo4Q"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_115.jpg" alt=""></a>

	<a href="http://www.cnii.com.cn/5G/2019-04/03/content_2155141.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_112.jpg" alt=""></a>

	<a href="http://m.zjbyte.com/sbfp/finance/article?groupId=6672889911776903687&itemId=6672889911776903687&timestamp=1553685638&article_category=stock&group_id=6672889911776903687&token_type=1&from=qrcode_sysshare_pyq&sysopt_emoji_group=1&sysopt_mtp=0"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_108.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/yu3samuW1o1bfAZ22CYCKQ"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_109.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/v0iMQAaEdIWPvWZnjDCWIg"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_110.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/118/a1082757.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_104.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/mtRS9g90SlxDPkbL256-yQ"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_105.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/gr4Z-3B-_gsJ1uDoGZTZMg"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_106.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/VNKvI4SSyXQho9ArPLFCmQ"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_107.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=448205"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_102.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/4app/3542/a1081956.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_103.jpg" alt=""></a>

	<a href="http://www.nationmultimedia.com/detail/Economy/30365240?from=timeline"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_101.jpg" alt=""></a>

	<a href="https://www.rcrwireless.com/20190208/5g/swiss-regulator-raises-379-million-5g-spectrum-auction"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_99.jpg" alt=""></a>
	<a href="https://www.rcrwireless.com/20190212/5g/hong-kong-releases-spectrum-roadmap-2019-2021"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_100.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/116/a1078470.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_96.jpg" alt=""></a>
	<a href="https://www.fiercewireless.com/wireless/fcc-s-28-ghz-auction-comes-to-anticlimactic-finish"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_97.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/E5ADupeKIj9c51eZc3nf2w"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_98.jpg" alt=""></a>

	<a href="https://www.mobileworldlive.com/featured-content/top-three/ec-targets-3-6ghz-harmony-in-5g-push/"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_95.jpg" alt=""></a>

	<a href="http://www.gov.cn/xinwen/2019-01/13/content_5357463.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_92.jpg" alt=""></a>
	<a href="https://36kr.com/p/5171657.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_93.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/market/5305/a1076862.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_94.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=445392"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_90.jpg" alt=""></a>
	<a href="https://www.rcrwireless.com/20190103/5g/qatar-awards-5g-frequencies-under-new-unified-telecom-licenses"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_91.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/h7cxa0VLtZLAu8uXA71qNQ"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_89.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/TOypMcIYQu8C2BYtOL8TrQ"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_86.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/rxgo6U-w4Men8qDoVpjTmA"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_87.jpg" alt=""></a>
	<a href="https://www.mobileworldlive.com/featured-content/top-three/spectrum-move-tipped-to-speed-5g-in-arab-nations/"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_88.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/8ua6F4QmOBOc_Slpmp-Yrw"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_83.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=443955"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_84.jpg" alt=""></a>
	<a href="http://www.cnii.com.cn/telecom/2018-12/18/content_2126837.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_85.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=443655"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_81.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/116/a1074184.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_82.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/126/a1073131.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_78.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/17/a1072963.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_79.jpg" alt=""></a>
	<a href="http://www.cnii.com.cn/5G/2018-12/04/content_2123590.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_80.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=443078"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_74.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/117/a1072433.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_75.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/22/c19429.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_76.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/22/c19428.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_77.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=441951"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_72.jpg" alt=""></a>
	<a href="https://media.weibo.cn/article?id=2309404305587490928653&from=timeline&isappinstalled=0"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_73.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=441836"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_69.jpg" alt=""></a>
	<a href="https://www.mobileworldlive.com/featured-content/top-three/ee-bulks-up-5g-trials-as-uk-race-hots-up/"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_70.jpg" alt=""></a>
	<a href="https://www.mobileworldlive.com/featured-content/top-three/3uk-set-for-2b-5g-investment/"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_71.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/PHmR5Wg8fm2fHkZbKomaiA"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_66.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/XeL_8b-r6VLtaSDl7WHmEg"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_67.jpg" alt=""></a>
	<a href="https://www.fiercewireless.com/5g/trump-to-create-spectrum-strategy-for-5g"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_68.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/0nPfn3j8144OjadWn5Lelg"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_65.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/zPDxmwWmNj_1Lcj1kXZJtA"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_63.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/NUIihb9wDJOysRc8BcSe8A"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_64.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/RWBJ3ziGz9W1l_ApLSjNeg"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_60.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/3InD34Vvr_20utysIY6_Gg"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_61.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/e8ZKzjUGDYbnd8jBR49CQA"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_62.jpg" alt=""></a>

	<a href="http://www.cctime.com/html/2018-9-26/1409357.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_56.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=439308"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_57.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/dmxJHIUQY7MODkxmLS9Oew"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_58.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/L9V9emOcsh9Y0AGyf_KYNg"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_59.jpg" alt=""></a>、

	<a href="http://www.c114.com.cn/news/119/a1065742.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_53.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/f5NGJdg3tz-AEI7_UeeYPg"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_54.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/D0W7toPvd3LFGW91ElB5zA"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_55.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/zRbQh6jmt4MgB8XaSI18Hg"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_50.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/fh5NfLFevCau9FCNkLR4sw"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_51.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/uDH8TZ8dA1253LRO6RMdEA"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_52.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/-o9US_OxN3pFvxWmOyfa1w"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_46.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/pKao167w8KCDb-kwZLc22w"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_47.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/116/a1064153.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_48.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/41/a1064092.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_49.jpg" alt=""></a>

	<a href="http://www.cnii.com.cn/hygl/2018-08/27/content_2097314.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_43.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/4564/a1063593.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_44.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=437398"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_45.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=437049"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_40.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=437079"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_41.jpg" alt=""></a>
	<a href="http://www.cnii.com.cn/internation/2018-08/20/content_2094669.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_42.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/nWsoCTQ_flYGpaY3Zc-Eyw"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_37.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/MAVTV9qk4fDN_7QVaR9bsg"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_38.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=436860"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_39.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=436574"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_33.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/avjYt7OliE1s4Suadd9SiA"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_34.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/5bwdnZppqBZ3errrWv1jSA"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_35.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2018-8-9/1400279.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_36.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/116/a1060815.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_31.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=436426"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_32.jpg" alt=""></a>

	<a href="http://www.cctime.com/html/2018-7-25/1397450.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_30.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/bCd5Zncu0FViUE5BQRmA8g"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/w_31.jpg" alt=""></a>
	
	<a href="http://www.c114.com.cn/news/116/a1060295.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_28.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/22/c19144.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_29.jpg" alt=""></a>

	<a href="http://www.cnii.com.cn/5G/2018-07/17/content_2083475.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_27.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/22/c19103.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_24.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/116/a1058542.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_25.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/AQuCpKSNvzQC4MdlfqrPKg"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/e_26.jpg" alt=""></a>

</div>
<!-- 上市专题 -->
<div class="ban three">
	<img class="begin" src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/t4.png" alt="">
	
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1860947&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r52.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1922269&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r53.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1920607&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r51.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1918455&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r50.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1917140&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r49.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1916224&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r48.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1910637&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r47.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1909344&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r46.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1903577&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r45.jpg" alt=""></a>

	<a href="https://d.adroll.com/cm/b/out?advertisable=JD4EQE3FWZDYNKPGROOVJRhttps://d.adroll.com/cm/x/out?advertisable=JD4EQE3FWZDYNKPGROOVJRhttp://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1900354&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r44.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1792712&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r43.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1900834&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r42.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1900742&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r41.jpg" alt=""></a>
	
	

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1894015&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r40.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1888592&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r39.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1857209&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r38.png" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1878375&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r37.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1884510&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r36.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1857209&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r35.jpg" alt=""></a>
	
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1882995&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r34.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1881115&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r33.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1878375&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r32.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1795390&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r31.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1873694&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r30.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1870212&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r28.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1870212&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r29.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1868333&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r27.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1868156&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r26.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1857302&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r25.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1871881&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r24.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1812183&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r23.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1861959&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r22.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1860947&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r21.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1860024&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r20.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1857209&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r19.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1855705&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r18.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1855172&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r17.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1847494&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r16.jpg" alt=""></a>

	<a href="https://xpa-ssl.huawei.com/h/imss/imss_share.html?AppId=com.huawei.imss&id=1f64591c8abe4bfc956c153780b1a5fa&ititle=5G%20RAN2.0%20Main%20Slide%20%2F%205G%20RAN2.0%20%E4%B8%BB%E6%89%93%E8%83%B6%E7%89%87"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r13.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1846954&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r14.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1792712&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r15.jpg" alt=""></a>

	<a href="http://3ms.huawei.com/mm/docMaintain/mmMaintain.do?method=showMMDetail&f_id=1812099"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r12.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1795390&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r11.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1805166&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r10.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1796351&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r9.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1800427&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r8.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1790783&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r7.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1773005&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r6.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1797059&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r5.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1795390&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r4.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1795390&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r3.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1795390&topic_id=1003700"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/r2.jpg" alt=""></a>
	
	
</div>
<!-- 应用趋势 -->
<div class="ban four">
	<img class="begin" src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/t5.png" alt="">

	<a href="http://www.c114.com.cn/news/126/a1089503.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y121.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/17/a1089445.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y122.jpg" alt=""></a>

	<a href="http://www.cnii.com.cn/telecom/2019-05/23/content_2166725.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y119.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2019-5-30/1451641.htm"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y120.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/_Kbgv9N8qY5PQbAFGW_6EA"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y117.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=452241"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y118.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/103/a1088008.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y115.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/111/a1088027.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y116.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/22/c19807.html"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y113.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=451741"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y114.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/UTEFYAlILi7IQ8ko_Tm5Xw"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y111.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=451091"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y112.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=450650"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y109.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=450614"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y110.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=450334"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y107.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=450262"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y108.jpg" alt=""></a>

	<a href="http://m.c114.com.cn/w126-1083739.html?from=timeline"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y105.jpg" alt=""></a>
	<a href="http://m.c114.com.cn/w126-1083778.html?from=timeline"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y106.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/116/a1083310.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y102.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/22/c19708.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y103.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/22/c19707.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y104.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=449049"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y99.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/22/c19692.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y100.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/4app/3542/a1082710.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y101.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=448711"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y97.jpg" alt=""></a>
	<a href="http://www.cnii.com.cn/5G/2019-03/11/content_2148247.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y98.jpg" alt=""></a>

	<a href="http://m.c114.com.cn/w126-1080763.html?from=timeline&isappinstalled=0"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y93.jpg" alt=""></a>
	<a href="http://m.c114.com.cn/w126-1081192.html?from=timeline"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y94.jpg" alt=""></a>
	<a href="https://www.toutiao.com/i6665138549651669511/?tt_from=weixin&utm_campaign=client_share&wxshare_count=3&from=timeline&timestamp=1551851864&app=news_article&utm_source=weixin&isappinstalled=0&iid=65142283442&utm_medium=toutiao_android&group_id=6665138549651669511&pbid=6665166270563304974"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y95.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=447939&tdsourcetag=s_pcqq_aiomsg&from=timeline&isappinstalled=0"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y96.jpg" alt=""></a>

	<a href="http://www.cctime.com/html/2019-2-14/1433074.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y90.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=446597"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y91.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=446649"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y92.jpg" alt=""></a>

	<a href="http://www.cctime.com/html/2019-1-30/1432292.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y88.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=446402"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y89.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=446058"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y85.jpg" alt=""></a>
	<a href="https://www.mobileworldlive.com/featured-content/home-banner/huawei-teases-foldable-5g-device-for-mwc/"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y86.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=445948"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y87.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/116/a1077034.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y82.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/52/a1076989.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y83.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2019-1-11/1429522.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y84.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/118/a1076385.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y79.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=445400"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y80.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2019-1-10/1429090.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y81.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=445146"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y77.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=444869"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y78.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=444594"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y74.jpg" alt=""></a>
	<a href="https://mybroadband.co.za/news/smartphones/289360-the-5g-smartphones-to-look-out-for-in-2019.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y75.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/119/a1075572.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y76.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=444354"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y69.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/VonHAR3dqGa2iDGJ6wkZpw"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y70.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/WXU_9bBjbzsaveVvJIef2g"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y71.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/vBHdXqy0IXQfQxEK1UMF9g"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y72.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/17/a1074814.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y73.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/126/a1073564.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y66.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/118/a1073705.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y67.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/126/a1073761.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y68.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/22/c19456.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y64.jpg" alt=""></a>
	<a href="http://www.cnii.com.cn/industry/2018-12/04/content_2123617.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y65.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=442783"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y62.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=443157"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y63.jpg" alt=""></a>

	<a href="http://www.cctime.com/html/2018-11-15/1419172.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y61.jpg" alt=""></a>

	<a href="http://app.cctv.com/special/cbox/detail/index.html?guid=dce4fbd2452e4f1b8fcf0afca335cae6&mid=dce4fbd2452e4f1b8fcf0afca335cae6&from=timeline"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y56.jpg" alt=""></a>
	<a href="https://m.weibo.cn/status/4303308547932007?from=timeline"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y57.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/iIX-R6JmJmMI_oQUin4qww"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y58.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/126/a1070027.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y59.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/52/a1070037.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y60.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/LsVUpoRjAn5rYwGzJlA9IA"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y55.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/126/a1068493.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y54.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=440294"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y55.jpg" alt=""></a>
	<a href="http://www.cnii.com.cn/5G/2018-10/18/content_2111826.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y56.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/3I77RBqMo0V7hkfzhMfiLQ"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y51.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/118/a1067910.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y52.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/wYFplweApdQuf4NfLQsXuA"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y53.jpg" alt=""></a>

	<a href="http://www.cctime.com/html/2018-10-10/1411272.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y47.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2018-10-8/1410683.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y48.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2018-10-8/1410689.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y49.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=439522"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y50.jpg" alt=""></a>

	<a href="http://www.cctime.com/html/2018-9-27/1408649.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y45.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/N-Ce4YIOSJW5mJDhQTAgog"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y46.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/117/a1065170.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y43.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=438944"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y44.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=438589"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y41.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/126/a1064695.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y42.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/news/22/c19241.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y39.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/sHYsBrdkRa9DojeRqodElA"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y40.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=437402"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y36.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/SKvgh90pwqMsQMosbl6X5Q"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y37.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=437390"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y38.jpg" alt=""></a>

	<a href="http://www.cnii.com.cn/mobileinternet/2018-08/21/content_2095168.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y35.jpg" alt=""></a>

	<a href="https://mp.weixin.qq.com/s/KZA-emYpNXL4_l6QAQZAMQ"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y33.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/dFijrzfSiZJXfcPK9Bhrqg"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y34.jpg" alt=""></a>

	<a href="http://www.cctime.com/html/2018-7-27/1397879.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y31.jpg" alt=""></a>
	<a href="http://www.cctime.com/html/2018-7-26/1397602.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y32.jpg" alt=""></a>

	<a href="http://www.cww.net.cn/article?id=436419"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y29.jpg" alt=""></a>
	<a href="http://www.cnii.com.cn/5G/2018-07/26/content_2086399.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y30.jpg" alt=""></a>

	<a href="http://www.c114.com.cn/market/38/a1059855.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y27.jpg" alt=""></a>
	<a href="http://www.c114.com.cn/news/118/a1060283.html"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y28.jpg" alt=""></a>

	<a href="http://www.cnii.com.cn/5G/2018-07/16/content_2082917_2.htm"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y24.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=436032"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y25.jpg" alt=""></a>
	<a href="https://mp.weixin.qq.com/s/4uS24RoYM8ik8GxI4_n5lQ"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/y26.jpg" alt=""></a>

</div>
<!-- 高层发言 -->
<div class="ban five">
	<img class="begin" src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/t6.png" alt="">

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1913234&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/g13.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1913250&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/g14.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1900976&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/g11.jpg" alt=""></a>
	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1900119&topic_id=1003700"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/g12.jpg" alt=""></a>

	<a href="http://w3m.huawei.com/mcloud/mag/FreeProxyForText/kc_share/espaceShare/espaceShare.html?urlType=02&f_id=1877"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/g10.jpg" alt=""></a>

	<a href="https://xpa-ssl.huawei.com/h/imss/imss_share.html?AppId=com.huawei.imss&id=85f820c4e24147af83211e1299e1b476&ititle=%E3%80%90%E9%AB%98%E5%B1%82%E5%8F%91%E8%A8%80%E3%80%91%E7%94%98%E6%96%8C%E5%8C%97%E5%B1%95%E5%8F%91%E8%A8%80%EF%BC%9A5G%E5%B7%B2%E6%9D%A5%EF%BC%8C%E6%90%BA%E6%89%8B%E4%BA%A7%E4%B8%9A%E5%85%B1%E5%8A%A95G%E6%88%90%E5%8A%9F%E5%95%86%E7%94%A8_20180928"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/g8.jpg" alt=""></a>
	<a href="https://xpa-ssl.huawei.com/h/imss/imss_share.html?AppId=com.huawei.imss&id=8b587b8517924b0abd2917d428e3adc2&ititle=%E3%80%90%E9%AB%98%E5%B1%82%E5%8F%91%E8%A8%80%E3%80%91%E7%94%98%E6%96%8C%E5%8C%97%E5%B1%95%E6%9C%9F%E9%97%B4%E5%9C%A8Intel%E5%B3%B0%E4%BC%9A%E5%8F%91%E8%A8%80%EF%BC%9A%E5%90%88%E4%BD%9C%E5%85%B1%E8%B5%A2%EF%BC%8C%E5%85%B1%E7%AD%915G%E5%95%86%E4%B8%9A%E6%88%90%E5%8A%9F%20-%2020180925"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/g9.jpg" alt=""></a>

	<a href="http://xpa.huawei.com/g/imss.html?AppId=com.huawei.imss&id=5f0c2fa61bee4a50a679df5681a9b0e1&ititle=Eric%20Xu%EF%BC%9ABringing%20MBB%20to%20a%20New%20Level%20with%205G"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/g4.jpg" alt=""></a>
	<a href="http://xpa.huawei.com/g/imss.html?AppId=com.huawei.imss&id=a822feb6ca114c93a25da7afa18acef4&ititle=Yang%20Chaobin%3A%205G%20is%20Now%2C%20Sailing%20to%20New%20eMBB%20Horiz..."><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/g5.jpg" alt=""></a>
	<a href="http://xpa.huawei.com/g/imss.html?AppId=com.huawei.imss&id=15f55fb46a2b4e94ba9d8e89b3bb8d10&ititle=%5BKevin%2C%20Keynote%20on%20MWCS%20Summit%5D%20Vitalizing%20Mobile%20..."><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/g7.jpg" alt=""></a>
	<a href="http://www.cww.net.cn/article?id=434606&from=timeline&isappinstalled=0"><img src="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/g6.jpg" alt=""></a>

	<a href="https://xpa-ssl.huawei.com/h/imss/imss_share.html?AppId=com.huawei.imss&id=65b0e41541ba46a9b87ccc4d91701f03&ititle=%E3%80%902018HAS%E5%85%A8%E7%90%83%E5%88%86%E6%9E%90%E5%B8%88%E5%A4%A7%E4%BC%9A-5G%20Session%E6%9D%A8%E8%B6%85%E6%96%8C%E6%80%BB%E6%BC%94%E8%AE%B2%E3%80%915G%20is%20Now%2C%20from%20e..."><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/g1.jpg" alt=""></a>
	<a href="https://xpa-ssl.huawei.com/h/imss/imss_share.html?AppId=com.huawei.imss&id=09920a1f724a48f798d40941e08e9bed&ititle=%E3%80%9020180424%2C%20Peter%20VDF%20Wireless%20Executive%20Meeting%E3%80%915G..."><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/g2.jpg" alt=""></a>
	<a href="https://xpa-ssl.huawei.com/h/imss/imss_share.html?AppId=com.huawei.imss&id=e9ecc73bf8d94b58a0eb5e27b3167b71&ititle=%E3%80%90%E6%9D%AD%E5%B7%9E516%205G%E4%B9%8B%E5%9F%8E-%E5%8D%8E%E4%B8%BA%E6%9D%A8%E8%B6%85%E6%96%8C%E5%8F%91%E8%A8%80%E3%80%91%E5%BC%80%E6%94%BE%E5%90%88%E4%BD%9C%EF%BC%8C%E4%BB%A5%E8%A1%8C%E8%B7%B5%E8%A8%80%EF%BC%8C%E5%85%B1%E7%AD%915G%E5%95%86%E7%94%A8%E4%B9%8B%E8%B7%AF"><img data-original="https://ym-1251519258.cos.ap-shanghai.myqcloud.com/huawei/imgs/g3.jpg" alt=""></a>
	
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
		 	 title: '20190606| 5G is On-Bring MBB to a New Horizon',
		      desc: '中国5G商用牌照发放； 华为全力支持中国运营商建好中国5G; 华为助力英国EE 5G商用发布；5G建网一本通',
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
