<!DOCTYPE html>
<html>

<head>
    <title>Ed's Electronics - Admin Panel</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stockfont.org/?c880cd6e6a65992fa4a6b26fc3a067e8326335ca868795da5b7ebf359116cbd8" />
    <!-- Add additional styles or scripts for the admin page if needed -->
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

        p {
            margin-top: 0.5em;
            margin-bottom: 0.5em;
        }

        h2 {
            margin-top: 0.5em;
            margin-bottom: 0.5em;
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

        .products,
        .reviews {
            list-style-type: none;
        }

        .products li,
        .reviews li {
            padding: 2em;
        }

        .products li:nth-child(odd),
        .reviews li:nth-child(odd) {
            background-color: #fff;
        }

        .products li:nth-child(even),
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

        .reviews .details {
            text-align: right;
        }

        h4 {
            margin-top: 1em;
            margin-bottom: 1em;
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

<body>
    <header>
        <h1>Ed's Electronics - Admin Panel</h1>

        <!-- Navigation for the admin panel -->
        <ul>
            <li>Home
                <ul>
                    <li><a href="admin page final.php">Admin login</a></li>
                    <li><a href="user login.php">User login </a></li>
                    <li><a href="Sign Up.php">sign up</a></li>
                </ul>
            </li>
            <li>Products
                <ul>
                    <li><a href="home final page tv.php">TVs</a></li>
                    <li><a href="home final page computer .php">Computers</a></li>
                    <li><a href="home final page phone.php">Phones</a></li>
                    <li><a href="home final page Gameing.php">Gaming</a></li>
                </ul>
            </li>
        </ul>
    </header>

    <main>
        <h1>Welcome to Ed's Electronics Admin Panel</h1>

        <section>
            <!-- Admin panel content goes here -->
            <h2>Login Page</h2>
            <!-- Add forms, tables, or other elements for the login page -->

            <!-- Sample form with centered fields -->
            <form action="login.php" method="post">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required />

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required />

                <input type="submit" name="submit" value="Submit" />
            </form>

            <!-- Display error message if authentication failed -->
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($error_message)) {
                    echo "<p style='color: red;'>$error_message</p>";
                }
            }
            ?>
        </section>

        <?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both username and password are provided
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Hardcoded check for username and password (for testing purposes)
        if ($username === "1234" && $password === "1234") {
            // Authentication successful, redirect to the desired page
            header("Location: /websites/default/public/admin_home_page.html");
            exit();
        } else {
            // Authentication failed, display an error message
            $error_message = "Invalid username or password.";
        }
    } else {
        // If either username or password is not provided, display an error message
        $error_message = "Please enter both username and password.";
    }
}
?>

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

    <footer>
        &copy; Ed's Electronics 2023 - Admin Panel
    </footer>
</body>

</html>
