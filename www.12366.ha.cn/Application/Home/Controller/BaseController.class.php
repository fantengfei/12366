<?php

namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {

   function _initialize(){
        //获得操作的合法路径
        $url = CONTROLLER_NAME . '/' . ACTION_NAME;
        $this->assign('table_status',$url);
        $this->assign('table_info',$this->getData($url));
   }

   public function getData($url){
        if(empty($url)){
            return false;
        }
        $where['root_name'] = $url;
        //得到表格原始数据
        $result = M()->table('table_info')->where($where)->select();
        if(empty($result)){
            return false;
        }else{
            return html_entity_decode($result[0]['table_data']);
        }
    }
}