<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Feedback */

$this->registerJs(<<<JS
$(document).on("beforeSubmit", "#feedback-form", function () {
    var form = $(this);
    if (form.find('.has-error').length) {
        return false;
    }
    // submit form
    $.ajax({
    url    : form.attr('action'),
    type   : 'post',
    data   : form.serialize(),
    success: function (response) {
        form[0].reset();
        form.before('<p>Спасибо...</p>');
        form.find('button').prop('disabled', true);
    },
    error  : function () {
        console.log('internal server error');
    }
    });
    return false;
});
JS
    , yii\web\View::POS_END, 'feedback-form-handler'
);
?>
<?php $form = ActiveForm::begin([
    'id' => 'feedback-form',
    'action' => \yii\helpers\Url::to(['feedback']),
    'enableAjaxValidation' => true,
    'validationUrl' => \yii\helpers\Url::toRoute(['validate-feedback']),
]); ?>

<?= $form->field($model, 'name') ?>

<?= $form->field($model, 'phone') ?>

<?= $form->field($model, 'comment')->textarea(['rows' => 2]) ?>

    <div class="form-group text-right">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>