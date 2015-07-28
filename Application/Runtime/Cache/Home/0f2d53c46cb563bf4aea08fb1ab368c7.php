<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>投票系统--发起投票</title>

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

</header>	

    <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
         <form method="post" class="am-form"  enctype="multipart/form-data"
              action="/classManage/?s=/Home/Activity/publishVote">
            <label>投票标题:</label>
            <input type="text" name="publishTitle" id="" value="" placeholder="输入标题，不超过20个字">
            <br>
            <div class="am-form-group">
                <label >类别：</label>
                <select id="doc-select-1" name="type">
                    <option value="">请选择投票类别</option>
                    <option value="班级竞选">班级竞选</option>
                    <option value="班级出游">班级出游</option>
                    <option value="班级事务">班级事务</option>
                    <option value="班级统计">班级统计</option>
                </select>
                <span class="am-form-caret"></span>
            </div>
            <br>
	
            <div class="am-g">
			<section class="am-panel am-panel-default">
  <header class="am-panel-hd">
    <h3 class="am-panel-title">投票选项(请先确定选项个数再输入内容)：</h3>
  </header>
  <div class="am-panel-bd">
   

<div class="am-input-group" id="d">
 
  
</div>
<input type="button" class="am-btn am-btn-primary" id="b" style="margin-top:10px;"  value="增加"/>
										
  </div>
</section>
						
                <!-- <label>投票选项:</label>
                <input type="text" name="voteItem" id="" value="" placeholder="用英文逗号分隔，如：广州，深圳，北京">
                <br> -->
            </div>
                <section class="am-panel am-panel-default">
  <header class="am-panel-hd">
    <h3 class="am-panel-title">投票有效期：</h3>
  </header>
  <div class="am-panel-bd">
    <div class="am-g">
  <div class="am-u-sm-6">
    开始日期：<br/>
    <p><input type="text" name="start_date" class="am-form-field"  placeholder="设置开始日期" data-am-datepicker="{format: 'yyyy-mm--dd'}"  id="my-start-2"/></p>
  </div>
  <div class="am-u-sm-6">
    结束日期：<br/>
    <p><input type="text" name="end_date" class="am-form-field" placeholder="设置结束日期" id="my-end-2" data-am-datepicker="{format: 'yyyy-mm--dd'}" /></p>
  </div>
</div>
  </div>
</section>
   
<script>
    $(function() {
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
        var $myStart2 = $('#my-start-2');

        var checkin = $myStart2.datepicker({
            onRender: function(date) {
                return date.valueOf() < now.valueOf() ? 'am-disabled' : '';
            }
        }).on('changeDate.datepicker.amui', function(ev) {
            if (ev.date.valueOf() > checkout.date.valueOf()) {
                var newDate = new Date(ev.date)
                newDate.setDate(newDate.getDate() + 1);
                checkout.setValue(newDate);
            }
            checkin.close();
            $('#my-end-2')[0].focus();
        }).data('amui.datepicker');

        var checkout = $('#my-end-2').datepicker({
            onRender: function(date) {
                return date.valueOf() <= checkin.date.valueOf() ? 'am-disabled' : '';
            }
        }).on('changeDate.datepicker.amui', function(ev) {
            checkout.close();
        }).data('amui.datepicker');

    })
</script>



 
 
 
 

                	<section class="am-panel am-panel-default">
  <header class="am-panel-hd">
    <h3 class="am-panel-title">具体描述:</h3>
  </header>
  <div class="am-panel-bd">
    <textarea class="" rows="7" name="content" id="doc-ta-1"></textarea>
  </div>
</section>

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
<script language="javascript">
var i = 1;
document.getElementById("b").onclick=function(){
  document.getElementById("d").innerHTML+='<div   id="div_'+i+'"><input style="margin-top:10px;" name="option[]" type="text"  placeholder="请输入选项" /><div   id="div_'+i+'"><input name="order" style="width:50px;float:right;margin-top:-42px;"  type="button" class="am-btn am-btn-danger "  id="my-popover" value="'+i+'" /></div><input type="button" class="am-btn am-btn-danger am-btn-xs" value="删除"  onclick="del('+i+')"/></div>';
  i = i + 1;
}
function del(o){
 document.getElementById("d").removeChild(document.getElementById("div_"+o));
}
$(function() {
  $('#my-popover').popover({
    content: 'Popover via JavaScript'
  })
});
</script>
</body>
</html>