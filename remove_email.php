
<?php
include 'connection.php';

if (!empty($_GET['code']) && isset($_GET['code'])) {

  $code=$_GET['code'];

  if (isset($_GET['unsub'])) {
    $sql=mysqli_query($con,"DELETE FROM users WHERE activationcode='$code' AND status = 1");
    if($sql) {
      $msg ="You have been unsubscribed!";
    } else {
      $msg ="You hevn't subscribed!";
    }
  } else {
    $sql=mysqli_query($con,"DELETE FROM users WHERE activationcode='$code' AND status = 0");
    if($sql) {
      $msg ="Thank you!";
    } else {
      $msg ="Error";
    }
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