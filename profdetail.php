<?php
include 'connection.php';
include 'customerheader.php';

?>
<head>
    <style>
        td,th{
            padding: 10px;
        }

.minicon{
    display:flex;
    margin-top: 20px;
    margin-bottom:20px;
    justify-content: space-between;
}        
.mainCon
{
    display: flex;
    margin-top:60px;

}
.card{
    margin-bottom:20px;
    background-color:white;
    padding:20px;
    width:70%;
    height:350px;
    box-shadow: 5px 5px 5px 5px ;
} 
.row{
    display:flex;
    
}
.col1{
    float:left;
    width:25%;
	background-size:cover;

}
.col2{

text-align: left;

}
.col2 .clins{
    position: absolute;
    left:20%;
    padding-top:10px;
}
.col2 .clins div{
    padding-top:5px;
}

img{
    
    height:230px;
    width:230px;
}
.inner{
    display:flex;
    justify-content: space-between;
}

.short{
    position:absolute;
    right:33%;
    color:green;
    font-weight: bolder;
}
.interest{
    position:absolute;
    right:33%;
    bottom:15%;
    color:green;
    font-weight: bolder;
}


</style>
</head>


<?php
$semail=$_SESSION['email'];
$email=$_REQUEST['prid']; 

$pv="select * from profileview where viewedby='$semail' and viewed='$email'";
$pvex=mysqli_query($con,$pv);
$rows=mysqli_num_rows($pvex);

if($rows==0){
    $sql="INSERT INTO profileview(`viewedby`,`viewed`,`status`)VALUES('$semail','$email','0')";
    mysqli_query($con,$sql);
    $pv="select * from profileview where viewedby='$semail' and viewed='$email' ";
    $pvex=mysqli_query($con,$pv);
    $rows=mysqli_num_rows($pvex);
    $pview=mysqli_fetch_array($pvex);
}
else{

    $pview=mysqli_fetch_array($pvex);

}


?>

<div class="container-fluid mainCon">
    
        <?php
        $email=$_REQUEST['prid']; 
        $q="select * from customer where email='$email'";
        $s= mysqli_query($con, $q);
        $res = 00;
        while ($r=mysqli_fetch_array($s))
        {

            ?>
            <div class='card'>
                <div class='container'>
                    <div class='row'>

                        <div class='col1'>
                         <?php
                            echo "<img src='$r[file]'>";
                          ?>  
                        </div>
            
                        <div class='col2'>
                          <?php
                            echo "
                            <div class='clins'>
                                  <div><h2>$r[name]</h2></div>
                                  <div><h4>$r[dob] $r[height]</h4></div>";
									$email=$_SESSION['email'];
								    echo "
                                  <div><h4>$r[address]</h4></div>
                                  <div><h4>$r[religion] $r[caste]</h4></div>
                                  <div><h4>$r[martialstatus]</h4></div>
                                  <div><h4>$r[familytype]</h4></div>
                                  <div><h4>$r[education]</h4></div>
                                  <div><h4>$r[employedin]</h4></div>
                                  <div><h4>$r[occupation]</h4></div>
                                  <div><h4>$r[email]</h4></div>";
                                  if($r['vrstatus']=='verified'){
                                    echo"
                                    <h5 style='color:green;'>Verified Account</h5>";
                                  }
                                    $qry="select * from premiumbook where cid='$email' AND SYSDATE() BETWEEN `fromdate` AND `expdate`";
									$ex= mysqli_query($con, $qry);
									$row= mysqli_num_rows($ex);
									if($row>0){
									echo "
                                    <a href='viewph.php?emid=$r[email]&phone=$r[phone]'>View Phone</a>
									";
									}
                            
                            echo "</div>";

                                    if($pview[3]== '1'){
                                     echo "
                                    <div class='short'>
                                        <h6 >SHORTLISTED</h6>
                                        <a href='shprocess.php?shemail=$r[email]&pr=1'><button class='btn-primary'>Remove</button></a>
                                    </div>
                                        ";
                                    }else{
                                    echo "
                                    <div class='short'>    
                                        <a href='shprocess.php?shemail=$r[email]&pr=0'><button class='btn-primary'>Shortlist</button></a>
                                    </div>
                                    ";
                                    }
                            if($pview[4] == '0'){
                            echo"
                            <div class='interest'>    
                                <a href='shprocess.php?shemail=$r[email]&pr=2'><button class='btn-success'>Send Interest</button></a>
                             </div>";
                            }else{ 
                             echo"
                             <div class='interest'>    
                             <h6 >INTERESTED</h6>
                             </div>";
                            }
                            echo"
                        </div>
                        
                    </div>
                    
                </div>
               
            </div>    
                
  </div>              ";
            }

?>

<?php
include 'footer.php';

?>




