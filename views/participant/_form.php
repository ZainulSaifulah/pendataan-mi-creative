<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Participant */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="participant-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->radioList([
        'Laki-Laki' => 'Laki-Laki', 
        'Perempuan' => 'Perempuan'
        ]) ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'origin')->dropdownList([
        'Internal' => 'Internal', 
        'Eksternal' => 'Eksternal'
    ],
    ['prompt'=>'Pilih Asal'])?>

    <?= $form->field($model, 'Whatsapp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attendance')->hiddenInput(['value' => 1])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
