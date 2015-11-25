<?php

use yii\grid\GridView,
    yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = $publisher['name'].'\'s books';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12">
                <h2><?=$publisher['name']?>'s books</h2>

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        'id',
                        'name',
                        [
                            'attribute' => 'author',
                            'value' => function ($data) {
                                return Html::a($data['author'], ['author', 'id' => $data['author_id']]);
                            },
                            'format' => 'raw'
                        ],
                        'price',
                        'year'
                        // ...
                    ],
                ]) ?>
            </div>
        </div>

    </div>
</div>
