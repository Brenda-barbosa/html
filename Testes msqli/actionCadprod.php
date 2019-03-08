<?php
/**
 * Created by PhpStorm.
 * User: gustavo
 * Date: 25/02/19
 * Time: 10:27
 */

include_once "Getters&Setters.php";
include_once "connect.php";


  $get = new GetSet($prodSKU, $prodName, $price, $quant, $cat, $row);


try {


    if($get->getPrice() == "" || $get->getPrice() == null) {
        echo"<script language='javascript' type='text/javascript'>alert('ERROR: O campo de preço não pode conter letras, apenas números, também não deve ser deixado em branco p.ex: 80.20');window.location.href='addProduct.html';</script>";
    }

    elseif($get->getQuant() == "" || $get->getQuant() == null){
        echo"<script language='javascript' type='text/javascript'>alert('ERROR: O campo de quantidade não pode conter letras, apenas números, também não deve ser deixado em branco p.ex: 80');window.location.href='addProduct.html';</script>";

    }

    elseif($get->getProdName() == "" || $get->getProdName() == null){
        echo"<script language='javascript' type='text/javascript'>alert('ERROR: O campo de nome não pode ser deixado em branco');window.location.href='addProduct.html';</script>";

    }

    elseif($get->getProdSKU() == "" || $get->getProdSKU() == null){
        echo"<script language='javascript' type='text/javascript'>alert('ERROR: O campo de SKU não pode ser deixado em branco');window.location.href='addProduct.html';</script>";

    }

    elseif($get->getCat() == "" || $get->getCat() == null){
        echo"<script language='javascript' type='text/javascript'>alert('ERROR: O campo de Categoria não pode ficar sem ser selecionado');window.location.href='addProduct.html';</script>";

    }

    elseif($get->getDesc() == "" || $get->getDesc() == null){
        echo"<script language='javascript' type='text/javascript'>alert('ERROR: O campo de Descrição não pode ficar em branco');window.location.href='addProduct.html';</script>";

    }else{

        $stmt = mysqli_prepare($link, "INSERT INTO Produto (nome, sku, categoria, preco, descricao, quantidade) VALUES (?,?,?,?,?,?)");
        mysqli_stmt_bind_param($stmt, 'sssdsi', $get->getProdName(), $get->getProdSKU(), $get->getCat(), $get->getPrice(), $get->getDesc(), $get->getQuant());
        mysqli_stmt_execute($stmt);

        echo"<script language='javascript' type='text/javascript'>alert('Cliente cadastrado com sucesso!');window.location.href='addProduct.html';</script>";

    }
}   catch (Exception $e){
    echo "<br>New record can't be created :( <br>";
}


     mysqli_stmt_close($stmt);
     mysqli_close($link);
?>

