<?php
/**
 * Created by PhpStorm.
 *
 *
 * User: taffy
 * Date: 15/4/24
 * Time: 14:23
 */

namespace Home\Controller;
use Think\Controller;
class PrintController extends Controller {

    public function index() {

        date_default_timezone_set('PRC');
        $start = date('Y-m-01', strtotime(date("Y-m-d")));
        $end_time   = strtotime("$start +1 month -1 day");
        $start_time = strtotime($start);
        $where['_string'] = " (create_time > " . $start_time  ." or create_time = " . $start_time . ") and (create_time < " . $end_time . " or create_time = " . $end_time . ") and is_show=1";
        $result = M('table_info')->table('table_info')->field("id,root_name,create_time,FROM_UNIXTIME(create_time, '%Y-%m') as time,table_type")->where($where)->group('time, root_name')->order('create_time desc,root_name')->select();
        $con = count($result);

        for($i=0; $i< $con; $i++) {
            if($result[$i]['table_type'] == 1) {
                $result[$i]['start_time'] = date('Y-m-01', $result[$i]['create_time']);
                $date = $result[$i]['start_time'];
                $result[$i]['end_time'] = date('Y-m-d', strtotime("$date +1 month -1 day"));
            } else {
                $result[$i]['start_time'] = date('Y-01-01');
                $result[$i]['end_time'] = date('Y-12-31');
            }
        }

        $this->assign("table_root_list",$result);
        $this->display('index');
    }

    public function query_root() {
        $start_time = strtotime(I('post.start_time'));
        $end_time = strtotime(I('post.end_time'));
        $select_type = I('post.select_type');


        $where_field = 'create_time';
//        if ($select_type == 1) {
//            $where_field = 'update_time';
//        }

        $where['_string'] = " ($where_field > $start_time or $where_field = $start_time) and ($where_field < $end_time or $where_field = $end_time) and is_show=1";

        $result = M('table_info')->field("id,root_name,create_time,table_type, FROM_UNIXTIME(create_time, '%Y-%m') as time")->where($where)->group('time,root_name')->order('create_time desc,root_name')->select();

        $con = count($result);

        for($i=0; $i< $con; $i++) {
            if($result[$i]['table_type'] == 1) {
                $result[$i]['start_time'] = date('Y-m-01', $result[$i]['create_time']);
                $date = $result[$i]['start_time'];
                $result[$i]['end_time'] = date('Y-m-d', strtotime("$date +1 month -1 day"));
            } else {
                $result[$i]['start_time'] = date('Y-01-01', $result[$i]['create_time']);
                $result[$i]['end_time'] = date('Y-12-31', $result[$i]['create_time']);
            }
        }

        echo json_encode($result);
    }


    public function query() {

        date_default_timezone_set('PRC');

        $start_time = strtotime(I('post.start_time'));
        $end_time = strtotime(I('post.end_time'));
        $root_name = I('post.root_name');

        $where['_string'] = " (create_time > " . $start_time  ." or create_time = " . $start_time . ") and (create_time < " . $end_time . " or create_time = " . $end_time . ") and is_show = 1 ";

        if (empty($root_name)) {
            return false;
        }

        $where['root_name'] = $root_name;
        $result = M('table_info')->field('id, create_time, table_type, table_data,table_name')->where($where)->select();

        if ($result) {
            $con = count($result);

            for($i=0; $i< $con; $i++) {
                if($result[$i]['table_type'] == 1) {
                    $result[$i]['start_time'] = date('Y-m-01', $result[$i]['create_time']);
                    $date = $result[$i]['start_time'];
                    $result[$i]['end_time'] = date('Y-m-d', strtotime("$date +1 month -1 day"));
                } else {
                    $result[$i]['start_time'] = date('Y-01-01', $result[$i]['create_time']);
                    $result[$i]['end_time'] = date('Y-12-31', $result[$i]['create_time']);
                }
            }

            echo json_encode($result);
            return ;
        }

        return false;

    }




    public function showTable() {

        $id = $_GET['id'];
        $result = M('table_info')->field('table_data')->where("id=$id")->select();
        $this->assign("data",  html_entity_decode($result[0]['table_data']));
        $this->display('showTable');

    }

}