<?php

// Start the session
session_start();
//session_destroy()
//take items out of PHP SESSION
$j=0;
foreach($_SESSION as $item){
    //echo "<hr>";
    $cartPHP[$j]['productName'] = $_SESSION['product'.$j]['productName'];
    $cartPHP[$j]['quantity'] = $_SESSION['product'.$j]['quantity'];
    $cartPHP[$j]['price'] = $_SESSION['product'.$j]['price'];
    //echo $cartPHP[$j]['productName'];
    //echo $_SESSION['product'.$j]['quantity'];
    //echo "  ";
    //echo $_SESSION['product'.$j]['price'];
    //echo "  ";
    $j++;
}
//echo "<hr>";
//print_r($_SESSION);
//print_r($cartPHP);
//echo "<hr>";


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <Title>
            Shopping Cart
        </Title>
        <link rel="stylesheet" type="text/css" href="css_CL/P4.css">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
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
            <!-------------------------------------------------
            Navigation Bar
        --------------------------------------------------->

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

            <!-------------------------------------------------
            Main content section
        --------------------------------------------------->
            <section class="main">
                <div class="row">

                    <div class="col-1 col-t-1 col-p-1">
                        <!-------------------------------------------------
                 Shopping Cart List
                     ------------------------------------------------->
                        <div class="shopping-cart">
                            <br>
                            <h2>Shopping Cart</h2>
                            <form name="ShoppingList">

                                <table id="table-shopping-cart">
                                    <tr class="row1">
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Subtotal</th>
                                        <th>Delete</th>
                                    </tr>
                                    <tbody id="content">
                                        <!-- <tr class="cartRows">
										    <td class="product-name">COCA-COLA</td>
										    <td class="product-price">$6.29</td>
										    <td>
										        <input type="button" class="btn-change COLAsub" value="-">
										        <span class="qtn-addToCart-COLA">0</span>
										        <input type="button" class="btn-change COLAadd" value="+">
										    </td>
										    <td class="product-subtotal-COLA">$0</td>
										    <td>
										        <input type="button" class="btn-delete" value="Delete" onclick="deleteItem(this,0)">
										    </td>
										
										</tr> -->
                                    </tbody>
                                </table>

                            </form>


                        </div>
                    </div>

                    <div class="col-2 col-t-2 col-p-2">


                        <!-------------------------------------------------
                  Shopping Cart Summary
                  --------------------------------------------------->

                        <div class="cart-summary">
                            <div class="cart-summary-container">
                                <h4>Cart Summary
                                    <span class="price" style="color:black">
									<i class="fa fa-shopping-cart"></i> <p id=shoppingCartTotalItems>0</p> 
									</span>
                                </h4>
                                <hr>
                                <p>Subtotal <b>$<span id="Subtotal">0</span></b></p>
                                <p>QST <b>$<span id="QST">0</span></b></p>
                                <p>GST <b>$<span id="GST">0</span></b></p>
                                <p>Total* <b>$<span id="Total">0</span></b></p>
                                <hr>
                                <p>Estimated Total<b>$<span id="Estimated">0</span></b></p>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="continue-shopping">
                    <button onclick="location.href='index.html';" class="btn-continueShopping">Continue Shopping</button>
                </div>

            </section>
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

    
    <script type="text/javascript" id="cartSESSION">
        <?php
            $php_array = $cartPHP;
            $js_array = json_encode($php_array);
            echo "var javascript_array = ".$js_array.";\n";
        ?>
        //console.log(javascript_array);
        
    </script>
    <script type="text/javascript" src="js_CL/P4.js"></script>

    </html>