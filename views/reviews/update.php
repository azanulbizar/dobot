<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Reviews $model */

$this->title = Yii::t('app', 'Update Reviews: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Reviews'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="reviews-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
