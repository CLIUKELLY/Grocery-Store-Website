//collapsble button
var collapsible = document.getElementsByClassName("collapsible");
var quantity = document.getElementById('quantity')
var addQuantity = document.getElementsByClassName('add')
var subQuantity = document.getElementsByClassName('sub')
var maxQuantity = 180;
quantity.value = 0;
for (var i = 0; i < collapsible.length; i++) {
    collapsible[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
            content.style.display = "none";
        } else {
            content.style.display = "block";
        }
    });
}
//local temporary storage of quantity
if (localStorage.Quantity2) {
    quantity.value = localStorage.getItem('Quantity2');
} else {
    localStorage.setItem('Quantity2', 0); 
}
        
addQuantity[0].addEventListener("click", function() {
    if (localStorage.Quantity2 > maxQuantity-1) {
        return;
    }
    localStorage.Quantity2++;
    quantity.value = localStorage.getItem('Quantity2');
})
subQuantity[0].addEventListener("click", function() {
    if (localStorage.Quantity2 == 0) {
        return;
    }
    localStorage.Quantity2--;
    quantity.value = localStorage.getItem('Quantity2');
})
        
var subtotal = quantity.value;
var finalPrice = localStorage.Quantity2 * 1.59
document.getElementById("subtotal").innerHTML = "$" + finalPrice.toFixed(2);

// add to cart
document.getElementsByClassName('btn_addToCart')[0].onclick = function() {
    if (quantity.value <= 0) {
        alert("Please select item quantity");
        return;
    }
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    console.log(cart);
    let name = document.getElementsByClassName('productName')[0].innerHTML;
    let type = document.getElementsByClassName('type')[0].innerHTML;
    let price = document.getElementsByClassName('productPrice')[0].innerText;
    let packQuantity = document.getElementsByClassName('pack')[0].innerHTML;
    let size = document.getElementsByClassName('size')[0].innerHTML;
    let description = document.getElementsByClassName('description')[0].innerHTML;
    let obj = {
        productName: name,
        type: type,
        price: price,
        packQuantity: packQuantity,
        size: size,
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