<?php
include 'connection.php';
include 'customerheader.php';
?>
<style>


.para{
    font-size:30px;
}
.radiodiv{

    padding-left:46%;
}


</style>
</head>
<body>


     
        <center>
        <form action='#' method='post' class='p-3 shadow' style='margin-top:30px;'>
        <h1 style='color:blueviolet'class='text-center'>Questions</h1>
        
        <?php

        $email = $_SESSION['email'];

        for($i=1;$i<=10;$i++){

        $q="SELECT * FROM question where qid=$i";
        $set= mysqli_query($con, $q);
        $quest=mysqli_fetch_array($set);
        
           echo " 
           <p class='para'>$quest[1]</p>
           <div class='radiodiv' style='margin-bottom:10px;color:black;display:flex;'>
           <input  type='hidden'  id='point$i' name='point$i'  value='2'>
           <input class='radioclass' type='radio' name='$i'  value='$quest[2]' onclick='changeval(1,$i)' >$quest[2]
           <input class='radioclass'  type='radio' name='$i'  value='$quest[3]' onclick='changeval(2,$i)' checked>$quest[3]
           </div>";
        }
        echo "   <input type='submit' name='submit' class='btn btn-success' value='continue' style='margin-top:20px;background-color:red;'><br><br>
              
      </form>
      </center>
              
         ";
     
    



?>



<?php 
if(isset($_POST['submit']))
{
    $isexist="select * from answer where cid='$email'";
    $ex=mysqli_query($con,$isexist);
    $row=mysqli_num_rows($ex);
    for($i=1;$i<=10;$i++){
    $p='point'.$i;
    $point=$_POST[$p];
    $ans=$_POST[$i];
    if($row==0){
    $sql="INSERT INTO answer(`qid`,`cid`,`answer`,`point`)VALUES('$i','$email','$ans','$point')";
    mysqli_query($con,$sql);
    }else{

      $sql="update answer set answer='$ans' where qid='$i' and cid='$email' ";
      mysqli_query($con,$sql);

    }
      if($i==10){
        echo "<script>alert('Added Successfully')</script>";
      }

    }        
 
  }

  ?>

<?php
include 'footer.php';
?>
<script>
function changeval(i,j){

  document.getElementById('point'+j).value=i;
}
</script>    


