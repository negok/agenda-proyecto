<?php 
session_start();
date_default_timezone_set("America/Mexico_City");
        if (!isset($_SESSION['u_name'])){
              header('Location: index.html');
    } 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Agenda</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/960.css" type="text/css" media="screen" charset="utf-8" />
    <link rel="stylesheet" href="css/template.css" type="text/css" media="screen" charset="utf-8" />
    <link rel="stylesheet" href="css/colour.css" type="text/css" media="screen" charset="utf-8" />
    <link type="text/css" rel="stylesheet" href="css/jquery-ui-1.8.4.custom.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
   
  </head>
  <body>

  
    

  <div id="content" class="container_16 clearfix">
    <div class="row">

    <h1 id="head" align="center">Agenda</h1>

    <p><img align="right" src="img/inicio.png" width="104" height="59"  /></p>
     <br>


    <div class="btn-group">  
      <div class="dropdown" >
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Contactos
        <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" >

          <li><a href="inicio.php">Mostrar Todos</a></li>
          <li><a href="agregar.php"> Agregar Contacto</a> </li>
          <li><a href="buscar.php">Buscar o Editar Contacto</a> </li> 
          <li><a href="mensaje.php">Enviar mensaje</a> </li>           
        </ul>
        </div>
    </div>

    <div class="btn-group">    
       <div class="dropdown" >
         <button class="btn btn-default dropdown-toggle" type="button" id="Dos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Sesión
        <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="Dos" >
          <li><a href="php/logout.php">Cerrar sesion</a></li>
          
        </ul>
      </div>
    </div> 

  </div>
 </div>  

<div id="content" class="container_16 clearfix">

   <h1>Buscar </h1>
    <div class="grid_5">
          <p> 
                  
                      <input  name="buscar_nombre" type="text" id="buscar_nombre" placeholder="Nombre Contacto" />
       </p>
     </div> 
     
      <div class="grid_16">
     <p>
           <h1></h1>  
       </p>
     </div> 

     
     <div class="grid_5">
        <p>  
          
        <input class="form-control" id="email"  name="email" type="hidden"  placeholder="Dirección de correo" required="required" />
        <input class="form-control" id="asunto"  name="asunto" type="text"  placeholder="Asunto" required="required" />
        </p>
     </div>
      <br>

     <div class="grid_5">
        <p> 
          <!--<input class="form-control" id="nombre"  name="nombre" type="text" pattern="[a-zA-Z]" title="El nombre solo debe contener letras" placeholder="Nombre Contacto" />-->
          <textarea  id="mensaje" name="mensaje " rows="10" cols="80" pattern="[a-zA-Z]" title="El nombre solo debe contener letras y números" ></textarea>
        </p>
     </div>
     

      <div class="grid_16">
     <p class="submit">
                       
                       <input type="submit" id="btnEnviar" name="btnEnviar" value="Enviar Mensaje" />
                       
       </p>
     </div>

</div>


<div id="foot">
     <a href="#">Declaración de Privacidad </a> | <a href="#"> Condiciones de uso</a> |     
  </div>

  <script language="javascript" type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
  <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.8.4.custom.min.js"></script>
  <script language="javascript" type="text/javascript" src="js/enviomensaje.js"></script>


  <script type="text/javascript">
 $(function(){
   $('#buscar_nombre').autocomplete({
    source : 'ajaxcorreo.php',
    select : function(event, ui){
     

    email = ui.item.email;
    $('#email').val(email);



  }
  });
  
  });
  </script>


  
</body>
</html>