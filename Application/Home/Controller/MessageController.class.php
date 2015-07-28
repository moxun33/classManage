<?php
namespace Home\Controller;
use Think\Controller;
class MessageController extends Controller {
    public function index(){
       
	   	if(session('?uname')){
			$userSession = session('uname');
            $this->assign('myUser',$userSession);
			$gid = session('gid');
            $this->assign('gid',$gid);
            $message_info =M('Message');
            $messageList = $message_info->where('status=1')->order('id')->select();
            $this->assign('message',$messageList);
            $this->display('Message:index');
		}else{
			//$this->error("未登录！! !");
            $this->display('Message:index');
		}
    }
	

    public  function message(){
        if(session('?uname')){
            $userSession = session('uname');
            $this->assign('myUser',$userSession);
            $message_info =M('Message');
            $message['message_content'] =I('post.content');
            $message['user_name'] =session('uname');
            $message['status']=1;

            if ($message_info->add($message)) {
                $this->success('留言成功',__ROOT__.'/?s=/Home/Message/index',2);
            } else {
                $this->error($message_info->getError());
            }
            $this->display('Message:index');
        }else{
            $this->error("未登录！! !");
            $this->display('Message:index');
        }



    }
		
	

		
		
	
}
