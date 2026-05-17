<!DOCTYPE html>
<html>
    <head>
        <title>PHP POST Method</title>
        <style>
            body{
                font-family:Arial;
                background-color:lightgray;
            }
            .box{
                width:500px;
                margin:auto;
                margin-top:80px;
                padding:20px;
                background-color:lightblue;
                border:2px solid purple;
                border-radius:10px;
            }
            h1{
                text-align:center;
                color:purple;
            }
            input{
                width:95%;
                padding:10px;
            }
        </style>
    </head>
    <body>
        <div class = "box">
            <h1 align="center">
                Voting Eligibility Check
            </h1>

            <form method="POST">
                <b>Full Name</b>
                <br><br>

                <input type="text" name="name">
                <br><br>

                <b>Age:</b>
                <br><br>

                <input type="text" name="age">
                <br><br>

                <input type="submit" value="Check Eligibility">
            </form>
            <br>
            
            <?php
            if($_SERVER["REQUEST_METHOD"]=="POST")
                {
                    $name=$_POST["name"];
                    $age=$_POST["age"];
                    echo "<h3>Result for $name</h3>";
                    echo "Your Age:$age <br><br>";
                    if($age>=18)
                        {
                            echo "You Are Eligible To Vote";
                        }
                    else
                        {
                            echo "You Are Not Eligible To Vote";
                        }
                }
            ?>
        </div>
    </body>
</html>