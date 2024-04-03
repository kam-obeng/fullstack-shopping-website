<!DOCTYPE html>
<html>

<head>
    <title>Ed's Electronics</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="home final page.css" />
</head>

<body>
    <header>
        <h1>Ed's Electronics</h1>

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

        <address>
            <p>We are open 9-5, 7 days a week. Call us on
                <strong>01604 11111</strong>
            </p>
        </address>
    </header>

    <section></section>

    <main>
        <h1>Welcome to Ed's Electronics Tv page </h1>

        <p>We stock a large variety of electrical goods including phones, tvs, computers and games. Everything comes with at least a one year guarantee and free next day delivery.</p>

        <hr />

        <h2>Sample form</h2>
        <form action="" method="post">
            <label>Name</label> <input type="text" name="1" />
            <label>subject</label> <input type="text" name="2" />
            <label>email address</address></label> <input type="text" name="2" />
            <label>enquiry</label> <textarea></textarea>

            <input type="submit" name="submit" value="submit" />
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Process form data
            $name = $_POST["name"];
            $subject = $_POST["subject"];
            $email = $_POST["email"];
            $enquiry = $_POST["enquiry"];

            // Database connection settings
            $host = 'v.je';
            $dbname = 'csy2028';
            $username = 'student';
            $password = 'student';

            try {
                // Connect to the database
                $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

                // Set PDO to throw exceptions on errors
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // SQL query to insert form submission into the database
                $sql = "INSERT INTO form_submissions (name, subject, email, enquiry) VALUES (:name, :subject, :email, :enquiry)";

                // Prepare the SQL statement
                $stmt = $pdo->prepare($sql);

                // Bind parameters
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':subject', $subject);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':enquiry', $enquiry);

                // Execute the SQL statement
                $stmt->execute();

                echo "Form submitted successfully!";
            } catch (PDOException $e) {
                // Handle database errors
                echo "Error submitting form: " . $e->getMessage();
            }
        }
        ?>
        <hr />

        <h2>Product list</h2>

        <ul class="products">

            <li>
                <h3>Product 1</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac aliquet mi, et ornare ipsum. Curabitur id lorem sed ex efficitur egestas. Integer finibus hendrerit risus sagittis porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis egestas placerat massa ac porta. Proin a leo purus. Nam dolor dui, iaculis in laoreet id, venenatis sed est. Sed et facilisis metus. </p>

                <p>Fusce varius eros ligula, et sagittis mauris gravida sed. Maecenas tristique maximus ornare. Duis nec lectus tempus leo ullamcorper bibendum. Nam tempus augue sapien, vel mattis ex porttitor cursus. Suspendisse potenti. Suspendisse quis orci ex. Curabitur non orci orci. </p>


                <div class="price">£123.45</div>
            </li>

            <li>
                <h3>Product 2</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac aliquet mi, et ornare ipsum. Curabitur id lorem sed ex efficitur egestas. Integer finibus hendrerit risus sagittis porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis egestas placerat massa ac porta. Proin a leo purus. Nam dolor dui, iaculis in laoreet id, venenatis sed est. Sed et facilisis metus. </p>

                <p>Fusce varius eros ligula, et sagittis mauris gravida sed. Maecenas tristique maximus ornare. Duis nec lectus tempus leo ullamcorper bibendum. Nam tempus augue sapien, vel mattis ex porttitor cursus. Suspendisse potenti. Suspendisse quis orci ex. Curabitur non orci orci. </p>


                <div class="price">£123.45</div>
            </li>
            <li>
                <h3>Product 3</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac aliquet mi, et ornare ipsum. Curabitur id lorem sed ex efficitur egestas. Integer finibus hendrerit risus sagittis porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis egestas placerat massa ac porta. Proin a leo purus. Nam dolor dui, iaculis in laoreet id, venenatis sed est. Sed et facilisis metus. </p>

                <p>Fusce varius eros ligula, et sagittis mauris gravida sed. Maecenas tristique maximus ornare. Duis nec lectus tempus leo ullamcorper bibendum. Nam tempus augue sapien, vel mattis ex porttitor cursus. Suspendisse potenti. Suspendisse quis orci ex. Curabitur non orci orci. </p>


                <div class="price">£123.45</div>
            </li>
        </ul>

        <hr />

        <h2>Product Page</h2>

        <h3>Product name</h3>

        <h4>Product details</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac aliquet mi, et ornare ipsum. Curabitur id lorem sed ex efficitur egestas. Integer finibus hendrerit risus sagittis porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis egestas placerat massa ac porta. Proin a leo purus. Nam dolor dui, iaculis in laoreet id, venenatis sed est. Sed et facilisis metus. </p>

        <p>Fusce varius eros ligula, et sagittis mauris gravida sed. Maecenas tristique maximus ornare. Duis nec lectus tempus leo ullamcorper bibendum. Nam tempus augue sapien, vel mattis ex porttitor cursus. Suspendisse potenti. Suspendisse quis orci ex. Curabitur non orci orci. </p>

        <h4>Product reviews</h4>
        <ul class="reviews">
            <li>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac aliquet mi, et ornare ipsum. Curabitur id lorem sed ex efficitur egestas. Integer finibus hendrerit risus sagittis porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis egestas placerat massa ac porta. Proin a leo purus. Nam dolor dui, iaculis in laoreet id, venenatis sed est. Sed et facilisis metus. </p>

                <p>Fusce varius eros ligula, et sagittis mauris gravida sed. Maecenas tristique maximus ornare. Duis nec lectus tempus leo ullamcorper bibendum. Nam tempus augue sapien, vel mattis ex porttitor cursus. Suspendisse potenti. Suspendisse quis orci ex. Curabitur non orci orci. </p>


                <div class="details">
                    <strong>Reviewer Name</strong>
                    <em>10th December 2018</em>
                </div>
            </li>
            <li>
                <p>Fusce varius eros ligula, et sagittis mauris gravida sed. Maecenas tristique maximus ornare. Duis nec lectus tempus leo ullamcorper bibendum. Nam tempus augue sapien, vel mattis ex porttitor cursus. Suspendisse potenti. Suspendisse quis orci ex. Curabitur non orci orci. </p>


                <div class="details">
                    <strong>Reviewer Name</strong>
                    <em>22nd May 2018</em>
                </div>
            </li>

            <li>
                <p>Fusce varius eros ligula, et sagittis mauris gravida sed. Maecenas tristique maximus ornare. Duis nec lectus tempus leo ullamcorper bibendum. Nam tempus augue sapien, vel mattis ex porttitor cursus. Suspendisse potenti. Suspendisse quis orci ex. Curabitur non orci orci. </p>


                <div class="details">
                    <strong>Reviewer Name</strong>
                    <em>6th November 2018</em>
                </div>
            </li>
        </ul>
    </main>

    <aside>

        <h1><a href="#">Featured Product</a></h1>
        <p><strong>Gaming PC</strong></p>
        <p>Brand new 8 core computer with an RTX 4080 </p>

    </aside>

    <footer>
        &copy; Ed's Electronics 2023
    </footer>
</body>

</html>
