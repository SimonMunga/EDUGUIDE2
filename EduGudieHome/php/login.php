<?php
session_start();

require_once "connection.php";

if(isset($_POST['login']) && $_SERVER['REQUEST_METHOD'] === 'POST'){

    $id = $_POST['email'];
    $password = $_POST['password'];   

        $sql = "SELECT * FROM `users` WHERE `Email_Address`='$id'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);

            $pass = $row['Password'];
            $type = $row['User_Type'];

if(md5($password) == $pass){

                if ($type == "Administrator") {
                $_SESSION['adminname'] = $row['User_ID'];
                header("Location: ../index.php");
                }else if ($type == "User") {
                $_SESSION['username'] = $row['User_ID'];       
                header("Location: ../index1.php");
                }
            }else{
               header("Location: ../404_1.html"); 
            }
        }else{
            header("Location: ../404_1.html");
        }
}
           
?>
