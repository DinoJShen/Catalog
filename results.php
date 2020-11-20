<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Search Results</title>
</head>
<body>
    <h1>Book Search Results</h1>
    <?php
    require_once 'login.php';
    $conn = new mysqli($hn,$user,$pw,$db);
    if($conn->connect_error) die ("Fatal error");   

    if(isset($_POST['type']) && isset($_POST['searchterm'])){
        $type = $_POST['type'];
        $searchterm = $_POST['searchterm'];

        $query = "SELECT * FROM catalogs WHERE $type LIKE '%$searchterm%'" ;
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            echo "<table border=1>
                    <tr>
                        <th>ISBN</th>
                        <th>Author</th>
                        <th>Title</th>
                        <th>Price</th>
                    </tr>";

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["isbn"]. "</td>
                        <td>" . $row["author"]. "</td>
                        <td>" . $row["title"]. "</td>
                        <td>" . $row["price"]. "</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    }

    $conn->close();
    // TODO 1: Create short variable names.


    // TODO 2: Check and filter data coming from the user.


    // TODO 3: Setup a connection to the appropriate database.


    // TODO 4: Query the database.


    // TODO 5: Retrieve the results.


    // TODO 6: Display the results back to user.


    // TODO 7: Disconnecting from the database.


    ?>
</body>
</html>