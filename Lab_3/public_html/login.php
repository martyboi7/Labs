<?php

// Login for the COMP Lab exercises
// Using  MARIA.MILLER@sakilacustomer.org to test PHP code
// Testing the Github Repository

// PHP Validation
       
        function getEmail() {
            $emailz = $_POST["email"];
            return $emailz;
        }
        
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        function sakila_connect($email){
        $dbhost = 'localhost';
        $dbuser = 'marty';
        $dbpass = 'McFly';
        $dbname = 'sakila';

        // 1. Creating a database connection
        $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
        or die("Connection failed") ;
        echo 'Connection successful for login: <br>';
            

        // 2. Perform database query
        $query = "SELECT first_name, last_name FROM customer WHERE
        email='".$email."';";
        echo $query;
        echo '<br> <br>';
        $result_set = mysqli_query($connection, $query); 
        
        // 3. Use returned data
        // return $result_set;
        $name = mysqli_fetch_assoc($result_set);
        echo 'Welcome back: ';
        echo $name['first_name'];
        echo ' ';
        echo $name['last_name'];
        // 4. Release returned data
        mysqli_free_result($result_set);
        
        // 5. Close database connection

        mysqli_close($connection);
        }
        
        
        
        
        $newEmail = test_input(getEmail());
        if (!filter_var($newEmail, FILTER_VALIDATE_EMAIL)) {
        $errMsg = "Invalid email format";
        }
        else {
        
            sakila_connect($newEmail);  
            
            
        }
?>

