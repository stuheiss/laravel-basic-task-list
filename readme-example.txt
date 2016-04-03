1. create Homestead VM
  see https://laravel.com/docs/5.2/homestead
2. start tutorial "Basic Task List"
vm> $ composer create-project laravel/laravel quickstart --prefer-dist
3. install git, first commit
vm> $ cd quickstart; git init; git commit -a

# the following assumes that we are in the quickstart directory

4. build a database table that will hold all of our tasks. The Artisan CLI can be used to generate a variety of classes and will save you a lot of typing as you build your Laravel projects. In this case, let's use the make:migration command to generate a new database migration for our tasks table:
vm> $ php artisan make:migration create_tasks_table --create=tasks
