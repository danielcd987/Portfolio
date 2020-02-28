<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>title of tab header</TITLE>
<meta charset="UTF-8" />
<META name="author" description="Dan DeCarlo"/>
<link href="https://fonts.googleapis.com/css?family=Oxanium&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="liststyle.css">
</HEAD>
<BODY>
<form name = "tasklist" action = "process.php" method = "post">
    <div class = "logininfo">
        <h1 class = "heading">TO DO LIST:</h1>
       <!-- <input placeholder = "USER NAME">
        <input placeholder = "PASSWORD">-->
    </div>

    <br>
    <h3 class = "heading">Enter Task:</h3>
    <div class = "centerbox"> 
        <input class = "inputstyle" placeholder = "Task" name = "task"> 
    </div>
    <h3 class = "heading">Class:</h3>
    <div class = "centerbox"> 
        <input class = "inputstyle" placeholder = "Class" name = "class"> 
    </div>
    <h3 class = "heading">Enter Due Date:</h3>
    <div class = "centerbox">
        <input type = "date" name = "duedate">
    </div>                      
     <div class = "centerbox">
         <h3 class = "heading">Description:</h3>
         <input type = "textarea" size = "30" placeholder = "DESCRIPTION" class = "inputstyle" name = "description">
    </div>
    <br>
    <div class = "centerbox">
        <input class = "buttonstyles" type = "submit" value = "submit">
     </div>
</form>
</BODY>
</HTML>