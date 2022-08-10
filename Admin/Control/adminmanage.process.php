<?php

@include("../Model/db.php");

if(isset($_POST['submit']))
{
    // $back_button = TRUE;
    $search = $_POST['search'];
    $by = $_POST['by'];

    if($by == "name")
    {
        $mydb = new db();
        $myconn = $mydb->openConn();
        $result = $mydb -> search_by_name($search, "staticadmin", $myconn);
        if($result == true)
        {
            foreach($result as $row)
            { 
                $admin_id = $row['admin_id'];

                echo '<tr>

                <td>' . $row['admin_id'] . '</td>
                <td>' . $row['uname'] . '</td>
                <td>' . $row['email'] . '</td>
                <td>
                    <a class="accept" href="../Control/newadmin.php?addingid=' . $admin_id . '">Accept</a> 

                    <br><br><br>

                    <a class="reject" href="../Control/applicantdelete.php?deleteid=' . $admin_id . '">Reject</a>
                </td>

                </tr>';
            }
        }
    }
}

?>