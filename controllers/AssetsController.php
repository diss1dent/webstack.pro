<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\ArrayHelper;

//$params = require(__DIR__ . './../config/params.php');
/*var_dump($assets);*/

/**
 * Create path for apps from gulp tasks
 */
class AssetsController extends Controller
{
    public $jsBundle = 'js/app.js';
    public $cssBundle = 'css/app.css';

    public function getCssBundle()
    {
        if ($params['assets'] <> null ) {
            return Yii::$app->homeUrl. 'assets/' . (ArrayHelper::getValue(Yii::$app->params['assets'], $this->cssBundle));

        }

        return Yii::$app->homeUrl. 'assets/' . $this->cssBundle;

    }

    public function getJsBundle()
    {
        if ($params['assets'] <> null ) {
            return Yii::$app->homeUrl. 'assets/' . (ArrayHelper::getValue(Yii::$app->params['assets'], $this->jsBundle));
        }

        return Yii::$app->homeUrl. 'assets/' . $this->cssBundle;

    }

    public function getImage($name)
    {
        if ( $params['assets'] <> null ) {
            return Yii::$app->homeUrl. 'assets/' . ArrayHelper::getValue(Yii::$app->params['assets'], $name);
        }

        return Yii::$app->homeUrl. 'assets/' . $name;

    }

}
