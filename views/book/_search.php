<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BookSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<?php if (Yii::$app->user->id=='100') { ?>
<div class="book-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'book_name') ?>

    <?= $form->field($model, 'author_name') ?>

    <?= $form->field($model, 'year') ?>

    <?= $form->field($model, 'publisher') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php } ?>
<?php if (Yii::$app->user->id!='100') { ?>
    <p>
        <b>Для просмотра содержимого авторизируйтесь как Администратор.</b>
    </p>
<?php } ?>