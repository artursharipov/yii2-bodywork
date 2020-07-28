<?php

namespace app\modules\bodywork\controllers;

use yii\web\Controller;
use app\modules\bodywork\models\ClassDetail;
use app\modules\bodywork\models\ClassAuto;
use Yii;

class FrontendController extends Controller
{
    public function actionAuto($id)
    {

        $details = ClassDetail::find()->where(['class_auto_id'=>$id])->all();
        $class = ClassAuto::findOne($id);

        $this->layout = false;
        
        return $this->renderAjax('_auto',[
            'details' => $details,
            'class' => $class,
        ]);
    }   

    public function actionAdd($id, $side)
    {
        Yii::$app->session->open();
        
        $detail = ClassDetail::findOne($id);

        $_SESSION['price-list'][$id.$side] = [
            'id'=>$detail->id,
            'name'=>$detail->name,
            'price'=>$detail->price,
            'side'=>$side,
            'class_auto_id'=>$detail->class_auto_id,
        ];

        $this->layout = false;
        
        return $this->renderAjax('_price',[
            'session'=>$_SESSION
        ]);
    }

    public function actionDel($uid){
		
        Yii::$app->session->open();
        
        unset($_SESSION['price-list'][$uid]);
        
        $this->layout = false;
        
        return $this->renderAjax('_price',[
            'session'=>$_SESSION
        ]);
	}

    
    public function actionShow(){
        Yii::$app->session->open();

        if(isset($_SESSION['price-list'])){
            unset($_SESSION['price-list']);
        }

        $this->layout = false;

        return $this->renderAjax('_price',[
            'session'=>$_SESSION,
        ]);
    }

    public function actionSubmit(){
		
        Yii::$app->session->open();

        $this->layout = false;
        
        $summ = !empty($_SESSION['price-list']) ? array_sum(array_column($_SESSION['price-list'], 'price')) : 0;
        $count = !empty($_SESSION['price-list']) ? count($_SESSION['price-list']) : 0;
        
        return "Ваша заявка: {$count} деталей на сумму {$summ} рублей";
	}
}
