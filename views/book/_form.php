<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>
<?php if (Yii::$app->user->id=='100') { ?>
<div class="book-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'book_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'publisher')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php } ?>
<?php if (Yii::$app->user->id!='100') { ?>
    <p>
        <b>Для просмотра содержимого авторизируйтесь как Администратор.</b>
    </p>
<?php } ?>