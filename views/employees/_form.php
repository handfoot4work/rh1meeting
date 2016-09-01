<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Employees */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employees-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex')->textInput() ?>

    <?= $form->field($model, 'birthdate')->textInput() ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tumbon')->textInput() ?>

    <?= $form->field($model, 'ampur')->textInput() ?>

    <?= $form->field($model, 'chw')->textInput() ?>

    <?= $form->field($model, 'education')->dropDownList([ 'ปริณญาตรี' => 'ปริณญาตรี', 'ปริณญาโท' => 'ปริณญาโท', 'สูงกว่าระดับปริณญาโทขึ้นไป' => 'สูงกว่าระดับปริณญาโทขึ้นไป', 'ปวส/อนุปริณญา' => 'ปวส/อนุปริณญา', 'มัธยมศึกษา6' => 'มัธยมศึกษา6', 'มัธยมศึกษา3' => 'มัธยมศึกษา3', 'ประถมศึกษา' => 'ประถมศึกษา', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ability')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department_id')->textInput() ?>

    <?= $form->field($model, 'comein')->textInput() ?>

    <?= $form->field($model, 'avatar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
