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
<?php

        $cemail=$_SESSION['email'];
        $custname="SELECT name FROM customer WHERE email='$cemail'";
        $cname=mysqli_query($con, $custname);
        $cn= mysqli_fetch_array($cname);
        $cnm=$cn['name'];


echo "
<hr><h1 class='text-center'>Welcome  $cnm</h1><hr>";

?>
<div class="container mainCon">
    
        <?php

        $cemail=$_SESSION['email'];
        $pref="SELECT * FROM preference WHERE cid='$cemail'";
        $gend="select gender from customer where email='$cemail'";
        $gen=mysqli_query($con, $gend);
        $prs=mysqli_query($con, $pref);
        $pr= mysqli_fetch_array($prs);
        $gn= mysqli_fetch_array($gen);
        $gender=$gn['gender'];
        $religion = $pr['religion'];
        $height = $pr['height'];
        $familytype = $pr['familytype'];
        $education = $pr['education'];
        $employedin = $pr['employedin'];
        $heightarray = explode("-",$height);
        // echo $heightarray[0];   
        if ($religion == 'All'){
            $religion = '';
        }
        if ($height == 'All' or $height == null){
            $height = '';
            $hl=150;
            $hg=180;
        }else{

        $hl=$heightarray[0];
        $hg=$heightarray[1];

        }
        if ($familytype == 'All'){
            $familytype = '';
        }
        if ($education == 'All'){
            $education = '';
        }
        if ($employedin == 'All'){
            $employedin = '';
        }

        $q="SELECT c.*,p.* FROM customer c LEFT JOIN preference p ON c.`email`= p.`cid` WHERE  c.`education`LIKE '%$education%' AND c.`religion`LIKE '%$religion%' AND c.`familytype` LIKE '%$familytype%' AND c.`employedin` LIKE '%$employedin%' AND c.`height` BETWEEN $hl AND $hg AND c.gender!='$gender' and c.email!='$cemail'";
        // echo $q;
        $s= mysqli_query($con, $q);
        $res = 00;

        while ($r= mysqli_fetch_array($s))
        {
            ?>
                    
                        <?php
                            echo "
                            <a href='profdetail.php?prid=$r[email]'><div class='content'>
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