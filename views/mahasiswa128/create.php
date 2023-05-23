<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Mahasiswa128 $model */

$this->title = 'Create Mahasiswa128';
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswa128s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa128-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
