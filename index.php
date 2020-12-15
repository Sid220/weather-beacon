<html>
    <head>
        <meta http-equiv="refresh" content="60">
     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>

<?php

include 'sample.php';
    
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
?><br><br>


</center>
    </body>
</html>
