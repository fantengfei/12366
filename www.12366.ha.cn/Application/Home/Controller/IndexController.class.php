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
    public function edit_data(){
		$id=I('id');
		$id1=explode(',',$id);
		$shenbao=I('shenbao');
		if(empty($id) || empty($shenbao) ){
    		return false;
    	}
		$update_time=time();
		unset($id1[count($id1)-1]);
		foreach($id1 as $v){
			$data['shenbao']  = $shenbao;
    	    $data['update_time'] = $update_time;
             $excres=M('table_info')->where("id=$v")->save($data);
			 
			}
		 if(!$excres){
			 echo "failed";
			 }
		 else{
			 echo "success";
			 }
		}
    //保存表格内容
    public function save_table(){
    	$table_data = I('post.table_data'); //表格数据
    	$root_name  = I('post.root_name');  //表格标题
    	$table_name = I('post.table_name'); //表格名字
        $table_type = I('post.table_type'); //表格类型
        $table_url  = I('post.table_url');  //表格url
        $save_time  = I('post.save_time');  //保存时间
        $is_show    = I('post.is_show');    //是否在打印显示
        //var_dump($save_time);
       // exit;
    	if(empty($save_time) || empty($table_data) || empty($root_name) || empty($table_name) || empty($table_type) || empty($table_url)){
    		return false;
    	}
    	$data['root_name']  = $root_name;
    	$data['table_name'] = $table_name;
    	$data['table_data'] = $table_data;
    	$data['table_type'] = $table_type;
        $data['table_url']  = $table_url;
        $data['is_show']    = $is_show;
      /*$data['shenbao']     = 
    	$data['bianhao']     = 
    	$data['jieguo']      = */
        $start = date('Y-m-01', strtotime(date($save_time)));
        $end_time   = strtotime("$start +1 month -1 day");
        $start_time = strtotime($start);
        $where['table_url'] = $table_url;
        $where['_string'] = " (create_time > " . $start_time  ." or create_time = " . $start_time . ") and (create_time < " . $end_time . " or create_time = " . $end_time . ") ";
    	//检查数据是否存在
    	$findresult = M()->table('table_info')->where($where)->find();
    	if(empty($findresult)){
    		//如果不存在则添加
    		$data['create_time'] = strtotime(date($save_time));
    		$result = M()->table('table_info')->add($data);
	    	if($result){
	    		echo 'success';
	    	}
    	}else{
    		//如果已经存在，则更新表格数据
    		$result = M()->table('table_info')->where($where)->save($data);
	    	if($result){
	    		echo 'success';
	    	}
    	}
    	
    }
}