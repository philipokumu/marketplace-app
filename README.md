## About this Ecommerce application

The application shows a light weight ecommerce application made with Laravel, Vue 3 and Livewire. The backend is managed by Laravel, customer frontend uses Vue Js and Admin backend uses Livewire.

## Setup

#### Clone and setup project

```
git clone https://github.com/philipokumu/marketplace-app.git
```

1. Open project

```
cd marketplace-app
```

2. Install dependencies

```
composer install
```

3. Create a database for the project in your php localhost e.g. marketplace-app

```
Copy .env.example to .env
```

4. Open .env file and ensure to setup DB_DATABASE, DB_USERNAME and DB_PASSWORD for your database according to your environment

5. Migrate and seed the database

```
php artisan migrate --seed
```

6. Start your server

```
php artisan serve
```

7. Access the site through the link provided by the above command. For example: http://127.0.0.1:8000
8. Access the admin backend using: http://{your-host-name}/admin

## Points of improvement in the application

-   Docker setup
-   Authentication for admin end
-   Listing pagination and caching to improve speed and scalability

## Notable features of the application

-   All endpoints are created using the Test Driven Development approach
