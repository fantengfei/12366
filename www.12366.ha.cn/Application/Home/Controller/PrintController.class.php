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




//        $result = M()->table('table_info')->where($where)->select();


        $this->show();
    }

}