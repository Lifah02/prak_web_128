<?php

namespace app\controllers;
use app\models\Mahasiswa_128;
use app\models\Mahasiswa128;
use yii\data\ActiveDataProvider;

class Mahasiswa128Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Mahasiswa128::find()]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
    ]); 
}

}
?>