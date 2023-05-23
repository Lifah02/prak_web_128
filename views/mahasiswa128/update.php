<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Mahasiswa128 $model */

$this->title = 'Update Mahasiswa128: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswa128s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mahasiswa128-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
