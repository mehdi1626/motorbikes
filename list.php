<?php

include 'db_conn.php';
header(' charset=utf-8');
//$conn- > query("SET NAMES utf8");

$page_number=isset($_GET["p_n"]) ? $_GET["p_n"] : 1;
$f_color=isset($_GET["color"]) ? $_GET["color"] : "0";


?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
    box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 50%;
    padding: 10px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
/* Style the buttons */
.btn {
    border: none;
    outline: none;
    padding: 12px 16px;
    background-color: #f1f1f1;
    cursor: pointer;
}

.btn:hover {
    background-color: #ddd;
}

.btn.active {
    background-color: #666;
    color: white;
}
</style>
</head>
<body>

<h2>List</h2>

<p>Click on a button to choose list view or grid view.</p>

<div id="btnContainer">
<button class="btn" onclick="listView()"><i class="fa fa-bars"></i> List</button> 
<button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
</div>
<br>


  
  <?php
  $sql_N = "select ID from details ";
  $result_N = $conn->query($sql_N);
  $rowcount=mysqli_num_rows($result_N);
  $all_page=($rowcount/5)+1;


echo "select page :   ";
for ($i=1;$i<=$all_page;$i++)
{
	echo "<a href='list.php?p_n=".$i."'> >>>  ".$i."  <<<  </a>";
}


echo "<br><br> select filter color :   ";
$sql_color = "select color from details group by color ";
$result_color = $conn->query($sql_color);
  while($row = $result_color->fetch_assoc()) {
	  
	 echo "<a href='list.php?color=".$row["color"]."'> >>>  ".$row["color"]."  <<<  </a>"; 
	  
  }
  if($f_color=="0")
       $q_color="";
   else
	   $q_color="where color='".$f_color."'";
$limit_start=($page_number-1)*5;
$sql = "select * from details ".$q_color. " order by price and date DESC LIMIT ".$limit_start.",".$page_number*5;
$result = $conn->query($sql);
?>
<div class="row">
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<a href='show_motor.php?ID=" . $row["ID"]. "'><div class='column' > <h2> id: " . $row["ID"]. " </h2>
		<p>- Model: " . $row["model"]. "</p> 
		<p>- Price: " . $row["price"]. "</p></div></a>";
    }
} else {
    echo "0 results";
}
  ?>
  
  
</div>

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "50%";
  }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>