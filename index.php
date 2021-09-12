<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Assignment 1 - Landing Page</title>
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
<main class="py-5 d-flex flex-column align-items-center">
    <h1 class="mt-5">Welcome to Assignment 1</h1>
    <p class="lead border-bottom border-dark pb-3">Please 
        <a style="text-decoration: none;" href="./login.php">login</a> or 
        <a style="text-decoration: none;" href="./signup.php">signup!</a>
    </p>
</main>
</body>
</html>