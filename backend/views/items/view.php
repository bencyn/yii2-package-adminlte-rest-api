<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Items */
?>
<div class="items-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'upc_ean_isbn',
            'item_name',
            'size',
            'description:ntext',
            'avatar',
            'cost_price',
            'selling_price',
            'quantity',
            'type',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
