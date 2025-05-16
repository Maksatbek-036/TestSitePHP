<?php $view->component('header')?>
<div  >


    <h1>Добавить товар</h1>
        <form  action="/admin/add" method="POST" enctype="multipart/form-data">
            <div>

                <label>Название товара:</label>
                <input type="text" id="name" name="name" required>
                <br><br>
                <style>
                    form input[type="text"], 
                    form input[type="file"], 
                    form .description {
                        padding: 8px;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        margin-top: 5px;
                        margin-bottom: 10px;
                        width: 100%;
                        box-sizing: border-box;
                        font-size: 16px;
                    }
                    form label {
                        font-weight: bold;
                        display: block;
                        margin-bottom: 5px;
                    }
                    form button[type="submit"] {
                        background-color: #4CAF50;
                        color: white;
                        padding: 10px 20px;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                        font-size: 16px;
                    }
                    form button[type="submit"]:hover {
                        background-color: #45a049;
                    }
                </style>
                <div>
    
                    <label >Изображение товара:</label>
                    <input type="file" id="image" name="image" required>
                </div>
                <br><br>
                <label>Цена товара:</label>
                <input type="text" id="text" name="price" required>
                <br><br>
            </div>
            <div>

                <label>Описание товара:</label>
                <input type="text" class="description" name="description" required>
            </div>
            <br><br>
            <button >Добавить</button>
        </form>

</div>

    <?php $view->component('footer') ?>