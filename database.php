<?php 

try{
    $db = new PDO("mysql:host=localhost;dbname=marketpro;", "root", "root");
}catch(Exception $e){
    print($e);
    exit;
}

try{
    $resultado = $db->query("select * from ofertas order by sku");
}catch(Exception $e){
    print($e);
    exit;
}

$ofertas = $resultado->fetchAll(PDO::FETCH_ASSOC);

?>