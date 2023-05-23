<?php
    use yii\grid\GridView;
?>
<?=
    GridView::widget([
        'dataProvider' => $dataProvider, 
        'columns' => [
            'id',
            'nim',
            'nama',
            'kelas'
        ]
        ]);
    
    
    GridView::widget([
        'dataProvider' => $dataProvider, 
        'filterModel' => $searchModel,
        'columns' => [
            ['class'=> 'yii\grid\SerialColumn'],
            'id',
            'nim',
            'nama',
            'kelas',
            'jurusan',
            'profil128.foto profil',

            ['class'=> 'yii\grid\ActionColumn'],
        ],
    ]); ?>

