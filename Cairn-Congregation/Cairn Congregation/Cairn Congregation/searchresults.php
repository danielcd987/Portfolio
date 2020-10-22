<?php
    include "header.php";
    include "includes/dbh.inc.php";
    //Used following source for a tutuorial code is changed but somewhat similar
    //https://www.youtube.com/watch?v=lwgG_uIJYQM&list=WL&index=31
?>

<form action = "searchresults.php" method="POST">
    <main>
        <br>
        <div class = "searchalum">
            <input placeholder = "Search Alumni Here" size = "75" width = "40" name = "searchinput">
            <button type = "submit" name = "searchsubmit">Search</button>
        </div>
    </main>
</form>

<div class = "resultscontainer">
    <?php
        if(isset($_POST['searchsubmit'])){
            $Search = mysqli_real_escape_string($conn, $_POST['searchinput']); //when user types something there is no sql injection
            //use search query to read what was written and compares to database
            $sql = "SELECT * FROM users WHERE UserNames LIKE '%$Search%' OR occ LIKE '%$Search%' OR age LIKE '%$Search%'";
            $Results = mysqli_query($conn, $sql);
            $queryResults = mysqli_num_rows($Results); //gets results

            echo("There are ".$queryResults." results:"); //counts number of records in the database
            //if there are records in the DB
            if($queryResults > 0){
                while($row = mysqli_fetch_assoc($Results)){ //have the search results go to profile
                    echo "<table>
                    <tr>
                        <th>UserName:</th>
                        <th>Occupation:</th>
                        <th>Age:</th>
                        <th>Feeling:</th>
                    </tr>
                    <tr>
                        <td><h5 class = 'records'>".$row['UserNames']."</h5></td>
                        <td><h5 class = 'records'>".$row['occ']."</h5></td>
                        <td><h5 class = 'records'>".$row['age']."</h5></td>
                        <td><h5 class = 'records'>".$row['stats']."</h5></td>

                    </tr>
                </table>";
                }
            }
            else{
                echo "No Results Found";
            }
        }
    ?>
</div>
