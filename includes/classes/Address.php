<?php

class Address
{
    private $a_last;
    private $a_first;
    private $a_apt;
    private $a_rue;
    private $a_city;
    private $a_zip;
    private $c_id;
    private $a_phone;


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

    /**
     * @return mixed
     */
    public function getALast()
    {
        return $this->a_last;
    }

    /**
     * @param mixed $a_last
     */
    public function setALast($a_last)
    {
        $this->a_last = $a_last;
    }

    /**
     * @return mixed
     */
    public function getAFirst()
    {
        return $this->a_first;
    }

    /**
     * @param mixed $a_first
     */
    public function setAFirst($a_first)
    {
        $this->a_first = $a_first;
    }

    /**
     * @return mixed
     */
    public function getAApt()
    {
        return $this->a_apt;
    }

    /**
     * @param mixed $a_apt
     */
    public function setAApt($a_apt)
    {
        $this->a_apt = $a_apt;
    }

    /**
     * @return mixed
     */
    public function getARue()
    {
        return $this->a_rue;
    }

    /**
     * @param mixed $a_rue
     */
    public function setARue($a_rue)
    {
        $this->a_rue = $a_rue;
    }

    /**
     * @return mixed
     */
    public function getACity()
    {
        return $this->a_city;
    }

    /**
     * @param mixed $a_city
     */
    public function setACity($a_city)
    {
        $this->a_city = $a_city;
    }

    /**
     * @return mixed
     */
    public function getAZip()
    {
        return $this->a_zip;
    }

    /**
     * @param mixed $a_zip
     */
    public function setAZip($a_zip)
    {
        $this->a_zip = $a_zip;
    }

    /**
     * @return mixed
     */
    public function getAPhone()
    {
        return $this->a_phone;
    }

    /**
     * @param mixed $a_phone
     */
    public function setAPhone($a_phone)
    {
        $this->a_phone = $a_phone;
    }

    function insert()
    {
        conn();
        global $DBH;
        $STH = $DBH->prepare("insert into address(a_last,a_first,a_apt,a_rue,a_city,a_zip,a_phone,c_id) values (?,?,?,?,?,?,?,?)");
        $STH->bindParam(1, $this->getALast());
        $STH->bindParam(2, $this->getAFirst());
        $STH->bindParam(3, $this->getAApt());
        $STH->bindParam(4, $this->getARue());
        $STH->bindParam(5, $this->getACity());
        $STH->bindParam(6, $this->getAZip());
        $STH->bindParam(7, $this->getAPhone());
        $STH->bindParam(8, $this->getCId());
        $STH->execute();
        close();
    }

    function findAddressByUser($c_id)
    {
        conn();
        global $DBH, $result;
        $statement = "select add_id from address where c_id = " . "'" . $c_id . "'";
        $STH = $DBH->query($statement);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        while ($row = $STH->fetch()) {
            $result = $row['add_id'];
        }
        return $result;
        close();
    }

    function loadByCId($user_id)
    {
        conn();
        global $DBH, $result, $tmpAdd;
        $tmpAdd = new Address();
        $statement = "select c_id,a_apt,a_city,a_first,a_last,a_phone,a_rue,a_zip from address where  c_id = " . "'" . $user_id . "'";
        $STH = $DBH->query($statement);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        while ($row = $STH->fetch()) {
            $tmpAdd->setCId($row['c_id']);
            $tmpAdd->setAApt($row['a_apt']);
            $tmpAdd->setACity($row['a_city']);
            $tmpAdd->setAFirst($row['a_first']);
            $tmpAdd->setALast($row['a_last']);
            $tmpAdd->setAPhone($row['a_phone']);
            $tmpAdd->setARue($row['a_rue']);
            $tmpAdd->setAZip($row['a_zip']);
        }

        return $tmpAdd;
        close();
    }

    function update($tmpAddr, $addressId)
    {
        try {
            conn();
            global $DBH;
            $localAddr = new Address();
            $localAddr = $tmpAddr;
            $a_last = $localAddr->getALast();
            $a_first = $localAddr->getAFirst();
            $a_apt = $localAddr->getAApt();
            $a_rue = $localAddr->getARue();
            $a_city = $localAddr->getACity();
            $a_zip = $localAddr->getAZip();
            $a_phone = $localAddr->getAPhone();
            $statement = "update address set a_last = " . "'" . $a_last . "'," .
                "a_first = " . "'" . $a_first . "'," .
                "a_apt = " . "'" . $a_apt . "'," .
                "a_rue =" . "'" . $a_rue . "'," .
                "a_city =" . "'" . $a_city . "'," .
                "a_zip = " . "'" . $a_zip . "'," .
                "a_phone =" . "'" . $a_phone . "'" .
                " where add_id =" . "'" . $addressId . "'";
            $stmt = $DBH->prepare($statement);
            $stmt->execute();

        } catch (PDOException $e) {
            echo $DBH . "<br>" . $e->getMessage();
        }

        close();
    }
    function save()
    {

        conn();
        global $DBH;
        $STH = $DBH->prepare("insert into address(a_last,a_first,a_apt,a_rue,a_city,a_zip,a_phone,c_id) values (?,?,?,?,?,?,?,?)");
        $STH->bindParam(1, $this->getALast());
        $STH->bindParam(2, $this->getAFirst());
        $STH->bindParam(3, $this->getAApt());
        $STH->bindParam(4, $this->getARue());
        $STH->bindParam(5, $this->getACity());
        $STH->bindParam(6, $this->getAZip());
        $STH->bindParam(7, $this->getAPhone());
        $STH->bindParam(8, $this->getCId());
        $STH->execute();
        close();

    }
    /*
    function __clone()
    {
        $this-> a_last    = clone $this-> a_last ;
        $this-> a_first   = clone $this-> a_first;
        $this-> a_apt     = clone $this-> a_apt;
        $this-> a_rue     = clone $this-> a_rue;
        $this-> a_city    = clone $this-> a_city;
        $this-> a_zip     = clone $this-> a_zip;
        $this-> c_id      = clone $this-> c_id;
        $this-> a_phone   = clone $this-> a_phone;
    }
    */
}

?>