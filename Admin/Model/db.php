<?php

class db
{
    function openConn()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bankinmanagmentsystem";
        $conn =  new mysqli( $servername, $username, $password, $dbname);
        if ($conn->connect_error)
        {
            echo "error connecting database";
        }
        return $conn;
    }

    function loginadmin($conn, $staticadmin, $uname, $pass)
    {
        $sqlstr = "SELECT uname, pass FROM $staticadmin WHERE uname = '$uname' AND pass = '$pass'";
        return $conn -> query($sqlstr);
    }

    function insertapplicant($fname, $lname, $uname, $email, $nid, $phone, $password, $cpassword, $picture, $cv, $applicantofadmin, $conn)
    {
        $sqlstr = "INSERT INTO $applicantofadmin (fname, lname, uname, email, nid, phone, password, cpassword, picture, cv) VALUES ('$fname', '$lname', '$uname', '$email', '$nid', '$phone', '$password', '$cpassword', '$picture', '$cv')";
        return $conn->query($sqlstr);
    }

    function user_searching_by_email($email, $staticadmin, $conn)
    {
        $sqlstr = "SELECT * FROM $staticadmin WHERE email = '$email'";
        return $conn -> query($sqlstr);
    }

    function otp_code($email, $code, $staticadmin, $conn)
    {
        $sqlstr = "UPDATE $staticadmin SET code = '$code' WHERE email = '$email'";
        return $conn -> query($sqlstr);
    }

    function otp_verification($code, $staticadmin, $conn)
    {
        $sqlstr = "SELECT * FROM $staticadmin WHERE code = '$code'";
        return $conn -> query($sqlstr);
    }

    function otp_showing($email, $staticadmin, $conn)
    {
        $sqlstr = "SELECT code FROM $staticadmin WHERE email = '$email'";
        return $conn -> query($sqlstr);
    }

    function change_password($newpassword, $email, $code, $staticadmin, $conn)
    {
        $sqlstr = "UPDATE $staticadmin SET pass = '$newpassword', code = '$code' WHERE email = '$email'";
        return $conn -> query($sqlstr);
    }

    function retrive_applicant_info_for_admin($applicantofadmin, $conn)
    {
        $sqlstr = "SELECT applicant_serial, fname, lname, uname, email, nid, phone, password, picture, cv FROM $applicantofadmin";
        return $conn -> query($sqlstr);
    }

    #Used in Admin Manage (Control)
    function search_by_User_name($username, $applicantofadmin, $conn)
    {
        $sqlstr = "SELECT fname, lname, uname, email, nid, phone FROM $applicantofadmin WHERE uname = '$username'";
        return $conn -> query($sqlstr);
    }

    function display_admin_info_on_admin_manage_page($admin_id, $uname, $staticadmin, $conn)
    {
        $sqlstr = "SELECT admin_id, uname, FROM $staticadmin";
        return $conn -> query($sqlstr);
    }

    #Used in New Admin (Control)
    function email_checking($email, $staticadmin, $conn)
    {
        $sqlstr = "SELECT email FROM $staticadmin WHERE email = '$email'";
        return $conn -> query($sqlstr);
    }

    #Used in New Admin (Control)
    function adding_new_admin($email, $staticadmin, $applicantofadmin, $conn)
    {
        $sqlstr = "INSERT INTO $staticadmin (uname, pass, email) SELECT uname, password, email FROM $applicantofadmin WHERE email= '$email'";
        return $conn->query($sqlstr);
    }

    #Used in Delete Admin (Control)
    function deleting_new_admin($applicant_serial, $applicantofadmin, $conn)
    {
        $sqlstr = "DELETE FROM $applicantofadmin WHERE applicant_serial = '$applicant_serial'";
        return $conn->query($sqlstr);
    }

    #search Admin by Username in admin Login Page - (Control - AJAX)
    function search_admin_by_username($uname, $staticadmin, $conn)
    {
        $sqlstr = "SELECT * FROM $staticadmin WHERE uname = '$uname'";
        return $conn -> query($sqlstr);
    }

    #search Admin by email in Forget Password Page - (Control - AJAX)
    function searching_existing_email($email, $staticadmin, $conn)
    {
        $sqlstr = "SELECT * FROM $staticadmin WHERE email ='$email'";
        return $conn -> query($sqlstr);
    }

    #search User by email in Admin Registration Page - (Control & AJAX)
    function searching_existing_email_registration($email, $applicantofadmin, $conn)
    {
        $sqlstr = "SELECT * FROM $applicantofadmin WHERE email ='$email'";
        return $conn->query($sqlstr);
    }

    #search User by nid in Admin Registration Page - (Control & AJAX)
    function seaching_exixting_nid_regisstration($nid, $applicantofadmin, $conn)
    {
        $sqlstr = "SELECT * FROM $applicantofadmin WHERE nid = '$nid'";
        return $conn -> query($sqlstr);
    }

    #search User by phone in Admin Registration Page - (Control & AJAX)
    function seaching_exixting_phone_regisstration($phone, $applicantofadmin, $conn)
    {
        $sqlstr = "SELECT * FROM $applicantofadmin WHERE phone = '$phone'";
        return $conn->query($sqlstr);
    }
}

?>