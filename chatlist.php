<?php
include 'customerheader.php';
include 'connection.php';
?>   

<style>
    /* Chat containers */
.containerchat {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

/* Darker chat container */
.darker {
  border-color: #ccc;
  background-color: #ddd;
}

/* Clear floats */
.containerchat::after {
  content: "";
  clear: both;
  display: table;
}

/* Style images */
.containerchat img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

/* Style the right image */
.containerchat img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

/* Style time text */
.time-right {
  float: right;
  color: #aaa;
}

/* Style time text */
.time-left {
  float: left;
  color: #999;
}

</style>

<?php

        $email=$_SESSION['email'];
        $gend="select gender from customer where email='$email'";
        $gen=mysqli_query($con, $gend);
        $gn= mysqli_fetch_array($gen);
        $gender=$gn['gender'];
        $q="SELECT * FROM premiumbook p,customer c WHERE p.`cid`=c.`email` AND c.email!='$email' AND c.gender!='$gender' AND SYSDATE() BETWEEN `fromdate` AND `expdate` ";
        $s= mysqli_query($con, $q);
        $row=mysqli_num_rows($s);
        if($row>0){
        while ($r= mysqli_fetch_array($s))
        {

echo"
<a href='chat.php?emid=$r[email]'>
<div class='containerchat'>
  <img src='$r[file]' alt='Avatar'>
  <h4>$r[name]</h4>
</div>
</a>";
    
}
}
else{

  echo"
      <h4 class='text-center'>No Data Found</h4>

  ";

}


?> 
