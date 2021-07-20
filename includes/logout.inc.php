<?php

session_start();
session_unset(); // unset any session 
session_destroy(); // log out user

header("location: ../index.php");
exit();