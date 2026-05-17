<!DOCTYPE html>
<html>
    <head>
        <title>PHP Demo</title>
        <style>
            body{
                font-family:Arial;
                background-color:lightgray;
            }
            .box{
                width:500px;
                margin:auto;
                margin-top:100px;
                padding:20px;
                background-color:white;
                border:2px solid purple;
                border-radius:10px;
                text-align:center;
            }
            h1{
                color:purple;
            }
        </style>
    </head>
    <body>
        <div class="box">
            <h1>
                Server-Side Scripting
            </h1>

            <hr size="4" color="black">

            <h2>
                <?php
                    echo "Welcome to Web Development Lab";
                ?>
            </h2>

            <h3>
                Current Date:
                <?php
                    echo date("d-m-Y");
                ?>
            </h3>

            <h3>
                Current Time:
                <?php
                    date_default_timezone_set("Asia/Kolkata");
                    echo date("h:i:s A");
                ?>
            </h3>
        </div>
    </body>
</html>