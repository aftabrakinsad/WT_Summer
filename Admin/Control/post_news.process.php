<?php

@include("../Model/db.php");

if(isset($_POST["submit"]))
{
    $headline = $_POST["headline"];
    $news_details = $_POST["news_details"];

    $mydb = new db();
    $myconn = $mydb->openConn();
    $result = $mydb-> post_news($headline, $news_details, "news", $myconn);
}

?>