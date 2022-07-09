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
select{

    margin-left:600px;

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

        $cid = $_REQUEST['cid'];
        $q="SELECT * FROM customer WHERE cid=$cid";
        $s= mysqli_query($con, $q); 
        while ($r= mysqli_fetch_array($s)){
            echo $r[4];
   echo"<div class='main'>

                <form action='#' method='post' class='p-3 shadow' style='margin-top:130px;' enctype='multipart/form-data'>
                 <center><h1 style='color:blueviolet;font-family:'Times New Roman', Times, serif;'>EDIT PROFILE</h1></center>
                
                 <div class='form-group' style='margin-top:20px'>
                 <input type='text' name='name' value=$r[name]  required=''>
                 </div>
                       
                 <div class='form-group' style='margin-top:20px'>
                 <select name='religion'  style='width:250px;'>
                     <option value=$r[religion]>$r[religion]</option>
                     <option value='Hindu'>Hindu</option>  
                     <option value='Muslim'>Muslim</option>   
                     <option value='Christian'>Christian</option>   
                     <option value='Sikh'>Sikh</option>   
                     <option value='Jain'>Jain</option>   
                     <option value='Buddhist'>Buddhist</option>
                     <option value='No Religious Belief'>No Religious Belief</option>   						
                 </select>
                 </div>


                  <div class='form-group' style='margin-top:20px'>
                  <input type='text' name='contact' required=''  pattern='[6789][0-9]{9}' value=$r[phone] />
                 </div> 


                 <div class='form-group' style='margin-top:20px'>
                 <input type='text' name='addr' value='$r[address]' required=''>
                 </div>

                 <div class='form-group' style='margin-top:20px'>
                 <input type='text' name='caste' value=$r[caste] required=''>
                 </div>

                 
                 <div class='form-group' style='margin-top:20px'>
                 <input type='text' name='height'  value=$r[height] required=''>
                 </div>

                 <div class='form-group' style='margin-top:20px'>
                 <select name='fstatus' style='width:250px;'>
                     <option value=$r[familytype]>$r[familytype]</option>   
                     <option value='Nuclear'>Nuclear</option>  
                     <option value='Joint'>Joint</option>   						
                 </select>

                 </div>
                 <div class='form-group' style='margin-top:20px'>
                 <select name='education'  style='width:250px;'>
                    <option value=$r[education]>$r[education]</option>
                     <option value='BCA'>BCA</option>  
                     <option value='BCOM'>BCOM</option>   						
                 </select>
                 </div>

                 <div class='form-group' style='margin-top:20px'>
                 <select name='empin'  style='width:250px;'>
                    <option value=$r[employedin]>$r[employedin]</option>
                     <option value='Government'>Government</option>  
                     <option value='Private'>Private</option>   						
                 </select>
                 </div>

                 <div class='form-group' style='margin-top:20px'>
                 <input type='text' name='occupation' value=$r[occupation] required=''>
                 </div>
                    <input type='submit' value='update' class='btn btn-success' name='submit' style='margin-top:20px;margin-left:45%; width:10%;'>     
                </form>
         
    </div>";
        
if(isset($_POST["submit"]))
{
  $name=$_POST['name'];
   $religion=$_POST['religion'];
   $contact=$_POST['contact'];
   $addr=$_POST['addr'];
   $caste=$_POST['caste'];
   $height=$_POST['height'];
   $fstatus=$_POST['fstatus'];
   $education=$_POST['education'];

   $empin=$_POST['empin'];
   $occupation=$_POST['occupation']; 
    
   $sql="update customer set `name`='$name',`phone`='$contact',`address`='$addr',`religion`='$religion',`caste`='$caste',`height`='$height',`familytype`='$fstatus',`education`='$education',`employedin`='$empin',`occupation`='$occupation' where cid=$r[cid]";
   echo $sql;
   if (mysqli_query($con,$sql)){
    echo "<script>alert('Updated Successfully')</script>";
    echo "<script>location.href='profile.php'</script>";

   }else{

    echo "<script>alert('Failed')</script>";
    
   }

        
 
      $con->close();
  }

}

  ?>
    

