<?php 

/**
* @var \App\Kernel\Session\SessionInterface $session;
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOgin</title>
    
</head>
<body>
    <div class="container">
        <h1>login</h1>
        <form action="/login" method="POST" >
            <?php if ($session->has('error')) {?>
                <div><?php 
                    echo $session->getFlash('error');
                    ?></div>
                <?php }?>
           
            <input type="text" name="email" >
            
            <p>password</p>
            
            <input type="password" name="password">
            
            <button >login</button>
        </form>
    </div>
</body>
</html>