# Simple Resume Build


## :dart: About ##

Simple-Resume is a user-friendly and efficient resume-building platform crafted using Laravel, designed to empower individuals to effortlessly create professional resumes. With a seamless admin-like panel, users can add details about their skills, projects, experiences, education, and personal profiles. The platform streamlines the resume creation process, allowing users to generate and download their resumes in PDF format with ease.


## :rocket: Technologies ##

The following tools were used in this project:

- [Laravel](https://laravel.com/)
- [Gemini AI ](https://gemini.google.com/)



## :white_check_mark: Sample Resume ##

Before starting checkout sample :checkered_flag:, [Resume](sample_resume.pdf)


## :checkered_flag: Starting ##

```bash
# Clone this project
 git clone https://github.com/mohitj2401/simple-resume

# Access
cd simple-resume

# Install dependencies
composer install

# Duplicate the .env.example file and name it .env
cp .env.example .env


# Duplicate the .env.example file and name it .env
Provide GEMINI_API_KEY in .env

# Generate Application Key
php artisan key:generate

# Run Migration and Seeder
php artisan migrate --seed

# Serve the Application
php artisan serve

# Open your web browser and navigate to http://localhost to view the application.
```

