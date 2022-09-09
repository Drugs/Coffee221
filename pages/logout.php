<?php
//Bianca
session_start();
session_destroy();
header("location:login.php?logout=confirm");
exit();
