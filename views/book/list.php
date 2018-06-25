<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<?php if (Yii::$app->user->id=='100') { ?>
    <h1>Books</h1>
    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <?= Html::encode("\"{$book->book_name}\"/ ({$book->author_name})") ?>
            </li>
        <?php endforeach; ?>
    </ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
<?php } ?>
<?php if (Yii::$app->user->id!='100') { ?>
    <p>
        <b>Для просмотра содержимого авторизируйтесь как Администратор.</b>
    </p>
<?php } ?>
