<?php $view->component("header") ?>

<main>
    <div class="container">
        <div class="product-card">
            <h2>Название товара</h2>
            <div class="product-details">
                <img src="/path/to/product-image.jpg" alt="Изображение товара" class="product-image">
                <div class="product-info">
                    <p><strong>Цена:</strong> 500 руб.</p>
                    <p><strong>Описание:</strong> Это описание товара. Здесь можно указать основные характеристики и преимущества.</p>
                    <form action="/add_to_cart.php" method="POST">
                        <input type="hidden" name="product_id" value="1">
                        <label for="quantity">Количество:</label>
                        <input type="number" id="quantity" name="quantity" value="1" min="1">
                        <button type="submit" class="btn btn-primary">Добавить в корзину</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $view->component("footer") ?>