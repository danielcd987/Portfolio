<?php
    include "header.php";
    include "includes/dbh.inc.php";
     //Used following source for a tutuorial code is changed but somewhat similar
    //https://www.youtube.com/watch?v=lwgG_uIJYQM&list=WL&index=31
?>
<!-- search bar -->
<form action = "searchresults.php" method="POST">
    <main>
        <br>
        <div class = "searchalum">
            <input placeholder = "Search Alumni Here" size = "75" width = "40" name = "searchinput">
            <button type = "submit" name = "searchsubmit">Search</button>
        </div>
    </main>
</form>


<h3 class = "alumniknow">Alumni You May Know!</h3>
<br>
<!-- Display records from database users -->
<div class = "resultscontainer">
    <?php

        $sql = "SELECT * FROM users;"; //gets results from database
        $results = mysqli_query($conn, $sql); //connects and displays 
        $queryresults = mysqli_num_rows($results); //checks rows and results
            if( $queryresults > 0){
                while($row = mysqli_fetch_assoc($results)){         //contains data from results in database
                    echo 
                        "<div class = 'searchlist'>
                        <table>
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
                        </table>
                        </div>";
                }
            }
    ?>
</div>

            


<?php
    require "footer.php";
?>
