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
            <th class="text-center">Details</th>
            <th class="text-center">Description</th>
            <th class="text-center">Amount</th>
            </tr>
    
        <?php
        $q="select * from plan";
        $s= mysqli_query($con, $q);  

        while ($r= mysqli_fetch_array($s))
        {

                            echo "
                            <tr>
                            <td>$r[name]</td>
                            <td>$r[details]</td>
                            <td>$r[desc]</td>
                            <td>$r[amount]</td>
                            </tr>
                            ";      
        }
        ?>
        </table> 
</div>

<?php
include 'footer.php';
?>


