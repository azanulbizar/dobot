<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\AboutInfo $model */

$this->title = Yii::t('app', 'Create About Info');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'About Infos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
