<!doctype html>
<html lang="en">

<head>
    <Title>
        Organic Groceries Aisle
    </Title>

    <link rel="stylesheet" href="P12.css">
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
                <td width="80%"><input type="text" name="orderId"></td>
            </tr>
            <tr>
                <td width="20%">Order Date</td>
                <td width="80%"><input type="text" name="orderDate"></td>
            </tr>
            <tr>
                <td width="30%">ess</td>
                <td width="30%"><input type="text" name="orderId"></td>
            </tr>
            <tr>
                <td width="80"> </td>
                <td>

                    <button>Save</button></td>

            </tr>
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
