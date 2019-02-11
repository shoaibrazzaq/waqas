<?php

if(isset($_POST['remb']))
{
    setcookie("user",$_POST['username'],time()+30);
}
else
{
    setcookie("user",$_post['username'],false);
}


//echo "your value iss : ".$_COOKIE['user'];
?>