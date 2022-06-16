<?php

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $admindata = file_get_contents('../Data/adminlogindata.json');
        $admindata_array = json_decode($admindata, true);

        $admininfo = array
        (
            'username' => $username,
            'password' => $password
        );

        $admindata_array[] = $admininfo;
        $admininfoencode = json_encode($admindata_array, JSON_PRETTY_PRINT);

        if(file_put_contents('../Data/adminlogindata.json', $admininfoencode))
        {
            echo "ok";
        }
        else
        {
            echo "not ok";
        }
    }

?>