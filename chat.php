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
.write_msg{

    margin-bottom:2px;
    width:1200px;
}
div.formw{

    border:solid 1px black;
    position: fixed;
}
.maindiv{

height:27rem;

}
.msgdiv{
margin-top:5px;
height:25rem;
overflow:scroll;
}
.senddiv{

height:2rem;

}

</style>

<div class="maindiv">
<div class="msgdiv"> 
<?php
        $email=$_SESSION['email'];
        $emid=$_REQUEST['emid'];
        $q="SELECT * FROM chat WHERE sender='$email' AND receiver='$emid' OR receiver='$email' AND sender='$emid' ORDER BY `chatid`";
        $s= mysqli_query($con, $q);
        while ($r= mysqli_fetch_array($s))
        {
if($r[1]==$email){    
    $ch="SELECT c.file FROM customer c WHERE email='$email'";
    $m= mysqli_query($con, $ch);
    while ($p= mysqli_fetch_array($m))
    {
echo"
<div class='containerchat'>
  <img src='$p[file]' alt='Avatar'>
  <p>$r[message]</p>
</div>";
    }
}else{
    $ch="SELECT c.file FROM customer c WHERE email='$emid'";
    $m= mysqli_query($con, $ch);
    while ($p= mysqli_fetch_array($m))
    {
echo "    
<div class='containerchat darker'>
  <img src='$p[file]' alt='Avatar' class='right'>
  <p><p>$r[message]</p></p>
</div>

";
    }
    }
} 
?> 
</div>
<div class="senddiv">
<form method="post" class="formw">
<input type="text" name="msg" class="write_msg" placeholder="Type a message" />
<button type="submit" name="submit" class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
<p>&nbsp;</p>
</form>
</div>
</div>
<?php  

if (isset($_POST['submit'])){


  $email=$_SESSION['email'];
  $msg=$_POST['msg'];

  $sql="INSERT INTO `chat` (`sender`,`receiver`,`message`,`date`) VALUES('$email','$emid','$msg',(select sysdate()))";
   echo $sql;
   if (mysqli_query($con,$sql)){
    echo "<script>alert('Messaged Successfully')</script>";
    echo "<script>location.href='chat.php'</script>";

   }else{

    echo "<script>alert('Failed')</script>";
    
   }

}

?>
<?php
include 'footer.php';
?> 