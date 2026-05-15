<!DOCTYPE html>
<html>
    <head>
        <title>PHP Demo</title>
        <style>
            body{
                font-family:Arial;
                text-align:center;
                margin-top:100px;
            }
            .box{
                border:2px solid purple;
                width:400px;
                margin:auto;
                padding:20px;
                background-color:lightblue;
            }
        </style>
    </head>
    <body>
        <div class="box">
            <h1> Server-Side Scripting</h1>
            <hr>
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