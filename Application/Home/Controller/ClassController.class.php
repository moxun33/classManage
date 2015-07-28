<?php
namespace Home\Controller;
use Think\Controller;
class ClassController extends Controller {


	public function index(){
        if(session('?uname')){
            $userSession = session('uname');
            $this->assign('myUser',$userSession);
			$gid = session('gid');
            $this->assign('gid',$gid);
            $condition['group_name']=session('urole');
			$condition['group_name']=session('urole');
            $group=M('group');
            $gid=$group->where($condition)->select();
            if($gid['id']=4 || $gid['id']=7||$gid['id']=2||$gid['id']=3){
                $condition['id']=session('uid');
            
                $user=M('User');
                $user_class = $user->where($condition)->getField('real_name');				
                if($user_class==""){					
                   
				   //资料为空时，学生填写真实资料
							$this->error('请先完善个人信息！',__ROOT__ . '?s=Home/Class/Edit', 2);
									
              }else{
							
							$this->show();
               }
            }else{
                //管理员，做其他操作
                $this->display('Class:index');
            }
        }else{
            $this->error("未登录！! !");
            $this->display('Index:login');
        }
	}

		
	public function Edit(){
		$userSession = session('uname');
				$this->assign('myUser',$userSession);
		$this->display('Class:editInfo');
		
	}
	public function show(){
		
		//进入查看本班
				$userSession = session('uname');
				$this->assign('myUser',$userSession);
                    $this->personInfo();
                    $this->studentList();
					
					
	}
	
    public function editInfo(){
        //学生提交资料处理
		
        $user_save = M('User');
		
       $class_save= M('Class');
        $map['id'] = session('uid');
		
		 $condition['user_name']=session('uname');
        $data['real_name'] = I('post.real');
         $data['user_grade'] = I('post.grade');
         $data['user_class'] = I('post.class');
		 $data['gender'] = I('post.sex');
         $data['student_id'] =I('post.student_id');
		//更新学生的真实姓名、性别、学号、班级和年级
		$user_save->where($map)->save($data);
		
       $data['class_grade'] = I('post.grade');
         $data['class_name'] = I('post.class');
        $map['class_name'] = I('post.class');
		
        $class_exist=$class_save->where($condition)->getField('class_name');
	
		if ($class_exist!=null) {
            //如果存在班级，更新班级人数和活跃度
			$classID=$class_save->where($map)->find();
			$map['id']=$classID;
            $studentNum = $class_save->where($map)->getField('students_numbers');
			$hotNum = $class_save->where($map)->getField('hot_number');
			$studentNum+=1;
            $numbers['students_numbers'] = $studentNum;
			$hotNum+=1;
            $numbers['hot_number'] = $hotNum ;
            
			$user_save->where($map)->save($user);
            header('Content-type:text/html;Charset=UTF-8');
            $this->success('更新数据成功！', __ROOT__ . '?s=Home/Class/show', 2);
        } else {
            //不存在班级，新建班级数据
				$class_save->add($data);
				
                //新增成功，更新人数
                $classID=$class_save->where($map)->find();
			$map['id']=$classID;
            $studentNum = $class_save->where($map)->getField('students_numbers');
			$hotNum = $class_save->where($map)->getField('hot_number');
			$studentNum+=1;
            $numbers['students_numbers'] = $studentNum;
			$hotNum+=1;
            $numbers['hot_number'] = $hotNum ;
            $class_save->where($map)->save($numbers);


        }   
    }
        public function personInfo(){
            //个人信息
            $user_info = M('User');
            $condition['id']=session('uid');
            $list = $user_info->where($condition)->select();
		
           $this->assign('myInfo',$list);
            

        }
        public function studentList(){

            $user_info = M('User');
            $class_info = M('Class');
            $condition['id']=session('uid');
            $class_grade=$user_info->where($condition)->find();
			$map['class_name']= $class_grade['user_grade'];
			$map['class_grade']= $class_grade['user_class'];
			$mapp['user_class']= $class_grade['user_class'];
			$mapp['user_grade']= $class_grade['user_grade'];
			$class_name=$class_grade['user_class'];
			$this->assign('class_name',$class_name);
			$user_grade=$class_grade['user_grade'];
			$this->assign('user_grade',$user_grade);
			  //本班学生列表          
			$students=$user_info->where($mapp)->select();	
			
	
          $this->assign('studentList',$students);
            //找出本班学生人数，活跃度,年级
			
            $class_members = $class_info->where($map)->select();
		
            $this->assign('class_members',$class_members);
             $this->display('Class:index');
  

        }



	
}
