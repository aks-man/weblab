<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Form Submission</title>
    <style>
        body{
            text-align: center;
            background-color: brown;
        }
        h1,h2{
            text-align: center;
            color: whitesmoke;
        }
        form{
            text-align: center;
            max-width: 800px;
            padding: 20px 10px;
            margin: 20px auto;
            background-color: beige;
            border: 2px solid black;
        }
        label{
            font-weight: bold;
            font-size: 1.2rem;
        }
        div{
            text-align: center;
        }
        p{
            font-weight: bold;
            text-align: center;
            margin: 20px auto;
            max-width: 800px;
            padding: 20px 10px;
            border: 1px solid black;
            border-radius: 8px;
            background-color: beige;
        }
    </style>
</head>
<body>
    <h1>FORM</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label>Message:</label><br>
        <textarea rows="6" cols="50" name="mes" required></textarea><br><br>
        <div><input type="submit" value="Submit">
        <input type="reset" value="Reset">
        </div>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mes = $_POST['mes'];

    $file = 'form_data.txt';
    file_put_contents($file, $mes, FILE_APPEND | LOCK_EX);
    
    echo "<h2>Form Data:</h2>";
    echo "<p>Message: $mes</p>";
    }
    ?>
</body>
</html>
