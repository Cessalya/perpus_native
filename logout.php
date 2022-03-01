<?php
session_start();

// kalau kosong berarti sudah selesai unset
unset($_SESSION["id_siswa"]);
unset($_SESSION["nama_siswa"]);
unset($_SESSION["status_login"]);
// echo $_SESSION ["nama_siswa"];
header("Location: login.php");
?>