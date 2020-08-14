<?php
 
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
 $dom->save('products.xml');
 if ($dom->save('products.xml')) {
	 echo 0;
 }

 ?>