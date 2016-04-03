See https://laravel.com/docs/5.2/quickstart#building-layouts-and-views

1. create Homestead VM
  see https://laravel.com/docs/5.2/homestead
2. start project "quickstart" (tutorial "Basic Task List")
vm> $ composer create-project laravel/laravel quickstart --prefer-dist
3. install git, first commit
vm> $ cd quickstart; git init; git commit -a
4. symlink quickstart to Laravel (nginx is configured to serve Laravel/public)
vm> $ ln -s quickstart Laravel

# the following assumes that we are in the quickstart directory

5. build a database table that will hold all of our tasks. The Artisan CLI can be used to generate a variety of classes and will save you a lot of typing as you build your Laravel projects. In this case, let's use the make:migration command to generate a new database migration for our tasks table:
vm> $ php artisan make:migration create_tasks_table --create=tasks
6. edit database/migrations/*_create_tasks_table.php and add column "name" to tasks table
7. create modle Task
vm> $ php artisan make:model Task
8. create routes for get, post, delete in app/Http/routes.php
9. fill out route for get to return view('tasks')
10. define app layout in resources/views/layouts/app.blade.php
11. define child vie in resources/views/tasks.blade.php
12. fill out route for post with validation
13. add errors view in resources/views/common/errors.blade.php
14. fill out route for post to add the task and redirect to /
15. fill out route for get to show all tasks
16. modify tasks view to display all tasks in a table
17. add Delete button





See for testing Laravel with phpunit
https://laravel.com/docs/5.1/testing
