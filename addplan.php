<?php
include 'connection.php';
include 'adminheader.php';
?>
<style>
input[type="text"],input[type="email"],input[type="password"],input[type="submit"],input[type="file"]{

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
                 <center><h1 style="color:blueviolet;font-family:'Times New Roman', Times, serif;">PLAN DETAILS</h1></center>
                
                    <div class="form-group" style="margin-top:20px">
                    <input type="text" name="name" placeholder="Name" required>
                    </div>
                    
                    <div class="form-group" style="margin-top:20px">
                        <input type="text" name="details" placeholder="Details" required>
                        </div>

                        <div class="form-group" style="margin-top:20px">
                            <input type="text" name="desc"  placeholder="Description" required>
                        </div>

                        <div class="form-group" style="margin-top:20px">
                            <input type="text" name="amount" placeholder="amount" required>
                       </div>

                       <div class="form-group" style="margin-top:20px">
                            <input type="text" name="month" placeholder="month" required>
                       </div>
                    <input type="submit" class="btn btn-success" name="submit" style="margin-top:20px;margin-left:45%; width:10%;">     
                </form>
         
    </div>
<?php 
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $details=$_POST['details'];
    $desc=$_POST['desc'];
    $amount=$_POST['amount'];
    $month=$_POST['month']; 
    
   $sql="INSERT INTO plan(`name`,`details`,`desc`,`amount`,`months`)VALUES('$name','$details','$desc','$amount','$month')";
   if (mysqli_query($con,$sql)){

    echo '<script>alert("Plan Added Successfully")</script>';

   }else{

    echo '<script>alert("Failed")</script>';
    
   }

        
 
      $con->close();
  }

  ?>

<?php
include 'footer.php';
?>
    


