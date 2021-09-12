<?php 

$username = $_POST["username"];

$password = $_POST["password"];

$request = $_SERVER["REQUEST_METHOD"];


if ($request == "POST") {
    // Signup page route
    if ($_GET["page"] === "signup") {
        echo "sign up logic<br/>";
        $verify_password = $_POST["verify_password"];
        // if $username & $password return true and $password matches $verify_password proceed
        if (validate($username, $password) && $password == $verify_password) {
            echo "username and password passed check<br/>";
            echo "passwords match<br/>";
            // creates a variable for file.txt and opens it, a+.. places the file pointer at the end of the file, 
            // creates the file if it doesn't exsist, write are appended 
            $fp = fopen('file.txt', 'a+');
            // calculates the md5 hash of $password
            $hash = md5($password);
            // writes the username "," and the calculated hash to file.txt, 
            // PHP_EOL is the new line character for the OS of server
            fwrite($fp, $username . '|' . $hash . PHP_EOL);
            // closes the file
            fclose($fp);
            header("Location: thankyou.php?id=$username");
        } else {
            header("Location: signup.php");
        }
    // Login page route
    } elseif ($_GET["page"] === "login") {
        echo "login logic<br/>";
        if (validate($username, $password)) {
            echo "username and password passed the check<br/>";
            // readers the file into an array & saves as a variable
            $lines = file('file.txt');
            // calculates the md5 hash of $password
            $hash = md5($password);
            // loops through the file array line by line
            foreach($lines as $line) {
                // splits the line into an array of 2
                $pieces = preg_split('/|/', $line);
                // checks the username & password from the file with the POST data
                if($username == $pieces[0] && $hash == trim($pieces[1])) {                    
                    header("Location: thankyou.php?id=$username");   
                } else { 
                    header("Location: login.php");
                }
            }
        } else {
            header("Location: login.php");
        }
    }

} elseif ($request == "GET") {
    header("Location: index.php");
}

// Function checks username & password constraints
function validate($username, $password) {
    if (preg_match('/^([a-z]|[0-9]){8,15}$/i', $username)) {
        echo "username is good<br/>";
        if (preg_match('/^(?=.*[a-z])(?=.*[|?@!])(?=.*[0-9])(?=.*[A-Z]).{8,}$/', $password)) {
            echo "password is good<br/>";
            return true;
        }
    } 
    
}

