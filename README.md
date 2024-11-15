step to setup

Laravel Project Setup and Run
This guide covers the setup of a Laravel project, including the generation of the details table, triggering events, saving user background information, and testing the functionality.

Prerequisites
Ensure the following are installed:

PHP (>= 8.0)
Composer
MySQL (or compatible database)
Laravel (version 9 or above)
Step 1: Clone the Repository
Clone the project repository to your local machine:

git clone https://github.com/snehasurofficial/cfc_demo_laravel
cd cfc_demo_laravel
Step 2: Install Dependencies
Run the following to install the project dependencies via Composer:

composer install
Step 3: Set Up Environment File
Copy the .env.example file to .env:

cp .env.example .env
Step 4: Generate Application Key
Generate a unique application key:

php artisan key:generate
This will set the APP_KEY in the .env file.

Step 5: Configure Database
Create a new MySQL database (e.g., your_database_name).
Update the .env file with your database details:
env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
Step 6: Run Migrations
Run the migrations to create necessary tables:

php artisan migrate
Step 7: Seed the Database
To populate the database with sample data (users):

php artisan db:seed
This will run the database seeder, which may include sample user data.

Step 8: Run the Development Server
Start the development server:

php artisan serve
The app will run at http://127.0.0.1:8000.

Step 9: Test the Application
Create or Update Users: The UserSaved event will trigger and automatically save additional user details in the details table.
Check the details Table: Verify the extra user information (full name, middle initial, avatar, gender) is saved.

This step-by-step guide sets up the project, configures the database, runs migrations, seeds the data, and provides the necessary commands to test and interact with the application.
