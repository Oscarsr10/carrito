<?php

   require_once("class/class.php");

   $obj=new Trabajo();
   $id=strip_tags($_GET["id"]);
   $productos=$obj->getProductosPorId($id);

?>

<html>
   <head>
		<title>..::Mi carrito::..</title>
       <link rel="stylesheet" type="text/css" href="css/estilos.css">
       <link rel="stylesheet" type="text/css" href="css/detalle.css">
       <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
       <script type="text/javascript" src="js/funciones.js"></script>
    </head>
         <body background="img/body.png">
           <div class="cabez">
              <div id="header">
                <?php require_once("header.php") ?>
                 <div id="logo">
                    <a class="brand" href="index2.php">Blu-ray Serrano</a>
                 </div>
              </div>
           </div>
           <div id="principal">
           <!--********************menu****************************************-->
            <!--********************contenedor******************************** -->
              <div id="content">
                  <h2>Bienvenido <strong><?php echo $_SESSION['user'];?></strong></h2>
                  <li><a href="desconectar.php"> Cerrar Cesión </a></li>
                    <div id="contenedor">
                          <br>
                          <?php foreach ($productos as $pro):?>
                                <div id="foto_detalle">
                                   <img src="fotos/<?php echo $pro["name"]."big.jpg"; ?>">
                                </div>
                                <div id="detalles">
                                    <p><?php echo $pro["producto"]; ?></p>
                                    <p><?php echo $pro["vig"]; ?></p>
                                    <p><?php echo $pro["precio"]; ?></p>
                                    <p><?php echo $pro["empresa"]; ?></p>
                                    <p><?php echo $pro["idioma"]; ?></p>
                                    <p><?php echo $pro["edad"]; ?></p>
                                    <button onclick="add2(<?php echo $pro['id'];?>,'add');" class="btn success">Comprar</button>
                                </div>
                          <?php endforeach; ?>
                    </div>
              </div>
            </div>
      </body>
</html>