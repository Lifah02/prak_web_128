<?php

namespace app\controllers;
use app\models\Matakuliah128;
use app\models\Mahasiswa_128;
use yii\data\ActiveDataProvider;


class MatakuliahController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Matakuliah128::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
    ]); 
    }
    

}
?>