<?php
    // Making a connection to the database 
    $connect = mysqli_connect('localhost', 'root', '', 'hnginterns');
    // Checking if connection was successful and if not, end the page
    if (! $connect) {
        die('Error Connecting to Database');
    }
    // Querying the database, interns table to retrieve all the records
    $result = mysqli_query($connect, "select * from interns");
    // Checking if the records were found 
    if ($result) {
        // Looping through the records to show them on the page.
        // For easy way to view, we will use a html table here
        echo '<table><tr><th>S/N</th><th>Name</th><th>Github Profile</th</tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr><td>' . $row['id'] . '</td>'; 
            echo '<td>' . $row['name'] . '</td>'; 
            echo '<td>' . $row['git_profile'] . '</td></tr>'; 
        }
        echo '</table>';
    }