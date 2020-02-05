<?php
$url=$_SERVER['REQUEST_URI'];
header("Refresh: 5; URL=$url"); // Refresh the webpage every 5 seconds
?>

<html>
<head>
    <title>Gas weightage System</title>
    <style type="text/css">
        .table_titles {
            padding-right: 20px;
            padding-left: 20px;
            color: #000;
        }

        .table_titles {
            color: #FFF;
            background-color: #0000FF;
        }

        table {
            border: 2px solid #333;
        }
        body { font-family: "Trebuchet MS", Courier; }
    </style>
</head>
<body>

<h1>Gas Weightage System</h1>
<table border="0" cellspacing="0" cellpadding="4">
    <tr>
        <td class="table_titles">Date and Time</td>
        <td class="table_titles">Weight</td>
    </tr>

    <?php
    $USERNAME="root";
    $PASSWORD="";
    $HOST="localhost";
    $DB_name="iot";

    $con=mysqli_connect($HOST,$USERNAME,$PASSWORD,$DB_name);
    $result = mysqli_query($con,"SELECT * FROM data");
    // Process every record
    $oddrow = true;
    while($row = mysqli_fetch_array($result))
    {
        if ($oddrow)
        {
            $css_class=' class="table_cells_odd"';
        }
        else
        {
            $css_class=' class="table_cells_even"';
        }
        $oddrow = !$oddrow;
        echo "<tr>";
        echo "<td '.$css_class.'>" . $row['date'] . "</td>";
        echo "<td '.$css_class.'>" . $row['weight'] . "</td>";
        echo "</tr>";
    }

    // Close the connection
    mysqli_close($con);
    ?>
</table>
</body>
</html>

