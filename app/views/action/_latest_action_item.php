<div class="media">
    <div class="media-left">
        <img class="media-object" src="<?= $model->getImageUrl() ?>" alt="news-img" style="width: 100px; height: 100px;">
    </div>
    <div class="media-body">
        <h4 class="media-heading">
            <strong><?= $model->title ?></strong>
        </h4>
        <?= $model->note ?>
    </div>
</div>