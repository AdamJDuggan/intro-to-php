<?php
setcookie('username', 'Karin', time() + 86400 * 30);

//Check for cookies
if(count($_COOKIE) > 0){
    echo 'There are '. count($_COOKIE). 'saved cookies <br/>';
} else {
    echo("There are no cookies saved");
}

//Delete cookie
//setcookie('username', 'Karin', time() - 3600);


if(isset($_COOKIE['username'])){
   echo 'User '. $_COOKIE['username']. ' is set';
}
else{
    echo 'User is not set ';
}
?>

