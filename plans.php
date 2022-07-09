<?php
include 'connection.php';
include 'customerheader.php';
$email=$_SESSION['email']; 
?>
<head>
    <style>
        td,th{
            padding: 10px;
        }

.minicon{
    display:flex;
    margin-top: 20px;
    justify-content: space-between;
}        
.mainCon
{
    display: flex;
    margin-top:60px;

}
.card{
    margin:10px;
    background-color:white;
    padding:20px;
    width:20%;
    height: 190px;
    box-shadow: 5px 5px 5px 5px ;
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
.inner{
    display:flex;
    justify-content: space-between;
}
.btn{
   position: absolute;
    width:80px;
    background-color:red;
    color:white;
    border-radius:30px;
}
.months{

    border: solid 1px black;
    border-radius:30px;
    color:white;
    background-color:green;
    width:110px;
    text-align: center;
}

</style>
</head>
 <?php
        $q="SELECT DISTINCT months FROM plan";
        $s= mysqli_query($con, $q);
        $res = 00;
        echo"<div class='container-fluid minicon'>
        <form action='#' method='post'>
        <select name='month' style='width:250px;'>
        ";
        while ($r= mysqli_fetch_array($s))
        {
        echo "<option value='$r[months]'>$r[months]Months</option>";
        }  
        echo"
        </select>
        <input type='submit' name='submit' value='continue' style='background-color:red;color:white'>
        </form>
        </div>";
 ?> 

<div class="container-fluid mainCon">
    
        <?php
        if(isset($_POST['submit']))
        {
            $mn=$_POST['month'];
            $q="select * from plan where months=$mn";
        }
        else{
        $q="select * from plan";
        }
        $s= mysqli_query($con, $q);
        $res = 00;
        while ($r= mysqli_fetch_array($s))
        {
            $qry="select * from premiumbook where cid='$email' and plid=$r[plid] AND SYSDATE() BETWEEN `fromdate` AND `expdate`";
            $ex= mysqli_query($con, $qry);
            ?>
                    <div class='card'>
                        <?php
                            echo "<div class='inner'><h4>$r[name]</h4><h5 style='color:red'>Rs $r[amount]</h5></div>
                            <div>$r[details]</div>
                            <div>$r[desc]</div>"; 
                            if(mysqli_num_rows($ex)>0){
                                while ($z= mysqli_fetch_array($ex))
                                {   
                                echo "
                                        <h3 style='color:green;'>Subscribed</h3>
                                        <div>Valid from $z[fromdate]</div>
                                        <div>upto $z[expdate]</div>";
                                }      

                            }else{
                            echo "    <button class=btn><a style='color:white'href=addpremium.php?id=$r[plid]>Pay</a></button>  
                            "; 
                            }
                        ?>
                    </div>
            <?php
        }
        ?>
        
</div>

<?php
include 'footer.php';
?>




