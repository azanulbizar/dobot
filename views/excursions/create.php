<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Excursions $model */

$this->title = Yii::t('app', 'Create Excursions');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Excursions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="excursions-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
