<?php
session_start();
$_SESSION['login_user']= $username; 
echo $_SESSION['login_user']; 
$msg = '';

if (isset($_POST['submit']) && !empty($_POST['username']) 
   && !empty($_POST['password']))
{
    
    //$link = mysqli_connect("localhost", "root", "mysql", "CrossWorld");
     $link = mysqli_connect("localhost:3306", "softwby8", "Meh2Fere@1", "softwby8_newdb");
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = "SELECT * FROM web_site_users where username ='". $username. "'";
    $result = mysqli_query($link, $query);

    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_row($result);
        $password =$row[4];
        $msg = "$password";
        if($_POST["password"] == $password)
          header("location: ./market/index.php");
    }
    else
        $msg = "Invalid Credentials...Please try again...!";       
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="">
                        <h2 class="form-title">Sign In</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="username" id="username" placeholder="Username"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
           
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign in"/>
                            </a>
                        </div>
                         <center><fb:login-button scope="public_profile,email" id="login" onlogin="checkLoginState();">
                        </fb:login-button> </center>                         
                    </form>

                    <?php if(isset($error_msg))echo $error_msg;?>
                    <p class="loginhere">
                        Don't Have an Account? <a href="signup.php" class="loginhere-link">Sign Up</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
        <script>
    var getInfo;
      function statusChangeCallback(response) {
        console.log('statusChangeCallback');
        console.log(response);
        if (response.status === 'connected') {
          // Logged into your app and Facebook.
          isLogin();
        } else if (response.status === 'not_authorized') {
          // The person is logged into Facebook, but not your app.
          document.getElementById('status').innerHTML = 'Please log ' +
            'into this app.';
        } else {
        }
      }

      function checkLoginState() {
        FB.getLoginStatus(function(response) {
          statusChangeCallback(response);
        });
      }
      window.fbAsyncInit = function() {
      FB.init({
        appId      : '2251212475158091',
        cookie     : true,  // enable cookies to allow the server to access 
                            // the session
        xfbml      : true,  // parse social plugins on this page
        version    : 'v2.5' // use graph api version 2.5
      });
      FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
      });
      };
      // Load the SDK asynchronously
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
      function isLogin() {
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me','GET', {fields: 'name,email,id,picture.width(150).height(150)'}, function(response) {
          var loginData = "name="+response.name+"&email="+response.email+"&fb_Id="+response.id+"&profilePictureUrl="+response.picture.data.url;
          console.log('Successful login for: ' + loginData);
          
          //ajax reqest to server..
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.open("POST", "logindata.php", true);
          xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
              document.getElementById('response').innerHTML = xmlhttp.responseText;
             //window.open('"http://localhost/market/index.php", '_self');
             //xmlhttp.open("GET", "./market/index.php" , true);
            // window.location.reload();
             //window.location.pathname = "./market/index.php";
             location.assign("./market/index.php");
             //window.location.redirect("www.google.com");
             
            };
          }
          xmlhttp.send(loginData);
          document.getElementById('status').innerHTML = 'Thanks for logging in, ' + response.name +"<br> Email : "+ response.email +"<br> Profile Id :  "+ response.id +"<br> Profile Url : "+ response.picture.data.url +'!';



         });

      }

    </script>

<div id="status">
</div>
<div id="response"></div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>




