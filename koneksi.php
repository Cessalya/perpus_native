<?php
$conn=mysqli_connect('localhost','root','','perpus_native');
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
