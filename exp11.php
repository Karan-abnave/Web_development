<!DOCTYPE html>
<html>
    <head>
        <title>String Manipulation</title>
        <style>
            body{
                background-color:#2222;
                font-family:Arial;
                color:white;
            }
            .box{
                width:700px;
                margin:auto;
                margin-top:50px;
                background-color:#333;
                padding:20px;
                border-left:5px solid orange;
                border-radius:10px;
            }
            .result{
                background-color:#444;
                padding:10px;
                margin-top:10px;
                border-radius:5px;
            }
            h1{
                color:orange;
            }
        </style>
    </head>
    <body>
        <div class = "box">
            <h1>PHP String Manipulation</h1>
            <hr>
            <?php
            $str="Web Development Lab";
            ?>
        </div>

        <div class = "result">
            Original String:
            <?php echo $str; ?>
        </div>

        <div class = "result">
            String Length:
            <?php echo strlen($str);?>
        </div>

        <div class = "result">
            Reverse String:
            <?php echo strrev($str);?>
        </div>

        <div class = "result">
            Substring:
            <?php echo substr($str,0,3);?>
        </div>
    </body>
</html> 