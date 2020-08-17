<?php

function deleteaddacc(){

    session_start();
 

    if(isset($_SESSION['username']) && isset($_SESSION['loginlogin'])){
            $uuname=$_SESSION['username'];
            $ppword=$_SESSION['password'];
    } else  {
        echo "<a style href=\"P9.html\" style=\"color:#FF0000;\">Your password is wrong.username is admin password is admin.CLICK GO BACK</a>";
        exit(1);
    }


    if(isset($_POST["user"])&&
        isset($_POST["fname"])&&
    isset($_POST["lname"])&&
    isset($_POST["birth"])&&
    isset($_POST["gender"])&&
    isset($_POST["address"])&&
    isset($_POST["postcode"])&&
    isset($_POST["phone"])&&
    isset($_POST["email"])){


    }else{
        echo "<a style href=\"P9.php\" style=\"color:#FF0000;\"> you are not filled all the form.CLICK GO BACK</a>";
        exit(1);
    }

    $Delnum=$_POST["user"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $birth = $_POST["birth"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $postcode = $_POST["postcode"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];



      echo $Delnum;

        $xml = simplexml_load_file("userData.xml") or die("Error: Cannot create object");

        //$currentMaxId = $xml -> maxid;
        //echo $currentMaxId;

        $obj_xml = new SimpleXMLElement('userData.xml', NULL, TRUE);
        $total = count($obj_xml->children());
        $maxId = $obj_xml->Membership[$total - 1]->cardNumber;
        $into=0;
        echo $total;
        for($into=0;$into<$total;$into++){
            if($obj_xml->Membership[$into]->cardNumber==$Delnum){
                echo "stop "+"$into";
                break;
            };

        }

        $lines = file('userData.xml'); 
        
        $lines[$into*11+2];
        $lines[$into*11+3];
        $lines[$into*11+4]="    <firstname>$fname</firstname>\n";
        $lines[$into*11+5]="    <lastname>$lname</lastname>\n";
        $lines[$into*11+6]="    <birth>$birth</birth>\n";
        $lines[$into*11+7]="    <gender>$gender</gender>\n"; 
        $lines[$into*11+8]="    <address>$address</address>\n"; 
        $lines[$into*11+9]="    <postcode>$postcode</postcode>\n";
        $lines[$into*11+10]="    <phone>$phone</phone>\n";
        $lines[$into*11+11]="    <email>$email</email>\n";
        $lines[$into*11+12];
        
        $fp = fopen('userData.xml', 'w'); 
        fwrite($fp, implode('', $lines)); 
        fclose($fp);

}
/*
<lastname>Smith</lastname>
<birth>1991-01-10</birth>
<gender>male</gender>
<address>1212 Rue Atwater</address>
<postcode>H3T 2U4</postcode>
<phone>514-123-4521</phone>
<email>jerrysmith@dailyfresh.com</email>
$userid = $_POST["user"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$birth = $_POST["birth"];
$gender = $_POST["gender"];
$address = $_POST["address"];
$postcode = $_POST["postcode"];
$phone = $_POST["phone"];
$email = $_POST["email"];
*/
deleteaddacc();
header("Location: P9.php");

/*
echo $userid;
echo $fname;
echo $lname;
echo $birth;
echo $gender;
echo $address;
echo $postcode;
echo $phone;
echo $email;
*/



?>
<html>
<script>
</script>

<body>
</body>

</html>