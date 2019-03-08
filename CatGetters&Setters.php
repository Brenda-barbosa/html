<?php
/**
 * Created by PhpStorm.
 * User: gustavo
 * Date: 22/02/19
 * Time: 13:00
 */

//require_once 'Caneta.php';

class CatGetSet
{
    private $catName, $catCode;

    public function __construct($catName, $catCode)
    {
        $this->catName = $catName;
        $this->catCode = $catCode;

    }

    /**
     * @return mixed
     */
    public function getCatCode()
    {
        return $this->catCode = htmlspecialchars($_POST['category-code']);
    }

    /**
     * @param mixed $catCode
     */
    public function setCatCode($catCode)
    {
        $this->catCode = $catCode;
    }

    /**
     * @return mixed
     */
    public function getCatName()
    {
        return $this->catName = htmlspecialchars($_POST['category-name']);
    }

    /**
     * @param mixed $catName
     */
    public function setCatName($catName)
    {
        $this->catName = $catName;
    }

}