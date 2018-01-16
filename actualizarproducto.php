<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
    header("Location:index.php");
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Mi Carrito</title>
</head>
<body background="img/body.png">
<div class="container">

    <!-- Navbar
      ================================================== -->


    <div class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <div class="nav-collapse">
                    <ul class="nav">
                        <li class=""><a href="admin.php">ADMINISTRADOR DEL SITIO</a></li>


                    </ul>
                    <form action="#" class="navbar-search form-inline" style="margin-top:6px">

                    </form>
                    <ul class="nav pull-right">
                        <h2>Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </h2>
                        <li><a href="desconectar.php"> Cerrar Cesión </a></li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div>
        </div><!-- /navbar-inner -->
    </div>

    <!-- ======================================================================================================================== -->
    <div class="row">



        <div class="span12">

            <div class="caption">

                <!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
                <h2> Administración de productos registrados</h2>
                <div class="well well-small">
                    <hr class="soft"/>
                    <h4>Edición de productos</h4>
                    <div class="row-fluid">

                        <?php
                        extract($_GET);
                        require("connect_db.php");

                        $sql="SELECT * FROM productos WHERE id=$id";
                        //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
                        $ressql=mysqli_query($mysqli,$sql);
                        while ($row=mysqli_fetch_row ($ressql)){
                            $id=$row[0];
                            $producto=$row[1];
                            $precio=$row[2];
                            $vig=$row[3];
                            $empresa=$row[4];
                            $idioma=$row[5];
                            $edad=$row[6];
                        }



                        ?>

                        <form action="actualizarproducto1.php" method="post">
                            Id<br><input type="text" name="id" value= "<?php echo $id ?>"><br>
                            Producto<br> <input type="text" name="producto" value="<?php echo $producto?>"><br>
                            Precio<br> <input type="text" name="precio" value="<?php echo $precio?>"><br>
                            Vig<br> <input type="text" name="vig" value="<?php echo $vig?>"><br>
                            Empresa<br> <input type="text" name="empresa" value="<?php echo $empresa?>"><br>
                            Idioma<br> <input type="text" name="idioma" value="<?php echo $idioma?>"><br>
                            Edad<br> <input type="text" name="edad" value="<?php echo $edad?>"><br>

                            <br>
                            <input type="submit" value="Guardar" class="btn btn-success btn-primary">
                        </form>




                        <div class="span8">

                        </div>
                    </div>
                    <br/>



                    <!--EMPIEZA DESLIZABLE-->

                    <!--TERMINA DESLIZABLE-->





                </div>






                <!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
            </div>

        </div>
    </div>
</div><!-- /container -->
</body>
</html>