<?php

$id=$_POST['id'];
$producto=$_POST['producto'];
$precio=$_POST['precio'];
$vig= $_POST['vig'];
$empresa=$_POST['empresa'];
$idioma=$_POST['idioma'];
$edad=$_POST['edad'];

require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
$checkproducto=mysqli_query($mysqli,"SELECT * FROM productos WHERE producto='$producto'");
$check_producto=mysqli_num_rows($checkproducto);
if($producto==$producto){
    if($check_producto>0){
        echo ' <script language="javascript">alert("Atencion, ya existe el producto designado, verifique sus datos");</script> ';

        echo "<script>location.href='admin.php'</script>";
    }else{

        //require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
        mysqli_query($mysqli,"INSERT INTO productos VALUES('$id','$producto','$precio','$vig','$empresa','$idioma','$edad')");
        //echo 'Se ha registrado con exito';
        echo ' <script language="javascript">alert("Producto registrado con éxito");</script> ';

        echo "<script>location.href='admin.php'</script>";

    }

}else{
    echo 'Es incorrecto';

    echo "<script>location.href='admin.php'</script>";
}


?>