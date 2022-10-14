<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Project';
?>
<div class="site-index">
<h1>
    <?php
    if(Yii::$app->user->isGuest == 1){
        echo "Здравствуйте, зарегестрируйтесь пожалуйства";
    } else {
        echo "Здравствуйте, спасибо что зарегестрировались";
    }
    ?>
</h1>
</div>
