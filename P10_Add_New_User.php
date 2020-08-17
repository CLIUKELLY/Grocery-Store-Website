<?xml version = "1.0"  encoding = "utf-8" ?>

<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<?php
        if(isset($_SESSION['username']) && isset($_SESSION['loginlogin'])){
            
        } else  {
            echo "<a style href=\"P9.html\" style=\"color:#FF0000;\">Your password is wrong.username is admin password is admin.CLICK GO BACK</a>";
            exit(1);
        }

        $xml = simplexml_load_file("userData.xml") or die("Error: Cannot create object");

        //$currentMaxId = $xml -> maxid;
        //echo $currentMaxId;

        $obj_xml = new SimpleXMLElement('userData.xml', NULL, TRUE);
        $total = count($obj_xml->children());
        $maxId = $obj_xml->Membership[$total - 1]->cardNumber;

        $cardNumber = $maxId + 1;
?>
<head>
    <Title>
        Add New User | Daily Fresh
    </Title>
    <link rel="stylesheet" href="P10.css">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">

    <script>
        function mouseOverFunc(x){
            x.style.backgroundColor = "lightgray";
        }
        function mouseOutFunc(x){
            x.style.backgroundColor = "transparent";
        }
        
    </script>

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
                    <a href="soen287-asg3-Tiejun/P2_organic_groceries.html">Organic groceries</a>
                </div>
            </div>
                <a href="P5_Sign_in.html">Sign in</a>
                <a href="P4.php">My Cart</a>
            <div class="dropdown">
                <button class="dropbtn">Back Store
                    <i class="fa fa-caret-down"></i>
                </button>
                    <div class="dropdown-content">
                        <a href="P9.html">User</a>
                        <a href="P7.html">Product</a>
                        <a href="soen287-asg3-Tiejun/P11_order_list.php">Order List</a>

                    </div>
            </div>

    </div>
        <div class="path">
            <br>&nbsp;&nbsp;Home&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;Back Store&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;
            <a href="P9.html">User List</a>&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;User Profile
        </div>
        <div class="marginSet">
        <div class="row">
            <div class="column">
                <div >
                    <h2><br/>User Profile:</h2>
                    <br/>
                    <img src="imag/anna.PNG" alt="anna" width="170" height="200">
                </div>
            </div>
            <div class="column">
                <div>
                <form action="addUser.php" method="post">
                    <br/>
                    <br/>
                    <br/>
                    <label for="fname">First name: </label>
                    <input type="text" id="fname" name="fname" style="width: auto;" onmouseover="mouseOverFunc(this)" onmouseout="mouseOutFunc(this)"/>
                    <br/>
                    <br/>
                    <label for="lname">Last name: </label>
                    <input type="text" id="lname" name="lname" style="width: auto;" onmouseover="mouseOverFunc(this)" onmouseout="mouseOutFunc(this)"/>
                    <br/>
                    <br/>
                    <label for="birth">Date of Birth: </label>
                    <input type="date" id="birth" name="birth" min="1900-01-01" max="2021-01-01" onmouseover="mouseOverFunc(this)" onmouseout="mouseOutFunc(this)"/>
                    <br/>
                    <br/>
                    <label for="gender">Gender: </label>
                
                    <input type="radio" id="male" name="gender" value="male" onmouseover="mouseOverFunc(this)" onmouseout="mouseOutFunc(this)"/>
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female" onmouseover="mouseOverFunc(this)" onmouseout="mouseOutFunc(this)"/>
                    <label for="female">Female</label>
                    <input type="radio" id="other" name="gender" value="other" onmouseover="mouseOverFunc(this)" onmouseout="mouseOutFunc(this)"/>
                    <label for="other">Other</label>
                
                    <br/>
                    <label for="address">Address: </label>
                    <input type="text" id="address" name="address" style="width: auto;" onmouseover="mouseOverFunc(this)" onmouseout="mouseOutFunc(this)"/>
                    <br/>
                    <br/>
                    <label for="postcode">Post Code: </label>
                    <input type="text" id="postcode" name="postcode" style="width: auto;" maxlength="6" size="6" onmouseover="mouseOverFunc(this)" onmouseout="mouseOutFunc(this)"/>
                    <br/>
                    <br/>
                    <label for="phone">Phone Number(xxx-xxx-xxxx):</label>
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" onmouseover="mouseOverFunc(this)" onmouseout="mouseOutFunc(this)"/>
                    <br>
                    <br/>
                    <label for="email">Email: </label>
                    <input type="email" id="email" name="email" onmouseover="mouseOverFunc(this)" onmouseout="mouseOutFunc(this)"/>
                    <br/>
                    <br/>
                    <label for="cardNo">(distributed by the system)Membership Card #: </label>
                    <input type="text" id="cardNo" name="cardNo" style="width: auto;" onmouseover="mouseOverFunc(this)" value="<?php echo $cardNumber ?>" onmouseout="mouseOutFunc(this)" readonly/>
                    <br/>
                    <br/>
                    <input class="button" type="submit" value="Save" />
                </form>
                <p>welcome boss:<?php echo $_SESSION['username']; ?></p>
                 <a href = "logout.php" tite = "Logout">click to logout</a>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            </div>
        </div>
        </div>
    </div>

    
    
    <footer class="footer">
        <p>Address: 123 Rue ABC, Montreal, QC H8G 9X7 </p>
    </footer>

   
</body>
</html>