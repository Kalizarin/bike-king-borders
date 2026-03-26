<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Events | Bike King Borders</title>
    <meta name="description" content="">

    <link rel="stylesheet" href="./stylesheet.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<?php set_include_path('./include') ?>

<body>
    <?php include 'header.php' ?>
    <main>
        <h2 class="league-spartan banner">Search Results</h2>
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
                <?php include 'search.php'?>
            </div>
        </section>
    </main>
    <?php include 'footer.php' ?>
</body>
</html>