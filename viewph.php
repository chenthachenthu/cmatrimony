<?php
include 'connection.php';
include 'customerheader.php';

$email=$_SESSION['email'];
$emid=$_REQUEST['emid'];
$phone=$_REQUEST['phone']; 
$pv="select counts from phview where dates=(SELECT CAST(SYSDATE() AS DATE)) and cid='$email'";
$pvex=mysqli_query($con,$pv);
$rows=mysqli_fetch_array($pvex);

echo $rows[0].'s';

if($rows[0]==0){
    $sql="INSERT INTO phview(`cid`,`dates`,`counts`)VALUES('$email',(SELECT CAST(SYSDATE() AS DATE)),'1')";
    mysqli_query($con,$sql);  
    echo "<script>
    alert('$phone');
    location.href='profdetail.php?prid=$emid'
    </script>";   
}else if($rows[0]>5){

    echo "<script>
    alert('Limit Exceed');
    location.href='profdetail.php?prid=$emid'
    </script>";

}else{

    $sql="UPDATE phview SET counts=counts+1 WHERE cid='$email' AND dates=(SELECT CAST(SYSDATE() AS DATE))";
    mysqli_query($con,$sql); 
    echo "<script>
    alert('$phone');
    location.href='profdetail.php?prid=$emid'
    </script>";  

}

?>

<script>

</script>