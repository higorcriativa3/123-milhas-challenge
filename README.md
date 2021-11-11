# ![Laravel Example App](https://cdn.discordapp.com/attachments/908139477539639339/908139551623622696/123Milhas-Logo.png)

[![GitHub license](https://img.shields.io/github/license/gothinkster/laravel-realworld-example-app.svg)](https://raw.githubusercontent.com/gothinkster/laravel-realworld-example-app/master/LICENSE)

> ### This app is part of a job interview with 123 Milhas.

This repo is functionality complete!

----------

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/8.x/installation#installation) 

Clone the repository

    git clone git@github.com:higorcriativa3/123-milhas-challenge.git

Switch to the repo folder

    cd 123-milhas-challenge

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

## Get group of Flights

### Access `/api/flightsapi` to get the group of flights.

## Get Documentation

### Access `/api/docs` to get documentation.
  Make sure your server is running

## Important Folders

- `.scribe` - Contains all of the Scribe files for documentation
- `app/Http/Controllers` - Contains the Flights HTTP controller
- `app/Providers` - Contains the Flights API service
- `app/Functions` - Contains Functions that treat flights
- `routes` - Contains the router of API (api.php) 

## Environment variables

- `.env` - Environment variables can be set in this file

***Note*** : You can get the POSTMAN collection at `http://127.0.0.1:8000/docs.postman`.

----------

# Testing API

Run the laravel development server

    php artisan serve

The api can now be accessed at

    http://localhost:8000/api

Request headers

| **Required** 	| **Key**              	| **Value**            	|
|----------	|------------------	|------------------	|
| Yes      	| Content-Type     	| application/json 	|
| Yes      	| X-Requested-With 	| XMLHttpRequest   	|
| Optional 	| Authorization    	| Token {JWT}      	|


----------
 ### Special Thanks:
#### `To the 123 milhas team for it valueable challenge.`