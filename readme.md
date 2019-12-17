# Group Chat using Laravel and Pusher with MongoDB

This repository demonstrates the process to create a realtime *Group Chat Application* using [Laravel](https://laravel.com/) and [Pusher](https://pusher.com/). Please follow below steps to have a running version of the app in this repo

1. Clone repo
2. Configure your environment variables for Pusher and Laravel by copying the `.env.example` to `.env`
3. Configure your Pusher key in the `resources/assets/js/bootstrap.js` file
4. Install composer dependencies
5. Run npm install
6. Do not forget to run the queue listener to broadcast the events

## Getting Started

Getting up and running is as easy as 1, 2.


1. Install your dependencies
   install laravel MongoDb package
   ```
    composer require jenssegers/mongodb
    ```
    
     install laravel MongoDb package
   ```
    pusher/pusher-php-server
    ```
    
    
    Run NPM commands
    ```
    npm install
    npm run dev
    npm run watch
    ```

2. Start your app

    ```
    php artisan queue:listen
    php artisan serve
    ```



## Help

For more information on all the things you can do with Pusher Chat Tutorial(https://pusher.com/tutorials/group-chat-laravel).
