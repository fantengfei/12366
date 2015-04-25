<?php
/**
 * Created by PhpStorm.
 * User: taffy
 * Date: 15/4/25
 * Time: 09:51
 */

namespace Home\Controller;
use Think\Controller;
class DefaultController extends Controller {

    public function top() {
        $this->show();
    }

    public function home() {
        $this->show();
    }

}