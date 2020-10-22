<?php
/*
Most of this code is from https://www.youtube.com/watch?v=LC9GaXkdxF8&t=4511s by  mmtuts who descibes how to create alogin system
this video has helped me learn some backend and how to create a webpage to connect a database to. There is some variations to the variable names
and table columns. 
*/

   if(isset($_POST['submit-newaccount'])){
    require 'dbh.inc.php';

    $userName = $_POST['userid']; //this calls the username column from database
    $email = $_POST['email']; //this calls the email column from database
    $pswd = $_POST['pswd']; //this calls the password column from database
    $repswd = $_POST['pswd2'];  //this submits password to database
    $phonenum = $_POST['phonenumber']; //this submits phone# to database
    $occ = $_POST['occupation'];
    $age = $_POST['age'];
//possible errors
    if(empty($userName) || empty($email) || empty($pswd) || empty($repswd) || empty($phonenum) || empty($occ) || empty($age)){
        header("Location: ../signup.php?error=emptyfields&userid=".$userName."&email=".$email); //returns error if fields are empty
        exit();
    }
    else if(preg_match('/\s/',$userName)){ //checks if username has a space
        header("Location: ../signup.php?error=spaceinusername");
        exit();
    }
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$userName)){ //returns if email/userName is no good
        header("Location: ../signup.php?error=invalidemail&userid");
        exit();
    }
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){  //returns if email is no good
        header("Location: ../signup.php?error=invalidemail&userid=".$userName);
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/", $userName)){ //returns if password doesnt match
        header("Location: ../signup.php?error=invaliduserid&email=".$email);
        exit();
    }
    else if ($pswd !== $repswd){ //checks if passwords are correct
        header("Location: ../signup.php?error=passwordcheck&userid".$userName."&email=".$email);
        exit();

    }
    
    else{
        $sql = "SELECT UserNames From users WHERE UserNames=?"; //? is a placeholder
        $stmt = mysqli_stmt_init($conn); //refers to connection to database
        if(!mysqli_stmt_prepare($stmt,$sql)){ //sees if the sql query fails
            header("Location: ../signup.php?error=sqlerror");
            exit();   
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $userName);//takes info and sends it to database s= string or the datatype //these are the parameters 
            mysqli_stmt_execute($stmt); //this will run info in database
            mysqli_stmt_store_result($stmt); // this takes result and stroes into variable
            $resultcheck = mysqli_stmt_num_rows($stmt); //checks to see if the user exists
                if($resultcheck > 0){
                    header("Location: ../signup.php?error=Usernametaken&email=".$email); //if username is taken
                    exit();  
                }
                //this else statement enters the values inputed into database
                else {
                    $sql = "INSERT INTO users (UserNames, email_users, pwdusers, phonenum, occ, age) VALUES (?, ?, ?, ?, ? ,?)"; //? is a placeholder
                    $stmt = mysqli_stmt_init($conn); //refers to connection to database
                    if(!mysqli_stmt_prepare($stmt, $sql)){
                        header("Location: ../signup.php?error=sqlerror"); //an error with the sql queries
                        exit();
                    }
                    else{
                       //hashing password
                       $hashedpwd =  password_hash($pswd, PASSWORD_DEFAULT); //function that hashes the password
                        mysqli_stmt_bind_param($stmt, "ssssss", $userName, $email, $hashedpwd, $phonenum, $occ, $age);//takes info and sends it to database s= string or the datatype //these are the parameters 
                        mysqli_stmt_execute($stmt); //this will run info in database
                        header("Location: ../signup.php?signup=success"); //returns to success message
                        exit(); 
                    }
            }
        }
    }
    mysqli_stmt_close($stmt); //this closes the statment
    mysqli_close($conn);
}

else{
    header("Location: ../signup.php");
    exit();
}
