<?php
require "header.php"; //gets header navigation
include "includes/dbh.inc.php"; //includes DB connection
?>

 <main>
      
      <div class = "signform">
      <h3>Edit Profile</h3>
        <?php
            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyfields"){
                    echo '<p class = errordisplay> Fill in all fields</p>';
                }
                else if($_GET['error'] == "spaceinusername"){
                    echo '<p class = errordisplay> Do not include spaces in username</p>';
                }
                else if($_GET['error'] == "invalidemail&userid"){
                    echo '<p class = errordisplay> Incorrect email or Username</p>';
                }
                else if($_GET['error'] == "passwordcheck"){
                    echo '<p class = errordisplay> Incorrect password</p>';
                }
                else if($_GET['error'] == "Usernametaken"){
                    echo '<p class = errordisplay> User name taken</p>';
                }
            }
            else if (isset($_GET['updateprofile'])){ 
                echo $_GET['updateprofile'];
                if($_GET['updateprofile'] == "success"){
                    echo '<p class = "successsignup"> Profile Updated</p>';
                    echo 'In order to see your updated profile, please <a href = "login.php">log out</a> then log back in!';

                    
                }
            }
            // else if ($_GET['updateprofile'] == 'success'){ 
            //     echo '<p class = "successsignup"> Profile Updated</p>';
            // }
        ?>

            <form action = "includes/editprofile.inc.php" method = "post" >
              <input name = "id_user" placeholder = "ID Number" id = "IdNum" value = "<?php echo $_SESSION['userId']; ?>" hidden >  <br> <br>
             <p>Username:</p><input type = "text" name = "userid" placeholder = "UserName" id = "user" value = "<?php echo $_SESSION['userUid']; ?>"> <br> <br>
             <p>Email:</p><input type = "text" name = "email" placeholder = "Email" id = "email" value = "<?php echo $_SESSION['email']; ?>"> <br> <br>
             <p>Password:</p><input type = "password" name = "pswd"> <br> <br>
             <p>Retype Password:</p><input type = "password" name = "pswd2" > <br> <br>
             <p>Phone Number:</p><input type = "tel" name = "phonenumber" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder = "Enter Phone Number" value = "<?php echo  $_SESSION['phonenumber']; ?>" > <br> <br>
             <p>Occupation:</p><input type = "text" name = "occupation" placeholder = "Occupation" id = "occ" value = "<?php echo  $_SESSION['occupation']; ?>"> <br> <br>
             <p>Age:</p><input type = "number" name = "age" placeholder = "Age" id = "age" value = "<?php echo  $_SESSION['ages']; ?>" > <br> <br>
                    <button type = "submit" name = "update">Update Profile</button> 
            </form>
      </div>
    </main>

<?php
    require "footer.php";
?>       

<!-- https://www.youtube.com/watch?v=YcLHapPnDQg  this video showed me how to update -->

