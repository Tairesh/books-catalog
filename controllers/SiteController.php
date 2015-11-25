<?php

namespace app\controllers;

use Yii,
    yii\web\Controller,
    yii\data\SqlDataProvider;

class SiteController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        $count = Yii::$app->db->createCommand('SELECT COUNT(*) FROM books')->queryScalar();
        $dataProvider = new SqlDataProvider([
            'sql' => 'SELECT books.*,
                        authors.first_name || " " || authors.last_name author,
                        publishers.name publisher 
                    FROM books 
                    LEFT JOIN authors 
                        ON authors.id = books.author_id
                    LEFT JOIN publishers 
                        ON publishers.id = books.publisher_id',
            'totalCount' => $count,
            'pagination' => [
                'pageSize' => 5,
            ],
            'sort' => [
                'defaultOrder' => ['author' => SORT_ASC],
                'attributes' => ['name', 'author', 'publisher', 'price', 'year']
            ]
        ]);
        return $this->render('index', ['dataProvider' => $dataProvider]);
    }
    
}
