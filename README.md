# Weather App

![](https://github.com/mohitj2401/weather-app/blob/master/Produce_2.GIF)

## :dart: About ##

This website exemplifies the seamless integration of the OpenWeatherAPI to provide both current and future weather forecasts. Additionally, it incorporates PlaceKit for efficient location search functionality. The entire application is developed using the Laravel framework, showcasing its versatility and robust features. Users can explore accurate weather information for their desired locations through a user-friendly interface, combining the power of OpenWeatherAPI for weather data and PlaceKit for streamlined location search.


## :rocket: Technologies ##

The following tools were used in this project:

- [Laravel](https://laravel.com/)
- [OpenWeather](https://openweathermap.org/api)
- [PlaceKit](https://placekit.io/)


## :white_check_mark: Requirements ##

Before starting :checkered_flag:, you need to have [OpenWeather](https://openweathermap.org/api) and [PlaceKit](https://placekit.io/) API keys.



## :checkered_flag: Starting ##

```bash
# Clone this project
 git clone https://github.com/mohitj2401/weather-app

# Access
cd weather-app

# Install dependencies
composer install

# Duplicate the .env.example file and name it .env
cp .env.example .env



# Generate Application Key
php artisan key:generate

# Serve the Application
php artisan serve

# Open your web browser and navigate to http://localhost:8000 to view the application.
```

