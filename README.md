#NGINX
 - client_max_body_size 100M;
 - max_input_vars = 3000 

#NOTE
 - git clone git@github.com:winex01/mangabookmarker.git
 - cp .env.example .env
 - composer install
 - sudo chown -R www-data:www-data storage/ 
 - sudo chown -R www-data:www-data bootstrap/cache/
 - php artisan migrate:fresh
 - php artisan db:seed
 - php artisan storage:link 