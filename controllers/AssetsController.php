<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\ArrayHelper;

/**
 * Global base controller
 */
class AssetsController extends Controller
{
    /**
     * @var string Path to js bundle
     */
    public $jsBundle = 'app.js';
    /**
     * @var string Path to css bundle
     */
    public $cssBundle = 'app.css';

    /**
     * @return string Return CSS bundle
     */
    public function getCssBundle()
    {
        return '/web/assets/' . ArrayHelper::getValue(Yii::$app->params['assets'], $this->cssBundle);
    }

    /**
     * @return string Return JS bundle
     */
    public function getJsBundle()
    {
        return '/web/assets/' . ArrayHelper::getValue(Yii::$app->params['assets'], $this->jsBundle);
    }
}
