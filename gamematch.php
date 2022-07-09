<?php
include 'customerheader.php';
include 'connection.php';
?>

<style>

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

<hr><h1 class="text-center">As per Game</h1><hr>


<div class="container-fluid mainCon">
    
        <?php

        $email=$_SESSION['email'];
        $ssm="SELECT SUM(POINT) as points FROM answer WHERE cid='$email'";
        $ssum=mysqli_query($con, $ssm);
        $spoint=mysqli_fetch_array($ssum);
        $sp=$spoint[0];
        $gend="select gender from customer where email='$email'";
        $gen=mysqli_query($con, $gend);
        $gn= mysqli_fetch_array($gen);
        $gender=$gn['gender'];
        $q="SELECT * FROM customer where email!='$email' and gender!='$gender'";
        $s= mysqli_query($con,$q);
        $res = 00;
        while($r=mysqli_fetch_array($s))
        {
            $sm="SELECT SUM(POINT) as points FROM answer WHERE cid='$r[email]'";
            $sum=mysqli_query($con, $sm);
            $point=mysqli_fetch_array($sum);
            ?>
                        <?php
                        if($point[0]>=$sp-3 && $point[0]<=$sp+3)
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