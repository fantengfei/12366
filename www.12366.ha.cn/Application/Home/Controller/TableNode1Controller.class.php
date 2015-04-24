<?php
/**
 * Created by PhpStorm.
 *
 * TableNode1   代表树节点的第一个二级目录
 *
 *
 * User: taffy
 * Date: 15/4/24
 * Time: 14:23
 */

namespace Home\Controller;
use Think\Controller;
class TableNode1Controller extends Controller {

    public function index() {
        $this->show();
    }

    // 增值纳税申报表（一般个人使用）
    public function table1() {
        echo "增值纳税申报表（一般个人使用）";
    }

    public  function  table2() {
        echo "增值纳税申报表附列表一";
    }


}