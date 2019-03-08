<?php
/**
 * Created by PhpStorm.
 * User: gustavo
 * Date: 25/02/19
 * Time: 10:05
 */


$link = mysqli_connect('localhost', 'root', 'root', 'WebJump');
if (!$link)
{
die("Connection has failed :( <br>" . mysqli_connect_error());
}

// echo "Connected successfully :)";
