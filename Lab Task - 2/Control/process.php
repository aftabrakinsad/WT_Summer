<?php

if (isset($_POST['submit']))

{
    $FirsName = $_REQUEST['FirstName'];
    $LastName = $_REQUEST['LastName'];
    $Age = $_REQUEST['Age'];
    $Email = $_POST['Email'];
    $Password = $_REQUEST['Password'];

    if (empty($FirsName)) 
    {
        echo 'Please Enter a valid First Name';
    }
    else 
    {
        echo 'Your First Name is ' . $FirsName;
    }

    echo '<br>';

    if (empty($LastName))
    {
        echo 'Please Enter a valid Last Name';
    }
    else
    {
        echo 'Your Last Name is ' . $LastName;
    }

    echo '<br>';

    if ($Age == '')
    {
        echo 'Please Enter your Age ';
    }
    else
    {
        echo 'Your Age is ' . $Age;
    }

    echo '<br>';

    if (isset($_POST['Desgination1']) || isset($_POST['Desgination2']) || isset($_POST['Desgination3']))
    {
        if (isset($_POST['Desgination1']))
        {
            echo 'Your Have Selected Junior Programmer ';
            echo '<br>';
        }
        else if (isset($_POST['Desgination2']))
        {
            echo 'Your Have Selected Senior Programmer';
            echo '<br>';
        }
        else if (isset($_POST['Desgination3']))
        {
            echo 'Your Have Selected Project Lead';
            echo '<br>';
        }
        else
        {
            echo 'Please Select a Designation';
        }
    }
    else
    {
        echo 'You Have not selected anything';
    }

    echo '<br>';

    if (isset($_POST['PreferredLanguage1']) || isset($_POST['PreferredLanguage2']) || isset($_POST['PreferredLanguage3']))
    {
        if (isset($_POST['PreferredLanguage1']))
        {
            echo 'Your Have Selected JAVA ';
            echo '<br>';
        }
        else if (isset($_POST['PreferredLanguage2']))
        {
            echo 'Your Have Selected PHP';
            echo '<br>';
        }
        else if (isset($_POST['PreferredLanguage3']))
        {
            echo 'Your Have Selected C++';
            echo '<br>';
        }
        else
        {
            echo 'Please Select a Language';
        }
    } 
    else
    {
        echo 'You Have not Selected a checkbox';
        echo '<br>';
    }

    if (empty($Email) ||!preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix', $Email))
    {
        echo 'Invalid email';
        echo '<br>';
    }
    else 
    {
        echo 'Your email is ' . $Email . '<br>';
    }

    if (strlen($Password) < 8)
    {
        echo 'Enter a valid password';
    }
    else
    {
        echo 'password is valid';
    }
}
?>