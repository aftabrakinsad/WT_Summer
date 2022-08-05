<?php

@include("../Model/db.php");

$mydb = new db();
$myconn = $mydb->openConn();
$result = $mydb -> retrive_applicant_info_for_admin("applicantofadmin", $myconn);

if($result == true)
{
    foreach($result as $row)
    {
        echo '<tr>

        <td>'.$row['applicant_serial'].'</td>
        <td>'.$row['fname'].'</td>
        <td>'.$row['lname'].'</td>
        <td>'.$row['uname'].'</td>
        <td>'.$row['email'].'</td>
        <td>'.$row['nid'].'</td>
        <td>'.$row['phone'].'</td>
        <td><img src="../uploads/'.$row['picture']. '" width="100px" height="100px"></td>
        <td><a class="accept" href="../uploads/'.$row['cv']. '">View CV</a></td>
        <td>
            <a class="accept" href="">Accept</a> <br><br><br>
            <a class="reject" href="">Reject</a>
        </td>

        </tr>';
    }
}


?>