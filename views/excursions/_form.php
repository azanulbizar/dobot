<?php

use yii\helpers\Html;
use mihaildev\ckeditor\CKEditor;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Excursions $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="excursions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->widget(CKEditor::class,[
        'editorOptions' => [
            'toolbarGroups' => [
                ['name' => 'undo'],
                ['name' => 'basicstyles'],
            ],
            'removeButtons' => 'Subscript,Superscript,Strike',
            'inline' => false,
        ],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
