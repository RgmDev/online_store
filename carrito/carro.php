<?php
error_reporting(0);
session_start();
include_once('database.php');

$sessionOferta_id = $_GET['id'];
$accion = $_GET['accion'];

switch($accion){
    case "add":
        $_SESSION['carrito'][$sessionOferta_id]++;
    break;

    case "remove":
        $_SESSION['carrito'][$sessionOferta_id]--;
        if($_SESSION['carrito'][$sessionOferta_id] == 0) unset($_SESSION['carrito'][$sessionOferta_id]);
    break;

    case "empty":
        unset($_SESSION['carrito']);
    break;
}

if($_SESSION['carrito']){
    echo '<table border="1" padding="4" width="40%"';
    foreach($_SESSION['carrito'] as $sessionOferta_id => $cantidad){
        try{
            $db = conectar();
            $result = $db->query('select * from ofertas where sku = '.$sessionOferta_id);
        }catch(Exception $e){
            print($e);
            exit;
        }
        $ofertas = $result->fetchAll(PDO::FETCH_ASSOC);
        foreach($ofertas as $oferta_id => $oferta){
            $precio = $oferta['precioOferta'];  
            $coste = $precio * $cantidad;
            $total = $total + $coste;
            echo "
                <tr>
                    <td align='center'>{$oferta['nombre']}</td>
                    <td align='center'>$cantidad <a href='$_SERVER[PHP_SELF]?accion=remove&id=$sessionOferta_id'>X</a></td>
                    <td align='center'>$coste</td>
                </tr>
            ";
        }
    }
    echo "
            <tr>
                <td colspan='2' align='right'>TOTAL</td>
                <td align='right'>$total</td>
            </tr>
            <tr>
                <td colspan='3' align='rigth'><a href='$_SERVER[PHP_SELF]?accion=empty' onclick='return confirm(\'¿Eliminar productos?\');'>Vaciar carrito</a></td>
            </tr>
            <tr>
                <td colspan='3' align='rigth'><a href='pago.php'>Finalizar compra</a></td>
            </tr>
        </table>
    ";
}else{
    echo "No hay productos en el carrito.";
}
?>
<a href="index.php">Volver a la compra</a>