<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Profil128 $model */

$this->title = 'Update Profil128: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Profil128s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="profil128-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
