<?php 
include('./assets/inc/funciones.php'); 

$pagina="inicio";
$tituloPagina="Online Store - Inicio";
include('./assets/inc/header.php'); 

?>

  
	<section>    
    
    <div class="jumbotron">
      <div class="container">
        <h1>Bienvenidos a Online Store RGM</h1>
        <p>Tu tienda online de confianza.</p>
        <p><a class="btn btn-success" href="">Ver más</a></p>
      </div>
    
    </div>

	</section>


  <section class="container">

    <div class="row">
      <?php
        echo pro_portada($ofertas);
      ?>
    </div>
  
  </section>

<?php include('./assets/inc/footer.php'); ?>