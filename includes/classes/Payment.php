<?php
class Payment{
    private		$type;
    private		$username;
    private		$accountno;
    private		$pay_id;
    private		$c_id;
    private		$add_id;
    private		$year;
    private		$month;
    private		$day;
    private		$exp_date;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getAccountno()
    {
        return $this->accountno;
    }

    /**
     * @param mixed $accountno
     */
    public function setAccountno($accountno)
    {
        $this->accountno = $accountno;
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
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * @param mixed $month
     */
    public function setMonth($month)
    {
        $this->month = $month;
    }

    /**
     * @return mixed
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param mixed $day
     */
    public function setDay($day)
    {
        $this->day = $day;
    }

    /**
     * @return mixed
     */
    public function getExpDate()
    {
        return $this->exp_date;
    }

    /**
     * @param mixed $exp_date
     */
    public function setExpDate($exp_date)
    {
        $this->exp_date = $exp_date;
    }
    public function save(){
        conn();
        global $DBH;
        $STH = $DBH->prepare("insert into payment(c_id,add_id,type,accountno,exp_date) values (?,?,?,?,?)");
        $STH->bindParam(1, $this->getCId());
        $STH->bindParam(2, $this->getAddId());
        $STH->bindParam(3, $this->getType());
        $STH->bindParam(4, $this->getAccountno());

        $year = $this->getYear();
        $month = $this->getMonth();
        $day = $this->getDay();
        $exp_date = new DateTime("$year-$month-$day");
        $STH->bindParam(5, $exp_date->format('Y-m-d H:i:s'));
        $STH->execute();
        close();
    }
    public function findPaymentById(){
        conn();
        global $DBH;
        $statement = "select pay_id from payment where c_id = " . "'" . $this->getCId() . "' and add_id = '".$this->getAddId()."'";
        $STH = $DBH->query($statement);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        while ($row = $STH->fetch()) {
            $result = $row['pay_id'];
        }
        return $result;
        close();
    }
}