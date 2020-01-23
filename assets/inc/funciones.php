<?php 


function pro_portada($ofertas){
  $out = "\r\n";
  $i = 0;
  foreach($ofertas as $oferta){
    $out .= '
      <div class="col-lg-3 pro-portada">
        <img class="rounded-circle" src="./assets/images/plantas/'.$oferta['imagen'].'" alt="" width="140" height="140">
        <h2>'.$oferta['nombre'].'</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
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
        <img class="rounded-circle" src="./assets/images/plantas/'.$ofertas[$i]['imagen'].'" alt="" width="140" height="140">
        <h2>'.$ofertas[$i]['nombre'].'</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p class="precio-anterior">'.$ofertas[$i]['precio'].'&euro;</p>
        <p></p>
        <p><a href="'.$i.'-oferta-especial"><button type="button" class="btn btn-outline-success"><span class="precio-oferta">'.$ofertas[$i]['precioOferta'].'</span>€</button></a></p>
      </div>
    ' . "\r\n";
  }
  return $out;
}

$ofertas = array();
array_push($ofertas, 
  array(
    "nombre" => "Lirio de Paz",
    "introDescripcion" => "Es una planta preciosa",
    "descripcion" => "Lorem ipsum dolor sit amet",
    "imagen" => "lirio.png",
    "precio" => 13,
    "precioOferta" => 10.55
  ),
  array(
    "nombre" => "Echevería",
    "introDescripcion" => "Es una planta preciosa",
    "descripcion" => "Lorem ipsum dolor sit amet",
    "imagen" => "echeveria.png",
    "precio" => 9.99,
    "precioOferta" => 7
  ),
  array(
    "nombre" => "Planta de Hule",
    "introDescripcion" => "Es una planta preciosa",
    "descripcion" => "Lorem ipsum dolor sit amet",
    "imagen" => "hule.png",
    "precio" => 17.35,
    "precioOferta" => 14.99
  ),
  array(
    "nombre" => "Cactus",
    "introDescripcion" => "Es una planta preciosa",
    "descripcion" => "Lorem ipsum dolor sit amet",
    "imagen" => "cactus.png",
    "precio" => 6,
    "precioOferta" => 5
  )
);










?>