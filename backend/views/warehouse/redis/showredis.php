<?php

use yii\grid\GridView;
use yii\helpers\Html;
?>





<div class="report-index">

    <?php $language = isset($_SESSION['successredis']) ? $_SESSION['successredis'] : null; if($language!==null) { ?>
    <div class="alert alert-success" role="alert">
        <?php echo $language; ?>
    </div>
    <?php } ?>

    <?= GridView::widget(
        
        [
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'vendor',
            'measuare',
            'container',
            'receiving',
            'styno',
            // 'created_by',

           [ 'class' => 'yii\grid\ActionColumn',

    'template' => '{view} {update} {delete}',

    'buttons' => [
        
        'view' => function ($url, $model, $key) {

            return  Html::a('View', 'viewredis?id='.$model->id, ['class' => 'bg-pink  label']);

        },
        'update' => function ($url, $model, $key) {

            return  Html::a('Update', 'updateredis?id='.$model->id, ['class' => 'bg-blue label']);

        },

        'delete' => function ($url, $model, $key) {
          
                Yii::t('backend/views/warehouse/redis', 'Are you sure you want to delete this item?');
            
           
            return  Html::a('Delete', 'deleteredis?id='.$model->id, 
            ['class' => 'bg-red label',     'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],]);

        }

    ]
           ]
],
      
    ]); ?>

</div>