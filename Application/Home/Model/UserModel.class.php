<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {
		 // 自动验证设置
    protected $_validate = array(
		array('user','require','用户名必须!'),
		array('user','english','用户名必须使用英文!','regex'),
		array('user','checkLen','用户名长度必须在3-10位之间!',0,'callback',3),
		array('user_name','','用户名已经存在!',1,'unique',3),
        /* array('grade','require','年级必须!'),
        array('class','require','班别必须!'),
        array('sex','require','性别必须'), */
		array('pwd','require','密码必须!'), 
		array('pwd','pwdLen','密码长度必须在6-20位之间！',0,'callback',3), 
		array('repwd','pwd','两次密码不相同',0,'confirm'),

        array('verify','require','验证码必须！'),
		
    );
	
	public function checkLen($data){
			if (strlen($data)>10||strlen($data)<3)
				{
					return FALSE;
			}
			return true;
		}
	public function pwdLen($data){
			if (strlen($data)>20||strlen($data)<6)
			{
				return FALSE;
			}
			return true;
			
	} 

	 
}

