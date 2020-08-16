<?php

class Sales{
    private		$s_date;
    private		$pay_id;  //payment id
    private		$add_id;  // address id
    private		$c_id;    //customer id

    /**
     * @return mixed
     */
    public function getSDate()
    {
        return $this->s_date;
    }

    /**
     * @param mixed $s_date
     */
    public function setSDate($s_date)
    {
        $this->s_date = $s_date;
    }

    /**
     * @return mixed
     */
    public function getPayId()
    {
        return $this->pay_id;
    }

    /**
     * @param mixed $pay_id
     */
    public function setPayId($pay_id)
    {
        $this->pay_id = $pay_id;
    }

    /**
     * @return mixed
     */
    public function getAddId()
    {
        return $this->add_id;
    }

    /**
     * @param mixed $add_id
     */
    public function setAddId($add_id)
    {
        $this->add_id = $add_id;
    }

    /**
     * @return mixed
     */
    public function getCId()
    {
        return $this->c_id;
    }

    /**
     * @param mixed $c_id
     */
    public function setCId($c_id)
    {
        $this->c_id = $c_id;
    }
    public $DBH = null;
    public function conn()
    {
        $host = "localhost";
        $dbname = "tiejunAsg3";
        $dbuser = "tiejunAsg3";
        $dbpass = "tiejunAsg3";
        try {
            global $DBH;
            $DBH = new PDO("mysql:host=$host;dbname=$dbname;", $dbuser, $dbpass);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function close()
    {
        global $DBH;
        $DBH = null;
    }
    public function save(){
        $this->conn();
        global $DBH;
        $STH = $DBH->prepare("insert into sales(s_date,pay_id,add_id,c_id) values (?,?,?,?)");
        $s_date = date("Y/m/d");
        $STH->bindParam(1, $s_date);

        $temPayId= $this->getPayId();
        //$STH->bindParam(2, $this->getPayId());
        $STH->bindParam(2, $temPayId);
        $temAddId= $this->getAddId();
        //$STH->bindParam(3, $this->getAddId());
        $STH->bindParam(3, $temAddId);
        $temCId= $this->getCId();
        //$STH->bindParam(4, $this->getCId());
        $STH->bindParam(4, $temCId);

        $STH->execute();
        $this->close();
    }
    public function findSalesById(){
        $this->conn();
        global $DBH;
        $statement = "select s_id from sales where c_id = " . "'" . $this->getCId() . "' and pay_id = '".$this->getPayId()."'";
        $STH = $DBH->query($statement);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        while ($row = $STH->fetch()) {
            $result = $row['s_id'];
        }
        return $result;
        $this->close();
    }
}
?>