<?php $view->component('header'); ?>


    <main>
        <div class="container">
            <h2>Популярные товары</h2>
            <div class="products">
                <?php 
                for ($i = 0; $i < 9; $i++) {
                    $view->component('product');
                }
                ?>
            </div>

            <section class="reviews">
                <h2>Отзывы наших клиентов</h2>
                <div class="review">
                    <p><strong>Иван:</strong> Отличный магазин, товары качественные!</p>
                </div>
                <div class="review">
                    <p><strong>Мария:</strong> Быстрая доставка, рекомендую!</p>
                </div>
                <div class="review">
                    <p><strong>Алексей:</strong> Хороший выбор товаров, буду заказывать еще.</p>
                </div>
            </section>
        </div>
    </main>

    <?php 

 $view->component('footer'); ?>
