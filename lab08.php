<?php


echo "<div style='font-size:22px;color:brown;'>";
echo "CPS530 Lab08 php problems: ";
echo "</div>";





echo "<div style='font-size:22px;color:green;'>";
echo "Problem 1: ";
echo "</div>";
$currentTime = date('Hi');


if (($currentTime <= "1200")) {
  echo "Good Morning";
  echo "<br>";
  echo '<img src="https://saltwire.imgix.net/freelance-atlantic-skies-why-is-the-daytime-sky-blue-and-not-pink-1.jpg?cs=srgb&w=1200&h=630&fit=crop&auto=enhance%2Ccompress%2Cformat" >';

} elseif (($currentTime >= "1201") && ($currentTime <= "1600")) {
  echo "Good Afternoon";
  echo "<br>";
  echo '<img src=" https://images.unsplash.com/photo-1577257107590-fc448601f16a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YWZ0ZXJub29uJTIwc3VufGVufDB8fDB8fA%3D%3D&w=1000&q=80" >';

} elseif (($currentTime >= "1601") && ($currentTime <= "2400")) {
  echo "Good Night";
  echo "<br>";
  echo '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/%D0%A1%D0%B2%D0%B5%D1%82_%D0%BE%D1%82_%D0%B4%D0%B5%D1%80%D0%B5%D0%B2%D0%BD%D0%B8_-_panoramio.jpg/640px-%D0%A1%D0%B2%D0%B5%D1%82_%D0%BE%D1%82_%D0%B4%D0%B5%D1%80%D0%B5%D0%B2%D0%BD%D0%B8_-_panoramio.jpg"  />';
}
?>

<?php
echo "<div style='font-size:22px;color:green;'>";
echo "Problem 2: ";
echo "</div>";
echo "<form  action='https://www.cs.ryerson.ca/~x13liu/lab08b.php' method='post'>";

echo " The rows and columns must be between 3 and 12!! <br>";
echo " <label for='row'>Number of rows:</label> ";
echo "<input type='text' id ='rows' name='row'><br>";
echo " <label for='col'>Number of columns:</label> ";
echo "<input type='text' id ='c' name='columns'><br>";
echo "<input type='submit' value='Submit'><br>";
echo "</form>";





?>

<?php
$total_count = 0;
if (isset($_COOKIE['count'])) {
  $total_count = $_COOKIE['count'];
  $total_count++;
}

setcookie('count', $total_count);
if ($total_count == 0) {
} else {
  echo "This is your visit number " . $total_count;
}
?>


<?php

echo "<div style='font-size:22px;color:green;'>";
echo "Problem 4: <br><br><br>";
echo "</div>";


  $images[0] = "jack01";
  $images[1] = "jack02";
  $images[2] = "jack03";
  echo "The first image is Jack013: ";
  echo "<img src='https://ihypress.com/holidays/halloween/jack13.gif'>";



?>