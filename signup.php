<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Assignment 1 - Signup Page</title>
    <style>
        label {
            width: 150px;
            padding-right: .5rem;
            text-align: right;
        }
    </style>
</head>
<body>
<header class="d-flex shadow p-3 mb-5 bg-body rounded justify-content-between">
    <a class="btn btn-outline-primary" href="./index.php">Home</a>
    <ul class="nav nav-pills me-3">
        <li class="nav-item">
            <a class="btn btn-outline-primary" href="./login.php">Login</a>
        </li>
        <li class="nav-item ms-2">
            <a class="btn btn-outline-primary" href="./signup.php">Singup</a>
        </li>
    </ul>
</header>
    <main class="mx-auto my-5" style="width: 400px;">
        <form
            class="shadow d-flex flex-column border align-items-center pt-2 pb-5" 
            action="redirect.php?page=signup" 
            method="post"
            style="background-color:#f8f8ff;"
        >
            <h5 class="text-center mb-4">Profile Signup</h5>
            <div class="input_cont mb-3">
                <label for="username">Username: </label>
                <input class="bg-light" type="text"  name="username">
            </div>
            
            <div class="input_cont mb-3">
                <label for="password">Password: </label>
                <input class="bg-light" type="password" name="password">
            </div>

            <div class="input_cont mb-3">
                <label for="verify-password">Verify Password: </label>
                <input class="bg-light" type="password" name="verify_password">
            </div> 
            
            <div class="input_cont d-flex flex-column">
                <input type="submit" value="Signup" style="width: 100px;">
            </div>          
        </form>
    </main>
</body>
</html>