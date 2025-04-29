<?php $view->component("header") ?>

<main>
    <div class="container">
        <h2>Корзина</h2>
        <table>
            <thead>
                <tr>
                    <th>Товар</th>
                    <th>Количество</th>
                    <th>Цена</th>
                    <th>Итого</th>
                    <th>Действие</th>
                </tr>
            </thead>
            <tbody>
                <!-- Пример товара в корзине -->
                <tr>
                    <td>Товар 1</td>
                    <td>2</td>
                    <td>500 руб.</td>
                    <td>1000 руб.</td>
                    <td><button>Удалить</button></td>
                </tr>
                <!-- Добавьте больше товаров здесь -->
            </tbody>
        </table>
        <div class="cart-total">
            <h3>Общая сумма: 1000 руб.</h3>
            <button>Оформить заказ</button>
        </div>
    </div>
</main>

<?php $view->component("footer") ?>