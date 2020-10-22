<?php
if(isset($_POST['login-submit'])){ //checks to see if the buton was clicked
    require 'dbh.inc.php';

    //grabs info from login page

    $mailuid = $_POST['mailuid'];
    $passwrd = $_POST['pwd'];
    // $userNamer = $POST['userid'];
    if(empty($mailuid) || empty($passwrd)){ //checks if username or password input is empty
        header("Location: ../login.php?error=emptyinputs".$userName);
        exit(); 
    }
    else{
      $sql = "SELECT * FROM users WHERE UserNames=? OR email_users=?;";  //checks to compares the user name to database
      $stmt = mysqli_stmt_init($conn); //checks if connects with database
      if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../login.php?error=sqlerror");
        exit();
      }
        else{
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);  
            mysqli_stmt_execute($stmt);

            $results = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($results)){
               $passwordchk = password_verify($passwrd, $row["pwdusers"]); 
               if($passwordchk == false){ //checks password
                // echo '<p class = errordisplay>Incorrect Password</p>';
                header("Location: ../login.php?error=incorrectpwd");
                exit();   
               }
               else if($passwordchk == true){
                   session_start(); 
                   $_SESSION['userId'] = $row['id_users']; //gets id number from table
                   $_SESSION['userUid'] = $row['UserNames']; //gets the username
                   $_SESSION['email'] = $row['email_users']; //gets email from table
//                    $_SESSION['pwduser'] = $row['pwdusers']; 
                   $_SESSION['phonenumber'] = $row['phonenum'];//gets phone num from table
                   $_SESSION['occupation'] = $row['occ'];//gets occupation  from table
                   $_SESSION['ages'] = $row['age']; //gets age from table
                   header("Location: ../login.php?login=success");
                   exit(); 
               }
            }
            else{
                header("Location: ../login.php?error=incorrectpwd");
                exit();   
            }
        }
    }
}
else{
    header("Location: ../index.php");
    exit(); 
}
