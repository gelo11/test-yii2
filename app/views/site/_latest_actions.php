<div class="panel panel-dark panel-latest-actions" id="latest_actions">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-9">
                <div id="latest_action_content"></div>
            </div>
            <div class="col-md-3">
                <div class="list-group">
                    <?php foreach ($actions as $k => $model) : ?>
                        <a href="<?= \yii\helpers\Url::to(['action/view', 'id' => $model->id]) ?>" class="latest-action-link list-group-item<?= ($k == 0 ? ' active' : '') ?>">
                            <?= $model->title ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>