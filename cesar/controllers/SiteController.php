<?php

namespace app\controllers;

use app\helpers\CesarHelper;
use Yii;
use yii\web\Controller;
use yii\web\Response;

/**
 * Class SiteController
 * @package app\controllers
 */
class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCrypt()
    {

        $text = CesarHelper::crypt(\Yii::$app->request->post('text'), \Yii::$app->request->post('shift'));
        \Yii::$app->response->format = \Yii\web\Response::FORMAT_JSON;
        return $text;
        /*TODO Fix 400*/
    }
    public function actionError()
    {
        return new Response("qwe");
    }
    public function actionDecrypt()
    {

    }
}