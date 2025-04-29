<?php $view->component("header") ?>

    <main>
        <div class="container">
            <h2>Контакты</h2>
            <p>Свяжитесь с нами, если у вас есть вопросы или предложения:</p>
            <ul>
                <li><strong>Телефон:</strong> +996 220 30 39 36</li>
                <li><strong>Email:</strong> info@shop.ru</li>
                <li><strong>Адрес:</strong> г. Бишкек, ул. Исхак Разаков</li>
            </ul>
            <h3>Форма обратной связи</h3>
            <form action="support" method="post">
                <label for="name">Ваше имя:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Ваш Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Сообщение:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                
                <button type="submit">Отправить</button>
            </form>
        </div>
    </main>

    <?php $view->component("footer") ?>