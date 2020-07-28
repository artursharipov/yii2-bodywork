<?php

namespace app\modules\bodywork\widgets\bodywork;
use Yii;
use app\modules\bodywork\models\ClassDetail;
use app\modules\bodywork\models\ClassAuto;
use yii\base\Widget;

class BodyworkWidget extends Widget
{
    public $details;
    public $classes;

    public function init()
    {
        parent::init();
        
        BodyworkAsset::register($this->getView());

        $this->classes = ClassAuto::find()->where(['status'=>1])->all();
    }
    
    public function run()
    {
        return $this->render('bodywork', [
            'classes' => $this->classes,
        ]);
    }
}

?>