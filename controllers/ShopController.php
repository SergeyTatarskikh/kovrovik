<?php

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use yii\web\Controller;

class ShopController extends Controller
{
    public function actionIndex()
    {
        $categories = Category::find()->all();
        $products = Product::find()->all();
        return $this->render('index', compact('categories', 'products'));
    }
}