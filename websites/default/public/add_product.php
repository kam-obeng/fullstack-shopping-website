<!DOCTYPE html>
<html>


<head>
    <title>Ed's Electronics - Add Product</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stockfont.org/?c880cd6e6a65992fa4a6b26fc3a067e8326335ca868795da5b7ebf359116cbd8" />
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #DEDEDE;
            font-family: 'Oxygen-Regular';
            display: grid;
            grid-template-columns: 10% 70% 20%;
            grid-template-rows: auto;
            grid-template-areas:
                "header header header"
                "img img aside"
                ". main aside"
                "footer footer footer";
            min-height: 100vh;
        }

        h1 {
            font-family: 'Audiowide', cursive;
            margin: 0.4em;
        }

        aside h1 a {
            color: white;
        }

        header h1:before {
            content: "\1F5B3";
            font-family: 'hack';
            padding-right: 0.4em;
        }

        header h1 {
            color: #92B2BF;
            text-shadow: 2px 2px 2px darkgreen;
        }

        body>section {
            grid-area: img;
            height: 20vh;
            background-position: center center;
            background-image: url(images/randombanner.php);
            max-height: 300px;
            background-position: center center;
        }

        header a {
            color: white;
            text-decoration: none;
        }

        header address {
            float: right;
            color: white;
            font-style: normal;
            padding: 1em;
        }

        main {
            min-height: 20vh;
            grid-area: main;
            padding: 5vw;
            background-color: #E8E8E8;
        }

        header {
            background-color: #1C2524;
            grid-area: header;
            display: grid;
            grid-template-columns: 10% 80% 10%;
        }

        header ul {
            align-self: center;
            display: grid;
            grid-template-columns: auto auto auto;
            grid-template-rows: auto;
            color: white;
            list-style-type: none;
        }

        header>ul>li {
            font-size: 2em;
            cursor: pointer;
            text-align: center;
        }

        header ul li ul {
            margin-left: 10vw;
            text-align: left;
            display: none;
            position: absolute;
            background-color: #333;
            padding: 20px;
        }

        header ul li ul li {
            padding: 1vw;
        }

        header ul li:hover ul {
            display: block;
        }

        h1 {
            font-weight: bold;
            margin-bottom: 1em;
        }

        form {
            overflow: auto;
            text-align: center;
        }

        form label,
        form input,
        form textarea {
            margin-top: 1em;
            margin-bottom: 1em;
            box-sizing: border-box;
            display: block;
            width: 80%;
            margin: 0 auto;
        }

        form textarea {
            height: 400px;
        }

        form input[type="submit"] {
            width: 50%;
            margin: 0 auto;
        }

        .products {
            list-style-type: none;
        }

        .products li {
            padding: 2em;
        }

        .products li:nth-child(odd) {
            background-color: #fff;
        }

        .products li:nth-child(even) {
            background-color: #ddd;
        }

        .price {
            text-align: right;
            color: darkgreen;
            font-family: 'Audiowide';
            font-weight: bold;
            font-size: 2em;
        }

        footer {
            color: white;
            padding: 1em;
            background-color: black;
            font-size: 0.7em;
            grid-area: footer;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<?php
require 'connection.php';
?>
<body>
    <header>
        <h1>Ed's Electronics</h1>
        <!-- Navigation Menu -->
        <ul>
            <!-- Home Menu -->
            <li>Home
                <ul>
                    <li><a href="admin page final.php">Admin login</a></li>
                    <li><a href="user login.php">User login</a></li>
                    <li><a href="Sign Up.php">Sign up</a></li>
                </ul>
            </li>
            <!-- Products Menu -->
            <li>Products
                <ul>
                    <li><a href="home final page tv.php">TVs</a></li>
                    <li><a href="home final page computer .php">Computers</a></li>
                    <li><a href="home final page phone.php">Phones</a></li>
                    <li><a href="home final page Gameing.php">Gaming</a></li>
                </ul>
            </li>
        </ul>

        <address>
            <p>We are open 9-5, 7 days a week. Call us on
                <strong>01604 11111</strong>
            </p>
        </address>
    </header>

    <main>
        <h1>Add Product</h1>

        <form id="addProductForm" action="path/to/process_add_product.php" method="post">
    
        <form action="process_add_product.php" method="post">
            <label>Product Name</label> <input type="text" name="product_name" required />
            <label>Description</label> <textarea name="description" required></textarea>
            <label>Price (£)</label> <input type="number" name="price" step="0.01" required />
            <label>category </label>
            <select name="category ">
                <option value="computer">Computer</option>
                <option value="tv">TV</option>
                <option value="phone">Phone</option>
                <option value="gaming">Gaming</option>
            </select>
            <input type="submit" name="submit" value="Add Product" />
        </form>

        <hr />

        <h2>Product list</h2>

        <!-- Existing Product List -->
        <ul class="products">
            <!-- Product 1 -->
            <li>
                <h3>Product 1</h3>
                <!-- Product Details -->
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="price">£123.45</div>
            </li>
            <!-- Product 2 -->
            <li>
                <h3>Product 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="price">£123.45</div>
            </li>
            <!-- Product 3 -->
            <li>
                <h3>Product 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="price">£123.45</div>
            </li>
        </ul>

        <hr />
        <form id="userRegistrationForm" action="path/to/process_user_registration.php" method="post">
    <h2>new admin Registration</h2>

    <label>Username</label> <input type="text" name="username" required />
    <label>Password</label> <input type="password" name="password" required />
    <label>Confirm Password</label> <input type="password" name="confirm_password" required />

    <input type="submit" name="submit" value="Register" />
</form>
        <!-- Additional content... -->

    </main>

    <aside>
        <!-- Additional admin panel sidebar content goes here -->
        <h2>Quick Links</h2>
        <ul>
            <li><a href="#">Add New Product</a></li>
            <li><a href="#">Manage Categories</a></li>
            <!-- Add more quick links based on your admin features -->
        </ul>
    </aside>
    <script>
    document.getElementById('addProductForm').addEventListener('submit', function (e) {
        e.preventDefault();
        var selectedPage = document.getElementById('pageSelect').value;
        if (selectedPage) {
            this.action = 'home_final_page_' + selectedPage + '.php';
            this.submit();
        }
    });
</script>
    <footer>
        &copy; Ed's Electronics 2023
    </footer>
</body>

</html>
