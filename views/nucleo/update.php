<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Nucleo */

$this->title = 'Update Nucleo: ' . $model->NAME;
$this->params['breadcrumbs'][] = ['label' => 'Nucleos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NAME, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nucleo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
