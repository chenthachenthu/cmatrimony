<?php
include 'connection.php';


$email=$_REQUEST['id']; 
$pr=$_REQUEST['pr'];

$sql="update customer set vrstatus='verified' where email='$email'";
mysqli_query($con,$sql);
echo "<script>alert('verified');location.href='approover.php'</script>";
