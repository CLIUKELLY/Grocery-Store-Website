var quantity = document.getElementById('quantity');

// add cart
document.getElementsByClassName('button_add')[0].onclick = function() {
    if (quantity.value <= 0) {
        alert("Please select item quantity");
        return;
    }
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    console.log(cart);
    let name = document.getElementsByClassName('productName')[0].innerHTML;
    //let type = document.getElementsByClassName('type')[0].innerHTML;
    let price = document.getElementsByClassName('price')[0].innerText;
    //let packQuantity = document.getElementsByClassName('pack')[0].innerHTML;
    //let size = document.getElementsByClassName('size')[0].innerHTML;
    let description = document.getElementsById('description')[0].innerHTML;
    let obj = {
        productName: name,
        //type: type,
        price: price,
        //packQuantity: packQuantity,
        //size: size,
        description: description,
        quantity: quantity.value,
        totalPrice: 0
    }
    cart.push(obj);
    localStorage.setItem('cart', JSON.stringify(cart));
    let data = JSON.parse(localStorage.getItem('cart'));

    $.ajax({
        //url: proBaseUrl +'adminCart.php',
        url: 'adminCart.php',
        //url: 'PHPtest.php',
        type: 'POST',
        data: {
            data: JSON.stringify(data)
        },

        success: (res) => {
            if (res == 0) {
                console.log(res);
                window.location.href = 'P4.php';
            } else {
                //alert('Request was aborted');
                window.location.href = 'P4.php';
            }
        }
    })

}
