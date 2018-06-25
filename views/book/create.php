<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Book */

$this->title = 'Добавить книгу';
$this->params['breadcrumbs'][] = ['label' => 'Книги', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?php if (Yii::$app->user->id=='100') { ?>
<div class="book-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<?php } ?>
<?php if (Yii::$app->user->id!='100') { ?>
    <p>
        <b>Для просмотра содержимого авторизируйтесь как Администратор.</b>
    </p>
<?php } ?>