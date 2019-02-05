<?php
include 'db_conn.php';
header(' charset=utf-8');

$ID=$_GET["ID"];

$sql = "select * from details where ID=$ID";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


?>

<html lang="fa">
<head>
  <title>show motor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th></th>
		<th><?php echo"<img src='" . $row["url_image"]. "' class='rounded-circle' alt='Cinque Terre'>"?></th>
		<th></th>
      
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>ID :</td>
        <td><?php echo $row["ID"];  ?></td>
      </tr>
	  <tr>
        <td>Model :</td>
        <td><?php echo $row["model"];  ?></td>
      </tr>
	  <tr>
        <td>Color :</td>
        <td><?php echo $row["color"];  ?></td>
      </tr>
	  <tr>
        <td>Weight :</td>
        <td><?php echo $row["weight"];  ?></td>
      </tr>
	  <tr>
        <td>Price :</td>
        <td><?php echo $row["price"];  ?></td>
      </tr>
     
    </tbody>
  </table>
  
</div>

</body>
</html>