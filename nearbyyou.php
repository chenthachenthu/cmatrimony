<?php
include 'customerheader.php';
include 'connection.php';
?>

<style>

td,th{
        padding: 10px;
        }
.mainCon
{
    width: 90%;
    display:flex;
    flex-wrap: wrap;
    justify-content: space-around;
}
a{
    margin: 10px;
    
}
a .content{
    margin:10px;
    padding:20px;
    max-width: 10rem;
    box-shadow: 5px,5px,5px,5px;
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

<center style=margin-top:130px;><hr><h1>As per your preferences</h1><hr></center>


<div class="container-fluid mainCon">
    
        <?php

        $email=$_SESSION['email'];

        $l="SELECT lat,lon,gender FROM customer WHERE email='$email'";
        $ll= mysqli_query($con, $l);
        $row=mysqli_fetch_array($ll);
        $res = 00;
        $lat = $row[0];
        $lon = $row[1];
        $gen = $row[2];

        $q="SELECT * FROM customer c  WHERE lat=$lat  and lon=$lon and gender!='$gen' and `email`!='$email'";
        $s= mysqli_query($con, $q);

        while ($r= mysqli_fetch_array($s))
        {
            ?>
                    
                        <?php
                            echo "
                            <a href='profdetail.php?prid=$r[email]'><div class='content card'>
                            <div class='row'><img src='$r[file]' height='150px' width='150px'></div>
                            <h2>$r[name]</h2>
                            <div>$r[address]</div>
                            </div></a>
                            "; 
                        ?>
                    
            <?php
        }
        ?>
        
</div>



<?php

include 'footer.php'

?>