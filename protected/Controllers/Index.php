<?php

namespace App\Controllers;

use T4\Core\Config;
use T4\Mvc\Controller;

class Index
    extends Controller
{
    public function actionDefault()
    {
        //$this->data->myTitle = (new Config(ROOT_PATH_PROTECTED . '/config.php'))->myTitle;
        $this->data->cnf = new Config(ROOT_PATH_PROTECTED . '/config.php');
    }

    public function actionAbout()
    {
        $this->data->cnf = new Config(ROOT_PATH_PROTECTED . '/config.php');
        $this->data->pageName = 'Информация о сайте...';
    }

}