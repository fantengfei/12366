<?php
/**
 * Created by PhpStorm.
 *
 * TableNode4   代表树节点的第一个二级目录
 *
 *
 * User: zyf
 * Date: 15/4/28
 * Time: 16:34
 */

namespace Home\Controller;
use Think\Controller;
class TableNode4Controller extends BaseController {

    public function index() {
        $this->show();
    }

    public function table1() {
        $this->display($this->judge_return());
    }

    public  function  table2() {
        $this->display($this->judge_return());
    }

    public  function  table3() {
        $this->display($this->judge_return());
    }

    public  function  table4() {
        $this->display($this->judge_return());
    }

    public function table5() {
        $this->display($this->judge_return());
    }
    public function table6() {
        $this->display($this->judge_return());
    }
    public function table8() {
        $this->display($this->judge_return());
    }
    public function table9() {
        $this->display($this->judge_return());
    }
    public function table12() {
        $this->display($this->judge_return());
    }

    public function table11() {
        $this->display($this->judge_return());
    }
    public function table21() {
        $this->display($this->judge_return());
    }
}