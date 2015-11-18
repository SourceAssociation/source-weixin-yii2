<?php
namespace weixin\controllers;

use Yii;
use yii\web\Controller;
use weixin\models\Weixin;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public function actionIndex()
    {
        $wxs = Weixin::find()->orderBy('lastModified DESC')->all();

        return $this->render('index', [
            'wxs' => $wxs
        ]);
    }
}