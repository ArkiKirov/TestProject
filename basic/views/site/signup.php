<?php
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;


?>
<?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'first_name') ?>
        <?= $form->field($model, 'last_name')->textInput() ?>
        <?= $form->field($model, 'username')->textInput() ?>

        <?= $form->field($model, 'password')->passwordInput() ?>
        

        <div class="form-group">
            <div class="offset-lg-1 col-lg-11">
                <?= Html::submitButton('Зарегаца', ['class' => 'btn btn-succcess']) ?>
            </div>
        </div>

<?php ActiveForm::end(); ?>
