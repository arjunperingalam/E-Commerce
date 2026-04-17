<?php
include("Includes/simple-header.php");
include("Connection/connect.php");
include("Connections/userauthorization.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Payment Success</title>
  <link rel="stylesheet" href="Styles/Success.css">
  <link rel="stylesheet" href="Styles/styles.css">
</head>
<body>
  <div class="container">
    <div class="checkmark-circle">
      <div class="checkmark"></div>
    </div>
    <h1>Payment Successful!</h1>
    <p>Thank you for your choosing us. Order Placed Successfully.</p>
  </div>
  <script src="Scripts/go-to-view-order.js"></script>
</body>
</html>