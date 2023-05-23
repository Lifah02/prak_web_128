<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Profil128 $model */

$this->title = 'Create Profil128';
$this->params['breadcrumbs'][] = ['label' => 'Profil128s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profil128-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
