<?php
use yii\helpers\Html;
use yii\grid\GridView;
use common\components\pagination\CustomPagination;
use yii\widgets\LinkPager;
?>
<div class="report-index">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'vendor',
            'measuare',
            'container',
            'receiving',
            'styno',
            // 'created_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <div id="custom-pagination">

    </div>
</div>