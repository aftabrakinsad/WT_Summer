<?php


if(!empty($_POST["remember"])){
	setcookie ("uname",$_POST["uname"],time()+ 86000);
	setcookie ("password",$_POST["password"],time()+ 86000);
	echo "";
}
else
{
	setcookie("uname","");
	setcookie("password","");
	echo "";
}

?>
