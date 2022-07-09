<?php
include 'connection.php';
include 'adminheader.php';
?>
<style>
input[type="text"],input[type="email"],input[type="password"],input[type="submit"]{

    width:20%;
    height:15%;
    margin-left:40%;
    border-radius:5px;
    

}
</style>
</head>
<body>
    <div>

                <form action="#" method="post" class="p-3 shadow" style="margin-top:130px;" enctype="multipart/form-data">
                 <center><h1 style="color:blueviolet;font-family:'Times New Roman', Times, serif;">JOB</h1></center>
                
                    <div class="form-group" style="margin-top:20px">
                    <input type="text" name="job" placeholder="Name" required>
                    </div>
                
                    <input type="submit" class="btn btn-success" name="submit" style="margin-top:20px;margin-left:45%; width:10%;">     
                </form>
         
    </div>
<?php 
if(isset($_POST['submit']))
{
    $job=$_POST['job'];
    
   $sql="INSERT INTO job(`job`)VALUES('$job')";
   if (mysqli_query($con,$sql)){

    echo '<script>alert("Added Successfully")</script>';

   }else{

    echo '<script>alert("Failed")</script>';
    
   }

        
 
      $con->close();
  }

  ?>

<?php
include 'footer.php';
?>
    


