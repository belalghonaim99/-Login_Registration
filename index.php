<?php
session_start();
    if(!isset($_SESSION["user"]))
    {
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome To Your Dashboard</h1>
        <p>Here You Can Add Books </p>
        <a href="logout.php" class="btn btn-warning">logout</a>
    </div>
        <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Add New Book</h1>
            <div>
                <!-- will back to add link -->
                <a href="" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="" method="post">
            <div class="form-element my-4">
                <input type="text" class="form-control" name="title" placeholder="Book Title:">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="author" placeholder="Author Name:">
            </div>

            <div class="form-element my-4">
                <select name="type" class="form-control">
                    <option value="">Select Book Type</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Horror">Horror</option>
                    <option value="Scifi">Scifi</option>
                </select>
            </div>

            <div class="form-element my-4">
                <input type="text" class="form-control" name="description" placeholder="Book Description:">
            </div>

            <div class="form-element">
                <input type="submit" class="btn btn-primary" name="create" value="Add Book">
            </div>

</body>
</html>
