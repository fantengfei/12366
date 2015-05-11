<?php

namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {

   function _initialize(){
        //获得操作的合法路径
        $this->assign('table_url',$this->get_url());
   }

   public function get_url(){
        return CONTROLLER_NAME . '/' . ACTION_NAME;
   }

   public function getData($url){

        date_default_timezone_set('PRC');
        $start = date('Y-m-01', strtotime(date("Y-m-d")));
        $end_time   = strtotime("$start +1 month -1 day");
        $start_time = strtotime($start);
        if(empty($url)){
            return false;
        }
        $where['table_url'] = $url;
        $where['_string'] = " (create_time > " . $start_time  ." or create_time = " . $start_time . ") and (create_time < " . $end_time . " or create_time = " . $end_time . ") ";
        //得到表格原始数据
        $result = M()->table('table_info')->where($where)->select();
        if(!empty($result)){
            return $table_data = html_entity_decode($result[0]['table_data']);
        }
    }
}