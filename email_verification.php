
<?php
include 'connection.php';

if(!empty($_GET['code']) && isset($_GET['code'])) {

  $code=$_GET['code'];

  $sql=mysqli_query($con,"SELECT * FROM users WHERE activationcode='$code'");
  $num=mysqli_fetch_array($sql);

  if($num>0) {

    $status=0;
    $result = mysqli_query($con,"SELECT id FROM users WHERE activationcode='$code' and status='$status'");
    $result_array=mysqli_fetch_array($result);   

    if($result_array>0)  {

      $status=1;
      $result1=mysqli_query($con,"UPDATE users SET status='$status' WHERE activationcode='$code'");
      $msg="Your account is activated"; 
    } else {

      $msg ="Your account is already active, no need to activate again";
    }
  } else {

    $msg ="Wrong activation code.";
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
    <?php echo htmlentities($msg); ?>
  </main>
</body>
</html>