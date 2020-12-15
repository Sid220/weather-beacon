<html>
    <body>
<?php
$city="CITY";
$country="2-DIGIT_COUNTRY-CODE"; 
$url="http://api.openweathermap.org/data/2.5/weather?lat=LATITUDE&lon=LONGITUDE&appid=APIKEY";
$json=file_get_contents($url);
$data=json_decode($json,true);
   ?>

    </body>
</html>
