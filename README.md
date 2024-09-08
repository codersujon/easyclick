## Project Instructions
```
composer install
npm install
npm run build
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve
npm run dev
```

## Cache Clear
```
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan optimize:clear
rm -rf bootstrap/cache/*/*
rm -rf bootstrap/cache/*/* storage/framework/cache/*
```


