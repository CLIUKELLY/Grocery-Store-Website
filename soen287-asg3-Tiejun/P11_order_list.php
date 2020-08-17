<!doctype html>
<html lang="en">

<head>
    <Title>
        Organic Groceries Aisle
    </Title>

    <link rel="stylesheet" href="P11.css">
</head>
<!-------------------------------------------------
    Container: contains Header, content, footer
--------------------------------------------------->

<div id="container">

    <body>
    <!--Banner-->
    <div class="header">
        <br>
        <h1>WELCOME TO</h1>
        <p style="font-style: italic">Daily Fresh Back Store</p>

    </div>

    <!--Navigation Bar-->

    <div class="navbar">
        <a href="#home">Home</a>
        <div class="dropdown">
            <button class="dropbtn">Aisle
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Snack</a>
                <a href="#">Beverage</a>
                <a href="#">Vegetable</a>
                <a href="#">Meat</a>
                <a href="#">Organic Groceries</a>
            </div>
        </div>
        <a href="#profile">Profile</a>
        <a href="#signIn">Sign in</a>
        <a href="#myCart">My Cart</a>

    </div>
    <!-------------------------------------------------
        Main content section
    --------------------------------------------------->
    <section class="main">
        <!--Beverage products-->
        <br>
        <table align="center" border="2" width="70%">
            <tr>
                <td width="20%">Order Id</td>
                <td width="20%">Order Date</td>
                <td width="30%">Shipping address</td>
                <td width="10%">add</td>
                <td width="10%">delete</td>
                <td width="10%">edit</td>

            </tr>
        </table>
        <table align="center" border="2" width="70%">
            <?php

            session_start();
            include("includes/classes/Sales.php");
            include("includes/classes/Address.php");
            include("includes/classes/Customer.php");
            include("includes/databaseOperation.php");


            conn();
            $c_id = -1;
            $statement = "select s_id,s_date,a_last,a_first,a_apt,a_rue,a_city,a_zip,a_phone from address,sales where sales.add_id= address.add_id and sales.c_id = " ."'".$c_id."'";

            $STH = $DBH->query($statement);
            $STH->setFetchMode(PDO::FETCH_ASSOC);

            $i = 0;
            while ($row = $STH->fetch()) {
                echo "<tr>";
                echo "<td width='20%'>";
                echo $row['s_id'];
                echo "</td>" ;
                echo "<td width='20%'>" ;
                echo $row['s_date'] ;
                echo "</td>";
                echo "<td width='30%'>" ;
                echo $row['a_last']." ".$row['a_first']." ".$row['a_apt']." " .$row['a_rue']." ".$row['a_city']." ".$row['a_zip']." ".$row['a_phone'];
                echo "</td>" ;
                //echo "<td width='10%'>"."<button onclick="window.location.href='P12_order_profile.html';" >add</button></td>";
                echo "<td width='10%'><button>add</button></td>" ;
                echo "<td width='10%'><button>delete</button></td>" ;
                echo "<td width='10%'><button>edit</button></td>" ;
                echo "</tr>" ;
            }
            close();
            ?>
        </table>

    </section>
    <!--Footer-->
    <div class="footer">
        <p>Address: 123 Rue ABC, Montreal, QC H8G 9X7
        </p>
    </div>
</div>
</body>


</html>
