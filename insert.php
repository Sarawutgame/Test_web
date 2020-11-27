<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'data-itf.mysql.database.azure.com', 'Gamezanet@data-itf', 'Game5711106', 'Testlabitf', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$bmi  = $weight / ($height/100)**2;
$bmi = round($bmi, 2);
$sql = "INSERT INTO bmi (name , height , weight, bmi) VALUES ('$name', '$height', '$weight', '$bmi')";

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