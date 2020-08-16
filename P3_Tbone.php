<?php 
session_start();
?>

<!doctype html>

<html lang="en">



<head>

    <Title>

        T-bone Steak

    </Title>

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="P3_meat.css">

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

        <!--directory-->

        <div class="path">

            <br><a href="#home">&nbsp;&nbsp;Home&nbsp;&nbsp;</a>

            <a> &gt;&gt;&nbsp;&nbsp;Aisle&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;Meat&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;T-bone Steak </a>



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

                            <img src="T-bone Steak.png" alt="T-bone Steak" style="background:white;" width="250px" heigh="250px">

                        </div>

                        <br>

                    </div>

                    <div class="column">

                        <div class="productName">&nbsp;&nbsp;&nbsp;T-bone Steak</div><br/>

                        <div class="price">&nbsp;&nbsp;&nbsp;$14.99 / lb</div>

                        <div class="productDetail">
						
						<p><br/>Cut from Canada AA or higher.<br/><br/>Size: 0.42kg/tray (in average)<br/><br/></p></div>

                        <form action="P3_Tbone.php" method="POST">

                            <label for="quantity" class="productDetail">Quantity:</label>

                            <input type="number" id="quantity" name="quantity" value="0"><br><br>

                            <input type = "button" value = "In Total" style = "padding-left:10px;padding-right:10px;" onclick = "computeCost();" />
							
							<input type = "text" size = "8" id = "cost" onfocus = "this.blur();" /><br><br>

                            <div class="column">

                                <input type="submit" class="button" value="ADD TO CART" onclick="cart();">

                            </div><br/><br/><br/><br/>

                        </form>
							
						<button onclick="clickshow()" style="padding-left:10px; padding-right:10px;padding-top:5px;padding-bottom:5px;">DETAILED DESCRIPTION</button><br/><br/>

						<div id="description" style="display:none;" >
							
						The T-Bone is cut from the short loin, and has two different steaks attached to the bone. This one is called tenderloin.
						
						</div>
						
						<script type = "text/javascript">
						function computeCost() {
						var quantity = document.getElementById("quantity").value;
						document.getElementById("cost").value = quantity * 14.99;
						}
						function cart(){
	                    var quantity = document.getElementById("quantity").value;
                        if ( quantity != "0" ){
                          window.location = "P4.html";
						  alert ("Add to cart successfully");
						  return true;
                        }
						else{
						  alert ("Please select quantity");
						  return false;
                        }
						}
						function clickshow() {
                        var x = document.getElementById("description");
                        if (x.style.display === "none") {
							x.style.display = "block";
						} else {
							x.style.display = "none";
						}
						}
	                    </script>

                        

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

<script src="P3_meat.js"></script>

</body>





</html>