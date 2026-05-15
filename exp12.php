<!DOCTYPE html>
<html>
    <head>
        <title>PHP Array</title>
        <style>
            body{
                font-family:Arial;
                background-color:#f2f2f2;
                padding:20px;
            }
            .box{
                background:white;
                padding:20px;
                margin-border:20px;
                border-radius:10px;
            }
            h2{
                text-align:center;
            }
            h3{
                color;blue;
            }
            table{
                border-collapse:collapse;
                width:60%;
            }
            th,td{
                border:1px solid black;
                padding:10px;
            }
            th{
                background-color:black;
                color:white;
            }
        </style>
    </head>
    <body>
        <h2>PHP Array Demonstration</h2>
        <div class = "box">
        <h3>1.Indexed Array</h3>
        <?php
        $tech = array("HTML","CSS","JavaScript","PHP");
        echo "<ul>";
        foreach($tech as $t)
            {
                echo "<li>$t</li>";
            }
        echo "</ul>";
        ?>
        </div>

        <div class = "box">
            <h3>2.Associative Array</h3>
            <?php
            $marks = array(
                "WD"=>90,
                "DBMS"=>85,
                "DS"=>80
            );
            ?>
            <table>
                <tr>
                    <th>Subject</th>
                    <th>Marks</th>
                </tr>

            <?php
            foreach($marks as $sub => $m)
                {
                    echo "<tr>";
                    echo "<td>$sub</td>";
                    echo "<td>$m</td>";
                    echo "</tr>";
                }
            ?>
            </table>
        </div>
    </body>
</html>