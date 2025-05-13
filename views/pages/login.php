<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOgin</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>login</h1>
        <form action="/login" method="POST">
            <p>email</p>
            <?php if ($session->has('error')) {?>
            <p style="color: red;">
                <?php echo $session->getFlash('error') ?>
            </p>
            <?php }?>

            <input type="email" name="email" >
            
            <p>password</p>
            
            <input type="password" name="password">
            
            <button >login</button>
        </form>
    </div>
</body>
</html>