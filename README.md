# GCS LP Project

A simple group project from school for "Guidance Counseling System"

Includes following below:
- Landing Page
- Log-in Page
- Dashboard Page with according logged in roles and basic sessions
- .sql file with log-in credentials

## Installation Guide

Follow these steps to install and run the GCS LP project on your local machine.

### Prerequisites

- XAMPP (Apache and MySQL)
- Web browser

### Step 1: Download the project

1. Clone the project repository or download the ZIP file.
2. Extract the project files to the desired location. which in case inside xampp/htdocs folder
3. paste the folder inside htdocs folder

### Step 2: Import the SQL database

1. Launch XAMPP and start Apache and MySQL services.
2. Open a web browser and go to `http://localhost/phpmyadmin`.
3. Create a new database for the project (named "gcs").
4. Select the newly created database.
5. Click on the "Import" tab in the navigation menu.
6. Click on the "Choose File" button and select the `gcs-lp.sql` file from the `backups` folder of the project.
7. Click the "Go" button to import the SQL file into the database.

## ~~Step 3: Configure the project~~ Or you can skip this step

~~1. Open the project folder and navigate to the `sbadmin2/includes` directory.~~
~~2. Open the `conn.php` file in a text editor.~~
~~3. Modify the database configuration settings according to your environment (e.g., database name, username, password).~~

### Step 4: Start the application

1. Move the project folder to the appropriate location in your web server's document root (e.g., `htdocs` folder in XAMPP).
2. Open a web browser and go to `http://localhost/gcs-lp/index.php`.
3. You should now be able to see the application running.
4. ~~when in log-in page, traverse the backups folder, there should be a .txt file with sample log-in credentials there.~~

## Troubleshooting

- If you encounter any issues, make sure XAMPP services (Apache and MySQL) are running properly.
- Check the database configuration settings in the `sbadmin2/includes/conn.php` file.
- Ensure the project folder is placed in the correct location within the web server's document root.

## License (Gathered templates used in this project)
landing page link:
https://templatemo.com/tm-509-hydro

admin dashboard link:
https://startbootstrap.com/theme/sb-admin-2

change user interface (front-end) of that cloned one to the links provided above
