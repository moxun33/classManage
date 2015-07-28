<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		if(session('?uname')){
			$userSession = session('uname');
			$this->assign('myUser',$userSession);
            $gid = session('gid');
            $this->assign('gid',$gid);
            $article = M('Article');
            $list = $article->select();
            $this->assign('list',$list);
           // $editor = $article->find('editor_name');
          //  $editor_name = $editor;
          //  $class = M('User');
          //  $user_class=$class->where('user_name = '.$editor_name)->find('user_class');
         //   $this->assign('list',$user_class);
            $classList = M('Class');
            $classResult = $classList->order('hot_number desc')->select();
            $this->assign('classList',$classResult);
            /*$admin = M('eaRole');
            $data=$admin->select();
            $this->assign('admin',$data);*/

            $this->display('Index:index');
		}else{
            $article = M('Article');
            $list = $article->select();
            $this->assign('list',$list);

            $classList = M('Class');
            $classResult = $classList->order('hot_number desc')->select();
            $this->assign('classList',$classResult);

            $this->display('Index:index');
		}
		
        
    }
	// 生成验证码图片
	Public function verify(){
    $Verify = new \Think\Verify();
	$Verify->fontSize = 20;
	$Verify->length   = 4;
	$Verify->useNoise = false;
	$Verify->useNoise = false;
	$Verify->imageW = 0;
	$Verify->imageH =  0;
	$Verify->entry();
	}
	//登录验证
	public function checkLogin(){
		header('Content-Type:text/html; charset=utf-8');
	// 检查验证码  
	 /* $verify = I('param.verify','');  
		 if(!check_verify($verify)){  
		$this->error("验证码错误！",$this->site_url,3);  
		}    */ 
		$user =M('User');
		$name = I('post.user');
        $pwd = I('post.pwd');
		$auto=I('post.auto');
        $condition['user_name'] = $name;
        $condition['user_passwd'] = $pwd;
		$user_info= $user->where($condition)->find();
		if($user_info&&$user_info['user_passwd']===$pwd){
            $gid = $user_info['gid'];
            session('gid',$gid);
            $uid=$user_info['id'];
		    $uname=$user_info['user_name'];
            $role_group=$user_info['user_role'];
            
            $data['log_time'] = date('Y-m-d H:i:s',time());
            $map['id']=$uid;
            $data['log_ip']=$_SERVER["REMOTE_ADDR"];
            $user->where($map)->save($data); //更新登录ip、时间等信息
            //查询是否完善个人信息
			$map['user_name']=$uname;
            $class=M('Class');
            $class_exist=$class->where($map)->getField('class_name');
			if($class_exist!=null){
				$classID=$class->where($map)->getField('id');
				
				 $map['id']=$classID;
				$class_hot=$class->where($map)->getField('hot_number');
			
				$data['hot_number']=$class_hot+1;
			
				$class->where($map)->save($data); 
				
			} 
			
            session('uid',$uid);
            session('uname',$uname);
            session('urole',$role_group);
            
		     if($auto=='on'){
                cookie('uid',$uid,30*24*3600);
                cookie('uname',$uname,30*24*3600);
            }
        header('Content-type:text/html;Charset=UTF-8');
        $this->success('登录成功,返回首页！','index.php',2);
		}else{
        header('Content-type:text/html;Charset=UTF-8');
        $this->error('用户名或者密码错误!',$this->site_url,2);
		}
        
    }
		
		
	//注册验证
	public function checkRegister(){
		header('Content-Type:text/html; charset=utf-8');
	// 检查验证码  
 	 // $verify = I('param.verify','');
		//if(!check_verify($verify)){
		//$this->error("验证码错误！",$this->site_url,2);
		//}
		$group=M('group');
        $user = D('User');
		$vote = M('vote');
         $data['user_name'] = I('post.user');       
        $data['user_passwd'] = I('post.pwd');
		$data['user_role'] = I('post.role');
		$data['avatar']="./Uploads/avatar/avatar.png";
        $data['status']=1;            
        $data['reg_ip']=$_SERVER["REMOTE_ADDR"];
        $data['reg_time'] = date('Y-m-d H:i:s',time());
        $map['group_name']=I('post.role');       
       $groupID=$group->where($map)->find();
	  
		 $data['gid']=$groupID['id'];
		$map['id']=$groupID['id'];
		$vote->add($data);
		
		$list = $user->add($data);
				if ($list !== false) {
                    //向用户组更新总人数
                    
                    $groupNum=$group->where($map)->find();
                    $numbers['numbers']=$groupNum['numbers']+1;
                    $group->where($map)->save($numbers);
                	$this->success('注册成功,即将登录',__ROOT__.'/index.php?s=/Home/Index/login',2);
				} else {
					 $this->error($user->getError());
				} 
				

		//$user->add($data);
	}
	//退出登录
	public function logout(){
    session('uid',null);
    session('uname',null);
    cookie('uid',null);
    cookie('uname',null);
    $this->success('注销成功！','index.php',2);
	}




	public function userInfo(){

        if(session('?uname')){
            $userSession = session('uname');
            $this->assign('myUser',$userSession);
            $this->display('Activity:voteResult');

        }else{
            $this->error("未登录！! !");
            //$this->display('Index:login');
        }


	}
	
}
