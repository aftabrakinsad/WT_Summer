<?php

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $employedata = file_get_contents('../Data/employelogindata.json');
        $employedata_array = json_decode($employedata, true);

        $employeinfo = array
        (
            'username' => $username,
            'password' => $password
        );

        $employedata_array[] = $employeinfo;
        $employeinfoencode = json_encode($employedata_array, JSON_PRETTY_PRINT);

        if(file_put_contents('../Data/employelogindata.json', $employeinfoencode))
        {
            echo "";
        }
        else
        {
            echo "";
        }
    }

?>