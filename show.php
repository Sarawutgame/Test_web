  
<html>
<head>
<title>ITF Lab</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ITF Lab</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
  <?php
  $conn = mysqli_init();
  mysqli_real_connect($conn, 'data-itf.mysql.database.azure.com', 'Gamezanet@data-itf', 'Game5711106', 'Testlabitf', 3306);
  if (mysqli_connect_errno($conn))
  {
    die('Failed to connect to MySQL: '.mysqli_connect_error());
  }
  $res = mysqli_query($conn, 'SELECT * FROM bmi');
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <table class="table table-hover">
          <caption>
            <a href="form.html" class="btn btn-primary mb-2"> เพิ่ม </a>
          </caption>
          <thead class="table-primary">
            <tr>
              <th width="350">
                <div align="center">ชื่อ</div>
              </th>
              <th width="350">
                <div align="center">ส่วนสูง</div>
              </th>
              <th width="350">
                <div align="center">นำ้หนัก</div>
              </th>
              <th width="350">
                <div align="center">bmi</div>
              </th>
              <th width="150">
                <div align="center">การจัดการ</div>
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            while($Result = mysqli_fetch_array($res))
            {
            ?>
              <tr>
                <td><?php echo $Result['name'];?></div></td>
                <td><?php echo $Result['height'];?></td>
                <td><?php echo $Result['weight'];?></td>
                <td><?php echo $Result['bmi'];?></td>
                <td><a href="delete.php?id=<?php echo $Result['ID']; ?>" onclick="return confirm('ยืนยันการลบข้อมูล');" class="btn btn-danger">ลบ</a>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <?php
  mysqli_close($conn);
  ?>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</body>
</html>