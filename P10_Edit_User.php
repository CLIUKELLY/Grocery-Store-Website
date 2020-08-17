<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<?php

if(isset($_SESSION['username']) && isset($_SESSION['loginlogin'])){
    $uuname=$_SESSION['username'];
    $ppword=$_SESSION['loginlogin'];
} else  {
    echo "<a style href=\"P9.html\" style=\"color:#FF0000;\">Your password is wrong.username is admin password is admin.CLICK GO BACK</a>";
    exit(1);
}
?>


<head>
    <Title>
        Edit User | Daily Fresh
    </Title>
    <link rel="stylesheet" href="P10.css">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">

    <script>
        function mouseOverFunc(x){
            x.style.backgroundColor = "lightgray";
        }
        function mouseOutFunc(x){
            x.style.backgroundColor = "transparent";
        }
        
    </script>
    <script>


        function accdelete(){

            var txt;
            var r = confirm("Are you sure to delete this account?");
            if (r == true) {
                txt = "The customer account HAS BEEN deleted!";

            } else {
                txt = "The customer account has NOT been deleted!";
            }
            alert(txt);
        }
    </script>

</head>

<body>
    
    <div class="header">
            <h1>WELCOME TO</h1>
            <h2><i>Daily Fresh Back Store</i></h2>
    </div>


        <!--Navigation Bar-->

        <div class="navbar">
            <a href="index.html">Home</a>
            <div class="dropdown">
                <button class="dropbtn">Aisle
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="P2_Snacks.html">Snack</a>
                    <a href="P2_Beverage.html">Beverage</a>
                    <a href="P2_Vege.html">Vegetable</a>
                    <a href="P2_meat.html">Meat</a>
                    <a href="P2_organic_groceries.html">Organic groceries</a>
                </div>
            </div>
                <a href="P5_Sign_in.html">Sign in</a>
                <a href="P4.html">My Cart</a>
            <div class="dropdown">
                <button class="dropbtn">Back Store
                <i class="fa fa-caret-down"></i>
            </button>
                <div class="dropdown-content">
                    <a href="P9.html">User</a>
                    <a href="P7.html">Product</a>
                    <a href="P11_order_list.html">Order</a>

                </div>
            </div>
        </div>
        <div class="path">
            <br>&nbsp;&nbsp;Home&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;Back Store&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;
            <a href="P9.html">User List</a>&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;User Profile
        </div>
        <div class="marginSet">
        <div class="row">
            <div class="column">
                <div >
                    <h2><br/>User Profile:</h2>
                    <br/>
                    <img src="imag/anna.PNG" alt="anna" width="170" height="200">
                </div>
            </div>

           
            
            <div class="column">
                <div>
                <form action="editUser.php" method="post">
                    <br/>
                    <br/>
                    <br/>
                    <label for="fname">First name: </label>
                    <input type="text" id="fname" name="fname" style="width: auto;" onmouseover="mouseOverFunc(this)" onmouseout="mouseOutFunc(this)"/>
                    <br/>
                    <br/>
                    <label for="lname">Last name: </label>
                    <input type="text" id="lname" name="lname" style="width: auto;" onmouseover="mouseOverFunc(this)" onmouseout="mouseOutFunc(this)"/>
                    <br/>
                    <br/>
                    <label for="birth">Date of Birth: </label>
                    <input type="date" id="birth" name="birth" min="1900-01-01" max="2021-01-01" value= "" onmouseover="mouseOverFunc(this)" onmouseout="mouseOutFunc(this)"/>
                    <br/>
                    <br/>
                    <label for="gender">Gender: </label>
                
                    <input type="radio" id="male" name="gender" value="male" onmouseover="mouseOverFunc(this)" onmouseout="mouseOutFunc(this)"/>
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female" onmouseover="mouseOverFunc(this)" onmouseout="mouseOutFunc(this)"/>
                    <label for="female">Female</label>
                    <input type="radio" id="other" name="gender" value="other" onmouseover="mouseOverFunc(this)" onmouseout="mouseOutFunc(this)"/>
                    <label for="other">Other</label>
                
                    <br/>
                    <label for="address">Address: </label>
                    <input type="text" id="address" name="address" style="width: auto;" onmouseover="mouseOverFunc(this)" onmouseout="mouseOutFunc(this)"/>
                    <br/>
                    <br/>
                    <label for="postcode">Post Code: </label>
                    <input type="text" id="postcode" name="postcode" style="width: auto;" maxlength="6" size="6" onmouseover="mouseOverFunc(this)" onmouseout="mouseOutFunc(this)"/>
                    <br/>
                    <br/>
                    <label for="phone">Phone Number(xxx-xxx-xxxx):</label>
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" onmouseover="mouseOverFunc(this)" onmouseout="mouseOutFunc(this)"/>
                    <br>
                    <br/>
                    <label for="email">Email: </label>
                    <input type="email" id="email" name="email" onmouseover="mouseOverFunc(this)" onmouseout="mouseOutFunc(this)"/>
                    <br/>
                    <br/>
                    <label for="cardNo">Membership Card #: </label>
                    <input type="user" id="user" name="user" style="width: auto;" onmouseover="mouseOverFunc(this)" onmouseout="mouseOutFunc(this)" readonly/>
                    <br/>
                    <br/>
                    <input class="button" type="submit" value="Save the Changes" />
                                  <input class="button" type="button" value="Cancel" onclick="window.location.href='P9.php'"/>
                </form>
                <form action="" method="post">
                <input class="button" type="submit" onclick=accdelete(); formaction="P9_Del.php?user=<?php echo $_GET["user"] ?>" value="Delete this User" />
                </form>
                <p>welcome boss:<?php echo $_SESSION['username']; ?></p>
                <a href = "logout.php" tite = "Logout">click to logout</a>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            </div>
        </div>
        </div>
    </div>

    
    
    <footer class="footer">
        <p>Address: 123 Rue ABC, Montreal, QC H8G 9X7 </p>
    </footer>
    <script>
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        myFunction(this);
                    }
                };
                xhttp.open("GET", "userData.xml", true);
                xhttp.send();

                //$obj_xml = new SimpleXMLElement('userData.xml', NULL, TRUE);
   

                
                function myFunction(xml) {
                    var xmlDoc = xml.responseXML;
                    var total_len=xmlDoc.getElementsByTagName('firstname').length;
                    console.log("aaaaa"+total_len);
                   
                    const queryString = window.location.search;
                    const urlParams = new URLSearchParams(queryString);
                    const usersid = urlParams.get('user');
            
                    var i=0;
                    
                    var useridall = [];
                        for(i=0;i<total_len;i++){
                            var idlocal = xmlDoc.getElementsByTagName('cardNumber')[i];
                            var fid = idlocal.childNodes[0].nodeValue;
                            console.log("1useridnumber"+fid+"i"+i+"userid"+usersid);
                            if(usersid==fid){
                                console.log("userid"+usersid+"i"+i);
                                break;
                            }
                        }
                    var userindex;
                    userindex=i;

                    console.log("user index "+userindex);
                    function deleteFunction(x) {
                        x = xmlDoc.getElementsByTagName("Membership")[7];
                        x.parentNode.removeChild(x);
                    }
            
            //get name
                    var firstname = xmlDoc.getElementsByTagName('firstname')[userindex];
                    var lastname = xmlDoc.getElementsByTagName('lastname')[userindex];
                    var fname = firstname.childNodes[0].nodeValue;
                    var lname= lastname.childNodes[0].nodeValue;
            
                    document.getElementById("fname").value = fname;
                    document.getElementById("lname").value = lname;
            
            
            //get birth
                    var birthDate = xmlDoc.getElementsByTagName('birth')[userindex];
                    var birthD = birthDate.childNodes[0].nodeValue;

                    console.log("birthD "+ birthD);

                    //TODO replace / by - format is 1900-02-03
                    //​var rightformat = birthD.replace("/", "-");
                    birthD[4]="-";
                    birthD[6]="-";

                    var newbirth=birthD[0]+"" +birthD[1]+""+birthD[2]+""+birthD[3]+"-"+birthD[5]+birthD[6]+"-"+birthD[8]+birthD[9];
                    console.log("after birthD "+newbirth);
                    console.log("after birthD "+ "1900-02-23");
                    document.getElementById("birth").value = newbirth;
            
            // get gender 
                    var gendergender = xmlDoc.getElementsByTagName('gender')[userindex];
                    var gender = gendergender.childNodes[0].nodeValue;
            
                    console.log("gender "+ gender);
                    var lowgender = gender.toLowerCase();
                    document.getElementById(lowgender).checked=true;

                
            //get address
                    var address = xmlDoc.getElementsByTagName('address')[userindex];
                    var addr = address.childNodes[0].nodeValue;
                    document.getElementById("address").value = addr;

                    var postcode = xmlDoc.getElementsByTagName('postcode')[userindex];
                    var pc = postcode.childNodes[0].nodeValue;
                    document.getElementById("postcode").value = pc;

                    var phoneNumber = xmlDoc.getElementsByTagName('phone')[userindex];
                    var phone = phoneNumber.childNodes[0].nodeValue;
                    var phone_new=phone[0]+phone[1]+phone[2]+"-"+phone[3]+phone[4]+phone[5]+ "-"+phone[6]+phone[7]+phone[8]+phone[9];
                    document.getElementById("phone").value = phone;

                    var emailaddress = xmlDoc.getElementsByTagName('email')[userindex];
                    var email = emailaddress.childNodes[0].nodeValue;
                    document.getElementById("email").value = email;

                    var cardNumber = xmlDoc.getElementsByTagName('cardNumber')[userindex];
                    var card = cardNumber.childNodes[0].nodeValue;
                    document.getElementById("user").value = card;

                    
            
    
        }</script>
    
    
</body>
</html>