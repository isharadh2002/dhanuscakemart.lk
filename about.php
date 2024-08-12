<html>

<head>
    <title>About Us</title>
    <link rel="stylesheet" href="about.css">
    <link rel="icon" href="images/Icon.png">
    <link rel="stylesheet" href="templates/headerstyle.css">
</head>

<body>

    <?php require "templates/header.php" ?>

    <form name="contact" method="get">
        <div>
            <label for="name">Name : </lablel><input type="text" name="name" placeholder="Your name" required>
        </div>
        <div>
            <label for="email">Email : </label><input type="email" name="email" placeholder="Your Email" required>
        </div>
        <div>
            <label for="contact_no">Contact Number : </label><input type="tel" name="contact_no" required>
        </div>
        <div>
            <label for="gender">Gender : </label>
            <label for="male">Male</label><input type="radio" name="gender" id="male" value="Male">
            <label for="female"> Female</label><input type="radio" name="gender" id="female" value="Female">
        </div>
        <div>
            <label for="address">Address : </label><input type="text" name="address" placeholder="Your Address" required>
        </div>
        <div>
            <label for="message">Message : </label><input type="text" name="message" placeholder="Enter your messsage" required>
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>

    <div>
        <?php
        if (isset($_GET['name'])) {

            echo "<h3>Form submitted sucessfully</h3>\n";

            foreach ($_GET as $name => $value) {

                echo "<p>Your " . ucwords(str_replace("_", " ", $name)) . " is : " . $value . "<p>\n";
            }

            echo "<h4>Thank you for visiting our website</h4>";
        }

        ?>
    </div>

</body>

</html>