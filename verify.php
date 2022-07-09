<?php
include 'connection.php';
include 'customerheader.php';
?>
<style>
form{

    text-align:center;

}


.container{

margin:auto;
}
.form-group
{
margin-left:28%;
}
.file{

   margin-left:37%; 

}



</style>
</head>
<body>

<?php

        $email = $_SESSION['email'];
        $name = $_REQUEST['name'];
        $q="SELECT * FROM customer where email='$email'";
        $set= mysqli_query($con, $q);
        if(mysqli_num_rows($set)>0){

            while ($r= mysqli_fetch_array($set)){
                echo"
             

                <form action='#' method='post' class='p-3 shadow' style='margin-top:30px;' enctype='multipart/form-data'>
                
                <h1 class='text-center'>verify your Account</h1>

                <div class='form-group col-sm-6' style='margin-top:20px'>
                    <input type='text' name='name' placeholder='Name'  style='color:red;' value=$name>
                </div>
                 
                <div class='form-group col-sm-6' style='margin-top:20px'>
                <input type='file' name='file' class='file' required='' />
                <input type='submit' name='submit' class='btn btn-success' value='continue' style='margin-top:20px;background-color:red;'>
                </div>
                  
                
                      
              </form>
                      
                 ";
             
            
        }
    }


if(isset($_POST["submit"]))
{

    $folder='images/';
    $file=$folder.basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'],$file);

    $qry="update customer set vrfile='$file' where email='$email'";
   
    if (mysqli_query($con,$qry)){
     echo "<script>alert('Uploaded Successfully')</script>";
    //  echo "<script>location.href='customerhome.php'</script>";
 
    }else{
 
     echo "<script>alert('Failed')</script>";
     
    }
}


  ?>

<?php

include 'footer.php'

?>
    

