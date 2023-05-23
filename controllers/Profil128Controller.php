<?php

namespace app\controllers;
use app\models\Profil_128;
use app\models\Profil128;
use yii\data\ActiveDataProvider;

class Profil128Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Profil128::find()]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
    ]); 
    }

}
?>
