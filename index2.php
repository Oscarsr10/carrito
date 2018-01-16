<?php

 require_once("class/class.php");
 $obj=new Trabajo();
 $productos=$obj->getProductos();
if (@!$_SESSION['user']) {
    header("Location:index.php");
}elseif ($_SESSION['rol']==1) {
    header("Location:admin.php");
}

?>

<html>
   <head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Mi carrito</title>
       <link rel="stylesheet" type="text/css" href="css/estilos.css">
       <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
   </head>
         <body background="img/body2.png">
           <div class="cabez">
            <div id="header">
                <?php require_once("header.php") ?>
               <div id="logo">
                   <a href="index2.php"><img src="img/logo.png"></a>
                   <a class="btn" href="d/index.php">Galeria de imágenes</a>
                   <a class="btn" href="autocompletar/index.php">Buscar</a>
               </div>

            </div>
          </div>
              <div id="principal">
                <div id="content">
                    <h2>Bienvenido <strong><?php echo $_SESSION['user'];?></strong></h2>
                    <li><a href="desconectar.php"> Cerrar Cesión </a></li>
                    <?php

                     foreach ($productos as $pro):
                    ?>
                      <div class="fotos">
                           <h3><?php echo $pro['producto']; ?></h3>
            						   <img src="fotos/<?php echo $pro['name'].".jpg"; ?>">
                           <p><?php echo $pro["vig"]; ?></p>
                           <p><?php echo $pro["precio"]; ?></p>
                           <a class="btn" href="pro.php?id=<?php echo $pro['id']; ?>">detalle</a>
                      </div>
				          	 <?php
                          endforeach
                    ?>
                </div>
              </div>
    </body>
</html>