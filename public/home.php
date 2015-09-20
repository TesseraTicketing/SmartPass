<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Smart Pass</title>

    <!-- JavaScript Files -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/parser.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/sportHome.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/modal.js"></script>

    <!-- CSS Files -->
    <link href="css/navbar.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/modal.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>

<body>
<?php include "components/navbar.html"; include "components/modals.html"?>

<div class="center">
    <div class="section">

        <h2 class="pageHeader"></h2>
            <div id="filmSchedule">
                <h2 class="sectionHeader">Schedule of Films</h2>
                <p class="noContent"></p>

    <!--            <div class="scheduleEvent">-->
    <!--                <span class="Date">Wednesday, Oct. 24th</span>-->
    <!--                <span class="Time">8:00 pm</span>-->
    <!--                <span class="movieName">Little Big Soldier</span>-->
    <!--            </div>-->

            </div>
            <div id="movieList">
                <h2 class="sectionHeader">Films</h2>
                <p id="noTeams" class="hidden">There are no scheduled films at this time.</p>
            </div>

    </div>
</div>


</body>
</html>