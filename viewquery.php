<?php
include 'adminheader.php';
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
    
        $q="SELECT * FROM chat t,customer c WHERE t.sender=c.email AND receiver='admin@gmail.com' OR receiver=c.email AND sender='admin@gmail.com' ORDER BY `chatid`";
        $s= mysqli_query($con, $q);
        $row=mysqli_num_rows($s);
        if($row>0){
        while ($r= mysqli_fetch_array($s))
        {

echo"
<a href='querydetail.php?emid=$r[email]'>
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
