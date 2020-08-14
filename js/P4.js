let cart = JSON.parse(localStorage.getItem('cart')) || [];

// Init data
(function(){
	initData();
	// calcItemSubtotal();
	// calcSummary();
	// calcSubtotal();
	// calcQST();
	// calcGST();
	// calcTotal();
	// calcEstimated();
})();

function initData(){
	let str = '';
		for (var i = 0; i < cart.length; i++) {
		str	+='<tr class="cartRows">'+
				'<td class="product-name">'+cart[i].productName+'</td>'+
				'<td class="product-price">$'+parseFloat(cart[i].price)+'</td>'+
				'<td>'+
					'<input type="button" class="btn-change COLAsub" value="-">'+
					   '<span class="qtn-addToCart-COLA">'+cart[i].quantity+'</span>'+
					'<input type="button" class="btn-change COLAadd" value="+">'+
				'</td>'+
				'<td class="product-subtotal-COLA">$<span class="total-price">'+cart[i].totalPrice+'</span></td>'+
				'<td>'+
					'<input type="button" class="btn-delete" value="Delete">'+
				'</td>'+
			'</tr>'
		}
	let body = document.getElementById('content');
	body.innerHTML = str;
	let sub = document.getElementsByClassName('COLAsub');
	let add = document.getElementsByClassName('COLAadd');
	let del = document.getElementsByClassName('btn-delete');
	let index = 0;
	for (var j = 0; j < cart.length; j++) {
		sub[j].index = j;
		add[j].index = j;
		del[j].index = j;
		sub[j].onclick = subCount;
		add[j].onclick = addCount;
		del[j].onclick = delItem;
	}
	calcItemSubtotal();
	calcSummary();
	calcSubtotal();
	calcQST();
	calcGST();
	calcTotal();
	calcEstimated();
}
function subCount(){
	let count = parseInt(cart[this.index].quantity);
	if (count<=0) {
		alert("It can't be less.");
		return;
	}
	count--;
	document.getElementsByClassName('qtn-addToCart-COLA')[this.index].innerText = count;
	cart[this.index].quantity = count;
	localStorage.setItem('cart',JSON.stringify(cart));
	calcItemSubtotal();
	calcSummary();
	calcSubtotal();
	calcQST();
	calcGST();
	calcTotal();
	calcEstimated();
}
function addCount(){
	let count = parseInt(cart[this.index].quantity);
	count++;
	document.getElementsByClassName('qtn-addToCart-COLA')[this.index].innerText = count;
	cart[this.index].quantity = count;
	localStorage.setItem('cart',JSON.stringify(cart));
	calcItemSubtotal();
	calcSummary();
	calcSubtotal();
	calcQST();
	calcGST();
	calcTotal();
	calcEstimated();
}

function delItem(){
	console.log(this.index);
	console.log(cart);
	cart.splice(this.index,1);
	localStorage.setItem('cart',JSON.stringify(cart));
	initData();
	
}
function calcItemSubtotal() {
	let itemSubtotal = document.getElementsByClassName('total-price');
	for (var i = 0; i < cart.length; i++) {
		cart[i].totalPrice = parseInt(cart[i].quantity) * parseFloat(cart[i].price);
		itemSubtotal[i].innerHTML = cart[i].totalPrice.toFixed(2);
	}
}

function calcSummary(){
	let summary = document.getElementById('shoppingCartTotalItems');
	let count = 0;
	for (var k = 0; k < cart.length; k++) {
		 count += parseInt(cart[k].quantity);
	}
	summary.innerHTML = count;
}

function calcSubtotal(){
	let subtotal = document.getElementById('Subtotal');
	let count = 0;
	for (var k = 0; k < cart.length; k++) {
		 count += (parseFloat(cart[k].quantity) * parseFloat(cart[k].price));
	}
	subtotal.innerHTML = count.toFixed(2);
}
function calcQST(){
	let subtotal = parseFloat(document.getElementById('Subtotal').innerText);
	let QST = document.getElementById('QST');
	let count = subtotal * 9.975/100;
	QST.innerHTML = count.toFixed(2);
}

function calcGST(){
	let subtotal = parseFloat(document.getElementById('Subtotal').innerText);
	let GST = document.getElementById('GST');
	let count = subtotal * 5/100;
	GST.innerHTML = count.toFixed(2);
}

function calcTotal(){
	let Total = document.getElementById('Total');
	let QST = parseFloat(document.getElementById('QST').innerText);
	let GST = parseFloat(document.getElementById('GST').innerText);
	let count = QST + GST;
	Total.innerHTML = count.toFixed(2);
	return Total.innerHTML;
}

function calcEstimated(){
	let Estimated = document.getElementById('Estimated');
	Estimated.innerHTML = calcTotal();
}