<?php

/* @var $this yii\web\View */

$this->title = 'Add new image';
?>

<div class="site-index">
    <form class="add-form">
        <div>
            <div>
                <input type="file" name="img">
                <input type="submit" value="Отправить">
            </div>
            <div>
                <input type="radio" name="pay" value="no-pay" checked>Скаивать бесплатно<br>
                <input type="radio" name="pay" value="pay"> Скачивать платно
            </div>
        </div>
        <div>
            <label>Описание</label>
            <br>
            <input type="text" name="description">
        </div>
    </form>
</div>