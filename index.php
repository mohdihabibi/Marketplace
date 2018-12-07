
<?php

// Create connection
$link = mysqli_connect("localhost:3306", "softwby8", "Meh2Fere@1", "softwby8_newdb");

    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

if(isset($_POST['submit']))
{
	$name = $_POST["name"];
	$email = $_POST["email"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$cpassword = $_POST["re_password"];
	

	if($password = $cpassword)
	{
		//$hash = password_hash($password, PASSWORD_DEFAULT);
	    $sql = "INSERT INTO web_site_users ( fullname,  email , username , password) 
	    values('$name', '$email', '$username' , '$password' )";

		if (mysqli_query($link, $sql)) 
		{
		    $error_msg=  "New record created successfully";
            header("location: ./signin.php");
		} else 
		{
		    $error_msg=  "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

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
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="username" id="username" placeholder="Username"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                            <span toggle="#re_password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <?php if(isset($error_msg))echo $error_msg;?>
                    <p class="loginhere">
                        Have already an account ? <a href="signin.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>



