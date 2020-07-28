<?php

namespace app\modules\bodywork;

/**
 * bodywork module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\bodywork\controllers';
    public $defaultRoute = 'bodywork';
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
