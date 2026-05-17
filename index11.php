<!DOCTYPE html>
<html>
    <head>
        <title> PHP String </title>
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
                background-color:white;
                border:2px solid purple;
                border-radius:10px
            }
            h1{
                text-align:center;
                color:purple;
            }
            .result{
                padding:10px;
                margin-top:10px;
                background-color:#f2f2f2;
                border-radius:5px;
            }
        </style>
    </head>
    <body>
        <div class="box">
            <h1> String Manipulation </h1>
            <hr>
            <?php
                $str= "Web Development Lab";
            ?>
        </div>

        <div class="result">
            Original String:
            <?php
                echo $str;
            ?>
        </div>

        <div class="result">
            String Length:
            <?php
                echo strlen($str);
            ?>
        </div>

        <div class="result">
            Reverse String:
            <?php
                echo strrev($str);
            ?>
        </div>

        <div class="result">
            Substring:
            <?php
                echo substr($str,0,3);
            ?>
        </div>
    </body>
</html>

