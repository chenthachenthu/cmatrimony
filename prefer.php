<?php
include 'connection.php';
include 'customerheader.php';
?>
<style>
form{

    text-align:center;

}


</style>
</head>
<body>

<?php

        $email = $_SESSION['email'];
        $q="SELECT * FROM preference where cid='$email'";
        $set= mysqli_query($con, $q);
        if(mysqli_num_rows($set)>0){

            while ($r= mysqli_fetch_array($set)){
                echo"
             

                <form action='#' method='post' class='p-3 shadow' style='margin-top:30px;' enctype='multipart/form-data'>
                <h1 class='text-center'>Preferences</h1>
                 
                   <p class='para'>Religion you prefer</p>
                  <div class='form-group' style='margin-top:10px'>
                  <select name='religion'  style='width:250px;'>
                      <option value=$r[religion]>$r[religion]</option>
                      <option value='All'>All</option> 
                      <option value='Hindu'>Hindu</option>  
                      <option value='Muslim'>Muslim</option>   
                      <option value='Christian'>Christian</option>   
                      <option value='Sikh'>Sikh</option>   
                      <option value='Jain'>Jain</option>   
                      <option value='Buddhist'>Buddhist</option>  						
                  </select>
                  </div>
                  <p class='para'>Height you prefer</p>
                  <div class='form-group' style='margin-top:10px'>
                  <select name='height'  style='width:250px;'>
                  <option value=$r[height]>$r[height]</option>
                        <option value='All'>All</option> 
                      <option value='160-165'>155-160 cm</option>  
                        <option value='165-170'>165-170 cm</option> 
                        <option value='160-165'>175-180 cm</option>  
                        <option value='165-170'>185-190 cm</option>     						
                  </select>
                  </div>
                  <p class='para'>Family type you prefer</p>
                  <div class='form-group' style='margin-top:10px'>
                  <select name='fstatus'  style='width:250px;'>
                  <option value=$r[familytype]>$r[familytype]</option>
                    <option value='All'>All</option>
                      <option value='Nuclear'>Nuclear</option>  
                      <option value='Joint'>Joint</option>   						
                  </select>
                  </div>
                  <p class='para'>Education you prefer</p>
                  <div class='form-group' style='margin-top:10px'>";
                  $q="select * from qualification";
                  $s= mysqli_query($con, $q);
                  echo"
					<select name='education'  style='width:250px;'>";
                    echo"<option value=$r[education]>$r[education]</option>"; 
                    echo"<option value='All'>All</option>"; 
					while ($v= mysqli_fetch_array($s))
						{
					echo"<option value='$v[qualification]'>$v[qualification]</option>";     						
					}
                    echo"
					</select>
                  </div>
                  <p class='para'>Job sector you prefer</p>
                  <div class='form-group' style='margin-top:10px'>
                  <select name='empin'  style='width:250px;'>
                  <option value=$r[employedin]>$r[employedin]</option>
                  <option value='All'>All</option> 
                  <option value='Government'>Government</option>  
                  <option value='Private'>Private</option>   						
                  </select>
                  </div>
               
                      <input type='submit' name='submit' class='btn btn-success' value='continue' style='margin-top:20px;background-color:red;'><br><br>
                      
              </form>
                      
                 ";
             
            
        }
    }else{

?>

     <form action="#" method="post" class="p-3 shadow" style="margin-top:30px;">
     <h1 class='text-center'>Preferences</h1>
     
       <p>Religion you prefer</p>
      <div class="form-group" style="margin-top:10px">
      <select name="religion"  style="width:250px;">
          <option value="All">All</option>
          <option value="Hindu">Hindu</option>  
          <option value="Muslim">Muslim</option>   
          <option value="Christian">Christian</option>   
          <option value="Sikh">Sikh</option>   
          <option value="Jain">Jain</option>   
          <option value="Buddhist">Buddhist</option>  						
      </select>
      </div>
      <p>Height you prefer</p>
      <div class="form-group" style="margin-top:10px">
      <select name="height"  style="width:250px;">
          <option value='All'>All</option>
          <option value="160-165">155-160 cm</option>  
          <option value="165-170">165-170 cm</option> 
          <option value="175-180">175-180 cm</option>  
          <option value="185-190">185-190 cm</option>   						
      </select>
      </div>
      <p>Family type you prefer</p>
      <div class="form-group" style="margin-top:10px">
      <select name="fstatus"  style="width:250px;">
          <option value='All'>All</option>
          <option value="Nuclear">Nuclear</option>  
          <option value="Joint">Joint</option>   						
      </select>
      </div>
      <p>Education you prefer</p>
      <div class="form-group" style="margin-top:10px">
      <?php
						$q="select * from qualification";
						$s= mysqli_query($con, $q);
						$res = 00;
						
					echo"
					<select name='education'  style='width:250px;'>";
                    echo"<option value='All'>All</option>"; 
					while ($r= mysqli_fetch_array($s))
						{     
					echo"<option value='BCA'>$r[qualification]</option>";     						
					}
					echo"</select>";
					?>
      </div>
      <p>Job sector you prefer</p>
      <div class="form-group" style="margin-top:10px">
      <select name="empin"  style="width:250px;">
          <option value='All'>All</option>
          <option value="Government">Government</option>  
          <option value="Private">Private</option> 
          <option value="Buisness">Buisness</option>  						
      </select>
      </div>
   
          <input type="submit" name="submit" class="btn btn-success" value="continue" style="margin-top:20px;background-color:red;"><br><br>
          
  </form>
  
    </div>
  
<?php 

    }

if(isset($_POST["submit"]))
{

   $email=$_SESSION['email'];
   $religion=$_POST['religion'];
   $height=$_POST['height'];
   $fstatus=$_POST['fstatus'];
   $education=$_POST['education'];
   $empin=$_POST['empin']; 
   $msg=mysqli_num_rows($set);
if(mysqli_num_rows($set)>0){
    $qry="update preference set `religion`='$religion',`height`='$height',`familytype`='$fstatus',`education`='$education',`employedin`='$empin' where cid='$email'";
   
    if (mysqli_query($con,$qry)){
     echo "<script>alert('Updated Successfully')</script>";
     echo "<script>location.href='prefer.php'</script>";
 
    }else{
 
     echo "<script>alert('Failed')</script>";
     
    }


}else{    

    
   $qry="insert into preference (`cid`,`religion`,`height`,`familytype`,`education`,`employedin`) values('$email','$religion','$height','$fstatus','$education','$empin')";
   
   if (mysqli_query($con,$qry)){
    echo "<script>alert('Added Successfully')</script>";
    echo "<script>location.href='prefer.php'</script>";

   }else{

    echo "<script>alert('Failed')</script>";
    
   }

        
 
      $con->close();
  }

}

  ?>

<?php

include 'footer.php'

?>
    

