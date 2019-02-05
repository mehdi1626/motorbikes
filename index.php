<html lang="fa">
<head>
  <title>register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">




<form action="register_save.php" method="post" enctype="multipart/form-data">





  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>complet text</th>
		
		<th> <a href="list.php">show list</a></th>   
		
      </tr>
	  </thead>
   
      <tr>
        <td>Model:</td>
		<td> <input type="text" name="model" required></td>
	  </tr>
      <tr>
        <td>Color:</td>
		<td> <input type="text" name="color" required></td>
	  </tr>
	   <tr>
        <td>Weight:</td>
		<td> <input type="text" name="weight" required></td>
	  </tr>
	   <tr>
        <td>Price:</td>
		<td> <input type="text" name="price" required></td>
	  </tr>
	   <tr>
        <td>Select image to upload:</td>
		<td><input type="file" name="fileToUpload" id="fileToUpload"></td>
	  </tr>
	  <tr>
        <td>send</td>
		<td> <input type="submit"></td>
	  </tr>
	 
    </tbody>
  </table>



	</form>
	
  
</div>

</body>
</html>