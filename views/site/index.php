<?php

use yii\helpers\Html;
use yii\widgets\linkpager;
?>

<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="double-nav">
        <select class='select'>
            <option selected disabled>Тема</option>
            <option>Фентези</option>
            <option>Фантастика</option>
            <option>Арт</option>
            <option>Фото</option>
            <option>Все</option>
        </select>
        <select class='select'>
            <option selected disabled>Сортировать по</option>
            <option>Дате (сначала новые)</option>
            <option>Дате (сначала старые)</option>
            <option>Популярности</option>
        </select>
    </div>
    <div class="body-content">
        <?php foreach ($images as $img) : ?>
            <div class="img_container">
                <a href="index.php?r=site%2Fimg">
                    <img class="img_content" src='../img/<?= $img->title . "." . $img->format ?>' />
                </a>
            </div>
        <?php endforeach; ?>
        <br>
        <?= linkpager::widget(['pagination' => $pagination]) ?>
    </div>
</div>