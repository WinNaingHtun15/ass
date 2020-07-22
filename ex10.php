<?php
$cars = array (
  array("Volvo",20,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",7,5)
);
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>