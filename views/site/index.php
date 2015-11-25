<?php

use yii\grid\GridView,
    yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Books Catalog Index';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12">
                <h2>Books index</h2>

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
                        'author',
                        'publisher',
                        'price',
                        'year'
                        // ...
                    ],
                ]) ?>
            </div>
        </div>

    </div>
</div>
