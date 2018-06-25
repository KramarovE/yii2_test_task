<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'D-Partners Test Task (By Kramarov E.V.)';
?>
<?php if (Yii::$app->user->id=='100') { ?>
<div class="site-index">

    <p><?= Html::a('CRUD для авторов', ['author/index'], ['class' => 'href']) ?></p>
    <p>
        <?= Html::a('CRUD для книг', ['book/index'], ['class' => 'href']) ?>
    </p>
    <p>
        <?= Html::a('Список книг с указанием имени автора', ['book/list'], ['class' => 'href']) ?>
    </p>
    <p>
        <?= Html::a('Список авторов с указанием количества книг', ['authors'], ['class' => 'href']) ?>
    </p>

</div>

<?php } ?>
<?php if (Yii::$app->user->id!='100') { ?>
<div class="site-index">
    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <?= Html::encode("{$book->author_name} (\"{$book->book_name}\")") ?>
            </li>
        <?php endforeach; ?>
    </ul>

</div>
<?php } ?>