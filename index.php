<!--
   index.php
   
   Copyright 2020  <pi@raspberrypi>
   
   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.
   
   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.
   
   You should have received a copy of the GNU General Public License
   along with this program; if not, write to the Free Software
   Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
   MA 02110-1301, USA.
   
   
-->
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
