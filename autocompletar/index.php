<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
   		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
   		<link href="css/jqueryui.css" type="text/css" rel="stylesheet"/>
        <script>
	       	$(document).ready(function(){ 	
				$( "#id" ).autocomplete({
      				source: "buscarproducto.php",
      				minLength: 1
    			});
    			
    			$("#id").focusout(function(){
    				$.ajax({
    					url:'producto.php',
    					type:'POST',
    					dataType:'json',
    					data:{ id:$('#id').val()}
    				}).done(function(respuesta){
    					$("#producto").val(respuesta.producto);
    					$("#precio").val(respuesta.precio);
    					$("#vig").val(respuesta.vig);
						$("#empresa").val(respuesta.empresa);
						$("#idioma").val(respuesta.idioma);
						$("#edad").val(respuesta.edad);
    				});
    			});    			    		
			});
        </script>
                    
    </head>
    <body background="css/images/body.png">
        
       	<form>
       		<label for="id">ID:</label>
	    	<input type="text" id="id" name="id" value=""/>
		    <label for="producto">Producto:</label>
		    <input type="text" id="producto" name="producto" value=""/>
		    <label for="precio">Precio:</label>
    		<input type="text" id="precio" name="precio" value=""/>
    		<label for="vig">Vig:</label>
			<input type="text" id="vig" name="vig" value=""/>
			<label for="empresa">Empresa:</label>
			<input type="text" id="empresa" name="empresa" value=""/>
			<label for="idioma">Idioma:</label>
			<input type="text" id="idioma" name="idioma" value=""/>
			<label for="edad">Edad:</label>
			<input type="text" id="edad" name="edad" value=""/>
			<br>
			<a class="button" href="../index2.php">Volver al carrito</a>
		</form>
    </body>
</html>
