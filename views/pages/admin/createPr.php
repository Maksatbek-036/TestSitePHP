<?php $view->component('header')?>
<h1>Добавить товар</h1>
    <form action="/admin/catalog/store" method="POST" enctype="multipart/form-data">
        <label for="name">Название товара:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="image">Изображение товара:</label>
        <input type="file" id="image" name="image" required>
        <br><br>
        <button type="submit">Добавить</button>
    </form>

    <?php $view->component('footer') ?>