<html>
    <head>
        <meta http-equiv="refresh" content="60">
    </head>

<?php

include 'get.php';
    
switch ($data['weather'][0]['main']) {
  case "Thunderstorm":
    echo "<body style='background-color:darkred'>";
    break;
  case "Drizzle":
    echo "<body style='background-color:darkred'>";
    break;
  case "Rain":
    echo "<body style='background-color:darkred'>";
    break;
  case "Snow":
    echo "<body style='background-color:orange'>";
    break;
  case "Clear":
    echo "<body style='background-color:blue'>";
    break;
  case "Clouds":
    echo "<body style='background-color:DarkViolet'>";
    break;
  default:
    echo "<body style='background-color:green'>";
}
?>
    </body>
</html>
