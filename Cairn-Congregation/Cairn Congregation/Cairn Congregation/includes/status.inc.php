<?php
// include "includes/dbh.inc.php"; //includes DB connection
// if(isset($_POST['status'])){
//  $userids = $_POST['id_users'];

// // $userid =  $_SESSION['userId'];
// $feeling = $_POST['userstatus'];
// $sql = "UPDATE users 
//         SET UserNames= ?, email_users= ?,pwdusers= ?,phonenum= ?,occ= ?,age= ? , stats = '$feeling' 
//         WHERE id_users = $userid" ;

// // $sql = "UPDATE users SET stats = '$feeling' WHERE id_users =  'hi';"; 
// mysqli_query($conn, $sql);

// header("Location: ../profile.php?feelingsubmitted");
// }
if(isset($_POST['status'])){
    require 'dbh.inc.php';
    $userid = $_POST['id_user'];
    $feels = $_POST['userstatus'];

//possible errors
    if(empty($feels)){
        header("Location: ../profile.php?error=emptyfields=".$feels); //returns error if fields are empty
        exit();
    }
    
    
    else{
        $sql = "SELECT id_users From users WHERE id_users=?"; //? is a placeholder
        $stmt = mysqli_stmt_init($conn); //refers to connection to database
        if(!mysqli_stmt_prepare($stmt,$sql)){ //sees if the sql query fails
            header("Location: ../profile.php?error=sqlerror");
            exit();   
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $feels);//takes info and sends it to database s= string or the datatype //these are the parameters 
            mysqli_stmt_execute($stmt); //this will run info in database
            mysqli_stmt_store_result($stmt); // this takes result and stroes into variable
            $resultcheck = mysqli_stmt_num_rows($stmt); //checks to see if the user exists
                if($resultcheck > 0){
                    header("Location: ../profile.php?error=somethingsoff"); //if username is taken
                    exit();  
                }
                //this else statement enters the values inputed into database
                else {

                   $sql = "UPDATE users 
                           SET stats= ?
                           WHERE id_users = $userid ;

                    --  $sql = INSERT INTO users (stats) VALUES ($feels) WHERE id_users = $userid;
                       

                 
                    "; //this changes when you put an id number
            
                    $stmt = mysqli_stmt_init($conn); //refers to connection to database
                    if(!mysqli_stmt_prepare($stmt, $sql)){
                        header("Location: ../profile.php?error=sqlerror02"); //an error with the sql queries
                        exit();
                    }
                    else{
                       //hashing password
                    //    $hashedpwd =  password_hash($pswd, PASSWORD_DEFAULT); //function that hashes the password
                        mysqli_stmt_bind_param($stmt, "s", $feels);//takes info and sends it to database s= string or the datatype //these are the parameters 
                        mysqli_stmt_execute($stmt); //this will run info in database
                        header("Location: ../profile.php?updateprofile=success"); //returns to success message
                        exit(); 
                    }
            }
        }
    }
    mysqli_stmt_close($stmt); //this closes the statment
    mysqli_close($conn);
}
else{
    header("Location: ../profile.php");
    exit();
}