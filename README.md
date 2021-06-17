# The Vestal's Weather Beacon
## About
This weather beacon shows colors based on the current weather conditions for your location using openweathermap.org's weather API.

## Colours
* Red = Rain
* Orange = Snow
* Blue = Clear
* Purple = Clouds
* Green = Everything else
See [openweathermap's weather conditions page](https://openweathermap.org/weather-conditions) for all of the weather conditions.

## Notes
* The API Key has been hidden
* The location has been hidden
* Under MIT License
## Instalation
Requirements:
* A Web Server
* PHP
* An Openweathermap API key (get one [here](https://home.openweathermap.org/users/sign_up))
### Step 1
Clone this repo using<br>
`git clone https://github.com/Sid220/weather-beacon.git` or if you have the github CLI `gh repo clone Sid220/weather-beacon`.
### Step 2
Next upload this to the server by moving the folder using a command simmilair to this:
`[sudo] mv ./weather-beacon/ [server directory (in apache the default is /var/www/html/)]`
### Step 3
Use a text editor to change:
* \<CITY> to your city
* \<2-DIGIT_COUNTRY_CODE> to your country code e.g. US
* \<LATITUDE> to your latitude (you can use an online tool like [this](https://www.latlong.net/) to find it out)
* \<LONGITUDE> to your longitude (you can use an online tool like [this](https://www.latlong.net/) to find it out)
* \<API_KEY> to your API key
