<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ImparteCurso */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="imparte-curso-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Curso_idCurso')->textInput() ?>

    <?= $form->field($model, 'Usuarios_Usuario')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
