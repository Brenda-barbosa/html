<?php
/**
 * Created by PhpStorm.
 * User: gustavo
 * Date: 25/02/19
 * Time: 15:25
 */

include_once "connect.php";
include_once "Getters&Setters.php";



$stmt = mysqli_prepare($link, "SELECT COUNT(*) FROM Produto;");
mysqli_stmt_execute($stmt);

$row = mysqli_stmt_get_result($stmt);
$row = $row->fetch_row();

$row = $row[0];

$prod = array();
$test = array();

for($i = 0; $i < $row; $i++) {

    $stmt = mysqli_prepare($link, "SELECT nome, sku, preco, quantidade, categoria FROM Produto WHERE prod_id = ?");
    mysqli_stmt_bind_param($stmt, 'i', $i);
    mysqli_stmt_execute($stmt);


    $prod = mysqli_stmt_get_result($stmt);

    // $prod = $prod->fetch_row();

    $prod = mysqli_fetch_array($prod, MYSQLI_ASSOC);
    $test[$i] = $prod;


    //var_dump($prod);
}

var_dump($test);

