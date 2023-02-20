<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Reviews $model */

$this->title = Yii::t('app', 'Create Reviews');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Reviews'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reviews-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
