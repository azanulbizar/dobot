<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Faq $model */

$this->title = 'Редактирование вопроса: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Вопросы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="faq-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
