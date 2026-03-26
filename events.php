<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Events | Bike King Borders</title>
    <meta name="description" content="Whether it's Scotland, England, Northern Ireland or Wales, there are plenty of biking events taking place across the UK. There is fun to be had all throughout the year and we have a list of upcoming events, from charity races to competitive cups, so you don't miss out!">

    <link rel="stylesheet" href="./stylesheet.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<?php set_include_path('./include') ?>

<body>
    <?php
    include 'header.php';
    include 'search.php';
    ?>
    <main>
        <h2 class="league-spartan banner">Upcoming Events</h2>
            <section class="eventsContainer">
                <div class="searchFilter">
                    <h3 class="league-spartan">Filter Results</h3>
                        <form action="search-results.php" method="POST">
                            <details> <!-- SEARCH BY NAME -->
                                <summary class="league-spartan">Event Name</summary>
                                <input type="text" name="searchText">
                                <input type="submit" value="Search by Name" name="searchName" class="button">
                            </details>
                            <details> <!-- SEARCH BY LOCATION -->
                                <summary class="league-spartan">Event Location</summary>
                                <input type="radio" name="searchRadio" value="England">
                                England</input><br>
                                <input type="radio" name="searchRadio" value="Northern Ireland">
                                Northern Ireland</input><br>
                                <input type="radio" name="searchRadio" value="Scotland">
                                Scotland</input><br>
                                <input type="radio" name="searchRadio" value="Wales">
                                Wales</input><br>
                                <input type="submit" value="Search by Location" name="searchLocation" class="button">
                            </details>
                            <details> <!-- SEARCH BY DATE -->
                                <summary class="league-spartan">Event Date</summary>
                                <input type="date" name="searchCalendar">
                                <input type="submit" value="Search by Date" name="searchDate" class="button">
                            </details>
                        </form>
                </div>    
                <div class="events">
                    <?php //display all events
                    //connects to bkb database
                    include 'connBKB.php';
                    //queries database
                    $query = 'SELECT * FROM events';
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
                    } else {
                            echo "Error: No records were found";
                        }
                        ?>
                </div>
            </section>
    </main>
    <?php include 'footer.php' ?>
</body>
</html>