<?php
include 'connection.php';
session_start();

$semail=$_SESSION['email'];
$email=$_REQUEST['shemail']; 
$pr=$_REQUEST['pr'];

if($pr==1){
$sql="update profileview set status='0' where viewedby='$semail' and viewed='$email'";
mysqli_query($con,$sql);
echo "<script>location.href='profdetail.php?prid=$email'</script>";
}elseif($pr==0){

    $sql="update profileview set status='1' where viewedby='$semail' and viewed='$email'";
    mysqli_query($con,$sql);
    echo "<script>location.href='profdetail.php?prid=$email'</script>";

}else{

 $sql="update profileview set interest='1' where viewedby='$semail' and viewed='$email'";
mysqli_query($con,$sql);
echo "<script>location.href='profdetail.php?prid=$email'</script>";

}



?>