<?php 
session_start();
?>

<!doctype html>

<html lang="en">



<head>

    <Title>

        Bacon

    </Title>

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="P3_meat.css">
	
    <script type="text/javascript">

    /*$(document).ready(function(){

      $.ajax({
        type:'post',
        url:'P3_meat_store_items.php',
        data:{
          total_cart_items:"totalitems"
        },
        success:function(response) {
          document.getElementById("quantity").value=response;
        }
      });

    });

    function cart(id)
    {
	  var ele=document.getElementById(id);
	  var img_src=ele.getElementsByTagName("img")[0].src;
	  var name=document.getElementById("productName").value;
	  var price=document.getElementById("price").value;
	
	  $.ajax({
        type:'post',
        url:'P3_meat_store_items.php',
        data:{
          item_src:img_src,
          item_name:name,
          item_price:price
        },
        success:function(response) {
          document.getElementById("quantity").value=response;
        }
      });
	
    }

    function show_cart()
    {
      $.ajax({
      type:'post',
      url:'P3_meat_store_items.php',
      data:{
        showcart:"cart"
      },
      success:function(response) {
        document.getElementById("mycart").innerHTML=response;
        $("#mycart").slideToggle();
      }
     });

    }
	
</script>*/

</head>

<!-------------------------------------------------

    Container: contains Header, content, footer

--------------------------------------------------->



<div id="container">



    <body>
	<!--<p id="cart_button" onclick="show_cart();">
    <img src="shopping-cart-icon.jpg">
    <input type="button" id="total_items" value="">
    </p>

    <div id="mycart">
    </div>-->

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

            <a href="P5_Sign_in.php">Sign in</a>

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

            <a> &gt;&gt;&nbsp;&nbsp;Aisle&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;Meat&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;Bacon </a>



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

                            <img src="Bacon.jpg" alt="Bacon" width="250px" heigh="250px">

                        </div>

                        <br>

                    </div>

                    <div class="column">

                        <div class="productName">&nbsp;&nbsp;&nbsp;Bacon</div><br/>

                        <div class="price">&nbsp;&nbsp;&nbsp;$7.49 / ea</div>

                        <div class="productDetail">
						
						<p><br/>Manufacturer: President's Choice<br/><br/>Size: 500g<br/><br/></p></div>
						

                        <form method="POST">

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
							
						With 50% less salt than regular PC Bacon, this product offers a simple way to reduce sodium intake without giving up one of your favourite foods. Naturally smoked and crackling with lip-smacking flavour, you can go further and round it out with other sodium-conscious options such as an unsalted omelette seasoned with fresh herbs.
						
						</div>
						
						
						<script type = "text/javascript">
						function computeCost(){
						var quantity = document.getElementById("quantity").value;
						document.getElementById("cost").value = quantity * 7.49;
						//document.getElementById("cost").innerHTML = (localStorage.Quantity * 7.49).toFixed(2);
						}
						function cart(){
	                    var quantity = document.getElementById("quantity").value;
                        if ( quantity != "0" ){
                          window.location = "P4.php";
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