<?php

namespace app\controllers;
use app\models\Mahasiswa_128;
use app\models\Mahasiswa128;
use yii\data\ActiveDataProvider;

class MahasiswaController extends \yii\web\Controller
{
    public function actionProfil()
    {
        return $this->render('profil');
    }
    public function actionUbahBiodata()
    {
        return $this->render('ubahbiodata');
    }

    public function actionIndex()
    {
        
        $query = Mahasiswa128::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
    ]); 
    }
   
}
