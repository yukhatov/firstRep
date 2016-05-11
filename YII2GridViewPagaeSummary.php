<?php
use kartik\grid\GridView;
use kartik\grid\DataColumn;
?>

<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pjax'=>false,
        'showPageSummary' => true,
        'export' => [
            'fontAwesome' => true
        ],
        'columns' => [
            'upc_short'=>[
                    'class' => DataColumn::className(),
                    'attribute' => 'UPC Short',
                    'pageSummary' => true,
                    'value' => function($dataProvider)
                    {
                        return $dataProvider->count_items - $dataProvider->count_items_upc;
                    }
            ],

            ['class' => 'kartik\grid\ActionColumn'],
        ]
    ]);
?>