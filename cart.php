<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gpushop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="jumbotron text-center">
    <h1>Computer Express Shop</h1>
    <p>Affordable Computer GPU Parts</p>
    <div class="search">
        <a href="home.php" class="cart-page"> 
            <button class="cart-page">
                <img src="image/vector.svg" alt="cart" class="cart-page-img">
            </button>
        </a>
    </div>
</div>

</div>
</div>
<div class="container1">
	<form method="POST">
		<input type="text" name="search" id="search">
		<input class="btn btn-primary" type="submit" value="search">
	</form>

<div style="text-align: center; justify-content:center; align-items: center" class="money">
    <h2>Your Shopping Cart</h2>
    <table border="1" style="margin: auto;">

        <?php
        if (isset($_POST['search'])) {
            $search = $_POST['search'];

            // Perform database query
            $sql = "SELECT * FROM gpu_tb WHERE productName LIKE '%$search%' or productPic LIKE '%$search%'";
            $result = $conn->query($sql);

            // Display the search results
            if ($result->num_rows > 0) {

                echo "<table class='table' border='2px' style='background-color: #E9C46A; font-size: 20px;'>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Name</th>";
                echo "<th>Image</th>";
                echo "<th>Price</th>";
                echo "</tr>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["productName"] . "</td>";
                    echo "<td class='img' style='text-align: center;'><img src='" . $row['productPic'] . "' alt='Product Image' style='width: 131px; height: 131px; vertical-align: middle;'></td>";
                    echo "<td>" . $row["price"] . "</td>";
                    echo "</tr>";
                }

                echo "</table>";

            } else {
                echo "No Results Found";
            }
        }
        ?>

    </table>
</div>

<?php
// Close the database connection
$conn->close();
?>

</body>

</html>

