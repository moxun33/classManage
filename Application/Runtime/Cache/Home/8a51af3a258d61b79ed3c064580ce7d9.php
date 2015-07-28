<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>文章详情</title>

  <!-- Set render engine for 360 browser -->
  <meta name="renderer" content="webkit">

  <!-- No Baidu Siteapp-->
  <meta http-equiv="Cache-Control" content="no-siteapp"/>

  <link rel="alternate icon" type="image/png" href="Public/amaze-css/assets/i/favicon.png">

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="Public/amaze-css/assets/i/app-icon72x72@2x.png">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
  <link rel="apple-touch-icon-precomposed" href="Public/amaze-css/assets/i/app-icon72x72@2x.png">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="Public/amaze-css/assets/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileColor" content="#0e90d2">

  <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
  <!--
  <link rel="canonical" href="http://www.example.com/">
  -->

  <link rel="stylesheet" href="Public/amaze-css/assets/css/amazeui.min.css">
  <link rel="stylesheet" href="Public/amaze-css/assets/css/app.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a
  href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->
<section class="am-panel am-panel-default">
   <header data-am-widget="header" class="am-header am-header-default am-header-fixed" style="background-color:#EDEDED;box-shadow: 1px 3px 5px #E8E8E8;">

      <div class="am-header-left"  >
      <a  href="/classManage/index.php"><img src="/classManage/Public/image/logo.png"></a>

</div>


  <div class="am-header-right am-header-nav >
     



     <?php if(empty($myUser)): ?><!--      <a href=""></a>-->

<a href="/classManage?s=/Home/Index/register"><button class="am-btn am-btn-default am-topbar-btn am-btn-sm">注册
		</button></a>
    <a href="/classManage?s=/Home/Index/login"><button class="am-btn am-btn-default am-topbar-btn am-btn-sm">登录
    </button></a>

         <?php else: ?>
            <a href='/classManage?s=/Home/User/index' ><font size="" color="3366ff"><font size="" color="3399ff">欢迎， <?php echo ($myUser); ?></font></font></a>
            <a href="/classManage?s=/Home/Index/logout"><button class="am-btn am-btn-default am-topbar-btn am-btn-sm">注销</button></a>
         <!--留言区-->
       
             <a href="/classManage/?s=/Home/Message/index"><button class="am-btn am-btn-default am-topbar-btn am-btn-sm">留言板</button> </a>

       


         
         <?php if($gid < 7 ): ?><!--班干部,班主任，辅导员-->
             <?php if($gid == 1): ?><!--管理员-->
                
                     <a href="/classManage/admin/admin.php"><button class="am-btn am-btn-default am-topbar-btn am-btn-sm">后台管理</button> </a><?php endif; ?>

             <div class="am-dropdown" data-am-dropdown>
                 <button class="am-btn am-btn-default am-dropdown-toggle" data-am-dropdown-toggle>班级事务 <span class="am-icon-caret-down"></span></button>
                 <ul class="am-dropdown-content">
                     <li><a href="/classManage/?s=/Home/Class/index"><button class="am-btn am-btn-default am-topbar-btn am-btn-sm">查看本班</button> </a>
                     </li>

                     <li><a href="/classManage/?s=/Home/Activity/viewVote"><button class="am-btn am-btn-default am-topbar-btn am-btn-sm">发起投票</button> </a>
                     </li>

                     <li><a href="/classManage/?s=/Home/Activity/voteResult"><button class="am-btn am-btn-default am-topbar-btn am-btn-sm">查看投票</button> </a>
                     </li>



                 </ul>
             </div>
             
                 <a href="/classManage/?s=/Home/Publish/index"><button class="am-btn am-btn-default am-topbar-btn am-btn-sm">发布文章</button> </a><?php endif; ?>
		 <?php if($gid == 7): ?><!--普通学生-->
		 <div class="am-dropdown" data-am-dropdown>
                 <button class="am-btn am-btn-default am-dropdown-toggle" data-am-dropdown-toggle>班级事务 <span class="am-icon-caret-down"></span></button>
                 <ul class="am-dropdown-content">
                     <li><a href="/classManage/?s=/Home/Class/index"><button class="am-btn am-btn-default am-topbar-btn am-btn-sm">查看本班</button> </a>
                     </li>

                     

                     <li><a href="/classManage/?s=/Home/Activity/voteResult"><button class="am-btn am-btn-default am-topbar-btn am-btn-sm">查看投票</button> </a>
                     </li>



                 </ul>
             </div><?php endif; endif; ?>

	
  </div>

</header>	<br><br>
   
</section>
<style>.am-g {
    margin: 0 auto;
    width: 100%;
}

.am-g-fixed {
    max-width: 950px;
}
</style>
<div data-am-widget="list_news" class="am-g am-g-fixed"><br/>
    <?php if(is_array($detail)): $i = 0; $__LIST__ = $detail;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><article class="am-article">
            <div class="am-article-hd">
                <h1 class="am-article-title"><?php echo ($data["article_title"]); ?></h1>
                <p class="am-article-meta">发布者：<?php echo ($data["editor_name"]); ?></p>
            </div>

            <div class="am-article-bd">
                <p class="am-article-lead"><?php echo ($data["article_content"]); ?>></p><br/>
                <img src=<?php echo ($data["img_url"]); ?>>
            </div>
        </article><?php endforeach; endif; else: echo "" ;endif; ?>
</div>


<footer data-am-widget="footer" class="am-footer am-footer-default" data-am-footer="{  }">
 
  <div class="am-footer-miscs ">

    <p>CopyRight©2015</p>
  
  </div>
   </footer>
</div>
<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="Public/amaze-css/assets/js/polyfill/rem.min.js"></script>
<script src="Public/amaze-css/assets/js/polyfill/respond.min.js"></script>
<script src="Public/amaze-css/assets/js/amazeui.legacy.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="Public/amaze-css/assets/js/jquery.min.js"></script>
<script src="Public/amaze-css/assets/js/amazeui.min.js"></script>
<!--<![endif]-->
</body>
</html>