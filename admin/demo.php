<?php
/**
 * Created by PhpStorm.
 * User: kay
 * Date: 2018/5/12
 * Time: 11:01
 */

namespace admin;

class Demo {

    public function index()
    {
        echo 'home';
    }

    public function page()
    {
        echo 'page';
    }

    public function view($id)
    {
        echo $id;
    }

}