<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){
        $this->display('index');
    }

    public function login() {
        echo "hello";
    }

    //保存表格内容
    public function save_table(){
    	$content      = I('post.content'); //表格数据
    	$table_name   = I('post.table_name'); //表格标题
    	$table_status = I('post.table_status'); //表格标识
    	if(empty($content)){
    		return false;
    	}
    	$data['root_name']   = $table_status;
    	$data['table_name']  = $table_name;
    	$data['table_data']  = $content;
    	$data['table_type']  = 1;
 /*   	$data['shenbao']     = 
    	$data['bianhao']     = 
    	$data['jieguo']      = */
    	$where['root_name'] = $table_status;
    	//检查数据是否存在
    	$findresult = M()->table('table_info')->where($where)->find();

    	if(empty($findresult)){
    		//如果不存在则添加
    		$data['create_time'] = time();
    		$result = M()->table('table_info')->add($data);
	    	if($result){
	    		echo 'success';
	    	}
    	}else{
    		//如果已经存在，则更新
    		$data['update_time'] = time();
    		$result = M()->table('table_info')->where($where)->save($data);
	    	if($result){
	    		echo 'success';
	    	}
    	}
    	
    }
}