<?php
/**
 * @var App\Kernel\View\ViewInterface $view
 */


?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="..\..\css\styles.css">
</head>
<body>
    
    <style>
        <?php
        include 'styles.css';  ?>
    </style>
    <header>
       
        <div class="container">
            <h1>Мой Интернет-магазин</h1>
            <nav>
                <ul>
                <li><a href="home">Главная</a></li>
                    <li><a href="catalog">Каталог</a></li>
                    <li><a href="about">О нас</a></li>
                    <li><a href="contacts">Контакты</a></li>
                    <li><a href="order">Заказ</a></li>
                 
                </ul>
            </nav>
        </div>
         <?php $view->component('logout')?>
    
    </header>