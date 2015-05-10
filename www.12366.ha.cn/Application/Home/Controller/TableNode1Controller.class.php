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
class TableNode1Controller extends BaseController {

    public function index() {
        $this->show();
    }

    // 增值纳税申报表（一般个人使用）
    public function table1() {
        $this->display('table1');
    }

    public  function  table2() {
        $this->display('table2');
    }

    public  function  table3() {
        $this->display('table3');
    }

    public  function  table4() {
        $this->display('table4');
    }

    public  function  table5() {
        $this->display('table5');
    }

    public  function  table6() {
        $this->display('table6');
    }

    public  function  table7() {
        $this->display('table7');
    }

    public  function  table8() {
        $this->display('table8');
    }

    public  function  table9() {
        $this->display('table9');
    }

}