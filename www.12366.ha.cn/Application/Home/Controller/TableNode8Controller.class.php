<?php
/**
 * Created by PhpStorm.
 *
 * TableNode6   代表树节点的第一个二级目录
 *
 *
 * User: zyf
 * Date: 15/4/28
 * Time: 16:34
 */

namespace Home\Controller;
use Think\Controller;
class TableNode8Controller extends BaseController {

    public function index() {
        $this->show();
    }

    // 增值纳税申报表（一般个人使用）
    public function table1() {
        $dq_time = time();
		$dy=date("Y-m",$dq_time);
		$res = M('table_info')->where("shenbao = '未申报'")->select();
	
		$list=array();
		$i=1;
		foreach($res as $v){
			if(date("Y-m",$v['create_time'])==$dy){
				$v['create_time'] = date('Y-m-d',$v['create_time']);
				$v['update_time'] = date('Y-m-d',$v['update_time']);
				$v['num']=$i++;
				$list[]=$v;
				}
			}
			$this->assign('list',$list);
        $this->display($this->judge_return());
    }

    public  function  table2() {
		 $dq_time = time();
		$dy=date("Y-m",$dq_time);
		$res = M('table_info')->where("ifkk=0 and shenbao='已申报'")->select();
		$list=array();
		$i=1;
		
		foreach($res as $v){
			if(date("Y-m",$v['update_time'])==$dy){
				$v['create_time'] = date('Y-m-d',$v['create_time']);
				$v['update_time'] = date('Y-m-d',$v['update_time']);
				$v['num']=$i++;
				$list[]=$v;
				}
			}
		$this->assign('list',$list);
        $this->display($this->judge_return());
    }

    public  function  table3() {
		if($_POST['shenbao']==1){
			$starttime = strtotime($_POST['startDate']);
			$endtime = strtotime($_POST['endDate']);
			$sql = " select * from table_info where update_time>=$starttime and update_time<=$endtime and shenbao='已申报' ";
			$res =M('table_info')->query($sql);
			$list=array();
			$i=1;
			foreach($res as $v){
				$v['create_time'] =date('Y-m-d',$v['create_time'] );
				$v['update_time'] =date('Y-m-d',$v['update_time'] );
				
				$v['num']=$i++;
				$list[]=$v;
				}
			}
			if($_POST['shenbao']==2){
			$starttime = strtotime($_POST['startDate']);
			$endtime = strtotime($_POST['endDate']);
			$sql = " select * from table_info where create_time>=$starttime and create_time<=$endtime and shenbao='已申报' ";
			$res =M('table_info')->query($sql);
			$list=array();
			$i=1;
			foreach($res as $v){
				$v['create_time'] =date('Y-m-d',$v['create_time'] );
				$v['update_time'] =date('Y-m-d',$v['update_time'] );
				
				$v['num']=$i++;
				$list[]=$v;
				}
			}
			$count = count($list);
			$this->assign('count',$count);
		$this->assign('res',$list);
        $this->display($this->judge_return());
    }

    public  function  table4() {
        if($_POST['shenbao']==1){
			$starttime = strtotime($_POST['startDate']);
			$endtime = strtotime($_POST['endDate']);
			$sql = " select * from table_info where kk_time>=$starttime and kk_time<=$endtime and ifkk=1 ";
			
			$res =M('table_info')->query($sql);
			$list=array();
			$i=1;
			foreach($res as $v){
				$v['create_time'] =date('Y-m-d',$v['create_time'] );
				$v['update_time'] =date('Y-m-d',$v['update_time'] );
				
				$v['num']=$i++;
				$list[]=$v;
				}
			}
			if($_POST['shenbao']==2){
			$starttime = strtotime($_POST['startDate']);
			$endtime = strtotime($_POST['endDate']);
			$sql = " select * from table_info where create_time>=$starttime and create_time<=$endtime and ifkk=1 ";
			$res =M('table_info')->query($sql);
			$list=array();
			$i=1;
			foreach($res as $v){
				$v['create_time'] =date('Y-m-d',$v['create_time'] );
				$v['update_time'] =date('Y-m-d',$v['update_time'] );
				
				$v['num']=$i++;
				$list[]=$v;
				}
			}
			$count = count($list);
			$this->assign('count',$count);
		$this->assign('res',$list);
        $this->display($this->judge_return());
    }
	public function koukuan(){
		$id = $_POST['id'];
		$res= explode(',',$id);
		unset($res[count($res)-1]);
		$data['ifkk']=1;
		$data['kk_time'] = time();
		foreach($res as $v){
			$res1 =  M('table_info')->where("id=$v")->save($data);
			}
		if(!$res1){
			 echo "failed";
			 }
		 else{
			 echo "success";
			 }
		}
}