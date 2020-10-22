<?php

require "header.php"; //gets header navigation
include "includes/dbh.inc.php"; //includes DB connection
//check to see if logged in
    if(isset($_SESSION['userId'])){
        echo "<p>YOU ARE LOGGED IN!</p>";
    }
    else{
        echo "<p>YOU ARE LOGGED OUT!</p>";
    }
?>
<?php
        if(isset($_SESSION['userId'])){ //if user is logged in
            
            /*this displays the form that uploads pictures*/ 
            echo'
            <form action = "editprofile.php" method = "post">
                <button type = "submit" name = "editprofile">Edit Profile</button>
            </form>';
        
//             echo'<br>
//                 <form action = "uploads.php" method = "POST" enctype = "multipart/form-data"> 
//                     <input type = "file" name = "uploadfile">
//                     <button type = "submit" name = "submitfile">Upload</button>
//                 </form>';
            echo '<br>';

            echo'
            <form action = "includes/status.inc.php" method = "post">
            <input name = "id_user" value = "'.$_SESSION['userId'].'"  type = "hidden">
            <input type = "text" name = "userstatus" placeholder = "How are you feeling?">
            <button type = "submit" name = "status">Update Status</button>
            </form> <br>';
            
        }
        else{
            echo'<p>You need to <a href = "login.php">login</a> to view you account.</p>';
            echo'<p>If you do not have an account and would like one please <a href = "signup.php">sign up.</a></p>';
            echo '<br>';
        }
    ?>
    


<?php
    include "includes/profile.inc.php";
    require "footer.php";
?>
<!-- <input name = "id_user" placeholder = "ID Number" id = "IdNum" value = "<?php echo $_SESSION['userId']; ?>" hidden > -->
