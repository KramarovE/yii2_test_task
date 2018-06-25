<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<?php if (Yii::$app->user->id=='100') { ?>
    <h1>Authors</h1>
    <ul>
        <?php foreach ($authors as $author): ?>
            <li>
                <?= Html::encode("{$author->name} ({$author->book_count})") ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php } ?>
<?php if (Yii::$app->user->id!='100') { ?>
    <p>
        <b>Для просмотра содержимого авторизируйтесь как Администратор.</b>
    </p>
<?php } ?>