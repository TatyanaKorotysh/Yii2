<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Profile';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-profile">
    <div class="info">
        <img src="">
        <p>Unknow</p>
        <p><span>Публикации: </span> | <span>Лайки: </span> | <span>Отзывы: </span></p>
    </div>

    <nav class="double-nav">
        <ul>
            <li>Статистика</li>
            <li>Все работы</li>
        </ul>
    </nav>

    <main>
        <a href="index.php?r=site%2Fadd" class="add-image">
            <div>
                <span>+</span>
            </div>
        </a>
    </main>
</div>