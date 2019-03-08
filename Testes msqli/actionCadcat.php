<?php
/**
 * Created by PhpStorm.
 * User: gustavo
 * Date: 25/02/19
 * Time: 10:27
 */

include_once "CatGetters&Setters.php";
include_once "connect.php";


$get = new CatGetSet($catName, $catCode);


try
{


if ($get->getCatCode() == "" || $get->getCatCode() == null)
{
echo "<script language='javascript' type='text/javascript'>alert('ERROR: O campo de Category Code não pode ficar em branco');window.location.href='addCategory.html';</script>";
}

elseif
($get->getCatName() == "" || $get->getCatName() == null){
        echo "<script language='javascript' type='text/javascript'>alert('ERROR: O campo de Category Name não pode ficar em branco');window.location.href='addCategory.html';</script>";

    }else{

    $stmt = mysqli_prepare($link, "INSERT INTO Categoria (cad_id, nome) VALUES (?,?)");
    mysqli_stmt_bind_param($stmt, 'ss', $get->getCatCode(), $get->getCatName());
    mysqli_stmt_execute($stmt);

    echo "<script language='javascript' type='text/javascript'>alert('Categoria cadastrada com sucesso!');window.location.href='addCategory.html';</script>";

}
}   catch (Exception $e){
    echo "<br>New record can't be created :( <br>";
}



     mysqli_stmt_close($stmt);
     mysqli_close($link);
?>

