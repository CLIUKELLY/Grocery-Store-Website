<?php

session_start();
 

if(isset($_SESSION['username']) && isset($_SESSION['loginlogin'])&& isset($_GET["user"])){
        $uuname=$_GET['username'];
        $ppword=$_GET['password'];


} else  {
    echo "<a style href=\"P9.html\" style=\"color:#FF0000;\">Your password is wrong.username is admin password is admin.CLICK GO BACK</a>";
    exit(1);
}


function deleteacc(){
     $Delnum=$_GET["user"];
     
      echo $Delnum;

        $xml = simplexml_load_file("userData.xml") or die("Error: Cannot create object");

        //$currentMaxId = $xml -> maxid;
        //echo $currentMaxId;
        $founddel=0;
        $obj_xml = new SimpleXMLElement('userData.xml', NULL, TRUE);
        $total = count($obj_xml->children());
        $maxId = $obj_xml->Membership[$total - 1]->cardNumber;
        $into=0;
        echo $total;
        for($into=0;$into<$total;$into++){
            if($obj_xml->Membership[$into]->cardNumber==$Delnum){
                echo "stop "+"$into";
                $founddel=1;
                break;
            };

        }
        if($founddel==0){
            echo "not found, you tried to hack system, did you?";
            return;
        }

        $lines = file('userData.xml'); 
        
        unset($lines[$into*11+2]);
        unset($lines[$into*11+3]); 
        unset($lines[$into*11+4]); 
        unset($lines[$into*11+5]); 
        unset($lines[$into*11+6]); 
        unset($lines[$into*11+7]); 
        unset($lines[$into*11+8]); 
        unset($lines[$into*11+9]);
        unset($lines[$into*11+10]);
        unset($lines[$into*11+11]);
        unset($lines[$into*11+12]);
        
        $fp = fopen('userData.xml', 'w'); 
        fwrite($fp, implode('', $lines)); 
        fclose($fp);

}

deleteacc();
header("Location: P9.php");

?>
<html>
<script>
</script>

<body>
</body>

</html>