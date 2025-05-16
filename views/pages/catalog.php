<?php $view->component("header") ?>
<?php 
/**
 * @var App\Models\Product $products
 */
?>
    <main>
        <div class="container">
            <h2>Новинки</h2>
            <div class="products">
    

   <div class="product">
                    <img src=<?php $products->getImage();?> alt="Товар 2">
                    <h3>Ноутбук Lenovo V15-82C3 Intel N4020 1.1-2.8GHz, 4GB DDR4, 1TB, 15.6" FHD, Iron Gray, Eng+Rus</h3>
                    <p></p>
                    <span class="price"></span>
                    <button  >Купить</button>
                    
               </a>
                </div>
    
       
           

                
             
            </div>
        </div>
    </main>

    <?php $view->component("footer") ?>