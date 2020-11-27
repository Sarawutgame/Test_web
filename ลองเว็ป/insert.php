<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'data-itf.mysql.database.azure.com', 'Gamezanet@data-itf', 'Game5711106', 'itflabtest', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$product = $_POST['Product'];
$price = $_POST['Price'];
$amount = $_POST['Amount'];
$total = $price * $amount


$sql = "INSERT INTO test value (product , price , amount, total) VALUES ('$product', '$price', '$amount', '$total')";

if (mysqli_query($conn, $sql)) {
  echo "<script type='text/javascript'>";
    //echo "New record created successfully";
    echo "window.location = 'show.php'; ";
  echo "</script>";

  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>