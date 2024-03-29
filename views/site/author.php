<?php

use yii\grid\GridView,
    yii\helpers\Html,
    yii\widgets\Pjax;

/* @var $this yii\web\View */
$this->title = $author['first_name'].' '.$author['last_name'].'\'s books';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12">
                <h2><?=$author['first_name'].' '.$author['last_name']?>'s books</h2>
                
                <?php Pjax::begin(['id' => 'books-author']); ?>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        'id',
                        'name',
                        [
                            'attribute' => 'publisher',
                            'value' => function ($data) {
                                return Html::a($data['publisher'], ['publisher', 'id' => $data['publisher_id']]);
                            },
                            'format' => 'raw'
                        ],
                        'price',
                        'year'
                        // ...
                    ],
                ]) ?>
                <?php Pjax::end(); ?>
            </div>
        </div>

    </div>
</div>
