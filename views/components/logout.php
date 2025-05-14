<div class="logout">
         <?php if ($auth->check()){ ?>
            <h3>Пользователь:<?php echo $user['email']?></h3>
            <form action="/logout" method="post"></form>
            <?php }?>
         <button>Выход</button>
</div>