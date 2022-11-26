<?php
$col=$_POST['columns'];
$row=$_POST['row'];


if ($col > 12 || $row > 12 || $col < 3 || $row < 3) {
    echo "The rows and columns must be between 3 and 12 !!!!! ";
    echo " Please click <a href='https://www.cs.ryerson.ca/~x13liu/lab08.php'> here </a> to return and fix your value :)";

} else {
    echo "<table>";
    echo "<thead>";
    echo "<tr>";

    echo "<tbody>";

    for ($rowCount = 1; $rowCount <= $row; $rowCount++) {

        for ($multCount = 1; $multCount <= $col; $multCount++) {
            $prod = $rowCount * $multCount;
            echo "<td> $prod</td>";
        }
        echo " </tr>";
    }
    echo "</tbody>";
    echo "</table>";
}
?>