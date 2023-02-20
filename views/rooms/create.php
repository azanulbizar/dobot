<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\RoomsCategory $model */

$this->title = Yii::t('app', 'Create Rooms Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rooms Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rooms-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
