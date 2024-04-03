<!doctype html>
<html>

<head>
    <title>Ed's Electronics - User Login</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stockfont.org/?c880cd6e6a65992fa4a6b26fc3a067e8326335ca868795da5b7ebf359116cbd8" />
    <!-- Add additional styles or scripts for the user login page if needed -->
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
        <h1>Ed's Electronics - User Login</h1>

        <!-- Navigation for the user login page -->
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
        <h1>Welcome to Ed's Electronics</h1>

        <section>
            <!-- User login content goes here -->
            <h2>Login Page</h2>
            <!-- Add forms, tables, or other elements for login page -->

            <!-- Sample form with centered fields -->
            
            <form action="" method="post">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" />

                <label for="password">Password</label>
                <input type="password" id="password" name="password" />

                <input type="submit" name="submit" value="Submit" />
            </form>
        </section>

        <!-- Additional sections for other functionalities -->

    </main>

    <aside>
        <!-- Additional user login sidebar content goes here -->
        <h2>Quick Links</h2>
        <ul>
            <li><a href="#">View Products</a></li>
            <li><a href="#">Contact Support</a></li>
            <!-- Add more quick links based on your user features -->
        </ul>
    </aside>

    <footer>
        &copy; Ed's Electronics 2023
    </footer>
</body>

</html>
