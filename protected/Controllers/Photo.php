<?php
/**
 * Created by PhpStorm.
 * User: enerjiser2
 * Date: 10.05.2016
 * Time: 1:01
 */

namespace App\Controllers;


use T4\Mvc\Controller;

class Photo extends Controller
{
    public function actionDefault()
    {
        $this->data->imgs = ['1.jpg','2.jpg','3.jpg',];
    }

    public function actionLast()
    {
        $this->data->lastImg = '3.jpg';
    }
}