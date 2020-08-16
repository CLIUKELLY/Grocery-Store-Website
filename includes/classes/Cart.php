<?php
/**
 * Created by PhpStorm.
 * User: houti
 * Date: 2016/4/16
 * Time: 19:38
 */
include ("includes/classes/CartItem.php");
class Cart{
    private $cilist = array();
    private $numsOfCart = 0;

    /**
     * @return mixed
     */
    public function getCilist()
    {

        return $this->cilist;
    }

    /**
     * @return mixed
     */
    public function getNumsOfCart()
    {
        return $this->numsOfCart;
    }

    /**
     * @param mixed $numsOfCart
     */
    public function setNumsOfCart($numsOfCart)
    {
        $this->numsOfCart = $numsOfCart;
    }

    /**
     * @param mixed $cilist
     */
    public function setCilist($cilist)
    {
        $this->cilist = $cilist;
    }
    public function add(CartItem $cartItem){
        $this->cilist[$this->numsOfCart++] = $cartItem;
}
}
?>