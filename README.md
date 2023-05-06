The Laravel Template charged with Breeze (react) and Render-deployable

# Development

Install PHP Dependencies

```
docker run --rm -v $PWD:/app composer install
```

Run Application

```
./sail up
```

This also run `npm run dev` that will watch the package that we use on react part

You can access the application at [localhost](http://localhost)

# Deploying on Render

Reference: [Render Blog](https://render.com/docs/deploy-php-laravel-docker)

1. Create a new Webservice with **Docker** run type
2. Add the required environment:
    1. `DB_CONNECTION`
    2. `DATABASE_URL`: e.g for mysql connection: `mysql://user_name:some_password@somedomain.com/database_name`
    3. `APP_KEY`: Copy value from `./sail php artisan key:generate --show`
3. Deploy
