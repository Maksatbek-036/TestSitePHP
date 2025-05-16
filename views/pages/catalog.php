<?php $view->component("header") ?>

    <main>
        <div class="container">
            <h2>Новинки</h2>
            <div class="products">
    <?php 

    for ($i = 0; $i < 9; $i++) {
        $view->component("product");
    }
    ?>
       
           

                
             
            </div>
        </div>
    </main>

    <?php $view->component("footer") ?>