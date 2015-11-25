<?php

use yii\grid\GridView;

/* @var $this yii\web\View */
$this->title = 'Books Catalog Index';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12">
                <h2>Heading</h2>

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        'id',
                        'name',
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
