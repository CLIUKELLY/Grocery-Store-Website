//collapsble button
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
            content.style.display = "none";
        } else {
            content.style.display = "block";
        }
    });
}

// Gets the element to operate on
var quantity = document.getElementById('quantity')
var addQ = document.getElementsByClassName('add')
var subQ = document.getElementsByClassName('sub')
var value = document.getElementById('value')

//Take data from local cache, if there is cache, there is data
if (localStorage.Quantity1) {
    quantity.value = localStorage.getItem('Quantity1');
    value.innerHTML = (localStorage.Quantity1 * 6.99).toFixed(2);
} else {
    localStorage.setItem('Quantity1', 0); //Temporary storage
}


addQ[0].addEventListener("click", function() {
    localStorage.Quantity1++;
    calc();

})
subQ[0].addEventListener("click", function() {
    if (localStorage.quantity1 == 0) {
        return;
    }
    if (quantity.value <= 0) {
        alert("It can't be less");
        return;
    }
    localStorage.Quantity1--;
    calc();
})

// Calculate the price
function calc() {
    quantity.value = localStorage.getItem('Quantity1');
    value.innerHTML = '';
    value.innerHTML = (quantity.value * 6.99).toFixed(2);
}

// add cart
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
        type: 'POST',
        data: {
            data: JSON.stringify(data)
        },
        success: (res) => {
            if (res == 0) {
                console.log(res);
                window.location.href = 'P4.html';
            } else {
                alert('Request was aborted');
                //window.location.href = 'P4.html';
            }
        }
    })

}