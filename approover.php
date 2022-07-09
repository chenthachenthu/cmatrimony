<?php
session_start();
include 'connection.php';
include 'adminheader.php';
$email=$_SESSION['email']; 
?>
<head>
    <style>
.mainCon
{
    display: flex;
    margin-top:60px;
}
table{
    margin-left:80px;
    padding-top:20px;
    width:80%;
    height:50%;
    border:solid black 1px  ;
}
th{
    color:red;
    border:solid black 1px ;
    
}
tr{
    padding-top:20px;
    text-align:center;
    height:40px;
    border:solid black 1px;  
}
td{
    margin-top:20px;
    color:black;
    border:solid black 1px;
}
</style>
 </head>
<div class="container-fluid mainCon">

<table>
            <tr>
            <th class="text-center">Name</th>
            <th class="text-center">Email</th>
            <th class="text-center">Phone</th>
            <th class="text-center">File</th>
            <th class="text-center">Approve</th>
            </tr>
    
        <?php
        $q="SELECT * FROM customer WHERE vrfile IS NOT NULL AND vrstatus='verify'";
        $s= mysqli_query($con, $q);  
        if(mysqli_fetch_array($s)){
        while ($r= mysqli_fetch_array($s))
        {

                            echo "
                            <tr>
                            <td>$r[name]</td>
                            <td>$r[email]</td>
                            <td>$r[phone]</td>
                            <td><img src='$r[vrfile]'></td>
                            <td><a href=verification.php?id=$r[email]>Verify</a></td>
                            </tr>
                            ";      
        }}else{

            echo "
            <tr>
            <td colspan='5'>No Data Found</td>
            </tr>";
        }
        ?>
        </table> 
</div>

<?php
include 'footer.php';
?>


