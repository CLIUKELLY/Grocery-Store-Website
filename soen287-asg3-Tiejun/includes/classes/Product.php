<?php
class Product{
    private $product_name;
    private $product_desc;
    private $product_price;
    private $product_qty;
    private $product_id;

    /**
     * @return mixed
     */
    public function getProductList(){
        conn();
        global $DBH, $result;
        $statement = "select item_id,item_name,item_desc,price,qty from item";
        $STH = $DBH->query($statement);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $i = 0;
        while($row = $STH->fetch()) {
            $result[$i++] = $row;
        }
        close();
        return $result;
    }
    public function getProductById($id){
        conn();
        global $DBH, $result;
        $statement = "select item_id,item_name,item_desc,price,qty from item where item_id = "."'".$id."'";
        $STH = $DBH->query($statement);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        while ($row = $STH->fetch()) {
            $result = $row;
        }
        close();
        return $result;
    }
    public function getProductName()
    {
        return $this->product_name;
    }

    /**
     * @param mixed $product_name
     */
    public function setProductName($product_name)
    {
        $this->product_name = $product_name;
    }

    /**
     * @return mixed
     */
    public function getProductDesc()
    {
        return $this->product_desc;
    }

    /**
     * @param mixed $product_desc
     */
    public function setProductDesc($product_desc)
    {
        $this->product_desc = $product_desc;
    }

    /**
     * @return mixed
     */
    public function getProductPrice()
    {
        return $this->product_price;
    }

    /**
     * @param mixed $product_price
     */
    public function setProductPrice($product_price)
    {
        $this->product_price = $product_price;
    }

    /**
     * @return mixed
     */
    public function getProductQty()
    {
        return $this->product_qty;
    }

    /**
     * @param mixed $product_qty
     */
    public function setProductQty($product_qty)
    {
        $this->product_qty = $product_qty;
    }
    public function setProductId($product_id)
    {
        $this->product_qty = $product_id;
    }
}