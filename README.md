# Instructions: How to Run the Project?

After downloading the project, unzip the project file.

Open the project folder, check the `env` file, and update the database information.

Create a MySQL database with the name provided in the `env` file.

Next, open the project in the Terminal or Command Prompt.

Install node packages:
```bash
npm install
```
Install composer dependencies:
```bash 
composer install
```
Run the migration:
```bash
php artisan migrate
```
Run the seeder:
```bash
php artisan db:seed
```
Generate the application key:
```bash
php artisan key:generate
```
Link the storage:
```bash
php artisan storage:link
```
Run the project:
```bash
php artisan serve
```
