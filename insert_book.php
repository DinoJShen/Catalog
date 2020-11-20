<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Entry Results</title>
</head>
<body>
    <h1>Book Entry Results</h1>
    <?php
    require_once 'login.php';
    $conn = new mysqli($hn,$user,$pw,$db);
    if($conn->connect_error) die ("Fatal error");   

    if(isset($_POST['isbn']) && isset($_POST['author']) && isset($_POST['title']) && isset($_POST['price'])){
        $author = $_POST['author'];
        $title = $_POST['title'];
        $price = $_POST['price'];
        $isbn = $_POST['isbn'];

        $query = "INSERT INTO catalogs (isbn, author, title, price) VALUES ('$isbn', '$author', '$title', '$price')" ;
        
        if ($conn->query($query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    }

    $conn->close();
    // TODO 1: Create short variable names.
    

    // TODO 2: Check and filter data coming from the user.


    // TODO 3: Setup a connection to the appropriate database.


    // TODO 4: Query the database.


    // TODO 5: Display the feedback back to user.


    // TODO 6: Disconnecting from the database.


    ?>
</body>
</html>