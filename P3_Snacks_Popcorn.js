function calPrice(valNum) {
    console.log("val"+valNum);
    document.getElementById("price").innerHTML=(valNum*3.99).toFixed(2);
    if (typeof(Storage) !== "undefined") {
        
          sessionStorage.numberPopcorn = valNum;
          console.log("val"+sessionStorage.numberPopcorn);
        
    }
  }

  var toggle=1;
  function info() {
    var text="Popcorn (popped corn, popcorns or pop-corn) is a variety of corn kernel which expands and " +
    "puffs up when heated; the same names are also used to refer to the foodstuff produced by the expansion." + 
    " A popcorn kernel's strong hull contains the seed's hard, starchy shell endosperm with 14-20% moisture, " +
     "which turns to steam as the kernel is heated.";

    if(toggle==0){
        document.getElementById("info").innerHTML="";
        sessionStorage.popcornInfo ="";

    } else {
    document.getElementById("info").innerHTML=text;
      if (typeof(Storage) !== "undefined") {
          
          sessionStorage.popcornInfo = text;
          console.log("val"+sessionStorage.popcornInfo);
          
          }
    }
    toggle ^=1;
  }

if (typeof(Storage) !== "undefined") {
if(sessionStorage.numberPopcorn!=null){
  document.getElementById("quantity").value = sessionStorage.numberPopcorn;
  document.getElementById("price").innerHTML=(sessionStorage.numberPopcorn*3.99).toFixed(2);
}

if(sessionStorage.popcornInfo!=null){
  document.getElementById("info").innerHTML=sessionStorage.popcornInfo;

}

}