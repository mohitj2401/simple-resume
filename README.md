# Simple Resume Build


## :dart: About ##

This website exemplifies the seamless integration of the OpenWeatherAPI to provide both current and future weather forecasts. Additionally, it incorporates PlaceKit for efficient location search functionality. The entire application is developed using the Laravel framework, showcasing its versatility and robust features. Users can explore accurate weather information for their desired locations through a user-friendly interface, combining the power of OpenWeatherAPI for weather data and PlaceKit for streamlined location search.


## :rocket: Technologies ##

The following tools were used in this project:

- [Laravel](https://laravel.com/)



## :white_check_mark: Sample Resume ##

Before starting :checkered_flag:, [Resume](https://github.com/mohitj2401/simple-resume/sample_resume.pdf)


## :checkered_flag: Starting ##

```bash
# Clone this project
 git clone https://github.com/mohitj2401/simple-resume

# Access
cd weather-app

# Install dependencies
composer install

# Duplicate the .env.example file and name it .env
cp .env.example .env



# Generate Application Key
php artisan key:generate

# Run Migration and Seeder
php artisan migrate --seed

# Serve the Application
php artisan serve

# Open your web browser and navigate to http://localhost to view the application.
```

