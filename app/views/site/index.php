<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\models\Feedback;

/* @var $this yii\web\View */
/* @var $feedback app\models\Feedback */

//$this->title = 'My Yii Application';
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Контактная форма</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <p>
                    Соображения высшего порядка, а также консультация с профессионалами из IT требует от нас анализа
                    направлений прогрессивного развития! Равным образом постоянный количественный рост и сфера нашей
                    активности позволяет выполнить важнейшие задания по разработке модели развития! Значимость этих
                    проблем настолько очевидна, что повышение уровня гражданского сознания играет важную роль в
                    формировании новых предложений.
                </p>
                <p>
                    Повседневная практика показывает, что постоянное информационно-техническое обеспечение нашей
                    деятельности в значительной степени обуславливает создание позиций, занимаемых участниками в
                    отношении поставленных задач. Практический опыт показывает, что начало повседневной работы по
                    формированию позиции обеспечивает широкому кругу специалистов участие в формировании экономической
                    целесообразности принимаемых решений. Значимость этих проблем настолько очевидна, что сложившаяся
                    структура организации требует определения и уточнения системы обучения кадров, соответствующей
                    насущным потребностям?
                </p>
            </div>
            <div class="col-md-6">
                <div class="well well-sm">
                    <?php echo $this->render('_feedback_form', ['model' => $feedback]) ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="well">С другой стороны сложившаяся структура организации играет важную роль в формировании модели развития!
    Таким образом, постоянный количественный рост и сфера нашей активности позволяет оценить значение существующих
    финансовых и административных условий. Практический опыт показывает, что реализация намеченного плана развития
    требует от нас системного анализа системы масштабного изменения ряда параметров! Таким образом, курс на
    социально-ориентированный национальный проект в значительной степени обуславливает создание соответствующих условий
    активизации! Равным образом консультация с профессионалами из IT напрямую зависит от новых предложений?
</div>
<?php echo $this->render('_latest_news', ['news' => $news]) ?>
<?php echo $this->render('_latest_actions', ['actions' => $actions]) ?>