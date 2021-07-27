<!DOCTYPE html>

<html>
    <head>
        <title>Remeras Strno </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/styles.css"/>
    </head>
    <body>
        <div id="conteiner">
            <!-- Cabecera-->
            <header id="header" >
                <div id="logo">
                    <img src="assets/img/camiseta.png" alt="camiseta logo"/>
                    <a href="index.php">Remeras Strno</a>
                </div>
                <div class="clearfix"></div>
            </header>

            <!-- Menu-->
            <nav id="menu">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="">categorias</a></li>
                </ul>
            </nav>

            <div id="content">
                <!-- Barra lateral-->
                <aside id="lateral">

                    <div id="login" class="block_aside">
                        <h3>Entrar a la web</h3>
                        <form action="" method="POST">
                            <label for="email">Email</label>
                            <input type="email" name="email" />
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" />
                            <input type="submit" value="Enviar"/>
                        </form>
                        <ul>
                            <li><a href="">Mis pedidos</a></li>
                            <li><a href="">Gestionar pedidos</a></li>
                            <li><a href="">Gestionar categorias</a></li>
                        </ul>
                    </div>

                </aside>
                <!-- contenido central-->
                <div id="central">
                    <h1>Productos destacados</h1>
                    <div class="product">
                        <img src="assets/img/camiseta.png"/>
                        <h2>Remera Azul</h2>
                        <p> 600 pe´</p>
                        <a href="" class="button">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/camiseta.png"/>
                        <h2>Remera Azul</h2>
                        <p> 600 pe´</p>
                        <a href="" class="button">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/camiseta.png"/>
                        <h2>Remera Azul</h2>
                        <p> 600 pe´</p>
                        <a href="" class="button">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/camiseta.png"/>
                        <h2>Remera Azul</h2>
                        <p> 600 pe´</p>
                        <a href="" class="button">Comprar</a>
                    </div>
                </div>

                <!-- Pie de pagina-->
                <footer id="footer">
                    <p>
                        Desarrollado por Ivan Tripolone &copy;
                    </p>
                </footer>

                <div></div>
            </div>
    </body>
</html>

