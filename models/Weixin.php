<?php
namespace weixin\models;

use Yii;
use common\models\Weixin as Wx;

/**
* 微信
*/
class Weixin extends Wx
{
    // 只获取微信真是连接的数据  使用时通过 andWhere() 而不是 where()
    public static function find()
    {
        return parent::find()->where(['NOT', ['realurl' => null]]);
    }
}