## Crud Test Students -

(Coloquei em inglês só pra testar se ficaria melhor - e para treinar de modo como normalmente é feito - :O )

I used MySQL to connect to a database and used the artisan tricks to create the table, and to configure my CRUD controller functions!

Create a .env file in root directory. 

Set the configs like that (or like the config of your database):

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crud
DB_USERNAME=root
DB_PASSWORD=root

-------------------------------------------------------

Create the tables:

php artisan make:migration create_students_table

(After making the config in the migration file to the table, execute the code above)

php artisan migrate 

-------------------------------------------------------

Create the controller, then config it:

php artisan make:controller StudentController --resource

-------------------------------------------------------

Create the model to get the data from database:

php artisan make:model Student

-------------------------------------------------------

After that, create the views and configure the route!!
