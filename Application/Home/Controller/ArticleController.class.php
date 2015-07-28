<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function index($id){
		if(session('?uname')){
			$userSession = session('uname');
			$this->assign('myUser',$userSession);
			$gid = session('gid');
            $this->assign('gid',$gid);
            header('Content-Type:text/html; charset=utf-8');
            //文章详情
            $article = M('Article');
            $detail = $article->where('id='.$id)->select();
            $condition['user_class']=$detail['editor_name'];
            $user=M('User');
            $user_info=$user->where($condition)->find();
            $condition['class_name']=$user_info['user_class'];
            $class=M('Class');
            $class_info=$class->where($condition)->select();
            $class_hot['hot_number']=$class_info['hot_number'];
            $class_hot['hot_number']+=1;
            $class->save($class_hot);
            $this->assign('detail',$detail);
            $this->display('Article:Index');

        }else{
            header('Content-Type:text/html; charset=utf-8');
            //文章详情
            $article = M('Article');
            $detail = $article->where('id='.$id)->select();

            $this->assign('detail',$detail);
            $this->display('Article:Index');

        }


		
        
    }


}
