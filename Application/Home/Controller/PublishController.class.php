<?php
namespace Home\Controller;
use Think\Controller;
class PublishController extends Controller {
    public function index(){
       
	   	if(session('?uname')){
			$userSession = session('uname');
            $this->assign('myUser',$userSession);
			$gid = session('gid');
            $this->assign('gid',$gid);
			$this->display('Publish:index');
		}else{
			$this->error("未登录！! !");
			//$this->display('Index:login');
		}
    }
	
	public function publish(){
			//$setting=C('UPLOAD_SITEIMG_QINIU');
			$upload = new \Think\Upload();// 实例化上传类
			 $upload->maxSize   =     2005728 ;// 设置附件上传大小
			$upload->exts      =     array('jpg',  'png', 'jpeg');// 设置附件上传类型
			$upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
			$upload->savePath  =     ''; // 设置附件上传（子）目录
			// 上传文件 
			$info   =   $upload->upload();
			if(!$info) {// 上传错误提示错误信息
				 $this->error($upload->getError());
			}
			$article = M('Article');
			$data['article_title'] = I('post.publishTitle');
			$data['publish_time'] = date("YmdHis");
			$data['article_content'] = I('post.content');

			$data['img_url'] ='./Uploads/'.$info['photo']['savepath'].$info['photo']['savename'];
			//$data['img_url'] =$info['photo']['url'];
            $data['status'] = 1;
            $data['editor_name'] = session('uname');
			$data['cate_name'] = I('post.Cate');
			$data['cname'] = I('post.cate');


        if ($article->add($data)) {
            $this->success('发布成功',__ROOT__.'/index.php',2);
        } else {
            $this->error($user->getError());
        }
			
	}
    public  function activity(){
        if(session('?uname')){
            $userSession = session('uname');
            $this->assign('myUser',$userSession);
            $this->display('Publish:index');
        }else{
            $this->error("未登录！! !");
            //$this->display('Index:login');
        }


    }

    public function ueditor(){
        $data = new \Org\Util\Ueditor();
        echo $data->output();
    }

		
		
	
}
