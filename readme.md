# Group Chat using Laravel and Pusher with MongoDB

This repository demonstrates the process to create a realtime *Group Chat Application* using [Laravel](https://laravel.com/) and [Pusher](https://pusher.com/). Please follow below steps to have a running version of the app in this repo

1. Clone repo
2. Configure your environment variables for Pusher and Laravel by copying the `.env.example` to `.env`
3. Configure your Pusher key in the `resources/assets/js/bootstrap.js` file
4. Install composer dependencies
5. Run npm install
6. Do not forget to run the queue listener to broadcast the events

## Getting Started
Very simple php based chatting application

# Installation
1. Clone this repo
```
https://github.com/RahulsChess/Laravel-Group-Chat-Mongodb.git
```

2. Install composer packages
```
cd laravel-chat
$ composer install
```

3. Create and setup .env file
```
make a copy of .env.example and rename to .env
$ php artisan key:generate
put database credentials in .env file
```


4. Install your dependencies
   install laravel MongoDb package
   ```
    composer require jenssegers/mongodb
    ```
    
     install laravel MongoDb package
   ```
    composer require pusher/pusher-php-server
    ```
    
    
    Run NPM commands
    ```
    npm install
    npm run dev
    npm run watch
    ```

5. Start your app

    ```
    php artisan queue:listen
    php artisan serve
    ```



## Help

For more information on all the things you can do with Pusher Chat Tutorial(https://pusher.com/tutorials/group-chat-laravel).
