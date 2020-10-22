<?php
//session starts for all pages
    session_start();
     
?>
<!DOCTYPE HTML>
<HTML>
    <HEAD>
    <TITLE></TITLE>
    <meta charset="UTF-8" />
    <META name="author" description="Dan DeCarlo"/>
    <link rel = "stylesheet" href = "stylesheetcairncongregation.css">
    <link href="https://fonts.googleapis.com/css?family=Krub|Press+Start+2P&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Parisienne&display=swap" rel="stylesheet">
   <!-- bootstrap components -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </HEAD>
    <BODY>
        <header>
            <nav>
                    <!-- <img src = "Highlander_logo.png" alt = "Cairn Highlander" class = "highlander" > -->
                   <p class = "diffpath" size = "40px">Cairn University:</p>
                   <p class = "path" size = "40px">Walk a Different Path</p>
                
                <ul class = "header">
                    <li class = "headerli"><a href = "index.php">Home</li>
                    <li class = "headerli"><a href = "search.php">Search</li>
                    <li class = "headerli"><a href = "https://cairn.edu/give/">Donate</li>
                    <li class = "headerli"><a href = "profile.php">Profile</a></li>
                    <li class = "headerli"><a href = "signup.php">Sign up</a></li>
                    <li class = "headerli"><a href = "login.php">Log in</a></li>

                </ul> 
                </a>
                
            </nav>
        </header>
        <!--
Most of this code is from https://www.youtube.com/watch?v=LC9GaXkdxF8&t=4511s by  mmtuts who descibes how to create alogin system
this video has helped me learn some backend and how to create a webpage to connect a database to. There is some variations to the variable names
and table columns. 
-->
