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

<hr><h1 class="text-center">As per your preferences</h1><hr>


<div class="container-fluid mainCon">
    
        <?php

        $email=$_SESSION['email'];

        $q="SELECT * FROM customer c,profileview p WHERE c.`email`=p.`viewedby` AND p.`viewed`='$email'";
        $s= mysqli_query($con, $q);
        $res = 00;

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