<?php

include_once("connection.php");

if(isset($_POST['submit'])) {

	$email=$_POST['email'];
	$password=$_POST['password'];
  $encrypted_password = password_hash($user_password, PASSWORD_DEFAULT);
	$activationcode=md5($email.time());

	$sql = mysqli_query($con, "SELECT id FROM users WHERE email='$email'");

	if (mysqli_num_rows($sql) < 1) {
    
		$query=mysqli_query($con,
		"insert into users(email,password,activationcode) 
		values('$email','$password','$activationcode')"
		);

		if($query) {
			$to=$email;
			$msg= "Thanks for new Registration.";   
			$subject="Email verification";
			$headers .= "MIME-Version: 1.0"."\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
			$headers .= 'From:MailComics'."\r\n";
			$ms.="<html></body><div><div>Hello, and thanks for signing up.</div></br></br>";
			$ms.="<div style='padding-top:8px;'>Please click The following link For verifying and activation of your account</div>
			<div style='padding-top:10px;'><a href='192.168.0.104/emailverify/email_verification.php?code=$activationcode'>Click Here</a></div>
			</body></html>";

			mail($to,$subject,$ms,$headers);
      
			echo "<script>alert('Registration successful, please verify in the registered Email-Id');</script>";
			echo "<script>window.location = 'index.php';</script>";
		} else {

			echo "<script>alert('Data not inserted');</script>";
		} 
	} else {

		echo "<script>alert('User Already exists');</script>";
	} 
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.83.1">
  <title>Mail Comics</title>

  <link href="./assets/vendor/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

  <link href="./assets/css/index.css" rel="stylesheet">
</head>

<body class="text-center">
  <main class="form-signin">
    <form>
      <img class="mb-4" src="./assets/brand/logo.png" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <!-- <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div> -->
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>
  </main>
</body>
</html>