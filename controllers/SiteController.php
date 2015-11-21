<?php
namespace weixin\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use weixin\models\Weixin;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public function behaviors(){
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index', 'error'],
                        'allow' => true
                    ]
                ]
            ],
            'verb' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'index' => ['get'],
                    'filepwd' => ['post']
                ]
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        $wxs = Weixin::find()->orderBy('lastModified DESC')->all();

        return $this->render('index', [
            'wxs' => $wxs
        ]);
    }
}