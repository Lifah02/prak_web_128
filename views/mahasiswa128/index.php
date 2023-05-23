<?php

use app\models\Mahasiswa128;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa128-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Mahasiswa Baru', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nim',
            'nama',
            'kelas',
            // 'Jurusan', 
            'profil128.foto_profil',

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Mahasiswa128 $model) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>
</div>