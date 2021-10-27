<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NucleoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nucleos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nucleo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Nucleo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'NAME',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
