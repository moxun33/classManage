<?php
namespace Home\Controller;
use Think\Controller;
class ActivityController extends Controller {
    public function index(){
       
	   	if(session('?uname')){
			$userSession = session('uname');
            $this->assign('myUser',$userSession);
			$gid = session('gid');
            $this->assign('gid',$gid);
			$this->display('Activity:index');
		}else{
			$this->error("未登录！! !");
			//$this->display('Index:login');
		}
    }
    //投票结果
    public function voteResult(){

        if(session('?uname')){
            $userSession = session('uname');
            $this->assign('myUser',$userSession);
			$gid = session('gid');
            $this->assign('gid',$gid);
            $this->display('Activity:voteResult');

        }else{
            $this->error("未登录！! !");
            //$this->display('Index:login');
        }
    }
    //投票表单处理
    public  function voteCount(){
        //确定是否本班学生

        //每人只能投票一次
        $votecount=M('vote_counts');


        $condition['user_name']=session('uname');
        $vote_status =$votecount->where($condition)->select();

           /* if((int)$vote_status['status']=1) {*/
                $a=1;
                $data['total_numbers'] = (int)$vote_status['total_numbers']+$a;
                $data['status'] = 1;
                $votecount->where($condition)->save($data);
                $this->success('投票成功！');
                $this->display('Activity:index');
            /*}else{
                $this->error("你已投过了 !");
                $this->display('Activity:index');
            }*/


    }
	//发起投票页面渲染
    public  function  viewVote(){
        if(session('?uname')){
            $userSession = session('uname');
            $this->assign('myUser',$userSession);
            $this->display('Activity:vote');
        }else{
            $this->error("未登录！! !");
            //$this->display('Index:login');
        }


    }
    //处理投票发起表单
    public  function publishVote(){
        if(session('?uname')){
            
            $user = M('User');
            $condition['uid'] = session('uid');
            $user_info = $user->where($condition)->find();
			$data['class_name'] = $user_info['user_class'];
            $vote = M('Vote');
			$voteLog =M('Vote_log');
			$option=M('Vote_option');
			//动态传入投票选项
			$data['uid']=session('uid');
			$arr=I('post.option');			
			$length=count($arr);
	         for($i=0;$i<$length;$i++){
				 $data['opt_name']=$user->arr[$i];
				 $addOpt=$option->add[$data];
				 
			 }
            $data['start_time']=I('post.start_date');
			$data['end_time']=I('post.end_date');
            $data['description'] =I('post.content');
            $data['title'] =I('post.title');
            $data['vote_type'] =I('post.type');
			$voteTo=$vote->add($vote);
			
            
            
            
            
            if($voteOpt ){

                $this->success('提交成功,点击返回！',__ROOT__.'/?s=Home/Activity/voteResult',2);
            }else{
                header('Content-type:text/html;Charset=UTF-8');
                $this->error('非法操作!',$this->site_url,2);
            }

        }

        else{
            $this->error("未登录！! !");
            $this->display('Index:login');
        }


    }


		
	

		
		
	
}
