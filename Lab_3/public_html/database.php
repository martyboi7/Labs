<?php

// Login for the COMP Lab exercises

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
        
        $newEmail = test_input(getEmail());
        if (!filter_var($newEmail, FILTER_VALIDATE_EMAIL)) {
        $errMsg = "Invalid email format";
        }
        else {
            echo 'Connection Success';
        }
?>