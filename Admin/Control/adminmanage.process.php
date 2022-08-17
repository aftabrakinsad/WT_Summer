<?php

@include("../Model/db.php");

$fname = "";
$lname = "";
$uname = "";
$email = "";
$nid = "";
$phone = "";
$salary = "";
$accountno = "";
$unameerr = "";

if (isset($_POST["search"]))
{
    $username = $_POST["username"];

    if(!empty($username))
    {
        $mydb = new db();
        $myconn = $mydb->openConn();
        $result = $mydb->search_by_User_name($username, "details_table_for_selected_admins", $myconn);

        if ($result->num_rows > 0)
        {
            while ($row = $result->fetch_assoc())
            {
                $fname = $row["fname"];
                $lname = $row["lname"];
                $uname = $row["uname"];
                $email = $row["email"];
                $nid = $row["nid"];
                $phone = $row["phone"];
                $salary = $row["salary"];
                $accountno = $row["accountno"];
            }
        }
        else
        {
            $unameerr = "User name not found";
        }
    }
    else
    {
        $unameerr =  "Please enter username";
    }
}

if(isset($_POST["submit"]))
{
    $mydb = new db();
    $myconn = $mydb->openConn();
    $resulta = $mydb->updateProfile($_POST["fname"], $_POST["lname"], $_POST["uname"], $_POST["email"], $_POST["nid"], $_POST["phone"], $_POST["salary"], $_POST["accountno"], "details_table_for_selected_admins", $myconn);
    if($resulta == true)
    {
        echo "Udated";
    }
    else
    {
        echo "Update Failed". $myconn->error;
    }
}

$mydb = new db();
$myconn = $mydb->openConn();
$resultXD = $mydb->retrive_from_details_table_for_selected_admins("details_table_for_selected_admins", $myconn);

if ($resultXD == true) {
    foreach ($resultXD as $row) 
    {
        echo '<tr>
            <td>' . $row['fname'] . '</td>
            <td>' . $row['lname'] . '</td>
            <td>' . $row['uname'] . '</td>
            <td>' . $row['email'] . '</td>
            <td>' . $row['nid'] . '</td>
            <td>' . $row['phone'] . '</td>
            <td>' . $row['salary'] . '</td>
            <td>' . $row['accountno'] . '</td>
        </tr>';
    }
}
else 
{

}


?>