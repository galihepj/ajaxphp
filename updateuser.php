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
    $id=intval($_GET['id']);
$firstname=($_GET['firstname']);
$lastname=($_GET['lastname']);
$age=intval($_GET['age']);
$hometown=($_GET['hometown']);
$job=($_GET['job']);

$con = mysqli_connect('localhost','root','','tekweb');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"tekweb");
$sql="UPDATE demo SET FirstName='$firstname', LastName='$lastname', Age='$age',Hometown='$hometown', Job='$job' WHERE id='$id'";
mysqli_query($con,$sql);
  
mysqli_close($con);
?>
</body>
</html>
