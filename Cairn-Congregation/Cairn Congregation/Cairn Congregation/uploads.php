<?php
session_start();
include_once 'includes/dbh.inc.php';
$id = $_SESSION['id_users'];


    if(isset($_POST['submitfile'])){ //is button clicked
        $file = $_FILES['uploadfile']; //gets input info from file

        $file_Name = $_FILES['uploadfile']['name'];
        $file_Tmpname = $_FILES['uploadfile']['tmp_name']; //where stored
        $file_size = $_FILES['uploadfile']['size'];
        $file_error = $_FILES['uploadfile']['error'];
        $file_type = $_FILES['uploadfile']['type'];

        $fileExtension = explode('.',$file_Name); //takes apart name and extension
        $fileRealextension = strtolower(end($fileExtension)); //makes it lowercase //end = last piece of data in []
        
        //what files are allowed
        $allowedfiles = array('jpg', 'jpeg', 'png', 'pdf', 'gif');

        if(in_array($fileRealextension, $allowedfiles)){
            if($file_error == 0){ //if there are no errors 1 means error
                if($file_size < 10000000){
                   $file_Name_new = "profile".$id.".".$fileRealextension; //creates id for the file 
                    $destinationfile = 'uploads/'.$file_Name_new;
                    move_uploaded_file($file_Tmpname,$destinationfile);
                    $sql = "UPDATE profilepics SET stats = 0 WHERE userid = '$id';"; //HERE
                    $result = mysqli_query($conn, $sql);
                    header("Location: profile.php?uploadsuccess");
                    echo '<p>Image upload success!</p>';
                }
                else{
                    echo 'File too large!';
                }
            }
            else{
                echo 'Error uploading file!';
            }
        }
        else{
            
            echo "<p class = 'pic'>You cannot upload this file type!</p>";
            header("Location: profile.php?badfiletype");
        }  
    } 