<?php 
include('./assets/inc/funciones.php'); 

$pagina="producto";
$tituloPagina="Online Store - Producto";
include('./assets/inc/header.php'); 

$oferta = $_GET['id'];
if(!isset($ofertas[$oferta])){
	header('Location: productos.php');
}
?>
	<section>
		
		<h1>PRODUCTO</h1>

	</section>

	<section class="container">

	<div class="row">

		<div class="col-lg-12 pro-portada">
			<img class="rounded-circle" src="./assets/images/plantas/<?php echo $ofertas[$oferta]['imagen'] ?>" alt="" width="140" height="140">
			<h2><?php echo $ofertas[$oferta]['nombre'] ?></h2>
			<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
			<p class="precio-anterior"><?php echo $ofertas[$oferta]['precio'] ?>&euro;</p>
			<p></p>
			<p><button type="button" class="btn btn-outline-success"><span class="precio-oferta"><?php echo $ofertas[$oferta]['precioOferta'] ?></span>€</button></p>
      	</div>

	</div>

	</section>

<?php include('./assets/inc/footer.php'); ?>