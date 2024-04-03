<!DOCTYPE html>
<html>

<head>
    <title>Admin Page - Ed's Electronics</title>
    <meta charset="utf-8" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        main {
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        ul.products {
            list-style-type: none;
            padding: 0;
        }

        ul.products li {
            background-color: #fff;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <h1>Admin Panel - Ed's Electronics</h1>
    </header>

    <main>
        <h2>Product Management</h2>

        <!-- Display existing products -->
        <h3>Existing Products</h3>
        <ul class="products">
            <?php
            $servername = "v.je";
            $username = "student";
            $password = "student";
            $dbname = "csy2028";
            
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            // Function to get products
            function getProducts($conn) {
                $sql = "SELECT * FROM products";
                $result = $conn->query($sql);
            
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "Product Name: " . $row["product_name"]. "<br>";
                        echo "Description: " . $row["description"]. "<br>";
                        echo "Price: $" . $row["price"]. "<br>";
                        echo "<br>";
                    }
                } else {
                    echo "0 results";
                }
            }
            
            // Function to edit product
            function editProduct($conn, $id, $product_name, $description, $price) {
                $sql = "UPDATE products SET product_name='$product_name', description='$description', price='$price' WHERE id=$id";
            
                if ($conn->query($sql) === TRUE) {
                    echo "Product updated successfully";
                } else {
                    echo "Error updating product: " . $conn->error;
                }
            }
            
            // Get action from form submission
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["action"] == "edit") {
                    $id = $_POST["id"];
                    $product_name = $_POST["product_name"];
                    $description = $_POST["description"];
                    $price = $_POST["price"];
                    
                    editProduct($conn, $id, $product_name, $description, $price);
                }
            }
            
            // Close connection
            $conn->close();
            ?>
                        <li>Product 1</li>
            <li>Product 2</li>
            <li>Product 3</li>
        </ul>
    </main>

    <footer>
        <p>&copy; Ed's Electronics 2023</p>
    </footer>
</body>

</html>
