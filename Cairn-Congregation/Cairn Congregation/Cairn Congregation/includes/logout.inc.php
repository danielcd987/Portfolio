<?php
session_start();
session_unset(); //this ends the session when logged out and takes the user out
session_destroy();
header("Location: ../login.php");
