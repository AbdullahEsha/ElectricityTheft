<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'null_value'){
			echo "Username/Password field can't left empty...";
		}

		if($_GET['error'] == 'invalid_user'){
			echo "Invalid username or Password";
		}

		if($_GET['error'] == 'invalid_request'){
			echo "You have to login first...";
		}

	}else if(isset($_GET['success'])){
		
		if($_GET['success'] == 'registration_done'){
			echo "Registration Done! Now you can login...";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="../assets/login.css">
</head>
<body class="main-bg">
    <div class="login-container text-c animated flipInX">
            <div>
                <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
            </div>
                <h3 class="text-whitesmoke">BD Electricity</h3>
                <p class="text-whitesmoke">Sign In</p>
            <div class="container-content">
                <form class="margin-t" action="../php/logCheck.php" method="post">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Enter your email..." required="">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="*****" required="">
                    </div>
                    <button type="submit" class="form-button button-l margin-b" name="submit">Sign In</button>
    
                    <a class="text-darkyellow" href="#"><small>Forgot your password?</small></a>
                    <p class="text-whitesmoke text-center"><small>Do not have an account?</small></p>
                    <a class="text-darkyellow" href="register.php"><small>Sign Up</small></a>
                </form>
                <p class="margin-t text-whitesmoke"><small> Your Name &copy; 2021</small> </p>
            </div>
        </div>
</body>
</html>