<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>用户注册</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="alternate icon" type="image/png" href="Public/amaze-css/assets/i/favicon.png">
  <link rel="stylesheet" href="Public/amaze-css/assets/css/amazeui.min.css"/>
  <style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
	<!-- body{background-image:url(Public/amaze-css/assets/image/login-back.jpg)} -->
	body{background-color:#e7e7e7;}
  </style>
</head>
<body>
<div class="header">
  <div class="am-g">
   <br>
   	<a href="/classManage/index.php"><img src="./Public/image/login.png" width="133" height="133" border="0" alt=""></a> 
  </div>

</div>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
       <form method="post" class="am-form" action="/classManage/index.php?s=/Home/Index/checkRegister">
      <label>*用户名:</label>
      <input type="text" name="user" id="" value=""  placeholder="由字母组成，长度在3-10位内">
	  <br>
           <label>*密码:</label>
           <input type="password" name="pwd" id="password" value="" placeholder="输入密码，长度在6-20位">
           <br>


           <label>*确认密码:</label>
           <input type="password" name="repwd" id="repwd" value="" placeholder="再次输入密码">
           <br>

           <div class="am-form-group" >
               <label >*身份：</label>
               <select id="doc-select-1" name="role" >
                   <option value="">请选择身份</option>
                   <option value="辅导员">辅导员</option>
                   <option value="班主任">班主任</option>
                   <option value="班干部">班干部</option>
                   <option value="普通学生">普通学生</option>

               </select>
               <span class="am-form-caret"></span>
           </div>


  	  
	  <p class="top15 captcha" id="captcha-container">
			<label for="verify">*验证码:</label>
            <input name="verify" size=500 class="" placeholder="输入验证码" type="text"> <br>
			<img onClick="this.src=this.src+'?'+Math.random()" width="20%" class="am-fr" height="80" alt="验证码" src="<?php echo U('Home/Index/verify',array());?>" title="点击刷新">
		
	</p>
      <div class="am-cf">
        <input type="submit" name="" value="注册" class="am-btn am-btn-primary am-btn-sm am-fl">
        <br>  <br> <input type="reset" name="" value="重置" class="am-btn am-btn-primary am-btn-sm ">
		<a class="am-btn am-btn-default am-btn-sm am-fr" href="/classManage/index.php?s=/Home/Index/login">已注册？点此登录</a>
      </div>
	  
    </form>
   <script language="JavaScript">
var captcha_img = $('#captcha-container').find('img')
var verifyimg = captcha_img.attr("src");
captcha_img.attr('title', '点击刷新');
captcha_img.click(function(){
	if( verifyimg.indexOf('?')>0){
        $(this).attr("src", verifyimg+'&random='+Math.random());
    }else{
        $(this).attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
    }
});


</script>
    <p>© 2015</p>
  </div>
</div>
</body>
</html>