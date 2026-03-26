<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Search Results</title>
    <meta name="description" content="">

    <link rel="stylesheet" href="stylesheet.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<?php set_include_path('./include'); ?>

<body>
    <?php
    // connects to Bike King Borders database
    include 'connBKB.php';

    // checks which search filter option was selected
    if (isset($_POST['searchName'])) {
        $search = mysqli_real_escape_string($conn, $_POST['searchText']);
        // queries database by event name
        $query = 'SELECT * FROM `events` WHERE `EventName` LIKE "%'.$search.'%"';
        $result = mysqli_query($conn, $query);
        
        // pulls results from database
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)) {
                ?>
                <div class="cardEvents">
                <?php
                $eventName = $row['EventName'];
                $date = $row['Date'];
                $location = $row['Location'];
                $suitability = $row['Suitability'];
                $priceBand = $row['PriceBand'];

                echo "<h3 class='league-spartan'>$eventName</h3><br>
                <p><strong>Date:</strong> $date</p><br>
                <p><strong>Location:</strong> $location</p> <br>";
                ?>
                </div>
                <?php
            }
        } else {echo "Error: No records were found";}
    }
    elseif (isset($_POST['searchLocation'])) {
        $search = mysqli_real_escape_string($conn, $_POST['searchRadio']);
        // applies search filter based on selected option
        $query = 'SELECT * FROM `events` WHERE `Location` LIKE "%'.$search.'%"';
        $result = mysqli_query($conn, $query);
        
        // pulls values from database
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)) {
                ?>
                <div class="cardEvents">
                <?php
                $eventName = $row['EventName'];
                $date = $row['Date'];
                $location = $row['Location'];
                $suitability = $row['Suitability'];
                $priceBand = $row['PriceBand'];

                echo "<h3 class='league-spartan'>$eventName</h3><br>
                <p><strong>Date:</strong> $date</p><br>
                <p><strong>Location:</strong> $location</p> <br>";
                ?>
                </div>
                <?php
            }
        }
    }
    elseif (isset($_POST['searchDate'])) {
        $search = mysqli_real_escape_string($conn, $_POST['searchCalendar']);
        // applies search filter based on selected option
        $query = 'SELECT * FROM `events` WHERE `Date` LIKE "%'.$search.'%"';
        $result = mysqli_query($conn, $query);
        
        // pulls values from database
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)) {
                ?>
                <div class="cardEvents">
                <?php
                $eventName = $row['EventName'];
                $date = $row['Date'];
                $location = $row['Location'];
                $suitability = $row['Suitability'];
                $priceBand = $row['PriceBand'];

                echo "<h3 class='league-spartan'>$eventName</h3><br>
                <p><strong>Date:</strong> $date</p><br>
                <p><strong>Location:</strong> $location</p> <br>";
            }       
        }
    }
                ?>
                </div>
                <?
    else {echo "Error: No option selected";}
    ?>
</body>
</html>