<?php
    // Start the session
    session_start();

   $xmlTag = array(
       'productName',
       'type',
	   'price',
	   'packQuantity',
	   'size',
	   'description',
	   'quantity',
	   'totalPrice'
   );
   
 
   $data = json_decode($_POST['data'],true);

    //save in xml
    $dom = new DOMDocument('1.0', 'utf8');
    $dom->formatOutput = true;
    $store = $dom->createElement('store');
    $dom->appendChild($store);
    foreach($data as $s) {
        $product = $dom->createElement('product');
        $store->appendChild($product);
        foreach($xmlTag as $x) {
            $element = $dom->createElement($x);
            $product->appendChild($element);
            $text = $dom->createTextNode($s[$x]);
            $element->appendChild($text);
        }
    }
    $dom->save('cartProducts.xml');
    //if ($dom->save('cartProducts.xml')) {
    //    echo 0;
    //}

    //save in SESSION

   $i=0;
   foreach ($data as $item){
        $_SESSION['product'.$i]['productName'] = $data[$i]['productName'];
        //echo $_SESSION['product'.$i]['productName'];
        //echo "<hr>";
        
        $_SESSION['product'.$i]['quantity'] = $data[$i]['quantity'];
        //echo $_SESSION['product'.$i]['quantity'];
        //echo "<hr>";

        $_SESSION['product'.$i]['price'] = $data[$i]['price'];
        //echo $_SESSION['product'.$i]['price'];
        //echo "<hr>";
        $i++;
    }
       //print_r($_SESSION);
       

 ?>