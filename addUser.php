<?php session_start(); ?>
<!DOCTYPE html>
<?php
 
        if(isset($_SESSION['username']) && isset($_SESSION['loginlogin'])){
            
        } else  {
            echo "<a style href=\"P9.html\" style=\"color:#FF0000;\">Your password is wrong.username is admin password is admin.CLICK GO BACK</a>";
            exit(1);
        }
        if(isset($_POST["fname"])&&
        isset($_POST["lname"])&&
        isset($_POST["birth"])&&
        isset($_POST["gender"])&&
        isset($_POST["address"])&&
        isset($_POST["postcode"])&&
        isset($_POST["phone"])&&
        isset($_POST["email"])){


        }else{
            echo "<a style href=\"P10_Add_New_User.php\" style=\"color:#FF0000;\"> you are not filled all the form.CLICK GO BACK</a>";
            exit(1);
        }
        $uuname=$_SESSION['username'];
        $ppword=$_SESSION['password'];


?>
<html lang="en">
<head>
    <Title>
        Add User | Daily Fresh
    </Title>
    <link rel="stylesheet" href="P10.css">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

<div class="header">
            <h1>WELCOME TO</h1>
            <h2><i>Daily Fresh Back Store</i></h2>
    </div>


        <!--Navigation Bar-->

        <div class="navbar">
            <a href="index.html">Home</a>
            <div class="dropdown">
                <button class="dropbtn">Aisle
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="P2_Snacks.html">Snack</a>
                    <a href="P2_Beverage.html">Beverage</a>
                    <a href="P2_Vege.html">Vegetable</a>
                    <a href="P2_meat.html">Meat</a>
                    <a href="P2_organic_groceries.html">Organic groceries</a>
                </div>
            </div>
                <a href="P5_Sign_in.html">Sign in</a>
                <a href="P4.html">My Cart</a>
            <div class="dropdown">
                <button class="dropbtn">Back Store
                <i class="fa fa-caret-down"></i>
            </button>
                <div class="dropdown-content">
                    <a href="P9.php">User</a>
                    <a href="P7.html">Product</a>
                    <a href="P11_order_list.html">Order</a>

                </div>
            </div>
        </div>
        <div class="path">
            <br>&nbsp;&nbsp;Home&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;Back Store&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;
            <a href="P9.html">User List</a>&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;User Profile&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;Add User

     <?php

        


        $xml = simplexml_load_file("userData.xml") or die("Error: Cannot create object");

        //$currentMaxId = $xml -> maxid;
        //echo $currentMaxId;

        $obj_xml = new SimpleXMLElement('userData.xml', NULL, TRUE);
        $total = count($obj_xml->children());
        $maxId = $obj_xml->Membership[$total - 1]->cardNumber;

        $cardNumber = $maxId + 1;
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $birth = $_POST["birth"];
        $gender = $_POST["gender"];
        $address = $_POST["address"];
        $postcode = $_POST["postcode"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];

        $lines = file('userData.xml'); 
        $last = sizeof($lines) - 1 ; 
         unset($lines[$last]); 
        
        $fp = fopen('userData.xml', 'w'); 
        fwrite($fp, implode('', $lines)); 
        fclose($fp); 



        //$myfile = fopen("userData.xml", "a+") or die("Unable to open file!");
        //echo fread($myfile,filesize("userData.xml"));

        //$txt = "John Doe\n";
        //fwrite($myfile, $txt);

        //echo fread($myfile,filesize("userData.xml"));

        //while(!feof($myfile)) {
       //     echo fgets($myfile) . "<br>";
        //  }
        //fclose($myfile);
        
        $myfile = fopen("userData.xml", "a+") or die("Unable to open file!");
        
        $txt = "<Membership>
        <cardNumber>$cardNumber</cardNumber>
        <firstname>$fname</firstname>
        <lastname>$lname</lastname>
        <birth>$birth</birth>
        <gender>$gender</gender>
        <address>$address</address>
        <postcode>$postcode</postcode>
        <phone>$phone</phone>
        <email>$email</email>
        </Membership>
        </block>";

        fwrite($myfile, $txt);
       // while(!feof($myfile)) {
        //    echo fgets($myfile) . "<br>";
        //}
        fclose($myfile);




    ?>
   <p><br/>&nbsp;&nbsp;The new user profile you have just added is as the following: </p>
   <p>
       <table>
           <tr>
               <th>First name: </th>
               <td><?php echo "$fname" ?></td>
            <tr>
               <th>Last name: </th>
               <td><?php echo "$lname" ?></td>
            <tr>
               <th>Date of Birth: </th>
               <td><?php echo "$birth" ?></td>
            <tr>
               <th>Gender: </th>
               <td><?php echo "$gender" ?></td>
            <tr>
               <th>Address: </th>
               <td><?php echo "$address" ?></td>
            <tr>
               <th>Post Code: </th>
               <td><?php echo "$postcode" ?></td>
            <tr>
               <th>Phone Number: </th>
               <td><?php echo "$phone" ?></td>
            <tr>
               <th>Email: </th>
               <td><?php echo "$email" ?></td>
       </table>
       <br/>

       <p>user has been successfully added</p>
  
       <input class="button" type="button" value="go back" onclick="window.location.href='P9.php'"/>
       
           


</body>

</html>
