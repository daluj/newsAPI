# Testing the API
How to test the API

## Installation via Laravel/Homestead
If the installation was done using homestead, you will have to do the following (make sure you are on the project folder):
- Connect to the virtual machine using the command: vagrant ssh
- Go to project folder in the virtual machine: cd path/to/project
- Migrate database tables running: php artisan migrate
- Seed the database running: php artisan db:seed 
