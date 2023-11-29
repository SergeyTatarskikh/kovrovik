<?php

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use app\models\Basket;
use Codeception\Lib\Connector\Yii2;
use Yii;
use yii\web\Controller;
use yii\web\Response;

class ShopController extends Controller
{

    public function actionIndex()
    {
        $categories = Category::find()->all();
        $products = Product::find()->all();
        return $this->render('index', compact('categories', 'products'));
    }

    public function actionCatalog()
    {
        $products = Product::find()->all();
        return $this->render('catalog', compact('products'));
    }

    public function actionBasket()
    {
        $baskets = Basket::find()->all();

        // Получаем массив идентификаторов продуктов из таблицы "baskets"
        $productIds = array_column($baskets, 'id_product');

        // Используем условие "IN" для выборки только нужных продуктов из таблицы "products"
        $products = Product::find()->where(['id_product' => $productIds])->all();

        return $this->render('basket', compact('products', 'baskets'));
    }

    public function actionGood($id)
    {
        $products = Product::find()->all();
        $product = Product::findOne($id); // Получаем элемент Product с указанным id
        return $this->render('good', compact('product', 'products'));
    }

    public function actionAddbasket($id, $amount)
    {
        $basket = new Basket();
        $basket->id_product = $id;
        $basket->amount = $amount;
        $basket->save();

    }

    public function actionSendmail()
    {
        $request = Yii::$app->request;

        // Get form data
        $name = htmlspecialchars(trim($request->post('name')));
        $phone = htmlspecialchars(trim($request->post('phone')));
        $email = htmlspecialchars(trim($request->post('email')));
        $address = htmlspecialchars(trim($request->post('address')));
        $comment = htmlspecialchars(trim($request->post('comment')));

        // Get shopping cart items
        $products = Product::find()->all(); // Replace 'Product' with your actual model class
        $baskets = Basket::find()->all(); // Replace 'Basket' with your actual model class

        // Prepare email message
        $to = 'sergey.tatarskikh2@gmail.com';
        $subject = 'Новый заказ';
        $message = "Имя: $name\nТелефон: $phone\nEmail: $email\nАдрес доставки: $address\nКомментарий: $comment\n\n";

        // Add shopping cart items to the email message
        foreach ($products as $product) {
            foreach ($baskets as $basket) {
                if ($product->id_product === $basket->id_product) {
                    $message .= "Товар: {$product->name}\n";
                    $message .= "Количество: {$basket->amount}\n";
                    $message .= "Цена: {$product->price} руб.\n\n";
                }
            }
        }

        // Send email
        $send = mail($to, $subject, $message);

        if ($send) {
            // Clear the 'basket' table
            Basket::deleteAll();

            sleep(1);
            return $this->redirect(['shop/index']);
        } else {
            echo 'Ошибка при оформлении покупки.';
            sleep(5);
            return $this->redirect(['shop/index']);
        }
    }

    public function actionClearbasket(){
        Basket::deleteAll();
    }

    public function actionClearbasketone($id)
    {
        $basket = Basket::findOne($id);

        if ($basket) {
            $basket->delete(); // Удалить запись
        }

    }

    public function actionService()
    {

        return $this->render('service');
    }

    public function actionHowbuy()
    {

        return $this->render('howbuy');
    }

    public function actionAbout()
    {

        return $this->render('about');
    }

    public function actionContact()
    {

        return $this->render('contact');
    }










}