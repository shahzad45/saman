
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>E commerce Store</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="index.php">
</head>

<body>
   
        <div class="navbar">
    <div class="logo">
    
        </div>
        <nav>
            <ul id="menu-item">
                <li><a href="index.html">Home</a></li>
                 <li><a href="product.html">Product</a></li>
                   <li><a href="contact.html">Contact</a></li>
                   <li><a href="about.html">About</a></li>
                    <li><a href="account.php">Account</a></li>
                  
                      </ul>
                      </nav>
                   <a href="cart.html">  <img src="cart.png" width="30px" height="30px" ></a>
                    <img src="menu.png "class="menu" onclick="toggle()">
</div>
</div>
<!-- account page -->
<div class="contact-container">
<div class="account-page">
    <div class="container">
       
                 <div class="form-container">
                     <div class="form-btn">
                         <span onclick="login()">Login</span>
                         <span onclick="register()">Register</span>
                         <hr id="indicator">
                     </div>

                     <!-- Login Form -->

                     <form id="loginform" action = "login.php" method = "POST">
                         <input type="text" name = "username" placeholder="Username">
                         <input type="password" name = "password" placeholder="Passoword">
                         <button type="submit" name = "loginButton" class="btn" >Login</button>
                         <a href="">Forget Passoword</a>
                     </form>

                     <!-- Register Form -->

                     <!-- We use relative transfer one page to insert page -->
                     <form action = "register.php" id="regform"  method = "POST">
                         <input type="text" name = "userName" placeholder="Username" >
                         <input type="email" name = "userEmail" placeholder="Email">
                         <input type="password" name = "userPassword" placeholder="Passoword">
                         <button type="submit" name = "registerButton" class="btn" >Register</button>
                      
                     </form>
                    
                     
                 </div>
             </div>
         </div>
        </div>
</div>



 <!-- ----------Footer-------- -->
        <!-- footer -->
<div class="footer">
    <div class="container">
<div class="row">
                        
<div class="footer-col-3">
    <h3 style="text-decoration: underline; padding-bottom: 15px; padding-top: 15px;">Useful links</h3>
    <ul>
        <li>Coupon</li>
        <li>Blog post</li>
        <li>Return Policy</li>
        <li>Join Affiliate</li>
    </ul>
</div>
<div class="footer-col-4">
    <h3 style="text-decoration: underline; padding-bottom: 15px; padding-top: 15px;">Follow us</h3>
    <ul>
        <li>Facebook</li>
        <li>Instagram</li>
        <li>Twitter</li>
        <li>You Tube</li>
    </ul>
</div>
</div>
<hr>
<p class="copy">Copy right 2021</p>
</div>
</div>

<!-- js for toggle menu -->
<script>
    var menu=document.getElementById("menu-item");
    menu.style.maxHeight="0px";
    function toggle(){
        if(menu.style.maxHeight=="0px"){
            menu.style.maxHeight="200px";
        }else{
            menu.style.maxHeight="0px";
        }
    }
   
   

</script>
 <!-- js for toggle form -->
 <script>
     var loginn = document.getElementById("loginform");
     var  reg = document.getElementById("regform");
     var indicator = document.getElementById("indicator");
      function register(){
          loginn.style.transform="translateX(0px)";
          reg.style.transform="translateX(0px)";
          indicator.style.transform="translateX(100px)";
      }
         function login(){
          loginn.style.transform="translateX(300px)";
          reg.style.transform="translateX(300px)";
          indicator.style.transform="translateX(0px)";
      }
      
 </script>
</body>
</html>

<!-- PHP Code for this page-->
