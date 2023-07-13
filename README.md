# Zap-Map Technical Challenge (Submission by: Jomar Enrico Antonio)

## Installation
Hi!, I finished the challenge using Laravel 8 and MySQL. After cloning the project, please do a migrate and seed, I created a seeder that parse and save the provided data.csv file to the database.

Clone the repository.

    git clone https://github.com/jomxenri2/zap-map-challenge.git .
    composer install
    cp .env.example .env

Run the database migration and seeder.

    php artisan migrate
    php artisan db:seed

## Files Added or Modified
The following list all the files I added or modified. I also added inline comments in those files.

Database migration and seeder

- database\csv\data.csv
- database\migrations\2023_07_13_161341_create_locations_table.php
- database\seeders\DatabaseSeeder.php
- database\seeders\LocationSeeder.php

API Route

- routes\api.php

Controller, Model, and Request

- app\Http\Controllers\LocationController.php
- app\Http\Requests\FetchLocationRequest.php
- app\Models\Location.php

## Location Endpoint
GET Request Requirements

| TYPE    	 | GET     	                   |
| HEADER   	 | Accept: application/json	   |
| PARAMETERS | latitude, longitude, radius |

Sample Endpoint

    http://localhost:8000/api/locations?latitude=51.603983853765925&longitude=-1.966490826031952&radius=5

![alt text](https://github.com/jomxenri2/zap-map-challenge/blob/main/public/img/Screenshot-endpoint.png?raw=true)



Submission by: Jomar Enrico Antonio
Email: jomxenri2@gmail.com