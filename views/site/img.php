<?php

use yii\helpers\Html;
use yii\widgets\linkpager;
?>

<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="body-content">
    <?php foreach ($images as $img) : ?>
            <div class="img_container">
                <a href="index.php?r=site%2Fimg">
                    <img class="img_content" src='../img/<?= $img->title . "." . $img->format ?>' />
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>