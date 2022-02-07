<?php
session_start();
$conn = mysqli_connect('localhost','root','');
$Class = $Rollno = $Hindi1 = $English1 = $Maths1 = $Physics1 = $Chemistry1 =$Hindi2 = $English2 = $Maths2 = $Physics2 = $Chemistry2 ="";
mysqli_select_db($conn,'res');
$Class=$_POST['class'];
$Rollno=$_POST['rollno'];
$Hindi1=$_POST['Hindi1'];
$Physics1=$_POST['Physics1'];
$English1=$_POST['English1'];
$Chemistry1=$_POST['Chemistry1'];
$Maths1=$_POST['Maths1'];
$Hindi2=$_POST['Hindi2'];
$Physics2=$_POST['Physics2'];
$English2=$_POST['English2'];
$Chemistry2=$_POST['Chemistry2'];
$Maths2=$_POST['Maths2'];
$sql="UPDATE `stumarks` SET  `hindi1` = '$Hindi1', `english1` = '$English1', `maths1` = '$Maths1', `physics1` = '$Physics1', `chemistry1` = '$Chemistry1', `hindi2` = '$Hindi2', `english2` = '$English2', `maths2` = '$Maths2', `physics2` = '$Physics2', `chemistry2` = '$Chemistry2' WHERE `urollno` = '$rollno'";
    
$run=mysqli_query($conn,$sql);
if($run)
{
    ?>
    <script>
    alert('Data Updated  Succesfully');
    window.open('AdminDash.php', '_self');;
         </script>
   
   
    <?php
}

?>