<!DOCTYPE html>
<html>
    <head>
        <title>Prime</title>
        <style>
            body{
                text-align: center;
                background-color: maroon;
            }
            form{
                text-align: center;
                max-width: 500px;
                padding: 20px 10px;
                margin: 50px auto;
                border: 2px solid black;
                border-radius: 8px;
                background-color: beige;
            }
            label{
                font-weight: bold;
                font-size: 1.5rem;
            }
            h1{
                text-align: center;
                color: beige;
            }
            button{
                background-color: coral;
                border: 1px solid black;
                border-radius: 8px;
            }
            p{
                color: beige;
            }

        </style>
    </head>
    <body>
        <h1>Prime number checker</h1>
        <form method="POST">
            <label>Number:</label>
            <input type="num" id="num" name="num" required/><br><br>
            <button type="submit">Check</button>
        </form>
        <p>
            <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $num=$_POST["num"];
                if($num==1||$num==0){
                    echo "The number $num is neither prime nor not prime";
                    return;
                }
                $flag=0;
                for($i=2;$i<=sqrt($num);$i++){
                    if($num%$i==0){
                        $flag=1;
                        break;
                    }
                }
                    if($flag == 1){
                        echo "The number $num is not prime";
                    }
                    else{
                        echo "The number $num is a prime number";
                    }
                }
            ?>
            
        </p>
    </body>
</html>
