<?php
session_start();
include 'connection.php';
include 'adminheader.php';
$email=$_SESSION['email']; 
?>
<head>
    <style>
        td,th{
            padding: 10px;
        }
.mainCon
{
    display: flex;
    margin-top:60px;
}
.content{
    margin:10px;
    background-color:white;
    padding:20px;
    width:20%;
    box-shadow:5px;
} 
.row{
    display:flex;
    padding: 10px;
    justify-content:center;
    align-items:center;
    border-radius:25px;
}
img{
    border-radius:50%;
}
</style>
 </head>
<div class="container-fluid mainCon">
    
        <?php
        $q="select * from customer";
        $s= mysqli_query($con, $q);
        $res = 00;
        while ($r= mysqli_fetch_array($s))
        {
            ?>
                    <div class='content'>
                        <?php
                            echo "
                            <div class='row'><img src='$r[file]' height='150px' width='150px'></div>
                            <h2>$r[name]</h2>
                            <div>$r[phone]</div>
                            <div>$r[address]</div>
                            <div>$r[email]</div>
                            
                            "; 
                        ?>
                    </div>
            <?php
        }
        ?>
        
</div>

<?php
include 'footer.php';
?>


