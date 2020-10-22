<?php
/*
Most of this code is from https://www.youtube.com/watch?v=LC9GaXkdxF8&t=4511s by  mmtuts who descibes how to create alogin system
this video has helped me learn some backend and how to create a webpage to connect a database to. There is some variations to the variable names
and table columns. 
*/
    require "header.php";
?>
    <main>
      
      <div class = "signform">
      <h3>Sign up</h3>
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
            else if (isset($_GET['signup'])){ 
                if($_GET['signup'] == "success"){
                    echo '<p class = "successsignup"> Sign up Successful</p>';
                }
            }
            
        ?>
            <form action = "includes/signup.inc.php" method = "post" >
                    <input type = "text" name = "userid" placeholder = "UserName" id = "user"> <br> <br>
                    <input type = "text" name = "email" placeholder = "Email" id = "email"> <br> <br>
                    <input type = "password" name = "pswd" placeholder = "Password"> <br> <br>
                    <input type = "password" name = "pswd2" placeholder = "Re-enter Password"> <br> <br>
                    <input type = "tel" name = "phonenumber" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder = 1234567890> <br> <br>
                    <input type = "text" name = "occupation" placeholder = "Occupation" id = "occ"> <br> <br>
                    <input type = "number" name = "age" placeholder = "Age" id = "age"> <br> <br>
                    <button type = "submit" name = "submit-newaccount">Create Account</button> 
                    <!-- maybe security question
                    <input type = "text" name = "security question" placeholder = "Email">
                    -->
            </form>
      </div>
    </main>

<?php
    require "footer.php";
?>