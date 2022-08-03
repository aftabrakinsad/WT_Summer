<?php

@include("../Model/db.php");

if(isset($_POST["enterotp"]))
{
    $_SESSION['info'] = "";
    $code = $_POST['otp'];

    $mydb = new db();
    $mycon = $mydb->openConn();
    $result = $mydb -> otp_verification($code, "staticadmin", $mycon);

    if($result -> num_rows > 0)
    {
        $fetch_data = mysqli_fetch_assoc($result);
        $email = $fetch_data['email'];
        $_SESSION['email'] = $email;
        $info = "Please create a new password.";
        $_SESSION['info'] = $info;
        header("location: ../View/changepassword.php");
        exit();
    }
    else
    {
        echo "false";
    }
}

?>