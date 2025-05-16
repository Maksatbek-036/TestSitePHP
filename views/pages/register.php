<?php 
/**
 * @var \App\Kernel\Session\SessionInterface;
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <form action="/register" method="POST">
            <p>email</p>
            <input type="email" name="email" >
            <?php if ($session->has('email')) {?>
<ul>
    <?php foreach ($session->getFlash('email') as $error)?>
    <li style="color:red" ><?php echo $error ?></li>
</ul>
<?php }?>
            <p>password</p>
            <input type="password" name="password">
            <?php if ($session->has('password')) {?>
<ul>
    <?php foreach ($session->getFlash('password') as $error)?>
    <li style="color:red" ><?php echo $error ?></li>
</ul>
<?php }?>
            <button >register</button>
        </form>
    </div>
</body>
</html>