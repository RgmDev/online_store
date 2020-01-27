<?php 
include_once("database.php");

function pro_portada($ofertas){
  $out = "\r\n";
  $i = 0;
  foreach($ofertas as $oferta){
    $out .= '
      <div class="col-lg-3 pro-portada">
        <img class="rounded-circle" src="./assets/images/'.$oferta['img'].'" alt="" width="140" height="140">
        <h2>'.$oferta['nombre'].'</h2>
        <p>'.$oferta['descripcion'].'</p>
        <p class="precio-anterior">'.$oferta['precio'].'&euro;</p>
        <p></p>
        <p><a href="./'.$i.'-oferta-especial"><button type="button" class="btn btn-outline-success"><span class="precio-oferta">'.$oferta['precioOferta'].'</span>€</button></a></p>
      </div>
    ' . "\r\n";
    $i++;
  }
  return $out;
}

function pro_productos($ofertas){
  $out = "\r\n";
  for($i = 0; $i < 3; $i++){
    $out .= '
      <div class="col-lg-4 pro-portada">
        <img class="rounded-circle" src="./assets/images/'.$ofertas[$i]['img'].'" alt="" width="140" height="140">
        <h2>'.$ofertas[$i]['nombre'].'</h2>
        <p>'.$ofertas[$i]['descripcion'].'</p>
        <p class="precio-anterior">'.$ofertas[$i]['precio'].'&euro;</p>
        <p></p>
        <p><a href="'.$i.'-oferta-especial"><button type="button" class="btn btn-outline-success"><span class="precio-oferta">'.$ofertas[$i]['precioOferta'].'</span>€</button></a></p>
      </div>
    ' . "\r\n";
  }
  return $out;
}


?>