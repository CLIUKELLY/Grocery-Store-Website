<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Shopping Cart</title>
</head>
<?php
session_start();
include("includes/classes/Cart.php");
include("includes/classes/Product.php");
include("includes/databaseOperation.php");


//from get method
$myProductId = $_GET["id"];
$myProductName = $_GET["name"];
$myProductPrice = $_GET["price"];
//from post method
$myProductQuantity = $_POST["Quantity"];

//create a product object by using the data is transfered from p3 page.
$myProduct = new Product();
$myProduct->setProductName($myProductName);
$myProduct->setProductId($myProductId);
$myProduct->setProductPrice($myProductPrice);
$myProduct->setProductQty($myProductQuantity);

//creat a shopping Cart object, since when people try to submit order, the order will submit to buy.php
//that is this page itself, whether there is a shopping Cart object in session depends on whether buy.php is
// load first time or not,
$shoppingCart = new Cart();
//if there is not shopping cart in session, serialize it and put it into session.
if (empty($_SESSION["shoppingCart"])) {
    $_SESSION["shoppingCart"] = serialize($shoppingCart);
} else {
    //if there is already one, get it out and unserializes it.
    global $shoppingCart;
    $shoppingCart = unserialize($_SESSION["shoppingCart"]);
}
//creat a Cartitem buy myProduct.
$cartItem = new CartItem();
$cilist = $shoppingCart->getCilist();

$cartItem = new CartItem();
$cartItem->setCount($myProductQuantity);
$cartItem->setItemId($myProductId);
$cartItem->setPrice($myProductPrice);
$cartItem->setName($myProductName);
$shoppingCart->add($cartItem);

$_SESSION["shoppingCart"] = serialize($shoppingCart);


?>
<body>
<table align="center" border="2" width="70%">
    <tr>
        <td width="15%">Product ID</td>
        <td width="30%">Product Name</td>
        <td width="15%">Quantity</td>
        <td width="25%">Price</td>
        <td width="15%">Total</td>
    </tr>
</table>
<form name="buyform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="hidden" name="action" value="post">
    <table align="center" width="70%">
        <?php
        $totalcount = 0;
        $cilist = $shoppingCart->getCilist();
        foreach ($cilist as $item) {
            global $totalPrice;
            $item;
            $totalPrice += $item->getPrice() * $item->getCount();
            $output = "<tr>";
            $output .= "<td width='15%'>";
            $output .= $item->getItemId();
            $output .= "</td>";


            $output .= "<td width='30%'>";
            $output .= $item->getName();
            $output .= "</td>";


            $output .= "<td width='15%'>";
            $output .= $item->getCount();
            $output .= "</td>";


            $output .= "<td width='25%'>";
            $output .= $item->getPrice();
            $output .= "</td>";
            $output .= "<td width='15%'>";
            $output .= $item->getTotalPrice();
            $output .= "</tr>";
            echo $output;
        }
        function getTotalprice()
        {
            global $totalPrice;
            return $totalPrice;
        }

        ?>

        <tr>
            <td><br></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <br>
        </tr>
        <tr>
            <td colspan="3" align="right">Total:</td>
            <td colspan="1" align="left"><?php echo getTotalprice(); ?></td>
        </tr>
        <tr>
            <br>
        </tr>
        <tr>
            <td colspan="4" width="15%" align="right"><input type="button"
                                                             value="Submit"
                                                             onclick="document.location.href='confirm.php'">
            </td>
        </tr>
    </table>
</form>
</body>
</html>