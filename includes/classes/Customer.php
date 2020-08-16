<?php
/**
 * Created by PhpStorm.
 * User: houti
 * Date: 2016/4/10
 * Time: 21:43
 */


class Customer
{
    private $c_userid;
    private $c_password;
    private $role;

    /**
     * @return mixed
     */
    public function getCUserid()
    {
        return $this->c_userid;
    }

    /**
     * @param mixed $c_userid
     */
    public function setCUserid($c_userid)
    {
        $this->c_userid = $c_userid;
    }

    /**
     * @return mixed
     */
    public function getCPassword()
    {
        return $this->c_password;
    }

    /**
     * @param mixed $c_password
     */
    public function setCPassword($c_password)
    {
        $this->c_password = $c_password;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    // Operating DB
    public function insert()
    {
        conn();
        global $DBH;
        $STH = $DBH->prepare("insert into customer(c_userid,c_password,role) values (?,?,?)");
        $STH->bindParam(1, $this->getCUserid());
        $STH->bindParam(2, $this->getCPassword());
        $STH->bindParam(3, $this->getRole());
        $STH->execute();
        close();
    }

    public function search($c_userid)
    {
        conn();
        global $DBH, $result;
        $statement = "select c_id from customer where c_userid = " . "'" . $c_userid . "'";
        $STH = $DBH->query($statement);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        while ($row = $STH->fetch()) {
            $result = $row['c_id'];
        }
        close();
        return $result;
    }

    public function searchPassWord($c_userid)
    {
        conn();
        global $DBH, $result;
        $statement = "select c_password from customer where c_userid = " . "'" . $c_userid . "'";
        $STH = $DBH->query($statement);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        while ($row = $STH->fetch()) {
            $result = $row['c_password'];
        }
        close();
        return $result;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->getCUserid() . " " . $this->getCPassword() . " " . $this->getRole();
    }
}

?>
