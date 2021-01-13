<?php

namespace roms\controllers;
use Yii;
use yii\web\Controller;
use roms\models\Pages;

class CmsController extends Controller
{
    public function actionIndex()
    {

//error_log(print_r($this->view, true), 3, Yii::getalias("@app/log/roms222.log"));
		
        // регистрируем ресурсы:
        \roms\CmsAssetsBundle::register($this->view);
        $data = Pages::find()->all();
        return $this->render('index', [
            'data' => $data,
        ]);
    }

}