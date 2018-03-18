<div class="media">
    <div class="media-left">
        <a href="<?= \yii\helpers\Url::to(['news/view', 'id' => $model->id]) ?>">
            <img class="media-object" src="<?= $model->getImageUrl() ?>" alt="news-img" style="width: 100px; height: 100px;">
        </a>
    </div>
    <div class="media-body">
        <h4 class="media-heading"><strong><?= $model->title ?></strong></h4>
        <?= $model->short ?>
    </div>
</div>