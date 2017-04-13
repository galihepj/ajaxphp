<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','tekweb');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"tekweb");
$sql="SELECT * FROM demo WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
  echo "<h1>Silahkan di edit lalu di update</h1>";
  while($row = mysqli_fetch_array($result)) {
      echo "<input type=hidden value= " . $row['id'] . " id=id>";
    echo "<input type=text value= " . $row['FirstName'] . " id=firstname>";
    echo "<input type=text value=" . $row['LastName'] . " id=lastname>";
    echo "<input type=text value=" . $row['Age'] . " id=age>";
  echo "<input type=text value=" . $row['Hometown'] . " id=hometown>";
  echo "<input type=text value=" . $row['Job'] . " id=job>";
  }
    echo '<br/><input type="button" onClick="update()" value="Update">';

  
mysqli_close($con);
?>
</body>
</html>
