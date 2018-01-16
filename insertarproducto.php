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
                    <h4>Inserción de productos</h4>
                    <div class="row-fluid">

                        <form method="post" action="insertarproducto1.php" >
                            <fieldset>
                                <legend  style="font-size: 18pt"><b>Registro</b></legend>
                                <div class="form-group">
                                    <label style="font-size: 14pt"><b>Id</b></label>
                                    <input type="text" name="id" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label style="font-size: 14pt"><b>Producto</b></label>
                                    <input type="text" name="producto" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label style="font-size: 14pt; color: #FFFFFF;"><b>Precio</b></label>
                                    <input type="text" name="precio" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label style="font-size: 14pt; color: #FFFFFF;"><b>Vig</b></label>
                                    <input type="text" name="vig" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label style="font-size: 14pt"><b>Empresa</b></label>
                                    <input type="text" name="empresa" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label style="font-size: 14pt"><b>Idioma</b></label>
                                    <input type="text" name="idioma" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label style="font-size: 14pt"><b>Edad</b></label>
                                    <input type="text" name="edad" class="form-control"/>
                                </div>

                    </div>

                    <input  class="btn btn-danger" type="submit" name="submit" value="Insertar"/>

                    </fieldset>
                    </form>
                </div>




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
