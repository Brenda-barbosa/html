<?php
/**
 * Created by PhpStorm.
 * User: gustavo
 * Date: 22/02/19
 * Time: 13:00
 */

//require_once 'Caneta.php';

class GetSet
{
    private $prodSKU, $prodName, $price, $desc, $quant, $cat;

    public function __construct($prodSKU, $prodName, $price, $desc, $quant, $cat)
    {
        $this->prodSKU  = $prodSKU;
        $this->prodName = $prodName;
        $this->price    = $price;
        $this->quant    = $quant;
        $this->cat      = $cat;
        $this->desc     = $desc;

    }

    /**
     * @return mixed
     */
    public function getProdSKU()
    {
        return $this->prodSKU = htmlspecialchars($_POST['sku']);
    }

    /**
     * @param mixed $prodSKU
     */
    public function setProdSKU($prodSKU)
    {
        $this->prodSKU = $prodSKU;
    }

    /**
     * @return mixed
     */
    public function getProdName()
    {
        return $this->prodName = htmlspecialchars($_POST['name']);
    }

    /**
     * @param mixed $prodName
     */
    public function setProdName($prodName)
    {
        $this->prodName = $prodName;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price = (double)$_POST['price'];
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getQuant()
    {
        return $this->quant = (int)$_POST['quantity'];
    }

    /**
     * @param mixed $quant
     */
    public function setQuant($quant)
    {
        $this->quant = $quant;
    }

    /**
     * @return mixed
     */
    public function getDesc()
    {
        return $this->desc = htmlspecialchars($_POST['description']);
    }

    /**
     * @param mixed $desc
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
    }

    /**
     * @return mixed
     */
    public function getCat()
    {
        return $this->cat = htmlspecialchars($_POST['category']);
    }

    /**
     * @param mixed $cat
     */
    public function setCat($cat)
    {
        $this->cat = $cat;
    }


}