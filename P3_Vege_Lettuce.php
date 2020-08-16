<?php 
// Start the session
session_start();
?>
<html lang="en">
<head>
    <Title>
        Lettuce
    </Title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="P3_Vege.css">
</head>
<!-------------------------------------------------
    Container: contains Header, content, footer
--------------------------------------------------->

<div id="container">

    <body>
        <div class="header">
            <h1>WELCOME TO</h1>
            <h2><I>Daily Fresh</I></h2>
        </div>

        <!--Navigation Bar-->
        <div class="navbar">
            <a href="Index.html">Home</a>
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
                    <a href="#">Order</a>

                </div>
            </div>

        </div>
        <div class="path">
            <br><a href="Index.html">&nbsp;&nbsp;Home&nbsp;&nbsp;</a> 
            <a> &gt;&gt;&nbsp;&nbsp;Aisle&nbsp;&nbsp;</a>
            <a href="P2_Vege.html">&gt;&gt;&nbsp;&nbsp;Vegetable&nbsp;&nbsp;</a>
            <a> &gt;&gt;&nbsp;&nbsp;Lettuce&nbsp;&nbsp;</a>
            
        </div>
        
        <!-------------------------------------------------
            Product description
        --------------------------------------------------->
        <section class="main">

            <!--Aisle Menu-->
            <br><br><br><br>
            <div class="center-left">
                <div class="row">
                    <div class="column">
                        <div class="card">
                            <img src="Vegetable_Lettuce.jpeg" alt="Jane" style="width:100%" >
                        </div>
                        <br>
                    </div>
                    <div class="column">
                        <div class="productName">Lettuce</div>
                        <div class="price">
							<div class="price-text">$<span class="productPrice">2.79</span></div>/ <b>EA</b></div><br><br>

                            <form>
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
                        </form>
                        <br><br>
                        <button type="button" class="collapsible">MORE DESCRIPTION</button>
                        <div class="productDetail">
                            <p>Quantity:<span class="pack">1 pack</span></p>
                            <p>Size: <span class="size">500g</span></p>
                            <p>Type: <span class="type">Vegetable</span></p>
                            <p class="description">Freshest lettuces grew by Quebec local farms.</p>
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

<script src="jquery-3.4.1.min.js"></script>
<script src="P3_Vege_Lettuce.js"></script>
</body>