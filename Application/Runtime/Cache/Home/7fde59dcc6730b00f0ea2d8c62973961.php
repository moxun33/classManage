<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>查看信息</title>

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
     



     <?php if(empty($myUser)): ?><a href="/classManage?s=/Home/Index/register"><button class="am-btn am-btn-default am-topbar-btn am-btn-sm">注册</button></a>
       
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


<div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
    <div data-am-widget="tabs" class="am-tabs am-tabs-d2">
        <ul class="am-tabs-nav am-cf">
            <li class="am-active">
                <a href="[data-tab-panel-0]">个人信息</a>
            </li>
            <li class="">
                <a href="[data-tab-panel-1]">本班学生</a>
            </li>

        </ul>
        <div class="am-tabs-bd">
            <div data-tab-panel-0 class="am-tab-panel am-active"><table class="am-table">
                <thead>

                </thead>
                <tbody>
                 <?php if(is_array($myInfo)): $i = 0; $__LIST__ = $myInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				<tr>
                     <td>头像</td>
                       <td><img src=<?php echo ($vo["avatar"]); ?>></td>
                </tr>
                     <td>用户名</td>
                       <td><?php echo ($vo["user_name"]); ?></td>
                </tr>
				
				<tr>
                    <td>姓名</td>                  
					<td><?php echo ($vo["real_name"]); ?></td>
                </tr>
				<tr>
                    <td>性别</td>                  
					<td><?php echo ($vo["gender"]); ?></td>
                </tr>
               
				<tr>
                    <td>年级</td>
                    <td><?php echo ($vo["user_grade"]); ?></td>
                </tr>
                <tr>
                    <td>班别</td>
                    <td><?php echo ($vo["user_class"]); ?></td>
                </tr>
				<tr>
                    <td>学号（工号）</td>
                    <td><?php echo ($vo["student_id"]); ?></td>
                </tr>
                <tr>
                    <td>角色</td>
                    <td><?php echo ($vo["user_role"]); ?></td>
                </tr> 
				<tr>
                    <td>注册时间</td>
                    <td><?php echo ($vo["reg_time"]); ?></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>


</div>
            <div data-tab-panel-0 class="am-tab-panel ">
<section class="am-panel am-panel-default">
   <!-- <header class="am-panel-hd">
        <h3 class="am-panel-title"><?php if(is_array($class_members)): $i = 0; $__LIST__ = $class_members;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cls): $mod = ($i % 2 );++$i; echo ($cls["class_grade"]); ?>级<?php echo ($cls["class_name"]); ?>&nbsp&nbsp&nbsp人数：<?php echo ($cls["class_members"]); endforeach; endif; else: echo "" ;endif; ?></h3>
    </header>-->
    <header class="am-panel-hd">
      
		 <h3 class="am-panel-title">  2011级&nbsp&nbsp&nbsp信息安全1班&nbsp&nbsp&nbsp人数：50人&nbsp&nbsp&nbsp已注册：3人</h3>
    </header>
    <div class="am-panel-bd">
        <table class="am-table">
            <thead>
            <tr>
                
                <th>姓名</th>
                <th>学号</th>
                <th>角色</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($studentList)): $i = 0; $__LIST__ = $studentList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$all): $mod = ($i % 2 );++$i;?><tr>
                <td><?php echo ($all["real_name"]); ?></td>
                <td><?php echo ($all["student_id"]); ?></td>
                <td><?php echo ($all["user_role"]); ?></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>


          
            </tbody>
        </table>
    </div>
</section>

</div>

        </div>
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