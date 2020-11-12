<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/login.css">
    <link rel="icon" type="image/png" href="media/shortlogo.png">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>
<div id="color">
    <img src="media/logologin.png" alt="Logo" id="imgPcs">
</div>
<div id="login">
    <div class="btncambiar">
        <input type="button" value="Sign in" class="btnSignin">
        <input type="button" value="Sign up" class="btnSignup">
    </div>
    <img src="media/logologin.png" alt="Logo" class="imgMovil">
    <form action="php/code.php" method="post">
        <h1>Login</h1>
        <i class="fa fa-user-circle">&nbsp;<input type="text" name="username" class="username" placeholder="Username"></i>
        <i class="fa fa-lock">&nbsp;<input type="password" name="password" class="password" placeholder="Password"></i>
        <div id="errorLog">
        <?php
        // Si el usuario ha intentado acertar un número mostramos el mensaje
        if(isset($errorLog)) {
            ?>
            <p> <?= $errorLog ?> </p>
        <?php } ?>
        </div>

        <input type="submit" value="Sign in">
        <input type="button" value="Sign up" class="btnSignmbl" >
    </form>
    <p class="newaccount">Dont have an account? <a href=""> Enter as a guest</a></p>
</div>
<div id="signup">
    <div class="btncambiar">
        <input type="button" value="Sign in" class="btnSignin">
        <input type="button" value="Sign up" class="btnSignup">
    </div>
    <img src="media/logologin.png" alt="Logo" class="imgMovil">
    <form action=php/code.php" method="post">
        <h1>Sign up</h1>
        <i class="fa fa-user-circle">&nbsp;<input type="text" required name="username" class="username" placeholder="Username"></i>
        <i class="fa fa-lock">&nbsp;<input type="password" required name="password" class="password" placeholder="Password"></i>
        <i class='far fa-address-card'>&nbsp;
            <input type="text" name="nombre" class="nombre" required placeholder="Nombre"></i>
        <i class='fas fa-address-card'>&nbsp;
            <input type="text" name="apellido" class="apellido" required placeholder="Apellido"></i>
        <i class="fa fa-at">&nbsp;
            <input type="email" name="email" class="email" required placeholder="Correo electronico"></i>
        <i class="fa fa-file-image-o" id="fotoperfil">&nbsp;
            <input type="file" name="fotoperfil" class="fotoperfil" value="foto de perfil"></i>
        <input type="submit" value="Sign up">
        <input type="button" value="Sign in" class="btnSignmbl">
    </form>
    <p class="newaccount">Dont have an account? <a href=""> Enter as a guest</a></p>
</div>
</body>
</html>