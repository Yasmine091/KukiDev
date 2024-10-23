# KukiDev

**KukiDev** was designed as a training project that began in 2020, meant to sharpen web development skills after a break from coding. The project was originally conceived as a rework of **Habetic CMS**, a fully functional CMS built for a freelance client and used to run a community platform. While Habetic CMS was production-ready and included full development and community management features, KukiDev remained an experimental playground, serving as a technical practice environment rather than a serious production system.

## Project overview
KukiDev was built using:
- **PHP** (with MySQLi for database interactions)
- **Bootstrap** for responsive design
- **CSS3** for modern styling
- **HTML5** for structure and layout
- Some **JavaScript** to manage client-side functionality

The project never reached full feature completion but served its purpose as a platform to experiment with and enhance skills in web development, especially focusing on the front end and back-end integration with databases.

## Project purpose
The primary goal of KukiDev was to provide training for technical exams and admission tests for academies. While having solid foundations in web development, especially CMS-based projects and earlier programming experience with VB.
The project was meant to refresh and solidify technical skills after taking a break from web development.

KukiDev remained a junior-level project aimed at hands-on practice, and its development was eventually left behind for better-organized, more mature projects as skills were honed and expanded.

## Timeline
- **Started:** 2020
- **Status:** Left behind for other projects
- **Goal:** Practice web development to be prepared for technical assessments and academy admission tests.

This readme serves as an overview of KukiDev’s initial intent as a training ground rather than a full-fledged application, marking an important phase in continued learning and skill refinement.

## Installation guide

To set up KukiDev locally for development or testing, follow the steps below:

### 1. Place files in the server directory
Copy all project files into the appropriate directory of your web server:
- For **XAMPP** or **WAMP** on Windows: place files in the `htdocs` folder.
- For **Linux Apache servers**: place files in the `public_html` directory.

### 2. Configure the database
- Open the `core/config.php` file.
- Set the following variables to your database credentials:

```php
<?php
$dbhost = "sql.example.com";      // Database host
$dbuser = "exampleuser";          // Database username
$dbpw = "examplepassword";        // Database password
$db = "exampledatabase";          // Database name

// Connect to MySQL
$con = mysqli_connect($dbhost, $dbuser, $dbpw, $db);

if (!$con) {
    die("Error: " . mysqli_connect_error());
}

// Optional: Close connection when needed
// mysqli_close($con);
?>
```

Replace `sql.example.com`, `exampleuser`, `examplepassword`, and `exampledatabase` with your actual database details.

### 3. Import database
- Navigate to the `db/` folder and upload `database.sql` to your **phpMyAdmin** or another database management tool.
- After importing the SQL file, the database will be set up with the required tables.

### 4. Create content
- You will need to create users and news entries for them to be shown on the site.

### 5. Access the application
- After configuring the database, start your local server (Apache).
- Open a browser and go to `http://localhost/` or `http://your-server-url/` to view the KukiDev homepage.

### 6. Done!
KukiDev should now be running, and you can begin using it for practice or testing purposes.

## Notes
- This project was never intended to be a full production system, so it lacks advanced security measures and features typical of larger-scale projects.
