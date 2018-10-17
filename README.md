# Slim Framework 3 Skeleton Application

Project is based on Slim Framework 3 Skeleton Application [https://github.com/slimphp/Slim-Skeleton](https://github.com/slimphp/Slim-Skeleton)

## Prerequisite

* Composer

## Install the Application

Clone the repo using the command below

    git clone https://apps.itelasoft.com.au/gitlab/snc/api.git <folder-name>

To install dependencies

	composer install

To run the project with the in-built server, use the command below

	php -S localhost:8080 -t public

Other notes,

* If you are using docker or any other service, Point your virtual host document root to the `public/` directory.
* Ensure `logs/` is web writeable.

## Extras

Phinx to manage the database migrations. Phinx is just about migrations without all the bloat of a database ORM system or framework. [https://github.com/cakephp/phinx](https://github.com/cakephp/phinx)

The Illuminate Database component is a full database toolkit for PHP, providing an expressive query builder, ActiveRecord style ORM, and schema builder. It currently supports MySQL, Postgres, SQL Server, and SQLite. It also serves as the database layer of the Laravel PHP framework. [https://github.com/illuminate/database](https://github.com/illuminate/database)

PHPUnit is a programmer-oriented testing framework for PHP. It is an instance of the xUnit architecture for unit testing frameworks. [https://github.com/sebastianbergmann/phpunit](https://github.com/sebastianbergmann/phpunit)

Monolog sends your logs to files, sockets, inboxes, databases and various web services. [https://github.com/Seldaek/monolog](https://github.com/Seldaek/monolog)

That's it, Happy coding :)
