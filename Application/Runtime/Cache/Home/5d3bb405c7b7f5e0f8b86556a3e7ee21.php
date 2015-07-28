<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>发布文章</title>

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
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
	<fieldset>
    <legend >发布文章</legend>
  </fieldset>
       <form method="post" class="am-form"  enctype="multipart/form-data"  
	   action="/classManage/?s=/Home/Publish/publish">
           <label>标题:</label>
           <input type="text" name="publishTitle" id="" value="" placeholder="输入标题，不超过20个字">
           <br>
           <div class="am-form-group">
               <label >类别：</label>
               <select id="doc-select-1" name="cate">
                   <option value="">请选择文章类别</option>
                   <option value="班级通知">班级通知</option>
                   <option value="班级新闻">班级新闻</option>
                   <option value="班级活动">班级活动</option>
                   <option value="班级建设">班级建设</option>
               </select>
               <span class="am-form-caret"></span>
           </div>



           <!-- No Baidu Siteapp<label >图片上传（请上传jpg,png,jpeg格式文件，上传限制200K以下）:</label> 
 <div class="am-panel am-panel-default">
    <div class="am-panel-bd">


     <input type='file'  name='photo' onchange='PreviewImage(this)'>
 <script>
 function PreviewImage(imgFile)
 {
    var filextension=imgFile.value.substring(imgFile.value.lastIndexOf("."),imgFile.value.length);
    filextension=filextension.toLowerCase();
    if ((filextension!='.jpg')&&(filextension!='.gif')&&(filextension!='.jpeg')&&(filextension!='.png')&&(filextension!='.bmp'))
    {	
		alert(" 图片格式不正确!");
        imgFile.focus();
    }
    else
    {
        var path;
        if(document.all)//IE
        {
            imgFile.select();
            path = document.selection.createRange().text;
            document.getElementById("imgPreview").innerHTML="";
            document.getElementById("imgPreview").style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled='true',sizingMethod='scale',src=\"" + path + "\")";//使用滤镜效果      
        }
        else//FF
        {
            path=window.URL.createObjectURL(imgFile.files[0]);// FF 7.0以上
            //path = imgFile.files[0].getAsDataURL();// FF 3.0
            document.getElementById("imgPreview").innerHTML = "<img id='img1' width='120px' height='100px' src='"+path+"'/>";
            //document.getElementById("img1").src = path;
        }
    }
 }
 </script>

	</div>
	 <div id="imgPreview" class="am-panel-bd">
    <img id="img1" src="" width="120" height="100" />
	  <br>   <br> 
 </div>
</div>

 -->
			  <script id="container" name="content" style="width:100%" type="text/plain">
        
    </script>
 

<script type="text/javascript" src="/classManage/Public/js/jquery-2.0.2.js"></script>
<script type="text/javascript" src="/classManage/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/classManage/Public/ueditor/ueditor.all.min.js"></script>
<script>
    $(function(){
        var ue = UE.getEditor('container',{
            serverUrl :'<?php echo U('Home/Publish/ueditor');?>'
    });
    })
</script>
 

    <button type="submit" class="am-btn am-fr am-btn-primary">提交</button>
	<button type="reset" class="am-btn am-btn-default ">重置</button></p>
	
    </form>

 
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