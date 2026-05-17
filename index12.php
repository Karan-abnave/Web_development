<!DOCTYPE html>
<html>
    <head>
        <title> PHP Array </title>
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
                border-radius:10px;
            }
            h1{
                text-align:center;
                color:purple;
            }
            h3{
                color:blue;
            }
            table{
                width:100%;
                border-collapse:collapse;
            }
            th,td{
                border:1px solid black;
                padding:10px;
                text-align:center;
            }
            td{
                background-color:purple;
                color:white;
            }
        </style>
    </head>
    <body>
        <div class="box">
            <h1>PHP Arrays</h1>
            <hr>
            <h3> Indexed Array </h3>
            <?php
                $tech=array("HTML,CSS,JavaScript,PHP");
                echo "<ul>";
                foreach($tech as $t)
                    {
                        echo "<li>$t</li>";
                    }
                    echo "</ul>";
            ?>

            <h3> Associative Array </h3>
            <?php
                $marks = array(
                    "WD" =>90,
                    "DBMS" =>85,
                    "DS" =>80
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

