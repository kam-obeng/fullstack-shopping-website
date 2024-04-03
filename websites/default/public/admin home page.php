<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
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
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }

        .options-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            text-align: center;
        }

        ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        li {
            margin-bottom: 10px;
        }

        li a {
            text-decoration: none;
            color: #333;
            padding: 10px 20px;
            background-color: #f0f0f0;
            border-radius: 5px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        li a:hover {
            background-color: #ddd;
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
        <h1>Welcome Admin!</h1>
    </header>
    <main>
        <div class="options-box">
            <h2>Admin Options</h2>
            <ul>
                <li><a href="/Users/kamron/Downloads/second year web dev/websites/default/public/delete Product.php">Delete Product</a></li>
                <li><a href="/Users/kamron/Downloads/second year web dev/websites/default/public/Product Management.php">Product Management</a></li>
                <li><a href="/Users/kamron/Downloads/second year web dev/websites/default/public/Add New Product.php">Add New Product</a></li>
                <li><a href="/Users/kamron/Downloads/second year web dev/websites/default/public/view.php">look enquiry</a></li>
            </ul>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Admin Panel</p>
    </footer>
</body>
</html>
