function calPrice(valNum) {
    console.log("val"+valNum);
    document.getElementById("price").innerHTML=(valNum*2.1).toFixed(2);
    if (typeof(Storage) !== "undefined") {
        
          sessionStorage.numberPotato = valNum;
          console.log("val"+sessionStorage.numberPotato);
        
    }
  }

  var toggle=1;
  function info() {
    var text="Always fresh tasting, crispy and delicious," +
    "each bag of Lay's Classic potato chips is made with specially selected potatoes" +
    " and to the highest quality standards. Crispy and light tasting, Lay's Classic " +
    "potato chips were designed to put a smile on everyone's face, which makes them " +
    "the perfect snack to share. Whether you keep a bag in your desk to complement " +
    "your chicken salad sandwich at lunchtime or grab a bag to share at your next " +
    "social occasion, Lay's Classic® chips will surely brighten your day! It's the 'Classic' snack" +
    " tradition Canadians love!";

    if(toggle==0){
        document.getElementById("info").innerHTML="";
        sessionStorage.potatoInfo ="";

    } else {
    document.getElementById("info").innerHTML=text;
      if (typeof(Storage) !== "undefined") {
          
          sessionStorage.potatoInfo = text;
          console.log("val"+sessionStorage.potatoInfo);
          
          }
    }
    toggle ^=1;
  }

if (typeof(Storage) !== "undefined") {
if(sessionStorage.numberPotato!=null){
  document.getElementById("quantity").value = sessionStorage.numberPotato;
  document.getElementById("price").innerHTML=(sessionStorage.numberPotato*2.1).toFixed(2);
}

if(sessionStorage.potatoInfo!=null){
  document.getElementById("info").innerHTML=sessionStorage.potatoInfo;

}

}