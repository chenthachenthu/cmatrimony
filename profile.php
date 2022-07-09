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
    margin-bottom:20px;
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
    width:70%;
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
.col2 div{
    padding-top:10px;
}
.col2 button{
    margin-left:600px;
    width:80px;
    background-color:lightblue;
}
.col2 button a{
    color:black;
}
img{
    
    height:230px;
    width:230px;
}
.inner{
    display:flex;
    justify-content: space-between;
}
.btn{
    margin-top:20px;
    margin-left:150px;
    width:100px;
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

<div class="container-fluid mainCon">
    
        <?php
        
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
                            echo "<button><a href='editprofile.php?cid=$r[cid]'>Edit</a></button>
                                  <div><h2>$r[name]</h2></div>
                                  <div><p>profile created for $r[profor]</p></div>
                                  <div><h4>$r[dob] $r[height]</h4></div>
                                  <div><h4>$r[email]</h4></div>
                                  <div><h4>$r[phone]</h4></div>
                                  <div><h4>$r[address]</h4></div>
                                  <div><h4>$r[religion] $r[caste]</h4></div>
                                  <div><h4>$r[martialstatus]</h4></div>
                                  <div><h4>$r[familytype]</h4></div>
                                  <div><h4>$r[education]</h4></div>
                                  <div><h4>$r[employedin]</h4></div>
                                  <div><h4>$r[occupation]</h4></div>
                                  "; 
                                  if($r['vrfile']!=null && $r['vrstatus']=='verify'){
                                    echo"
                                    <h5>Verification in Process</h5>";
                                  }elseif($r['vrstatus']=='verify'){
                                    
                                        echo"
                                        <a href='verify.php?id=$r[email]&name=$r[name]'>$r[vrstatus]</a>";

                                  }else{

                                    echo"
                                    <br>
                                    <h5 style='color:green'>Verified</h5>";
                                    
                                  }
                                
                        ?>
                        </div>
                        
                        </div>
                        </div>
                    </div>
            <?php
        }
        ?>
        
</div>

<?php
include 'footer.php';
?>




