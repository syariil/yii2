<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\referensi\RefAgama */
?>
<div class="ref-agama-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'AGAMA',
            'CREATE_AT',
            'UPDATE_AT',
        ],
    ]) ?>

</div>
