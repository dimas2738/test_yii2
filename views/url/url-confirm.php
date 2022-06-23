<?php
use yii\helpers\Html;
?>
<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>URL</label>: <?= Html::encode($model->url) ?></li>
    <li><label>Frequency</label>: <?= Html::encode($model->frequency) ?></li>
    <li><label>Count</label>: <?= Html::encode($model->count) ?></li>
</ul>