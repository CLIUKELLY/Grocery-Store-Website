<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
    <Title>
        Back Store User List | Daily Fresh
    </Title>
    <link rel="stylesheet" href="P9.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php

        if(isset($_SESSION['username']) && isset($_SESSION['password'])){
            $uuname=$_SESSION['username'];
            $ppword=$_SESSION['password'];
        } else if(isset($_POST["username"]) && isset($_POST["password"])) {


           $uuname=$_POST["username"];
           $ppword=$_POST["password"];

           if($uuname=="admin"&&$ppword=="admin"){
            $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time();
            $_SESSION['username'] = $uuname;
            $_SESSION['password'] = $ppword;
            $_SESSION['loginlogin'] = true;
           } else {
                echo "<a style href=\"P9.html\" style=\"color:#FF0000;\">Your password is wrong.username is admin password is admin.CLICK GO BACK</a>";
             exit(1);
           }

        } else {
            echo "<a style href=\"P9.html\" style=\"color:#FF0000;\">Your password is wrong.username is admin password is admin.CLICK GO BACK</a>";
            exit(1);
        }
    
    ?>


    <script>
        

        function accdelete(){

            var txt;
            var r = confirm("Are you sure to delete this account?");
            if (r == true) {
                txt = "The customer account HAS BEEN deleted!";

            } else {
                txt = "The customer account has NOT been deleted!";
            }
            alert(txt);
        }
    </script>
</head>

<div id="container">



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
                    <a href="P9.html">User</a>
                    <a href="P7.html">Product</a>
                    <a href="P11_order_list.html">Order</a>

                </div>
            </div>

        </div>
        <div class="path">
            <br><a>&nbsp;&nbsp;Home&nbsp;&nbsp;</a>
            <a> &gt;&gt;&nbsp;&nbsp;Back Store&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;User List </a>

        </div>
<div class="center">
    <h2><br/>User List</h2>
        
        <form action="P10_Edit_User.php" method="get">
            <label for="user"><br/>Please choose one using drop-down menu to edit or delete: </label>
        
        <?php
            $obj_xml = new SimpleXMLElement('userData.xml', NULL, TRUE);
            // Total number of elements present ///
            //$total = $obj_xml->count(); // total number of elements for PHP 5.3 and above
            $total =count($obj_xml->children());  // for < php 5.3 version
            //echo $total;
            $str="<select id='users' name='user'>";
            for($i=0; $i<$total; $i++) { 
                $str= $str."<option value=".$obj_xml->Membership[$i]->cardNumber.">"
                      .$obj_xml->Membership[$i]->firstname." ".$obj_xml->Membership[$i]->lastname."</option>";
            }
            $str = $str. "</select>";
            echo $str;
        ?>
        <input type="hidden" id="cust1" name="username" value=<?php echo $uuname ?>>
        <input type="hidden" id="cust2" name="password" value=<?php echo $ppword ?>>
        
            <input class="button" type="submit" value="Edit"/>
            <input class="button" type="submit" formaction="P9_Del.php" value="delete" onclick=accdelete();></button>
        </form>
        <form action="P10_Add_New_User.php" method="get">
            <input class="button" type="submit" value="Add new user">
        </form>
        <p>welcome boss:<?php echo $_SESSION['username']; ?></p>
        <a href = "logout.php" tite = "Logout">click to logout</a>
      
</div>
        <!-------------------------------------------------
            Footer
        --------------------------------------------------->
        <footer>
            <div class="footer">
                <p>Address: 123 Rue ABC, Montreal, QC H8G 9X7
                </p>
            </div>
        </footer>
      
</body>
</div>
</html>
