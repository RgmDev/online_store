<?php 
include('./assets/inc/funciones.php'); 

$pagina="productos";
$tituloPagina="Online Store - Productos";
include('./assets/inc/header.php'); 
?>
	<section>
		
		<h1>PRODUCTOS</h1>

	</section>

	<section class="container">

	<div class="row">
	<?php
		
		echo pro_productos($ofertas);
		
	?>
	</div>

	</section>

<?php include('./assets/inc/footer.php'); ?>