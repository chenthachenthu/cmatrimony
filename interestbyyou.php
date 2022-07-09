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
    margin : 10px;
    
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
.btn-success{

    width:50%;
}
</style>

<center style=margin-top:130px;><hr><h1>As per your preferences</h1><hr></center>


<div class="container-fluid mainCon">
    
        <?php

        $email=$_SESSION['email'];

        $q="SELECT * FROM customer c,profileview p WHERE c.`email`=p.`viewed` AND p.`viewedby`='$email' and interest!='0'";
        $s= mysqli_query($con, $q);
        $res = 00;

        while ($r= mysqli_fetch_array($s))
        {
            ?>
                    
                        <?php
                            echo "
                            <a href='profdetail.php?prid=$r[email]'><form method='post'><div class='content'>
                            <div class='row'><img src='$r[file]' height='150px' width='150px'></div>
                            <h2>$r[name]</h2>
                            <div>$r[address]</div>
                            <input type='text' name='semail' value=$r[email] style='display:none;'>";
                            if($r['interest']==1){
                            echo"
                            <p style='color:green;'>Interest Send</p>";
                            }else{
                                echo"
                                <p style='color:green;'>Accepted</p>";
                            } 
                            echo"      
                            </div></form></a>
                        
                            "; 
                        ?>
                    
            <?php
        }
        ?>
        
</div>



<?php

      
include 'footer.php'

?>