<div class="panel panel-dark panel-latest-news">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-9">
                <div id="latest_new_content"></div>
            </div>
            <div class="col-md-3">
                <div class="list-group">
                    <?php foreach ($news as $k => $model) : ?>
                        <a href="<?= \yii\helpers\Url::to(['news/view', 'id' => $model->id]) ?>" class="latest-news-link list-group-item<?= ($k == 0 ? ' active' : '') ?>">
                            <?= $model->title ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->registerJs(<<<JS
$('.latest-news-link').eq(0).trigger('click');
JS
    , yii\web\View::POS_END, 'latest-news-handler'
);