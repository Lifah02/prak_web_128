<?php

namespace app\controllers;
use app\models\Obat128;
use yii\data\ActiveDataProvider;

class Obat128Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Obat128::find()]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
    ]);
} 

}
