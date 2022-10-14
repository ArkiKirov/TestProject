<?php

/** @var yii\web\View $this */
use app\models\Home;
use yii\web\JqueryAsset;
use yii\helpers\HTML;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;

$this->title = 'My Yii Application';
$master = Yii::$app->db->createCommand('SELECT * FROM news')->queryAll();
?>
<div id="block0" data-attr="<?php echo $master[0]['name']; ?>">
<div id="block1" data-attr="<?php echo $master[1]['name']; ?>">
<div id="block2" data-attr="<?php echo $master[2]['name']; ?>">
<div id="block3" data-attr="<?php echo $master[3]['name']; ?>">
<div id="block4" data-attr="<?php echo $master[4]['name']; ?>">
<div id="block5" data-attr="<?php echo $master[5]['name']; ?>">
<div id="block6" data-attr="<?php echo $master[6]['name']; ?>">
<div id="block7" data-attr="<?php echo $master[7]['name']; ?>">
<div id="block8" data-attr="<?php echo $master[8]['name']; ?>">
<div id="block9" data-attr="<?php echo $master[9]['name']; ?>">
<div id="block10" data-attr="<?php echo $master[0]['text']; ?>">
<div id="block11" data-attr="<?php echo $master[1]['text']; ?>">
<div id="block12" data-attr="<?php echo $master[2]['text']; ?>">
<div id="block13" data-attr="<?php echo $master[3]['text']; ?>">
<div id="block14" data-attr="<?php echo $master[4]['text']; ?>">
<div id="block15" data-attr="<?php echo $master[5]['text']; ?>">
<div id="block16" data-attr="<?php echo $master[6]['text']; ?>">
<div id="block17" data-attr="<?php echo $master[7]['text']; ?>">
<div id="block18" data-attr="<?php echo $master[8]['text']; ?>">
<div id="block19" data-attr="<?php echo $master[9]['text']; ?>">
<div class="bar">
    <div class="bar-elem-container">
        <span class="bar-icon"></span><span class="instruments bar-element">Инструменты</span>
        <span class="bar-icon"></span><span class="analitic bar-element">Аналитика</span>
        <span class="bar-icon"></span><span class="projects bar-element">Проекты</span>
    </div>
</div>
<div class="news-block-container">
    <div class="sourses">
        <div class="source">
            <img class="icon" src="css/img/need.jpg" alt="logo"></img>
            <span class="sum"></span>
        </div>
        <div class="source">
            <img class="icon" src="css/img/need.jpg" alt="logo"></img>
            <span class="sum"></span>
        </div>
        <div class="source">
            <img class="icon" src="css/img/need.jpg" alt="logo"></img>
            <span class="sum"></span>
        </div>
        <div class="source">
            <img class="icon" src="css/img/need.jpg" alt="logo"></img>
            <span class="sum"></span>
        </div>
        <div class="source">
            <img class="icon" src="css/img/need.jpg" alt="logo"></img>
            <span class="sum"></span>
        </div>
        <div class="source">
            <img class="icon" src="css/img/need.jpg" alt="logo"></img>
            <span class="sum"></span>
        </div>
        <div class="source">
            <img class="icon" src="css/img/need.jpg" alt="logo"></img>
            <span class="sum"></span>
        </div>
        <div class="source">
            <img class="icon" src="css/img/need.jpg" alt="logo"></img>
            <span class="sum"></span>
        </div>
        <div class="source">
            <img class="icon" src="css/img/need.jpg" alt="logo"></img>
            <span class="sum"></span>
        </div>
        <div class="source">
            <img class="icon" src="css/img/need.jpg" alt="logo"></img>
            <span class="sum"></span>
        </div>
    </div>
    <div class="graphic">
     <h1>Извините, я не знаю как реализовать график</h1>
    </div>
    <div class="news-container">

        <?php $form = ActiveForm::begin([
            'id' => 'news-form',
            'options' => ['class' => 'news-navigation', 'action' => 'index.php?id=2'] ],
        ) ?> 
            <?= Html::button('1', ['class' => 'news-navigation-item', 'id' => 'news-button-id1']) ?>
            <?= Html::button('2', ['class' => 'news-navigation-item', 'id' => 'news-button-id2']) ?>
            <?= Html::button('3', ['class' => 'news-navigation-item', 'id' => 'news-button-id3']) ?>
            <?= Html::button('4', ['class' => 'news-navigation-item', 'id' => 'news-button-id4']) ?>
            <?= Html::button('5', ['class' => 'news-navigation-item', 'id' => 'news-button-id5']) ?>
        <?php ActiveForm::end() ?>
        <div class="news-block" id="news-block1">
            <span class="first_name"><?php echo $master[0]['name'];?></span>
            <span class="first_text"><?php echo $master[0]['text'];?></span>
            <span class="news-bar">
                <span class="status" id='status1'></span>

                <span class="settings" id="settings1">⋮</span>
                <span id="settings-bar1">
                    <p class="set-status " id="set-pos1">Позитивный</p>
                    <p class="set-status " id="set-neu1">Нейтральный</p>
                    <p class="set-status " id="set-neg1">Негативный</p>
                </span>
            </span>
        </div>
        <div class="news-block" id="news-block2">
            <span class="second_name"><?php echo $master[1]['name'];?></span>
            <span class="second_text"><?php echo $master[1]['text'];?></span>
            <span class="news-bar">
                <span class="status" id='status2'></span>

                <span class="settings" id="settings2">⋮</span>
                <span id="settings-bar2">
                    <p class="set-status" id="set-pos2">Позитивный</p>
                    <p class="set-status" id="set-neg2">Негативный</p>
                    <p class="set-status" id="set-neu2">Нейтральный</p>
                </span>
            </span>
        </div>

    </div>
