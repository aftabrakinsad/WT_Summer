<?php

@include("../Model/db.php");

if(isset($_POST['submit']))
{
    $back_button = TRUE;
    $search = $_POST['search'];
    $by = $_POST['by'];
    
    if($by == "name")
    {
        $mydb = new db();
        $myconn = $mydb->openConn();
        $result = $mydb -> search_by_name($search, "staticadmin", $myconn);

        if($result -> num_rows > 0)
        {
            $i = 0;
        }
    }
}
?>