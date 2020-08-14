<?php ?>
<html lang="en">
<head>
    <Title>
        ESKA Water
    </Title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css_CL/P3_Beverage.css">
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
            <h2>
                <I>Daily Fresh</I>
            </h2>
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
                    <a href="P11_order_list.html">Order List</a>

                </div>
            </div>

        </div>

        <!--directory-->
        <div class="path">
            <br><a href="#home">&nbsp;&nbsp;Home&nbsp;&nbsp;</a>
            <a> &gt;&gt;&nbsp;&nbsp;Aisle&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;Beverage&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;ESKA Water </a>

        </div>

        <!-------------------------------------------------
            Main content section
        --------------------------------------------------->
        <section class="main">

            <!--Aisle Menu-->
            <br><br><br><br>
            <div class="center-left">
                <div class="row">
                    <div class="column">
                        <div class="card">
                            <img src="image_CL/ESKA%20Natural%20Spring%20Water.jpeg" alt="CANADA DRY Ginger Ale" width="250px" heigh="250px">
                        </div>
                        <br>
                    </div>
                    <div class="column">
                        <div class="productName">ESKA Water</div>
                        <div class="price">
							<div class="price-text">$<span class="productPrice">5.29</span></div>/ <b>EA</b></div><br><br>

                        <!-- <form action="adminCart.php" method="get"> -->
                            <div class="column-1">
                                <label for="quantity" class="productDetail">Quantity:</label>
                                <button class="sub" style="width: 20px;">-</button>
                                <input type="text" id="quantity" name="quantity" value="0">
                                <button class="add" style="width: 20px;">+</button>
                                <br><br>
                            </div>
                            <div class="column-1">
                                <div id=subtotal style="font-size: 20px;">$
                                    <span id="value">0</span>
                                </div>
                                <br><br>
                            </div>
                            <div class="column-1">
                                <button class="btn_addToCart">ADD TO CART</button>
                            </div>
                        <!-- </form> -->
                        <br><br>
                        <button type="button" class="collapsible">MORE DESCRIPTION</button>
                        <div class="productDetail">
                            <p>Quantity:<span class="pack">24 Bottles</span></p>
                            <p>Size: <span class="size">500ml/Bottle</span></p>
                            <p>Type: <span class="type">Beverage</span></p>
                            <p class="description">Eska natural spring water comes from St-Mathieu d'Harricana, Quebec.</p>
                        </div>
                    </div>
                </div>


            </div>
            <!--Footer-->
            <div class="footer">
                <p>Address: 123 Rue ABC, Montreal, QC H8G 9X7
                </p>
            </div>

        </section>
</div>

<script src="js/P3_Beverage_ESKA Water.js"></script>
</body>


</html>