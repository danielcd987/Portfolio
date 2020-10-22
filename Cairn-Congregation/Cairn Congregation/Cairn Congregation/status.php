
<?php
require "header.php"; //gets header navigation
include "includes/dbh.inc.php"; //includes DB connection
?>
    <form action = "includes/status.inc.php" method = "post">
            <input name = "id_user" value = "<?php echo $_SESSION['userId']; ?>" type = "hidden">
            <input type = "text" name = "userstatus" placeholder = "How are you feeling?">
            <button type = "submit" name = "status">Update Status</button>
    </form> <br>
