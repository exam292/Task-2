<!-- Database Connection Config -->

<?php //Config script for the connection between the website and the MySQL database
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'website');

    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    // Attempt to connect to MySQL database
    
    if($link === false){ // Check connection
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>

<!-- Database Connection Config -->