<?php
/**
 * @var App\Kernel\Auth\AuthInterface $auth;
 * 
 */
$user=$auth->user();

?>
<div class="isAuth">
       <?php if ($auth->check()) {?>
            <h3>Пользователь:<?php echo $user['email'];?> </h3>
            <form action="/logout" method="post">
 <button>Выход</button>
            </form><?php }?>
            
            
        
        
</div>