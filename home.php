<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gpushop"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function insertData($conn, $name, $picture, $price) {
    $query = "INSERT INTO gpu_tb (productName, productPic, price) VALUES ('$name', '$picture', '$price')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Product Added to Cart Successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}

if (isset($_POST['tuf3060'])) {
    insertData($conn, $_POST['name'], $_POST['picture'], $_POST['price']);
}

if (isset($_POST['giga3060'])) {
    insertData($conn, $_POST['name'], $_POST['picture'], $_POST['price']);
}

if (isset($_POST['gforce3060'])) {
    insertData($conn, $_POST['name'], $_POST['picture'], $_POST['price']);
}

if (isset($_POST['msi4070'])) {
    insertData($conn, $_POST['name'], $_POST['picture'], $_POST['price']);
}

if (isset($_POST['asus4080'])) {
    insertData($conn, $_POST['name'], $_POST['picture'], $_POST['price']);
}

if (isset($_POST['tuf4080'])) {
    insertData($conn, $_POST['name'], $_POST['picture'], $_POST['price']);
}

$conn->close();
?>

<!-- Your HTML code remains unchanged -->




<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="jumbotron text-center">
    <h1>Computer Express Shop</h1>
    <p>Affordable Computer GPU Parts</p>
    <div class="search">
        <a href="cart.php" class="cart-page"> 
            <button class="cart-page">
                <img src="image/vector.svg" alt="cart" class="cart-page-img">
            </button>
        </a>
    </div>
</div>

    <div class="container1">
        <div class="title">
            <h1>Graphics Card</h1>
        </div>

        <!-- Row 1 with space between rows -->
        <div class="row mb-4">
            <div class="col-lg-4">
                <div class="card">
                    <div class="name">TUF-RTX3060-O12G-V2-GAMING</div>
                    <img class="picture" src="https://dlcdnwebimgs.asus.com/gain/233558c6-999a-4458-98d8-34eac09cb836/">
                    <div class="price">₱20,000</div>
                    <div class="add">
                        <form action="home.php" method="POST">
                            <input type="hidden" name="picture" value="https://dlcdnwebimgs.asus.com/gain/233558c6-999a-4458-98d8-34eac09cb836/">
                            <input type="hidden" name="price" value="20000">
                            <input type="hidden" name="name" value="TUF-RTX3060-O12G-V2-GAMING">
                            <button class="add-cart" name="tuf3060" type="submit">
                                <img class="vector-icon" alt="" src="image/vector.svg" />
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="name">Gigabyte GeForce RTX 3060 12GB</div>
                    <img class="picture" src="https://ecommerce.datablitz.com.ph/cdn/shop/products/8_d727a927-f7cc-423e-b854-d8abbae33966_800x.png?v=1676877409">
                    <div class="price">₱18,000</div>
                    <div class="add">
                        <form action="home.php" method="POST">
                            <input type="hidden" name="picture" value="https://ecommerce.datablitz.com.ph/cdn/shop/products/8_d727a927-f7cc-423e-b854-d8abbae33966_800x.png?v=1676877409">
                            <input type="hidden" name="price" value="18000">
                            <input type="hidden" name="name" value="Gigabyte GeForce RTX 3060 12GB">
                            <button class="add-cart" name="giga3060" type="submit">
                                <img class="vector-icon" alt="" src="image/vector.svg" />
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="name">GeForce RTX™ 3060 Ti GAMING OC  </div>
                    <img class="picture" src="https://ph-test-11.slatic.net/p/cb61424ec3e085a9690758b3371fa165.jpg">
                    <div class="price">₱25,000</div>
                    <div class="add">
                        <form action="home.php" method="POST">
                            <input type="hidden" name="picture" value="https://ph-test-11.slatic.net/p/cb61424ec3e085a9690758b3371fa165.jpg">
                            <input type="hidden" name="price" value="25000">
                            <input type="hidden" name="name" value="GeForce RTX™ 3060 Ti GAMING OC PRO 8G">
                            <button class="add-cart" name="gforce3060" type="submit">
                                <img class="vector-icon" alt="" src="image/vector.svg" />
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 2 with space between rows -->
        <div class="row mb-4">
            <div class="col-lg-4">
                <div class="card">
                    <div class="name">MSI RTX 4070 Gaming 12 GB </div>
                    <img class="picture" src="https://dynaquestpc.com/cdn/shop/files/MSIRTX4070GamingXTrio12GBGraphicsCard_grande.jpg?v=1686905782">
                    <div class="price">₱30,000</div>
                    <div class="add">
                        <form action="home.php" method="POST">
                            <input type="hidden" name="picture" value="https://dynaquestpc.com/cdn/shop/files/MSIRTX4070GamingXTrio12GBGraphicsCard_grande.jpg?v=1686905782">
                            <input type="hidden" name="price" value="6000">
                            <input type="hidden" name="name" value="MSI RTX 4070 Gaming 12 GB">
                            <button class="add-cart" name="msi4070" type="submit">
                                <img class="vector-icon" alt="" src="image/vector.svg" />
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="name">Asus TUF Gaming GeForce RTX 4080</div>
                    <img class="picture" src="https://gameone.ph/media/catalog/product/cache/7a2235b416a1900151232a782f707140/a/s/asus-tuf-rtx4080-o16gb-oc-ed-gaming-graphics-card-10.jpg">
                    <div class="price">₱60,000</div>
                    <div class="add">
                        <form action="home.php" method="POST">
                            <input type="hidden" name="picture" value="https://gameone.ph/media/catalog/product/cache/7a2235b416a1900151232a782f707140/a/s/asus-tuf-rtx4080-o16gb-oc-ed-gaming-graphics-card-10.jpg">
                            <input type="hidden" name="price" value="60000">
                            <input type="hidden" name="name" value="Asus TUF Gaming GeForce RTX 4080 ">
                            <button class="add-cart" name="asus4080" type="submit">
                                <img class="vector-icon" alt="" src="image/vector.svg" />
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="name">ASUS TUF Gaming GeForce RTX 4070 </div>
                    <img class="picture" src="https://dlcdnwebimgs.asus.com/gain/a99a06b2-dc28-4238-b818-37432850967a/w800">
                    <div class="price">₱80,000</div>
                    <div class="add">
                        <form action="home.php" method="POST">
                            <input type="hidden" name="picture" value="https://dlcdnwebimgs.asus.com/gain/a99a06b2-dc28-4238-b818-37432850967a/w800">
                            <input type="hidden" name="price" value="90000">
                            <input type="hidden" name="name" value="ASUS TUF Gaming GeForce RTX ™ 4070 ">
                            <button class="add-cart" name="tuf4080" type="submit">
                                <img class="vector-icon" alt="" src="image/vector.svg" />
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
