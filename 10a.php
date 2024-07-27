<!DOCTYPE html>
<html>
    <head>
        <title>Date</title>
    </head>
    <style>
        body{
            text-align: center;
            background-color: maroon;
        }
        div{
            font-weight: bold;
            max-width: 500px;
            margin: 50px auto;
            padding: 20px 10px;
            border: 2px solid black;
            border-radius: 8px;
            background-color: beige;
        }
        date{
            color: rosybrown;
            font-size: 1.5rem;
        }


    </style>
    </head>
    <body>
        <div>
        <h1>Today's day and date is:</h1>
<date>
<?php

// Get today's date
$today_date = date("l,F,j,Y");

// Display today's date
echo  $today_date;
?>
</date>
</div>
    </body>
    </html>
