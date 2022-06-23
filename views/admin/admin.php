
<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
    <h1>URL's</h1>
    <ul>
        <?php foreach ($url as $url): ?>
            <li>
                <?= Html::encode("id = {$url->id} | дата создания = {$url->date} | url = {$url->url} 
                | частота проверки = $url->frequency
                | количество повторов = {$url->count}" ) ?>:

            </li>
        <?php endforeach; ?>
    </ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>