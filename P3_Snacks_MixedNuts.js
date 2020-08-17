function calPrice(valNum) {
    console.log("val"+valNum);
    document.getElementById("price").innerHTML=(valNum*11.99).toFixed(2);
    if (typeof(Storage) !== "undefined") {
        
          sessionStorage.numberNuts = valNum;
          console.log("val"+sessionStorage.numberNuts);
        
    }
  }

  var toggle=1;
  function info() {
    var text="Mixed nuts are a snack food consisting of any mixture of mechanically or manually combined nuts. " +
    "Peanuts, almonds, walnuts, Brazil nuts, cashews, hazelnuts, and pecans are common constituents of mixed nuts. " +
    "Mixed nuts may be salted, roasted, cooked, or blanched. A Harvard University Professor of Nutrition and Epidemiology, " +
    "Dr. Frank Hu, reports that recent studies found daily nut-eaters were less likely to die of cancer, heart disease and respiratory disease.";

    if(toggle==0){
        document.getElementById("info").innerHTML="";
        sessionStorage.nutsInfo ="";

    } else {
    document.getElementById("info").innerHTML=text;
      if (typeof(Storage) !== "undefined") {
          
          sessionStorage.nutsInfo = text;
          console.log("val"+sessionStorage.nutsInfo);
          
          }
    }
    toggle ^=1;
  }

if (typeof(Storage) !== "undefined") {
if(sessionStorage.numberNuts!=null){
  document.getElementById("quantity").value = sessionStorage.numberNuts;
  document.getElementById("price").innerHTML=(sessionStorage.numberNuts*11.99).toFixed(2);
}

if(sessionStorage.nutsInfo!=null){
  document.getElementById("info").innerHTML=sessionStorage.nutsInfo;

}

}