</div>
<div class="filters">
    <div class="filters-container">
        <div class="filters-item"></div>
        <div class="filters-item"></div>
        <div class="filters-item"></div>
        <div class="filters-item"></div>
        <div class="filters-item"></div>
        <div class="filters-item"></div>
    </div>
        
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<style>

</style>
<?php
$script1 = <<< JS
$(document).on('click', document, function(e){
    t=event.target||event.srcElement; 
    if(e.target.id == 'settings1'){
        $('#settings-bar1').css("display", 'block');
        $('#settings-bar2').css("display", 'none');
    } else if(e.target.id == 'settings2'){
        $('#settings-bar2').css("display", 'block');
        $('#settings-bar1').css("display", 'none');
    }else {
        $('#settings-bar1').css("display", 'none');
        $('#settings-bar2').css("display", 'none');

    }
});
let adress;
$(document).on('click', '.set-status', function(e){
    t=event.target||event.srcElement;
    pos = e.target.id;
    if(e.target.id == 'set-pos1' || e.target.id == 'set-neu1' || e.target.id == 'set-neg1') {
        adress = '#status1';  
    } else if(e.target.id == 'set-pos2' || e.target.id == 'set-neu2' || e.target.id == 'set-neg2') {
        adress = '#status2';
    }
    
    $.ajax({
        url: '/../views/site/Need.php',
        type: 'POST',
        data: {'pos' : pos},
        success: function(res){
            console.log(adress)
            $(adress).removeClass('news-status-pos')
            $(adress).removeClass('news-status-neg')
            $(adress).removeClass('news-status-neu')
            $(adress).addClass(res);
            },
        error: function(){
            console.log("ajax error");
            },
    });
    let text;
    if(e.target.id == 'set-pos1' || e.target.id == 'set-pos2'){
        text = "Позитивный"
    }else if(e.target.id == 'set-neg1' || e.target.id == 'set-neg2'){
        text = 'Негативный'
    }else if(e.target.id == 'set-neu1' || e.target.id == 'set-neu2'){
        text = "Нейтральный"
    }
    
    $.ajax({
        url: '/../views/site/Need.php',
        type: 'POST',
        data: {'text' : text},
        success: function(res){
            $(adress).text(res)
            },
        error: function(){
            console.log("ajax error");
            },
    });
})
let firstName;
let firstText;
let secondName;
let secondText;

$(document).on('click', '.news-navigation-item', function(e){
    let butNum = e.currentTarget.id;
    if(false){
        console.log('error');
    }else if(butNum == 'news-button-id1'){
        firstName = $('#block0').attr('data-attr');
        firstText = $('#block10').attr('data-attr');
        secondName = $('#block1').attr('data-attr');
        secondText = $('#block11').attr('data-attr');
    }else if(butNum == 'news-button-id2'){
        firstName = $('#block2').attr('data-attr');
        firstText = $('#block12').attr('data-attr');
        secondName = $('#block3').attr('data-attr');
        secondText = $('#block13').attr('data-attr');
    }else if(butNum == 'news-button-id3'){
        firstName = $('#block4').attr('data-attr');
        firstText = $('#block14').attr('data-attr');
        secondName = $('#block5').attr('data-attr');
        secondText = $('#block15').attr('data-attr');
    }else if(butNum == 'news-button-id4'){
        firstName = $('#block6').attr('data-attr');
        firstText = $('#block16').attr('data-attr');
        secondName = $('#block7').attr('data-attr');
        secondText = $('#block17').attr('data-attr');
    }else if(butNum == 'news-button-id5'){
        firstName = $('#block8').attr('data-attr');
        firstText = $('#block18').attr('data-attr');
        secondName = $('#block9').attr('data-attr');
        secondText = $('#block19').attr('data-attr');
    }
    $.ajax({
        url: '/../views/site/Need.php',
        type: 'POST',
        data: {'firstName' : firstName},
        success: function(res){
            $('.first_name').text(res);
            },
        error: function(){
            console.log("ajax error");
            },
    });
    $.ajax({
        url: '/../views/site/Need.php',
        type: 'POST',
        data: {'firstText' : firstText},
        success: function(res){
            $('.first_text').text(res);
            console.log("ajax success");
            },
        error: function(){
            console.log("ajax error");
            },
    });$.ajax({
        url: '/../views/site/Need.php',
        type: 'POST',
        data: {'secondName' : secondName},
        success: function(res){
            $('.second_name').text(res);
            console.log("ajax success");
            },
        error: function(){
            console.log("ajax error");
            },
    });$.ajax({
        url: '/../views/site/Need.php',
        type: 'POST',
        data: {'secondText' : secondText},
        success: function(res){
            $('.second_text').text(res);
            console.log("ajax success");
            },
        error: function(){
            console.log("ajax error");
            },
    });
});
JS;
$this->registerJs($script1);