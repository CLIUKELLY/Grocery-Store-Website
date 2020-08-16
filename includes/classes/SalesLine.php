<?php

//This class is used to handle sold product by product line.
class SalesLine
{
    private $s_id;
    private $myCart;

    /**
     * @return mixed
     */
    public function getSId()
    {
        return $this->s_id;
    }

    /**
     * @param mixed $s_id
     */
    public function setSId($s_id)
    {
        $this->s_id = $s_id;
    }

    /**
     * @return mixed
     */
    public function getMyCart()
    {
        return $this->myCart;
    }

    /**
     * @param mixed $myCart
     */
    public function setMyCart($myCart)
    {
        $this->myCart = $myCart;
    }
    public function save(){
        conn();
        global $DBH;
        $shoppingCart = new Cart();
        $shoppingCart = $this->getMyCart();
        $clist = new CartItem();
        $clist = $shoppingCart->getCilist();
        foreach($clist as $item){
            $STH = $DBH->prepare("insert into sales_line(s_id,item_id,qty,price) values (?,?,?,?)");
            $STH->bindParam(1, $this->getSId());
            $STH->bindParam(2, $item->getItemId());
            $STH->bindParam(3, $item->getCount());
            $STH->bindParam(4, $item->getPrice());
            $STH->execute();
        }
        close();
    }
}