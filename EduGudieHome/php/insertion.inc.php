<?php 
 
require 'connection.php';

session_start();

//Register User
if (isset($_POST['regu'])) {
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $password = $_POST['password'];
 $passwordconfirm = $_POST['cpassword'];

 if ($password == $passwordconfirm) {
  $sql = "INSERT INTO `users`(`Fullname`, `Phone_Number`, `Email_Address`,`User_Type`, `Password`) VALUES ('$fname','$phone','$email','User',md5('$password'))";
     mysqli_query($conn, $sql);
  header("Location: ../index.html?userregistration=success");
}else{
  echo "Passwords do not match.";
 }
}

//Update User
if (isset($_POST['upu'])) {
 $uid = $_POST['uid'];
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $passwordconfirm = $_POST['cpassword'];
 $phone = $_POST['phone'];
 $mod = $_POST['mod'];

 if ($password == $passwordconfirm) {
  if ($mod == 1) {
  $sql = "UPDATE `users` SET `Fullname`='$fname',`Email_Address`='$email',`Phone_Number`='$phone',`Password`=md5('$password') WHERE `User_ID`='$uid'";
     mysqli_query($conn, $sql);
  header("Location: ../index.php?updateadministrator=success");
  }else if ($mod == 2) {
  $sql = "UPDATE `users` SET `Fullname`='$fname',`Email_Address`='$email',`Phone_Number`='$phone',`Password`=md5('$password') WHERE `User_ID`='$uid'";
     mysqli_query($conn, $sql);
  header("Location: ../index1.php?updateuser=success");
  }
 }else{
  echo "Passwords do not match.";
 }
}

//Delete A User
if($_REQUEST['action'] == 'deleteU' && !empty($_REQUEST['id'])){ 
$deleteItem = $_REQUEST['id'];
$sql = "DELETE FROM `users` WHERE `User_ID` = '$deleteItem'";
mysqli_query($conn, $sql); 
$sql1 = "DELETE FROM `reviews` WHERE `User_ID` = '$deleteItem'";
mysqli_query($conn, $sql1); 
$sql2 = "DELETE FROM `list` WHERE `User_ID` = '$deleteItem'";
mysqli_query($conn, $sql2); 
header("Location: ../index.php?deleteuser=success");
}

//Add A School
if (isset($_POST['addschool'])) {
 $sname = $_POST['sname'];
 $loc = $_POST['loc']; 
 $fees = $_POST['fees'];
 $prog = $_POST['prog'];
 $desc = $_POST['desc'];
 $val = $_POST['val'];
 $lev = $_POST['lev'];

$filename = $_FILES['image']['name'];

$valid_extensions = array("jpg","jpeg","png");

$extension = pathinfo($filename, PATHINFO_EXTENSION);

if((in_array(strtolower($extension),$valid_extensions))) {

if((move_uploaded_file($_FILES['image']['tmp_name'], "../img/".$filename))){

  $sql = "INSERT INTO `schools`(`Name`, `Image`, `Location`, `Fees`, `Curriculum`, `Description`, `Values`, `Level`) VALUES ('$sname','$filename','$loc','$fees','$prog','$desc','$val','$lev')";
     mysqli_query($conn, $sql);
  header("Location: ../index.php?addschool=success");
 }else{
  echo "There is an error with saving the images, directory not found.";
}
}else{
  echo "There is an error with saving the images, kindly check the image format.";
}
}

//Delete A School 
if($_REQUEST['action'] == 'deleteS' && !empty($_REQUEST['id'])){ 
$deleteItem = $_REQUEST['id'];
$sql = "DELETE FROM `schools` WHERE `School_ID` = '$deleteItem'";
mysqli_query($conn, $sql); 
header("Location: ../index.php?deleteschool=success");
}

//Add A School to List
if ($_REQUEST['action'] == 'addS' && !empty($_REQUEST['id'])) { 
    $selectedItem = $_REQUEST['id'];
    $uid = $_SESSION['username'];
    $sql = "INSERT INTO `list`(`User_ID`, `School_ID`) VALUES('$uid','$selectedItem')";
    mysqli_query($conn, $sql); 
    header("Location: ../index1.php?addschooltolist=success");
}

//Remove A School From List
if($_REQUEST['action'] == 'removeS' && !empty($_REQUEST['id'])){ 
$deleteItem = $_REQUEST['id'];
$sql = "DELETE FROM `list` WHERE `List_ID` = '$deleteItem'";
mysqli_query($conn, $sql); 
header("Location: ../index1.php?removeschoolfromlist=success");
}

//Add A Review
if(isset($_POST["addfeed"])){
    $uid = $_SESSION['username'];
    $sid = $_POST['sid'];
    $rate = $_POST['rate'];
    $det = $_POST['feed'];

$sql = "INSERT INTO `reviews`(`User_ID`, `School_ID`, `Rating`, `Details`) VALUES ('$uid','$sid','$rate','$det')";
   mysqli_query($conn, $sql);
header("Location: ../index1.php?addreview=success");
}

//Delete A Review
if($_REQUEST['action'] == 'deleteR' && !empty($_REQUEST['id'])){ 
$deleteItem = $_REQUEST['id'];
$sql = "DELETE FROM `reviews` WHERE `Review_ID` = '$deleteItem'";
mysqli_query($conn, $sql); 
header("Location: ../index1.php?deletereview=success");
}

?>