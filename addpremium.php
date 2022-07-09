<?php

include 'connection.php';
include 'customerheader.php';
?>
<style>
input[type='text'],input[type='email'],input[type='password'],input[type='submit'],input[type='file']{

    width:20%;
    height:15%;
    margin-left:40%;
    border-radius:5px;
    

}
textarea{

    margin-left:600px;
    width:280px;
}
.main{
    margin-bottom:20px;
}
</style>
</head>
<body>
<?php

        $id = $_REQUEST['id'];
        $cid = $_SESSION['email'];
        $q="SELECT * FROM plan WHERE plid=$id";
        $s= mysqli_query($con, $q);
        while ($r= mysqli_fetch_array($s)){
   echo"<div class='main'>

                <form action='#' method='post' class='p-3 shadow' style='margin-top:130px;' enctype='multipart/form-data'>
                 <center><h1 style='color:blueviolet;font-family:'Times New Roman', Times, serif;'>PREMIUM DETAILS</h1></center>
                
                    <div class='form-group' style='margin-top:20px'>
                    <input type='text' name='name' value=$r[name] readonly>
                    </div>
                    
                    <div class='form-group' style='margin-top:20px'>
                        <textarea name='details' readonly>$r[details]</textarea>
                    </div>

                        <div class='form-group' style='margin-top:20px'>
                        <textarea name='desc' readonly>$r[desc]</textarea>
                        </div>

                        <div class='form-group' style='margin-top:20px'>
                            <input type='text' name='amount' value=$r[amount] readonly>
                       </div>

                       <div class='form-group' style='margin-top:20px'>
                            <input type='text' name='month' value=$r[months] readonly>
                       </div>
                    <input type='submit' value='pay' class='btn btn-success' name='submit' style='margin-top:20px;margin-left:45%; width:10%;'>     
                </form>
         
    </div>";
        }
    ?>


<?php 
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $details=$_POST['details'];
    $desc=$_POST['desc'];
    $amount=$_POST['amount'];
    $month=$_POST['month']; 
    
   $sql="INSERT INTO premiumbook(`cid`,`plid`,`fromdate`,`expdate`)VALUES('$cid','$id',(SELECT CAST(SYSDATE() AS DATE)),(SELECT DATE_ADD((SELECT CAST(SYSDATE() AS DATE)), INTERVAL $month MONTH)))";
   echo $sql;
   if (mysqli_query($con,$sql)){

    echo '<script>alert("Paid Successfully")</script>';
    echo '<script>alert("Premium Added Successfully")</script>';
    echo '<script>location.href="plans.php"</script>';

   }else{

    echo '<script>alert("Failed")</script>';
    
   }

        
 
      $con->close();
  }

  ?>
    

