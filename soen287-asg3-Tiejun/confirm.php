<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Insert title here</title>
</head>
<?php
session_start();
include("includes/classes/Cart.php");
include("includes/classes/Customer.php");
include("includes/classes/Product.php");
include("includes/classes/Address.php");
include("includes/classes/Sales.php");
include("includes/classes/SalesLine.php");
include("includes/classes/Payment.php");
include("includes/databaseOperation.php");
//create test object: Customer, Sales, SalesLine.
global $customer;
$customer = new Customer();
$cart = new Cart();
$cart = unserialize($_SESSION["shoppingCart"]);
$clist = $cart->getCilist();
$customer->setCUserid(1);
global $myPay, $mySales, $mySalesLine;
$myPay = new Payment();

$mySales = new Sales();
$mySales->setAddId(3);
$mySales->setCId("-1");
$mySales->setPayId(2);
$mySales->save();


$_SESSION["mySales"] = serialize($mySales);
$mySalesLine = new SalesLine();
$mySalesLine->setSId($mySales->findSalesById());
$mySalesLine->setMyCart($cart);
$_SESSION["mySalesLine"] = serialize($mySalesLine);
?>
<body>
<h3>Order details</h3>
<table align="center" border="2" width="70%">
    <tr>
        <td width="25%">Product Name</td>
        <td width="25%">Count</td>
        <td width="25%">Unit Price</td>
        <td width="25%">Total Price</td>
    </tr>
</table>

<table align="center" border="2" width="70%">
    <?php
    $totalcount = 0;
    global $cart;
    $cilist = $cart->getCilist();
    foreach ($cilist as $cartItem) {
        global $totalPrice;
        $totalPrice += $cartItem->getPrice() * $cartItem->getCount();
        $output = "<tr>";
        $output .= "<td width='25%'>";
        $itemId = $cartItem->getItemId();
        $item = new Product();
        $itemResult = $item->getProductById($itemId);
        $output .= $itemResult["item_name"];
        $output .= "</td>";
        $output .= "<td width='25%'>";
        $output .= $cartItem->getCount();
        $output .= "</td>";
        $output .= "<td width='25%'>";
        $output .= $itemResult["price"];

        $output .= "</td>";
        $output .= "<td width='25%'>";
        $totalcount += $cartItem->getTotalPrice();
        $output .= $totalPrice;
        $output .= "</td>";
        $output .= "</tr>";
        echo $output;
    }
    ?>
</table>
<br>
<br>
<br>
<br>
<h3>Please Check your shipping address</h3>
<br>


<br>
</body>
</html>