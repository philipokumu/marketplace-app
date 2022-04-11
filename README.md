## About this Ecommerce application

The application showcases a light weight ecommerce application made with Laravel, Vue 3 and Livewire. The backend uses Laravel, customer frontend uses Vue Js and Admin end uses Livewire.

## Setup

You can setup this application using 2 ways:

-   1. Manual Setup
-   2. Docker Setup

### 1. Manual Setup

#### Clone and setup project

```
git clone https://github.com/philipokumu/marketplace-app.git
```

1. Open project

```
cd marketplace-app
```

2. Install backend dependencies

```
composer install
```

3. Install frontend dependencies

```
npm install
```

4. Create a database for the project in your php localhost e.g. marketplace-app

```
Copy .env.example to .env
```

5. Open .env file and ensure to setup the following according to your environment

-   MIX_APP_URL
-   DB_DATABASE
-   DB_USERNAME
-   DB_PASSWORD

6. Generate application key

```
php artisan key:generate
```

7. Migrate and seed the database

```
php artisan migrate --seed
```

8. Start your server

```
php artisan serve
```

9. Access the site through the link provided by the above command. For example: http://127.0.0.1:8084
10. Access the admin backend using your local url e.g.: http://{your-host-name}/admin

## Points of improvement in the application

-   Docker setup
-   Authentication for admin end
-   Listing pagination and caching to improve speed and scalability

## Notable features of the application

-   All endpoints are created using the Test Driven Development approach

### 2. Docker Setup

1. Run entrypoint file(Only for initial setup on your machine)

```
./entrypoint.sh
```

2. If you want to reopen the application i.e. after initial setup, use this command:

```
docker-compose -f docker-compose.yml up -d
```

3. Customer end link: http://localhost:8084
4. Admin end link: http://localhost:8084/admin
