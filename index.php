<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="index.css">
    <script type="text/javascript" src="jquery/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script src="index.js"></script>
</head>
<body>
    
    <div id="container">
        <section id="AreaLogin">
            <form action="" method="post">
                <ul>
                    <li><h3>LOGIN</h3></li>
                    <li><input type="text" placeholder="Usuario" name="usuario_Login" id="usuario_Login"></li>
                    <li><input type="password" placeholder="Senha" name="senha_Login" id="senha_Login"></li>
                    <li><input type="submit" value="Logar"></li>
                </ul>
            </form>
        </section>

        <section id="AreaRegistro">
            <form action="" method="post"> 
                <ul>
                    <li><h3>REGISTRE-SE</h3></li>
                    <li><input type="text" placeholder="Usuario" name="usuario_Registro" id="usuario_Registro"></li>
                    <li><input type="email" placeholder="Email" name="email_Registro" id="email_Registro"></li>
                    <li><input type="password" placeholder="Senha" name="senha_Registro" id="senha_Registro"></li>
                    <li><input type="submit" value="Registrar"></li>
                </ul>
            </form>
        </section>
    </div>
</body>
</html>