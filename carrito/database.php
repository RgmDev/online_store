<?php 

function conectar(){
    try{
        $db = new PDO("mysql:host=localhost;dbname=marketpro;", "root", "root");
    }catch(Exception $e){
        print($e);
        exit;
    }
    return $db;
}

function todos(){
    $db = conectar();
    try{
        $resultado = $db->query("select * from ofertas order by sku");
    }catch(Exception $e){
        print($e);
        exit;
    }
    $ofertas = $resultado->fetchAll(PDO::FETCH_ASSOC);
    return $ofertas;
}

function pro_carrito($ofertas){
    $out = "\r\n";
    $i = 0;
    foreach($ofertas as $oferta){
      $out .= '
            <div class="col-lg-3 pro-portada">
                <img class="rounded-circle" src="../assets/images/'.$oferta['img'].'" alt="" width="140" height="140">
                <h2>'.$oferta['nombre'].'</h2>
                <p>'.$oferta['descripcion'].'</p>
                <p></p>
                <p><a href="carro.php?accion=add&id='.$oferta['sku'].'"><button type="button" class="btn btn-outline-success"><span class="precio-oferta">'.$oferta['precioOferta'].'</span>€</button></a></p>
            </div>
      ' . "\r\n";
      $i++;
    }
    return $out;
  }



?>