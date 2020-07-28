<?php

namespace app\modules\bodywork\widgets\bodywork;
\Yii::$app->assetManager->forceCopy = true;
use yii\web\AssetBundle;

class BodyworkAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/bodywork/widgets/bodywork/assets';

    public $css = [
        'bodywork.css',
    ];
    public $js = [
        'bodywork.js',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
?>