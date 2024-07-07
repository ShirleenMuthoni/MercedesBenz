<?php include_once ("templates/heading.php"); ?>
<?php include_once ("templates/nav.php"); ?>
<body>

    <h1>Sign up to join the Mercedes-Benz family!&#127881;</h1>
    <img src="images/logo.jpg" alt="Mercedes-Benz logo" width="30%" />

    <h2>Select language:</h2>
    <input type="checkbox" id="Swahili" name="language[]" value="Swahili"><label for="Swahili">Swahili</label><br><br>
    <input type="checkbox" id="English" name="language[]" value="English"><label for="English">English</label><br><br>
    <input type="checkbox" id="Japanese" name="language[]" value="Japanese"><label for="Japanese">Japanese</label><br><br>
    <input type="checkbox" id="Spanish" name="language[]" value="Spanish"><label for="Spanish">Spanish</label><br><br>
    <input type="checkbox" id="German" name="language[]" value="German"><label for="German">German</label><br><br>
    <input type="checkbox" id="Chinese" name="language[]" value="Chinese"><label for="Chinese">Chinese</label><br><br>
    <h2>Sign up:</h2>
    <form action="" method="post">
        <label for="first_name">id:</label><br>
        <input type="text" name="id" placeholder="ID" id="id" required><br><br>

        <label for="Full_name">Full Name:</label><br>
        <input type="text" name="Full_name" placeholder="Full Name" id="Full_name" required><br><br>

        <label for="username">Username:</label><br>
        <input type="text" name="username" placeholder="Username" id="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" placeholder="Password" id="password" required><br><br>

        <label for="email">Email address:</label><br>
        <input type="email" name="email" placeholder="Email Address" id="email" required><br><br>
        <label for="gender">Gender:</label><br>
        <select name="gender" id="gender" required>
            <option value="">--Select Gender--</option>
            <option value="Female">Female</option>
            <option value="Male">Male</option>
            <option value="Rather not say">Rather not say</option>
            <option value="Custom">Custom</option>
        </select>
        <br><br>

        <input type="submit" value="Sign Up">
    </form>

    <?php include_once("templates/footer.php"); ?>

    <?php
    require 'includes/db_connect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["id"], $_POST["lfullname"], $_POST["username"], $_POST["email_address"], $_POST["password"])) {
            $id = $_POST["id"];
            $fullname = $_POST["fullname"];
            $username = $_POST["username"];
            $email = $_POST["email_address"];
            $password = $_POST["password"];


            // Use prepared statements to prevent SQL injection
            $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
            $stmt->bind_param("ss", $username, $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                echo "<script>alert('Username or Email has been taken');</script>";
            } else {
                // Insert user into the database
                $stmt = $conn->prepare("INSERT INTO users (id, fullname, username,  email, password) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("ssisss", $id, $fullname, $username, $email, $password);
                if ($stmt->execute()) {
                    echo "<script>alert('Sign up is successful');</script>";
                } else {
                    echo "<script>alert('Sign up Failed');</script>";
                }
            }

            $stmt->close();
            $conn->close();
        }
    }
    ?>
</body>
</html>