<?php

/**
 * @var \App\Kernel\View\View $view
 * @var \App\Kernel\Session\Session $session
 * */

?>
<?php $view->component("header") ?>

<div class="container">
    <h1>Add New Item</h1>
    <form action="/admin/catalog/add" method="post">
        <input type="text" name="name">
<?php if ($session->has('name')) {?>
<ul>
    <?php foreach ($session->getFlash('name') as $error)?>
    <li style="color:red" ><?php echo $error ?></li>
</ul>
<?php }?>
        
            
        
        <div>
            <button>s</button>
        </div>
    </form>
</div>
<?php $view->component("footer") ?>